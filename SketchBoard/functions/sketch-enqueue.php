<?php
/***********************************************
*  ENQUQUE CSS AND JAVASCRIPT
************************************************/
function radiance_lite_theme_stylesheet()
{
	global $is_IE;
	$theme = wp_get_theme();
	
	wp_enqueue_script('radiance-custom-js', get_template_directory_uri() .'/js/custom.js',array('jquery'),'1.0',1 );
	wp_enqueue_script('comment-reply');
	wp_enqueue_script('hoverIntent');
	wp_enqueue_script('radiance-superfish', get_template_directory_uri().'/js/superfish.js',array('jquery'),true,'1.0');
	wp_enqueue_script('radiance-AnimatedHeader', get_template_directory_uri().'/js/cbpAnimatedHeader.js',array('jquery'),true,'1.0');
	wp_enqueue_script('radiance-easing_slide',get_template_directory_uri().'/js/jquery.easing.1.3.js',array('jquery'),'1.0',true);
	wp_enqueue_script('radiance-waypoints',get_template_directory_uri().'/js/waypoints.min.js',array('jquery'),'1.0',true );
	
	wp_enqueue_style('radiance-style', get_stylesheet_uri());
	wp_enqueue_style('radiance-animation-stylesheet', get_template_directory_uri().'/css/skt-animation.css', false, $theme->Version);
	wp_enqueue_style('radiance-awesome-theme-stylesheet', get_template_directory_uri().'/css/font-awesome.css', false, $theme->Version);
	
	/*SUPERFISH*/
	wp_enqueue_style('radiance-ddsmoothmenu-superfish-stylesheet', get_template_directory_uri().'/css/superfish.css', false, $theme->Version);
	wp_enqueue_style('radiance-bootstrap-responsive-theme-stylesheet', get_template_directory_uri().'/css/bootstrap-responsive.css', false, $theme->Version);
	
	/*GOOGLE FONTS*/
	wp_enqueue_style( 'google-opensans-font','//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic', false, $theme->Version);
	wp_enqueue_style( 'google-montserrat-font','//fonts.googleapis.com/css?family=Montserrat:400,700|Montserrat+Subrayada:400,700', false, $theme->Version);
	
	/* ENQUEUE STYLE FOR IE BROWSER */
	if($is_IE ) {
		wp_enqueue_style('radiance-ie-style', get_template_directory_uri().'/css/ie-style.css', false, $theme->Version  );
		wp_enqueue_style('radiance-awesome-theme-stylesheet', get_template_directory_uri().'/css/font-awesome-ie7.css', false, $theme->Version );
	}

}
add_action('wp_enqueue_scripts', 'radiance_lite_theme_stylesheet');

function radiance_lite_head() {

	require_once( get_template_directory().'/includes/radiance-custom-css.php' );
 
}
add_action('wp_head', 'radiance_lite_head');