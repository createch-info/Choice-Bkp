<?php
/**
 * Template Name: Blog Both Sidebar
 */

get_header();
get_template_part( 'includes/header' , 'page-title' ); ?>

			<!-- BLOG AREA START -->
			<div class="kurigram-blog-area kurigram-blog-archive witr_blog_both">
				<div class="container">				
					<div class="row">
					
						<?php if ( is_active_sidebar( 'sidebar-1' ) ) {?>
							<div class="col-lg-3 col-md-6  col-sm-12 col-xs-12  sidebar-right content-widget">
								<div class="blog-left-side widget">								
									<?php dynamic_sidebar( 'sidebar-1' ); ?>
								</div>
							</div>		
						<?php } ?>
						
						<?php
							$page = ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );
							$paged = ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : $page );
							$wp_query = new WP_Query( array(
								'post_type' => 'post',
								'paged'     => $paged,
								'page'      => $paged,
							) );
						if ( $wp_query->have_posts() ) : ?>
													
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="row">								
								<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();
								
									global $post; ?>
									
									<?php get_template_part( 'template-parts/content' , 'list' ); ?>
									
								<?php endwhile; // while has_post(); ?>								
								</div>
								
								<!-- START PAGINATION -->
								<div class="row">
									<div class="col-md-12">
										
										<?php kurigram_pagination();?>

									</div>
								</div>
								<!-- END START PAGINATION -->								
							</div>
						<?php endif; // if has_post() ?>

						<?php if ( is_active_sidebar( 'sidebar-2' ) ) {?>
							<div class="col-lg-3 col-md-6  col-sm-12 col-xs-12  sidebar-right content-widget">
								<div class="blog-left-side widget">								
									<?php dynamic_sidebar( 'sidebar-2' ); ?>
								</div>
							</div>		
						<?php } ?>																				

					</div>
				</div>
			</div>
			<!-- END BLOG AREA START -->

<?php 
get_footer();