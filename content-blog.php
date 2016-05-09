<?php
/**
 * The template used for displaying blog listings in blog listing page
 * Code based on http://www.wpbeginner.com/wp-themes/how-to-create-a-grid-display-of-post-thumbnails-in-wordpress-themes/
 * @package siboney
 */
?>

<?php
  $counter = 1; //start counter
  $grids = 2; //Grids per row

  global $paged; //Need this to make pagination work

  $args = array(
    'paged' => $paged,
    'post_type'     => 'post',
    'category_name' => 'Blog Post'
  );
  $wp_query = new WP_Query( $args );
?>

<div class="row"> 

<?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

<?php
//Show the left hand side column
if($counter == 1) :
?>
  <div class="col-md-6 post">    
    <figure class="post-img-sm">
      <?php the_post_thumbnail( 'full' ); ?>
    </figure>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <ul class="post-meta by-line">
      <li class="author">
        <span class="wpt-avatar small">
          <?php echo get_avatar(get_the_author_meta( 'ID'), 24); ?>
        </span>
        by <?php the_author_posts_link(); ?>
      </li>
      <li class="date">&#124; Published <?php the_time( 'F j, Y'); ?></li>
    </ul>
    <?php echo strip_tags(get_the_excerpt()); ?>
    <p class="read-more"><a href="<?php the_permalink(); ?>">Read more</a></p>
  </div>
<?php
//Show the right hand side column
elseif($counter == $grids) :
?>
  <div class="col-md-6 post">    
    <figure class="post-img-sm">
      <?php the_post_thumbnail( 'full' ); ?>
    </figure>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <ul class="post-meta by-line">
      <li class="author">
        <span class="wpt-avatar small">
          <?php echo get_avatar(get_the_author_meta( 'ID'), 24); ?>
        </span>
        by <?php the_author_posts_link(); ?>
      </li>
      <li class="date">&#124; Published <?php the_time( 'F j, Y'); ?></li>
    </ul>
    <?php echo strip_tags(get_the_excerpt()); ?>
    <p class="read-more"><a href="<?php the_permalink(); ?>">Read more</a></p>
  </div>
<?php
$counter = 0;
endif;
?>
<?php
$counter++;
endwhile;?>

<?php siboney_paging_nav(); ?>

<?php endif;
?>
</div>
