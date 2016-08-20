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
				<h2 class="text-center">SIGN UPS</h4>
					<div class="project-wrapper">
						<div class="form-group project-form">
							<label class="select-label">project name</label>
							<select class="form-control select" id="project-name" ng-model="project" name="post">
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<option value="<?php echo $post->ID ?>"><?php echo get_the_title(); ?></option>
								<?php endwhile; else : ?>
								<?php endif; ?>
								
							</select>

							
							
						</div>
						<div class="input-group project-form">
							<label>project date</label>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<span ng-if="project == <?php echo $post->ID ?>"><?php echo get_post_meta($post->ID, 'Project Date', true); ?></span>
								<?php endwhile; else : ?>
								<?php endif; ?>
								
						</div>
				
					
					<button class="btn btn-default sign-up-button" type="submit">Submit</button>
				
					</div>
						
					<?php $args = array(
						'type'                     => 'post',
						'child_of'                 => $category_id,
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => FALSE,
						'hierarchical'             => 1,
						'taxonomy'                 => 'category',
					) ?>
					<?php $child_categories = get_categories($args) ?>
					<?php foreach($child_categories as $child_category) {?>
					<div class="row">
						<?php $category_id = $child_category->term_id;
								$category_link = get_category_link($category_id);
								$category_query_string = 'cat=' .$category_id;
								$posts = query_posts($category_query_string); ?>
								<h3><?php if(have_posts()) {echo get_cat_name($category_id);} ?></h3>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="col-md-4">
								<div class="project-box">
									
									<span class="project-name"><?php echo get_the_title(); ?></span><br>
									<span class="slots">Slots left:</span><br>
									<span class="slot-number"><?php echo get_post_meta($post->ID, 'Slots', true) - get_post_meta($post->ID, 'Participants',true); ?></span>
								</div>
							</div>
						<?php endwhile; else : ?>
						<?php endif; ?>
						</div>
					<?php } ?>
				
				
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
	            location.reload();
	       }
	});
})
</script>

</body>


