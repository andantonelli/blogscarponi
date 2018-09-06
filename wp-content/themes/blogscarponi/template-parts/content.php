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

<div class="post__image"><?php echo fly_get_attachment_image( $image, array( 1920, 800 ), true, array('class' => 'align-middle fit', 'style' => 'width: 100%; height: auto;')); ?></div>
<article id="post-<?php the_ID(); ?>" <?php post_class('max-width-3 mx-auto px2 md-px0'); ?>>
	<header class="post__header">
		<span class="post__date"><?php echo $date; ?></span>
		<?php the_title( '<h1 class="post__title regular mt2 mb4">', '</h1>' ); ?>
	</header>
	<div class="post__content wysiwyg">
		<?php the_content(); ?>
	</div>
</article>
