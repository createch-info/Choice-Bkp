<?php
/**
 * Template Name: Blog Grid
 */

get_header();
get_template_part( 'includes/header' , 'page-title' ); ?>

	<div class="template-home-wrapper">

		<div class="page-content-home-page">										
			<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
			<?php endwhile; ?>	
		</div>
		
	</div>
<?php 
get_footer();