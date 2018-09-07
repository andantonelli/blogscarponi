<?php
/**
 * functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 *
 */

if ( ! function_exists( 'blogscarponi_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blogscarponi_setup() {
	load_theme_textdomain( 'blogscarponi', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main' => esc_html__( 'Main', 'blogscarponi' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'blogscarponi_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'blogscarponi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blogscarponi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blogscarponi_content_width', 640 );
}
add_action( 'after_setup_theme', 'blogscarponi_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function blogscarponi_scripts() {
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/dist/css/index.css');
	wp_enqueue_script( 'vendor-script', get_template_directory_uri() . '/dist/bundle.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blogscarponi_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Require utils
 */
require get_template_directory() . '/inc/utils.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/*
 * Custom post type
 */
require get_template_directory() . '/inc/custom-content-type.php';

/**
 * ACF options page
 */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

}
