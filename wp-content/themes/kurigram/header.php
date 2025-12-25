<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kurigram
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta
  name="description"
  content="Kurigram is one of the best WP theme, There have many feature avaiable.">	
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <?php wp_body_open(); ?>
 
<?php global $kurigram_opt; 
get_template_part('includes/twr_preloader');

/* body side social icon */
 if (!empty($kurigram_opt['txbdm_header_display_social_hide']) && $kurigram_opt['txbdm_header_display_social_hide']==true): ?>

<div class="em_slider_social">
	<ul>

		<?php 
			foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 		
				if($value != ''){						
					 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
				}
			}
		?>			
		
	</ul>
</div>

<?php endif; ?>




<!-- MAIN WRAPPER START -->
<div class="wrapper">
	
 <?php  
 $txbdm_toptsstas1 = get_post_meta( get_the_ID(),'_txbdm_toptsstas1', true );  
 $txbdm_toptsstas2 = get_post_meta( get_the_ID(),'_txbdm_toptsstas2', true );  
 $txbdm_toptsstas3 = get_post_meta( get_the_ID(),'_txbdm_toptsstas3', true ); 
 $txbdm_box_menu = get_post_meta( get_the_ID(),'_txbdm_box_menu_style', true ); 
 $txbdm_box_menu2 = get_post_meta( get_the_ID(),'_txbdm_box_menu_style2', true ); 
 $txbdm_box_menu3 = get_post_meta( get_the_ID(),'_txbdm_box_menu_style3', true ); 
 ?>				
	<?php if (!empty($kurigram_opt['txbdm_header_display_none_hide']) && $kurigram_opt['txbdm_header_display_none_hide']==true): ?>	

	<div class="em40_header_area_main hdisplay_none">
	<?php else: ?>
		<div class="em40_header_area_main  <?php if(!empty($kurigram_opt['txbdm_header_posi_top']) && $kurigram_opt['txbdm_header_posi_top']==true){echo esc_attr('all_header_abs');}elseif($txbdm_toptsstas1==2){echo esc_attr('all_header_abs');}else{}; ?>   ">
	<?php endif; ?>






<!-- HEADER TOP AREA -->

 <?php  $txbdm_header_topa = get_post_meta( get_the_ID(),'_txbdm_txbdm_header_topa', true );  ?>

	
	<?php if (!empty($kurigram_opt['txbdm_header_top_hide']) && $kurigram_opt['txbdm_header_top_hide']==true){ ?>	
 	
 	<!-- HEADER TOP AREA -->
		<div class="kurigram-header-top   <?php if(!empty($kurigram_opt['kurigram_box_layout']) && $kurigram_opt['kurigram_box_layout']=="htopt_boxi"){echo esc_attr('container');}else{ }?>">
					
			<div class="<?php if(!empty($kurigram_opt['kurigram_box_layout']) && $kurigram_opt['kurigram_box_layout']=="htopt_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
									
				<!-- STYLE 1 Right Side Icon = h_top_l1  -->
				 <?php if(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l1"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-lg-9 col-xl-9 col-md-9 col-sm-12">
							<div class="top-address text-left">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-lg-3 col-xl-3 col-md-3 col-sm-12 ">
							<div class="top-right-menu">
								<ul class="social-icons text-right text_m_center">
									<?php 
										foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>									 									 								 
							</div>
						</div>	
					</div>		
				<!-- STYLE 2 Welcome Style 1 = h_top_l2  -->	
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l2"){?>							
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-lg-6 col-md-8 ">
							<div class="top-address text-left">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						
						<!-- TOP MIDDLE -->
						<div class="col-xs-12 col-lg-3 col-md-4">
							<div class="top-welcome">
								<?php if (!empty($kurigram_opt['kurigram_header_top_wellcome'])): ?>	
									<p class="text-center">	
									<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i4'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
									<?php 
										echo wp_kses($kurigram_opt['kurigram_header_top_wellcome'], array(
											'br' => array(),
											'h2' => array(),
											'a' => array(
													'href' => array(),
													'title' => array()										
												),
											'strong' => array(),
											'em' => array(),
											'p' => array(),
											'span' => array(),
										));
									?>	</span>	
									</p>
								<?php endif; ?>
							</div>
						</div>					
						
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-lg-3 col-md-12">
							<div class="top-right-menu">
									<ul class="social-icons text-right text_m_center">
										<?php 
											foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>								
									</ul>									 									 								 
							</div>
						</div>	
					</div>
				<!-- STYLE 3 Left Side Icon = h_top_l3  -->		
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l3"){?>					
					<div class="row top-both-p0">
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-lg-3 col-xl-3 col-md-3 col-sm-12 ">
							<div class="top-right-menu">
									<ul class="social-icons text-left text_m_center">
										<?php 
											foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>								
									</ul>									 									 								 
							</div>
						</div>					
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-lg-7 col-xl-9 col-md-9 col-sm-12">
							<div class="top-address text-right">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
					</div>
					<!-- STYLE 4 Welcome Style 2 = h_top_l4  -->	
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l4"){?>								
					<div class="row top-both-p0">
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-lg-3 col-md-12">
							<div class="top-right-menu">
									<ul class="social-icons text-left text_m_center">
										<?php 
											foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>								
									</ul>									 									 								 
							</div>
						</div>
						<!-- TOP MIDDLE -->
						<div class="col-xs-12 col-lg-3 col-md-4">
							<div class="top-welcome">
								<?php if (!empty($kurigram_opt['kurigram_header_top_wellcome'])): ?>	
									<p class="text-center">
									<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i4'], array(
											'i' => array(
												'class' =>array()
											),
										));?>									
									<?php 
										echo wp_kses($kurigram_opt['kurigram_header_top_wellcome'], array(
											'br' => array(),
											'h2' => array(),
											'a' => array(
													'href' => array(),
													'title' => array()										
												),
											'strong' => array(),
											'em' => array(),
											'p' => array(),
											'span' => array(),
										));
									?>	</span>
									</p>
								<?php endif; ?>
							</div>
						</div>						
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-lg-6 col-md-8 ">
							<div class="top-address text-right">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
					</div>					
				<!-- STYLE 5 Right Side Menu= h_top_l5  -->
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l5"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-lg-8 col-md-12 col-sm-12">
							<div class="top-address text-left text_m_center">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-lg-4 col-md-12 col-sm-12">
							<div class="top-right-menu">							 									 								 
								<?php 
								 if ( has_nav_menu( 'menu-top' ) ) {
									wp_nav_menu( array(
									'theme_location' => 'menu-top',
									'menu_class' => 'social-icons text-right text_m_center',
									'fallback_cb' => false,
									'container' => '',
									) );
								}
								?>
							</div>
						</div>	
					</div>					
				<!-- STYLE 6 Left Side Menu= h_top_l6  -->		
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l6"){?>					
					<div class="row top-both-p0">
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-sm-12 col-lg-4 col-md-12">
							<div class="top-right-menu">									 									 								 
									<?php 
									 if ( has_nav_menu( 'menu-top' ) ) {
										wp_nav_menu( array(
										'theme_location' => 'menu-top',
										'menu_class' => 'social-icons text-left text_m_center',
										'fallback_cb' => false,
										'container' => '',
										) );
									}
									?>
							</div>
						</div>					
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-lg-8 col-md-12 col-sm-12">
							<div class="top-address text-right text_m_center">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
					</div>			

				<!-- STYLE 7 Middle Social Icon & Right Login = h_top_l7  -->
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l7"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-9 col-sm-12 col-lg-6">
							<div class="top-address text-left menu_17">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						
						<!-- TOP MIDDLE -->
						<div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
							<div class="top-right-menu ">
									<ul class="social-icons text-right menu_17 text_m_right ">
										<?php 
											foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>								
									</ul>									 									 								 
							</div>
						</div>					
						
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-12 col-sm-6 col-lg-3">
							<div class="top-address em-login text-right text_m_center">
								<p>							
									<?php kurigram_login();?>
									
								</p>
							</div>
						</div>	
					</div>
				<!-- STYLE 8 Opening Hours Menu with login = h_top_l8  -->	
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l8"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-5 col-xl-4 col-lg-5 col-sm-7">
							<div class="top-address text-left menu_18">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_opening'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i5'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_opening']); ?></span>										
									<?php endif; ?>	
								</p>
							</div>
						</div>
						
						<!-- TOP MIDDLE -->
						<div class="col-xs-12  col-md-3 col-xl-4 col-lg-4 col-sm-5">
							<div class="top-right-menu ">
									<ul class="social-icons text-center menu_18 text_s_right ">
										<?php 
											foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>								
									</ul>									 									 								 
							</div>
						</div>					
						
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-4 col-xl-4 col-lg-3 col-sm-12">
							<div class="top-address em-login text-right menu_18 ">
								<p>							
									<?php kurigram_login();?>
									
								</p>
							</div>

						</div>	
					</div>
				<!-- STYLE 9 Opening Hours with Search = h_top_l9  -->
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l9"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-6 col-lg-6 col-sm-7">
							<div class="top-address text-left menu_18">
								<p>
									<?php if (!empty($kurigram_opt['kurigram_header_top_opening'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i5'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_opening']); ?></span>										
									<?php endif; ?>	
									
								</p>
							</div>
						</div>
						
						<!-- TOP MIDDLE -->
						<div class="col-xs-12  col-md-3  col-lg-3 col-sm-4">
							<div class="top-right-menu ">
									<ul class="social-icons text-left menu_19">
										<?php 
											foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>								
									</ul>									 									 								 
							</div>
						</div>					
						
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-3  col-lg-3 col-sm-1 topsr  ossos">
							<?php kurigram_search_code();?>

						</div>	
					</div>
				<!-- STYLE 10 Left Address Right Search = h_top_20  -->	
				<?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_20"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-10 col-sm-9">
							<div class="top-address text-left">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-2 col-sm-3 topsr ossos">
						
							<?php kurigram_search_code();?>
							
						</div>	
					</div>
				<!-- STYLE 11 Left Address Right Text = h_top_21  -->		
				<?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_21"){?>						
					<div class="row h_top_21">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-6 col-lg-6 col-sm-12">
							<div class="top-address text-left">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-6 col-lg-6 col-sm-12 topsr ossos">
							<div class="top-welcome">
								<?php if (!empty($kurigram_opt['kurigram_header_top_wellcome'])): ?>	
									<p class="text-right">	
									<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i4'], array(
											'i' => array(
												'class' =>array()
											),
										));?>									
									<?php 
										echo wp_kses($kurigram_opt['kurigram_header_top_wellcome'], array(
											'br' => array(),
											'h2' => array(),
											'a' => array(
													'href' => array(),
													'title' => array(),										
													'class' => array()										
												),
											'strong' => array(),
											'em' => array(),
											'p' => array(),
											'span' => array(),
										));
									?>	</span>	
									</p>
								<?php endif; ?>
							</div>						
							
						</div>	
					</div>	
				<?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_22"){?>
					<div class="row h_top_22">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-6 col-lg-6 col-sm-12 topsr ossos">
							<div class="top-welcomet">
								<?php if (!empty($kurigram_opt['kurigram_header_top_wellcome'])): ?>	
									<p class="text-left">	
									<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i4'], array(
											'i' => array(
												'class' =>array()
											),
										));?>									
									<?php 
										echo wp_kses($kurigram_opt['kurigram_header_top_wellcome'], array(
											'br' => array(),
											'h2' => array(),
											'a' => array(
													'href' => array(),
													'title' => array(),
													'class' => array()
												),
											'strong' => array(),
											'em' => array(),
											'p' => array(),
											'span' => array(),
										));
									?>	</span>	
									</p>
								<?php endif; ?>
							</div>						
							
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-6 col-lg-6 col-sm-12">
							<div class="top-address  text-right">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>						
						
					</div>	


				<?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_23"){?>					

					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-lg-8 col-md-12 col-sm-12">
							<div class="tx_top_together">
							<div class="top-address text_m_center">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
							
							<div class="top-right-menu">
								<ul class="social-icons">
									<?php 
										foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>									 									 								 
							</div>							
							</div>							
							
							
							
							
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-lg-4 col-md-12 col-sm-12">
							<div class="top-right-menu">							 									 								 
								<?php 
								 if ( has_nav_menu( 'menu-top' ) ) {
									wp_nav_menu( array(
									'theme_location' => 'menu-top',
									'menu_class' => 'social-icons text-right text_m_center',
									'fallback_cb' => false,
									'container' => '',
									) );
								}
								?>
							</div>
						</div>	
					</div>		

				
				<?php } ?>
				

				
			</div>
		</div>
    <!-- END HEADER TOP AREA -->
 
 <?php }else{
  if($txbdm_header_topa==1){?> 

 	<!-- HEADER TOP AREA -->
		<div class="kurigram-header-top   <?php if( $txbdm_box_menu2==2 ){echo esc_attr('container');}else{ }?>">
					
			<div class="<?php if( $txbdm_box_menu2==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); } ?>">
									
				<!-- STYLE 1 Right Side Icon = h_top_l1  -->
				 <?php if(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l1"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-lg-9 col-xl-9 col-md-9 col-sm-12">
							<div class="top-address text-left">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-lg-3 col-xl-3 col-md-3 col-sm-12 ">
							<div class="top-right-menu">
								<ul class="social-icons text-right text_m_center">
									<?php 
										foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>									 									 								 
							</div>
						</div>	
					</div>		
				<!-- STYLE 2 Welcome Style 1 = h_top_l2  -->	
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l2"){?>							
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-lg-6 col-md-8 ">
							<div class="top-address text-left">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						
						<!-- TOP MIDDLE -->
						<div class="col-xs-12 col-lg-3 col-md-4">
							<div class="top-welcome">
								<?php if (!empty($kurigram_opt['kurigram_header_top_wellcome'])): ?>	
									<p class="text-center">	
									<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i4'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
									<?php 
										echo wp_kses($kurigram_opt['kurigram_header_top_wellcome'], array(
											'br' => array(),
											'h2' => array(),
											'a' => array(
													'href' => array(),
													'title' => array()										
												),
											'strong' => array(),
											'em' => array(),
											'p' => array(),
											'span' => array(),
										));
									?>	</span>	
									</p>
								<?php endif; ?>
							</div>
						</div>					
						
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-lg-3 col-md-12">
							<div class="top-right-menu">
									<ul class="social-icons text-right text_m_center">
										<?php 
											foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>								
									</ul>									 									 								 
							</div>
						</div>	
					</div>
				<!-- STYLE 3 Left Side Icon = h_top_l3  -->		
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l3"){?>					
					<div class="row top-both-p0">
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-lg-3 col-xl-3 col-md-3 col-sm-12 ">
							<div class="top-right-menu">
									<ul class="social-icons text-left text_m_center">
										<?php 
											foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>								
									</ul>									 									 								 
							</div>
						</div>					
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-lg-7 col-xl-9 col-md-9 col-sm-12">
							<div class="top-address text-right">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
					</div>
					<!-- STYLE 4 Welcome Style 2 = h_top_l4  -->	
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l4"){?>								
					<div class="row top-both-p0">
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-lg-3 col-md-12">
							<div class="top-right-menu">
									<ul class="social-icons text-left text_m_center">
										<?php 
											foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>								
									</ul>									 									 								 
							</div>
						</div>
						<!-- TOP MIDDLE -->
						<div class="col-xs-12 col-lg-3 col-md-4">
							<div class="top-welcome">
								<?php if (!empty($kurigram_opt['kurigram_header_top_wellcome'])): ?>	
									<p class="text-center">
									<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i4'], array(
											'i' => array(
												'class' =>array()
											),
										));?>									
									<?php 
										echo wp_kses($kurigram_opt['kurigram_header_top_wellcome'], array(
											'br' => array(),
											'h2' => array(),
											'a' => array(
													'href' => array(),
													'title' => array()										
												),
											'strong' => array(),
											'em' => array(),
											'p' => array(),
											'span' => array(),
										));
									?>	</span>
									</p>
								<?php endif; ?>
							</div>
						</div>						
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-lg-6 col-md-8 ">
							<div class="top-address text-right">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
					</div>					
				<!-- STYLE 5 Right Side Menu= h_top_l5  -->
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l5"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-lg-8 col-md-12 col-sm-12">
							<div class="top-address text-left text_m_center">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-lg-4 col-md-12 col-sm-12">
							<div class="top-right-menu">							 									 								 
								<?php 
								 if ( has_nav_menu( 'menu-top' ) ) {
									wp_nav_menu( array(
									'theme_location' => 'menu-top',
									'menu_class' => 'social-icons text-right text_m_center',
									'fallback_cb' => false,
									'container' => '',
									) );
								}
								?>
							</div>
						</div>	
					</div>					
				<!-- STYLE 6 Left Side Menu= h_top_l6  -->		
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l6"){?>					
					<div class="row top-both-p0">
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-sm-12 col-lg-4 col-md-12">
							<div class="top-right-menu">									 									 								 
									<?php 
									 if ( has_nav_menu( 'menu-top' ) ) {
										wp_nav_menu( array(
										'theme_location' => 'menu-top',
										'menu_class' => 'social-icons text-left text_m_center',
										'fallback_cb' => false,
										'container' => '',
										) );
									}
									?>
							</div>
						</div>					
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-lg-8 col-md-12 col-sm-12">
							<div class="top-address text-right text_m_center">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
					</div>			

				<!-- STYLE 7 Middle Social Icon & Right Login = h_top_l7  -->
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l7"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-9 col-sm-12 col-lg-6">
							<div class="top-address text-left menu_17">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						
						<!-- TOP MIDDLE -->
						<div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
							<div class="top-right-menu ">
									<ul class="social-icons text-right menu_17 text_m_right ">
										<?php 
											foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>								
									</ul>									 									 								 
							</div>
						</div>					
						
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-12 col-sm-6 col-lg-3">
							<div class="top-address em-login text-right text_m_center">
								<p>							
									<?php kurigram_login();?>
									
								</p>
							</div>
						</div>	
					</div>
				<!-- STYLE 8 Opening Hours Menu with login = h_top_l8  -->	
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l8"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-5 col-xl-4 col-lg-5 col-sm-7">
							<div class="top-address text-left menu_18">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_opening'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i5'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_opening']); ?></span>										
									<?php endif; ?>	
								</p>
							</div>
						</div>
						
						<!-- TOP MIDDLE -->
						<div class="col-xs-12  col-md-3 col-xl-4 col-lg-4 col-sm-5">
							<div class="top-right-menu ">
									<ul class="social-icons text-center menu_18 text_s_right ">
										<?php 
											foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>								
									</ul>									 									 								 
							</div>
						</div>					
						
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-4 col-xl-4 col-lg-3 col-sm-12">
							<div class="top-address em-login text-right menu_18 ">
								<p>							
									<?php kurigram_login();?>
									
								</p>
							</div>

						</div>	
					</div>
				<!-- STYLE 9 Opening Hours with Search = h_top_l9  -->
				 <?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_l9"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-6 col-lg-6 col-sm-7">
							<div class="top-address text-left menu_18">
								<p>
									<?php if (!empty($kurigram_opt['kurigram_header_top_opening'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i5'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_opening']); ?></span>										
									<?php endif; ?>	
									
								</p>
							</div>
						</div>
						
						<!-- TOP MIDDLE -->
						<div class="col-xs-12  col-md-3  col-lg-3 col-sm-4">
							<div class="top-right-menu ">
									<ul class="social-icons text-left menu_19">
										<?php 
											foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>								
									</ul>									 									 								 
							</div>
						</div>					
						
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-3  col-lg-3 col-sm-1 topsr  ossos">
							<?php kurigram_search_code();?>

						</div>	
					</div>
				<!-- STYLE 10 Left Address Right Search = h_top_20  -->	
				<?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_20"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-10 col-sm-9">
							<div class="top-address text-left">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-2 col-sm-3 topsr ossos">
						
							<?php kurigram_search_code();?>
							
						</div>	
					</div>
				<!-- STYLE 11 Left Address Right Text = h_top_21  -->		
				<?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_21"){?>						
					<div class="row h_top_21">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-6 col-lg-6 col-sm-12">
							<div class="top-address text-left">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-6 col-lg-6 col-sm-12 topsr ossos">
							<div class="top-welcome">
								<?php if (!empty($kurigram_opt['kurigram_header_top_wellcome'])): ?>	
									<p class="text-right">	
									<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i4'], array(
											'i' => array(
												'class' =>array()
											),
										));?>									
									<?php 
										echo wp_kses($kurigram_opt['kurigram_header_top_wellcome'], array(
											'br' => array(),
											'h2' => array(),
											'a' => array(
													'href' => array(),
													'title' => array(),										
													'class' => array()										
												),
											'strong' => array(),
											'em' => array(),
											'p' => array(),
											'span' => array(),
										));
									?>	</span>	
									</p>
								<?php endif; ?>
							</div>						
							
						</div>	
					</div>	
				<?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_22"){?>
					<div class="row h_top_22">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-6 col-lg-6 col-sm-12 topsr ossos">
							<div class="top-welcomet">
								<?php if (!empty($kurigram_opt['kurigram_header_top_wellcome'])): ?>	
									<p class="text-left">	
									<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i4'], array(
											'i' => array(
												'class' =>array()
											),
										));?>									
									<?php 
										echo wp_kses($kurigram_opt['kurigram_header_top_wellcome'], array(
											'br' => array(),
											'h2' => array(),
											'a' => array(
													'href' => array(),
													'title' => array(),
													'class' => array()
												),
											'strong' => array(),
											'em' => array(),
											'p' => array(),
											'span' => array(),
										));
									?>	</span>	
									</p>
								<?php endif; ?>
							</div>						
							
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-6 col-lg-6 col-sm-12">
							<div class="top-address  text-right">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>						
						
					</div>					
				
				<?php }elseif(!empty($kurigram_opt['kurigram_top_right_layout']) && $kurigram_opt['kurigram_top_right_layout']=="h_top_23"){?>
				

					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-lg-8 col-md-12 col-sm-12">
							<div class="tx_top_together">
							<div class="top-address text_m_center">
								<p>							
									<?php if (!empty($kurigram_opt['kurigram_header_top_road'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_i3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
							
							<div class="top-right-menu">
								<ul class="social-icons">
									<?php 
										foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>									 									 								 
							</div>							
							</div>							
	
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-lg-4 col-md-12 col-sm-12">
							<div class="top-right-menu">							 									 								 
								<?php 
								 if ( has_nav_menu( 'menu-top' ) ) {
									wp_nav_menu( array(
									'theme_location' => 'menu-top',
									'menu_class' => 'social-icons text-right text_m_center',
									'fallback_cb' => false,
									'container' => '',
									) );
								}
								?>
							</div>
						</div>	
					</div>		

								
				
				<?php } ?>
				

				
			</div>
		</div>
    <!-- END HEADER TOP AREA -->
 
 
 
 <?php }elseif($txbdm_header_topa==2){
	 
 }else{}
	
	
}?>





<!-- HEADER TOP 2 creative AREA -->

 <?php  $toptsst = get_post_meta( get_the_ID(),'_txbdm_toptsst', true );    ?>
 <div class="tx_top2_relative">
<div class="<?php if(!empty($kurigram_opt['txbdm_header_posi_top2']) && $kurigram_opt['txbdm_header_posi_top2']==true){echo esc_attr('all_header_abs');}elseif($txbdm_toptsstas1==3){echo esc_attr('all_header_abs');}else{};?>">
 <?php


 if (!empty($kurigram_opt['txbdm_header_top_two_hide']) && $kurigram_opt['txbdm_header_top_two_hide']==true){ ?>	
	
	
<?php if(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_2"){?>		

			<div class="kurigram_header_top_two top_cr_style1 top_crt_style  <?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_boxi"){echo esc_attr('container');}else{ }?>">
				<div class="<?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_full"){echo esc_attr('containerss-fluid');}else{ echo esc_attr('container'); }?>">
					<div class="row">
						<!-- CREATIVE HEADER LOGO -->
						<div class="col-xl-4 col-lg-12 col-sm-12 d_md_none col-md-6">
							<div class="theme_cr_logo">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-6">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwot']); ?></h3>
									<?php endif; ?>		

									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>										
												<p><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></p>
									<?php endif; ?>											
									</div>
								</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-6">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwot']); ?></h3>
									<?php endif; ?>	
										<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<p><a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a></p>
									<?php endif; ?>																					
									</div>
								</div>
						</div>			
						<div class="col-xl-2 col-lg-4 col-sm-12  col-md-12">
							<?php if (!empty($kurigram_opt['kurigram_header_buttonc1'])): ?>
								<div class="tx_menuc_btn text_m_center">
									<a class="top-btn-color tx_mc_btn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_urlc1'])){echo esc_url($kurigram_opt['kurigram_header_button_urlc1']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_buttonc1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
									</a>	
								</div>	
							<?php endif; ?>						

						</div>								
					</div>
				</div>
			</div>


<?php }elseif(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_3"){?>			
	
	<div class="kurigram_header_top_two top_cr_style2 top_crt_style  <?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_boxi"){echo esc_attr('container');}else{ }?>">
		<div class="<?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_full"){echo esc_attr('containerss-fluid');}else{ echo esc_attr('container'); }?>">
					<div class="row">
						<!-- CREATIVE HEADER LOGO -->
						<div class="col-xl-4 col-lg-12 col-sm-12 d_md_none col-md-6">
							<div class="theme_cr_logo">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-6">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwot']); ?></h3>
									<?php endif; ?>		

									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>										
												<p><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></p>
									<?php endif; ?>											
									</div>
								</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-6">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwot']); ?></h3>
									<?php endif; ?>	
										<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<p><a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a></p>
									<?php endif; ?>																					
									</div>
								</div>
						</div>			
						<div class="col-xl-2 col-lg-4 col-sm-12  col-md-12">
							<div class="top_crl_menu">							 									 								 
								<?php 
								 if ( has_nav_menu( 'menu-top' ) ) {
									wp_nav_menu( array(
									'theme_location' => 'menu-top',
									'menu_class' => 'top_crmenu_l text-right text_m_center',
									'fallback_cb' => false,
									'container' => '',
									) );
								}
								?>
							</div>
						</div>								
					</div>
				</div>
			</div>


<?php }elseif(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_4"){?>
		
		<div class="kurigram_header_top_two top_cr_style3 top_crt_style  <?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_boxi"){echo esc_attr('container');}else{ }?>">
		<div class="<?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_full"){echo esc_attr('containerss-fluid');}else{ echo esc_attr('container'); }?>">
					<div class="row">
						<!-- CREATIVE HEADER LOGO -->
						<div class="col-xl-3 col-lg-3 col-sm-12 d_md_none col-md-4">
							<div class="theme_cr_logo">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>			
						<div class="col-xl-3 col-lg-3 col-sm-12  col-md-4">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwot']); ?></h3>
									<?php endif; ?>		

									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>										
												<p><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></p>
									<?php endif; ?>											
									</div>
								</div>
						</div>			
						<div class="col-xl-3 col-lg-3 col-sm-12  col-md-4">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwot']); ?></h3>
									<?php endif; ?>	
										<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<p><a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a></p>
									<?php endif; ?>																					
									</div>
								</div>
						</div>			
						<div class="col-xl-3 col-lg-3 col-sm-12  col-md-4">
							<div class="top_crmenu_icon">
								<ul class="top_crmenu_i_list text-right text_m_center">
									<?php 
										foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>									 									 								 
							</div>
						</div>								
					</div>
				</div>
			</div>

<?php }elseif(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_5"){?>
	
	<div class="kurigram_header_top_two top_cr_style4 top_crt_style  <?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_boxi"){echo esc_attr('container');}else{ }?>">
		<div class="<?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_full"){echo esc_attr('containerss-fluid');}else{ echo esc_attr('container'); }?>">
					<div class="row">
						<div class=" col-lg-12 d_md_none d_main_none d_lg_none">
							<div class="theme_cr_logo text-center">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>						
						<div class="col-xl-4 col-lg-3 col-sm-12  col-md-5">
							<div class="top_crmenu_icon">
								<ul class="top_crmenu_i_list text-left">
									<?php 
										foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>									 									 								 
							</div>
						</div>		
						<div class="col-xl-3 col-lg-3 col-sm-12 d_md_none d_lg_none col-md-6">
							<div class="theme_cr_logo text-center">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>						
						<div class="col-xl-5 col-lg-6 col-sm-12  col-md-7">
							<div class="top-address cr_top_addess">
								<p class="text-right">							
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobiletwo'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?></a>
									<?php endif; ?>										
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>								
					</div>
				</div>
			</div>

<?php }elseif(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_6"){?>
		
		<div class="kurigram_header_top_two top_cr_style5 top_crt_style  <?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_boxi"){echo esc_attr('container');}else{ }?>">
		<div class="<?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_full"){echo esc_attr('containerss-fluid');}else{ echo esc_attr('container'); }?>">
					<div class="row">
						<!-- CREATIVE HEADER LOGO -->
						<div class="col-xl-3 col-lg-12 col-sm-12 d_md_none col-md-6">
							<div class="theme_cr_logo">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-4">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwot']); ?></h3>
									<?php endif; ?>		

									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>										
												<p><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></p>
									<?php endif; ?>											
									</div>
								</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-4">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwot']); ?></h3>
									<?php endif; ?>	
										<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<p><a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a></p>
									<?php endif; ?>																					
									</div>
								</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-4">
								<div class="single_header_address ctrp">
									<div class="creative_header_icon">										
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobiletwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwot']); ?></h3>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobiletwo'])): ?>
										<p><a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?></a></p>
									<?php endif; ?>										
										
									</div>
								</div>
						</div>								
					</div>
				</div>
			</div>


<?php }elseif(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_7"){?>			
	
	<!-- CREATIVE HEADER STYLE -->
	<div class="top_crt_style top_cr_style6 <?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_boxi"){echo esc_attr('container');}else{ }?>">
		<div class="<?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_full"){echo esc_attr('containerss-fluid');}else{ echo esc_attr('container'); }?>">
			<div class="row">
				<!-- CREATIVE HEADER LOGO -->
				<div class="col-md-3 col-xl-2 col-lg-12 col-sm-12 d_md_none col-xs-12">
					<div class="creative_header_logo">
						<div class="creative_logo_thumb">
							<?php kurigram_main_logo(); ?>
						</div>
					</div>
				</div>
				<!-- CREATIVE HEADER ADDRESS -->
				<div class="col-md-12 col-xl-8 col-lg-9  col-xs-12">
					<div class="row creative_header_address">
							<div class="col-lg-4  col-md-4 col-sm-12 col-xs-12">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwot']); ?></h3>
									<?php endif; ?>		

									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>										
												<p><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></p>
									<?php endif; ?>											
										
										
								
									</div>
								</div>
							</div>
							<div class="col-lg-4  col-md-4 col-sm-12 col-xs-12">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwot']); ?></h3>
									<?php endif; ?>	
										<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<p><a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a></p>
									<?php endif; ?>										
										
									</div>
								</div>
							</div>
							<div class="col-lg-4  col-md-4 col-sm-12 col-xs-12">
								<div class="single_header_address ctrp">
									<div class="creative_header_icon">										
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobiletwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwot']); ?></h3>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobiletwo'])): ?>
										<p><a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?></a></p>
									<?php endif; ?>										
										
									</div>
								</div>
							</div>
							
					
					</div>
				</div>
				
				<!-- CREATIVE HEADER BUTTON -->
				<div class="col-md-12 col-xl-2 col-lg-3  col-xs-12">
							<?php if (!empty($kurigram_opt['kurigram_header_buttonc1'])): ?>
								<div class="creative_header_button">
									<a class="top-btn-color dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_urlc1'])){echo esc_url($kurigram_opt['kurigram_header_button_urlc1']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_buttonc1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>									
									
									</a>	
								</div>	
							<?php endif; ?>					
				</div>
			</div>
		</div>

	</div>

<?php }elseif(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_8"){?>
			<!-- woo custom creative menu menu -- -->
			<div class="kurigram_header_top_two top_cr_style1 top_crt_style  <?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_boxi"){echo esc_attr('container');}else{ }?>">
				<div class="<?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_full"){echo esc_attr('containerss-fluid');}else{ echo esc_attr('container'); }?>">
					<div class="row">
						<!-- CREATIVE HEADER LOGO -->
						<div class="col-xl-4 col-lg-12 col-sm-12 d_md_none col-md-6">
							<div class="theme_cr_logo">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-5">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwot']); ?></h3>
									<?php endif; ?>		

									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>										
												<p><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></p>
									<?php endif; ?>											
									</div>
								</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-5">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwot']); ?></h3>
									<?php endif; ?>	
										<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<p><a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a></p>
									<?php endif; ?>																					
									</div>
								</div>
						</div>			
						<div class="col-xl-2 col-lg-4 col-sm-12  col-md-2">
								<!-- Woo Icon cart -->
								<?php if( class_exists( 'WooCommerce' ) ) { kurigram_mini_shop_output(); } ?>						

						</div>								
					</div>
				</div>
			</div>
			
<?php }elseif(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_9"){?>
	
	<div class="kurigram_header_top_two top_cr_style4 top_crt_style  <?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_boxi"){echo esc_attr('container');}else{ }?>">
		<div class="<?php if(!empty($kurigram_opt['txbdm_box_layouttwo']) && $kurigram_opt['txbdm_box_layouttwo']=="htopt_full"){echo esc_attr('containerss-fluid');}else{ echo esc_attr('container'); }?>">
					<div class="row">
						<div class=" col-lg-12 d_md_none d_main_none d_lg_none">
							<div class="theme_cr_logo text-center">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>						
						<div class="col-xl-4 col-lg-4 col-sm-12 col-md-5 tx_top_together">
							<div class="top_crmenu_icon">
								<ul class="top_crmenu_i_list text-left">
									<?php 
										foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>									 									 								 
							</div>
							<div class="top_crl_menu margin_l30">							 									 								 
								<?php 
								 if ( has_nav_menu( 'menu-top' ) ) {
									wp_nav_menu( array(
									'theme_location' => 'menu-top',
									'menu_class' => 'top_crmenu_l text-right text_m_center',
									'fallback_cb' => false,
									'container' => '',
									) );
								}
								?>
							</div>							
						</div>		
						<div class="col-xl-3 col-lg-3 col-sm-12 d_md_none d_lg_none col-md-6">
							<div class="theme_cr_logo text-center">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>						
						<div class="col-xl-5 col-lg-5 col-sm-12  col-md-7">
							<div class="top-address cr_top_addess">
								<p class="text-right">							
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobiletwo'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?></a>
									<?php endif; ?>										
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>								
					</div>
				</div>
			</div>			
					
	<!-- end  custom creative menu menu -- -->
	
<?php } ?>

<?php }else{
	 
 if($toptsst==1){?> 
 
	
<?php if(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_2"){?>		

			<div class="kurigram_header_top_two top_cr_style1 top_crt_style  <?php if( $txbdm_box_menu3==2 ){echo esc_attr('container');}else{ }?>">
				<div class="<?php if( $txbdm_box_menu3==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); } ?>">
					<div class="row">
						<!-- CREATIVE HEADER LOGO -->
						<div class="col-xl-4 col-lg-12 col-sm-12 d_md_none col-md-6">
							<div class="theme_cr_logo">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-6">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwot']); ?></h3>
									<?php endif; ?>		

									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>										
												<p><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></p>
									<?php endif; ?>											
									</div>
								</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-6">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwot']); ?></h3>
									<?php endif; ?>	
										<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<p><a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a></p>
									<?php endif; ?>																					
									</div>
								</div>
						</div>			
						<div class="col-xl-2 col-lg-4 col-sm-12  col-md-12">
							<?php if (!empty($kurigram_opt['kurigram_header_buttonc1'])): ?>
								<div class="tx_menuc_btn text_m_center">
									<a class="top-btn-color tx_mc_btn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_urlc1'])){echo esc_url($kurigram_opt['kurigram_header_button_urlc1']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_buttonc1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
									</a>	
								</div>	
							<?php endif; ?>						

						</div>								
					</div>
				</div>
			</div>


<?php }elseif(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_3"){?>			
	
	<div class="kurigram_header_top_two top_cr_style2 top_crt_style  <?php if( $txbdm_box_menu3==2 ){echo esc_attr('container');}else{ }?>">
		<div class="<?php if( $txbdm_box_menu3==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); } ?>">
					<div class="row">
						<!-- CREATIVE HEADER LOGO -->
						<div class="col-xl-4 col-lg-12 col-sm-12 d_md_none col-md-6">
							<div class="theme_cr_logo">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-6">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwot']); ?></h3>
									<?php endif; ?>		

									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>										
												<p><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></p>
									<?php endif; ?>											
									</div>
								</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-6">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwot']); ?></h3>
									<?php endif; ?>	
										<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<p><a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a></p>
									<?php endif; ?>																					
									</div>
								</div>
						</div>			
						<div class="col-xl-2 col-lg-4 col-sm-12  col-md-12">
							<div class="top_crl_menu">							 									 								 
								<?php 
								 if ( has_nav_menu( 'menu-top' ) ) {
									wp_nav_menu( array(
									'theme_location' => 'menu-top',
									'menu_class' => 'top_crmenu_l text-right text_m_center',
									'fallback_cb' => false,
									'container' => '',
									) );
								}
								?>
							</div>
						</div>								
					</div>
				</div>
			</div>


<?php }elseif(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_4"){?>
		
		<div class="kurigram_header_top_two top_cr_style3 top_crt_style  <?php if( $txbdm_box_menu3==2 ){echo esc_attr('container');}else{ }?>">
		<div class="<?php if( $txbdm_box_menu3==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); } ?>">
					<div class="row">
						<!-- CREATIVE HEADER LOGO -->
						<div class="col-xl-3 col-lg-3 col-sm-12 d_md_none col-md-4">
							<div class="theme_cr_logo">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>			
						<div class="col-xl-3 col-lg-3 col-sm-12  col-md-4">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwot']); ?></h3>
									<?php endif; ?>		

									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>										
												<p><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></p>
									<?php endif; ?>											
									</div>
								</div>
						</div>			
						<div class="col-xl-3 col-lg-3 col-sm-12  col-md-4">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwot']); ?></h3>
									<?php endif; ?>	
										<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<p><a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a></p>
									<?php endif; ?>																					
									</div>
								</div>
						</div>			
						<div class="col-xl-3 col-lg-3 col-sm-12  col-md-4">
							<div class="top_crmenu_icon">
								<ul class="top_crmenu_i_list text-right text_m_center">
									<?php 
										foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>									 									 								 
							</div>
						</div>								
					</div>
				</div>
			</div>

<?php }elseif(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_5"){?>
	
	<div class="kurigram_header_top_two top_cr_style4 top_crt_style    <?php if( $txbdm_box_menu3==2 ){echo esc_attr('container');}else{ }?>">
		<div class="<?php if( $txbdm_box_menu3==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); } ?>">
					<div class="row">
						<div class=" col-lg-12 d_md_none d_main_none d_lg_block">
							<div class="theme_cr_logo text-center">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>						
						<div class="col-xl-4 col-lg-3 col-sm-12  col-md-5">
							<div class="top_crmenu_icon">
								<ul class="top_crmenu_i_list text-left text_m_center">
									<?php 
										foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>									 									 								 
							</div>
						</div>		
						<div class="col-xl-3 col-lg-3 col-sm-12 d_md_none d_lg_none col-md-6">
							<div class="theme_cr_logo text-center">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>						
						<div class="col-xl-5 col-lg-6 col-sm-12  col-md-7">
							<div class="top-address cr_top_addess">
								<p class="text-right">							
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobiletwo'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?></a>
									<?php endif; ?>										
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>								
					</div>
				</div>
			</div>

<?php }elseif(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_6"){?>
		
		<div class="kurigram_header_top_two top_cr_style5 top_crt_style    <?php if( $txbdm_box_menu3==2 ){echo esc_attr('container');}else{ }?>">
		<div class="<?php if( $txbdm_box_menu3==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); } ?>">
					<div class="row">
						<!-- CREATIVE HEADER LOGO -->
						<div class="col-xl-3 col-lg-12 col-sm-12 d_md_none col-md-6">
							<div class="theme_cr_logo">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-4">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwot']); ?></h3>
									<?php endif; ?>		

									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>										
												<p><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></p>
									<?php endif; ?>											
									</div>
								</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-4">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwot']); ?></h3>
									<?php endif; ?>	
										<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<p><a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a></p>
									<?php endif; ?>																					
									</div>
								</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-4">
								<div class="single_header_address ctrp">
									<div class="creative_header_icon">										
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobiletwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwot']); ?></h3>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobiletwo'])): ?>
										<p><a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?></a></p>
									<?php endif; ?>										
										
									</div>
								</div>
						</div>								
					</div>
				</div>
			</div>


<?php }elseif(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_7"){?>			
	
	<!-- CREATIVE HEADER STYLE -->
	<div class="top_crt_style top_cr_style6   <?php if( $txbdm_box_menu3==2 ){echo esc_attr('container');}else{ }?>">
		<div class="<?php if( $txbdm_box_menu3==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); } ?>">
			<div class="row">
				<!-- CREATIVE HEADER LOGO -->
				<div class="col-md-3 col-xl-2 col-lg-12 col-sm-12 d_md_none col-xs-12">
					<div class="creative_header_logo">
						<div class="creative_logo_thumb">
							<?php kurigram_main_logo(); ?>
						</div>
					</div>
				</div>
				<!-- CREATIVE HEADER ADDRESS -->
				<div class="col-md-12 col-xl-8 col-lg-9  col-xs-12">
					<div class="row creative_header_address">
							<div class="col-lg-4  col-md-4 col-sm-12 col-xs-12">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwot']); ?></h3>
									<?php endif; ?>		

									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>										
												<p><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></p>
									<?php endif; ?>											
										
										
								
									</div>
								</div>
							</div>
							<div class="col-lg-4  col-md-4 col-sm-12 col-xs-12">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwot']); ?></h3>
									<?php endif; ?>	
										<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<p><a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a></p>
									<?php endif; ?>										
										
									</div>
								</div>
							</div>
							<div class="col-lg-4  col-md-4 col-sm-12 col-xs-12">
								<div class="single_header_address ctrp">
									<div class="creative_header_icon">										
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobiletwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwot']); ?></h3>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobiletwo'])): ?>
										<p><a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?></a></p>
									<?php endif; ?>										
										
									</div>
								</div>
							</div>
							
					
					</div>
				</div>
				
				<!-- CREATIVE HEADER BUTTON -->
				<div class="col-md-12 col-xl-2 col-lg-3  col-xs-12">
							<?php if (!empty($kurigram_opt['kurigram_header_buttonc1'])): ?>
								<div class="creative_header_button">
									<a class="top-btn-color dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_urlc1'])){echo esc_url($kurigram_opt['kurigram_header_button_urlc1']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_buttonc1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>									
									
									</a>	
								</div>	
							<?php endif; ?>					
				</div>
			</div>
		</div>

	</div>

<?php }elseif(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_8"){?>
			<!--  woo custom creative menu menu -- -->
	
			<div class="kurigram_header_top_two top_cr_style1 top_crt_style    <?php if( $txbdm_box_menu3==2 ){echo esc_attr('container');}else{ }?>">
				<div class="<?php if( $txbdm_box_menu3==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); } ?>">
					<div class="row">
						<!-- CREATIVE HEADER LOGO -->
						<div class="col-xl-4 col-lg-12 col-sm-12 d_md_none col-md-6">
							<div class="theme_cr_logo">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-5">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwot']); ?></h3>
									<?php endif; ?>		

									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>										
												<p><?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></p>
									<?php endif; ?>											
									</div>
								</div>
						</div>			
						<div class="col-xl-3 col-lg-4 col-sm-12  col-md-5">
								<div class="single_header_address">
									<div class="creative_header_icon">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
									</div>
									<div class="creative_header_address_text">
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwot'])): ?>										
												<h3><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwot']); ?></h3>
									<?php endif; ?>	
										<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<p><a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>"><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a></p>
									<?php endif; ?>																					
									</div>
								</div>
						</div>			
						<div class="col-xl-2 col-lg-4 col-sm-12  col-md-2">
								<!-- Woo Icon cart -->
								<?php if( class_exists( 'WooCommerce' ) ) { kurigram_mini_shop_output(); } ?>						

						</div>								
					</div>
				</div>
			</div>
			
			
	<?php }elseif(!empty($kurigram_opt['txbdm_top_two_layout']) && $kurigram_opt['txbdm_top_two_layout']=="h_top_9"){?>
			<!--  woo custom creative menu menu -- -->
	
			<div class="kurigram_header_top_two top_cr_style1 top_crt_style    <?php if( $txbdm_box_menu3==2 ){echo esc_attr('container');}else{ }?>">
				<div class="<?php if( $txbdm_box_menu3==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); } ?>">			
					<div class="row">
						<div class=" col-lg-12 d_md_none d_main_none d_lg_none">
							<div class="theme_cr_logo text-center">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>						
						<div class="col-xl-4 col-lg-4 col-sm-12 col-md-5 tx_top_together">
							<div class="top_crmenu_icon">
								<ul class="top_crmenu_i_list text-left">
									<?php 
										foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>									 									 								 
							</div>
							<div class="top_crl_menu margin_l30">							 									 								 
								<?php 
								 if ( has_nav_menu( 'menu-top' ) ) {
									wp_nav_menu( array(
									'theme_location' => 'menu-top',
									'menu_class' => 'top_crmenu_l text-right text_m_center',
									'fallback_cb' => false,
									'container' => '',
									) );
								}
								?>
							</div>							
						</div>		
						<div class="col-xl-3 col-lg-3 col-sm-12 d_md_none d_lg_none col-md-6">
							<div class="theme_cr_logo text-center">						
							<?php kurigram_main_logo(); ?>
							</div>
						</div>						
						<div class="col-xl-5 col-lg-5 col-sm-12  col-md-7">
							<div class="top-address cr_top_addess">
								<p class="text-right">							
									<?php if (!empty($kurigram_opt['kurigram_header_top_roadtwo'])): ?>
										<span>
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci1'], array(
											'i' => array(
												'class' =>array()
											),
										));?>
										<?php echo esc_html($kurigram_opt['kurigram_header_top_roadtwo']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($kurigram_opt['kurigram_header_top_mobiletwo'])): ?>
										<a href="<?php esc_attr_e('mailto:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci3'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_mobiletwo']); ?></a>
									<?php endif; ?>										
									<?php if (!empty($kurigram_opt['kurigram_header_top_emailtwo'])): ?>
										<a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_top_ci2'], array(
											'i' => array(
												'class' =>array()
											),
										));?>										
										<?php echo esc_html($kurigram_opt['kurigram_header_top_emailtwo']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>								
					</div>			
				</div>
			</div>			
			
			
			
	<!-- end  custom creative menu menu -- -->
	
	


<?php }}elseif($toptsst==2){ 
	
 }else{}  
	 
}?>	





 <!-- Mobile menu -->
<?php mobile_logo_display();?>			
<!-- END MOBILE MENU AREA  -->

<!-- HEADER MAIN MENU AREA -->

  <?php  $txbdm_header_style = get_post_meta( get_the_ID(),'_txbdm_txbdm_header_style', true ); ?>
  <?php  $kurigram_logo_menu_style = get_post_meta( get_the_ID(),'_txbdm_kurigram_logo_menu_style', true ); ?>

  
 <div class="tx_relative_m">
<div class="<?php if(!empty($kurigram_opt['txbdm_header_posi_top3']) && $kurigram_opt['txbdm_header_posi_top3']==true){echo esc_attr('all_header_abs');}elseif($txbdm_toptsstas1==4){echo esc_attr('all_header_abs');}else{};?>">  
<div class="mainmenu_width_tx  <?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenul_boxi"){echo esc_attr('container');}elseif($txbdm_box_menu==2){echo esc_attr('container');}else{};?>">
	 <!-- Header Default Menu = 1 -->
   <?php if(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==1 ){?>
 	<div class="kurigram-main-menu hidden-xs hidden-sm witr_h_h1">
		<div class="kurigram_nav_area">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
			
				 <?php if(!empty($kurigram_opt['kurigram_main_menu_layout']) && $kurigram_opt['kurigram_main_menu_layout']=="m_menu_1"){?>			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-lg-9  col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
				 <?php }elseif(!empty($kurigram_opt['kurigram_main_menu_layout']) && $kurigram_opt['kurigram_main_menu_layout']=="m_menu_2"){?>		
				
				<div class="row logo-right">				
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">
							<?php kurigram_main_menu(); ?>
						</nav>				
					</div>
					<!-- END MAIN MENU -->
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
				</div><!-- END ROW -->		
				<?php }elseif(!empty($kurigram_opt['kurigram_main_menu_layout']) && $kurigram_opt['kurigram_main_menu_layout']=="m_menu_3"){?>	
				<div class="row logo-top">					
					<!-- LOGO -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->						
					<!-- MAIN MENU -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<nav class="kurigram_menu">
							<?php kurigram_main_menu(); ?>
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->							
				<?php }else{?>
					
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						
					
				<?php } ?>
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	


	 <!-- Header Transparent Menu = 2 -->
   <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==2 ){?>
   
 	<div class="kurigram-main-menu hidden-xs hidden-sm transprent-menu heading_style_4 witr_h_h2">
		<div class="trp_nav_area">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_ts_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
							
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>								
							
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	

	<!-- Header Transparent With Sticky Menu  = 3 -->
   <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==3 ){?>
 
 	<div class="kurigram-main-menu one_page menu4 hidden-xs hidden-sm transprent-menu heading_style_5  witr_h_h3">
		<div class="kurigram_nav_area scroll_fixed bdbar">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_ts_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
							
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>								
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	



   <!-- Header One Page Menu = 4 -->
  <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==4 ){?>
  
 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h4">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_onepage_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_one_page_menu(); ?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>								
							
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
	
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
	
	 <!-- Header One Page Transparent Menu  = 5 -->
    <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==5 ){?>
 
 	<div class="kurigram-main-menu hidden-xs hidden-sm one_page transprent-menu heading_style_3  witr_h_h5">
		<div class="trp_nav_area">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_ts_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_one_page_menu(); ?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>								
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	


			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
	
	
	<!-- Header One Page Transparent With Sticky  Menu  = 6 -->
    <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==6 ){?> 
	
 	<div class="kurigram-main-menu one_page menu4 hidden-xs hidden-sm transprent-menu heading_style_2  witr_h_h6">
		<div class="kurigram_nav_area scroll_fixed bdbar">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
					
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_ts_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_one_page_menu(); ?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>								
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	

				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	


	<!-- Header Default with Sticky Menu = 7 -->
    <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==7 ){?>  

 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h7">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
				 <?php if(!empty($kurigram_opt['kurigram_main_menu_layout']) && $kurigram_opt['kurigram_main_menu_layout']=="m_menu_1"){?>	
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
							
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>								
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
				<?php }elseif(!empty($kurigram_opt['kurigram_main_menu_layout']) && $kurigram_opt['kurigram_main_menu_layout']=="m_menu_2"){?>
				<div class="row logo-right">				

					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
							
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>								
						</nav>				
					</div>
					<!-- END MAIN MENU -->
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->					
					
				</div> <!-- END ROW -->					
				<?php }elseif(!empty($kurigram_opt['kurigram_main_menu_layout']) && $kurigram_opt['kurigram_main_menu_layout']=="m_menu_3"){?>
				<div class="row logo-top">				
					<!-- LOGO -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
							
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>								
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
				<?php }else{?>	
				
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
							
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>								
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->					
				
				<?php } ?>	

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
				

	<!-- Header Menu With Search = 8 -->
    <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==8 ){?>  

 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h8">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
					
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu nologo_menu13 main-search-menu">						
							<?php kurigram_main_menu(); ?>
							<?php kurigram_search_code(); ?>																			
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
			
			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	

	
	<!-- Header Menu With Social Icon = 9 -->
    <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==9 ){?>  

 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h9">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
						
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
								<div class="footer-social-icon htop-menu-s">					
									<?php 
										foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a>';
											}
										}
									?>							
				
								</div>
								<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
									<div class="donate-btn-header">
										<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
											<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
												'i' => array(
													'class' =>array()
												),
											));?>	
										</a>	
									</div>	
								<?php endif; ?>										
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						
					
		
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	

	
	<!-- Header Menu With Button = 10 -->
    <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==10 ){?>  

 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h10">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>	
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						
					
				
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	

	
	<!-- Header Menu With Button headroom Menu = 11 -->
    <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==11 ){?>  

 	<div class="kurigram-main-menu hidden-xs hidden-sm one_page header--fixed headrooma  witr_h_h11">
		<div class="kurigram_nav_area">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
					
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_onepage_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_one_page_menu(); ?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>	
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						
					
		
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>		
	
	
	<!-- Header Menu With Search and no Logo = 12 -->
    <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==12 ){?>  

 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h12">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
	
				<div class="row no-logo-sr">				
					<!-- MAIN MENU -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<nav class="kurigram_menu creative_header_menu">						
							<?php kurigram_main_menu(); ?>
							<div class="tx_bs_together">
								<div class="creative_search_icon">
									<?php kurigram_search_code(); ?>
								</div>
								<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
									<div class="donate-btn-header">
										<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
											<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
												'i' => array(
													'class' =>array()
												),
											));?>	
										</a>	
									</div>	
								<?php endif; ?>	
							</div>			
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
	
	
	<!-- Header Transparent Sticky No logo Menu  = 13 -->
   <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==13 ){?>
 
 	<div class="kurigram-main-menu one_page menu4 hidden-xs hidden-sm transprent-menu heading_style_5  witr_h_h13">
		<div class="kurigram_nav_area scroll_fixed bdbar">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
		
				<div class="row no-logo-sr">				
					<!-- MAIN MENU -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<nav class="kurigram_menu nologo_menu13">						
							<?php kurigram_main_menu(); ?>
								<div class="tx_bs_together">
									<div class="creative_search_icon">
										<?php kurigram_search_code(); ?>
									</div>
									<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
										<div class="donate-btn-header">
											<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
												<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
													'i' => array(
														'class' =>array()
													),
												));?>	
											</a>	
										</div>	
									<?php endif; ?>	
								</div>								
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	

	
	<!--Header One Page With Search Menu = 14 -->
 	<?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==14 ){?>
 
 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h14">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
					
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_one_page_menu(); ?>
							<?php kurigram_search_code(); ?>	
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						


			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	


	<!-- header mini shop menu  = 15 -->
 	<?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==15 ){?>
 
 	<div class="kurigram-main-menu hidden-xs hidden-sm  witr_h_h15">
		<div class="kurigram_nav_area">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-2 col-sm-2 col-xs-2">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-10 col-sm-10 col-xs-10 tx_menu_together">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
						</nav>				
						<!-- END MAIN MENU -->
								<!-- Woo Icon cart -->
								<?php if( class_exists( 'WooCommerce' ) ) { kurigram_mini_shop_output(); } ?>					
					</div>
				</div><!-- END ROW -->		
			</div> 	<!-- END CONTAINER -->			
		</div> 	
	</div>  <!-- END AREA -->				
	
	<!-- Header Hamburgers Menu = 16 -->
    <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==16 ){?>	

 	<div class="kurigram-main-menu hidden-xs hidden-sm transprent-menu heading_style_4  witr_h_h16">
		<div class="trp_nav_area">		
		
		
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
		
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_ts_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 hmer col-xs-8">
					
						<button class="hamburger hamburger--slider" type="button">
						  <span class="hamburger-box">
							<span class="hamburger-inner"></span>
						  </span>
						</button>					
					
					
						<nav class="kurigram_menu dvrm">						
							<?php kurigram_main_menu(); ?>
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	

				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
		

		<!-- Header Box style menu   = 17 -->	
	<?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==17 ){?>
   
 	<div class="kurigram-main-menu hidden-xs hidden-sm transprent-menu heading_style_17 witr_h_h2">
		<div class="trp_nav_area hmenu_box_style container">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
							
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>								
							
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
	

	<!-- header No Logo mini shop menu  = 18 -->
 	<?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==18 ){?>
 
 	<div class="kurigram-main-menu hidden-xs hidden-sm one_page witr_h_h18">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				<div class="row witr_shop_sc">				
						
						<!-- MAIN MENU -->
						<div class="col-md-8 col-sm-8 col-xs-8">
							<nav class="kurigram_menu">						
								<?php kurigram_main_menu(); ?>
							</nav>				
						</div>
						<!-- END MAIN MENU -->
						<div class="col-md-4 col-sm-4">
							<div class=" tx_mmenu_together">						
								<div class="main-search-menu">						
									<?php kurigram_search_code(); ?>																			
								</div>				
								<!-- Woo Icon cart -->
								<?php if( class_exists( 'WooCommerce' ) ) { kurigram_mini_shop_output(); } ?>										
								
								<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
									<div class="donate-btn-header">
										<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
											<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
												'i' => array(
													'class' =>array()
												),
											));?>	
										</a>	
									</div>	
								<?php endif; ?>										
							</div>											
						</div>
				</div><!-- END ROW -->		
			</div> 	<!-- END CONTAINER -->			
					
		</div> 	
	</div>  <!-- END AREA -->	
	
	<!-- header No Logo mini shop menu  = 19 -->
 	<?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==19 ){?>
 
 	<div class="kurigram-main-menu hidden-xs hidden-sm one_page witr_h_h19">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				<div class="row logo-left witr_shop_sc">								
					<!-- LOGO -->
					<div class="col-md-2 col-sm-2 col-xs-2">
						<?php kurigram_main_logo(); ?>
					</div>						
						<!-- MAIN MENU -->
						<div class="col-md-6 col-sm-6 col-xs-6">
							<nav class="kurigram_menu">						
								<?php kurigram_main_menu(); ?>
							</nav>				
						</div>
						<!-- END MAIN MENU -->
						<div class="col-md-4 col-sm-4">
							<div class=" tx_mmenu_together">						
								<div class="main-search-menu">						
									<?php kurigram_search_code(); ?>																			
								</div>				
								<!-- Woo Icon cart -->
								<?php if( class_exists( 'WooCommerce' ) ) { kurigram_mini_shop_output(); } ?>										
								
								<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
									<div class="donate-btn-header">
										<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
											<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
												'i' => array(
													'class' =>array()
												),
											));?>	
										</a>	
									</div>	
								<?php endif; ?>										
							</div>											
						</div>
				</div><!-- END ROW -->		
			</div> 	<!-- END CONTAINER -->			
					
		</div> 	
	</div>  <!-- END AREA -->	

	<!-- Header Menu With Search = 20 -->
    <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==20 ){?>  

 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm witr_search_wh  witr_h_h20">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
					
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="tx_mmenu_together">
							<nav class="kurigram_menu nologo_menu13">						
								<?php kurigram_main_menu(); ?>																										
							</nav>
							<div class="main-search-menu">						
								<?php kurigram_search_code(); ?>																			
							</div>
							<?php if ( is_active_sidebar( 'sidebar-pop' ) ) { ?>
								<div class="menu_popup_option">
									<?php kurigram_right_side_menu(); ?>
								</div>
							<?php  }?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>	<!-- END Button -->	
						
						</div>
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
			
			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>
	
	
	<!-- Header Menu With Search = 21 -->
    <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==21 ){?>  

 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm witr_search_wh sb_popup  witr_h_h21">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
					
				<div class="row">				
					
					<!-- MAIN MENU -->
					<div class="col-md-12">
						<div class="tx_mmenu_together">
							<nav class="kurigram_menu nologo_menu13">						
								<?php kurigram_main_menu(); ?>																										
							</nav>
							
							<div class="search_popup_button">						
								<div class="main-search-menu">						
									<?php kurigram_search_code(); ?>																			
								</div>
								<?php if ( is_active_sidebar( 'sidebar-pop' ) ) { ?>
									<div class="menu_popup_option">
										<?php kurigram_right_side_menu(); ?>
									</div>
								<?php  }?>
								<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
									<div class="donate-btn-header">
										<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
											<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
												'i' => array(
													'class' =>array()
												),
											));?>	
										</a>	
									</div>	
								<?php endif; ?>	<!-- END Button -->	
						
							</div>
						</div>
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
			
			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
	
	<!-- Header Menu With Button = 22 -->
    <?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==22 ){?>  

 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h22">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="number_align">
							<nav class="kurigram_menu menu_search">						
								<?php kurigram_main_menu(); ?>
								<?php kurigram_search_code(); ?>
							</nav>							
							<div class="main_menu_address_a">										
								<div class="main_menu_header_icon">										
									<?php echo wp_kses($kurigram_opt['main_menu_icon'], array(
										'i' => array(
											'class' =>array()
										),
									));?>
								</div>						
								<div class="main_menu_header_address_text">						
								<?php if (!empty($kurigram_opt['main_menu_top_title'])): ?>										
										<h3><?php echo esc_html($kurigram_opt['main_menu_top_title']); ?></h3>
								<?php endif; ?>	
								<?php if (!empty($kurigram_opt['main_menu_number'])): ?>
									<h4><a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['main_menu_number']); ?>"><?php echo esc_html($kurigram_opt['main_menu_number']); ?></a></h4>
								<?php endif; ?>										
									
								</div>						
							</div>						
						</div>						
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
	
	
	
	<!-- Header Menu Hide  = 23 -->	
	<?php }elseif(!empty($kurigram_opt['txbdm_defaulth_menu_layout']) && $kurigram_opt['txbdm_defaulth_menu_layout']==23 ){?>

	

	<!-- ================ END REDUX ================ -->


	
	<!-- METABOX MENU START ============================================================================================================================= -->
 <?php }else{ ?>
 
 

	 <!-- Header Default Menu = 1 -->
   <?php if($txbdm_header_style==1){?>
 	<div class="kurigram-main-menu hidden-xs hidden-sm witr_h_h1">
		<div class="kurigram_nav_area">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
			
				 <?php if(!empty($kurigram_opt['kurigram_main_menu_layout']) && $kurigram_opt['kurigram_main_menu_layout']=="m_menu_1"){?>			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-lg-9  col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
				 <?php }elseif(!empty($kurigram_opt['kurigram_main_menu_layout']) && $kurigram_opt['kurigram_main_menu_layout']=="m_menu_2"){?>		
				
				<div class="row logo-right">				
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">
							<?php kurigram_main_menu(); ?>
						</nav>				
					</div>
					<!-- END MAIN MENU -->
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
				</div><!-- END ROW -->		
				<?php }elseif(!empty($kurigram_opt['kurigram_main_menu_layout']) && $kurigram_opt['kurigram_main_menu_layout']=="m_menu_3"){?>	
				<div class="row logo-top">					
					<!-- LOGO -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->						
					<!-- MAIN MENU -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<nav class="kurigram_menu">
							<?php kurigram_main_menu(); ?>
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->							
				<?php }else{?>
					
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						
					
				<?php } ?>
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	


	
	 <!-- Header Transparent Menu = 2 -->
   <?php }elseif($txbdm_header_style==2){?>
   
   
 	<div class="kurigram-main-menu hidden-xs hidden-sm transprent-menu heading_style_4 witr_h_h2">
		<div class="trp_nav_area">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_ts_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>									
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	

	
	<!-- Header Transparent With Sticky Menu  = 3 -->
	
   <?php }elseif($txbdm_header_style==3){?>
 
 	<div class="kurigram-main-menu one_page menu4 hidden-xs hidden-sm transprent-menu heading_style_5  witr_h_h3">
		<div class="kurigram_nav_area scroll_fixed bdbar">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			

				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_ts_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>									
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	

				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	



   <!-- Header One Page Menu = 4 -->
  <?php }elseif($txbdm_header_style==4){?>
  
 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h4">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
								
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_onepage_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_one_page_menu(); ?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>									
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
		
	 <!-- Header One Page Transparent Menu  = 5 -->
    <?php }elseif($txbdm_header_style==5){?>
 
 	<div class="kurigram-main-menu hidden-xs hidden-sm one_page transprent-menu heading_style_3  witr_h_h5">
		<div class="trp_nav_area">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">

				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_ts_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_one_page_menu(); ?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>									
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	

				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
	

	
	<!-- Header One Page Transparent With Sticky  Menu  = 6 -->
    <?php }elseif($txbdm_header_style==6){?>  
	
 	<div class="kurigram-main-menu one_page menu4 hidden-xs hidden-sm transprent-menu heading_style_2  witr_h_h6">
		<div class="kurigram_nav_area scroll_fixed bdbar">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_ts_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_one_page_menu(); ?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>									
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	


	<!-- Header Default with Sticky Menu = 7 -->
    <?php }elseif($txbdm_header_style==7){?>  

 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h7">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
			
				 <?php if($kurigram_logo_menu_style==1){?>			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>									
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
				 <?php }elseif($kurigram_logo_menu_style==2){?>	
				
				<div class="row logo-right">				
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">
							<?php kurigram_main_menu(); ?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>									
						</nav>				
					</div>
					<!-- END MAIN MENU -->
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
				</div><!-- END ROW -->		
				 <?php }elseif($kurigram_logo_menu_style==3){?>		
				<div class="row logo-top">					
					<!-- LOGO -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->						
					<!-- MAIN MENU -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<nav class="kurigram_menu">
							<?php kurigram_main_menu(); ?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>									
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->							
				<?php }else{?>
					
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>									
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						
					
				<?php } ?>
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
				
				
	<!-- Header Menu With Search = 8 -->
    <?php }elseif($txbdm_header_style==8){?>  

 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h8">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
					
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu nologo_menu13 main-search-menu">						
							<?php kurigram_main_menu(); ?>
							<?php kurigram_search_code(); ?>																			
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	


	<!-- Header Menu With Social Icon = 9 -->
    <?php }elseif($txbdm_header_style==9){?>  

 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h9">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
						
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-2 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-10 col-sm-9 col-xs-8">
						<nav class="kurigram_menu main-search-menu">						
							<?php kurigram_main_menu(); ?>
							
								<div class="footer-social-icon htop-menu-s">					
									<?php 
										foreach($kurigram_opt['kurigram_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a>';
											}
										}
									?>							
				
								</div>
								<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
									<div class="donate-btn-header">
										<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
											<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
												'i' => array(
													'class' =>array()
												),
											));?>	
										</a>	
									</div>	
								<?php endif; ?>									
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	

				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	


	<!-- Header Menu With Button = 10 -->
    <?php }elseif($txbdm_header_style==10){?>  

 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h10">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
						
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu main-search-menu">						
							<?php kurigram_main_menu(); ?>

							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>	
									
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	

	
	<!-- Header Menu With Button headroom Menu = 11 -->
    <?php }elseif($txbdm_header_style==11){?>  

 	<div class="kurigram-main-menu hidden-xs hidden-sm one_page header--fixed headrooma  witr_h_h11">
		<div class="kurigram_nav_area">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_onepage_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu main-search-menu">						
							<?php kurigram_one_page_menu(); ?>

							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>	
									
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>		
	
	
	<!-- Header Menu With Search and no Logo = 12 -->
    <?php }elseif($txbdm_header_style==12){?>  


 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h12">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
	
				<div class="row no-logo-sr">				
					<!-- MAIN MENU -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<nav class="kurigram_menu creative_header_menu">						
							<?php kurigram_main_menu(); ?>
							<div class="tx_bs_together">
								<div class="creative_search_icon">
									<?php kurigram_search_code(); ?>
								</div>
								<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
									<div class="donate-btn-header">
										<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
											<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
												'i' => array(
													'class' =>array()
												),
											));?>	
										</a>	
									</div>	
								<?php endif; ?>	
							</div>	
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
	

	
	<!-- Header Transparent Sticky No logo Menu  = 13 -->
   <?php }elseif($txbdm_header_style==13){?>
 
 	<div class="kurigram-main-menu one_page menu4 hidden-xs hidden-sm transprent-menu heading_style_5  witr_h_h13">
		<div class="kurigram_nav_area scroll_fixed bdbar">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
		
				<div class="row no-logo-sr">				
					<!-- MAIN MENU -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<nav class="kurigram_menu nologo_menu13">						
							<?php kurigram_main_menu(); ?>
							<div class="tx_bs_together">
								<div class="creative_search_icon">
									<?php kurigram_search_code(); ?>
								</div>
								<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
									<div class="donate-btn-header">
										<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
											<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
												'i' => array(
													'class' =>array()
												),
											));?>	
										</a>	
									</div>	
								<?php endif; ?>	
							</div>							
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	


	<!--Header One Page With Search Menu = 14 -->
 	<?php }elseif($txbdm_header_style==14){?>
 
 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm  witr_h_h14">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu main-search-menu">						
							<?php kurigram_one_page_menu(); ?>
							<?php kurigram_search_code(); ?>																			
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	


	<!-- header mini shop menu  = 15 -->
 	<?php }elseif($txbdm_header_style==15){?>
 
 	<div class="kurigram-main-menu hidden-xs hidden-sm  witr_h_h15">
		<div class="kurigram_nav_area">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-2 col-sm-2 col-xs-2">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-10 col-sm-10 col-xs-10 tx_menu_together">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
						</nav>				
					</div>
					<!-- END MAIN MENU -->
					<div class="col-md-2 col-sm-2">
						<!-- Woo Icon cart -->
						<?php if( class_exists( 'WooCommerce' ) ) { kurigram_mini_shop_output(); } ?>					
					
					</div>
				</div> <!-- END ROW -->						
					
			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
	
	<!-- Header Hamburgers Menu = 166=19 -->
    <?php }elseif($txbdm_header_style==16){?> 	


 	<div class="kurigram-main-menu hidden-xs hidden-sm transprent-menu heading_style_4  witr_h_h16">
		<div class="trp_nav_area">		
		
		
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
					
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_ts_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 hmer col-xs-8">
					
						<button class="hamburger hamburger--slider" type="button">
						  <span class="hamburger-box">
							<span class="hamburger-inner"></span>
						  </span>
						</button>					
					
					
						<nav class="kurigram_menu dvrm">						
							<?php kurigram_main_menu(); ?>
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	


			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	

		
	<!-- Header Transparent With Button Menu  = 17 -->	
	<?php }elseif($txbdm_header_style==17){?>

 	<div class="kurigram-main-menu hidden-xs hidden-sm transprent-menu heading_style_17 witr_h_h2">
		<div class="trp_nav_area hmenu_box_style container">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
							
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>								
							
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
				

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	

	<!-- header mini shop menu  = 18 -->
 	<?php }elseif($txbdm_header_style==18){?>
 
 	<div class="kurigram-main-menu hidden-xs hidden-sm one_page witr_h_h18">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">	
				<div class="row witr_shop_sc">				
						
						<!-- MAIN MENU -->
						<div class="col-md-8 col-sm-8 col-xs-8">
							<nav class="kurigram_menu">						
								<?php kurigram_main_menu(); ?>
							</nav>				
						</div>
						<!-- END MAIN MENU -->
						<div class="col-md-4 col-sm-4">
							<div class=" tx_mmenu_together">						
								<div class="main-search-menu">						
									<?php kurigram_search_code(); ?>																			
								</div>				
								<!-- Woo Icon cart -->
								<?php if( class_exists( 'WooCommerce' ) ) { kurigram_mini_shop_output(); } ?>										
								
								<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
									<div class="donate-btn-header">
										<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
											<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
												'i' => array(
													'class' =>array()
												),
											));?>	
										</a>	
									</div>	
								<?php endif; ?>										
							</div>											
						</div>
				</div><!-- END ROW -->	
			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	

	<!-- header mini shop menu  = 19 -->
 	<?php }elseif($txbdm_header_style==19){?>
 
 	<div class="kurigram-main-menu hidden-xs hidden-sm one_page witr_h_h19">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
				<div class="row logo-left witr_shop_sc">								
					<!-- LOGO -->
					<div class="col-md-2 col-sm-2 col-xs-2">
						<?php kurigram_main_logo(); ?>
					</div>						
						<!-- MAIN MENU -->
						<div class="col-md-6 col-sm-6 col-xs-6">
							<nav class="kurigram_menu">						
								<?php kurigram_main_menu(); ?>
							</nav>				
						</div>
						<!-- END MAIN MENU -->
						<div class="col-md-4 col-sm-4">
							<div class=" tx_mmenu_together">						
								<div class="main-search-menu">						
									<?php kurigram_search_code(); ?>																			
								</div>				
								<!-- Woo Icon cart -->
								<?php if( class_exists( 'WooCommerce' ) ) { kurigram_mini_shop_output(); } ?>										
								
								<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
									<div class="donate-btn-header">
										<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
											<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
												'i' => array(
													'class' =>array()
												),
											));?>	
										</a>	
									</div>	
								<?php endif; ?>										
							</div>											
						</div>
				</div><!-- END ROW -->
			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>

	<!-- header mini shop menu  = 20 -->
 	<?php }elseif($txbdm_header_style==20){?>
 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm witr_search_wh  witr_h_h20">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
					
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="tx_mmenu_together">
							<nav class="kurigram_menu nologo_menu13">						
								<?php kurigram_main_menu(); ?>																										
							</nav>
							<div class="main-search-menu">						
								<?php kurigram_search_code(); ?>																			
							</div>
							<?php if ( is_active_sidebar( 'sidebar-pop' ) ) { ?>
								<div class="menu_popup_option">
									<?php kurigram_right_side_menu(); ?>
								</div>
							<?php  }?>
							<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
										<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>	<!-- END Button -->	
						
						</div>
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
			
			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>

 	<!-- Header Menu Hide  = 21 -->	
	<?php }elseif($txbdm_header_style==21){?>
 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm witr_search_wh sb_popup  witr_h_h21">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
					
				<div class="row">									
					<!-- MAIN MENU -->
					<div class="col-md-12">
						<div class="tx_mmenu_together">
							<nav class="kurigram_menu nologo_menu13">						
								<?php kurigram_main_menu(); ?>																										
							</nav>							
							<div class="search_popup_button">						
								<div class="main-search-menu">						
									<?php kurigram_search_code(); ?>																			
								</div>
								<?php if ( is_active_sidebar( 'sidebar-pop' ) ) { ?>
									<div class="menu_popup_option">
										<?php kurigram_right_side_menu(); ?>
									</div>
								<?php  }?>
								<?php if (!empty($kurigram_opt['kurigram_header_button'])): ?>
									<div class="donate-btn-header">
										<a class="dtbtn" href="<?php if (!empty($kurigram_opt['kurigram_header_button_url'])){echo esc_url($kurigram_opt['kurigram_header_button_url']);}?>">
											<?php echo wp_kses($kurigram_opt['kurigram_header_button'], array(
												'i' => array(
													'class' =>array()
												),
											));?>	
										</a>	
									</div>	
								<?php endif; ?>	<!-- END Button -->	
						
							</div>
						</div>
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
			
			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
 	<!-- Header Menu Hide  = 22 -->	
	<?php }elseif($txbdm_header_style==22){?>
 	<div class="kurigram-main-menu one_page hidden-xs hidden-sm witr_search_wh sb_popup  witr_h_h22">
		<div class="kurigram_nav_area scroll_fixed">
			<div class="<?php if( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
					
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="number_align">
							<nav class="kurigram_menu menu_search">						
								<?php kurigram_main_menu(); ?>
								<?php kurigram_search_code(); ?>
							</nav>							
							<div class="main_menu_address_a">										
								<div class="main_menu_header_icon">										
									<?php echo wp_kses($kurigram_opt['main_menu_icon'], array(
										'i' => array(
											'class' =>array()
										),
									));?>
								</div>						
								<div class="main_menu_header_address_text">						
								<?php if (!empty($kurigram_opt['main_menu_top_title'])): ?>										
										<h3><?php echo esc_html($kurigram_opt['main_menu_top_title']); ?></h3>
								<?php endif; ?>	
								<?php if (!empty($kurigram_opt['main_menu_number'])): ?>
									<h4><a href="<?php esc_attr_e('tel:','kurigram')?><?php echo esc_html($kurigram_opt['main_menu_number']); ?>"><?php echo esc_html($kurigram_opt['main_menu_number']); ?></a></h4>
								<?php endif; ?>										
									
								</div>						
							</div>						
						</div>						
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	

	

 	<!-- Header Menu Hide  = 23 -->	
	<?php }elseif($txbdm_header_style==23){?>

	
	

 <?php }else{ ?>

   <!-- HEADER DEFAULT MANU AREA -->
 	<div class="kurigram-main-menu hidden-xs hidden-sm">
		<div class="kurigram_nav_area">
			<div class="<?php if(!empty($kurigram_opt['kurigram_main_box_layout']) && $kurigram_opt['kurigram_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}elseif( $txbdm_box_menu==3 ){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
	
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php kurigram_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="kurigram_menu">						
							<?php kurigram_main_menu(); ?>
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
	<!-- END HEADER MENU AREA -->
	
   <?php } ?>
    

   <?php } ?>	
 
</div> <!-- absulate div -->
</div> <!-- relative div -->


</div> <!-- top 2 absulate div -->
</div> <!--  top 2 relative div  extra -->


</div> <!--  div extra -->
             
	
</div>	
