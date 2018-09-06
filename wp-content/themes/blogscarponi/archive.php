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
		<?php
		if ( have_posts() ) : ?>

			<header class="page__header">
				<?php
					the_archive_title( '<h1 class="page__title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>

			<?php while (have_posts()): the_post();
				get_template_part('template-parts/content', get_post_format());
			endwhile;

			the_posts_navigation();

			else:
				get_template_part('template-parts/content', 'none');
		endif; ?>
	</div>

<?php
get_footer();
