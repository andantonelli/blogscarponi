<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page__header">
		<?php the_title( '<h1 class="page__title">', '</h1>' ); ?>
	</header>
	<div class="page__content"><?php the_content(); ?></div>
</article>
