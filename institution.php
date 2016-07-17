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

$posts = query_posts($query_string.'&cat=5'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="institution" >
	<p></p>
	<a href="" data-toggle="modal" data-target="#post">hi</a>
</div>

<div class="modal fade" id="post" tabindex="-1" role="dialog" aria-labelledby="postLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4>Post</h4>
		      </div>
		      <form>
			      <div class="modal-body">
			        
			        	LoremIpsum
			        
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Login</button>
			      </div>
		      </form>
		    </div>
		  </div>
		</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


HII!!!

	<div ng-view></div>

<?php get_footer(); ?>