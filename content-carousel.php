<?php
/**
 * The template used for displaying home page carousel in front-page.php
 * The code was helped by the following posts: 
 * www.lanexa.net/2012/04/how-to-make-bootstrap-carousel-display-wordpress-dynamic-content/
 * www.lanexa.net/2013/03/update-bootstrap-carousel-wordpress-dynamic-content/
 *
 * @package siboney
 */
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php 
      $number = 0; 
      $the_query = new WP_Query(array(
        'category_name' => 'Home Slider'
      )); 
     while ( $the_query->have_posts() ) : 
     $the_query->the_post();
    ?>
    <li data-target="#myCarousel" data-slide-to="<?php echo $number++; ?>"></li>
    <?php 
     endwhile; 
     wp_reset_postdata();
    ?>
  </ol>
  <!-- carousel items -->
  <div class="carousel-inner">

    <?php 
     $the_query = new WP_Query(array(
      'category_name' => 'Home Slider'
      )); 
     while ( $the_query->have_posts() ) : 
     $the_query->the_post();
    ?>
    <div class="item">
      <?php the_post_thumbnail('full');?>
      <div class="container">
        <div class="carousel-caption">
         <h4><?php the_title();?></h4>
         <p><?php the_excerpt();?></p>
        </div>
      </div>
   </div><!-- item -->
  <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
  </div><!-- carousel-inner -->
 
  <!-- Carousel nav -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  <span class="control-prev"><i class="fa fa-chevron-circle-left fa-2x"></i></span></a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
  <span class="control-next"><i class="fa fa-chevron-circle-right fa-2x"></i></span>

</div><!-- #myCarousel -->
