<?php global $query_string; // required
/**
* The template for displaying institutions.
*
* Template Name: Admin Projects View
* 
* 
*
*/
$category_id = get_cat_ID('Projects');
$category_link = get_category_link($category_id);
$category_query_string = 'cat=' .$category_id;
$posts = query_posts($category_query_string); 
$home_url = home_url();

 ?>
<?php get_header('admin'); ?>
<table>
	<tr>
		<th>Project Title</th>
		<th>Project Date</th>
		<th>Participants</th>
		<th>Total Slots</th>
		<th>Slots Left</th>
	</tr>
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<tr>
			<td>
				<?php echo get_the_title(); ?>
			</td>
			<td>
				<?php echo get_post_meta($post->ID, 'Project Date', true); ?>
			</td>
			<td>
				<?php $participants_number = get_post_meta($post->ID, 'Participants', true); ?>
				<?php for($i = 1; $i <= $participants_number; $i++) {?>
					<p>
						<?php echo get_post_meta($post->ID, 'Participant'.$i, true); ?>
					</p>
				<?php } ?>
			</td>
			<td><?php echo $slots = get_post_meta($post->ID, 'Slots', true); ?></td>
			<td><?php echo $slots - $participants_number; ?></td>
		</tr>
	<?php endwhile; else : ?>
	<?php endif; ?>
</table>

<?php 
$fields = get_post_custom(149);
foreach($fields as $key => $value){
    	echo $key;
    	echo $value;
    }

 ?>
