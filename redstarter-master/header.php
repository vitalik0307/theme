<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	</head>


	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<!-- <p class="site-description"><?php bloginfo( 'description' ); ?></p> -->
				</div><!-- .site-branding -->
		
			<?php if ( is_front_page() ) : ?>
   				<div id="home-banner" class="my-awesome-header">
   					<img id="home-banner-img" <?php  the_post_thumbnail("full"); ?> 
					<nav id="home-site-navigation" class="<?php echo $class ?> clearfix" role="navigation">
					<a href="<?php get_permalink() ?>"> <img class="navigation-logo" alt="Navigation Logo" src="<?php echo get_bloginfo("stylesheet_directory")?>/images/logos/inhabitent-logo-tent-white.svg"> </a>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> <?php esc_html( 'Primary Menu' ); ?> </button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav> <!-- #site-navigation -->
				</div> <!--End of banner-->	
		

			<?php elseif (is_singular("adventure")) : ?>
				<div id="sing-banner" class="my-awesome-header">
   					<img id="sing-banner-img" <?php  the_post_thumbnail("full"); ?> 
					<nav id="sing-site-navigation" class="<?php echo $class ?> clearfix" role="navigation">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img class="navigation-logo" alt="Navigation Logo" src="<?php echo get_bloginfo("stylesheet_directory")?>/images/logos/inhabitent-logo-tent-white.svg"></a>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav> <!-- #site-navigation -->
				</div> <!--End of banner-->

			<?php elseif (is_page("about")) : ?>
				<div id="about-banner" class="my-awesome-header">
   					<img id="about-banner-img" <?php  the_post_thumbnail("full"); ?> 
					<nav id="about-site-navigation" class="<?php echo $class ?> clearfix" role="navigation">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img class="navigation-logo" alt="Navigation Logo" src="<?php echo get_bloginfo("stylesheet_directory")?>/images/logos/inhabitent-logo-tent-white.svg"></a>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav> <!-- #site-navigation -->
				</div> <!--End of banner-->
				<?php ?>	

			<?php else : ?>
				<div id="banner" class="my-awesome-header">
					<!-- <img id="banner-img">-->					   															<nav id="site-navigation" class="<?php echo $class ?> clearfix" role="navigation">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img class="navigation-logo" alt="Navigation Logo" src="<?php echo get_bloginfo("stylesheet_directory")?>/images/logos/inhabitent-logo-tent.svg"></a>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav> <!-- #site-navigation -->
				</div> <!--End of banner-->	
			<?php endif ?>	

			</header> <!-- #masthead -->

			<div id="content" class="site-content">
