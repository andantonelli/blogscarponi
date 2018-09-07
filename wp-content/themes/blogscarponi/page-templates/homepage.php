<?php
/**
 * Template Name: Homepage
 *
 *
 */

get_header(); ?>
	<div class="content-area">
		<div class="container">
			<?php while ( have_posts() ) : the_post();
				// get_template_part( 'template-parts/content', 'page' );
				get_template_part( 'template-parts/section', 'home-posts' );
			endwhile; ?>
		</div>
	</div>

<?php
get_footer();
