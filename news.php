<?php global $query_string; // required
/**
* The template for displaying institutions.
*
* Template Name: News
* 
* 
*
*/

if (is_user_logged_in() ){
	get_header('user');
	$category_id = get_cat_ID('Announcements');
}
else {
	get_header();
	$category_id = get_cat_ID('News');
}
// change category id to the category of institution


$category_link = get_category_link($category_id);
$category_query_string = 'cat=' .$category_id.'&posts_per_page=3';
$posts = query_posts($category_query_string); ?>
<div class="container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="row news-heading">
				<a href="<?php the_permalink(); ?>" >
					<div class="col-md-12 news"  style="background-image: url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0]; ?>)">
						<span class="news-label">
							<?php $categories = get_the_category(); ?>
							<?php echo $categories[0]->name; ?>
						</span>
						<span class="news-box-title"><?php echo get_the_title(); ?></span>
					</div>
				</a>
			</div>
			
			<?php endwhile; else : ?>

			<?php endif; ?>
		<div>
			<a class="more-link" href="<?php echo $category_link ?>">more...</a>
		</div>
		
	
</div>



