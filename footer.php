<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main and #page div elements.
*
*/
?>

<!-- #main --> 
<?php
$radiance_lite_fb_url	= get_theme_mod('radiance_lite_fbook_link', '#');
$radiance_lite_tw_url	= get_theme_mod('radiance_lite_twitter_link', '#');
$radiance_lite_gplus_url	= get_theme_mod('radiance_lite_gplus_link', '#');
$radiance_lite_linkedin_url	= get_theme_mod('radiance_lite_linkedin_link', '#');
?>

<!-- #Footer Area Starts -->
<footer id="footer-area">
<!-- Footer-->
	<div class="footer">
		<!-- container Start -->
		<div class="container clearfix">
			<div class="footer-widgets">
				<?php dynamic_sidebar( 'Footer Widgets' ); ?>
				<div class="clearfix"></div>
			</div><!-- second_wrapper -->
			<div class="back-top"><a id="back-to-top" alt="<?php _e('Back To Top', 'radiance-lite') ?>" href=""><?php _e('Back To Top', 'radiance-lite') ?></a></div>
			<div class="footer-style"></div>
			<div class="row-fluid footer-space clearfix">
				<!-- Footer Copyright Section Start -->
				<div class="copyright col-md-6 col-sm-6 col-xs-12">
					<p><?php echo wp_kses_post( get_theme_mod( 'radiance_lite_copyright', '&copy; '.__('Proudly Powered by WordPress', 'radiance-lite') ) ); ?></p>
					<p>Radiance Lite <?php _e('Theme by', 'radiance-lite'); ?> <a href="<?php echo esc_url('https://sketchthemes.com/'); ?>">SketchThemes</a></p>
				</div>
				<!-- Footer Copyright Section End -->

				<!-- Footer Follow Us Section Start -->
				<div class="social-icons col-md-6 col-sm-6 col-xs-12">
					<?php if( $radiance_lite_fb_url != '' ){ ?>
						<div class="footer-social"><a href="<?php echo esc_url($radiance_lite_fb_url); ?>" target="_blank"><i class="fa fa-facebook"></i></a></div>
					<?php } ?>
					<?php if( $radiance_lite_tw_url != '' ){ ?>
						<div class="footer-social"><a href="<?php echo esc_url($radiance_lite_tw_url); ?>" target="_blank"><i class="fa fa-twitter"></i></a></div>
					<?php } ?>
					<?php if( $radiance_lite_gplus_url != '' ){ ?>
						<div class="footer-social"><a href="<?php echo esc_url($radiance_lite_gplus_url); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></div>
					<?php } ?>
					<?php if( $radiance_lite_linkedin_url != '' ){ ?>
						<div class="footer-social"><a href="<?php echo esc_url($radiance_lite_linkedin_url); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></div>
					<?php } ?>
				</div>
				<!-- Footer Follow Us Section End -->
			</div>
		</div>
		<!-- container End -->
	</div>
	<!--/Footer-->
</footer>
<!-- #Footer Area Ends -->
</div>

<!-- #wrapper -->
<?php wp_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			  $('#login').on('shown.bs.modal', function () {
			  $('#myInput').focus()
			})
		})
		
	</script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-route.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/app.js' ?>"></script></body>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/scripts.js' ?>"></script>
</html>