<?php 
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that other
* 'pages' on your WordPress site will use a different template.
*
*/
get_header(); ?>

<div class="skt-default-page"><div class="skt-page-overlay"></div>
	<!-- Container-->
	<div class="container post-wrap rpage_wrap">
		
		<div class="row-fluid">
			
			<div class="clearfix">

				<!-- #content// -->	
<?php if(have_posts()) : ?>
					
					<?php while(have_posts()) : the_post(); ?>
				<div id="content" class="col-md-9 col-sm-9 col-xs-12">

					<div class="post" id="post-<?php the_ID(); ?>">

						<div class="skepost innerpages clearfix">
								
							<?php the_content(); ?>

							<?php wp_link_pages( '<p><strong>'.__('Pages ','radiance-lite').': </strong>', '</p>', __('number','radiance-lite') ); ?>

						</div>

					</div>
					<!-- post -->
					
						<div class="clearfix"></div>
						<div class="comments-template">
							<?php comments_template( '', true ); ?>
						</div>

					<?php endwhile; ?>

						<?php else :  ?>

							<div class="post">

								<h2><?php _e('Page Does Not Exist','radiance-lite'); ?></h2>

							</div>

						<?php endif; ?>

						<div class="clearfix"></div>
						<?php edit_post_link('Edit', '', ''); ?>

					</div>

					<!-- \\#content -->



					<!-- #Sidebar// -->

					<div id="sidebar" class="col-md-3 col-sm-3 col-xs-12">

						<?php get_sidebar('page'); ?>

					</div>

					<!-- //#Sidebar --> 
			</div>
		</div>

	</div>
	<!-- /Container--> 
</div>
<?php get_footer(); ?>