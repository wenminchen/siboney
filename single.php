<?php
/**
 * The Template for displaying all single posts.
 *
 * @package siboney
 */

get_header(); ?>

<section id="main-gray">
	<h2 class="screen-reader-text">Main content</h2>
  	<div class="container">
	  	<?php while ( have_posts() ) : the_post();
	  		get_template_part( 'content', 'single' );
	  		endwhile; 
	  	?>

<?php get_footer(); ?>