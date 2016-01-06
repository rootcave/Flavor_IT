<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flavor_IT
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--Bootstrap core css-->
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/animate.min.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.transitions.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/responsive.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/timeline.css" rel="stylesheet">
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/mousescroll.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/smoothscroll.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery.prettyPhoto.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery.isotope.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery.inview.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/wow.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/main.js"></script>
	<?php wp_head(); ?>
</head>

<header id="header">
	<nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/logo.png" alt="logo"></a>
			</div>
			<?php
			wp_nav_menu(array(
							'theme_location'=> 'primary',
							'container'=> 'nav',
							'container-class'=> 'navbar-collapse collapse',
							'menu-class'=> 'nav navbar-nav navbar-right'
					)
			)
			?>
			<div class="collapse navbar-collapse navbar-right">
				<ul class="nav navbar-nav">
					<li class="scroll active"><a href="#home">Home</a></li>
					<li class="scroll"><a href="#about">About</a></li>
					<li class="scroll"><a href="#meet-team">Team</a></li>
					<li class="scroll"><a href="#services">Services</a></li>
					<li class="scroll"><a href="#portfolio">Solutions</a></li>
					<li class="scroll"><a href="#clients">Clients</a></li>


					<li class="scroll"><a href="#partners">Partners</a></li>

					<li class="scroll"><a href="#get-in-touch">Contact</a></li>
				</ul>
			</div>
		</div><!--/.container-->
	</nav><!--/nav-->
</header><!--/header-->
