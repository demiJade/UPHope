<?php 
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<!-- <div class="bread-title-holder">
	<div class="bread-title-bg-image full-bg-breadimage-fixed"></div>
</div> -->

<!-- Container-->
<div class="container clearfix skt-blog-page" style="padding-top:0px;padding-bottom:0;">
	<div class="row-fluid">
		<!-- blog post -->
		<div class="fullblog clearfix">
			<div class="news_full_blog">
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
				<div class="inner_blog">
					<!--/skt_blog_top-->
					<div class="skt_blog_top">
					<div class="post" id="post-<?php the_ID(); ?>">
						<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
						<div class="featured-image-shadow-box">
							<?php the_post_thumbnail('blog-page-thumb'); ?>
						</div>
						<?php } ?>
					   </div>
					</div>
					<!--/skt_blog_top-->
					
					<!--/skt_blog_middle-->
					<div class="skt_blog_middle">
<!-- 						<h2 class="skt_blog_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 -->						<div class="blogtext">
							<?php the_content(); ?>
							<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages :','radiance-lite').'</strong>','after' => '</p>', __('number','radiance-lite'),)); ?>
						 </div>
					    <?php $author_url = get_author_posts_url(get_the_author_meta( 'ID' ));
							$author_nm = get_the_author_meta('display_name',$post->post_author);
						?>
					</div>
					<!--/skt_blog_middle-->	

					<!--/skt_blog_bottom-->
					<div class="skt_blog_bottom">
						<!--Post Details-->
						<!-- <div class="news-details clearfix">
							<div class="row-fluid">
								<p class="post-commentss col-md-6 col-sm-6 col-xs-12"><i class="fa fa-comments"></i> <span class="skt_blog_commt"><?php comments_popup_link('/ 0 Comment /  ', '/ 1 Comment /  ', '/ % Comments /  ') ; ?></span></p>
								<p class="post-admin col-md-6 col-sm-6 col-xs-12"><i class="fa fa-user"></i> <a href="<?php echo $author_url; ?>" style="text-transform:capitalize;"><?php echo $author_nm; ?></a></p>
								<?php if ( has_tag() || has_category() ) { ?>
								<div class="skt-info col-md-12 col-sm-12 col-xs-12">
									<?php if (has_category()) { ?><p class="category"><i class="fa fa-folder-open"></i> <?php the_category(', '); ?><?php } ?></p>
									<?php if(has_tag()){ the_tags('<p class="tags"><i class="fa fa-tag"></i> ',', ','</p>'); } else { echo '<p class="notags">'.__("No tags","radiance-lite").'</p>'; } ?>
								</div>
								<?php } ?>
							</div>
						</div> -->
						<!--/End Post Details-->
					</div>
					<!--/skt_blog_bottom-->
				</div>
				<?php endwhile; ?>
					<!-- Page Navigation Section starts -->
				<!-- 	<?php if(get_adjacent_post(false, '', true) || get_adjacent_post(false, '', false)){ ?>
					<div class="page-navigation clearfix">
						<div class="alignleft"><?php next_post_link('&larr; %link') ?></div>
						<div class="alignright"><?php previous_post_link('%link &rarr;') ?></div>
					</div>
					<?php } ?> -->
					<!-- \\Page Navigation Section ends -->
				
				<!-- <div class="author-comment-section clearfix"> -->
					<!-- About Author Box Starts -->
					<!-- 	<?php
							$author_id    = $post->post_author;
							$author_url   = get_author_posts_url(get_the_author_meta( 'ID' ));
							$author_name  = get_the_author_meta('display_name',$author_id);
							$author_email = get_the_author_meta('user_email',$author_id);
							$author_bio   = get_the_author_meta('description',$author_id);
						?> -->
						<!-- <div id="about_author_box">
							<h2 class="author_title"><?php _e('AUTHOR','radiance-lite'); ?></h2>
							<div class="author_cont_box row-fluid clearfix">
								<div class="author_cont_inner clearfix">
									<div class="author_avtar col-md-3 col-sm-3 col-xs-3">
										<?php echo get_avatar( $author_email, 175); ?>
									</div>
									<div class="author_content col-md-9 col-sm-9 col-xs-9">
										<div class="author_topsec clarfix">
											<a class="author_name" href="<?php echo $author_url; ?>"><?php echo $author_name; ?></a>
											<?php if($author_bio){ ?><div class="author_bio"><?php echo $author_bio; ?></div><?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					<!-- About Author Box Ends -->
					<!-- Post Comments Section --> 
					 <div class="news_comments">
						<?php //if ('open' == $post->comment_status){ ?><h2 class="black mb"><?php //_e('COMMENTS','radiance-lite'); ?></h2><?php //} ?>
<!-- 						<div class="comments-template"> -->
							<?php //comments_template(); ?> 
					<!-- 	</div> -->
					</div> 
					<!-- \\Post Comments Section -->
				</div>
					<?php else : ?>
					<h2><?php _e('Not Found','radiance-lite'); ?></h2>
					<?php endif; ?>		
					<!-- /end blog post -->	
			</div>
			<!-- #Sidebar// -->
			<div id="sidebar" class="col-md-3 col-sm-3 col-xs-12">
				<?php get_sidebar(); ?>
			</div>
			<!-- //#Sidebar -->
		</div>
	</div>
</div>
<!-- /Container--> 
<?php get_footer(); ?>