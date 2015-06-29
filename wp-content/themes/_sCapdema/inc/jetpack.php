<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Capdema
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function capdema_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'capdema_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function capdema_jetpack_setup
add_action( 'after_setup_theme', 'capdema_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function capdema_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function capdema_infinite_scroll_render
