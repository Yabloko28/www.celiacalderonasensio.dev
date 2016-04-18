<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package celiacalderonasensio
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'celiacalderonasensio' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			
	
				<h1 class="site-title"><img src="http://nadyascreatures.com/images/name.png"></h1>
	
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a href="#/"><img src="http://nadyascreatures.com/images/fashion-thin.jpg"><img src="http://nadyascreatures.com/images/fashion-bold.jpg"></a>
			<a href="#/other-projects"><img src="http://nadyascreatures.com/images/other-projects-thin.jpg"><img src="http://nadyascreatures.com/images/other-projects-bold.jpg"></a>
			<a href="#/about"><img src="http://nadyascreatures.com/images/about-cv-thin.jpg"><img src="http://nadyascreatures.com/images/about-cv-bold.jpg"></a>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
