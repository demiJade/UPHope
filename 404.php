<?php 
/**
 * The template for displaying Error 404 page.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<div class="page-content">
	<div class="container" id="error-404">
		<div class="row-fluid">
			<div id="content" class="col-md-12 col-sm-12 col-xs-12">
				<div class="post">
					<div class="skepost _404-page">
						<div class="error-txt-first"><?php _e( 'OOPS !!!', 'radiance-lite' ); ?></div>
						<div class="error-txt"><?php _e( '404', 'radiance-lite' ); ?></div>
						<p><?php _e( 'Sorry, but the requested resource was not found on this site. Please try again or contact the administrator for assistance.', 'radiance-lite' ); ?></p>
					</div>
					<!-- post --> 
				</div>
				<!-- post -->
			</div>
			<!-- content --> 
		</div>
	</div>
</div>

<?php get_footer(); ?>