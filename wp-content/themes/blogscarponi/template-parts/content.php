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
	$match_review = get_field('match_review');
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
	
	<?php if($match_review): ?>
		<div class="post__match-review match">
			<?php while(has_sub_field('match_review')): 
					$match = get_sub_field('match');
					$review = get_sub_field('review'); ?>

				<div class="match__header flex items-center">
					<?php while(have_rows('match')): the_row();
						$home_team = get_sub_field('home_team');
						$home_score = get_sub_field('home_score');
						$away_team = get_sub_field('away_team');
						$away_score = get_sub_field('away_score'); ?>

						<div class="match__home flex items-center">
							<?php $post = $home_team; setup_postdata($post); ?>
								<h2 class="match__team m0"><?php echo get_the_title(); ?></h2>
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							<?php wp_reset_postdata(); ?>
							<span class="match__score"><?php echo $home_score; ?></span>
						</div>
						
						<span class="match__separetor inline-block px2"><?php echo 'v' ?></span>
						
						<div class="match__away flex items-center">
							<span class="match__score"><?php echo $away_score; ?></span>							
							<?php $post = $away_team; setup_postdata($post); ?>
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
								<h2 class="match__team m0"><?php echo the_title(); ?></h2>
							<?php wp_reset_postdata(); ?>						
						</div>

					<?php endwhile; ?>
				</div>

				<div class="match__content wysiwyg">
					<?php echo $review; ?>
				</div>			
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</article>
