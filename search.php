<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package siboney
 */

get_header(); ?>

	<section id="main-gray">
    <h2 class="screen-reader-text">Main content</h2>
    <div class="container">
      	<article class="search-results">

			<header>
				<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'siboney' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</header><!-- .page-header -->

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

				get_template_part( 'content', 'search' ); 
				
				endwhile; else :

				get_template_part( 'content', 'none' );

				endif;

			?>
		
		</article>
		
<?php get_footer(); ?>