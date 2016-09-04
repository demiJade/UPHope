<?php
/**
* The Header for logged-in user.
*/
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> ng-app="app">
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!--[if IE 9]>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
<![endif]-->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
<!-- 	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> -->
	<base href="/">
	<?php wp_head(); ?>
	<?php $home_url = home_url(); ?>
</head>
<body <?php body_class(); ?> >
	<!-- wrapper -->
	<div class="main">
		<div id="navbar">
			<!-- insert navbar -->
			<nav class="navbar navbar-default user-navbar">
			  
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="<?php echo $home_url ?>/#" class="nav-list-item"><?php _e('HOME', 'radiance-lite'); ?></a></li>
			        <li><a href="<?php echo $home_url ?>/announcements" class="nav-list-item"><?php _e('ANNOUNCEMENTS', 'radiance-lite'); ?></a></li>
			        <li><a href="<?php echo $home_url ?>/sign-ups" class="nav-list-item"><?php _e('SIGN UPS', 'radiance-lite'); ?></a></li>
			        <li><a href="<?php echo $home_url ?>/#" class="nav-list-item"><?php _e('|', 'radiance-lite'); ?></a></li>
			        <li><a href="<?php echo $home_url ?>/#" class="nav-list-item"><?php _e('WELCOME USER', 'radiance-lite'); ?></a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  
			</nav>
		</div>

	
		<!-- HEADER -->
		
