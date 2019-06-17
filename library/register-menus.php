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
 			'menu-primary'	=> __( 'Main menu', 'starter' ),
 			'menu-secondary'	=> __( 'Secondary menu', 'starter' ),
 		) );
 	}
 	add_action( 'after_setup_theme', 'register_menus' );
}

// Adding custom class to menu item <li>   
function item_menu_classes($classes, $item, $args) {
	// Primary menu
	if($args->theme_location == 'menu-primary') {
		$classes[] = 'nav-item';
	}
	// Secondary menu
	if($args->theme_location == 'menu-secondary') {
		$classes[] = 'nav-item';
	}
  return $classes;
}
add_filter('nav_menu_css_class', 'item_menu_classes', 1, 3);

// Adding custom class to link <a> (all menus)
function add_menuclass($ul_html, $args) {
	$classes = array (
		'menu-primary' => 'menu-primary-link',
		'menu-secondary' => 'menu-secondary-link'
	);
	
	if (key_exists($args->theme_location, $classes)) {
		return preg_replace('/<a /', '<a class="' . $classes[$args->theme_location] . '"', $ul_html);
	}

	return $ul_html;
}
add_filter('wp_nav_menu','add_menuclass', 10, 2);

// Adding custom class to 'active' li (all menus)
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}