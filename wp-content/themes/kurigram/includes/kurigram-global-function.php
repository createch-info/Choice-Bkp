<?php
// theme fallback menu
if(!function_exists('kurigram_fallback_menu')){
	
	function kurigram_fallback_menu(){?>

		<ul class="main-menu clearfix">
			<li><a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"><?php esc_html_e('Create Menu','kurigram'); ?></a></li>
		</ul>	
	<?php }			
}

// theme main menu
if(!function_exists('kurigram_main_menu')){
	
	function kurigram_main_menu(){
		wp_nav_menu(array(
			 'theme_location' =>'menu-1',
			 'container'      => false,
			 'menu_class' =>'sub-menu',
			 'fallback_cb' =>'kurigram_fallback_menu',									
		));
	}
}


// theme main menu
if(!function_exists('kurigram_one_page_menu')){
	
	function kurigram_one_page_menu(){
		wp_nav_menu(array(
			 'theme_location' =>'one-pages',
			 'container'      => false,
			 'menu_class' =>'sub-menu nav_scroll',
			 'fallback_cb' =>'kurigram_fallback_menu',									
		));
	}
}



// theme main menu
if(!function_exists('kurigram_mobile_menu')){
	
	function kurigram_mobile_menu(){
		wp_nav_menu(array(
			 'theme_location' =>'menu-3',
			 'container'      => false,
			 'menu_class' =>'main-menu clearfix',
			 'fallback_cb' =>'kurigram_fallback_menu',									
		));
	}
}

// mobile logo display
if(!function_exists('mobile_logo_display')){
	function mobile_logo_display(){
		global $kurigram_opt;	
		?>

<div class="mobile_logo_area">
	<div class="container">
		<div class="row">
			<div class="col-12">
			<div class="mobilemenu_con">
				<?php kurigram_mobile_top_logo(); ?>
					<div class="mobile_menu_option">
						<div class="mobile_menu_o mobile_opicon">
							<i class="icofont-navigation-menu openclass"></i>
						</div>
					<!--SEARCH FORM-->
					<div class="mobile_menu_inner mobile_p">
						<div class="mobile_menu_content">
							<?php kurigram_mobile_top_logo(); ?>
							<div class="menu_area mobile-menu ">
								<nav>
									<?php kurigram_mobile_menu(); ?>
								</nav>
							</div>
							<div class="mobile_menu_o mobile_cicon">
								<i class="icofont-close closeclass"></i>
							</div>
						</div>	
			
						
					</div>
						<div class="mobile_overlay"></div>
				</div>		
				
			</div>
		
			</div>	
			
		</div>
	</div>
</div>
												
						
	<?php
	}
}


// theme logo 1 setting 
if(!function_exists('kurigram_main_logo')){				
	function kurigram_main_logo(){
	 global $kurigram_opt;
	 if(is_ssl()){
	  $kurigram_opt['kurigram_logo']['url'] = str_replace('http:', 'https:', $kurigram_opt['kurigram_logo']['url']);
	  $kurigram_opt['kurigram_ts_logo']['url'] = str_replace('http:', 'https:', $kurigram_opt['kurigram_ts_logo']['url']);
	 }
	 ?>

	  <?php if( isset($kurigram_opt['kurigram_logo']['url']) && ! empty($kurigram_opt['kurigram_logo']['url']) ){ ?>
	  
		<div class="logo">
			<a class="main_sticky_main_l" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<img src="<?php echo esc_url($kurigram_opt['kurigram_logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" />
			</a>
			<a class="main_sticky_l" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<img src="<?php echo esc_url($kurigram_opt['kurigram_ts_logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" />
			</a>
					
		
		</div>	  

	  <?php
	  
	  } else { ?>
	  
			<div class="logo_area">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1><?php 
	  			$description = get_bloginfo( 'description', 'display' );
				$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo esc_html( $description ); ?></p>
			<?php endif; ?>
			
			</div>	 					
	 
	<?php  }
	}
}


// theme logo 2 setting 
if(!function_exists('kurigram_onepage_logo')){				
	function kurigram_onepage_logo(){
	 global $kurigram_opt;
	 if(is_ssl()){
	  $kurigram_opt['kurigram_onepage_logo']['url'] = str_replace('http:', 'https:', $kurigram_opt['kurigram_onepage_logo']['url']);
	  $kurigram_opt['kurigram_ts_logo']['url'] = str_replace('http:', 'https:', $kurigram_opt['kurigram_ts_logo']['url']);
	 }
	 ?>

	  <?php if( isset($kurigram_opt['kurigram_onepage_logo']['url']) ){ ?>
	  
		<div class="logo">
			<a class="main_sticky_main_l"  href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<img src="<?php echo esc_url($kurigram_opt['kurigram_onepage_logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" />
			</a>
			<a class="main_sticky_l" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<img src="<?php echo esc_url($kurigram_opt['kurigram_ts_logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" />
			</a>			
		</div>	  

	  <?php
		}
	}
}
// theme logo 3 setting 
if(!function_exists('kurigram_ts_logo')){				
	function kurigram_ts_logo(){
	 global $kurigram_opt;
	 if(is_ssl()){
	  $kurigram_opt['kurigram_ts_logo']['url'] = str_replace('http:', 'https:', $kurigram_opt['kurigram_ts_logo']['url']);
	 }
	 ?>

	  <?php if( isset($kurigram_opt['kurigram_ts_logo']['url']) ){ ?>
	  
		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<img src="<?php echo esc_url($kurigram_opt['kurigram_ts_logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" />
			</a>		
		</div>	  

	  <?php
		}
	}
}
// theme logo 4 for mobile 
if(!function_exists('kurigram_mobile_top_logo')){				
	function kurigram_mobile_top_logo(){
	 global $kurigram_opt;
	 if(is_ssl()){
	  $kurigram_opt['kurigram_mobile_top_logo']['url'] = str_replace('http:', 'https:', $kurigram_opt['kurigram_mobile_top_logo']['url']);
	 }
	 ?>

	  <?php if( isset($kurigram_opt['kurigram_mobile_top_logo']['url']) ){ ?>
		<div class="mobile_menu_logo text-center">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<img src="<?php echo esc_url($kurigram_opt['kurigram_mobile_top_logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" />
			</a>		
		</div>
	  <?php
		}
	}
}



/* login option */
if(!function_exists('kurigram_login')){
	function kurigram_login(){
		if (is_user_logged_in()) {?>
		
				<a href="<?php echo esc_url(wp_logout_url(get_permalink()));?>"><i class="fas fa-user"></i> <?php esc_html_e('Logout','kurigram');?></a>
			
			<?php }else{?>
			
				<a href="<?php echo esc_url(wp_login_url( get_permalink() ));?>"><i class="fas fa-user"></i> <?php esc_html_e('Login','kurigram');?></a>
				<a href="<?php echo esc_url(wp_registration_url(get_permalink()));?>"><i class="fas fa-key"></i> <?php esc_html_e('Register','kurigram');?></a>

		<?php }		

	}
}
if(!function_exists('kurigram_search_code')){
	function kurigram_search_code(){
		?>
			<div class="em-quearys-top msin-menu-search">
				<div class="em-top-quearys-area">
				   <div class="em-header-quearys">
						<div class="em-quearys-menu">
							<i class="fa fa-search t-quearys"></i>
						</div>
					</div>
					<!--SEARCH FORM-->
					<div class="em-quearys-inner">
						<div class="em-quearys-form">
							<form class="top-form-control" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
									<input type="text" placeholder="<?php echo esc_attr_e( 'Type Your Keyword', 'kurigram' ) ?>" name="s" value="<?php the_search_query(); ?>" />
								<button class="top-quearys-style" type="submit">
									<i class="fas fa-long-arrow-alt-right"></i>
								</button>
							</form>

							<div class="em-header-quearys-close text-center mrt10">
								<div class="em-quearys-menu">
									 <i class="fa fa-close  t-close em-s-hidden "></i>
								</div>
							</div>											
						</div>
					</div>														
				</div>
			</div>				
	<?php
	}
}


if(!function_exists('kurigram_right_side_menu')){
	function kurigram_right_side_menu(){
		?>

		   <div class="right_popupmenu_area">
			   <div class="right_side_icon">
					<div class="right_sideber_menu">
						<i class="icofont-navigation-menu openclass"></i>
					</div>
				</div>
				<!--SEARCH FORM-->
				<div class="right_sideber_menu_inner">
					<div class="right_sideber_content">
						<div class="blog-left-side widget">
							<?php if ( is_active_sidebar( 'sidebar-pop' ) ) {
								dynamic_sidebar( 'sidebar-pop' );
							}?>
						</div>					
						<div class="right_side_icon right_close_class">
							<div class="right_sideber_menu">
								<i class="icofont-close-line-squared closeclass"></i>
							</div>
						</div>											
					</div>
				</div>													
			</div>													
						
	<?php
	}
}



//kurigram comment form
add_filter('comment_form_default_fields','kurigram_comments_form');
if(!function_exists('kurigram_comments_form')){
    function kurigram_comments_form($default){
			$default['author'] = '<div  class="comment_forms"><div  class="comment_forms_inner">
			
			<div class="comment_field"><div class="input-field">
				<label for="name">'.esc_html__('Name','kurigram').'<em>*</em></label>
				<input id="name" name="author" type="text" placeholder="'.esc_html__('Your Name','kurigram').'"/>
			</div>';

			$default['email'] = '
			<div class="input-field">
				<label for="email">'.esc_html__('E-mail Address','kurigram').'<em>*</em></label>
				<input id="email"  name="email" type="text" placeholder="'.esc_html__('Email Address','kurigram').'"/>
			</div>';	

			$default['title'] = '
			<div class="input-field">
				<label for="title">'.esc_html__('Website','kurigram').'<em>*</em></label>
				<input id="title" name="url" type="text" placeholder="'.esc_html__('Your Website','kurigram').'"/>
			</div> </div>';	
			$default['url']='';
			$default['message'] ='<div class="comment_field"><div class="textarea-field"><label for="comment">'.esc_html__('Comment','kurigram').'<em>*</em></label><textarea name="comment" id="comment" cols="30" rows="10" placeholder="'.esc_html__('Write your comment...','kurigram').'"></textarea></div></div>   </div></div>';																		

 
        return $default;
    }
}
add_filter('comment_form_defaults','kurigram_form_default');

 if(!function_exists('kurigram_form_default')){
    function kurigram_form_default($default_info){
        if(!is_user_logged_in()){
            $default_info['comment_field'] = '';
        }else{
            $default_info['comment_field'] = '<div  class="comment_forms"><div  class="comment_forms_inner"> <div class="comment_field"><div class="textarea-field"><label for="comment">'.esc_html__('Comment','kurigram').'<em>*</em></label><textarea name="comment" id="comment" cols="30" rows="10" placeholder="'.esc_html__('Write your comment...','kurigram').'"></textarea></div></div> </div></div>';
        }
         
        $default_info['submit_button'] = '<button class="kurigram_btn" type="submit">'.esc_html__('Post Comment','kurigram').'</button>';
        $default_info['submit_field'] = '%1$s %2$s';
        $default_info['comment_notes_before'] = ' ';
        $default_info['title_reply'] = esc_html__('leave a comment ','kurigram');
        $default_info['title_reply_before'] = '<div class="commment_title"><h3> ';
        $default_info['title_reply_after'] = '</h3></div> ';
 
        return $default_info;
    }
 
 }
	
	
//kurigram comment show
if(! function_exists('kurigram_comment')){
	function kurigram_comment($comment,$arg, $depth){
		$GLOBALS ['comment'] = $comment;
		?>

		<!-- connent reply -->		
		<div class="post_comment">
			<div class="comment_inner">
				<div class="post_replay">
					<div class="post_replay_content">											
						<div class="post_replay_inner" id="comment-<?php comment_ID(); ?>">
							<div class="post_reply_thumb">
								 <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"> <?php echo get_avatar($comment,80); ?></a>
							</div>
							<div class="post_reply">
								<div class="st"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_comment_author(); ?></a></div>
								<div class="reply_date">
									<span class="span_left"><?php echo get_comment_date(get_option('date_format')); ?></span>
									<?php 
										comment_reply_link(
											array_merge($arg,array(
												'reply_text' => '<span class="span_right">'. esc_html__('REPLY','kurigram').'</span>',
												'depth'    => $depth,
												'max_depth' => $arg['max_depth']
											))
									); ?>   
									
								</div>
								<p><?php comment_text(); ?></p>
								<div class="edit_comment"><?php edit_comment_link(esc_html__('(Edit)' , 'kurigram' ),'<small class="ecome">','</small>') ?></div>
							</div>
							
						</div>
					</div>																
				</div>
			</div>
		</div>		
	
		<?php
	}
}



/**
 * Add color styling from theme
 */
 
 if( !function_exists( 'kurigram_inline_styles' ) ) {
function kurigram_inline_styles() {
	 global $kurigram_opt;
	 $lheight=$logoheight=$lwidth=$logoweight=$linheight=$lmtop=$mobile_image=$mobile_image_sec='';
	
		if (!empty($kurigram_opt['kurigram_logo_height'])){
			$lheight=$kurigram_opt['kurigram_logo_height'];
			$logoheight="height:{$lheight}";
		}
		if (!empty($kurigram_opt['kurigram_logo_widget'])){
			$lwidth=$kurigram_opt['kurigram_logo_widget'];
			$logoweight="width:{$lwidth}";
		}
		if (!empty($kurigram_opt['kurigram_line_height'])){
			$linheight=$kurigram_opt['kurigram_line_height'];
			$lmtop="margin-top:{$linheight}";
		}
		if (!empty($kurigram_opt['kurigram_mobile_image_logo'])){
			$mobile_image=$kurigram_opt['kurigram_mobile_image_logo'];
			$mobile_image_sec="content:{$mobile_image}";
		}
		
		/* footer gradient */
		$seoico_grdf1=$seoico_grdf2=$seoico_gfooter="";

		if (!empty($kurigram_opt['txbdm_grf'])){
			$txbdm_grdf1=$kurigram_opt['txbdm_grf']['from'] ;
			$txbdm_grdf2=$kurigram_opt['txbdm_grf']['to'] ;
			$txbdm_gfooter="background: linear-gradient(45deg, {$txbdm_grdf1}, {$txbdm_grdf2});";
		}
		
		/* menu btn gradient */
		$txbdm_menugb1=$txbdm_menugb2=$txbdm_menubtn=$txbdm_menugbh1=$txbdm_menugbh2=$txbdm_menubtnh="";

		if (!empty($kurigram_opt['txbdm_menu_gr'])){
			$txbdm_menugb1=$kurigram_opt['txbdm_menu_gr']['from'] ;
			$txbdm_menugb2=$kurigram_opt['txbdm_menu_gr']['to'] ;
			$txbdm_menubtn="background: linear-gradient(45deg, {$txbdm_menugb1}, {$txbdm_menugb2});";
		}
		/* menu btn gradient hover */
		if (!empty($kurigram_opt['txbdm_menuh_gr'])){
			$txbdm_menugbh1=$kurigram_opt['txbdm_menuh_gr']['from'] ;
			$txbdm_menugbh2=$kurigram_opt['txbdm_menuh_gr']['to'] ;
			$txbdm_menubtnh="background: linear-gradient(-45deg, {$txbdm_menugbh1}, {$txbdm_menugbh2});";
		}		
			 
		wp_enqueue_style(
			'kurigram-breadcrumb',
			get_template_directory_uri() . '/assets/css/em-breadcrumb.css'
		);			
        $inlinewp_css = "
					.logo img {
						{$logoheight};
						{$logoweight};
					}
					.logo a{
						{$lmtop}
					}
					.mean-container .mean-bar::before{
						{$mobile_image_sec}						
					}
					a.dtbtn{
						{$txbdm_menubtn}						
					}
					a.dtbtn:hover{
						{$txbdm_menubtnh}						
					}
               ";				
				
        wp_add_inline_style( 'kurigram-breadcrumb', $inlinewp_css );
	}
}
add_action( 'wp_enqueue_scripts', 'kurigram_inline_styles',200 );


/**
* Print pagination
*
* @param    array           $args           Arguments for this function, including 'query', 'range'
* @param    string         $wrapper        Type of html wrapper
* @param    string         $wrapper_class  Class of HTML wrapper
* @echo     string                          Post Meta HTML
*/
if( !function_exists( 'kurigram_pagination' ) ) {
	function kurigram_pagination( $args = NULL , $wrapper = 'div', $wrapper_class = 'paginations' ) {

		// Set up some globals
		global $wp_query, $paged;

		// Get the current page
		if( empty($paged ) ) $paged = ( get_query_var('page') ? get_query_var('page') : 1 );

		// Set a large number for the 'base' argument
		$big = 99999;

		// Get the correct post query
		if( !isset( $args[ 'query' ] ) ){
			$use_query = $wp_query;
		} else {
			$use_query = $args[ 'query' ];
		} ?>

		<<?php echo esc_html($wrapper); ?> class="<?php echo esc_html($wrapper_class); ?>">
			<?php echo paginate_links( array(
				'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
				'prev_next' => true,
				'mid_size' => ( isset( $args[ 'range' ] ) ? $args[ 'range' ] : 5 ) ,
				'prev_text' => '<i class="fas fa-long-arrow-alt-left"></i>',
				'next_text' => '<i class="fas fa-long-arrow-alt-right"></i>',				
				'type' => 'list',
				'current' => $paged,
				'total' => $use_query->max_num_pages
			) ); ?>
		</<?php echo esc_html($wrapper); ?>>
	<?php }
} // kurigram_pagination


if( !function_exists( 'kurigram_slider_o' ) ) {
 function kurigram_slider_o( $file_list_meta_key, $img_size = 'full' ) {

  // Get the list of files
  $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

  // Loop through them and output an image
  foreach ( (array) $files as $attachment_id => $attachment_url ) {
			echo '<div class="gitem">';
			echo wp_get_attachment_image( $attachment_id, $img_size );
			echo '</div>';
		}
	}
}

if(class_exists( 'WooCommerce' )){


	/* change add to cart button text */
	if(! function_exists('kurigram_archive_custom_cart_button_text')){	
	add_filter('woocommerce_product_add_to_cart_text', 'kurigram_archive_custom_cart_button_text');
		function kurigram_archive_custom_cart_button_text(){
		global $kurigram_opt;
		$kurigram_add_text="";
			if (!empty($kurigram_opt['kurigram_woocommerce_button'])){
				$kurigram_add_text = $kurigram_opt['kurigram_woocommerce_button'];
			}else{
				$kurigram_add_text = esc_html__('Buy Now', 'kurigram');
			}
			return $kurigram_add_text;
		}
	}
	
	
} //end class	

/**
 * @param string  $content   Text content to filter.
 * @return string Filtered content containing only the allowed HTML.
 * */
if( ! function_exists( 'kurigram_kses_post' ) ) {
    function kurigram_kses_post($content) {
        $allowed_tag = array(
            'strong' => [],
            'br' => [],
            'p' => [
                'class' => [],
                'style' => [],
            ],
            'i' => [
                'class' => [],
                'style' => [],
            ],
            'ul' => [
                'class' => [],
                'style' => [],
            ],
            'li' => [
                'class' => [],
                'style' => [],
            ],
            'span' => [
                'class' => [],
                'style' => [],
            ],
            'a' => [
                'href' => [],
                'target' => [],
                'class' => []
            ],
            'div' => [
                'class' => [],
                'style' => [],
            ],
            'h1' => [
                'class' => [],
                'style' => []
            ],
            'h2' => [
                'class' => [],
                'style' => []
            ],
            'h3' => [
                'class' => [],
                'style' => []
            ],
            'h4' => [
                'class' => [],
                'style' => []
            ],
            'h5' => [
                'class' => [],
                'style' => []
            ],
            'h6' => [
                'class' => [],
                'style' => []
            ],
            'img' => [
                'class' => [],
                'style' => [],
                'height' => [],
                'width' => [],
                'src' => [],
                'srcset' => [],
                'alt' => [],
            ],

        );
        return wp_kses($content, $allowed_tag);
    }
}


