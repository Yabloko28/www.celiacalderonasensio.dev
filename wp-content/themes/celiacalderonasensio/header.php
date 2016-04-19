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
<a name="top"></a>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
	        <h1 class="site-title"><a href="#/" class="fashion-icon"><img src="http://nadyascreatures.com/images/name.png"></a></h1>
		</div>
		<div class="menu-icon"><img src="http://nadyascreatures.com/images/hamb-icon-menu.jpg"></div>
		<div class="sliding-menu">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a href="#/" class="fashion-icon"><img src="http://nadyascreatures.com/images/fashion-thin.jpg" class="thin"><img src="http://nadyascreatures.com/images/fashion-bold.jpg" class="bold"></a>
			<a href="#/other-projects" class="other-projects-icon"><img src="http://nadyascreatures.com/images/other-projects-thin.jpg" class="thin"><img src="http://nadyascreatures.com/images/other-projects-bold.jpg" class="bold"></a>
			<a href="#/about" class="about-cv-icon"><img src="http://nadyascreatures.com/images/about-cv-thin.jpg" class="thin"><img src="http://nadyascreatures.com/images/about-cv-bold.jpg" class="bold"></a>
		</nav><!-- #site-navigation -->
		<div class="contact-details" id="contact">
			<p class="email"><a href="mailto:asensiocelia@yahoo.es" target="_blank"><img src="http://nadyascreatures.com/images/email.jpg"></a></p>
			<p class="tel-number"><img src="http://nadyascreatures.com/images/tel-number.jpg"></p>
		</div>
		</div>
		<div class="line"><img src="http://nadyascreatures.com/images/line.jpg"></div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
