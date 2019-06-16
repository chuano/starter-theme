<?php
/**
* Custom Scripts.
* @package WordPress
* @subpackage Starter
* @since Starter 1.0
* @version 1.0
* @link https://developer.wordpress.org/reference/functions/wp_register_style/
* @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
* @link https://developer.wordpress.org/reference/functions/wp_register_script/
* @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
**/

// CSS
if ( ! function_exists( 'custom_stylesheets' ) ) {
	function custom_stylesheets() {
		// Custom CSS
		wp_register_style( 'screen-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1', 'screen' );
		wp_enqueue_style( 'screen-style' );
	}
}
add_action( 'wp_enqueue_scripts', 'custom_stylesheets' );

// Scripts
if ( ! function_exists( 'custom_scripts' ) ) {
	function custom_scripts() {
		// wp_register_script( $handle, $src, $deps, $ver, $in_footer );
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js', null, '2.1.1', true );
		wp_enqueue_script( 'jquery' );
		wp_register_script( 'jquery-slim', get_template_directory_uri() . '/assets/js/vendor/jquery-slim.min.js', '', '3.3.1', true );
		wp_enqueue_script( 'jquery-slim' );
		wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', '', '4.1.1', true );
		wp_enqueue_script( 'bootstrap' );
		wp_register_script( 'holder', get_template_directory_uri() . '/assets/js/vendor/holder.min.js', '', '2.9.4', true );
		wp_enqueue_script( 'holder' );
		wp_register_script( 'popper', get_template_directory_uri() . '/assets/js/vendor/popper.min.js', '', '1.0.0', true );
		wp_enqueue_script( 'popper' );
	}
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );