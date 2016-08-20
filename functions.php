<?php
/**
 * Advertica functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 */
/**
 * Registers widget areas.
 *
 */
function radiance_lite_widgets_init() {
	register_sidebar(array(
		'name' => __('Page Sidebar', 'radiance-lite' ),
		'id' => 'page-sidebar', 
		'before_widget' => '<li id="%1$s" class="ske-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="ske-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Blog Sidebar', 'radiance-lite' ),
		'id' => 'blog-sidebar',
		'before_widget' => '<li id="%1$s" class="ske-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="ske-title">',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'radiance_lite_widgets_init' );

/**
 * Sets up theme defaults and registers the various WordPress features that
 * Advertica supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add Visual Editor stylesheets.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
*/
function radiance_lite_theme_setup() {
	/*
	 * Makes Advertica available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Thirteen, use a find and
	 * replace to change 'radiance-lite' to the name of your theme in all
	 * template files.
	 */
	 load_theme_textdomain( 'radiance-lite', get_template_directory() . '/languages' );
	 
	// This theme styles the visual editor with editor-style.css to match the theme style.
	 add_editor_style();

	add_theme_support( 'title-tag' );

	// This theme allows users to set a custom header.
	add_theme_support( 'custom-header', array( 'flex-width' => true, 'width' => 1600, 'flex-height' => true, 'height' => 750, 'default-image' => get_template_directory_uri() . '/images/header.png') );

	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'radiance_lite_custom_background_args', array('default-color' => 'ffffff') ) );
	
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support('post-thumbnails');

	/**
	 * Enable support for Post Formats
	 */
	add_image_size( 'blog-page-thumb', 825, 320, true); //standard size
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'Header' => __( 'Main Navigation', 'radiance-lite' ),
	));

	/**
	 * SETS UP THE CONTENT WIDTH VALUE BASED ON THE THEME'S DESIGN.
	 */
	if ( ! isset( $content_width ) ){
	    $content_width = 900;
	}
}
add_action( 'after_setup_theme', 'radiance_lite_theme_setup' ); 

/**
* Funtion to add CSS class to body
*/
function radiance_lite_add_class( $classes ) {

	if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && is_front_page() ) {
		$classes[] = 'front-page';
	}
	
	return $classes;
}
add_filter( 'body_class','radiance_lite_add_class' );

/**
 * Filter content with empty post title
 *
 */

add_filter('the_title', 'radiance_lite_untitled');
function radiance_lite_untitled($title) {
	if ($title == '') {
		return __('Untitled','radiance-lite');
	} else {
		return $title;
	}
}

/**
 * Add Customizer 
 */
require get_template_directory() . '/includes/customizer.php';
/**
 * Add Customizer 
 */
require_once(get_template_directory() . '/SketchBoard/functions/admin-init.php');


function add_stylesheet() {
wp_register_style('style',get_template_directory_uri() . '/style.css');
wp_enqueue_style( 'style' );
}
add_action( 'wp_enqueue_scripts', 'add_stylesheet' );

function add_angular(){
	wp_register_script('angularJS',get_stylesheet_directory_uri() . '/js/angular.min.js');
	wp_register_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
	wp_register_script('appJS',get_stylesheet_directory_uri() . '/js/app.js');
	wp_register_script('bootstrap',get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('angularJS');
	wp_enqueue_script('jquery');
	wp_enqueue_script('appJS');
	wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts','add_angular');


add_image_size('modal-photo', 300, 300, false);
add_image_size('institution-thumbnail', 300, 300, false);
add_image_size('sponsor-thumbnail', 150, 150, true);


// show admin bar only for admins and editors
if (!current_user_can('edit_posts')) {
	add_filter('show_admin_bar', '__return_false');
}


if ($_POST["post"]) {
		update_post_meta($_POST["post"], 'Project Date', 'September 20, 2016');
		exit();
	}

//Renames events to projects
add_filter( 'tribe_event_label_singular', 'event_display_name' );
function event_display_name() {
	return 'Project';
}
add_filter( 'tribe_event_label_singular_lowercase', 'event_display_name_lowercase' );
function event_display_name_lowercase() {
	return 'project';
}
// Plural
add_filter( 'tribe_event_label_plural', 'event_display_name_plural' );
function event_display_name_plural() {
	return 'Projects';
}
add_filter( 'tribe_event_label_plural_lowercase', 'event_display_name_plural_lowercase' );
function event_display_name_plural_lowercase() {
	return 'projects';
}

/**
* Move RSVP Tickets form in events template
*/
if (class_exists('Tribe__Tickets__RSVP')) {

/* Remove the form from the current location */
remove_action( 'tribe_events_single_event_after_the_meta', array( Tribe__Tickets__RSVP::get_instance(), 'front_end_tickets_form' ), 5 );

/* Place the form in the new location */
/* possible options: 'tribe_events_single_event_before_the_content', 'tribe_events_single_event_after_the_content' & 'tribe_events_single_event_before_the_meta' */
add_action( 'tribe_events_single_event_before_the_meta', array( Tribe__Tickets__RSVP::get_instance(), 'front_end_tickets_form' ), 5 );
}

// function add_participant(){
// 	if ($_POST){
// 	update_post_meta(149, 'Project Date', 'September 30, 2016');
// 	}
// }



// add_action('admin_init','add_participant');

// function enqueue_scripts_styles_init(){

// 	// embed the javascript file that makes the AJAX request
// 	wp_enqueue_script( 'my-ajax-request', get_stylesheet_directory_uri(). '/js/ajax.js');
	 
// 	// declare the URL to the file that handles the AJAX request (wp-admin/admin-ajax.php)
// 	wp_localize_script( 'my-ajax-request', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

// }


// add_action('init', 'enqueue_scripts_styles_init');

// function sign_up(){
// 	update_post_meta(154, 'Project Date', 'September 30, 2016');
// 	die();
// }
// do_action("wp_ajax_sign_up", "sign_up");

add_action('wp_head','my_ajaxurl');
function my_ajaxurl() {
$html = '<script type="text/javascript">';
$html .= 'var ajaxurl = "' . admin_url( 'admin-ajax.php' ) . '"';
$html .= '</script>';
echo $html;
}

add_action('wp_ajax_signup', 'signup_ajax');
function signup_ajax() {
    $post_id = $_POST['id'];
    $user = $_POST['user'];
    $fields = get_post_custom($post_id);
    $user_exists = false;
    foreach($fields as $key => $value){
    	if ($value[0] == $user) {
    		$user_exists = true;
    	}
    }
    if ($user_exists == false) {
    	$participant_number = get_post_meta($post_id, 'Participants', true);
	    if ($participant_number != "") {
	    	$participant_number = $participant_number + 1;
	    	update_post_meta($post_id, 'Participants', $participant_number);
	    } else {
	    	$participant_number = 1;
	    	add_post_meta($post_id, 'Participants', $participant_number);
	    }
	    
	    add_post_meta($post_id,'Participant'.$participant_number,$user,true);
    }
    
    die();
}
?>