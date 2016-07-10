<!-- PAGE EDITER CONTENT -->
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<?php if( get_the_content() != '' ) { ?>
			<div id="front-content-box" class="skt-section">
				<div class="container">
					<div class="post">
						<div class="skepost clearfix">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	<?php endwhile; ?>
<?php endif; ?>