<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "kurigram_opt";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'submenu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Theme Options', 'kurigram' ),
        'page_title'           => esc_html__( 'Theme Options', 'kurigram' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */



    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('General', 'kurigram'),
        'id'        => 'main_theme_option',
        'desc'      => esc_html__('Welcome Our Theme Option', 'kurigram'),
        'customizer_width' => '400px',
        'icon'      => 'el-icon-cog',
    ) );



    
    
    
Redux::setSection( $opt_name, array(
	'title'     => esc_html__('Global Color Option', 'kurigram'),
	'id'        => 'main_logo_id',
	'customizer_width' => '400px',
	'icon'      => 'el-icon-cog',
	 'fields'    => array(
			array(
				'id'          => 'kurigram_nnotice_typography',
				'type'        => 'info', 
				'title'       => esc_html__('Welcome Our Global Color Option', 'kurigram'),
			),
			array(
				'id'          => 'kurigram_nnoticec_typography',
				'type'        => 'info', 
				'title'       => esc_html__('Note: you can change theme color 2 ways. One Global Option. if you set any color from here, it will show everywhere and second option is Every Section. you need to go every section area. there you can find the color option and you need change the color there.', 'kurigram'),
			),				
	 )
) );

/*========================
kurigram Typography FIELD
=========================*/
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Global Typography', 'kurigram'),
        'id'         => 'kurigram_tyfo_page',  
        'icon'       => 'el el-circle-arrow-right',
		'subsection' => true,
        'fields'    => array(				
				array(
					'id'          => 'kurigram_gbody_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Global Body Typography', 'kurigram'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'text-align'   => false,
					'color'   => false,					
					'output'      => array('
						body,p						
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'kurigram'),
					'default'     => array(
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'kurigram_gheading_all_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Global Heading Typography', 'kurigram'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'text-align'   => false,
					'color'   => false,										
					'output'      => array('
						h1,
						h2,
						h3,
						h4,
						h5,
						h6,
						h1 a,
						h2 a,
						h3 a,
						h4 a,
						h5 a,
						h6 a			
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'kurigram'),
					'default'     => array(
						'font-style' => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'kurigram_gmenu_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Global Menu Typography', 'kurigram'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'text-align'   => false,
					'color'   => false,
					'output'      => array('
						.kurigram_menu > ul > li > a,.kurigram_menu ul .sub-menu li a						
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'kurigram'),
					'default'     => array(
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'kurigram_gbtn_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Global Button Typography', 'kurigram'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'text-align'   => false,
					'color'   => false,
					'font-size'   => false,
					'output'      => array('
						button,a.btn,a.dtbtn,.btn,.learn_btn,.witr_feature_btn_f a,.witr_feature_btn_3d a,.feature_btn a,.witr_ser_btnb a,.service-btn > a,.witr_btn,.witr_bbtn,.witr_gbtn,.witr_gbbtn,.kurigram_button a,.witr_sbtn_s8 a					
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'kurigram'),
					'default'     => array(
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),				
								
            ),
    ) );
	
	
	/*  global color */			
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Global Color', 'kurigram'),
        'id'         => 'twr_title_option',  
		'subsection' => true,
        'icon'       => 'el el-circle-arrow-right',
        'fields'    => array(
                array(								
                    'id'        => 'twr_global_colorlink',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Link Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						a
					'
					)
                ),
                array(								
                    'id'        => 'twr_global_colorlink_hover',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Link Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						a:hover					
					'
					)
                ),				
                array(								
                    'id'        => 'twr_global_colortext',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Content Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					
						body,p,
						.blog-left-side .widget a,
						.twr_product_sidebar a,
						.footer-menu ul li a
					
					'
					)
                ),
				array(								
                    'id'        => 'twr_global_colortitle',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Title Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						h1,
						h2,
						h3,
						h4,
						h5,
						h6,
						h1 a,
						h2 a,
						h3 a,
						h4 a,
						h5 a,
						h6 a,
						.twr_product_sidebar .product_list_widget li a,
						.mini_shop_content a i,
						.twr_mini_cart .woocommerce ul.cart_list li a, .twr_mini_cart .woocommerce ul.product_list_widget li a
					
					'
					)
                ),	
				array(								
                    'id'        => 'twr_global_colormenu',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Menu Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						.kurigram_menu > ul > li > a,
						.kurigram_menu ul .sub-menu li a
					
					'
					)
                ),			
		
                array(								
                    'id'        => 'twr_global_colort_hover',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Main Color, Title & Text Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '
.twr_pretwr_loader_pre .twr_animation .twr_text_pre, .twr_pretwr_loader_pre .twr_animation .twr_text_pre .twr_textletter_pre:before,
.blog-left-side .widget ul li a:hover,
.blog-left-side .widget ul li:hover::before,
.widget_categories ul li:hover:before,
.widget_archive ul li:hover:before,
.widget_categories ul li a:hover,
.widget_archive ul li a:hover,
.r-post-content h3:hover,
.r-post-content h3 a:hover,
.kurigram_menu > ul > li.current > a,
.kurigram_menu > ul > li:hover > a,
.creative_header_menu > ul > li:hover > a,
.kurigram_menu ul .sub-menu li:hover > a,
.kurigram_menu ul .sub-menu .sub-menu li:hover > a,
.kurigram_menu ul .sub-menu .sub-menu .sub-menu li:hover > a,
.kurigram_menu ul .sub-menu .sub-menu .sub-menu .sub-menu li:hover > a,
.kurigram_nav_area.prefix .kurigram_menu > ul > li.current > a,
.prefix .right_close_class .right_sideber_menu i,
.right_close_class .right_sideber_menu i,
.btn.btn-bordered,
.breadcumb-inner li a:hover,
.kurigram-blog-meta-left i,
.not-found-inner h2,
.footer-top-address h2 span ,
.footer-top-inner h2 span,
.recent-post-text h4 a:hover ,
.footer-middle .recent-post-text > h4 a:hover,
.copy-right-text a,
.copy-right-text a:hover,
.footer-menu ul li a:hover,
.creative_header_icon i,
.top_crmenu_i_list li a i,
.blog-content h2 a:hover,
.kurigram-blog-meta-left a:hover,
.kurigram-blog-meta-left span:hover,
.kurigram-blog-meta-left i ,
.blog-page-title h2 a:hover,
.footer-middle .mc4wp-form-fields button:hover,
.tutor-star-rating-group,
.tutor-course-loop-meta>div i,
.tutor-course-filter-wrapper>div:first-child label:hover,
.tutor-wrap nav.course-enrolled-nav ul li.active a,
.witr_ser_btnb a:hover,
.tbd_product_title h2 a:hover,
.tbd_item_info a:hover,
.woocommerce-info::before ,
.woocommerce div.product p.price, 
.woocommerce div.product span.price,
.woocommerce div.product .stock,
.woocommerce table.witr_product_cart tbody tr td a.witr_cart_delete,
.woocommerce-message::before,
.woocommerce-MyAccount-content a,
.tbd_product_title h2:hover,
.tbd_product_title h3:hover,
.twr_mini_cart span.woocommerce-Price-amount.amount,
.woocommerce div.product p.price,
.woocommerce div.product span.price	,
.woocommerce .twr_product_sidebar span.woocommerce-Price-amount.amount,
.reply_date span.span_right,
a#cancel-comment-reply-link,


.pluincss-color,
.prot_content h3 a:hover,
.witr_taba_style1 .nav-tabs .nav-link,
.banner-content a.witr_btns2,
.w_apps_button a,
span.time-counts,
.counterdowns p,
.apartment_text h1,
.witr_apartment_form form select,
.witr_apartment_form .const_btn,
.witr_content_casei p,
.witr_case_btnb a,
.kurigram_content p span,
.kurigram_content h5 span,
.kurigram_content h2 span,
.kurigram_content h3 span,
.a_active i,
.witr_bbtn,
.witr_gbbtn,
.witr_vbbtn i,
.witr_vbbgbtn i,
.wblog-content h5 > a:hover,
.wblog-content span i:hover,
.witr_blog_metan span i,
.witr_blog_con span i,
.witr_blog_con h2 a:hover,
.witr_post_Author .nameAuthor,
.witr_blog_con6 span i:hover,
.witr_blog_con6 h2 a:hover,
.witr_post_Author6 .nameAuthor:hover,
.witr_post_Author6 .comment:hover,
.witr_singleBlog:hover .learn_btn,
.witr_blog_area11 .learn_btn,
.wbutton_right_icon a,
.blog-page-title_adn a:hover,
.blog-content_adn h2 a:hover,
.kurigram-blog-meta-left_adn a:hover,
.kurigram-blog-meta-left_adn span:hover,
.kurigram-blog-meta-left_adn i,
.learn_btn:hover,
.learn_btn i,
.witr_banner_content h1 span,
.witr_banner_content h2 span,
.witr_banner_content a i,
.witr_banner_content form button,
.banner-content h1 span,
.banner-content h2 span,
.banner-content h3 span,
.butn,
.banner-content.content-4 ul li a i,
.banner-content input,
.send_message input.wpcf7-submit:hover,
.mean-container .mean-nav ul li a:hover,
.slider_btn .witr_btn.active,
.witr_section_title_inner h2,
.witr_section_title_inner p span a,
.witr_section_title_inner p span,
.witr_section_title_inner h1 span,
.witr_section_title_inner h2 span,
.witr_section_title_inner h3 span,
.witr_text_widget_inner h1,
.witr_text_widget_inner h1 span,
.witr_text_widget_inner h2 span,
.em_crating i.active,
 .witr_ns_part i,
 .witr_test_name i,
 .execllent_star h3,
 .em_testi_content:before,
.em_testi_content:after,
 .em_testi_title span,
 .test_q_icon i,
.title_and_sub h6,
  .witr_team_content h5:hover, 
  .witr_team_content h5 a:hover,
 .witr_team_content span,
 .em-team-content-socials a,
 .team-style-2 .em-content-button a,
 .busi_singleTeam h5:hover,
 .witr_socials_3d a:hover,
 .witr_team_top ul li a,
  .witr_bottom_icon a,
  .team_o_icons ul li a,
  .team_single_title h1,
  .post_team_icon_8 ul li a,
  .kurigram_single_event:hover .event_page_title h2 a,
 .witr_swiper_content h1 span,
.witr_swiper_content h2 span,
.witr_swiper_content h3 span,
.swiper-button-prev:hover,
.swiper-button-next:hover,
.witr_ds_content_inner h1 span,
.witr_ds_content_inner h2 span,
.witr_ds_content_inner h3 span, 
 .witr_feed_icons span:hover,
 .width_height_link_02 .service-item i,
.width_height_link_0.service-item i,
.witr_service_btn_3d  a:hover, 
 .witr_service2_7 .witr_ser_btnb a i,
 .witr_service2_icont i,
 .em-service-title h3 span,
 .service-btna a:hover,
 .width_height_link_0 .em-service-icon i,
.em-service-title h3 a:hover,
 .witr_sstyle_9:hover .service-btn > a,
.witr_service_10 .service-btn a,
 .service_list_op ul li a:hover,
.witr_service_s_12.service-item h2,
 .witr_service_12  .wirt_detail_title h3 a:hover,
.wirt_detailb_icon i,
.wbutton_top_service_icon a,
.witr_servicetwo_text a,
.witr_service2_icon_bottom i,
 .witr_single_socials ul li a i:hover,
  .witr_progress-style10 .witr_percent,
 .witr_progress-style10 .progress-bar-success .witr_percent,
 .witr_progress-style10 .progress-bar-info .witr_percent,
 .witr_progress-style10 .progress-bar-warning .witr_percent,
 .witr_progress-style10 .progress-bar-danger .witr_percent,
 .witr_pricing_icon i,
 .pricing-part a.btn:hover,
 .witr_pslide .witr_pslide_custom a span,
 .ps1 .witr_content_pslide_text h3:hover,
.ps1 .witr_content_pslide_text a:hover, 
.ps3.ps1 .witr_content_pslide_text a:hover, 
.witr_pslide3 .witr_pslide_custom a span,
.portfolio_readmore_btn > a,
.em-slider-title span,
.em-button-button-area a,
a.em-active-button:hover,
.witr_modal_menu i,
.departmentList ul li a:hover,
.departmentList .discover_more:hover,
.ab_videoArea i,
.wittr_footermenu_w_list ul li a:hover,
.witr_counter_number_inn h3,
.witr_counter_number_inn span,
.witr_content_couses h4,
.witr_content_couses h3 a:hover,
.witr_couses_btnb a,
.witr_circal_r h6 span,
.kurigram-single-event_adn:hover .event-page-title_adn a,
.kurigram_event_abs h2 a:hover,
.span_text span i,
.width_height_link_02 .sub-item i,
.width_height_link_0.sub-item i,
.feature_btn a,
.sub-item.sub-item-3 i,
.sub-item.sub-item-6 i,
.witr_feature_btn_f a,
.witr_cfeature9 .sub-item i,
.medi_featureDetail .discover_more:hover,
.box i,
.em-service2.witr_sstyle_9:hover .em-service-icon i,
.witr_counter_icon i,
.service-btn > a,
.em-feature:hover .feature_btn a,
.witr_section_title_inner h2,
.singleService h2,
.witr_feature_12.sub-item i,
.witr_feature_13 .sub-item h2,
.em-feature:hover .em_feature-icon i,
.feature_active .all_feature_color h2,
.feature_topicon_post i,
.car_feature_btn_icon a i,
.learn_btn,
.wblog-content > a,
.feature_btn a,
.medi_featureDetail .discover_more i
					
					'
					)
                ),
                array(								
                    'id'        => 'twr_global_colorpostmeta',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Post Meta Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '					
						.kurigram-blog-meta-left a, .kurigram-blog-meta-left span,
						.wblog-content span,.wblog-content span a,.wblog-content span a i,.witr_blog_metan span, .witr_blog_metan span a, .witr_blog_con span, .witr_blog_con span a
					'
					)
                ),					
                array(								
                    'id'        => 'twr_global_colorbg',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Background Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '
.mc4wp-form-fields button,					
.mini_shop_content a span.count,
.defaultsearch button,
.tagcloud a:hover,
table#wp-calendar td#today,
.wp-block-button__link,
.post-password-form input[type=submit] ,
.mean-container .mean-nav ,
.mean-container .mean-bar,
a.dtbtn,
.em-quearys-menu i ,
.btn,
.btn:hover,
.btn:focus,
.btn.btn-bordered:hover,
.readmore a:hover,
.right_side_menu_icon .right_sideber_menu i,
.kurigram-single-icon-inner a:hover,
.paginations a:hover, .paginations a.current, .page-numbers span.current,
.tutor-pagination-wrap a:hover,
.tutor-pagination-wrap span.page-numbers.current,
.commment_title h3:before,
.comment_kurigram_btn,
.footer-social-icon a i,
.footer-middle .mc4wp-form-fields button,
.kurigram-description-area .social-icons a,
.witr_shortcode_inner,
.tutor-course-loop-level,
.txw  span.tutor-text-avatar,
.tutor-course-archive-results-wrap strong ,
#scrollUp,
.kurigram-header-top,
.top-right-menu ul .sub-menu,
.em_creative_header:before,
.em_creative_header:after,
.creative_header_button:before,
.creative_header_button .dtbtn,
.creative_header_button > a:hover,
.em_slider_social a,
.em_slider_social a:hover,
.top_crmenu_l ul,
.top_crt_style,
.em_slider_social a,
.em_slider_social a:hover,
.thb_product_car a.added_to_cart:hover:before,
.woocommerce span.tbd_sale_inner,
.woocommerce span.onsale.onsingle_sale.tbd_sale_inner,
.tbd_product .thb_product_car a:hover,
.woocommerce div.product form.cart .button,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
nav.woocommerce-MyAccount-navigation ul li.is-active,
.woocommerce .witr_product_cart .coupon input[type="hidden"],
.woocommerce .witr_product_cart .coupon button,
.woocommerce .witr_product_cart button.button:disabled,
.woocommerce .witr_product_cart button.button:disabled[disabled],
.woocommerce .witr_cart_to_cross a.checkout-button.alt,
.woocommerce .witr_checkout_form button.button.alt,
.woocommerce  a.button.wc-backward,
.tbd_product .thb_product_car a:hover,
.witr_cart_to_cross .cart_totals > h2,
.witr_checkout_form .witr_ck_blling h3, 
.witr_checkout_form h3#order_review_heading,
h2.woocommerce-order-details__title,
.woocommerce-column__title,
.content-widget .widget_price_filter .ui-slider .ui-slider-range,
.content-widget .widget_price_filter .ui-slider .ui-slider-handle,
.content-widget .widget_price_filter .ui-slider .ui-slider-handle,
.widget_product_search button,
.kurigram-single-icon-inner a:hover,
.commment_title h3:before,
.kurigram_btn,
.readmore a:hover,
ul.tx_product_tab.nav li a.active,
.twr_mini_cart .woocommerce.widget_shopping_cart .buttons a.checkout,
.twr_mini_cart .woocommerce.widget_shopping_cart .buttons a:hover,
.woocommerce-account .woocommerce button.button,
.woocommerce-account .woocommerce a.button,
.woocommerce .widget_price_filter .price_slider_amount .button,
.tx_menuc_btn .tx_mc_btn,
.kurigram-single-icon a:hover,

.pluginbgcolor,
.product_tl_nav ul li:hover, .product_tl_nav ul li.ema_product_item,
.witr_taba_style1 .nav-tabs .nav-item.show .nav-link,
.witr_taba_style1 .nav-tabs .nav-link.active,
.witr_btn,
.show_cart_cbtn:hover,
 .witr_bbtn:hover,
.witr_vbtn,
.witr_vbbtn:hover,
.wblog-content > a:hover,
.witr_blog_area8 .learn_btn,
.witr_post_meta9 span,
.witr_blog_area10 .learn_btn:hover,
.witr_blog_area10 .learn_btn i,
.witr_top_category span ul li a,
.witr_blog_area11 .learn_btn:hover,
.witr_blog_area13 .learn_btn:hover,
.blog_add_icon a,
.busi_singleBlog:hover .wbutton_right_icon a::before,
.readmore_adn a:hover,
.witr_butn,
.service-btn > a:hover,
.witr_banner_content a i:hover,
.banner-content a i,
.butn::before,
.banner-content.content-4 ul li a:hover i,
.banner-content button,
.witr_ac_style:focus,
.witr_ac_style:hover,
.active .witr_ac_style,
.witr_about_btn a,
 .slick-prev, .slick-next,
.slick-prev.slick-disabled,
.slick-next.slick-disabled,
.slick-dots li.slick-active button, 
.send_message input.wpcf7-submit,
.tx_svd_icon,
.slider_btn .witr_btn.active:hover,
.witr_video_btn i,
.witr_video_btn i::after,
.kurigram_slider_icon ul li a i,
.play-overlay a,
.play-overlay a::before,
.video-item a,
.video-item a::before,
.witr_bar_inner,
.title_in:before,
 .title_in:after,
.title_btn a,
.witr_hd_timeline_inner:before,
.witr_dslborder,
.witr_hd_sicon_inner,
.middle_border_divider,
.testomonial_2part .slick-slide.slick-current.slick-active .bottom_single_testi,
 .team_overlay_icon a,
 .team-social ul li a:hover,
 .team-back-wraper,
 .busi_TMHover::before,
 .busi_TMHover::after,
 .busiTS a:hover,
 .back_view .con_TMS a:hover,
 .witr_bottom_icon a:hover,
 .witr_team_s11 span,
 .front_view .con_TMS a:hover,
 .front_view .con_TMS13_icon.con_TMS a,
 .team_s14_image::after,
 .team_o_icon ul li a:hover,
 .all_color_team:hover .team_o_icons::before,
 .team_o_icons ul li a:hover,
 .witr_single_team_s,
 .single_team_list ul li i,
 .single_team_list ul li a i,
 .single_team_list ul li i:hover,
 .single_team_list ul li a i:hover,
 .team_single_btn a,
 .team_single_btn a:hover,
.team_top_icon ul li a,
 .team_bottom_icon a,
 .post_team_icon_8 ul li a:hover,
 .post_team_icon_9,
 .post_team10_area .team_o_icons ul li a:hover,
.tab_item .nav-pills li .nav-link.active,
 .kurigram-tab li a.active,
 .kurigram-tab li a:hover,
.witr_swiper_area .swiper-pagination-progressbar .swiper-pagination-progressbar-fill,
.witr_swiper_area .swiper-scrollbar-drag,
 .single_image_line,
 .witr_tx_ovei_title,
.witr_service_7 .service-btn > a::before,
.witr_service_7 .service-btn > a::after,
.service-item i,
.witr_service_front_3d,
.witr_service2_box,
.witr_service3_btn a,
.witr_service2_7 .witr_ser_btnb a,
.pluse_btn span,
 .witr_sn_button a,
.witr_sstyle_9::before,
.witr_service_10::before,
.witr_service_10 .service-btn a:hover,
.poly_text_box:hover .service_icon_box::before,
.witr_service2:hover .witr_service2_icon_bottom::before,
.witr_service2:hover .wbutton_top_service_icon a::before,
.wirt_detail_texti,
.wirt_detailb_icon i:hover,
.medi_singleService:before,
.witr_sbtn_s8 a i,
.witr_11_btn.witr_sbtn_s8 a,
.pluse_btn_slick span,
.Screenshots .dnSlide-main .dnSlide-btn,
 .progress-bar,
.witr_process_icon i,
.witr_back_process,
.witr_process_icon2 i,
.pricing-part strong,
.pricing-part a.btn,
.pricing_style_2 .pricing-part h5,
.pricing_style_4 .witr_p_middle_inner,
.pricing_top_box,
.witr_ribon_text h3,
.pricing_style_7.pricing-part h4,
.witr_pslide_custom a span,
.witr_pslide3 .witr_single_pslide:hover .witr_pslide_custom a span,
.portfolio_nav ul li:hover,
.portfolio_nav ul li.current_menu_item,
.gallery_load_button a:hover,
 .picon a,
.portfolio_readmore_btn > a:hover,
.pstyle_1 .picon a:hover,
.positi_3.pprotfolio4,
a.em-active-button,
.em-button-button-area a:hover,
.witr_nivideo_btns i:hover,
.em-nivo-slider-wrapper .nivo-directionNav a:hover,
.em-nivo-slider-wrapper .nivo-controlNav a:hover,
.em-nivo-slider-wrapper .nivo-controlNav a.active,
.ab_videoArea,
.sub-item i,
.sub-item.sub-item-3:hover i,
.sub-item.sub-item-6:hover i,
.witr_feature_back_3d,
.witr_feature_btn_f a:hover,
.witr_cfeature9 .sub-item:hover i,
.witr_cfeature9 .sub-item i::after,
.witr_cfeature9 .sub-item .feature_btn a,
.witr_feature2:hover,
.witr_feature_13.sub-border-2:hover .sub-item span,
.witr_feature_13 .sub-item:hover::before,
.em-feature:hover .feature_inner_box,
.em_feature-icon i,
.wcr_feature_10 .feature_btn a::before,
.wcr_feature_11:hover .car_feature_btn_icon a i,
.medi_singleFeature:before,
.witr_icon_adn a,
.event_date,
.event_date_list,
.witr_event_btn a,
.witr_category .tevbt, 
.witr_event_6 .kurigram_event_date,
.style7_day span,
.witr_event_style_8.witr_event_style_7 .witr_event_btn a,
.nav-tabs .nav-link:hover,
.witr_taba_style1 .nav-tabs .nav-item.show .nav-link,
 .witr_taba_style1 .nav-tabs .nav-link.active,
.witr_couses_btnb a:hover,
.give-btn,
.couses_box_position .witr_content_couses h4,
.couses_bar_percent .progress-bar,
.witr_single_counter:hover,
.witr_counter_6 .wirt_new_iner,
.single_counter:hover,
span.cdowns::before,
span.cdowns::after,
.witr_apartment_form .const_btn:hover,
.witr_apartment_form  .btn,
.witr_case_btnb a:hover,
.kurigram_button a,
.feature_btn a:hover,
.kurigram_video_inner i,
.w_apps_button a:hover
',


					'border-color' => '
					
.twr_mini_cart .woocommerce.widget_shopping_cart .buttons a.checkout,					
.twr_mini_cart .woocommerce.widget_shopping_cart .buttons a:hover,				
.paginations a:hover,
.paginations a.current,
.page-numbers span.current,					
.kurigram-description-area .social-icons a,					
ul.tx_product_tab.nav li a.active,					
.woocommerce form .form-row.woocommerce-invalid .select2-container, 
.woocommerce form .form-row.woocommerce-invalid select,	
.readmore a:hover,					
.kurigram-single-icon-inner a:hover,
.sticky,
.tag-sticky-2 .kurigram-single-blog,
.blog-left-side h2.widget-title::before,
.tx_menuc_btn .tx_mc_btn,
.kurigram-single-icon a:hover,
.em_slider_social a,

.pluginbdcolor,
.product_tl_nav ul li:hover, .product_tl_nav ul li.ema_product_item,
.w_apps_button a,
.witr_case_btnb a:hover,
.witr_single_counter:hover,
.single_counter:hover:before,
.single_counter:hover:after,
.single_counter:hover,
.witr_couses_btnb a:hover,
.service-btn > a,
.give-btn,
.sub-item.sub-item-3 i,
.witr_cfeature8 .sub-item span::before,
.em-button-button-area a:hover,
.em-nivo-slider-wrapper .nivo-directionNav a:hover,
.portfolio_nav ul li:hover,
.portfolio_nav ul li.current_menu_item,
.gallery_load_button a:hover,
.portfolio_readmore_btn > a:hover,
.pricing-part a.btn,
.witr_progress-style10 .witr_percent,
.witr_progress-style10 .progress-bar-success .witr_percent,
.witr_progress-style10 .progress-bar-info .witr_percent,
.witr_progress-style10 .progress-bar-warning .witr_percent,
.witr_progress-style10 .progress-bar-danger .witr_percent,
.witr_progress-style13.progress,
.witr_sstyle_9:hover .service-btn > a,
.team-social ul li a:hover,
.busiTS a,
.busiTS a:hover,
.back_view .con_TMS a:hover,
.front_view .con_TMS a:hover,
.team_o_icon ul li a:hover,
.team_o_icons ul li a:hover,
.witr_testi_s_11:hover,
.witr_bar_innerc::before,
.witr_bar_innerc::after,
.slick-dots li button,
.slider_btn .witr_btn.active,
.slider_btn .witr_btn.active:hover,
.witr_butn,
.butn,
.feature_btn a,
.banner-content.content-4 ul li a i,
.banner-content input,
.wblog-content > a,
.witr_blog_area13 .learn_btn:hover,
.readmore_adn a:hover,
.witr_bbtn,
.witr_bbtn:hover,
.witr_vbbtn,
.witr_vbbtn:hover					
					
					',
					'border-left-color' => '
nav.woocommerce-MyAccount-navigation ul li.is-active:after,
.plugibbdtopcss,
.team_s14_image::before					
					',
					'border-right-color' => '
.plugibbdtopcss,					
.team_s14_image::after					
					',
					'border-bottom-color' => '
.plugibbdtopcss,					
.witr_feature_12.sub-item,
.tab_item ul li a,
.twr_pretwr_loader_pre .twr_animation .twr_circle_pre,
.witr_background_test,
.witr_testi_main				
					',
					'border-top-color' => '

.woocommerce-message, .woocommerce-info,
.plugibbdtopcss,
.wirt_s2_s9 .witr_service2_box,
.team_s14_image::before,
.witr_background_test,
.twr_pretwr_loader_pre .twr_animation .twr_circle_pre,
.witr_testi_main					
					'
					)
                ),
                array(								
                    'id'        => 'twr_global_colorbg_hover',
                    'type'      => 'color',
					'desc'      => esc_html__('Some of button set brand color, when you select global background color on this button. that that time, you need select another hover background color. if you need select another background, That time set background color from here.', 'kurigram'),
                    'title'     => esc_html__('Global Background Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '
.mc4wp-form-fields button:hover,					
a.dtbtn:hover, .witr_btn:hover, .kurigram_button a:hover,
.comment_kurigram_btn:hover,
.defaultsearch button:hover,
.footer-social-icon a i:hover,
.kurigram-description-area .social-icons a:hover,
.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover,
.woocommerce  a.button.wc-backward:hover,
.woocommerce .witr_checkout_form button.button.alt:hover,
.woocommerce-account .woocommerce button.button:hover,
.woocommerce-account .woocommerce a.button:hover,
.woocommerce .witr_product_cart .coupon button.button:hover,
.tx_menuc_btn .tx_mc_btn:hover,
.em_slider_social a:hover,

.pluginbdfghcss,
 .witr_btn:hover,
.witr_vbtn:hover,
.witr_blog_area10 .learn_btn:hover i,
 .witr_butn:hover,
 .slick-prev:hover, .slick-prev:focus, .slick-next:hover, .slick-next:focus,
.kurigram_slider_icon ul li a i:hover,
 .front_view .con_TMS13_icon.con_TMS a:hover,
 .team_single_btn a:hover,
 .team_top_icon ul li a:hover,
 .team_bottom_icon a:hover,
.tab_area .tab_content a:hover,
.singleSS:hover .SIBG_1::before,
 .witr_service_10:hover .SIBG_1::before,
.witr_sn_button a:hover,
.witr_sbtn_s8 a,
.pricing_style_6.pricing-part strong,
.witr_pslide_custom a span:hover,
.witr_pslide4.witr_pslide3 .witr_pslide_custom a span:hover,
.picon a:hover,
.witr_nivideo_btns i,
.witr_nivideo_btns i::after,
.witr_feature_front_3d,
.witr_feature2,
.witr_feature_13.sub-border-2 .sub-item span,
.witr_feature_13.sub-border-2:hover .sub-item i,
 .witr_event_btn a:hover,
.witr_event_style_8.witr_event_style_7 .witr_event_btn a:hover,
.couses_box_position:hover .witr_content_couses h4,
.kurigram_button a:hover
							
					',
					'border-color' => '
a.dtbtn:hover, .witr_btn:hover, .kurigram_button a:hover,
.comment_kurigram_btn:hover,
.defaultsearch button:hover,
.footer-social-icon a i:hover,
.mc4wp-form-fields button:hover,
.kurigram-description-area .social-icons a:hover,
.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover,
.woocommerce  a.button.wc-backward:hover,
.woocommerce .witr_checkout_form button.button.alt:hover,
.woocommerce-account .woocommerce button.button:hover,
.woocommerce-account .woocommerce a.button:hover,
.woocommerce .witr_product_cart .coupon button.button:hover,
.tx_menuc_btn .tx_mc_btn:hover,

.pluginbdfghcss,
 .witr_btn:hover,
.witr_vbtn:hover,
.witr_blog_area10 .learn_btn:hover i,
 .witr_butn:hover,
 .slick-prev:hover, .slick-prev:focus, .slick-next:hover, .slick-next:focus,
.kurigram_slider_icon ul li a i:hover,
 .front_view .con_TMS13_icon.con_TMS a:hover,
 .team_single_btn a:hover,
 .team_top_icon ul li a:hover,
 .team_bottom_icon a:hover,
.tab_area .tab_content a:hover,
.singleSS:hover .SIBG_1::before,
 .witr_service_10:hover .SIBG_1::before,
.witr_sn_button a:hover,
.witr_sbtn_s8 a,
.pricing_style_6.pricing-part strong,
.witr_pslide_custom a span:hover,
.witr_pslide4.witr_pslide3 .witr_pslide_custom a span:hover,
.picon a:hover,
.witr_nivideo_btns i,
.witr_nivideo_btns i::after,
.witr_feature_front_3d,
.witr_feature2,
.witr_feature_13.sub-border-2 .sub-item span,
.witr_feature_13.sub-border-2:hover .sub-item i,
 .witr_event_btn a:hover,
.witr_event_style_8.witr_event_style_7 .witr_event_btn a:hover,
.couses_box_position:hover .witr_content_couses h4,
.kurigram_button a:hover			
					'
					)
                ),

                array(								
                    'id'        => 'twr_global_bgoverlay_color',
                    'type'      => 'color_rgba',
                    'title'     => esc_html__('Global Overlay BG Color', 'kurigram'),
					'default'   => array(
						'color'     => '',
						'alpha'     => 1
					),
					'output'    => array(
					'background-color' => '
.plugin_overlaycss,
.witr_blog_area11 .learn_btn,
.blog-page-title_adn2 h2,
.slick-dots li button,
 .witr_team_section:before,
 .team-sec:before,
 .witr_team_sec_3:before,
 .em-team-content-socials a:hover,
 .em-team:hover .em-team-content-waraper,
 .witr_back_img:after,
 .witr_team_thumb4::before,
 .team_o_icons ul li a,
.SIBG_1::before,
.witr_back_service2,
.witr_service2_icont i,
.witr_service_10 .service-btn a,
.medi_singleService:after,
.prot_content,
.em_port_content,
.pstyle2 .prot_content,
.pstyle2.pstyle3 .prot_content_inner,
.ab_videoArea i::after,
.witr_slug_feature .witr_feture_back_con_slugf,
.witr_slug_front_contentf,
.medi_singleFeature:hover .medi_featureThumb:after,
.witr_event_6 .kurigram_event_date,
.couses_box_position::before,
.witr_case_image::before,
.witr_single_team:after					
					'
					)
                ),					

				
            ),
    ) );	

    
    
    
	
/*========================
END kurigram Typography FIELD
=========================*/

	/* preloader option */
	    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Preloader Option', 'kurigram'),
        'id'        => 'preloderoption',
        'icon'      => 'el-icon-cog',
		 'fields'    => array(
			array(
				'id'      => 'twr_is_preloader',
				'type'    => 'switch',
				'title'   => esc_html__( 'Preloader', 'kurigram' ),
				'on'      => esc_html__( 'ON', 'kurigram' ),
				'off'     => esc_html__( 'OFF', 'kurigram' ),
				'default' => true,
			),

			array(
				'required' => array( 'twr_is_preloader', '=', '1' ),
				'id'       => 'twr_preloader_style',
				'type'     => 'select',
				'title'    => esc_html__( 'Preloader Style', 'kurigram' ),
				'default'   => '1',
				'options'  => array(
					'1'  => esc_html__( 'Text Preloader Style', 'kurigram' ),
					'2' => esc_html__( 'Image Preloader Style', 'kurigram' )
				)
			),

			/**
			 * Text Preloader
			 */
			array(
				'required' => array( 'twr_preloader_style', '=', '1' ),
				'id'       => 'preloader_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Preloader Logo Text', 'kurigram' ),
				'default'  => get_bloginfo( 'name' )
			),

			array(
				'required'  => array( 'twr_preloader_style', '=', '1' ),			
				'title'     => esc_html__( 'Loading Text Color', 'kurigram' ),
				'id'        => 'preloader_color',
				'type'      => 'color',
				'output'    => array( '.twr_pretwr_loader_pre .twr_animation .twr_text_pre, .twr_pretwr_loader_pre .twr_animation .twr_text_pre .twr_textletter_pre:before' ),
			),
                array(
					'required' => array( 'twr_preloader_style', '=', '1' ),
                    'id'        => 'twr_circle_colorbg',
                    'type'      => 'color',
                    'title'     => esc_html__(' Spinning Circle Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(					
					'border-bottom-color' => '.twr_pretwr_loader_pre .twr_animation .twr_circle_pre',					
					'border-top-color' => '.twr_pretwr_loader_pre .twr_animation .twr_circle_pre'
					)
                ),
			array(
				'required'  => array( 'twr_preloader_style', '=', '1' ),			
				'title'     => esc_html__( 'Backend Shadow Color', 'kurigram' ),
				'id'        => 'preloader_shadow_color',
				'type'      => 'color_rgba',
				'output'    => array( '.twr_pretwr_loader_pre .twr_animation .twr_text_pre .twr_textletter_pre' ),
			),
			array(
				'required'      => array( 'twr_preloader_style', '=', '1' ),			
				'title'         => esc_html__( 'Loading Logo Typography', 'kurigram' ),
				'id'            => 'preloader_typo',
				'type'          => 'typography',
				'text-align'    => false,
				'color'         => false,
				'output'        => array( '.twr_pretwr_loader_pre .twr_animation .twr_text_pre,.twr_pretwr_loader_pre .twr_animation .twr_text_pre .twr_textletter_pre:before' ),
			),
			array(
				'required' => array( 'twr_preloader_style', '=', '1' ),
				'id'       => 'pre_preloader_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Loding Text', 'kurigram' ),
				'default'  => esc_html__( 'Please Wait For Loading', 'kurigram' )
			),			
			array(
				'required' => array( 'twr_preloader_style', '=', '1' ),			
				'title'         => esc_html__( 'Loading Text Typography', 'kurigram' ),
				'id'            => 'preloader_small_typo',
				'type'          => 'typography',
				'text-align'    => false,
				'output'        => array( '.twr_pretwr_loader_pre p' ),
			),
			array(
				'required' => array( 'twr_preloader_style', '=', '2' ),
				'id'       => 'pre_preloader_image',
				'type'     => 'media',
				'desc'     => esc_html__( 'Insert gif image for the better look', 'kurigram' ),
				'title'    => esc_html__( 'Preloader image', 'kurigram' ),
				'compiler' => true,
				'default'  => array(
					'url' =>''
				)
			),
             array(
					'required' => array( 'twr_is_preloader', '=', '1' ),
                    'id'        => 'kurigram_preceross_hide',
					'desc'      => esc_html__('Cross Icon Hide here', 'kurigram'),
                    'type'      => 'switch',
                    'title'     => esc_html__('Cross Icon', 'kurigram'),
                    'default'   => true,
                ),	
             array(
					'required' => array( 'twr_is_preloader', '=', '1' ),
                    'id'        => 'kurigram_preceross_hide',
					'desc'      => esc_html__('Loading Cancel Hide here', 'kurigram'),
                    'type'      => 'switch',
                    'title'     => esc_html__('Loading Cancel Text Show/Hide', 'kurigram'),
                    'default'   => true,
                ),								
				array(
					'required' => array( 'twr_preloader_style', '=', '1' ),
					'id'       => 'preloader_cancel_icon',
					'type'     => 'text',
					'title'    => esc_html__('Loding Cancel Icon', 'kurigram'),
					'desc' => esc_html__('insert themify icon here. ex = icofont-close or icofont-close go https://themify.me/themify-icons or https://icofont.com/icons . Not use the field, remove the text from field..', 'kurigram'),
					'default'	=> esc_html__('icofont-close', 'kurigram'),
				),				
				array(
					'required' => array( 'twr_preloader_style', '=', '1' ),
					'id'       => 'preloader_cancel_text',
					'type'     => 'text',
					'title'    => esc_html__( 'Loding Cancel Text', 'kurigram' ),
					'desc'      => esc_html__('Preloader Loading Cancel Hide', 'kurigram'),
					'default'  => esc_html__( 'Preloader Loading Cancel.', 'kurigram' )
				), 				
				array(
					'required'  => array( 'twr_preloader_style', '=', '1' ),			
					'title'     => esc_html__( 'Loading Cancel Text Color', 'kurigram' ),
					'id'        => 'preloader_cancel_color',
					'type'      => 'typography',
					'output'    => array( '.twr_precross' ),
				),				
			
		)
    ) );


	
	//total header area
     Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header area', 'kurigram'),
        'id'        => 'kurigram_header_area',
        'desc'      => esc_html__('Header options', 'kurigram'),
        'icon'      => 'el-icon-tasks',      
        'fields'    => array(
		
             array(
                    'id'        => 'txbdm_header_display_none_hide',
					'desc'      => esc_html__('All Menu OFF/ON section', 'kurigram'),					
                    'type'      => 'switch',
                    'title'     => esc_html__('All Header Hide', 'kurigram'),
                    'default'   => false,
                ),
             array(
                    'id'        => 'txbdm_header_posi_top',
					'desc'      => esc_html__('All Menu Position  OFF/ON section', 'kurigram'),
                    'type'      => 'switch',
                    'title'     => esc_html__('All Header absolute', 'kurigram'),
                    'default'   => false,
                ),
				array(
                    'id'        => 'txbdm_header_posi_top2',
					'desc'      => esc_html__('Top 2 and Main Menu Position  OFF/ON section', 'kurigram'),
                    'type'      => 'switch',
                    'title'     => esc_html__('Top 2 and Main Menu Header absolute', 'kurigram'),
                    'default'   => false,
                ),				
				array(
                    'id'        => 'txbdm_header_posi_top3',
					'desc'      => esc_html__('Main Menu Position  OFF/ON section', 'kurigram'),
                    'type'      => 'switch',
                    'title'     => esc_html__('Main Header absolute', 'kurigram'),
                    'default'   => false,
                ),					
             array(
                    'id'        => 'txbdm_header_display_social_hide',
					'desc'      => esc_html__('Body Social icon OFF/ON section', 'kurigram'),					
                    'type'      => 'switch',
                    'title'     => esc_html__('Body Social ON/OFF', 'kurigram'),
                    'default'   => false,
                ),						

				
            )
        ));	
	
     //Header Top 1
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Top Section 1', 'kurigram'),
        'id'        => 'kurigram_header_top',
        'desc'      => esc_html__('Insert header top info', 'kurigram'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,     
        'fields'    => array(
             array(
                    'id'        => 'txbdm_header_top_hide',
					'desc'      => esc_html__('If you ON this section. It will show header top style 1 everywhere. But If you want to show header top style 1 your choose page and post. That time, Please don\'t ON the option. For this go to your page or post below, there you can see a Top Menu 1 OFF/ON option. Please select OFF/ON from there.', 'kurigram'),
                    'type'      => 'switch',
                    'title'     => esc_html__('Header Top', 'kurigram'),
                    'default'   => false,
                ),
                array(
                    'id'        => 'kurigram_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Top 1 Header layout', 'kurigram'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'htops_box' => esc_html__('Select Layout','kurigram'),
                        'htopt_box' => esc_html__('Box Layout','kurigram'),
                        'htopt_boxi' => esc_html__('Box Inner Layout','kurigram'),
                        'htopt_full' => esc_html__('Full Layout','kurigram'),
                    ),
                    'default'   => 'htops_box'
                ),				
                array(
                    'id'        => 'kurigram_top_right_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Top Header Style', 'kurigram'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'h_top_l11' => esc_html__('Select Top Menu','kurigram'),
                        'h_top_l1' => esc_html__('Left Address and Right Icon','kurigram'),
                        'h_top_l3' => esc_html__('Left Icon and Right Address','kurigram'),
                        'h_top_l2' => esc_html__('Left Address,Middle Welcome and Right Icon','kurigram'),
                        'h_top_l4' => esc_html__('Left Icon,Middle Welcome and Right Address','kurigram'),
                        'h_top_l5' => esc_html__('Left Address and Right Side Menu','kurigram'),
                        'h_top_l6' => esc_html__('Left Side Menu and Right Address','kurigram'),
                        'h_top_l7' => esc_html__('Left Address, Middle Social & Right Login','kurigram'),
                        'h_top_l8' => esc_html__('Left Opening Hours, Middle Social and Right login','kurigram'),
                        'h_top_l9' => esc_html__('Left Opening Hours, Middle Social and Right Search','kurigram'),
                        'h_top_20' => esc_html__('Left Address Right Search','kurigram'),
                        'h_top_21' => esc_html__('Left Address Right Text','kurigram'),
                        'h_top_22' => esc_html__('Right Address Left Text','kurigram'),
                        'h_top_23' => esc_html__('Left Address, Icon and Right Menu','kurigram'),
                    ),
                    'default'   => 'h_top_l1'
                ),				
				array(
                    'id'       => 'kurigram_header_top_i1',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 1', 'kurigram'),
                    'desc' => esc_html__('insert your icon here. ex - <i class="fas fa-home"></i> icofont,font-awesome,themify ', 'kurigram'),
					'default'	=> esc_html__('<i class="fas fa-home"></i>', 'kurigram'),
                ),
				array(
                    'id'       => 'kurigram_header_top_road',
                    'type'     => 'text',
                    'title'    => esc_html__('Text Name 1', 'kurigram'),
                    'desc' => esc_html__('Insert Your Text', 'kurigram'),
					'default'	=> esc_html__('1st Floor New World.', 'kurigram'),
                ),
				array(
                    'id'       => 'kurigram_header_top_i3',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 2', 'kurigram'),
                    'desc' => esc_html__('insert your icon here. ex - <i class="fas fa-envelope"></i> icofont,font-awesome,themify', 'kurigram'),
					'default'	=> esc_html__('<i class="fas fa-envelope"></i>', 'kurigram'),
                ),				
                array(
                    'id'       => 'kurigram_header_top_email',
                    'type'     => 'text',
                    'title'    => esc_html__('Text Name 2', 'kurigram'),
                    'desc' => esc_html__('Insert Your Text', 'kurigram'),
					'default'	=> esc_html__('demo@example.com', 'kurigram'),					
                ),
				array(
                    'id'       => 'kurigram_header_top_i2',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 3', 'kurigram'),
                    'desc' => esc_html__('insert your Phone icon here. ex - <i class="fas fa-phone-alt"></i> icofont,font-awesome,themify', 'kurigram'),
					'default'	=> esc_html__('<i class="fas fa-phone-alt"></i>', 'kurigram'),
                ),				
                array(
                    'id'       => 'kurigram_header_top_mobile',
                    'type'     => 'text',
                    'title'    => esc_html__('Text Name 3', 'kurigram'),
                    'desc' => esc_html__('Insert Your Phone Number Text', 'kurigram'),
					'default'	=> esc_html__('+998556778345', 'kurigram'),					
                ),
				array(
                    'id'       => 'kurigram_header_top_i4',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Message Icon', 'kurigram'),
                    'desc' => esc_html__('insert your icon here. ex - <i class="fas fa-heartbeat"></i> icofont,font-awesome,themify', 'kurigram'),
					'default'	=> esc_html__('<i class="fas fa-heartbeat"></i>', 'kurigram'),
                ),				
                array(
                    'id'       => 'kurigram_header_top_wellcome',
                    'type'     => 'textarea',
                    'title'    => esc_html__('Text Message', 'kurigram'),
                    'desc' => esc_html__('Insert text support - span,a,br,strong,b,em and h2 html tag', 'kurigram'),
					'default'	=> esc_html__('welcome visit our site', 'kurigram'),					
                ),
				array(
                    'id'       => 'kurigram_header_top_i5',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon', 'kurigram'),
                    'desc' => esc_html__('insert your icon here. ex - <i class="far fa-clock"></i> icofont,font-awesome,themify', 'kurigram'),
					'default'	=> esc_html__('<i class="far fa-clock"></i>', 'kurigram'),
                ),					
                array(
                    'id'       => 'kurigram_header_top_opening',
                    'type'     => 'text',
                    'title'    => esc_html__('Opening Text', 'kurigram'),
                    'desc' => esc_html__('Insert Text', 'kurigram'),
					'default'	=> esc_html__('Open hours: 9.00-24.00 Mon-Sat', 'kurigram'),					
                ),				
                array(								
                    'id'        => 'kurigram_header_top_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Address Icon Color', 'kurigram'),
					'output'    => array(
						'color' => '.top-address p span i, .top-address p a i
					')
                ),				
                array(								
                    'id'        => 'kurigram_header_top_color',
                    'type'      => 'color',
                    'title'     => esc_html__('All Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
						'color' => '.top-address p a,
								.top-right-menu ul.social-icons li a,
								.top-address p span,
								.top-address.menu_18 span
					')
                ),
                array(								
                    'id'        => 'kurigram_header_top_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('All Icon Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top-right-menu .social-icons li a:hover,
								.top-right-menu .social-icons li a i:hover,
								.top-address p a i:hover,
								.top-address p span i:hover
					')
                ),
                array(								
                    'id'        => 'kurigram_header_top_well_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Text Message Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top-welcome p'
					)
                ),
				array(								
                    'id'        => 'kurigram_header_top_wella_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Text Message Link Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top-welcome p a'
					)
                ),
				array(								
                    'id'        => 'kurigram_header_hover_Link_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Text Message Link Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top-welcome p a:hover,.top-welcomet p a:hover'
					)
                ),
				
                array(								
                    'id'        => 'kurigram_header_opening_bg_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Opening BG Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.top-address.menu_18 span,.em-quearys-menu i',
					'border-color' => '.em-quearys-form'
					)
                ),				
                array(								
                    'id'        => 'kurigram_hoeder_top_bg_color11',
                    'type'      => 'background',
                    'title'     => esc_html__('Header Top Section BG Color', 'kurigram'),
                    'default'  => '',
                    'output'    => array('
						.kurigram-header-top
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),

				 array( 
					'id'       => 'top_header_border',
					'type'     => 'border',
					'title'    => __('Header Border Option', 'kurigram'),
					'subtitle' => __('Only color validation can be done on this field type', 'kurigram'),
					'output'   => array('.kurigram-header-top'),
					'desc'     => __('This is the description field, again good for additional info.', 'kurigram'),
					'default'  => array(
						'border-color'  => '', 
						'border-style'  => 'solid', 
						'border-top'    => '', 
						'border-right'  => '', 
						'border-bottom' => '', 
						'border-left'   => ''
					)
				),


				
				array(
					'id'             => 'kurigram_header_top_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.kurigram-header-top'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'kurigram'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'kurigram'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'kurigram'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),							
				
            ),
    ) );



     //Header Top 2
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Top Section 2', 'kurigram'),
        'id'        => 'kurigram_header_toptwo',
        'desc'      => esc_html__('Insert header top info', 'kurigram'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,     
        'fields'    => array(
             array(
                    'id'        => 'txbdm_header_top_two_hide',
					'desc'      => esc_html__('If you ON this section. It will show header top style 2 everywhere. But If you want to show header top style 2 your choose page and post. That time, Please don\'t ON the option. For this go to your page or post below, there you can see a Top Menu 2 OFF/ON option. Please select OFF/ON from there.', 'kurigram'),					
                    'type'      => 'switch',
                    'title'     => esc_html__('Header Top style 2', 'kurigram'),
                    'default'   => false,
                ),
                array(
                    'id'        => 'txbdm_box_layouttwo',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Top 2 Header layout', 'kurigram'),
                    'customizer_only'   => false,
                    'options'   => array(
						'htops_box' => esc_html__('Select Layout','kurigram'),
                        'htopt_box' => esc_html__('Box Layout','kurigram'),
                        'htopt_boxi' => esc_html__('Box Inner Layout','kurigram'),
                        'htopt_full' => esc_html__('Full Layout','kurigram'),
                    ),
                    'default'   => 'htops_box'
                ),				
                array(
                    'id'        => 'txbdm_top_two_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Top 2 Header Style', 'kurigram'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'h_top_1' => esc_html__('Select Top Menu','kurigram'),
                        'h_top_2' => esc_html__('1. Left Logo,Middle Address And Right Button','kurigram'),
                        'h_top_3' => esc_html__('2. Left Logo,Middle Address And Right Top Menu','kurigram'),
                        'h_top_4' => esc_html__('3. Left Logo,Middle Address And Right Social Icon','kurigram'),
                        'h_top_5' => esc_html__('4. Left Social Icon,Middle Logo And Right Address','kurigram'),
                        'h_top_6' => esc_html__('5. Left Logo And Right Address','kurigram'),
                        'h_top_7' => esc_html__('6. Left Logo,Middle Address And Right Button','kurigram'),
                        'h_top_8' => esc_html__('7. Left Logo,Middle Address And Right Mini shop','kurigram'),
						'h_top_9' => esc_html__('8. Left Social Icon and Menu,Middle Logo And Right Address','kurigram'),
                    ),
                    'default'   => 'h_top_2'
                ),					
				array(
                    'id'       => 'kurigram_header_top_ci1',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 1', 'kurigram'),
                    'desc' => esc_html__('insert your icon here. ex - icofont,font-awesome,themify', 'kurigram'),
					'default'	=> esc_html__('<i class="fas fa-map-marker-alt"></i>', 'kurigram'),
                ),				
				array(
                    'id'       => 'kurigram_header_top_roadtwot',
                    'type'     => 'text',
                    'title'    => esc_html__('Title 1', 'kurigram'),
                    'desc' => esc_html__('Insert Text Here', 'kurigram'),
					'default'	=> esc_html__('Location', 'kurigram'),
                ),				
				array(
                    'id'       => 'kurigram_header_top_roadtwo',
                    'type'     => 'text',
                    'title'    => esc_html__('Sub Title 1', 'kurigram'),
                    'desc' => esc_html__('Insert Text Here', 'kurigram'),
					'default'	=> esc_html__('1st Floor.', 'kurigram'),
                ),
				array(
                    'id'       => 'kurigram_header_top_ci2',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 2', 'kurigram'),
                    'desc' => esc_html__('insert your icon here. ex - icofont,font-awesome,themify', 'kurigram'),
					'default'	=> esc_html__('<i class="fa fa-envelope"></i>', 'kurigram'),
                ),					
                array(
                    'id'       => 'kurigram_header_top_emailtwot',
                    'type'     => 'text',
                    'title'    => esc_html__('Title 2', 'kurigram'),
                    'desc' => esc_html__('insert info', 'kurigram'),
					'default'	=> esc_html__(' Email', 'kurigram'),					
                ),					
                array(
                    'id'       => 'kurigram_header_top_emailtwo',
                    'type'     => 'text',
                    'title'    => esc_html__(' Sub Title 2 ', 'kurigram'),
                    'desc' => esc_html__('Iinsert info', 'kurigram'),
					'default'	=> esc_html__('demo@example.com', 'kurigram'),					
                ),
				array(
                    'id'       => 'kurigram_header_top_ci3',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 3', 'kurigram'),
                    'desc' => esc_html__('insert your icon here. ex - icofont,font-awesome,themify', 'kurigram'),
					'default'	=> esc_html__('<i class="fas fa-phone-volume"></i>', 'kurigram'),
                ),					
                array(
                    'id'       => 'kurigram_header_top_mobiletwot',
                    'type'     => 'text',
                    'title'    => esc_html__('Title 3', 'kurigram'),
                    'desc' => esc_html__('insert info', 'kurigram'),
					'default'	=> esc_html__('Phone', 'kurigram'),					
                ),					
                array(
                    'id'       => 'kurigram_header_top_mobiletwo',
                    'type'     => 'text',
                    'title'    => esc_html__('Sub Title 3', 'kurigram'),
                    'desc' => esc_html__('insert info', 'kurigram'),
					'default'	=> esc_html__('+998556778345', 'kurigram'),					
                ),
                array(
                    'id'       => 'kurigram_header_buttonc1',
                    'type'     => 'text',
                    'title'    => esc_html__('Button Text', 'kurigram'),
                    'desc' => esc_html__('Insert text', 'kurigram'),
					'default'	=> esc_html__('Get a Quote', 'kurigram'),					
                ),
                array(
                    'id'       => 'kurigram_header_button_urlc1',
                    'type'     => 'text',
                    'title'    => esc_html__('Button URL', 'kurigram'),
                    'desc' => esc_html__('Insert url ex: - https://your_site.com/', 'kurigram'),
					'default'	=>'#',					
                ),			
                array(								
                    'id'        => 'kurigram_header_top_icon_colortwo',
                    'type'      => 'color',
                    'title'     => esc_html__('Top Icon Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
						'color' => '.creative_header_icon i
					')
                ),				
               /* array(								
                    'id'        => 'kurigram_header_top_colortwo',
                    'type'      => 'color',
                    'title'     => esc_html__(' Title Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
						'color' => '.creative_header_address_text > h3
					')
                ),*/
				array(
					'id'          => 'kurigram_title_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Title Typography style', 'kurigram'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.creative_header_address_text > h3
					'),
					'line-height'   => false,
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'kurigram'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),				
				array(
					'id'          => 'kurigram_suptitle_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Sub Title Typography style', 'kurigram'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.creative_header_address_text > p,.creative_header_address_text > p > a,.top_crmenu_l li a,.cr_top_addess p span,.cr_top_addess p a
					'),
					'line-height'   => false,
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'kurigram'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),				
                array(								
                    'id'        => 'kurigram_header_opening_bg_colortwo',
                    'type'      => 'color',
                    'title'     => esc_html__('Angle BG Section Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.em_creative_header::before,.creative_header_button::before,.em_creative_header::after',
					)
                ),				
                array(								
                    'id'        => 'kurigram_hoeder_top_bg_colortwo',
                    'type'      => 'background',
                    'title'     => esc_html__('Header Top 2 Section BG Color', 'kurigram'),
                    'default'  => '',
                    'output'    => array('
						.em_creative_header,.top_crt_style
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),							
				array(
					'id'             => 'kurigram_header_top_section_spacingtwo',
					'type'           => 'spacing',
					'output'         => array('.em_creative_header,.top_crt_style'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'kurigram'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'kurigram'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'kurigram'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),							
				
            ),
    ) );		
	







	
	
     //Header Logo
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Logo', 'kurigram'),
        'id'        => 'kurigram_header_logo',
        'desc'      => esc_html__('Header Logo', 'kurigram'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,     
        'fields'    => array( 
                array(
                    'id'        => 'kurigram_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Default Logo', 'kurigram'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here.ex: - it is work in default menu.', 'kurigram'),
                ),
                array(
                    'id'        => 'kurigram_onepage_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('One Page Menu Logo', 'kurigram'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. ex:- it is work in one page menu', 'kurigram'),
                ),
                array(
                    'id'        => 'kurigram_ts_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Transparent Menu Logo', 'kurigram'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. ex: - it is work in transparent menu', 'kurigram'),
                ),
                array(
                    'id'        => 'kurigram_mobile_top_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Mobile Logo', 'kurigram'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. recommend size:- 180x48px.', 'kurigram'),
                ),				
                array(
                    'id'        => 'kurigram_logo_height',
                    'type'      => 'text',
                    'title'     => esc_html__('Logo Height', 'kurigram'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set height ex-100px', 'kurigram'),
                ),	
                array(
                    'id'        => 'kurigram_logo_widget',
                    'type'      => 'text',
                    'title'     => esc_html__('Logo Width', 'kurigram'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set Width ex-100px', 'kurigram'),
                ),
                /*array(
                    'id'        => 'kurigram_line_height',
                    'type'      => 'text',
                    'title'     => esc_html__('Massing your logo spacing to Menu ', 'kurigram'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set number default-15px', 'kurigram'),
					'default'   =>'15px',
                ),*/
                array(
                    'id'       => 'kurigram_mobile_icon',
                    'type'     => 'color',
					'mode'      => false,
                    'title'    => esc_html__('Mobile Icon', 'kurigram'),
					'output'    => array(
						'color' => '.mobile_menu_o.mobile_opicon i',
					)                    
                ),
				array(								
                    'id'        => 'kurigram_mobilebg_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Mobile Menu Background Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
						'background-color' => '.mobile_logo_area',
					)
                ),					
				
            ),
    ) );

     //Header Menu
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Menu', 'kurigram'),
        'id'        => 'kurigram_menu',
		'icon'		=> 'el el-circle-arrow-right',
        'subsection'=> true,      
        'fields'    => array(
                array(
                    'id'        => 'kurigram_main_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Header Menu layout', 'kurigram'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'htops_box' => esc_html__('Select Layout','kurigram'),
                        'hmenul_box' => esc_html__('Box Layout','kurigram'),
                        'hmenul_boxi' => esc_html__('Box Inner Layout','kurigram'),
                        'hmenu_full' => esc_html__('Full Layout','kurigram'),
                    ),
                    'default'   => 'htops_box'
                ),				
                array(
                    'id'        => 'kurigram_main_menu_layout',
					'desc'      => esc_html__('This option work only, when you select  - 1 and 1-1  style menu', 'kurigram'),					
                    'type'      => 'select',
                    'title'     => esc_html__('Logo Position', 'kurigram'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'm_menu_1' => esc_html__('Logo Left Style','kurigram'),
                        'm_menu_2' => esc_html__('Logo Right Style','kurigram'),
                        'm_menu_3' => esc_html__('Logo Top Style','kurigram'),
                    ),
                    'default'   => 'm_menu_1'
                ),
				
                array(
                    'id'        => 'txbdm_defaulth_menu_layout',
					'desc'      => esc_html__('If you select menu from here. It will be showing everywhere and if you want to show different menu different page or post, that time, please don\'t select menu style from here. For this go to your page or post below, there you can see a menu option. Please select menu style from there and when you set the 3,4,5,1-1,8,9,11,12,13,20,21,22 menu that time please open the top menu.', 'kurigram'),						
                    'type'      => 'select',
                    'title'     => esc_html__('Select Default Menu For All Single Page', 'kurigram'),
                    'customizer_only'   => false,
                    'options'   => array(
						'111' => esc_html__( 'Select Menu Style From Here', 'kurigram' ),				
						'1' => esc_html__( '1 Header Default Menu', 'kurigram' ),													
						'2' => esc_html__( '2 Header Transparent Menu', 'kurigram' ),
						'3' => esc_html__( '3 Header Transparent With Sticky Menu', 'kurigram' ),		
						'4' => esc_html__( '4 Header One Page Menu', 'kurigram' ),
						'5' => esc_html__( '5 Header One Page Transparent Menu', 'kurigram' ),				
						'6' => esc_html__( '6 Header One Page Transparent With Sticky  Menu', 'kurigram' ),
						'7' => esc_html__( '1-1 Header Default with Sticky Menu', 'kurigram' ),							
						'8' => esc_html__( '8 Header Menu With Search', 'kurigram' ),
						'9' => esc_html__( '9 Header Menu With Social Icon and Button', 'kurigram' ),
						'10' => esc_html__( '10 Header Menu With Button', 'kurigram' ),
						'11' => esc_html__( '11 Header Menu With Button headroom Menu', 'kurigram' ),
						'12' => esc_html__( '12 Header Menu With Search and no Logo', 'kurigram' ),
						'13' => esc_html__( '13 Header Transparent Sticky No logo Menu', 'kurigram' ),					
						'14' => esc_html__( '14 Header One Page With Search Menu', 'kurigram' ),
						'15' => esc_html__( '15 Header Mini Shop Menu', 'kurigram' ),										
						'16' => esc_html__( '16 Header Hamburgers Menu', 'kurigram' ),										
						'17' => esc_html__( '17 Header Box Style Menu', 'kurigram' ),
						'18' => esc_html__( '18 No Logo,Search, Mini Shop Button', 'kurigram' ),
						'19' => esc_html__( '19 Left Logo,Right Search, Mini Shop Button', 'kurigram' ),
						'20' => esc_html__( '20 Left Logo,Right Search,Popup Menu,Button', 'kurigram' ),
						'21' => esc_html__( '21 No Logo,Right Search,Popup Menu,Button', 'kurigram' ),
						'22' => esc_html__( '22 left Logo,Center Menu,Search And Right Address', 'kurigram' ),
						'23' => esc_html__( '23 Header Menu Hide', 'kurigram' ),							
                    ),
                    'default'   => '111'
                ),	
                array(
                    'id'       => 'kurigram_header_button',
                    'type'     => 'text',
                    'title'    => esc_html__('Button Text', 'kurigram'),
                    'desc' => esc_html__('Insert text', 'kurigram'),
					'default'	=> esc_html__('Buy Now', 'kurigram'),					
                ),
                array(
                    'id'       => 'kurigram_header_button_url',
                    'type'     => 'text',
                    'title'    => esc_html__('Button URL', 'kurigram'),
                    'desc' => esc_html__('Insert url ex: - https://your_site.com/', 'kurigram'),
					'default'	=>'#',					
                ),
				array(
                    'id'       => 'main_menu_icon',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon', 'kurigram'),
                    'desc' => esc_html__('insert your icon here. ex - icofont,font-awesome,themify', 'kurigram'),
					'default'	=> esc_html__('<i class="fas fa-phone-alt"></i>', 'kurigram'),
                ),					
                array(
                    'id'       => 'main_menu_top_title',
                    'type'     => 'text',
                    'title'    => esc_html__('Title', 'kurigram'),
                    'desc' => esc_html__('insert info', 'kurigram'),
					'default'	=> esc_html__('Phone', 'kurigram'),					
                ),					
                array(
                    'id'       => 'main_menu_number',
                    'type'     => 'text',
                    'title'    => esc_html__('Sub Title', 'kurigram'),
                    'desc' => esc_html__('insert info', 'kurigram'),
					'default'	=> esc_html__('+998556778345', 'kurigram'),					
                ),				
				
                array(								
                    'id'        => 'kurigram_Button_colorm',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Button Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => 'a.dtbtn,.creative_header_button .dtbtn,.em-quearys-menu i,.top-form-control button.top-quearys-style'
					)
                ),
                array(								
                    'id'        => 'kurigram_Button_colorurl',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Button BG Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => 'a.dtbtn,.creative_header_button .dtbtn,.em-quearys-menu i',
					'border-color' => '.em-quearys-form'
					)
                ),
				array(
					'id'       => 'txbdm_menu_gr',
					'type'     => 'color_gradient',
					'title'    => esc_html__('Menu Button Gradient BG Color', 'kurigram'),
					'desc'     => esc_html__('Set Gradient From here.', 'kurigram'),
					'validate' => 'color',
					'default'  => array(
						'from' => '',
						'to'   => '', 
					)					
				),								
				
              array(								
                    'id'        => 'kurigram_Buttonht_colorm',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Hover Button Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => 'a.dtbtn:hover,.creative_header_button > a:hover'
					)
                ),
                array(								
                    'id'        => 'kurigram_Buttonhtb_colorurl',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Button Hover BG Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => 'a.dtbtn:hover,.creative_header_button > a:hover'
					)
                ),
				array(
					'id'       => 'txbdm_menuh_gr',
					'type'     => 'color_gradient',
					'title'    => esc_html__('Menu Button Hover Gradient BG Color', 'kurigram'),
					'desc'     => esc_html__('Set Gradient From here.', 'kurigram'),
					'validate' => 'color',
					'default'  => array(
						'from' => '',
						'to'   => '', 
					)					
				),				
                array(								
                    'id'        => 'kurigram_menu_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Main Menu Section BG Color', 'kurigram'),
                    'default'  => '',
                    'output'    => array('
						.kurigram_nav_area,.transprent-menu .kurigram_nav_area,.hmenu_box_style
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),	
			
				array(
					'id'          => 'kurigram_menu_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Menu Font style', 'kurigram'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.kurigram_menu > ul > li > a,
						.heading_style_2 .kurigram_menu > ul > li > a,
						.heading_style_3 .kurigram_menu > ul > li > a,
						.heading_style_4 .kurigram_menu > ul > li > a,
						.witr_search_wh .em-header-quearys .em-quearys-menu i,
						.right_sideber_menu i ,
						.main_menu_header_icon i,
						.main_menu_header_address_text h3,
						.main_menu_header_address_text h4 a,
						.heading_style_5 .kurigram_menu > ul > li > a
					'),
					'line-height'   => false,
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'kurigram'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),
                array(								
                    'id'        => 'kurigram_menu_texts_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Hover Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.kurigram_menu > ul > li:hover > a,.kurigram_menu > ul > li.current > a,.right_sideber_menu i:hover,.witr_search_wh .em-header-quearys .em-quearys-menu i:hover,.main_menu_header_address_text h4 a:hover,.kurigram_menu ul .sub-menu li:hover > a,.kurigram_menu ul .sub-menu .sub-menu li:hover > a,.kurigram_menu ul .sub-menu .sub-menu .sub-menu li:hover > a,.kurigram_menu ul .sub-menu .sub-menu .sub-menu .sub-menu li:hover > a',
					
					'background-color' => '.kurigram_menu > ul > li > a::before,.kurigram_menu > ul > li.current:hover > a::before,.kurigram_menu > ul > li.current > a:before'
					)
                ),
                array(								
                    'id'        => 'kurigram_menu_bg_sticky_color',
                    'type'      => 'color_rgba',
                    'title'     => esc_html__('Main Menu Sticky BG Color', 'kurigram'),
					'default'   => array(
						'color'     => '#000000',
						'alpha'     => 1
					),
					'output'    => array(
					'background-color' => '
					.kurigram_nav_area.prefix,
					.hbg2
					'
					)
                ),					
											
                array(								
                    'id'        => 'kurigram_menu_sticky_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Sticky Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.kurigram_nav_area.prefix .kurigram_menu > ul > li > a,.hmenu_box_style.hbg2 .kurigram_menu > ul > li > a,.hbg2 .kurigram_menu > ul > li > a,.kurigram_nav_area.prefix .right_sideber_menu i,.witr_search_wh .prefix  .em-header-quearys .em-quearys-menu i,.kurigram_nav_area.prefix .kurigram_menu > ul > li.current > a
					',
					'background-color' => '
					.kurigram_nav_area.prefix .kurigram_menu > ul > li > a::before,
					.hbg2 .kurigram_menu > ul > li > a::before
					
					'
					)
                ),					
                array(								
                    'id'        => 'kurigram_menu_text_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Sticky Current Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.kurigram_nav_area.prefix .kurigram_menu > ul > li.current > a,
					.hbg2 .kurigram_menu > ul > li.current > a
					',
					'background-color' => '
						.kurigram_nav_area.prefix .kurigram_menu > ul > li.current > a::before					
					'
					)
                ),	
                array(								
                    'id'        => 'kurigram_submenu_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Sub Menu BG Color', 'kurigram'),
                    'default'  => '',
                    'output'    => array('
						.kurigram_menu ul .sub-menu
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),
				array(
					'id'          => 'kurigram_sub_menu_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Sub Menu Font style', 'kurigram'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.kurigram_menu ul .sub-menu li a
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'kurigram'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),
				
                array(								
                    'id'        => 'kurigram_submenu_hover_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sub Menu Hover Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						.kurigram_menu ul .sub-menu li:hover > a,
						.kurigram_menu ul .sub-menu .sub-menu li:hover > a,
						.kurigram_menu ul .sub-menu .sub-menu .sub-menu li:hover > a,
						.kurigram_menu ul .sub-menu .sub-menu .sub-menu .sub-menu li:hover > a																'
					)
                ),
				 array( 
					'id'       => 'main_header_border',
					'type'     => 'border',
					'title'    => __('Box Border Option', 'kurigram'),
					'subtitle' => __('Only color validation can be done on this field type', 'kurigram'),
					'output'   => array('.kurigram_nav_area'),
					'desc'     => __('This is the description field, again good for additional info.', 'kurigram'),
					'default'  => array(
						'border-color'  => '', 
						'border-style'  => 'solid', 
						'border-top'    => '', 
						'border-right'  => '', 
						'border-bottom' => '', 
						'border-left'   => ''
					)
				),				
				array(
					'id'             => 'menu_spacing',
					'type'           => 'spacing',
					'output'         => array('.kurigram_nav_area,.trp_nav_area,.transprent-menu .kurigram_nav_area'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Section Padding Option', 'kurigram'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing or padding they want.', 'kurigram'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'kurigram'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
					
            ),
    ) );

/*========================
END kurigram HEADER FIELD
=========================*/


/*========================
kurigram BREADCRUMB FIELD
=========================*/
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Breadcrumb Area', 'kurigram'),
        'id'         => 'kurigram_bread_page',  
        'icon'       => 'el-icon-picture',
        'fields'    => array(
    array(
     'id'   => 'info_normal',
     'type' => 'info',
     'desc' => esc_html__('Notice:- If you want to more breadcrumb control. Please see every page bottom area. We Added More Field Here','kurigram')
    ),
	array(
		'id'        => 'kurigram_breadcr_style',
		'type'      => 'select',
		'title'     => esc_html__('Select Breadcrumb Style', 'kurigram'),
		'customizer_only'   => false,
		'options'   => array(
			'0' => esc_html__('Select style ','kurigram'),
			'1' => esc_html__('Style 1 ','kurigram'),
			'2' => esc_html__('Style 2 ','kurigram'),
			'3' => esc_html__('Breadcrumb None ','kurigram'),
		),
		'default'   =>'1'
	),
	array(
		'id'        => 'bpage_text_align',
		'type'      => 'select',
		'title'     => esc_html__('Breadcrumb Text Align Style', 'kurigram'),
		'desc'       => esc_html__( 'this option work only, when select Breadcrumb Style 1', 'kurigram' ),		
		'customizer_only'   => false,
		'options'   => array(
			'text-left' => esc_html__( 'Align Left', 'kurigram' ),
			'text-center'   => esc_html__( 'Align Middle', 'kurigram' ),
			'text-right'     => esc_html__( 'Alige Right', 'kurigram' ),
		),
		'default'   =>'text-center'
	),		
	array(
		'id'        => 'bpage_text_transform',
		'type'      => 'select',
		'title'     => esc_html__('Breadcrumb Text Transform Style', 'kurigram'),
		'customizer_only'   => false,
		'options'   => array(
			'lcase' => esc_html__( 'Transform lowercase', 'kurigram' ),
			'ucase'   => esc_html__( 'Transform uppercase', 'kurigram' ),
			'ccase'     => esc_html__( 'Transform capitalize', 'kurigram' ),
		),
		'default'   =>'ccase'
	),		
	
	array(
		'id'        => 'kurigram_breadcrumb_bg',
		'type'      => 'background',
		'output'    => array('.breadcumb-area,.breadcumb-blog-area'),
		'title'     => esc_html__('Breadcrumb Background', 'kurigram'),
		'subtitle'  => esc_html__('Breadcrumb background with image, color.', 'kurigram'),
		'default'  => array(
			'background-color' => '',
		)
	),
	array(								
		'id'        => 'kurigram_brdov_text_color',
		'type'      => 'color_rgba',
		'title'     => esc_html__('Breadcumb Overlay', 'kurigram'),
		'default'   => array(
			'color'     => '',
			'alpha'     => 1
		),
    'options'       => array(
        'show_input'                => true,
        'show_initial'              => true,
        'show_alpha'                => true,
        'show_palette'              => true,
        'show_palette_only'         => false,
        'show_selection_palette'    => true,
        'max_palette_size'          => 10,
        'allow_empty'               => true,
        'clickout_fires_change'     => false,
        'choose_text'               => 'Choose',
        'cancel_text'               => 'Cancel',
        'show_buttons'              => true,
        'use_extended_classes'      => true,
        'palette'                   => null, 
        'input_text'                => 'Select Color'
    ), 		
		'output'    => array(
		'background-color' => '
		.breadcumb-area::before,
		.breadcumb-blog-area::before
		'
		)
	),
	array(
			'id'       => 'kurigram_breadcumb_overlay_gr',
			'type'     => 'color_gradient',
			'title'    => esc_html__('Breadcumb Overlay Gradient BG Color', 'kurigram'),
			'desc'     => esc_html__('Set Gradient From here.', 'kurigram'),
			'validate' => 'color',			
			'default'  => array(
			'from' => '',
			'to'   => '',
			)
		),	
	array(
			'id'        => 'kurigram_bread_titleh',			
			'type'      => 'switch',
			'title'     => esc_html__('Title ON/OFF Option', 'kurigram'),
			'default'   => false,
	),
    array(
     'id'          => 'kurigram_bread_title_page_color',
     'type'        => 'typography', 
     'title'       => esc_html__('Breadcrumb Title Style', 'kurigram'),
     'google'      => true, 
     'font-backup' => true,
     'line-height'   => false,
     'text-align'   => false,
     'output'      => array('
      .brpt h1,.breadcumb-inner h1,.brpt.brptsize h1    
     '),
     'units'       =>'px',
     'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'kurigram'),
     'default'     => array(
		  'color'       => '', 
		  'font-style'  => '', 
		  'font-family' => '', 
		  'google'      => true,
		  'font-size'   => '', 
		 ),
	),

	 array(
			'id'        => 'kurigram_bread_menuhide',			
			'type'      => 'switch',
			'title'     => esc_html__('Breadcrumb Menu Hide Option', 'kurigram'),
			'desc'           => esc_html__('When Set ON, That time menu Will Hide and When Set False, That time menu Will Show', 'kurigram'),
			'default'   => false,
	),
	array(
		'id'       => 'kurigram_current_position',
		'type'     => 'text',
		'title'    => esc_html__('Change Text Currently Here', 'kurigram'),
		'desc' => esc_html__('Change your You Are Currently Here text . Not use the field, remove the text from field. It will Show Default', 'kurigram'),
		'default'	=> esc_html__('You Here!', 'kurigram'),
	),
	array(
		'id'       => 'kurigram_breadhome_textc',
		'type'     => 'text',
		'title'    => esc_html__('Chnage text Home', 'kurigram'),
		'desc' => esc_html__('Change your Home Here text . Not use the field, remove the text from field. It will Show Default', 'kurigram'),
		'default'	=> esc_html__('Home', 'kurigram'),
	),
	array(
		'id'       => 'kurigram_breadbar_textc',
		'type'     => 'text',
		'title'    => esc_html__('Change Icon or bar', 'kurigram'),
		'desc' => esc_html__('insert icofont icon here. ex - <i class="icofont-thin-right"></i> go https://icofont.com/icons . Not use the field, remove the text from field.. It will Show Default', 'kurigram'),
		'default'	=> esc_html__('-', 'kurigram'),
	),		
    array(
     'id'          => 'kurigram_breadcrumb_typography',
     'type'        => 'typography', 
     'title'       => esc_html__('Breadcrumb Text And Font style', 'kurigram'),
     'google'      => true, 
     'font-backup' => true,
     'line-height'   => false,
     'text-align'   => false,
     'output'      => array('
      .breadcumb-inner ul,     
      .breadcumb-inner ul span a,     
      .breadcumb-inner li,
      .breadcumb-inner li a,.witr_breadcumb_shop ul li span a     
     '),
     'units'       =>'px',
     'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'kurigram'),
     'default'     => array(
		  'color'       => '', 
		  'font-style'  => '', 
		  'font-family' => '', 
		  'google'      => true,
		  'font-size'   => '', 
		 ),
	),
	array(        
		'id'        => 'kurigram_bread_current_page_color',
		'type'      => 'color',
		'title'     => esc_html__('Breadcrumb Current Text Color', 'kurigram'),
		'default'  => '',
		'output'    => array(
			'color' => '.breadcumb-inner ul span.current,.witr_breadcumb_shop ul li span'
		)
	), 
    array(
     'id'             => 'spacing',
     'type'           => 'spacing',
     'output'         => array('.breadcumb-area,.breadcumb-area.breadcumb_st2,.breadcumb-blog-area'),
     'mode'           => 'padding',
     'units'          => array('em', 'px'),
     'units_extended' => 'false',
     'title'          => esc_html__('Padding Option', 'kurigram'),
     'subtitle'       => esc_html__('Allow your users to choose the spacing or margin they want.', 'kurigram'),
     'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'kurigram'),
     'default'            => array(
      'padding-top'     => '', 
      'padding-right'   => '', 
      'padding-bottom'  => '', 
      'padding-left'    => '',
      'units'          => 'px', 
     )
    ),  
	
        
            ),
    ) );
	
if( class_exists( 'WooCommerce' ) ) {

    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Shop Breadcumb', 'kurigram'),
        'id'         => 'kurigram_bredshop_page',  
        'icon'       => 'el-icon-picture',
		'subsection' => true,
        'fields'    => array(
			array(
			 'id'   => 'info_normshop',
			 'type' => 'info',
			 'desc' => esc_html__('Notice:- All breadcrumb Field working in shop area. if you want to change shop breadcrumb bg image, Please change here','kurigram')
			),		
			array(
				'id'        => 'kurigram_shopbread_bg',
				'type'      => 'background',
				'output'    => array('.breadcumb-area.breadcumb_st2.msope_bgarea,.breadcumb-area.msope_bgarea'),
				'title'     => esc_html__('Shop Background Image', 'kurigram'),
				'default'  => array(
					'background-color' => '',
				)
			),					
				
		),		
    ) );	
}		
	
/*========================
END kurigram BREADCRUMB FIELD
=========================*/
/*========================
END kurigram BREADCRUMB FIELD
=========================*/


/*========================
kurigram circle FIELD
=========================*/
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Scroll Button Color', 'kurigram'),
        'id'         => 'kurigram_tm_defaultpage',  
        'icon'       => 'el el-circle-arrow-right',
        'fields'    => array(
				array(
				 'id'   => 'thdfinfo_normal',
				 'type' => 'info',
				 'desc' => esc_html__('Notice:- we set our all color option in our Element, But only the scroll button color will be changed by the below option','kurigram')
				),  

				array(        
					'id'        => 'thdefhbgctc',
					'type'      => 'color',
					'title'     => esc_html__('Scroll Button Icon Color', 'kurigram'),
					'default'  => '',
					'output'    => array(
						'color' => '#scrollUp i'
					)
				),
				array(        
					'id'        => 'thdefhbgcbtbgh',
					'type'      => 'color',
					'title'     => esc_html__('Scroll Button BG Color', 'kurigram'),
					'default'  => '',
					'output'    => array(
						'background' => '#scrollUp',
					)
				),						
				
				

        ),
    ) );
/*========================
END kurigram circle FIELD
=========================*/

/*========================
kurigram BLOG FIELD
=========================*/
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Blog Area', 'kurigram' ),
        'id'          => 'kurigram_blog_section_area',
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
                array(
                    'id'        => 'kurigram_blog_bgcolor',
                    'type'      => 'background',
                    'output'    => array('.kurigram-single-blog'),
                    'title'     => esc_html__('Blog Item BG Color', 'kurigram'),
                    'subtitle'  => esc_html__('BG color', 'kurigram'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),

                array(								
                    'id'        => 'kurigram_blog_title_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Title Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						.blog-content h1, .blog-content h2, .blog-content h3, .blog-content h4, .blog-content h5, .blog-content h6,					
						.single-blog-content h1, .single-blog-content h2, .single-blog-content h3, .single-blog-content h4, .single-blog-content h5, .single-blog-content h6,
						.blog-content h2 a,.blog-left-side .widget h2,.blog-page-title a					
					')
                ),	
                array(								
                    'id'        => 'kurigram_blog_title_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Title Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.blog-content h2 a:hover,
					.blog-page-title h2 a:hover
					')
                ),													
                array(
                    'id'        => 'kurigram_blog_widget_bgcolor',
                    'type'      => 'background',
                    'output'    => array('.blog-left-side.widget > div'),
                    'title'     => esc_html__('Blog Sidebar BG Color', 'kurigram'),
                    'subtitle'  => esc_html__('BG color', 'kurigram'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),
				 array(	
                    'id'        => 'kurigram_sidebar_widgett_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Title Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
						'color' => '.blog-left-side .widget h2'
					)
                ),
                array(								
                    'id'        => 'kurigram_sidebar_widget_li_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.blog-left-side .widget ul li,
							.blog-left-side .widget ul li a,
							.blog-left-side .widget ul li::before,
							.tagcloud a,
							caption,
							table,
							 table td a,
							cite,
							.rssSummary,
							span.rss-date,
							span.comment-author-link,
							.textwidget p,
							.widget .screen-reader-text
						')
                ),	
                array(								
                    'id'        => 'kurigram_sidebar_widget_li_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Text Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.blog-left-side .widget ul li a:hover,
							.blog-left-side .widget ul li:hover::before
						')
                ),					
                array(								
                    'id'        => 'kurigram_blog_social_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Single Blog Social Icon & Title bar Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.kurigram-single-icon-inner a,.reply_date span.span_right,.kurigram_btn',
					'border-color' => '.kurigram-single-icon-inner a,.kurigram_btn',
					'background' => '.blog-left-side .widget h2::before,.commment_title h3::before,table#wp-calendar td#today,.footer-middle .widget h2::before',
					)
                ),
				array(								
                    'id'        => 'kurigram_blog_social_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Single Blog Social Icon Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.kurigram-single-icon-inner a:hover,.kurigram_btn:hover',
					'border-color' => '.kurigram-single-icon-inner a:hover,.kurigram_btn:hover',
					)
                ),
				
				array(								
                    'id'        => 'kurigram_blog_pagina_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Pagination Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.paginations a',
					'border-color' => '.paginations a',
					)
                ),				
				
				array(								
                    'id'        => 'kurigram_blog_pagina_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Pagination Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.paginations a:hover, .paginations a.current, .page-numbers span.current',
					'border-color' => '.paginations a:hover, .paginations a.current, .page-numbers span.current',
					)
                ),					
				array(
                    'id'        => 'kurigram_blog_socialsharesh_hide',
                    'type'      => 'switch',
                    'title'     => esc_html__('Blog Social share Show/Hide', 'kurigram'),
                    'default'   => true,
                ),												
            )
    ) );		
/*========================
END kurigram BLOG FIELD
=========================*/
	 
/*========================
kurigram 404 FIELD
=========================*/	 

    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('404 Area', 'kurigram'),
        'id'         => 'kurigram_error_page',  
        'desc'       => esc_html__('Use this section to upload background images, select background color', 'kurigram'),
        'icon'       => 'el-icon-picture',
        'fields'    => array(
                array(
                    'id'        => 'kurigram_background_404',
                    'type'      => 'background',
                    'output'    => array('.not-found-area'),
                    'title'     => esc_html__('404 Page Background Color', 'kurigram'),
                    'subtitle'  => esc_html__('404 background with image, color.', 'kurigram'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),
                array(								
                    'id'        => 'kurigram_not_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Title Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner h2,.not-found-inner'
					)
                ),	
                array(								
                    'id'        => 'kurigram_sub_not_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Sub Title Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner p,.not-found-inner strong'
					)
                ),
                array(								
                    'id'        => 'kurigram_not_link_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Return Link Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner a'
					)
                ),					
                array(
                    'id'        => '404_info',
                    'type'      => 'editor',
                    'title'     => esc_html__('404 Information', 'kurigram'),
                    'subtitle'  => esc_html__('HTML tags allowed: a, br, em, strong', 'kurigram'),
                    'default'   => esc_html__('404 Oops! The page you are Looking for does not exist. ', 'kurigram'),
					'desc'      => esc_html__('Please use title this way. example- <h2>404</h2> and text <p>your text</p>', 'kurigram'),
                ), 
				array(
					'id'             => 'kurigram_notfound_spacing',
					'type'           => 'spacing',
					'output'         => array('.not-found-area'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Section Padding Option', 'kurigram'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing or padding they want.', 'kurigram'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'kurigram'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),

				
            ),
    ) );


/*========================
END kurigram NOT FOUND FIELD
=========================*/	 

/*========================
kurigram Shop FIELD
=========================*/
if( class_exists( 'WooCommerce' ) ) {

    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Shop Area', 'kurigram'),
        'id'         => 'kurigram_woocom_page',  
        'desc'       => esc_html__('Set your shop style option here', 'kurigram'),
        'icon'       => 'el-icon-picture',
        'fields'    => array(
				/* Relate Product ON/OFF 
				array(
						'id'        => 'kurigram_shop_related',			
						'type'      => 'switch',
						'title'     => esc_html__('Shop Relate Product ON/OFF Option', 'kurigram'),
						'default'   => true,
				),	*/	
			   /* Title And Price box color area */
                array(								
                    'id'        => 'kurigram_woocommerce_count',
                    'type'      => 'color',
                    'title'     => esc_html__('Showing Count Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .woocommerce-result-count, .nice-select span.current,.nice-select .option'
					)
                ),				   
			   
               array(
                    'id'        => 'kurigram_background_woocommerce',
                    'type'      => 'background',
                    'output'    => array('.tbd_product_content'),
                    'title'     => esc_html__('Box Background Color', 'kurigram'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),
                array(								
                    'id'        => 'kurigram_woocommerce_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Title Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.tbd_product_title h2,.woocommerce div.product .product_title,.tbd_product_title h3,.woocommerce .twr_product_sidebar ul.product_list_widget li a'
					)
                ),
                array(								
                    'id'        => 'kurigram_woocommerce_htitle',
                    'type'      => 'color',
                    'title'     => esc_html__('Title Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.tbd_product_title h2:hover,.woocommerce div.product .product_title:hover,.tbd_product_title h3:hover,..woocommerce .twr_product_sidebar ul.product_list_widget li a:hover'
					)
                ),				
                array(								
                    'id'        => 'kurigram_price_woocommerce',
                    'type'      => 'color',
                    'title'     => esc_html__('Price Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce div.product p.price ins, .woocommerce div.product span.price ins,.woocommerce div.product .stock,.woocommerce .twr_product_sidebar span.woocommerce-Price-amount.amount'
					)
                ),
				array(								
                    'id'        => 'kurigram_price_star_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Rating Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .products .star-rating, .woocommerce .star-rating'
					)
                ),					 
                array(								
                    'id'        => 'kurigram_product_iconc',
                    'type'      => 'color',
                    'title'     => esc_html__('Product Icon Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.tbd_product .thb_product_car a'
					)
                ),
				array(								
                    'id'        => 'kurigram_product_iconch',
                    'type'      => 'color',
                    'title'     => esc_html__('Product Icon Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.tbd_product .thb_product_car a:hover,.thb_product_car a.added_to_cart:hover:before'
					)
                ),
                array(								
                    'id'        => 'kurigram_product_iconc_bg',
                    'type'      => 'color',
                    'title'     => esc_html__('Product Icon BG Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.tbd_product .thb_product_car a',					
					'border-color' => '.tbd_product .thb_product_car a'
					
					)
                ),
				array(								
                    'id'        => 'kurigram_product_iconc_hbg',
                    'type'      => 'color',
                    'title'     => esc_html__('Product Icon BG Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.tbd_product .thb_product_car a:hover,.thb_product_car a.added_to_cart:hover:before,.twr_product_sidebar .tagcloud a:hover,.widget_product_search button',					
					'border-color' => '.tbd_product .thb_product_car a:hover,.thb_product_car a.added_to_cart:hover:before,.twr_product_sidebar .tagcloud a:hover,.widget_product_search button,'
					
					)
                ),				
				
				
				
                array(								
                    'id'        => 'kurigram_Button_color_wooco',
                    'type'      => 'color',
                    'title'     => esc_html__('Button Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .witr_product_cart button.button:disabled, .woocommerce .witr_product_cart button.button:disabled[disabled], .woocommerce .witr_cart_to_cross a.checkout-button.alt, .woocommerce .witr_checkout_form button.button.alt, .woocommerce a.button.wc-backward, .woocommerce input.button,.woocommerce div.product form.cart .button,.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,.kurigram_btn,.witr_cart_to_cross .cart_totals > h2,.witr_checkout_form .witr_ck_blling h3, .witr_checkout_form h3#order_review_heading, h2.woocommerce-order-details__title,.woocommerce-column__title,nav.woocommerce-MyAccount-navigation ul li.is-active,
					ul.tx_product_tab.nav li a'
					)
                ),
              array(								
                    'id'        => 'kurigram_Buttonht_woocommerce',
                    'type'      => 'color',
                    'title'     => esc_html__('Button Text Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover,.woocommerce a.button.wc-backward:hover, .woocommerce .witr_checkout_form button.button.alt:hover, .woocommerce input.button:hover,.woocommerce div.product form.cart .button,.kurigram_btn:hover,.paginations a:hover, .paginations a.current, .page-numbers span.current'
					)
                ),				
                array(								
                    'id'        => 'kurigram_Button_bgw',
                    'type'      => 'color',
                    'title'     => esc_html__('Button BG Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.woocommerce .witr_product_cart button.button:disabled, .woocommerce .witr_product_cart button.button:disabled[disabled],  .woocommerce .witr_cart_to_cross a.checkout-button.alt, .woocommerce .witr_checkout_form button.button.alt, .woocommerce a.button.wc-backward,  .woocommerce input.button,.woocommerce div.product form.cart .button,.woocommerce div.product .woocommerce-tabs ul.tabs li.active,,.witr_cart_to_cross .cart_totals > h2,.witr_checkout_form .witr_ck_blling h3, .witr_checkout_form h3#order_review_heading, h2.woocommerce-order-details__title,.woocommerce-column__title,nav.woocommerce-MyAccount-navigation ul li.is-active',
					
					'border-left-color' => 'nav.woocommerce-MyAccount-navigation ul li.is-active:after',
					'border-color' => '.woocommerce .witr_product_cart button.button:disabled, .woocommerce .witr_product_cart button.button:disabled[disabled],.woocommerce .witr_cart_to_cross a.checkout-button.alt, .woocommerce .witr_checkout_form button.button.alt, .woocommerce a.button.wc-backward, .woocommerce input.button,.woocommerce div.product form.cart .button,.kurigram_btn,.witr_cart_to_cross .cart_totals > h2,.witr_checkout_form .witr_ck_blling h3, .witr_checkout_form h3#order_review_heading, h2.woocommerce-order-details__title,.woocommerce-column__title,nav.woocommerce-MyAccount-navigation ul li.is-active',
					
					)
                ),

                array(								
                    'id'        => 'kurigram_Buttonhtb_bgwh',
                    'type'      => 'color',
                    'title'     => esc_html__('Button BG Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					
					'background-color' => '.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover, .woocommerce a.button.wc-backward:hover, .woocommerce .witr_checkout_form button.button.alt:hover, .woocommerce input.button:hover,.woocommerce div.product form.cart .button,.kurigram_btn:hover,ul.tx_product_tab.nav li a.active,.paginations a:hover,.paginations a.current, .page-numbers span.current',
					
					'border-color' => '.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover, .woocommerce a.button.wc-backward:hover, .woocommerce .witr_checkout_form button.button.alt:hover, .woocommerce input.button:hover,.woocommerce div.product form.cart .button,.kurigram_btn:hover,ul.tx_product_tab.nav li a.active,.paginations a:hover, .paginations a.current, .page-numbers span.current'
					
					)
                ),	
	
                array(								
                    'id'        => 'kurigram_Button_color_sale',
                    'type'      => 'color',
                    'title'     => esc_html__('Sale Button Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce span.tbd_sale_inner,.woocommerce span.onsale.onsingle_sale.tbd_sale_inner '
					)
                ),			
                array(								
                    'id'        => 'kurigram_Button_bgsale',
                    'type'      => 'color',
                    'title'     => esc_html__('Sale Button BG Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' =>'.woocommerce span.tbd_sale_inner,.woocommerce span.onsale.onsingle_sale.tbd_sale_inner',
					'border-color' => '.woocommerce span.tbd_sale_inner,.woocommerce span.onsale.onsingle_sale.tbd_sale_inner'
					)
                ),
                array(								
                    'id'        => 'kurigram_swoocommerce_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Title Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.twr_product_sidebar h2.widget-title'
					)
                ),
                array(								
                    'id'        => 'kurigram_swoocommerce_bgtitle',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Title BG Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.twr_product_sidebar h2.widget-title'
					)
                ),
				array(								
                    'id'        => 'kurigram_swoocommerce_textc',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .twr_product_sidebar li a,.woocommerce .twr_product_sidebar li span.count,.twr_product_sidebar p,.twr_product_sidebar .tagcloud a'
					)
                ),								
				array(								
                    'id'        => 'kurigram_swoocommerce_barc',
                    'type'      => 'color',
                    'title'     => esc_html__('Price Filter Bar color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.woocommerce .widget_price_filter .price_slider_amount .button,.content-widget .widget_price_filter .ui-slider .ui-slider-range,.woocommerce .widget_price_filter .price_slider_amount .button'
					)
                ),
				array(								
                    'id'        => 'kurigram_swoocommerce_rangc',
                    'type'      => 'color',
                    'title'     => esc_html__('Price Filter Rang Circle color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.content-widget .widget_price_filter .ui-slider .ui-slider-handle, .content-widget .widget_price_filter .ui-slider .ui-slider-handle'
					)
                ),
				array(								
                    'id'        => 'kurigram_swoocommerce_fpricec',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Filter Price color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .twr_product_sidebar .price_label'
					)
                ),				
				array(								
                    'id'        => 'kurigram_swoocommerce_bgcolor',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar BG Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.twr_product_sidebar > div'
					)
                ),					
				array(
					'id'             => 'w_sectionshop_spacing',
					'type'           => 'spacing',
					'output'         => array('.sec_padding'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Section Shop Area Padding Option', 'kurigram'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'kurigram'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),				
				
					
				
				
            ),		
    ) );


	
}	
/*========================
END kurigram Shop FIELD
=========================*/	
/*========================
kurigram social FIELD
=========================*/	
    //footer social section
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( ' Social Icon Section', 'kurigram' ),
        'id'         => 'kurigram_social_icons_sec',
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
	
                array(
                    'id'       => 'kurigram_social_icons',
                    'type'     => 'sortable',
                    'title'    => esc_html__('Insert Social Icons', 'kurigram'),
                    'subtitle' => esc_html__('Enter social links', 'kurigram'),
                    'desc'     => esc_html__('Drag/drop to re-arrange', 'kurigram'),
                    'mode'     => 'text',
					'label'    => true,
                    'options'  => array(        
                        'facebook-f'     => '',
                        'twitter'      => '',
                        'instagram'    => '',
                        'tumblr'       => '',
                        'pinterest-p'    => '',
                        'google-plus-g'  => '',
                        'linkedin-in'     => '',
                        'behance'      => '',
                        'dribbble'     => '',
                        'youtube'      => '',
                        'vimeo-v'        => '',
                        'apple'          => '',
                   
                    ),
					'default' => array(
						'facebook-f'     => esc_url('#'),
						'twitter'     => esc_url('#'),
						'instagram'	=> esc_url('#'),
						'tumblr'     => '',
						'pinterest-p'     => '',
						'google-plus-g'   => '',
						'linkedin-in'     => '',
						'behance'     => '',
						'dribbble'     => '',
						'youtube'     => '',
						'vimeo-v'     => '',
						'apple'     => '',
					
					),
                ),			
                array(								
                    'id'        => 'kurigram_social_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-social-icon a i,.footer-social-icon.htop-menu-s a i,.em_slider_social a,.top_crmenu_i_list li a i,.top-right-menu ul.social-icons li a i',
					)
                ),
                array(								
                    'id'        => 'kurigram_social_icon_bgcolor',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon BG Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'border-color' => '.footer-social-icon a i,.footer-social-icon.htop-menu-s a i,.em_slider_social a',
					'background-color' => '.footer-social-icon a i,.footer-social-icon.htop-menu-s a i,.em_slider_social a,.top_crmenu_i_list li a i,.top-right-menu ul.social-icons li a i',
					)
                ),
                array(								
                    'id'        => 'kurigram_social_icon_thbgcolor',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon hover Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-social-icon a i:hover,.footer-social-icon.htop-menu-s a i:hover,.em_slider_social a:hover,.top_crmenu_i_list li a i:hover,.top-right-menu ul.social-icons li a i:hover',
					)
                ),					
                array(								
                    'id'        => 'kurigram_social_icon_hbgcolor',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon hover BG Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'border-color' => '.footer-social-icon a i:hover,.footer-social-icon.htop-menu-s a i:hover,.em_slider_social a:hover,.em_slider_social a:hover',
					'background-color' => '.footer-social-icon a i:hover,.footer-social-icon.htop-menu-s a i:hover,.em_slider_social a:hover,.em_slider_social a:hover,.top_crmenu_i_list li a i:hover,.top-right-menu ul.social-icons li a i:hover',
					)
                ),					
                /*array(								
                    'id'        => 'kurigram_social_bg2_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Social Section BG Color', 'kurigram'),
                    'default'  => '',
                    'output'    => array('
						.footer-top
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),	*/										
				
            )
    ) );

 
/*========================
kurigram FOOTER FIELD
=========================*/	 
	
      //Footer area
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Footer Area', 'kurigram'),
        'id'        => 'footer_area_id',
        'desc'      => esc_html__('Insert style for top address area', 'kurigram'),
        'icon'      => 'el-icon-cog',
        'fields'    => array(      
				 array(
                    'id'       => 'kurigram_address_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Footer Address Section Show/Hide', 'kurigram'),
                    'default'  => false,
                ),
				array(
                    'id'       => 'kurigram_social_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Footer Logo Section Show/Hide', 'kurigram'),
                    'default'  => false,
                ),
                 array(
                    'id'       => 'kurigram_widget_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Widget Section Hide/show', 'kurigram'),
                    'default'  => false,
                ),				
				array(
                    'id'       => 'kurigram_copyright_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Copyright Section Show/Hide', 'kurigram'),
					'desc'      => esc_html__('If you not show copyright section true or on. Then It will be show default widget and copyright option', 'kurigram'),	
                    'default'  => true,
                ),
                array(
                    'id'        => 'kurigram_footer_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Footer layout', 'kurigram'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'footer_box' => esc_html__('Box Layout','kurigram'),
                        'footer_full' => esc_html__('Full Layout','kurigram'),
                    ),
                    'default'   => 'footer_box'
                ),							
								
            )
    ) );

	 //footer Address Section 
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Footer Address Section', 'kurigram' ),
        'id'          => 'kurigram_address_section',
        'subsection' => true,
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
		
                array(
                    'id'        => 'kurigram_address_logo_style',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Logo Style', 'kurigram'),
                    'customizer_only'   => false,
                    'options'   => array(
                        's_logo_s1' => esc_html__('Show Text Logo','kurigram'),
                        's_logo_s2' => esc_html__('Show Image Logo','kurigram'),
                    ),
                    'default'   => 's_logo_s1'
                ),				
						
                array(
                    'id'        => 'kurigram_address_title_text',
                    'type'      => 'text',
                    'title'     => esc_html__('Address Title Text Logo', 'kurigram'),
                    'default'   => esc_html__('kurigram', 'kurigram'),
                    'desc'      => esc_html__('Please set this way for different color. ex-  A<span>S</span>T<span>U</span>T<span>E</span>', 'kurigram'),					
                ),
                array(
                    'id'        => 'kurigram_address_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Address Image Logo', 'kurigram'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. recommend size:- 220x50px. Notice:- If you upload this logo, Title text logo will be hide ', 'kurigram'),
                ),			
                array(
                    'id'       => 'kurigram_address_road',
                    'type'     => 'text',
                    'title'    => esc_html__('Address Area Name', 'kurigram'),
                    'desc' => esc_html__('insert area name ex:- house, road-4.', 'kurigram'),
					'default'	=> esc_html__('1st Floor New World Tower Rang.', 'kurigram'),
                ),		
                array(
                    'id'       => 'kurigram_address_email',
                    'type'     => 'text',
                    'title'    => esc_html__('Email Number', 'kurigram'),
                    'desc' => esc_html__('Insert email number', 'kurigram'),
					'default'	=> esc_html__('demo@example.com', 'kurigram'),					
                ),		
                array(
                    'id'       => 'kurigram_address_mobile',
                    'type'     => 'text',
                    'title'    => esc_html__('Phone Number', 'kurigram'),
                    'desc' => esc_html__('Insert phone number', 'kurigram'),
					'default'	=> esc_html__('+998 556 778 345', 'kurigram'),					
                ),			
                array(								
                    'id'        => 'kurigram_address_title_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Address Title Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-top-address h2'
					)
                ),
                array(								
                    'id'        => 'kurigram_address_title2_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Address Title Text Color 2', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-top-address h2 span'
					)
                ),				
                array(								
                    'id'        => 'kurigram_address_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Address Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top_address_content a,.top_address_content span'
					)
                ),				
                array(								
                    'id'        => 'kurigram_address_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Address Section BG Color', 'kurigram'),
                    'default'  => '',
                    'output'    => array('
						.top-address-area
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),							
				array(
					'id'             => 'kurigram_address_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.top-address-area'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'kurigram'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'kurigram'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'kurigram'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),						
            )
    ) );
    //footer logo section
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( ' Footer Logo Section', 'kurigram' ),
        'id'         => 'kurigram_social_section',
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,
        'fields'     => array(
                array(
                    'id'        => 'kurigram_social_logo_style',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Logo Style', 'kurigram'),
                    'customizer_only'   => false,
                    'options'   => array(
                        's_logo_s1' => esc_html__('Show Text Logo','kurigram'),
                        's_logo_s2' => esc_html__('Show Image Logo','kurigram'),
                    ),
                    'default'   => 's_logo_s1'
                ),				
						
                array(
                    'id'        => 'kurigram_social_title_text',
                    'type'      => 'text',
                    'title'     => esc_html__('Footer Title Text Logo', 'kurigram'),
                    'default'   => esc_html__('kurigram', 'kurigram'),
                    'desc'      => esc_html__('Please set this way for different color. ex-  A<span>S</span>T<span>U</span>T<span>E</span>', 'kurigram'),
                ),
                array(
                    'id'        => 'kurigram_social_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Footer Image Logo', 'kurigram'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. recommend size:- 220x50px. Notice:- If you upload this logo, Title text logo will be hide ', 'kurigram'),
                ),				
                array(
                    'id'        => 'kurigram_social_text',
                    'type'      => 'editor',
                    'title'     => esc_html__('Footer logo section information', 'kurigram'),
                    'default'	=> esc_html__('Lorem ipsum dolor sit amet, consectetur ahkl adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud' , 'kurigram'),
                    'args'      => array(
                        'teeny'            => true,
                        'textarea_rows'    => 5,
                        'media_buttons' => false,
                    )
                ),		
                array(								
                    'id'        => 'kurigram_social_title_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer logo section Title Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
						'color' => '.footer-top-inner h2'
					)
                ),
                array(								
                    'id'        => 'kurigram_social_title2_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer logo section Title Text Color 2', 'kurigram'),
                    'default'  => '',
					'output'    => array(
						'color' => '.footer-top-inner h2 span'
					)
                ),				
                array(								
                    'id'        => 'kurigram_social_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer log section Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-top-inner p'
					)
                ),								
                array(								
                    'id'        => 'kurigram_social_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Footer logo Section BG Color', 'kurigram'),
                    'default'  => '',
                    'output'    => array('
						.footer-top
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),							
				array(
					'id'             => 'kurigram_social_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.footer-top'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'kurigram'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'kurigram'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'kurigram'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),					
				
            )
    ) );
	 // footer widget area 
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Footer Widget Section', 'kurigram' ),
        'id'          => 'kurigram_widget_section',
        'subsection' => true,
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
                array(								
                    'id'        => 'kurigram_wmb_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Together Widget and Cppyright Section BG Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
						'background-color' => '.witrfm_area '
					)					
					
                ),
				array(								
					'id'        => 'kurigram_wmbov_bg_color',
					'type'      => 'color_rgba',
					'title'     => esc_html__('Widget and Cppyright Overlay', 'kurigram'),
					'default'   => array(
						'color'     => '#00509f',
						'alpha'     => 0
					),
					'output'    => array(
					'background-color' => '.witrfm_area:before '
					)
				),
				 array(								
                    'id'        => 'txbdm_grf',
                    'type'      => 'color_gradient',
                    'title'     => esc_html__('Footer Gradient BG Color', 'kurigram'),
					'desc'     => esc_html__('Set Gradient From here.', 'kurigram'),
					'validate' => 'color',
					'default'  => array(
						'from' => '',
						'to'   => '', 
					),					
                ),				
                array(
                    'id'        => 'kurigram_widget_column_count',
                    'type'      => 'select',
                    'title'     => esc_html__('Widget Column Count', 'kurigram'),
                    'customizer_only'   => false,
                    'options'   => array(
                        '1' => esc_html__('Column 1','kurigram'),
                        '2' => esc_html__('Column 2','kurigram'),
                        '3' => esc_html__('Column 3','kurigram'),
                        '4' => esc_html__('Column 4','kurigram'),
                        '6' => esc_html__('Column 6','kurigram'),
                    ),
                    'default'   =>'4'
                ),		
				 array(	
                    'id'        => 'kurigram_widgett_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Title Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
						'color' => '.footer-middle .widget h2'
					)
                ),
                array(								
                    'id'        => 'kurigram_copyright_widget_li_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.footer-middle .widget ul li,
							.footer-middle .widget ul li a,
							.footer-middle .widget ul li::before,
							.footer-middle .tagcloud a,
							.footer-middle caption,
							.footer-middle table,
							.footer-middle table td a,
							.footer-middle cite,
							.footer-middle .rssSummary,
							.footer-middle span.rss-date,
							.footer-middle span.comment-author-link,
							.footer-middle .textwidget p,
							.footer-middle .widget .screen-reader-text,
							mc4wp-form-fields p,
							.mc4wp-form-fields,
							.footer-m-address p,
							.footer-m-address,
							.footer-widget.address,
							.footer-widget.address p,
							.mc4wp-form-fields p,
							.kurigram-description-area p, 
							.kurigram-description-area .phone a,
							.kurigram-description-area .social-icons a,
							.recent-review-content h3,
							.recent-review-content h3 a,
							.recent-review-content p,
							.footer-middle .kurigram-description-area p,
							.footer-middle .recent-post-text h4 a,
							.footer-middle .recent-post-text .rcomment,
							.witr_sub_table span
							
						')
                ),	
                array(								
                    'id'        => 'kurigram_copyright_widget_li_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Text Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.footer-middle .widget ul li a:hover,
							.footer-middle .widget ul li:hover::before,
							.footer-middle .sub-menu li a:hover, 
							.footer-middle .nav .children li a:hover,
							.footer-middle .tagcloud a:hover,
							#today
						')
                ),		
				array(								
                    'id'        => 'kurigram_widget_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Widget Section BG Color', 'kurigram'),
                    'default'  => '',
                    'output'    => array('
									.footer-middle
								'),
					'default'  => array(
						'background-color' => '',
					)					
                ),	
				array(
					'id'             => 'kurigram_widget_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.footer-middle'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'kurigram'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'kurigram'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'kurigram'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
				
            )
    ) );	

    //footer copyright text
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Footer Copyright Info', 'kurigram'),
        'id'        => 'kurigram_copyright',
        'desc'      => esc_html__('Insert your copyright style', 'kurigram'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,
        'fields'    => array(
                array(
                    'id'        => 'kurigram_footer_copyright_style',
                    'type'      => 'select',
                    'title'     => esc_html__('Copyright Style Layout', 'kurigram'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'copy_s1' => esc_html__('Copyright Text Style','kurigram'),
                        'copy_s2' => esc_html__('Copyright Text and Right Menu','kurigram'),
                        'copy_s3' => esc_html__('Copyright Text and Left Menu','kurigram'),
                        'copy_s4' => esc_html__('Copyright Text and Social Icon','kurigram'),
                    ),
                    'default'   => 'copy_s2'
                ),
                array(								
                    'id'        => 'kurigram_wftp_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Top Boeder Color', 'kurigram'),
                    'default'  => '',
                    'output'    => array('
						.footer-bottom:before
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),	
				
                array(
                    'id'        => 'kurigram_copyright_text',
                    'type'      => 'editor',
                    'title'     => esc_html__('Copyright information', 'kurigram'),
                    'subtitle'  => esc_html__('HTML tags allowed: a, br, em, strong', 'kurigram'),
                    'default'	=> esc_html__('Copyright &copy; kurigram all rights reserved.', 'kurigram'),
                    'args'      => array(
                        'teeny'            => true,
                        'textarea_rows'    => 5,
                        'media_buttons' => false,
                    )
                ),
                array(								
                    'id'        => 'kurigram_copyright_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Copyright Text Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.copy-right-text p,.footer-menu ul li a'
					)
                ),
                array(								
                    'id'        => 'kurigram_copyright_text_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Copyright Text Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.copy-right-text a, .footer-menu ul li a:hover'
					)
                ),				
                array(								
                    'id'        => 'kurigram_copyright_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Copyright Section BG Color', 'kurigram'),
                    'default'  => '',
                    'output'    => array('
					.footer-bottom
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),						
				
				array(
					'id'             => 'kurigram_copyright_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.footer-bottom'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'kurigram'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'kurigram'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'kurigram'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),				

				
				
				
            ),
    ) );


/*========================
kurigram Shortcode Option FIELD
=========================*/	 

    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Shortcode Option', 'kurigram'),
        'id'         => 'kurigram_shortcode',  
        'desc'       => esc_html__('Use this section to Title,Content,Shortcode  And color Option', 'kurigram'),
        'icon'       => 'el-icon-picture',
        'fields'    => array(
				array(
                    'id'       => 'witr_show_hide_shortcode',
                    'type'     => 'switch',
                    'title'    => esc_html__('Shortcode Section Show/Hide', 'kurigram'),
                    'default'  => false,
                ),				
				
				/* title */	
				array(
					'title'     => esc_html__( 'Title Text', 'kurigram' ),
					'subtitle'  => esc_html__('HTML tags allowed: br,span', 'kurigram'),
					'id'        => 'witr_title_shortcode',
					'default'   => 'Add your title here',
					'type'      => 'text',
					'desc'       => esc_html__('Please use this way Example ex-<span>Add your text here</span>, <a href="#">text</a>, </br>', 'kurigram'),
				),
				/* Content */	
                array(
                    'id'        => 'witr_content_shortcode',
                    'type'      => 'textarea',
                    'title'     => esc_html__('Content Text', 'kurigram'),
                    'subtitle'  => esc_html__('HTML tags allowed: a, br, em, strong,span,b', 'kurigram'),
                    'default'   => esc_html__('Lorem ipsum dolor sit met conjectural ', 'kurigram'),
					'desc'       => esc_html__('Please use this way Example ex-<span>text</span>, <a href="#">text</a>, <strong>text</strong>, <em>text</em>, <b>text</b>, </br>', 'kurigram'),
                ),

				/* Shortcode */
				array(
					'title'     => esc_html__( 'Shortcode', 'kurigram' ),
					'subtitle'  => esc_html__( 'Add your shortcode form field here.', 'kurigram' ),
					'id'        => 'witr_footre_shortcode',
					'type'      => 'text',
					'desc'       => esc_html__('Please use this way Example ex-[mc4wp_form id="831"]', 'kurigram'),
				),

				
				array(
				 'id'          => 'kurigram_shortcode_color',
				 'type'        => 'typography', 
				 'title'       => esc_html__('Title Typography', 'kurigram'),
				 'google'      => true, 
				 'font-backup' => true,
				 'line-height'   => false,
				 'text-align'   => false,
				 'units'       =>'px',
				 'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'kurigram'),
				 'default'     => array(
					  'color'       => '', 
					  'font-style'  => '', 
					  'font-family' => '', 
					  'google'      => true,
					  'font-size'   => '', 
					 ),
				 'output'      => array('
				  .shortcode_content h2'      
				 ),					 
				),				
                array(								
                    'id'        => 'kurigram_shortcode_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Title Hover Color', 'kurigram'),
                    'default'  => '',
					'output'    => array(
					'color' => '.shortcode_content h2:hover'
					)
                ),				
				
				array(
				 'id'          => 'kurigram_short_typo_content',
				 'type'        => 'typography', 
				 'title'       => esc_html__('Content Typography', 'kurigram'),
				 'google'      => true, 
				 'font-backup' => true,
				 'line-height'   => false,
				 'text-align'   => false,
				 'units'       =>'px',
				 'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'kurigram'),
				 'default'     => array(
					  'color'       => '', 
					  'font-style'  => '', 
					  'font-family' => '', 
					  'google'      => true,
					  'font-size'   => '', 
					 ),
				 'output'      => array('
				  .shortcode_content p'      
				 ),					 
				),

				array(
					'id'             => 'kurigram_shortcode_form_margin',
					'type'           => 'spacing',
					'output'         => array('.witr_shortcode_form'),
					'mode'           => 'margin',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__(' shortcode Form Margin', 'kurigram'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing margin they want.', 'kurigram'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'kurigram'),
					'default'            => array(
						'margin-top'     => '', 
						'margin-right'   => '', 
						'margin-bottom'  => '', 
						'margin-left'    => '',
						'units'          => 'px', 
					)
				),
                array(								
                    'id'        => 'kurigram_shortcode_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__(' Section BG Color', 'kurigram'),
                    'default'  => '',
                    'output'    => array('
					.witr_shortcode_inner'
					),
					'default'  => array(
						'background-color' => '',
					)					
                ),										
				array(
					'id'             => 'kurigram_shortcode_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.witr_shortcode_inner'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__(' Box Padding Option', 'kurigram'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'kurigram'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'kurigram'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
				array(
					'id'             => 'kurigram_shortcode_section_margin',
					'type'           => 'spacing',
					'output'         => array('.witr_shortcode_inner'),
					'mode'           => 'margin',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__(' Box Margin Option', 'kurigram'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing margin they want.', 'kurigram'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'kurigram'),
					'default'            => array(
						'margin-top'     => '', 
						'margin-right'   => '', 
						'margin-bottom'  => '', 
						'margin-left'    => '',
						'units'          => 'px', 
					)
				),				


				
            ),
    ) );




	
	
			
/* ========================
END kurigram FOOTER FIELD
=========================*/	

    Redux::setSection( $opt_name, array(
        'icon'            => 'el el-list-alt',
        'title'           => esc_html__( 'Customizer Only', 'kurigram' ),
        'desc'            => esc_html__( 'This Section should be visible only in Customizer', 'kurigram' ),
        'customizer_only' => true,
        'fields'          => array(
            array(
                'id'              => 'opt-customizer-only',
                'type'            => 'select',
                'title'           => esc_html__( 'Customizer Only Option', 'kurigram' ),
                'subtitle'        => esc_html__( 'The subtitle is NOT visible in customizer', 'kurigram' ),
                'desc'            => esc_html__( 'The field desc is NOT visible in customizer.', 'kurigram' ),
                'customizer_only' => true,
                //Must provide key => value pairs for select options
                'options'         => array(
                    '1' => esc_html__('Opt 1','kurigram'),
                    '2' => esc_html__('Opt 2','kurigram'),
                    '3' => esc_html__('Opt 3','kurigram')
                ),
                'default'         => '2'
            ),
        )
    ) );   	 
	 
	 
	 

    /*
     * <--- END SECTIONS
     */
