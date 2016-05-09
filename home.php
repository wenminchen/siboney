<?php
/**
 * The template for displaying the blog listing page.
 *
 * @package siboney
 */

get_header(); ?>

<section id="main">
    <h2 class="screen-reader-text">Main content</h2>
    <div class="container">
      <article class="blog">
        <div class="row">
			    <div class="col-lg-3 col-md-4 col-sm-5 hidden-xs">
            <aside id="sidebar">
              <h3 class="screen-reader-text">Sidebar</h3>
              <?php get_sidebar('blog'); ?>
            </aside><!-- end sidebar -->
          </div><!-- end col-md-3 --> 

          <div class="col-lg-9 col-md-8 col-sm-7">
            <article id="blog">
              <h3 class="screen-reader-text">Blog Listing</h3>
    					<?php get_template_part( 'content', 'blog' ); ?>
    	 			</article><!-- end article blog -->
    			</div><!-- end col-md-9 -->
		    </div><!-- end row -->
      </article><!-- end article -->

<?php get_footer(); ?>
