<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package siboney
 */

get_header(); ?>

	<section id="main-gray">
    <h2 class="screen-reader-text">Main content</h2>
    <div class="container">
      	<article class="blog">
	      	<header>
	      	<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
			?>
			</header><!-- .page-header -->

 			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	
	      	<article class="post">
	        	<div class="row">
	        		<div class="col-md-8">
			        	<figure class="post-img-sm">
			      			<?php the_post_thumbnail( 'full' ); ?>
			    		</figure>
	    			</div>
	    			<div class="col-md-4">
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
	   			</div>
		   	</article><!-- end article blog -->	 	
        	<?php endwhile; 
        	
        		siboney_paging_nav();

        		else :

				get_template_part( 'content', 'none' ); 
    		
    			endif; 
    		?>

      	</article><!-- end article -->

<?php get_footer(); ?>


