<?php
/**
 * Template Name: Homepage
 *
 *
 */

get_header(); ?>
	<div class="content-area">
		<section id="full-width-slideshow">
			<?php get_template_part( 'template-parts/section', 'slideshow' ); ?>
		</section>
		<div class="container">
			<?php while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; ?>
		</div>
	</div>

<?php
get_footer();
