<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package siboney
 */

get_header(); ?>

	<section id="main-gray">
		<h2 class="screen-reader-text">Main content</h2>
      	<div class="container">
		
			<?php while ( have_posts() ) : the_post(); 

				get_template_part( 'content', 'page' ); 

				endwhile; 
			?>
	
<?php get_footer(); ?>
