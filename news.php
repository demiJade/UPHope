<?php global $query_string; // required
/**
* The template for displaying institutions.
*
* Template Name: Institutions
* 
* 
*
*/

if (is_user_logged_in() ){
	get_header('user');
}
else {
	get_header();
}
// change category id to the category of institution
$category_id = get_cat_ID('News');
$category_link = get_category_link($category_id);
$category_query_string = 'cat=' .$category_id.'&posts_per_page=3';
$posts = query_posts($category_query_string); ?>
<div class="container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="row news-heading">
				<div class="col-md-12 news">
					
						<a class="box-title" href="<?php the_permalink(); ?>" ><?php echo get_the_title(); ?></a>
				</div>
			</div>
			
			<?php endwhile; else : ?>

			<?php endif; ?>
		<div>
			<a href="<?php echo $category_link ?>">more...</a>
		</div>
		
	
</div>



