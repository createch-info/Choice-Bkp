<?php 
/*
single details page

*/
 global $kurigram_opt;
?>							
		<div class="kurigram-single-blog-details">
			<?php if(has_post_thumbnail()){?>
				<div class="kurigram-single-blog--thumb">
					<?php the_post_thumbnail('kurigram-blog-single'); ?>
				</div>									
			<?php } ?>
			<div class="kurigram-single-blog-details-inner">	
				<div class="kurigram-single-blog-title">
					<h2><?php the_title(); ?></h2>	
				</div>
						
				
				<?php if( 'post' == get_post_type() ) { ?>
						<!-- BLOG POST META  -->
						<div class="kurigram-blog-meta">
						
							<div class="kurigram-blog-meta-left">
								
								<span><i class="fas fa-calendar-alt"></i><?php echo get_the_time(get_option('date_format')); ?></span>
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="fas fa-user"></i> <?php the_author(); ?></a>
								<?php if ( comments_open() || get_comments_number() ) {?>
									<a href="<?php comments_link(); ?>"><i class="fas fa-comment"></i>
										<?php comments_number( esc_html__('0 Comments','kurigram'), esc_html__('1 Comment','kurigram'), esc_html__('% Comments','kurigram') );?>
									</a>						
								<?php }else{?>
									<span><i class="fas fa-comment"></i> <?php echo esc_html__('Comments Off','kurigram'); ?></span>
								<?php } ?>							
							</div>
						</div>
				<?php } // if post ?>
				

				<div class="kurigram-single-blog-content">
					<div class="single-blog-content">
					<?php the_content(); ?>
					<?php if ( '' != get_the_content() ) { ?>					
						<div class="page-list-single">						
							<?php 
							/**
							* Display In-Post Pagination
							*/
							wp_link_pages( array(
								'link_before'   => '<span>',
								'link_after'    => '</span>',
								'before'        => '<p class="inner-post-pagination"><span>' . esc_html__('Pages:', 'kurigram'),
								'after'     => '</p>'
							)); ?>					
												
						</div>
					<?php } ?>
					</div>
				</div>
				<div class="witr_next_previous">
					<div class="txbd_previous">Previous <?php previous_post_link(); ?></div>
					<div class="txbd_next"><?php next_post_link(); ?> Next</div>
				</div>			

				<?php if( 'post' == get_post_type() ) { ?>	
				
				
					<?php if (!empty($kurigram_opt['kurigram_blog_socialsharesh_hide']) && $kurigram_opt['kurigram_blog_socialsharesh_hide']==true){?>
						
						<div class="kurigram-blog-social">
							<div class="kurigram-single-icon">
								<?php
								if( function_exists('kurigram_blog_sharing') ){						
									kurigram_blog_sharing();
								}
								?>
							</div>
						</div>					
						
					<?php }else{
						
					}} ?> 	
			</div>
		</div>

	<?php comments_template();