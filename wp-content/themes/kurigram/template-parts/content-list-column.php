<?php
/**
 * Template part for displaying archive posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kurigram
 */

?>
<!-- ARCHIVE QUERY -->
<div class="col-lg-6  col-md-12 col-sm-12 col-xs-12  grid-item">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="kurigram-single-blog">					
				
				<!-- BLOG THUMB -->
				<?php if(has_post_thumbnail()){?>
					<div class="kurigram-blog-thumb">
						<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('kurigram-blog-default'); ?> </a>
					</div>									
				<?php } ?>
				
				<div class="em-blog-content-area">
				
					<!-- BLOG TITLE -->
					<div class="blog-page-title">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
					</div>
						
					<!-- BLOG POST META  -->
					<div class="kurigram-blog-meta">
					
						<div class="kurigram-blog-meta-left">		
							<span><i class="fas fa-calendar-alt"></i><?php echo get_the_time(get_option('date_format')); ?></span>
						<?php if ( comments_open() || get_comments_number() ) {?>
							<a href="<?php comments_link(); ?>"><i class="fas fa-comment"></i>
								<?php comments_number( esc_html__('0 Comments','kurigram'), esc_html__('1 Comment','kurigram'), esc_html__('% Comments','kurigram') );?>
							</a>						
						<?php }else{?>
							<span><i class="fas fa-comment"></i> <?php echo esc_html__('Comments Off','kurigram'); ?></span>
						<?php } ?>						
						</div>
					</div>				
					
					<!-- BLOG TITLE AND CONTENT -->
					<div class="blog-inner">
						<div class="blog-content">					
							<p><?php echo wp_trim_words( get_the_content(), 18, ' ' ); ?></p>
						</div>
					</div>	
					
				</div>			
			</div>
		</div> <!--  END SINGLE BLOG -->
</div><!-- #post-## -->
