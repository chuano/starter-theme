<?php
/**
* Page
* @package WordPress
* @subpackage Starter
* @since Starter 1.0
* @version 1.0
**/
get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<section id="section">
		<article class="container">
			<?php the_content(); ?>
		</article>
	</section>
	<?php endwhile; 
		// Previous/next page navigation.
		the_posts_pagination( array(
			'prev_text'          => __( 'Anterior', 'starter' ),
			'next_text'          => __( 'Siguiente', 'starter' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Página', 'starter' ) . ' </span>',
		) );
	else :
		get_template_part( 'template-parts/content', 'none' );
endif; ?>
<?php get_footer(); ?>