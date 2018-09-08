<article id="post-<?php the_ID(); ?>" <?php post_class('ml2 pr2'); ?>>
	<header class="page__header pt3 pb2">
		<?php the_title( '<h1 class="page__title m0">', '</h1>' ); ?>
	</header>
	<div class="page__content"><?php the_content(); ?></div>
</article>
