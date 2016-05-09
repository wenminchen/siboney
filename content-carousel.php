<?php
/**
 * The template used for displaying home page carousel in front-page.php
 *
 * @package siboney
 */
?>

<?php
  $args = array(
    'post_type'     => 'post',
    'category_name' => 'Home Slider'
  );
  $the_query = new WP_Query( $args );
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    
    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>     
      <li data-target="#myCarousel" data-slide-to="<?php echo $the_query->current_post; ?>" 
        class="<?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>"></li>
    <?php endwhile; endif; ?>
  
  </ol>
  
  <?php rewind_posts(); ?>
  
  <div class="carousel-inner" role="listbox">
    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <div class="item <?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>">

        <?php
          $thumbnail_id = get_post_thumbnail_id(); 
          $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
          $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);                
        ?>

        <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"></a>
        <div class="carousel-caption">
          <h4><?php the_title();?></h4>
         <p><?php the_excerpt();?></p>
        </div>
      </div>
            
    <?php endwhile; endif; ?>

  </div> 

  <!-- Carousel nav -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  <span class="control-prev"><i class="fa fa-chevron-circle-left fa-2x"></i></span></a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
  <span class="control-next"><i class="fa fa-chevron-circle-right fa-2x"></i></span>

</div><!-- #myCarousel -->
