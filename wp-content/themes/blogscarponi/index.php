<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 */

get_header(); ?>

<div class="content-area">
	<div class="container">		
		<?php get_template_part('template-parts/section','archive-posts'); ?>
	</div>
	<div class="sidebar fixed top-0 right-0 bottom-0">
		<?php get_template_part('template-parts/content','sidebar'); ?>
	</div>
</div>

<?php get_footer();
