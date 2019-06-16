<?php
/**
* Register Menus.
* @package WordPress
* @subpackage Starter
* @since Starter 1.0
* @version 1.0
* @link https://codex.wordpress.org/Function_Reference/register_nav_menus
**/
// Register menus
if ( ! function_exists( 'register_menus' ) ) {
	function register_menus() {
		register_nav_menus( array(
 			'menu-primary'	=> __( 'Menú principal', 'starter' ),
 		) );
 	}
 	add_action( 'after_setup_theme', 'register_menus' );
}
// Primary
if ( ! function_exists( 'menu_primary' ) ) {
	function menu_primary() {
		wp_nav_menu(array(
		'container' => false,                           // remove nav container
		'container_class' => '',                        // class of container
		'theme_location' => 'menu-primary',       	// where it's located in the theme
		'menu' => '',                                   // menu name
		'menu_class' => '',					// adding custom nav class
		'before' => '',                                 // before each link <a>
		'after' => '',                                  // after each link </a>
		'link_before' => '',                            // before each link text
		'link_after' => '',                             // after each link text
		'depth' => 5,                                   // limit the depth of the nav
		'fallback_cb' => false                          // fallback function (see below)
		// 'walker' => new top_bar_walker()
    		));
	}
}