<?php
/**
 * @package siboney
 */
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
    	  <?php echo strip_tags(get_the_excerpt()); ?>
        <p class="read-more"><a href="<?php the_permalink(); ?>">Read more</a></p>
    </article>
