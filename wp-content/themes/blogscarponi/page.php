<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 */

 get_header(); ?>

 	<div class="content-area">
		<div class="container">
			<?php	while ( have_posts() ) : the_post();
				get_template_part('template-parts/content', 'page');
				get_template_part('template-parts/block', 'sections');
			endwhile; ?>
		</div>
		<div class="sidebar fixed top-0 right-0 bottom-0">
			<?php get_template_part('template-parts/content','sidebar'); ?>
		</div>
 	</div>

 <?php get_footer();
