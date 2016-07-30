<?php global $query_string; // required
/**
* The template for displaying institutions.
*
* Template Name: Sign Ups
* 
* 
*
*/
if (is_user_logged_in() ){ ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 side">
				<?php get_template_part('usersidebar'); ?>
			</div>
			<div class="col-md-9 main">
				<?php get_header('user'); ?>
				<?php get_template_part('home-user'); ?>
				<h4>SIGN UPS</h4>
			</div>
		</div>
	</div>
<?php }
else {
	get_header();
}
// change category id to the category of institution
$category_id = get_cat_ID('Projects');
$category_link = get_category_link($category_id);
$category_query_string = 'cat=' .$category_id;
$posts = query_posts($category_query_string); ?>

