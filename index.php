<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
if (is_user_logged_in() ){
	get_header('user');
}
else {
	get_header();
}
 ?>

<!-- Blog -->
<div id="search_temp" class="skt-serach-page"> 
	<div class="bread-title-holder">
		<div class="container clearfix">
			<div class="row-fluid">
				<div class="col-md-7 col-sm-7 col-xs-12">
					<h2 class="title"><?php echo esc_attr( get_theme_mod('radiance_lite_blogpage_heading', __('Blog', 'radiance-lite') ) ); ?></h2>
				</div>
				<div class="blog_breadcrumb col-md-5 col-sm-5 col-xs-12"></div>
			</div>
		</div>
	</div>
	
	<!-- Container-->
	<div class="container clearfix" style="padding-top:0px;padding-bottom:0;">
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
							<div class="alignleft"><?php previous_posts_link( '&larr; '.__('Previous','radiance-lite') ); ?></div>		
							<div class="alignright"><?php next_posts_link( __('Next ','radiance-lite').'&rarr;',''); ?></div>    				
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
	<!-- /Container--> 
</div>
<!--/Blog -->
<?php get_footer(); ?>