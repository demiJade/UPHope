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
	wp_register_style('bootstrapCSS',get_template_directory_uri() . 'css/bootstrap.min.css');
	wp_register_style('quicksand', 'https://fonts.googleapis.com/css?family=Quicksand');
	wp_enqueue_style( 'style' );
	wp_enqueue_style('bootstrapCSS');
	wp_enqueue_style('quicksand');
}
add_action( 'wp_enqueue_scripts', 'add_stylesheet' );

function add_scripts(){
	wp_register_script('angularJS',get_stylesheet_directory_uri() . '/js/angular.min.js');
	wp_register_script('appJS',get_stylesheet_directory_uri() . '/js/app.js');
	wp_register_script('bootstrapJS',get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('angularJS');

	wp_enqueue_script('appJS');
	wp_enqueue_script('bootstrapJS');
}

add_action('wp_enqueue_scripts','add_scripts');


add_image_size('modal-photo', 300, 300, true);
add_image_size('institution-thumbnail', 300, 300, true);
add_image_size('sponsor-thumbnail', 150, 150, true);


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
add_action('wp_ajax_delete_user', 'delete_user_ajax');
function delete_user_ajax(){
	$user_id = $_POST['id'];
	wp_delete_user($user_id);
	die();
}

add_action('wp_ajax_update_user', 'update_user_ajax');
function update_user_ajax(){
	$user_name = $_POST['user'];
	$project_involvement = $_POST['project_involvement'];
	$hospital_visits = $_POST['hospital_visits'];
	$formations_seminar = $_POST['formations_seminar'];
	$child_life_party = $_POST['child_life_party'];
	$email = $_POST['email'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$user = get_user_by('login', $user_name);
	if ($user == false){
		wp_create_user($user_name, '12341234', $email);
		$new_user = get_uesr_by('login', $user_name);
		update_user_meta('user_firstname', $first_name);
		update_user_meta('user_lastname', $last_name);

	} else {
		if (get_user_meta($user->ID, 'project_involvement', true) == ''){
			add_user_meta($user->ID, 'project_involvement', $project_involvement, true);
		} else {
			update_user_meta($user->ID, 'project_involvement', $project_involvement);
		}
		if (get_user_meta($user->ID, 'hospital_visits', true) == ''){
			add_user_meta($user->ID, 'hospital_visits', $hospital_visits, true);
		} else {
			update_user_meta($user->ID, 'hospital_visits', $hospital_visits);
		}
		if (get_user_meta($user->ID, 'formations_seminar', true) == ''){
			add_user_meta($user->ID, 'formations_seminar', $formations_seminar, true);
		} else {
			update_user_meta($user->ID, 'formations_seminar', $formations_seminar);
		}
		if (get_user_meta($user->ID, 'child_life_party', true) == ''){
			add_user_meta($user->ID, 'child_life_party', $child_life_party, true);
		} else {
			update_user_meta($user->ID, 'child_life_party', $child_life_party);
		}
	}
	die();
}
?>