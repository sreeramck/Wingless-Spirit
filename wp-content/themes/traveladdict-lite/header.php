<?php
/**
 *	The header for our theme.
 *
 *	This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *	@link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 *	@package TravelAddict Lite
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'traveladdict-lite' ); ?></a>
		<header id="masthead" class="site-header clearfix" role="banner">
			<div class="branding-wrapper">
				<div class="container">
					<nav class="social-navigation clearfix">
						<?php wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'menu_class' => 'menu clearfix', 'fallback_cb' => false ) ); ?>
					</nav><!--/.social-navigation.clearfix-->

					<div class="site-branding">
			        <?php if ( get_theme_mod('site_logo', '') && get_theme_mod('logo_style', 'hide-title') == 'hide-title' ) : //Show only logo ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo', '')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" /></a>
			        <?php elseif ( get_theme_mod('logo_style', 'hide-title') == 'show-title' ) : //Show logo, site-title, site-description ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>"><img class="site-logo show-title" src="<?php echo esc_url(get_theme_mod('site_logo', '')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" /></a>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
			        <?php else : //Show only site title and description ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			        <?php endif; ?>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
					<nav class="mobile-nav"></nav>
				</div><!--/.container-->
			</div><!--/.branding-wrapper-->
		</header><!-- #masthead -->
		<?php amadeus_banner(); ?>
		<div id="content" class="site-content container">