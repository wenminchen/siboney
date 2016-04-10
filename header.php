<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package siboney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<header id="header" class="header" role="banner">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only"><?php _e('Toggle navigation','siboney') ?> </span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
               <!--<img src="img/peaceful_yan.png" class="logo" alt="site logo">-->
               <?php if ( has_site_icon() ) : ?>
					<?php $site_icon = esc_url( get_site_icon_url( 75 ) ); ?>
					<img class="site-icon logo" src="<?php echo $site_icon; ?>" alt="site logo" >       
               <?php endif; ?>
               <span class="name"><?php bloginfo('name');?></span><br />
               <span class="tagline"><?php bloginfo( 'description' ); ?></span></a>
            </div><!-- end navbar-header-->

            <!-- The WordPress Menu goes here -->
			<?php wp_nav_menu(
				array(
					'theme_location' 	=> 'primary',
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'menu_class' 		=> 'nav navbar-nav navbar-right'
				)
			); ?>
        </div><!-- end container -->
    </nav><!-- end navbar-->
</header>

<section class="main">
	<div class="container">