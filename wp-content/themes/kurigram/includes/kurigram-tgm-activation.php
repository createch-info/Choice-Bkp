<?php
/* Redirect on theme activation */
add_action( 'admin_init', 'kurigram_theme_activation_redirect' );
function kurigram_theme_activation_redirect() {
    global $pagenow;
    if ( "themes.php" == $pagenow && is_admin() && isset( $_GET['activated'] ) ) {
       wp_redirect( admin_url("admin.php?page=kurigram_lc") );
	   exit;
    }
}

require_once "kurigramBase.php";
class kurigram {
	public $plugin_file=__FILE__;
	public $responseObj;
	public $licenseMessage;
	public $showMessage=false;
	public $slug="kurigram";
	function __construct() {
		add_action( 'admin_print_styles', [ $this, 'SetAdminStyle' ] );
		$licenseKey=get_option("kurigram_lic_Key","");
		$liceEmail=get_option( "kurigram_lic_email","");
		$templateDir=get_stylesheet_directory(); //or dirname(__FILE__);
		if(kurigramBase::CheckWPPlugin($licenseKey,$liceEmail,$this->licenseMessage,$this->responseObj,$templateDir."/style.css")){
			add_action( 'admin_menu', [$this,'ActiveAdminMenu'],99999);
			add_action( 'admin_post_kurigram_el_deactivate_license', [ $this, 'action_deactivate_license' ] );
			//$this->licenselMessage=$this->mess;
			//***Write you plugin's code here***
			
			
			
/**
* TGM Plugin activation
 */
require_once get_template_directory() .'/includes/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'kurigram_register_plugin_require' );

function kurigram_register_plugin_require() {

	$plugins = array(

		  array(
		   'name'               => esc_html__( 'kurigrambd Helper Plugin', 'kurigram' ),
		   'slug'               => 'kurigrambd-helper-plugin', 
		   'source'             => esc_url('https://demo.themexbd.com/rtl/kurigram/wp-content/plugins/kurigrambd-helper-plugin.zip'), 
		   'required'           => true, 
		   'force_activation'   => false, 
		   'force_deactivation' => false, 
		  ),
		array(
			'name'               => esc_html__( 'Contact form 7', 'kurigram' ),
			'slug'               => 'contact-form-7',
			'required'           => true, 			
		),
		array(
			'name'               => esc_html__( 'Cmb2', 'kurigram' ),
			'slug'               => 'cmb2',
			'required'           => true, 			
		),
		array(
			'name'               => esc_html__( 'Mailchimp for WP', 'kurigram' ),
			'slug'               => 'mailchimp-for-wp',
			'required'           => false, 			
		),		
		array(
			'name'               => esc_html__( 'Redux-framework', 'kurigram' ),
			'slug'               => 'redux-framework',
			'required'           => true, 			
		),
		array(
			'name'               => esc_html__( 'Elementor', 'kurigram' ),
			'slug'               => 'elementor',
			'required'           => true, 			
		),		
		array(
			'name'               => esc_html__( 'One Click Demo Import', 'kurigram' ),
			'slug'               => 'one-click-demo-import',
			'required'           => false, 			
		),
		
		
		
		

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}
			
			
			
			
			

		}else{
			if(!empty($licenseKey) && !empty($this->licenseMessage)){
				$this->showMessage=true;
			}
			update_option("kurigram_lic_Key","") || add_option("kurigram_lic_Key","");
			add_action( 'admin_post_kurigram_el_activate_license', [ $this, 'action_activate_license' ] );
			add_action( 'admin_menu', [$this,'InactiveMenu']);
		}
        }
	function SetAdminStyle() {
		wp_register_style( "kurigramLic", get_theme_file_uri("/includes/_lic_style.css"),10);
		wp_enqueue_style( "kurigramLic" );
	}
	function ActiveAdminMenu(){
		 
		add_menu_page (  "kurigram", "kurigram", "activate_plugins", "kurigram_lc", [$this,"Activated"], " dashicons-star-filled ");
		//add_submenu_page(  $this->slug, "kurigram License", "License Info", "activate_plugins",  $this->slug."_license", [$this,"Activated"] );

	}
	function InactiveMenu() {
		add_menu_page( "kurigram", "kurigram", 'activate_plugins', "kurigram_lc",  [$this,"LicenseForm"], " dashicons-star-filled " );
		
	}
	function action_activate_license(){
		check_admin_referer( 'el-license' );
		$licenseKey=!empty($_POST['el_license_key'])?$_POST['el_license_key']:"";
		$licenseEmail=!empty($_POST['el_license_email'])?$_POST['el_license_email']:"";
		update_option("kurigram_lic_Key",$licenseKey) || add_option("kurigram_lic_Key",$licenseKey);
		update_option("kurigram_lic_email",$licenseEmail) || add_option("kurigram_lic_email",$licenseEmail);
		update_option('_site_transient_update_themes','');
		wp_safe_redirect(admin_url( 'admin.php?page='.$this->slug.'_lc'));
	}
	function action_deactivate_license() {
		check_admin_referer( 'el-license' );
		$message="";
		if(kurigramBase::RemoveLicenseKey(__FILE__,$message)){
			update_option("kurigram_lic_Key","") || add_option("kurigram_lic_Key","");
			update_option('_site_transient_update_themes','');
		}
    	wp_safe_redirect(admin_url( 'admin.php?page='.$this->slug.'_lc'));
    }
	function Activated(){
		?>
        <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
            <input type="hidden" name="action" value="kurigram_el_deactivate_license"/>
            <div class="el-license-container">
                <h3 class="el-license-title"><i class="dashicons-before dashicons-star-filled"></i> <?php _e("kurigram License Info",$this->slug);?> </h3>
                <hr>
                <ul class="el-license-info">
                <li>
                    <div>
                        <span class="el-license-info-title"><?php _e("Status",$this->slug);?></span>

                        <?php if ( $this->responseObj->is_valid ) : ?>
                            <span class="el-license-valid"><?php _e("Valid",$this->slug);?></span>
                        <?php else : ?>
                            <span class="el-license-valid"><?php _e("Invalid",$this->slug);?></span>
                        <?php endif; ?>
                    </div>
                </li>

                <li>
                    <div>
                        <span class="el-license-info-title"><?php _e("License Type",$this->slug);?></span>
                        <?php echo $this->responseObj->license_title; ?>
                    </div>
                </li>

               <li>
                   <div>
                       <span class="el-license-info-title"><?php _e("License Expired on",$this->slug);?></span>
                       <?php echo $this->responseObj->expire_date;
                       if(!empty($this->responseObj->expire_renew_link)){
                           ?>
                           <a target="_blank" class="el-blue-btn" href="<?php echo $this->responseObj->expire_renew_link; ?>">Renew</a>
                           <?php
                       }
                       ?>
                   </div>
               </li>

               <li>
                   <div>
                       <span class="el-license-info-title"><?php _e("Support Expired on",$this->slug);?></span>
                       <?php
                           echo $this->responseObj->support_end;
                        if(!empty($this->responseObj->support_renew_link)){
                            ?>
                               <a target="_blank" class="el-blue-btn" href="<?php echo $this->responseObj->support_renew_link; ?>">Renew</a>
                            <?php
                        }
                       ?>
                   </div>
               </li>
                <li>
                    <div>
                        <span class="el-license-info-title"><?php _e("Your License Key",$this->slug);?></span>
                        <span class="el-license-key"><?php echo esc_attr( substr($this->responseObj->license_key,0,9)."XXXXXXXX-XXXXXXXX".substr($this->responseObj->license_key,-9) ); ?></span>
                    </div>
                </li>
                </ul>
                <div class="el-license-active-btn">
                    <?php wp_nonce_field( 'el-license' ); ?>
                    <?php submit_button('Deactivate'); ?>
                </div>
            </div>
        </form>
		<?php
	}
	
	function LicenseForm() {
		?>
        <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
            <input type="hidden" name="action" value="kurigram_el_activate_license"/>
            <div class="el-license-container">
                <h3 class="el-license-title"><i class="dashicons-before dashicons-star-filled"></i> <?php _e("kurigram Theme Licensing",$this->slug);?></h3>
                <hr>
				<?php
					if(!empty($this->showMessage) && !empty($this->licenseMessage)){
						?>
                        <div class="notice notice-error is-dismissible">
                            <p><?php echo $this->licenseMessage; ?></p>
                        </div>
						<?php
					}
				?>
                <p><?php _e("Enter your license key here, to activate the product, and get full feature updates and premium support.",$this->slug);?></p>
<ol>
    <li><?php _e("Write your licnese key details",$this->slug);?></li>
    <li><?php _e("Go license-key folder. here you find license key",$this->slug);?></li>
</ol>
    		    <div class="el-license-field">
    			    <label for="el_license_key"><?php _e("License code",$this->slug);?></label>
    			    <input type="text" class="regular-text code" name="el_license_key" size="50" placeholder="xxxxxxxx-xxxxxxxx-xxxxxxxx-xxxxxxxx" required="required">
    		    </div>
                <div class="el-license-field">
                    <label for="el_license_key"><?php _e("Email Address",$this->slug);?></label>
                    <?php
                        $purchaseEmail   = get_option( "kurigram_lic_email", get_bloginfo( 'admin_email' ));
                    ?>
                    <input type="text" class="regular-text code" name="el_license_email" size="50" value="<?php echo $purchaseEmail; ?>" placeholder="" required="required">
                    <div><small><?php _e("We will send update news of this product by this email address, don't worry, we hate spam",$this->slug);?></small></div>
                </div>
                <div class="el-license-active-btn">
					<?php wp_nonce_field( 'el-license' ); ?>
					<?php submit_button('Activate'); ?>
                </div>
            </div>
        </form>
		<?php
	}
}

new kurigram();