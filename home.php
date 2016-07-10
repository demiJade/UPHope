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
get_header(); ?>

<div class="main-wrapper-item">
	<?php if( get_theme_mod('radiance_lite_feature_box_sec', 'on') == 'on' ) { ?>
		<!-- FEATURED BOXES SECTION -->
		<?php get_template_part( 'includes/front', 'featured-boxes-section' ); ?>
	<?php } ?>
	<?php if( get_theme_mod('radiance_lite_first_landing_sec', 'on') == 'on' ) { ?>
		<!-- LANDING PAGE SECTION SECTION -->
		<?php get_template_part( 'includes/front', 'first-landing-section' ); ?>
	<?php } ?>
	<?php if( get_theme_mod('radiance_lite_second_landing_sec', 'on') == 'on' ) { ?>
		<!-- LANDING PAGE SECTION SECTION -->
		<?php get_template_part( 'includes/front', 'second-landing-section' ); ?>
	<?php } ?>
	<?php if( get_theme_mod('radiance_lite_third_landing_sec', 'on') == 'on' ) { ?>
		<!-- LANDING PAGE SECTION SECTION -->
		<?php get_template_part( 'includes/front', 'third-landing-section' ); ?>
	<?php } ?>

	<div class="skt-default-page"><div class="skt-page-overlay"></div>
		<!-- Container-->
		<div class="container post-wrap rpage_wrap">
			<div class="row-fluid">
				<div class="title"><h2><?php echo esc_attr( get_theme_mod('radiance_lite_blogpage_heading', __('Blog', 'radiance-lite') ) ); ?></h2><span class="horizontal-style"></span></div>
			<?php if(have_posts()) : ?>
				<div class="blog_wrapper clearfix skt_animate_when_almost_visible skt_bottom-to-top front-blog-margin skt_start_animation">
				<?php while(have_posts()) : the_post(); ?>
					<div class="front-team-wrapper col-md-6 col-sm-6 col-xs-12">
						<div class="news_blog">
							<!-- skt_blog_middle-->
							<div class="skt_blog_middle">
								<h2 class="skt_blog_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="blogtext">
									<?php $post_content = get_the_excerpt();
									echo radiance_lite_limit_words($post_content, 28);
									?>
								</div>
								<a class="btn_readmore" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php _e('readmore','radiance-lite'); ?></a>
				    		</div>
							<!--/skt_blog_middle-->	

							<!-- skt_blog_bottom-->
							<div class="skt_blog_bottom">
								<!-- Post Details-->
								<div class="news-details clearfix">
									<p class="post-admin front-post-admin col-md-6 col-sm-6 col-xs-12"><?php _e('by : ','radiance-lite'); ?><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" style="text-transform:capitalize;"><?php echo get_the_author_meta('display_name',$post->post_author); ?></a></p>
									<p class="post-commentss front-post-commentss col-md-6 col-sm-6 col-xs-12"><span class="skt_blog_commt"><i class="fa fa-comments-o"></i> <?php comments_popup_link('No Comments ', '1 Comment ', '% Comments ') ; ?></span></p>
								</div>
								<!-- /Post Details-->
							</div>
							<!--/skt_blog_bottom-->
						</div>
					</div>
					<?php endwhile; ?>
					<div class="clearfix"></div>
					<div class="navigation blog-navigation">			
						<div class="alignleft"><?php previous_posts_link( '&larr; '.__('Previous','radiance-lite') ); ?></div>		
						<div class="alignright"><?php next_posts_link( __('Next ','radiance-lite').'&rarr;',''); ?></div>    				
					</div>
				</div>
			<?php endif; ?>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>