<?php 
/**
* The template for displaying Search Results pages.
*
*/
get_header(); ?>
<?php global $radiance_lite_shortname; ?>
<div class="main-wrapper-item">
	<div class="container clearfix skt-blog-page" style="padding-top:0px;padding-bottom:0;">
		<div class="row-fluid">
			<!-- blog post -->
			<div class="fullblog clearfix">
				<div class="news_full_blog col-md-9 col-sm-9 col-xs-12">
					<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<?php if(is_sticky($post->ID)) { _e("<div class='sticky-post'>featured</div>",'radiance-lite'); } ?>
							<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endwhile; ?>
						<div class="navigation blog-navigation">			
							<div class="alignleft"><?php previous_posts_link(__('&larr;Previous','radiance-lite')) ?></div>		
							<div class="alignright"><?php next_posts_link(__('Next&rarr;','radiance-lite')) ?></div>    				
						</div>  
					<?php else :  ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
				
				<!-- #Sidebar// -->
				<div id="sidebar" class="col-md-3 col-sm-3 col-xs-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>