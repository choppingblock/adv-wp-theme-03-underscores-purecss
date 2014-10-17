<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package adv-wp-theme-04-underscores-purecss
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function adv_wp_theme_04_underscores_purecss_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'adv_wp_theme_04_underscores_purecss_jetpack_setup' );
