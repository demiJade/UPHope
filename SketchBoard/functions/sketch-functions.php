<?php
/***************** EXCERPT LENGTH ************/
function radiance_lite_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'radiance_lite_excerpt_length');

/***************** READ MORE ****************/
function radiance_lite_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'radiance_lite_excerpt_more');

function radiance_lite_limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}

/************* CUSTOM PAGE TITLE ***********/
function radiance_lite_title($title)
{
	$radiance_lite_title = $title;
	if ( is_home() && !is_front_page() ) {
		$radiance_lite_title .= get_bloginfo('name');
	}
	if ( is_front_page() ){
		$radiance_lite_title .=  get_bloginfo('name');
		$radiance_lite_title .= ' | '; 
		$radiance_lite_title .= get_bloginfo('description');
	}
	if ( is_search() ) {
		$radiance_lite_title .=  get_bloginfo('name');
	}
	if ( is_author() ) { 
		global $wp_query;
		$curauth = $wp_query->get_queried_object();	
		$radiance_lite_title .= __('Author: ','radiance-lite');
		$radiance_lite_title .= $curauth->display_name;
		$radiance_lite_title .= ' | ';
		$radiance_lite_title .= get_bloginfo('name');
	}
	if ( is_single() ) {
		$radiance_lite_title .= get_bloginfo('name');
	}
	if ( is_page() && !is_front_page() ) {
		$radiance_lite_title .= get_bloginfo('name');
	}
	if ( is_category() ) {
		$radiance_lite_title .= get_bloginfo('name');
	}
	if ( is_year() ) { 
		$radiance_lite_title .= get_bloginfo('name');
	}
	if ( is_month() ) {
		$radiance_lite_title .= get_bloginfo('name');
	}
	if ( is_day() ) {
		$radiance_lite_title .= get_bloginfo('name');
	}
	if (function_exists('is_tag')) { 
		if ( is_tag() ) {
			$radiance_lite_title .= get_bloginfo('name');
		}
		if ( is_404() ) {
			$radiance_lite_title .= get_bloginfo('name');
		}					
	}
	return $radiance_lite_title;
}
add_filter( 'wp_title', 'radiance_lite_title' );

function radiance_lite_class_name($classes) {
	$classes[] = 'radiance-lite';
	return $classes;
}
add_filter('body_class','radiance_lite_class_name');