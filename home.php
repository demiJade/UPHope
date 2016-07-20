<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
			</div>
		</div>
	</div>
<?php 
}
else {


	
	get_header();
	get_template_part('home-front');
}
 ?> 



<?php get_footer(); ?>