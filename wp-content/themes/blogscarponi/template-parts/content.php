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
		<div class="post__match-review py3 match">
			<?php while(has_sub_field('match_review')): 
					$match = get_sub_field('match');
					$review = get_sub_field('review'); ?>

				<div class="match__header pb2 flex items-center">
					<?php while(have_rows('match')): the_row();
						$home_team = get_sub_field('home_team');
						$home_score = get_sub_field('home_score');
						$away_team = get_sub_field('away_team');
						$away_score = get_sub_field('away_score'); ?>

						<div class="match__result match__home <?php echo $home_score > $away_score ? 'match__winner' : '' ?> flex items-center">
							<?php $post = $home_team; setup_postdata($post); ?>
								<h2 class="match__team right-align regular uppercase m0 px2"><?php echo get_the_title(); ?></h2>
								<!-- <div class="match__logo" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat center center; background-size: contain; width: 5rem; height: 5rem;"></div> -->
							<?php wp_reset_postdata(); ?>
							<span class="match__score center inline-block px1 pt1 bold"><?php echo $home_score; ?></span>
						</div>
						
						<span class="match__separetor px1 inline-block"><?php echo 'v' ?></span>
						
						<div class="match__result match__away <?php echo $away_score > $home_score ? 'match__winner' : '' ?> flex items-center">
							<span class="match__score center inline-block px1 pt1 bold"><?php echo $away_score; ?></span>							
							<?php $post = $away_team; setup_postdata($post); ?>
								<!-- <div class="match__logo" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat center center; background-size: contain; width: 5rem; height: 5rem;"></div> -->
 								<h2 class="match__team regular uppercase m0 px2"><?php echo the_title(); ?></h2>
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

	<nav><a class="post__back-link button" href="<?php echo get_post_type_archive_link('post'); ?>">Tutti gli articoli</a></nav>
</article>
