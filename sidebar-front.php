<?php
/**
 * The sidebar containing the main widget area
 *
 * @package siboney
 */
?>

	<div class="sidebar-featured clearfix">

		<?php do_action( 'before_sidebar' ); ?>
		<?php if( !dynamic_sidebar( 'front' ) ) : ?>

        	<h2 class="module-heading">Sidebar Setup</h2>
        	<p>Please install widgets via admin area</p>

        <?php endif; ?>

	</div><!-- close .sidebar-featured -->
