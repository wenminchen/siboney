<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package siboney
 */

get_header(); ?>

	<section id="main-gray">
		<h2 class="screen-reader-text">Main content</h2>
      	<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; else:

				get_template_part( 'content', 'none' ); 
	    		
	    		endif; 

			?>
	
<?php get_footer(); ?>