<?php
/**
 * adv-wp-theme-04-underscores-purecss Theme Customizer
 *
 * @package adv-wp-theme-04-underscores-purecss
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function adv_wp_theme_04_underscores_purecss_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'adv_wp_theme_04_underscores_purecss_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function adv_wp_theme_04_underscores_purecss_customize_preview_js() {
	wp_enqueue_script( 'adv_wp_theme_04_underscores_purecss_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'adv_wp_theme_04_underscores_purecss_customize_preview_js' );
