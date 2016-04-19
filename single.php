<?php
/**
 * The Template for displaying all single posts.
 *
 * @package siboney
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>
		
		<?php 
		// Previous/next post navigation.
		the_post_navigation( array(
			'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'popper' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Next post:', 'siboney' ) . '</span> ' .
				'<span class="post-title">%title</span>',
			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'siboney' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Previous post:', 'siboney' ) . '</span> ' .
				'<span class="post-title">%title</span>',
		) );
		?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
			endif;
		?>

	<?php endwhile; // End of the loop. ?>	

<?php get_footer(); ?>