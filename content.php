<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
*/

?>
<div <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">

	<div class="inner_blog">
		<?php
			if(has_post_thumbnail()){
				$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'blog-page-thumb');
			}else{
				$thumbnail = 0;
			}
		?>

		<!--/skt_blog_top-->
		<div class="skt_blog_top">
			<?php if($thumbnail){ ?>
			<div class="skt_blog_thumbnail">
				<img src="<?php echo $thumbnail[0]; ?>">
				<div class="blog-meta">
					<span class="skt-date"><?php $radiance_lite_date = get_the_time('j'); echo esc_attr($radiance_lite_date); ?></span>
					<span class="month"><?php $radiance_lite_month = get_the_time('F'); echo esc_attr($radiance_lite_month); ?></span>
				</div>
			</div>
			<?php } ?>								
		</div>
		<!--/skt_blog_top-->

		<!--/skt_blog_middle-->
		<div class="skt_blog_middle">
			<h2 class="skt_blog_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="blogtext">
				<?php
			 		$post_content = get_the_excerpt();
			 		echo $post_content;
			  	?>
			 </div>
			<a class="btn_readmore" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php _e('readmore','radiance-lite'); ?></a>

		    <?php 
				$author_url    = get_author_posts_url(get_the_author_meta( 'ID' ));
				$author_nm     = get_the_author_meta('display_name',$post->post_author);
			?>
		</div>
		<!--/skt_blog_middle-->	

		<!--/skt_blog_bottom-->
		<div class="skt_blog_bottom clearfix">
			<!--Post Details-->
			<div class="news-details clearfix">
				<div class="row-fluid">
					<div class="skt-info col-md-9 col-sm-9 col-xs-12">
						<?php if(has_tag()){ the_tags('<span class="tags"><i class="fa fa-tag"></i> ',', ','</span>'); } else { echo '<span class="notags">'.__("No tags","radiance-lite").'</span>';} ?>
						<p class="post-commentss"><i class="fa fa-comments-o"></i> <span class="skt_blog_commt"><?php comments_popup_link('/ 0 Comment /  ', '/ 1 Comment /  ', '/ % Comments /  ') ; ?></span></p>
						<span class="blog-post-like"><?php if(function_exists('like_counter_p')) { like_counter_p(); } ?></span>
					</div>
					<p class="post-admin col-md-3 col-sm-3 col-xs-12"><i class="fa fa-user"></i> <a href="<?php echo $author_url; ?>" style="text-transform:capitalize;"><?php echo $author_nm; ?></a></p>									
				</div>
			</div>
			<!--/End Post Details-->
		</div>
		<!--/skt_blog_bottom-->
	</div>		

</div>
<!-- post -->