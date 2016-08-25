<?php global $query_string; // required
/**
* The template for displaying institutions.
*
* Template Name: Contact Us
* 
* 
*
*/

if (is_user_logged_in() ){
	get_header('user');
}
else {
	get_header();
}?>

<div class="contact-us" style="background-image: url(<?php echo get_theme_mod('contact_us_background_img'); ?>)">

	<h3>CONTACT US</h3>
	<h2><?php echo get_theme_mod('contact_us_email','thehopeprojectupm@gmail.com'); ?></h2>
	<h2><?php echo get_theme_mod('contact_us_fb_link','fb.com/thehopeprojectupm'); ?></h2>
</div>