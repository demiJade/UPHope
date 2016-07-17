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
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <?php endif; ?>
			<div class="col-md-4">
				<div class="institution" data-toggle="modal" data-target="#post<?php echo get_the_ID();  ?>" style="background-image: url('<?php echo $image[0]; ?>')">
					<a class="box-title"><?php echo get_the_title(); ?></a>
				</div>
				<div class="modal fade" id="post<?php echo get_the_ID();  ?>" tabindex="-1" role="dialog" aria-labelledby="postLabel">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
						    <div class="modal-body">
						        <div class="row">
						        	<div class="col-md-4 institution-thumbnail" style="background-image: url('<?php echo $image[0]; ?>')">
						        	</div>
						        	<div class="col-md-8">
						        		<?php echo get_the_content(); ?>
						        	</div>
						        </div>
						        
						        
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



