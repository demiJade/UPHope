<?php global $query_string; // required
/**
* The template for displaying institutions.
*
* Template Name: Sign Ups
* 
* 
*
*/
$category_id = get_cat_ID('Projects');
$category_link = get_category_link($category_id);
$category_query_string = 'cat=' .$category_id;
$posts = query_posts($category_query_string); 
$home_url = home_url();


	
if (is_user_logged_in() ){ ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 side">
				<?php get_template_part('usersidebar'); ?>
			</div>
			<div class="col-md-9 main" ng-controller="Main">
				<?php get_header('user'); ?>
				<?php get_template_part('home-user'); ?>
				<h4>SIGN UPS</h4>
				
					<div class="input-group form-group">
						<label>project name</label>
						<select class="form-control" id="project-name" ng-model="project" name="post">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<option value="<?php echo $post->ID ?>"><?php echo get_the_title(); ?></option>
							<?php endwhile; else : ?>
							<?php endif; ?>
							
						</select>

						
						
					</div>
					<div class="input-group">
						<label>project date</label>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<span ng-if="project == <?php echo $post->ID ?>"><?php echo get_post_meta($post->ID, 'Project Date', true); ?></span>
							<?php endwhile; else : ?>
							<?php endif; ?>
							
					</div>
					<button class="btn btn-default" type="submit">Submit</button>
				<div class="row">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="col-md-4">
							<div class="institution">
								
								<a class="box-title"><?php echo get_the_title(); ?></a>
								<span><?php echo get_post_meta($post->ID, 'Slots', true); ?></span>
							</div>
						</div>
					<?php endwhile; else : ?>
					<?php endif; ?>
				</div>
				
			</div>
		</div>
	</div>
<?php }
else {
	get_header();
}
?>
<?php 


 ?>

<script>
jQuery('button[type=submit]').click(function(e) {
	e.preventDefault();
	var name = document.getElementById("project-name");
	var project_id = name.options[name.selectedIndex].value;
	jQuery.ajax({
	       type: "POST",
	       url: ajaxurl,
	       data: "action=signup&id="+project_id+"&user="+'<?php echo $current_user->user_firstname ?>' + " " + '<?php echo $current_user->user_lastname ?>',  
	       success: function(msg){
	            jQuery('.vehicle-value-box').html(msg+",00€");
	            alert("Updated");
	       }
	});
})
</script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/angular.min.js' ?>"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/app.js' ?>"></script></body>


