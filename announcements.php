<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h1 class="text-center">Announcements</h1>
		</div>
	</div>
	<div class="row text-center">
		<div id="announcements">
			<?php $category_id = get_cat_ID('Announcements'); ?>
			<?php $posts = query_posts($query_string.'&cat='.$category_id); ?>  
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- 		<?php if (has_post_thumbnail( $post->ID ) ): ?>
		            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		        <?php endif; ?>
		 -->			
		 		<div class="announcement-item row">
		 			<a href="<?php the_permalink(); ?>">
		 				<h3 class="announcement-title"><?php echo get_the_title(); ?></h3>
		 			</a>
		 		</div>

						

					<?php endwhile; else : ?>
					
					<?php endif; ?>
		</div>
	</div>
</div>

