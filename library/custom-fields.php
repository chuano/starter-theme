<?php
/**
* Custom Fields.
* @package WordPress
* @subpackage Starter
* @since Starter 1.0
* @version 1.0
* @link https://codex.wordpress.org/Custom_Fields
**/
if( function_exists('acf_add_options_page') ) {
	// acf_add_options_page();
	acf_add_options_page(array(
		'page_title' 	=> 'Configuración del tema',
		'menu_title'	=> 'Starter',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'position' 		=> 3,
		'redirect'		=> false
	));	
}