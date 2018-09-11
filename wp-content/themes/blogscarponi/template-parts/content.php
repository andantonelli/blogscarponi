<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*
 */

 	$date = get_the_date();
 	$image = get_post_thumbnail_id();
?>

<div class="post__image pl2"><?php echo fly_get_attachment_image( $image, array( 1920, 800 ), true, array('class' => 'align-middle fit', 'style' => 'width: 100%; height: auto;')); ?></div>
<article id="post-<?php the_ID(); ?>" <?php post_class('pl2 pr4 mr3 mb4 pb4'); ?>>
	<header class="post__header pt3">
		<span class="post__date"><?php echo $date; ?></span>
		<?php the_title( '<h1 class="post__title uppercase regular mt2 mb3">', '</h1>' ); ?>
	</header>
	<div class="post__content wysiwyg">
		<?php the_content(); ?>
	</div>
</article>
