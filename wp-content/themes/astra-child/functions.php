<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function functionShortCode($params, $content = null) {
	$a = shortcode_atts([
		'param0' => '',
		'param1' => '',
	],$params);
	$a2 = test($a['param0']);
	$html = '<p>Teste ' . $a2 . ' ' . $a['param1'] . ' ' . $content . '</p>';
	return $html;
}

function test($passing){
	return $passing."aaa222";
}

add_shortcode('testeshort', 'functionShortCode');