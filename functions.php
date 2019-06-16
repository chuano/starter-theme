<?php
/**
* Functions.
* @package WordPress
* @subpackage Starter
* @since Starter 1.0
* @version 1.0
**/
/** 1. Setup **/
require_once locate_template( '/library/setup.php' );
/** 2. Google Fonts **/
require_once locate_template( '/library/google-fonts.php' );
/** 3. Custom scripts (CSS and JS) **/
require_once locate_template( '/library/register-scripts.php' );
/** 4. Menus **/
require_once locate_template( '/library/register-menus.php' );
/** 5. Widgets **/
require_once locate_template( '/library/register-widgets.php' );
/** 6. Ciustom Fields **/
require_once locate_template( '/library/custom-fields.php');