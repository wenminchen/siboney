<?php
/**
 * The template for displaying the blog listing page.
 *
 *
 * @package siboney
 */
get_header(); ?>

    <section id="main-gray">
      <div class="container">
        <article class="blog">
          <div class="row">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <h2><?php echo strip_tags(get_the_excerpt()); ?></h2>
            <ul class="post-meta no-bullet">
              <li class="author">
                <span class="wpt-avatar small">
                  <?php echo get_avatar(get_the_author_meta( 'ID'), 24); ?>
                </span>
                by <?php the_author_posts_link(); ?>
              </li>
              <li class="cat">in <?php the_category( ' ' ); ?></li>
              <li class="date">in <?php the_time( 'F j, Y'); ?></li>
              </ul>
              <?php if( get_the_post_thumbnail() ) : ?>
              <div class="img-container">
                <?php the_post_thumbnail( 'large' ); ?>
              </div>
            <?php endif; ?>

    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no page found.' ); ?></p>
    <?php endif; ?>
    </div>
      </div>


<?php get_footer(); ?>
