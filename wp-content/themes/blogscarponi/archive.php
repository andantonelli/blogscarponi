<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 */

get_header(); ?>

<div class="content-area">
	<div class="container">
		<?php while (have_posts()): the_post();
			get_template_part('template-parts/content', get_post_format());
		endwhile; ?>
		<?php the_posts_navigation(); ?>
	</div>
	<div class="sidebar fixed top-0 right-0 bottom-0">
		<?php get_template_part('template-parts/content','sidebar'); ?>
	</div>
</div>

<?php get_footer();
