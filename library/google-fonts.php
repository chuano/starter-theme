<?php
/**
* Google Fonts.
* @package WordPress
* @subpackage Starter
* @since Starter 1.0
* @version 1.0
* @link http://www.wpbeginner.com/wp-themes/how-add-google-web-fonts-wordpress-themes/
* @see http://wptavern.com/wordpress-tip-how-to-load-google-fonts-over-ssl-and-non-ssl
**/
if ( ! function_exists( 'googlefonts' ) ) {
	function googlefonts() {
		// Dosis | PT Sans
		wp_register_style('custom-fonts', 'https://fonts.googleapis.com/css?family=SelectYourFonts');
		wp_enqueue_style( 'custom-fonts');
	}
	add_action('wp_print_styles', 'googlefonts');
}