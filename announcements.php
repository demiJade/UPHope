<h4>Announcements</h4>
<div class="container" id="announcements">
	<?php $posts = query_posts($query_string.'&cat=8'); ?>  
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- 		<?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <?php endif; ?>
 -->			
 		<div class="announcement-item">
 			<h6><?php echo get_the_title(); ?></h6>
 			<p><?php echo get_the_content(); ?></p>
 		</div>

				

			<?php endwhile; else : ?>
			
			<?php endif; ?>
</div>