<?php
/**
* Register Widgets.
* @package WordPress
* @subpackage Starter
* @since Starter 1.0
* @version 1.0
* @link https://codex.wordpress.org/Function_Reference/register_widget
**/
/**
Widgets init
**/
if ( ! function_exists( 'widgets_init' ) ) {
	function widgets_init() {
		/** Main Widget Area **/
		register_sidebar(
			array(
				'id' => 'widget-area',
				'name' => __('Widgets', 'starter'),
				'description' => __('Área principal de widgets', 'starter'),
				'before_widget' => '',
				'after_widget' => '',
				'before_title' => '<h1 class="title">',
				'after_title' => '</h1>'
			)
		);
	}
	add_action('widgets_init', 'widgets_init');
}