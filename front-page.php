<?php
/**
 * The template for displaying front page.
 *
 * @package siboney
 */

get_header(); ?>

<section id="main">
    <h2 class="screen-reader-text">Main content</h2>
    <div class="container">
        <div class="row">
			<div class="col-md-4">
            	<aside id="sidebar">
                	<h3 class="screen-reader-text">Sidebar</h3>
					<?php get_sidebar('front'); ?>
				</aside><!-- end sidebar -->
            </div><!-- end col-md-4 -->	  

			<div class="col-md-7 col-md-offset-1">
        		<section id="featured">
              		<h3 class="screen-reader-text">Featured content - carousel</h3>
					<?php get_template_part( 'content', 'carousel' ); ?>
	 			</section><!-- end featured section -->
			</div><!-- end col-md-7 -->
		</div><!-- end row -->
<?php get_footer(); ?>
