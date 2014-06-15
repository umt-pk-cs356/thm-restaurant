<!DOCTYPE HTML>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
  <title>Multicusine Restaurant | Home</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css"  media="all" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/slider.css" rel="stylesheet" type="text/css"  media="all" />
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script> 
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script> 
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/camera.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.lightbox.js"></script> 
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/lightbox.css" media="screen" />
	  <script type="text/javascript">
		  $(function() {
			$('.gallery a').lightBox();
		  });
	  </script>
	 <script type="text/javascript">
			   jQuery(function(){
				jQuery('#camera_wrap_1').camera({
					pagination: false,
				});
			});
	 </script>
	 <?php wp_head(); ?>
 </head>
  <body <?php body_class(); ?>>
	<!----start-header----->
	 <div class="header">
	     <div class="wrap">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" title="logo" /></a>
				</div>
				<div class="social-icons">
					<ul>
						<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" title="facebook" /></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" title="twitter" /></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/google.png" title="google pluse" /></a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			<!---start-top-nav---->
			<div class="top-nav">
				<div class="top-nav-left">
					<ul>
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="contact.html">Contact</a></li>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="top-nav-right" class="search-form" class="">
					<form role="search" method="get" class="search-form" action="http://localhost/ossd/">
						<?php get_search_form();?>
					</form>
				</div>
				<div class="clear"> </div>
			</div>
			<!---End-top-nav---->
		</div>
	</div>
   <!----End-header----->