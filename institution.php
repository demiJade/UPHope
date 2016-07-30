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
// change category id to the category of institution
$category_id = get_cat_ID('Institutions');
$category_link = get_category_link($category_id);
$category_query_string = 'cat=' .$category_id;
$posts = query_posts($category_query_string); ?>
<div class="container">
	<div class="row">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php  ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

        <?php endif; ?>
			<div class="col-md-4">
				<div class="institution" data-toggle="modal" data-target="#post<?php echo get_the_ID();  ?>" style="background-image: url('<?php echo $image[0] ; ?>')">
					<a class="box-title"><?php echo get_the_title(); ?></a>
				</div>
				<div class="modal fade" id="post<?php echo get_the_ID();  ?>" tabindex="-1" role="dialog" aria-labelledby="postLabel">
					<div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
						    <div class="modal-body">
						    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <div class="row">
						        	<div class="col-md-4">
						        		<?php the_post_thumbnail('modal-photo'); ?>
						        		<h2><?php echo get_the_title(); ?></h2>
						        		<p>Contact Number: <span><?php echo get_post_meta($post->ID, "Contact Number", true); ?></span></p>
						        	</div>
						        	<div class="col-md-8">
						        		<?php echo get_the_content(); ?>
						        	</div>
						        </div>
						       
						        
						        
						    </div>
<!-- 						    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						    </div> -->
					    </div>
					</div>
				</div>
			</div>
			<?php endwhile; else : ?>
			
			<?php endif; ?>
		
		
	</div>
</div>



