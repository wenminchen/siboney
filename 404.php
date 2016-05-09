<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package siboney
 */

get_header(); ?>

	<section id="main-gray">
      <div class="container">

		<header>
			<h2 class="page-title"><?php _e( 'Oops! Something went wrong here.', 'siboney' ); ?></h2>
		</header><!-- .page-header -->

		<div class="page-content">

			<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', 'siboney' ); ?></p>

			<?php get_search_form(); ?>

		</div><!-- .page-content -->

	</section><!-- .content-padder -->

<?php get_footer(); ?>