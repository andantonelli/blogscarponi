<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 *
 */

get_header(); ?>
	<div class="content-area">
		<div class="container">
			<section class="page__404 404 px2 mt4 center">
				<header class="page__header">
				<img src="https://media.giphy.com/media/KGTTNpVuGVhN6/giphy.gif?cid=3640f6095bad4ef0566d395241f95a65" alt="">
				<h1 class="page__title my3"><?php _e( 'Oops! Questo sembra proprio un epic fail!', 'blogscarponi' ); ?></h1>
				</header>
				<div class="page__content wysiwyg">
					<?php _e('Sembra che qui non ci sia nulla. Torna alla <a href="'.esc_url( home_url()).'">home</a> per altri fantastici contenuti', 'blogscarponi' ); ?><br>
					<?php _e('Oppure <a href="https://leghe.fantagazzetta.com/scarponi-2018-2019/info-squadra?t=2196982" target="_blank">clicca qui</a> per scoprire in anteprima chi vincerà il campionato quest\'anno.', 'blogscarponi' ); ?>
				</div>
			</section>
		</div>
		<div class="sidebar fixed top-0 right-0 bottom-0">
			<?php get_template_part('template-parts/content','sidebar'); ?>
		</div>
	</div>

<?php get_footer();
