<?php global $query_string; // required
/**
* The template for displaying institutions.
*
* Template Name: Institutions
* 
* 
*
*/

if (is_user_logged_in() ){
	get_header('user');
}
else {
	get_header();
}

$posts = query_posts($query_string.'&cat=6'); ?>
<div class="container">
	<div class="row">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-4">
				<div class="institution" data-toggle="modal" data-target="#post<?php echo get_the_ID();  ?>">
					<a class="box-title" href="" ><?php echo get_the_title(); ?></a>
				</div>
				<div class="modal fade" id="post<?php echo get_the_ID();  ?>" tabindex="-1" role="dialog" aria-labelledby="postLabel">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h4>Post</h4>
					      </div>
						      <div class="modal-body">
						        
						        	<?php echo get_the_content(); ?>
						        
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						      </div>
					    </div>
					</div>
				</div>
			</div>
			<?php endwhile; else : ?>
			
			<?php endif; ?>
		
		
	</div>
</div>



