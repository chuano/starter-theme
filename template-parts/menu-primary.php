<?php
/**
* Menu
* @package WordPress
* @subpackage Starter
* @since Starter 1.0
* @version 1.0
**/
?>
<?php if ( has_nav_menu( 'menu-primary' ) ) : ?>
	<nav id="navigation" class="" role="navigation" aria-label="<?php esc_attr_e( 'Menú', 'starter' ); ?>">
		<?php
			wp_nav_menu( array(
				'items_wrap' => '<ul class="">%3$s</ul>',
				'theme_location' => 'menu-primary',
				'menu_class' => 'menu-primary',
			 ) );
		?>
	</nav>
<?php endif; ?>