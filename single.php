<?php
/**
* Single
* @package WordPress
* @subpackage Starter
* @since Starter 1.0
* @version 1.0
**/
get_header(); ?>
<?php
	/* Start the Loop */
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content');

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

		the_post_navigation( array(
			'prev_text'          => __( 'Anterior', 'starter' ),
			'next_text'          => __( 'Siguiente', 'starter' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Página', 'starter' ) . ' </span>',
		) );
	endwhile; // End of the loop.
?>
<?php get_footer(); ?>