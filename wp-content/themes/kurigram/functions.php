<?php
/**
 * kurigram functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kurigram
 */


if ( ! function_exists( 'kurigram_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kurigram_setup() {

	load_theme_textdomain( 'kurigram', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-formats', array( 'gallery', 'quote', 'video', 'audio' ) );
	add_image_size( 'kurigram-blog-default', 390, 250, true );
	add_image_size( 'kurigram-blog6-default', 390, 250, true );
	add_image_size( 'kurigram-blog-default2', 370, 430, true );
	add_image_size( 'kurigram-blog-default8', 370, 440, true );
	add_image_size( 'kurigram-event-default', 420, 350, true );
	add_image_size( 'kurigram-event-370-450', 370, 450, true );
	add_image_size( 'kurigram-blog-single', 900, 550, true );
	add_image_size( 'kurigram-event-single', 770, 450, true );
	add_image_size( 'kurigram-blog-both', 570, 350, true );
	add_image_size( 'kurigram-team', 450, 450, true );
	add_image_size( 'kurigram-testimonial', 106, 106, true );
	add_image_size( 'kurigram-single-portfolio', 1170, 600, true );
	add_image_size( 'kurigram-gallery-thumb', 560, 560, true );
	add_image_size( 'kurigram_recent_image', 70, 70, true );
	add_theme_support('woocommerce');
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );						
	add_theme_support( 'post-thumbnails' );
	add_editor_style();

	register_nav_menus( array(
		'menu-top' => esc_html__( 'Top Menu', 'kurigram' ),
		'menu-1' => esc_html__( 'Main Menu', 'kurigram' ),
		'one-pages' => esc_html__( 'One Page Menu', 'kurigram' ),		
		'menu-2' => esc_html__( 'Footer Menu', 'kurigram' ),
		'menu-3' => esc_html__( 'Mobile Menu', 'kurigram' ),
	) );
	
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-background', apply_filters( 'kurigram_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'kurigram_setup' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
*visual composer 
*/

// load redux
if ( class_exists('ReduxFrameworkPlugin') ) {
	require get_template_directory(). '/includes/kurigram-option-framework.php';
}
require get_template_directory(). '/includes/kurigram-global-function.php';
require get_template_directory(). '/includes/kurigram-breadcrumb.php';
require get_template_directory(). '/includes/kurigram-tgm-activation.php';
require get_template_directory(). '/includes/twr-wooconfig.php';

/**
 *Register Fonts
*/
if(!function_exists('kurigram_fonts_url')){
	
	function kurigram_fonts_url(){
	 $fonts_url = '';
	 
	 /* Translators: If there are characters in your language that are not
	 * supported by Roboto, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	 $kurigram_font1 = _x( 'on', 'Livvic font: on or off', 'kurigram' );
	 $kurigram_font2 = _x( 'on', 'Livvic font: on or off', 'kurigram' );
	 
	 if ( 'off' !== $kurigram_font1 ) {
	 $font_families = array();
	 }
	 
	 if ( 'off' !== $kurigram_font1 ) {
	 $font_families[] = 'Livvic:100,200,300,400,500,600,700,900';
	 }
	 
	 if ( 'off' !== $kurigram_font2 ) {
	 $font_families[] = 'Livvic:100,200,300,400,500,600,700,900';
	 }

	if ( $font_families ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		), 'https://fonts.googleapis.com/css' );
	}
	 
	 
	 
	 return esc_url_raw( $fonts_url ); 
	}
	
}



// load style
if(!function_exists('kurigram_styles')){
	
	function kurigram_styles(){
		
		wp_enqueue_style('bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css');
		wp_enqueue_style( 'kurigram-fonts', kurigram_fonts_url(), array() );		
		wp_enqueue_style('venobox', get_template_directory_uri() .'/venobox/venobox.css');	
		wp_enqueue_style('swipercss', get_template_directory_uri() .'/assets/css/txbd-swiper-bundle.min.css');
		wp_enqueue_script( 'modernizrs', get_template_directory_uri() . '/assets/js/modernizr.custom.79639.js', array('jquery'), '3.2.4', true );	
		wp_enqueue_style('kurigram-plugin-style', get_template_directory_uri() .'/assets/css/plugin_theme_css.css');
		if ( is_rtl() ) {
			wp_enqueue_style('kurigram-main-style', get_template_directory_uri() .'/assets/css/style-rtl.css');
			wp_enqueue_style( 'kurigram-style', get_stylesheet_uri() );	
			wp_enqueue_style('kurigram-responsive', get_template_directory_uri() .'/assets/css/responsive-rtl.css');			
		}else{
			wp_enqueue_style('kurigram-main-style', get_template_directory_uri() .'/assets/css/style.css');
			wp_enqueue_style( 'kurigram-style', get_stylesheet_uri() );	
			wp_enqueue_style('kurigram-responsive', get_template_directory_uri() .'/assets/css/responsive.css');			
		}		
	
	}
	
}

add_action( 'wp_enqueue_scripts', 'kurigram_styles' );


 // Load scripts.
if(!function_exists('kurigram_scripts')){
	
	function kurigram_scripts() {
		
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', array(), '2.8.3', true );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.5', true );
		wp_enqueue_script( 'imagesloaded');
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'nivo-slider', get_template_directory_uri() . '/assets/js/jquery.nivo.slider.pack.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'venobox', get_template_directory_uri() . '/venobox/venobox.min.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'jquery-appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'jquery-knob', get_template_directory_uri() . '/assets/js/jquery.knob.js', array('jquery'), '3.2.4', true );		
		wp_enqueue_script( 'BeerSlider', get_template_directory_uri() . '/assets/js/BeerSlider.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'swiperjs', get_template_directory_uri() . '/assets/js/txbd-swiper-bundle.min.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'theme-plugin', get_template_directory_uri() . '/assets/js/theme-pluginjs.js', array('jquery'), '3.2.4', true );		
		wp_enqueue_script( 'kurigram-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
		wp_enqueue_script( 'kurigram-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
		if ( is_rtl() ) {
		wp_enqueue_script( 'kurigram-theme', get_template_directory_uri() . '/assets/js/theme-rtl.js', array('jquery'), '3.2.4', true );			
		}else{
		wp_enqueue_script( 'kurigram-theme', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), '3.2.4', true );			
		}
		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'kurigram_scripts' );

/**
 * kurigram widget js
 */
 if(!function_exists('kurigram_media_scripts')){
	 
	function kurigram_media_scripts() {
		wp_enqueue_media();
		wp_enqueue_script('kurigram-uploader', get_template_directory_uri() .'/assets/js/kurigram_uploader.js', false, '', true );
	}
 }
add_action('admin_enqueue_scripts', 'kurigram_media_scripts');



// Content word count
if(!function_exists('kurigram_read_more')){
		
	function kurigram_read_more($limit){
		$content = explode(' ', get_the_content());
		$count   = array_slice($content, 0 , $limit);
		echo implode (' ', $count);
	}
}

// Title word count
if(!function_exists('the_title')){
	
	function the_title($limit){
		$title = explode(' ' , get_the_title());
		$titles = array_slice($title , 0, $limit);
		echo implode(' ', $titles);
	}
	
}



/**
 * Register widget area.
 */
if(!function_exists('kurigram_widgets_init')){
	
	function kurigram_widgets_init() {
				
		register_sidebar( array(
			'name'          => esc_html__( 'Blog Left Sidebar', 'kurigram' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kurigram' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Blog Right Sidebar', 'kurigram' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'kurigram' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Page Left Sidebar', 'kurigram' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'kurigram' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Page Right Sidebar', 'kurigram' ),
			'id'            => 'sidebar-4',
			'description'   => esc_html__( 'Add widgets here.', 'kurigram' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Shop Left Sidebar', 'kurigram' ),
			'id'            => 'sidebar-5',
			'description'   => esc_html__( 'Add widgets here.', 'kurigram' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Popup Menu Sidebar', 'kurigram' ),
			'id'            => 'sidebar-pop',
			'description'   => esc_html__( 'Add widgets here.', 'kurigram' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );		
		/**
		 * Register Footer Sidebars
		 */
		for( $footer = 1; $footer < 5; $footer++ ) {
			register_sidebar( array(
				'id'		=> 'kurigram-footer-' . $footer,
				'name'		=> esc_html__( 'Footer ', 'kurigram' ) . $footer,
				'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
				'after_widget'	=> '</div>',
				'before_title'	=> '<h2 class="widget-title">',
				'after_title'	=> '</h2>',
			) );
		} // for footers		
		
		
	}
		
}
add_action( 'widgets_init', 'kurigram_widgets_init' );
	
/*Disables the block editor from managing widgets in the Gutenberg plugin.*/
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );
/* Disables the block editor from managing widgets.*/
add_filter( 'use_widgets_block_editor', '__return_false' );











