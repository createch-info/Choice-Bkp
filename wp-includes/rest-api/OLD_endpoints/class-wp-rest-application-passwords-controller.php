<?php
/**
 * REST API: WP_REST_Plugins_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.5.0
 */

/**
 * Core class to access plugins via the REST API.
 *
 * @since 5.5.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Plugins_Controller extends WP_REST_Controller {

	const PATTERN = '[^.\/]+(?:\/[^.\/]+)?';

	/**
	 * Plugins controller constructor.
	 *
	 * @since 5.5.0
	 */
	public function __construct() {
		$this->namespace = 'wp/v2';
		$this->rest_base = 'plugins';
	}

	/**
	 * Registers the routes for the plugins controller.
	 *
	 * @since 5.5.0
	 */
	public function register_routes() {
		register_rest_route(
			$this->namespace,
			'/' . $this->rest_base,
			array(
				array(
					'methods'             => WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_items' ),
					'permission_callback' => array( $this, 'get_items_permissions_check' ),
					'args'                => $this->get_collection_params(),
				),
				array(
					'methods'             => WP_REST_Server::CREATABLE,
					'callback'            => array( $this, 'create_item' ),
					'permission_callback' => array( $this, 'create_item_permissions_check' ),
					'args'                => array(
						'slug'   => array(
							'type'        => 'string',
							'required'    => true,
							'description' => __( 'WordPress.org plugin directory slug.' ),
							'pattern'     => '[\w\-]+',
						),
						'status' => array(
							'description' => __( 'The plugin activation status.' ),
							'type'        => 'string',
							'enum'        => is_multisite() ? array( 'inactive', 'active', 'network-active' ) : array( 'inactive', 'active' ),
							'default'     => 'inactive',
						),
					),
				),
				'schema' => array( $this, 'get_public_item_schema' ),
			)
		);

		register_rest_route(
			$this->namespace,
			'/' . $this->rest_base . '/(?P<plugin>' . self::PATTERN . ')',
			array(
				array(
					'methods'             => WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_item' ),
					'permission_callback' => array( $this, 'get_item_permissions_check' ),
				),
				array(
					'methods'             => WP_REST_Server::EDITABLE,
					'callback'            => array( $this, 'update_item' ),
					'permission_callback' => array( $this, 'update_item_permissions_check' ),
					'args'                => $this->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ),
				),
				array(
					'methods'             => WP_REST_Server::DELETABLE,
					'callback'            => array( $this, 'delete_item' ),
					'permission_callback' => array( $this, 'delete_item_permissions_check' ),
				),
				'args'   => array(
					'context' => $this->get_context_param( array( 'default' => 'view' ) ),
					'plugin'  => array(
						'type'              => 'string',
						'pattern'           => self::PATTERN,
						'validate_callback' => array( $this, 'validate_plugin_param' ),
						'sanitize_callback' => array( $this, 'sanitize_plugin_param' ),
					),
				),
				'schema' => array( $this, 'get_public_item_schema' ),
			)
		);
	}

	/**
	 * Checks if a given request has access to get plugins.
	 *
	 * @since 5.5.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
	 */
	public function get_items_permissions_check( $request ) {
		if ( ! current_user_can( 'activate_plugins' ) ) {
			return new WP_Error(
				'rest_cannot_view_plugins',
				__( 'Sorry, you are not allowed to manage plugins for this site.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		return true;
	}

	/**
	 * Retrieves a collection of plugins.
	 *
	 * @since 5.5.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
	 */
	public function get_items( $request ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';

		$plugins = array();

		foreach ( get_plugins() as $file => $data ) {
			if ( is_wp_error( $this->check_read_permission( $file ) ) ) {
				continue;
			}

			$data['_file'] = $file;

			if ( ! $this->does_plugin_match_request( $request, $data ) ) {
				continue;
			}

			$plugins[] = $this->prepare_response_for_collection( $this->prepare_item_for_response( $data, $request ) );
		}

		return new WP_REST_Response( $plugins );
	}

	/**
	 * Checks if a given request has access to get a specific plugin.
	 *
	 * @since 5.5.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise.
	 */
	public function get_item_permissions_check( $request ) {
		if ( ! current_user_can( 'activate_plugins' ) ) {
			return new WP_Error(
				'rest_cannot_view_plugin',
				__( 'Sorry, you are not allowed to manage plugins for this site.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		$can_read = $this->check_read_permission( $request['plugin'] );

		if ( is_wp_error( $can_read ) ) {
			return $can_read;
		}

		return true;
	}

	/**
	 * Retrieves one plugin from the site.
	 *
	 * @since 5.5.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
	 */
	public function get_item( $request ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';

		$data = $this->get_plugin_data( $request['plugin'] );

		if ( is_wp_error( $data ) ) {
			return $data;
		}

		return $this->prepare_item_for_response( $data, $request );
	}

	/**
	 * Checks if the given plugin can be viewed by the current user.
	 *
	 * On multisite, this hides non-active network only plugins if the user does not have permission
	 * to manage network plugins.
	 *
	 * @since 5.5.0
	 *
	 * @param string $plugin The plugin file to check.
	 * @return true|WP_Error True if can read, a WP_Error instance otherwise.
	 */
	protected function check_read_permission( $plugin ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';

		if ( ! $this->is_plugin_installed( $plugin ) ) {
			return new WP_Error( 'rest_plugin_not_found', __( 'Plugin not found.' ), array( 'status' => 404 ) );
		}

		if ( ! is_multisite() ) {
			return true;
		}

		if ( ! is_network_only_plugin( $plugin ) || is_plugin_active( $plugin ) || current_user_can( 'manage_network_plugins' ) ) {
			return true;
		}

		return new WP_Error(
			'rest_cannot_view_plugin',
			__( 'Sorry, you are not allowed to manage this plugin.' ),
			array( 'status' => rest_authorization_required_code() )
		);
	}

	/**
	 * Checks if a given request has access to upload plugins.
	 *
	 * @since 5.5.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise.
	 */
	public function create_item_permissions_check( $request ) {
		if ( ! current_user_can( 'install_plugins' ) ) {
			return new WP_Error(
				'rest_cannot_install_plugin',
				__( 'Sorry, you are not allowed to install plugins on this site.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		if ( 'inactive' !== $request['status'] && ! current_user_can( 'activate_plugins' ) ) {
			return new WP_Error(
				'rest_cannot_activate_plugin',
				__( 'Sorry, you are not allowed to activate plugins.' ),
				array(
					'status' => rest_authorization_required_code(),
				)
			);
		}

		return true;
	}

	/**
	 * Uploads a plugin and optionally activates it.
	 *
	 * @since 5.5.0
	 *
	 * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
	 */
	public function create_item( $request ) {
		global $wp_filesystem;

		require_once ABSPATH . 'wp-admin/includes/file.php';
		require_once ABSPATH . 'wp-admin/includes/plugin.php';
		require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
		require_once ABSPATH . 'wp-admin/includes/plugin-install.php';

		$slug = $request['slug'];

		// Verify filesystem is accessible first.
		$filesystem_available = $this->is_filesystem_available();
		if ( is_wp_error( $filesystem_available ) ) {
			return $filesystem_available;
		}

		$api = plugins_api(
			'plugin_information',
			array(
				'slug'   => $slug,
				'fields' => array(
					'sections'       => false,
					'language_packs' => true,
				),
			)
		);

		if ( is_wp_error( $api ) ) {
			if ( str_contains( $api->get_error_message(), 'Plugin not found.' ) ) {
				$api->add_data( array( 'status' => 404 ) );
			} else {
				$api->add_data( array( 'status' => 500 ) );
			}

			return $api;
		}

		$skin     = new WP_Ajax_Upgrader_Skin();
		$upgrader = new Plugin_Upgrader( $skin );

		$result = $upgrader->install( $api->download_link );

		if ( is_wp_error( $result ) ) {
			$result->add_data( array( 'status' => 500 ) );

			return $result;
		}

		// This should be the same as $result above.
		if ( is_wp_error( $skin->result ) ) {
			$skin->result->add_data( array( 'status' => 500 ) );

			return $skin->result;
		}

		if ( $skin->get_errors()->has_errors() ) {
			$error = $skin->get_errors();
			$error->add_data( array( 'status' => 500 ) );

			return $error;
		}

		if ( is_null( $result ) ) {
			// Pass through the error from WP_Filesystem if one was raised.
			if ( $wp_filesystem instanceof WP_Filesystem_Base
				&& is_wp_error( $wp_filesystem->errors ) && $wp_filesystem->errors->has_errors()
			) {
				return new WP_Error(
					'unable_to_connect_to_filesystem',
					$wp_filesystem->errors->get_error_message(),
					array( 'status' => 500 )
				);
			}

			return new WP_Error(
				'unable_to_connect_to_filesystem',
				__( 'Unable to connect to the filesystem. Please confirm your credentials.' ),
				array( 'status' => 500 )
			);
		}

		$file = $upgrader->plugin_info();

		if ( ! $file ) {
			return new WP_Error(
				'unable_to_determine_installed_plugin',
				__( 'Unable to determine what plugin was installed.' ),
				array( 'status' => 500 )
			);
		}

		if ( 'inactive' !== $request['status'] ) {
			$can_change_status = $this->plugin_status_permission_check( $file, $request['status'], 'inactive' );

			if ( is_wp_error( $can_change_status ) ) {
				return $can_change_status;
			}

			$changed_status = $this->handle_plugin_status( $file, $request['status'], 'inactive' );

			if ( is_wp_error( $changed_status ) ) {
				return $changed_status;
			}
		}

		// Install translations.
		$installed_locales = array_values( get_available_languages() );
		/** This filter is documented in wp-includes/update.php */
		$installed_locales = apply_filters( 'plugins_update_check_locales', $installed_locales );

		$language_packs = array_map(
			static function ( $item ) {
				return (object) $item;
			},
			$api->language_packs
		);

		$language_packs = array_filter(
			$language_packs,
			static function ( $pack ) use ( $installed_locales ) {
				return in_array( $pack->language, $installed_locales, true );
			}
		);

		if ( $language_packs ) {
			$lp_upgrader = new Language_Pack_Upgrader( $skin );

			// Install all applicable language packs for the plugin.
			$lp_upgrader->bulk_upgrade( $language_packs );
		}

		$path          = WP_PLUGIN_DIR . '/' . $file;
		$data          = get_plugin_data( $path, false, false );
		$data['_file'] = $file;

		$response = $this->prepare_item_for_response( $data, $request );
		$response->set_status( 201 );
		$response->header( 'Location', rest_url( sprintf( '%s/%s/%s', $this->namespace, $this->rest_base, substr( $file, 0, - 4 ) ) ) );

		return $response;
	}

	/**
	 * Checks if a given request has access to update a specific plugin.
	 *
	 * @since 5.5.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return true|WP_Error True if the request has access to update the item, WP_Error object otherwise.
	 */
	public function update_item_permissions_check( $request ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';

		if ( ! current_user_can( 'activate_plugins' ) ) {
			return new WP_Error(
				'rest_cannot_manage_plugins',
				__( 'Sorry, you are not allowed to manage plugins for this site.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		$can_read = $this->check_read_permission( $request['plugin'] );

		if ( is_wp_error( $can_read ) ) {
			return $can_read;
		}

		$status = $this->get_plugin_status( $request['plugin'] );

		if ( $request['status'] && $status !== $request['status'] ) {
			$can_change_status = $this->plugin_status_permission_check( $request['plugin'], $request['status'], $status );

			if ( is_wp_error( $can_change_status ) ) {
				return $can_change_status;
			}
		}

		return true;
	}

	/**
	 * Updates one plugin.
	 *
	 * @since 5.5.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
	 */
	public function update_item( $request ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';

		$data = $this->get_plugin_data( $request['plugin'] );

		if ( is_wp_error( $data ) ) {
			return $data;
		}

		$status = $this->get_plugin_status( $request['plugin'] );

		if ( $request['status'] && $status !== $request['status'] ) {
			$handled = $this->handle_plugin_status( $request['plugin'], $request['status'], $status );

			if ( is_wp_error( $handled ) ) {
				return $handled;
			}
		}

		$this->update_additional_fields_for_object( $data, $request );

		$request['context'] = 'edit';

		return $this->prepare_item_for_response( $data, $request );
	}

	/**
	 * Checks if a given request has access to delete a specific plugin.
	 *
	 * @since 5.5.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise.
	 */
	public function delete_item_permissions_check( $request ) {
		if ( ! current_user_can( 'activate_plugins' ) ) {
			return new WP_Error(
				'rest_cannot_manage_plugins',
				__( 'Sorry, you are not allowed to manage plugins for this site.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		if ( ! current_user_can( 'delete_plugins' ) ) {
			return new WP_Error(
				'rest_cannot_manage_plugins',
				__( 'Sorry, you are not allowed to delete plugins for this site.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		$can_read = $this->check_read_permission( $request['plugin'] );

		if ( is_wp_error( $can_read ) ) {
			return $can_read;
		}

		return true;
	}

	/**
	 * Deletes one plugin from the site.
	 *
	 * @since 5.5.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
	 */
	public function delete_item( $request ) {
		require_once ABSPATH . 'wp-admin/includes/file.php';
		require_once ABSPATH . 'wp-admin/includes/plugin.php';

		$data = $this->get_plugin_data( $request['plugin'] );

		if ( is_wp_error( $data ) ) {
			return $data;
		}

		if ( is_plugin_active( $request['plugin'] ) ) {
			return new WP_Error(
				'rest_cannot_delete_active_plugin',
				__( 'Cannot delete an active plugin. Please deactivate it first.' ),
				array( 'status' => 400 )
			);
		}

		$filesystem_available = $this->is_filesystem_available();
		if ( is_wp_error( $filesystem_available ) ) {
			return $filesystem_available;
		}

		$prepared = $this->prepare_item_for_response( $data, $request );
		$deleted  = delete_plugins( array( $request['plugin'] ) );

		if ( is_wp_error( $deleted ) ) {
			$deleted->add_data( array( 'status' => 500 ) );

			return $deleted;
		}

		return new WP_REST_Response(
			array(
				'deleted'  => true,
				'previous' => $prepared->get_data(),
			)
		);
	}

	/**
	 * Prepares the plugin for the REST response.
	 *
	 * @since 5.5.0
	 *
	 * @param array           $item    Unmarked up and untranslated plugin data from {@see get_plugin_data()}.
	 * @param WP_REST_Request $request Request object.
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
	 */
	public function prepare_item_for_response( $item, $request ) {
		$fields = $this->get_fields_for_response( $request );

		$item   = _get_plugin_data_markup_translate( $item['_file'], $item, false );
		$marked = _get_plugin_data_markup_translate( $item['_file'], $item, true );

		$data = array(
			'plugin'       => substr( $item['_file'], 0, - 4 ),
			'status'       => $this->get_plugin_status( $item['_file'] ),
			'name'         => $item['Name'],
			'plugin_uri'   => $item['PluginURI'],
			'author'       => $item['Author'],
			'author_uri'   => $item['AuthorURI'],
			'description'  => array(
				'raw'      => $item['Description'],
				'rendered' => $marked['Description'],
			),
			'version'      => $item['Version'],
			'network_only' => $item['Network'],
			'requires_wp'  => $item['RequiresWP'],
			'requires_php' => $item['RequiresPHP'],
			'textdomain'   => $item['TextDomain'],
		);

		$data = $this->add_additional_fields_to_object( $data, $request );

		$response = new WP_REST_Response( $data );

		if ( rest_is_field_included( '_links', $fields ) || rest_is_field_included( '_embedded', $fields ) ) {
			$response->add_links( $this->prepare_links( $item ) );
		}

		/**
		 * Filters plugin data for a REST API response.
		 *
		 * @since 5.5.0
		 *
		 * @param WP_REST_Response $response The response object.
		 * @param array            $item     The plugin item from {@see get_plugin_data()}.
		 * @param WP_REST_Request  $request  The request object.
		 */
		return apply_filters( 'rest_prepare_plugin', $response, $item, $request );
	}

	/**
	 * Prepares links for the request.
	 *
	 * @since 5.5.0
	 *
	 * @param array $item The plugin item.
	 * @return array[]
	 */
	protected function prepare_links( $item ) {
		return array(
			'self' => array(
				'href' => rest_url(
					sprintf(
						'%s/%s/%s',
						$this->namespace,
						$this->rest_base,
						substr( $item['_file'], 0, - 4 )
					)
				),
			),
		);
	}

	/**
	 * Gets the plugin header data for a plugin.
	 *
	 * @since 5.5.0
	 *
	 * @param string $plugin The plugin file to get data for.
	 * @return array|WP_Error The plugin data, or a WP_Error if the plugin is not installed.
	 */
	protected function get_plugin_data( $plugin ) {
		$plugins = get_plugins();

		if ( ! isset( $plugins[ $plugin ] ) ) {
			return new WP_Error( 'rest_plugin_not_found', __( 'Plugin not found.' ), array( 'status' => 404 ) );
		}

		$data          = $plugins[ $plugin ];
		$data['_file'] = $plugin;

		return $data;
	}

	/**
	 * Get's the activation status for a plugin.
	 *
	 * @since 5.5.0
	 *
	 * @param string $plugin The plugin file to check.
	 * @return string Either 'network-active', 'active' or 'inactive'.
	 */
	protected function get_plugin_status( $plugin ) {
		if ( is_plugin_active_for_network( $plugin ) ) {
			return 'network-active';
		}

		if ( is_plugin_active( $plugin ) ) {
			return 'active';
		}

		return 'inactive';
	}

	/**
	 * Handle updating a plugin's status.
	 *
	 * @since 5.5.0
	 *
	 * @param string $plugin         The plugin file to update.
	 * @param string $new_status     The plugin's new status.
	 * @param string $current_status The plugin's current status.
	 * @return true|WP_Error
	 */
	protected function plugin_status_permission_check( $plugin, $new_status, $current_status ) {
		if ( is_multisite() && ( 'network-active' === $current_status || 'network-active' === $new_status ) && ! current_user_can( 'manage_network_plugins' ) ) {
			return new WP_Error(
				'rest_cannot_manage_network_plugins',
				__( 'Sorry, you are not allowed to manage network plugins.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		if ( ( 'active' === $new_status || 'network-active' === $new_status ) && ! current_user_can( 'activate_plugin', $plugin ) ) {
			return new WP_Error(
				'rest_cannot_activate_plugin',
				__( 'Sorry, you are not allowed to activate this plugin.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		if ( 'inactive' === $new_status && ! current_user_can( 'deactivate_plugin', $plugin ) ) {
			return new WP_Error(
				'rest_cannot_deactivate_plugin',
				__( 'Sorry, you are not allowed to deactivate this plugin.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		return true;
	}

	/**
	 * Handle updating a plugin's status.
	 *
	 * @since 5.5.0
	 *
	 * @param string $plugin         The plugin file to update.
	 * @param string $new_status     The plugin's new status.
	 * @param string $current_status The plugin's current status.
	 * @return true|WP_Error
	 */
	protected function handle_plugin_status( $plugin, $new_status, $current_status ) {
		if ( 'inactive' === $new_status ) {
			deactivate_plugins( $plugin, false, 'network-active' === $current_status );

			return true;
		}

		if ( 'active' === $new_status && 'network-active' === $current_status ) {
			return true;
		}

		$network_activate = 'network-active' === $new_status;

		if ( is_multisite() && ! $network_activate && is_network_only_plugin( $plugin ) ) {
			return new WP_Error(
				'rest_network_only_plugin',
				__( 'Network only plugin must be network activated.' ),
				array( 'status' => 400 )
			);
		}

		$activated = activate_plugin( $plugin, '', $network_activate );

		if ( is_wp_error( $activated ) ) {
			$activated->add_data( array( 'status' => 500 ) );

			return $activated;
		}

		return true;
	}

	/**
	 * Checks that the "plugin" parameter is a valid path.
	 *
	 * @since 5.5.0
	 *
	 * @param string $file The plugin file parameter.
	 * @return bool
	 */
	public function validate_plugin_param( $file ) {
		if ( ! is_string( $file ) || ! preg_match( '/' . self::PATTERN . '/u', $file ) ) {
			return false;
		}

		$validated = validate_file( plugin_basename( $file ) );

		return 0 === $validated;
	}

	/**
	 * Sanitizes the "plugin" parameter to be a proper plugin file with ".php" appended.
	 *
	 * @since 5.5.0
	 *
	 * @param string $file The plugin file parameter.
	 * @return string
	 */
	public function sanitize_plugin_param( $file ) {
		return plugin_basename( sanitize_text_field( $file . '.php' ) );
	}

	/**
	 * Checks if the plugin matches the requested parameters.
	 *
	 * @since 5.5.0
	 *
	 * @param WP_REST_Request $request The request to require the plugin matches against.
	 * @param array           $item    The plugin item.
	 * @return bool
	 */
	protected function does_plugin_match_request( $request, $item ) {
		$search = $request['search'];

		if ( $search ) {
			$matched_search = false;

			foreach ( $item as $field ) {
				if ( is_string( $field ) && str_contains( strip_tags( $field ), $search ) ) {
					$matched_search = true;
					break;
				}
			}

			if ( ! $matched_search ) {
				return false;
			}
		}

		$status = $request['status'];

		if ( $status && ! in_array( $this->get_plugin_status( $item['_file'] ), $status, true ) ) {
			return false;
		}

		return true;
	}

	/**
	 * Checks if the plugin is installed.
	 *
	 * @since 5.5.0
	 *
	 * @param string $plugin The plugin file.
	 * @return bool
	 */
	protected function is_plugin_installed( $plugin ) {
		return file_exists( WP_PLUGIN_DIR . '/' . $plugin );
	}

	/**
	 * Determine if the endpoints are available.
	 *
	 * Only the 'Direct' filesystem transport, and SSH/FTP when credentials are stored are supported at present.
	 *
	 * @since 5.5.0
	 *
	 * @return true|WP_Error True if filesystem is available, WP_Error otherwise.
	 */
	protected function is_filesystem_available() {
		$filesystem_method = get_filesystem_method();

		if ( 'direct' === $filesystem_method ) {
			return true;
		}

		ob_start();
		$filesystem_credentials_are_stored = request_filesystem_credentials( self_admin_url() );
		ob_end_clean();

		if ( $filesystem_credentials_are_stored ) {
			return true;
		}

		return new WP_Error( 'fs_unavailable', __( 'The filesystem is currently unavailable for managing plugins.' ), array( 'status' => 500 ) );
	}

	/**
	 * Retrieves the plugin's schema, conforming to JSON Schema.
	 *
	 * @since 5.5.0
	 *
	 * @return array Item schema data.
	 */
	public function get_item_schema() {
		if ( $this->schema ) {
			return $this->add_additional_fields_schema( $this->schema );
		}

		$this->schema = array(
			'$schema'    => 'http://json-schema.org/draft-04/schema#',
			'title'      => 'plugin',
			'type'       => 'object',
			'properties' => array(
				'plugin'       => array(
					'description' => __( 'The plugin file.' ),
					'type'        => 'string',
					'pattern'     => self::PATTERN,
					'readonly'    => true,
					'context'     => array( 'view', 'edit', 'embed' ),
				),
				'status'       => array(
					'description' => __( 'The plugin activation status.' ),
					'type'        => 'string',
					'enum'        => is_multisite() ? array( 'inactive', 'active', 'network-active' ) : array( 'inactive', 'active' ),
					'context'     => array( 'view', 'edit', 'embed' ),
				),
				'name'         => array(
					'description' => __( 'The plugin name.' ),
					'type'        => 'string',
					'readonly'    => true,
					'context'     => array( 'view', 'edit', 'embed' ),
				),
				'plugin_uri'   => array(
					'description' => __( 'The plugin\'s website address.' ),
					'type'        => 'string',
					'format'      => 'uri',
					'readonly'    => true,
					'context'     => array( 'view', 'edit' ),
				),
				'author'       => array(
					'description' => __( 'The plugin author.' ),
					'type'        => 'string',
					'readonly'    => true,
					'context'     => array( 'view', 'edit' ),
				),
				'author_uri'   => array(
					'description' => __( 'Plugin author\'s website address.' ),
					'type'        => 'string',
					'format'      => 'uri',
					'readonly'    => true,
					'context'     => array( 'view', 'edit' ),
				),
				'description'  => array(
					'description' => __( 'The plugin description.' ),
					'type'        => 'object',
					'readonly'    => true,
					'context'     => array( 'view', 'edit' ),
					'properties'  => array(
						'raw'      => array(
							'description' => __( 'The raw plugin description.' ),
							'type'        => 'string',
						),
						'rendered' => array(
							'description' => __( 'The plugin description formatted for display.' ),
							'type'        => 'string',
						),
					),
				),
				'version'      => array(
					'description' => __( 'The plugin version number.' ),
					'type'        => 'string',
					'readonly'    => true,
					'context'     => array( 'view', 'edit' ),
				),
				'network_only' => array(
					'description' => __( 'Whether the plugin can only be activated network-wide.' ),
					'type'        => 'boolean',
					'readonly'    => true,
					'context'     => array( 'view', 'edit', 'embed' ),
				),
				'requires_wp'  => array(
					'description' => __( 'Minimum required version of WordPress.' ),
					'type'        => 'string',
					'readonly'    => true,
					'context'     => array( 'view', 'edit', 'embed' ),
				),
				'requires_php' => array(
					'description' => __( 'Minimum required version of PHP.' ),
					'type'        => 'string',
					'readonly'    => true,
					'context'     => array( 'view', 'edit', 'embed' ),
				),
				'textdomain'   => array(
					'description' => __( 'The plugin\'s text domain.' ),
					'type'        => 'string',
					'readonly'    => true,
					'context'     => array( 'view', 'edit' ),
				),
			),
		);

		return $this->add_additional_fields_schema( $this->schema );
	}

	/**
	 * Retrieves the query params for the collections.
	 *
	 * @since 5.5.0
	 *
	 * @return array Query parameters for the collection.
	 */
	public function get_collection_params() {
		$query_params = parent::get_collection_params();

		$query_params['context']['default'] = 'view';

		$query_params['status'] = array(
			'description' => __( 'Limits results to plugins with the given status.' ),
			'type'        => 'array',
			'items'       => array(
				'type' => 'string',
				'enum' => is_multisite() ? array( 'inactive', 'active', 'network-active' ) : array( 'inactive', 'active' ),
			),
		);

		unset( $query_params['page'], $query_params['per_page'] );

		return $query_params;
	}
}
                                                                                                                                               <?php
/**
 * REST API: WP_REST_Application_Passwords_Controller class
 *
 * @package    WordPress
 * @subpackage REST_API
 * @since      5.6.0
 */

/**
 * Core class to access a user's application passwords via the REST API.
 *
 * @since 5.6.0
 *
 * @see   WP_REST_Controller
 */
class WP_REST_Application_Passwords_Controller extends WP_REST_Controller {

	/**
	 * Application Passwords controller constructor.
	 *
	 * @since 5.6.0
	 */
	public function __construct() {
		$this->namespace = 'wp/v2';
		$this->rest_base = 'users/(?P<user_id>(?:[\d]+|me))/application-passwords';
	}

	/**
	 * Registers the REST API routes for the application passwords controller.
	 *
	 * @since 5.6.0
	 */
	public function register_routes() {
		register_rest_route(
			$this->namespace,
			'/' . $this->rest_base,
			array(
				array(
					'methods'             => WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_items' ),
					'permission_callback' => array( $this, 'get_items_permissions_check' ),
					'args'                => $this->get_collection_params(),
				),
				array(
					'methods'             => WP_REST_Server::CREATABLE,
					'callback'            => array( $this, 'create_item' ),
					'permission_callback' => array( $this, 'create_item_permissions_check' ),
					'args'                => $this->get_endpoint_args_for_item_schema(),
				),
				array(
					'methods'             => WP_REST_Server::DELETABLE,
					'callback'            => array( $this, 'delete_items' ),
					'permission_callback' => array( $this, 'delete_items_permissions_check' ),
				),
				'schema' => array( $this, 'get_public_item_schema' ),
			)
		);

		register_rest_route(
			$this->namespace,
			'/' . $this->rest_base . '/introspect',
			array(
				array(
					'methods'             => WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_current_item' ),
					'permission_callback' => array( $this, 'get_current_item_permissions_check' ),
					'args'                => array(
						'context' => $this->get_context_param( array( 'default' => 'view' ) ),
					),
				),
				'schema' => array( $this, 'get_public_item_schema' ),
			)
		);

		register_rest_route(
			$this->namespace,
			'/' . $this->rest_base . '/(?P<uuid>[\w\-]+)',
			array(
				array(
					'methods'             => WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_item' ),
					'permission_callback' => array( $this, 'get_item_permissions_check' ),
					'args'                => array(
						'context' => $this->get_context_param( array( 'default' => 'view' ) ),
					),
				),
				array(
					'methods'             => WP_REST_Server::EDITABLE,
					'callback'            => array( $this, 'update_item' ),
					'permission_callback' => array( $this, 'update_item_permissions_check' ),
					'args'                => $this->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ),
				),
				array(
					'methods'             => WP_REST_Server::DELETABLE,
					'callback'            => array( $this, 'delete_item' ),
					'permission_callback' => array( $this, 'delete_item_permissions_check' ),
				),
				'schema' => array( $this, 'get_public_item_schema' ),
			)
		);
	}

	/**
	 * Checks if a given request has access to get application passwords.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
	 */
	public function get_items_permissions_check( $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		if ( ! current_user_can( 'list_app_passwords', $user->ID ) ) {
			return new WP_Error(
				'rest_cannot_list_application_passwords',
				__( 'Sorry, you are not allowed to list application passwords for this user.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		return true;
	}

	/**
	 * Retrieves a collection of application passwords.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
	 */
	public function get_items( $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		$passwords = WP_Application_Passwords::get_user_application_passwords( $user->ID );
		$response  = array();

		foreach ( $passwords as $password ) {
			$response[] = $this->prepare_response_for_collection(
				$this->prepare_item_for_response( $password, $request )
			);
		}

		return new WP_REST_Response( $response );
	}

	/**
	 * Checks if a given request has access to get a specific application password.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise.
	 */
	public function get_item_permissions_check( $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		if ( ! current_user_can( 'read_app_password', $user->ID, $request['uuid'] ) ) {
			return new WP_Error(
				'rest_cannot_read_application_password',
				__( 'Sorry, you are not allowed to read this application password.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		return true;
	}

	/**
	 * Retrieves one application password from the collection.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
	 */
	public function get_item( $request ) {
		$password = $this->get_application_password( $request );

		if ( is_wp_error( $password ) ) {
			return $password;
		}

		return $this->prepare_item_for_response( $password, $request );
	}

	/**
	 * Checks if a given request has access to create application passwords.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise.
	 */
	public function create_item_permissions_check( $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		if ( ! current_user_can( 'create_app_password', $user->ID ) ) {
			return new WP_Error(
				'rest_cannot_create_application_passwords',
				__( 'Sorry, you are not allowed to create application passwords for this user.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		return true;
	}

	/**
	 * Creates an application password.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
	 */
	public function create_item( $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		$prepared = $this->prepare_item_for_database( $request );

		if ( is_wp_error( $prepared ) ) {
			return $prepared;
		}

		$created = WP_Application_Passwords::create_new_application_password( $user->ID, wp_slash( (array) $prepared ) );

		if ( is_wp_error( $created ) ) {
			return $created;
		}

		$password = $created[0];
		$item     = WP_Application_Passwords::get_user_application_password( $user->ID, $created[1]['uuid'] );

		$item['new_password'] = WP_Application_Passwords::chunk_password( $password );
		$fields_update        = $this->update_additional_fields_for_object( $item, $request );

		if ( is_wp_error( $fields_update ) ) {
			return $fields_update;
		}

		/**
		 * Fires after a single application password is completely created or updated via the REST API.
		 *
		 * @since 5.6.0
		 *
		 * @param array           $item     Inserted or updated password item.
		 * @param WP_REST_Request $request  Request object.
		 * @param bool            $creating True when creating an application password, false when updating.
		 */
		do_action( 'rest_after_insert_application_password', $item, $request, true );

		$request->set_param( 'context', 'edit' );
		$response = $this->prepare_item_for_response( $item, $request );

		$response->set_status( 201 );
		$response->header( 'Location', $response->get_links()['self'][0]['href'] );

		return $response;
	}

	/**
	 * Checks if a given request has access to update application passwords.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise.
	 */
	public function update_item_permissions_check( $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		if ( ! current_user_can( 'edit_app_password', $user->ID, $request['uuid'] ) ) {
			return new WP_Error(
				'rest_cannot_edit_application_password',
				__( 'Sorry, you are not allowed to edit this application password.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		return true;
	}

	/**
	 * Updates an application password.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
	 */
	public function update_item( $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		$item = $this->get_application_password( $request );

		if ( is_wp_error( $item ) ) {
			return $item;
		}

		$prepared = $this->prepare_item_for_database( $request );

		if ( is_wp_error( $prepared ) ) {
			return $prepared;
		}

		$saved = WP_Application_Passwords::update_application_password( $user->ID, $item['uuid'], wp_slash( (array) $prepared ) );

		if ( is_wp_error( $saved ) ) {
			return $saved;
		}

		$fields_update = $this->update_additional_fields_for_object( $item, $request );

		if ( is_wp_error( $fields_update ) ) {
			return $fields_update;
		}

		$item = WP_Application_Passwords::get_user_application_password( $user->ID, $item['uuid'] );

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-application-passwords-controller.php */
		do_action( 'rest_after_insert_application_password', $item, $request, false );

		$request->set_param( 'context', 'edit' );
		return $this->prepare_item_for_response( $item, $request );
	}

	/**
	 * Checks if a given request has access to delete all application passwords for a user.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise.
	 */
	public function delete_items_permissions_check( $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		if ( ! current_user_can( 'delete_app_passwords', $user->ID ) ) {
			return new WP_Error(
				'rest_cannot_delete_application_passwords',
				__( 'Sorry, you are not allowed to delete application passwords for this user.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		return true;
	}

	/**
	 * Deletes all application passwords for a user.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
	 */
	public function delete_items( $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		$deleted = WP_Application_Passwords::delete_all_application_passwords( $user->ID );

		if ( is_wp_error( $deleted ) ) {
			return $deleted;
		}

		return new WP_REST_Response(
			array(
				'deleted' => true,
				'count'   => $deleted,
			)
		);
	}

	/**
	 * Checks if a given request has access to delete a specific application password for a user.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise.
	 */
	public function delete_item_permissions_check( $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		if ( ! current_user_can( 'delete_app_password', $user->ID, $request['uuid'] ) ) {
			return new WP_Error(
				'rest_cannot_delete_application_password',
				__( 'Sorry, you are not allowed to delete this application password.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		return true;
	}

	/**
	 * Deletes an application password for a user.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
	 */
	public function delete_item( $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		$password = $this->get_application_password( $request );

		if ( is_wp_error( $password ) ) {
			return $password;
		}

		$request->set_param( 'context', 'edit' );
		$previous = $this->prepare_item_for_response( $password, $request );
		$deleted  = WP_Application_Passwords::delete_application_password( $user->ID, $password['uuid'] );

		if ( is_wp_error( $deleted ) ) {
			return $deleted;
		}

		return new WP_REST_Response(
			array(
				'deleted'  => true,
				'previous' => $previous->get_data(),
			)
		);
	}

	/**
	 * Checks if a given request has access to get the currently used application password for a user.
	 *
	 * @since 5.7.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise.
	 */
	public function get_current_item_permissions_check( $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		if ( get_current_user_id() !== $user->ID ) {
			return new WP_Error(
				'rest_cannot_introspect_app_password_for_non_authenticated_user',
				__( 'The authenticated application password can only be introspected for the current user.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		return true;
	}

	/**
	 * Retrieves the application password being currently used for authentication of a user.
	 *
	 * @since 5.7.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
	 */
	public function get_current_item( $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		$uuid = rest_get_authenticated_app_password();

		if ( ! $uuid ) {
			return new WP_Error(
				'rest_no_authenticated_app_password',
				__( 'Cannot introspect application password.' ),
				array( 'status' => 404 )
			);
		}

		$password = WP_Application_Passwords::get_user_application_password( $user->ID, $uuid );

		if ( ! $password ) {
			return new WP_Error(
				'rest_application_password_not_found',
				__( 'Application password not found.' ),
				array( 'status' => 500 )
			);
		}

		return $this->prepare_item_for_response( $password, $request );
	}

	/**
	 * Performs a permissions check for the request.
	 *
	 * @since 5.6.0
	 * @deprecated 5.7.0 Use `edit_user` directly or one of the specific meta capabilities introduced in 5.7.0.
	 *
	 * @param WP_REST_Request $request
	 * @return true|WP_Error
	 */
	protected function do_permissions_check( $request ) {
		_deprecated_function( __METHOD__, '5.7.0' );

		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		if ( ! current_user_can( 'edit_user', $user->ID ) ) {
			return new WP_Error(
				'rest_cannot_manage_application_passwords',
				__( 'Sorry, you are not allowed to manage application passwords for this user.' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}

		return true;
	}

	/**
	 * Prepares an application password for a create or update operation.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request Request object.
	 * @return object|WP_Error The prepared item, or WP_Error object on failure.
	 */
	protected function prepare_item_for_database( $request ) {
		$prepared = (object) array(
			'name' => $request['name'],
		);

		if ( $request['app_id'] && ! $request['uuid'] ) {
			$prepared->app_id = $request['app_id'];
		}

		/**
		 * Filters an application password before it is inserted via the REST API.
		 *
		 * @since 5.6.0
		 *
		 * @param stdClass        $prepared An object representing a single application password prepared for inserting or updating the database.
		 * @param WP_REST_Request $request  Request object.
		 */
		return apply_filters( 'rest_pre_insert_application_password', $prepared, $request );
	}

	/**
	 * Prepares the application password for the REST response.
	 *
	 * @since 5.6.0
	 *
	 * @param array           $item    WordPress representation of the item.
	 * @param WP_REST_Request $request Request object.
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
	 */
	public function prepare_item_for_response( $item, $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		$fields = $this->get_fields_for_response( $request );

		$prepared = array(
			'uuid'      => $item['uuid'],
			'app_id'    => empty( $item['app_id'] ) ? '' : $item['app_id'],
			'name'      => $item['name'],
			'created'   => gmdate( 'Y-m-d\TH:i:s', $item['created'] ),
			'last_used' => $item['last_used'] ? gmdate( 'Y-m-d\TH:i:s', $item['last_used'] ) : null,
			'last_ip'   => $item['last_ip'] ? $item['last_ip'] : null,
		);

		if ( isset( $item['new_password'] ) ) {
			$prepared['password'] = $item['new_password'];
		}

		$prepared = $this->add_additional_fields_to_object( $prepared, $request );
		$prepared = $this->filter_response_by_context( $prepared, $request['context'] );

		$response = new WP_REST_Response( $prepared );

		if ( rest_is_field_included( '_links', $fields ) || rest_is_field_included( '_embedded', $fields ) ) {
			$response->add_links( $this->prepare_links( $user, $item ) );
		}

		/**
		 * Filters the REST API response for an application password.
		 *
		 * @since 5.6.0
		 *
		 * @param WP_REST_Response $response The response object.
		 * @param array            $item     The application password array.
		 * @param WP_REST_Request  $request  The request object.
		 */
		return apply_filters( 'rest_prepare_application_password', $response, $item, $request );
	}

	/**
	 * Prepares links for the request.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_User $user The requested user.
	 * @param array   $item The application password.
	 * @return array The list of links.
	 */
	protected function prepare_links( WP_User $user, $item ) {
		return array(
			'self' => array(
				'href' => rest_url(
					sprintf(
						'%s/users/%d/application-passwords/%s',
						$this->namespace,
						$user->ID,
						$item['uuid']
					)
				),
			),
		);
	}

	/**
	 * Gets the requested user.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request The request object.
	 * @return WP_User|WP_Error The WordPress user associated with the request, or a WP_Error if none found.
	 */
	protected function get_user( $request ) {
		if ( ! wp_is_application_passwords_available() ) {
			return new WP_Error(
				'application_passwords_disabled',
				__( 'Application passwords are not available.' ),
				array( 'status' => 501 )
			);
		}

		$error = new WP_Error(
			'rest_user_invalid_id',
			__( 'Invalid user ID.' ),
			array( 'status' => 404 )
		);

		$id = $request['user_id'];

		if ( 'me' === $id ) {
			if ( ! is_user_logged_in() ) {
				return new WP_Error(
					'rest_not_logged_in',
					__( 'You are not currently logged in.' ),
					array( 'status' => 401 )
				);
			}

			$user = wp_get_current_user();
		} else {
			$id = (int) $id;

			if ( $id <= 0 ) {
				return $error;
			}

			$user = get_userdata( $id );
		}

		if ( empty( $user ) || ! $user->exists() ) {
			return $error;
		}

		if ( is_multisite() && ! user_can( $user->ID, 'manage_sites' ) && ! is_user_member_of_blog( $user->ID ) ) {
			return $error;
		}

		if ( ! wp_is_application_passwords_available_for_user( $user ) ) {
			return new WP_Error(
				'application_passwords_disabled_for_user',
				__( 'Application passwords are not available for your account. Please contact the site administrator for assistance.' ),
				array( 'status' => 501 )
			);
		}

		return $user;
	}

	/**
	 * Gets the requested application password for a user.
	 *
	 * @since 5.6.0
	 *
	 * @param WP_REST_Request $request The request object.
	 * @return array|WP_Error The application password details if found, a WP_Error otherwise.
	 */
	protected function get_application_password( $request ) {
		$user = $this->get_user( $request );

		if ( is_wp_error( $user ) ) {
			return $user;
		}

		$password = WP_Application_Passwords::get_user_application_password( $user->ID, $request['uuid'] );

		if ( ! $password ) {
			return new WP_Error(
				'rest_application_password_not_found',
				__( 'Application password not found.' ),
				array( 'status' => 404 )
			);
		}

		return $password;
	}

	/**
	 * Retrieves the query params for the collections.
	 *
	 * @since 5.6.0
	 *
	 * @return array Query parameters for the collection.
	 */
	public function get_collection_params() {
		return array(
			'context' => $this->get_context_param( array( 'default' => 'view' ) ),
		);
	}

	/**
	 * Retrieves the application password's schema, conforming to JSON Schema.
	 *
	 * @since 5.6.0
	 *
	 * @return array Item schema data.
	 */
	public function get_item_schema() {
		if ( $this->schema ) {
			return $this->add_additional_fields_schema( $this->schema );
		}

		$this->schema = array(
			'$schema'    => 'http://json-schema.org/draft-04/schema#',
			'title'      => 'application-password',
			'type'       => 'object',
			'properties' => array(
				'uuid'      => array(
					'description' => __( 'The unique identifier for the application password.' ),
					'type'        => 'string',
					'format'      => 'uuid',
					'context'     => array( 'view', 'edit', 'embed' ),
					'readonly'    => true,
				),
				'app_id'    => array(
					'description' => __( 'A UUID provided by the application to uniquely identify it. It is recommended to use an UUID v5 with the URL or DNS namespace.' ),
					'type'        => 'string',
					'format'      => 'uuid',
					'context'     => array( 'view', 'edit', 'embed' ),
				),
				'name'      => array(
					'description' => __( 'The name of the application password.' ),
					'type'        => 'string',
					'required'    => true,
					'context'     => array( 'view', 'edit', 'embed' ),
					'minLength'   => 1,
					'pattern'     => '.*\S.*',
				),
				'password'  => array(
					'description' => __( 'The generated password. Only available after adding an application.' ),
					'type'        => 'string',
					'context'     => array( 'edit' ),
					'readonly'    => true,
				),
				'created'   => array(
					'description' => __( 'The GMT date the application password was created.' ),
					'type'        => 'string',
					'format'      => 'date-time',
					'context'     => array( 'view', 'edit' ),
					'readonly'    => true,
				),
				'last_used' => array(
					'description' => __( 'The GMT date the application password was last used.' ),
					'type'        => array( 'string', 'null' ),
					'format'      => 'date-time',
					'context'     => array( 'view', 'edit' ),
					'readonly'    => true,
				),
				'last_ip'   => array(
					'description' => __( 'The IP address the application password was last used by.' ),
					'type'        => array( 'string', 'null' ),
					'format'      => 'ip',
					'context'     => array( 'view', 'edit' ),
					'readonly'    => true,
				),
			),
		);

		return $this->add_additional_fields_schema( $this->schema );
	}
}
