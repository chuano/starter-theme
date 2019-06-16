<?php
/**
* Sidebar
* @package WordPress
* @subpackage Starter
* @since Starter 1.0
* @version 1.0
**/
?>
<?php if ( is_active_sidebar( 'widget-area' ) ) : ?>
	<?php dynamic_sidebar( 'widget-area' ); ?>
<?php endif; ?>