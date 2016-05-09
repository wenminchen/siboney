<?php
/**
 * Code for second featured image (http://ankitpokhrel.com/explore/get-more-out-of-featured-images-with-dynamic-featured-image-plugin/)
 * @package siboney
 */
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="row">
        <div class="col-md-8">
          <figure>
        		<?php the_post_thumbnail( 'full' ); ?>
        		<p>&nbsp;</p>
  			    <?php if( class_exists('Dynamic_Featured_Image') ) {
       			global $dynamic_featured_image;
       			$featured_images = $dynamic_featured_image->get_featured_images( get_the_ID() );

      			//You can now loop through the image to display them as required
      			foreach( $featured_images as $image ){
              		echo "<img src='{$image['thumb']}' alt='Dynamic Featured Image' />";
          			echo "<p>&nbsp;</p>";
     				 }
   				  } 
   			    ?>
    	    </figure>
        </div><!-- end left column -->
        <div class="col-md-4">
          <h2><?php the_title(); ?></h2>
          <ul class="post-meta no-bullet">
      		<li class="author">
        	  <span class="wpt-avatar small">
          		<?php echo get_avatar(get_the_author_meta( 'ID'), 24); ?>
        	  </span>
        		by <?php the_author_posts_link(); ?>
      		</li>
      		<li class="date">&#124; Published <?php the_time( 'F j, Y'); ?></li>
    	  </ul>
    	  <?php the_content(); ?>
        <?php
			   wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'siboney' ),
				'after'  => '</div>',
			   ) );
		    ?>

        <nav class="navigation paging-navigation">
          <?php previous_post_link('<span class="page-numbers">%link</span>','&larr; Previous', true); ?>
          <?php next_post_link('<span class="page-numbers">%link</span>','Next &rarr;', true); ?>
        </nav>

        <hr>
        <?php
			  // If comments are open or we have at least one comment, load up the comment template.
			  if ( ! post_password_required() && (comments_open() || get_comments_number() ) ) :
				comments_template();
			  endif;
		    ?>

        </div><!-- end right column -->
    </div><!-- end row -->
</article>
