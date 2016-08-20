<?php $_third_landing_page_ID = get_theme_mod('radiance_lite_third_landing_page', '');
if( $_third_landing_page_ID != '' && $_third_landing_page_ID != '0' ) {
	$_third_landing_page_title = get_the_title( $_third_landing_page_ID );
	$_third_landing_page_object = get_post( $_third_landing_page_ID );
	$_third_landing_page_content = $_third_landing_page_object->post_content;
} else {
	$_third_landing_page_title = __('Third LANDING PAGE', 'radiance-lite');
	$_third_landing_page_content = '<div class="top-content about-us">Select a page for this section from <b>Customizing -> Home Page Settings -> Landing Page Section -> First landing page</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate nisi lacus, eu lobortis tellus vestibulum ut. Nullam eu nibh a metus congue tempus. Proin quis malesuada diam. Cras blandit venenatis magna luctus egestas. </div><h3>HOW TO SET NAVIGATION?</h3><p> To set landing navigation (scroll effect) add custom menu item with link <strong>#section3</strong> check readme.txt for more details.</p>';
} ?>
<div id="section3" class="skt-default-page"><div class="skt-page-overlay"></div>
	<!-- Container-->
	<div class="container post-wrap rpage_wrap" style="">
		<div class="row-fluid">
<!-- 			<div class="title"><h2><?php echo esc_attr($_third_landing_page_title); ?></h2><span class="horizontal-style"></span></div>
 -->			<div class="post">
				<div class="skepost clearfix">
					<div class="page-section">
						<?php get_template_part('contact-us') ?>
					</div>
				</div>
			</div>
			<!-- /end blog post -->
		</div>
	</div>
	<!-- /Container-->
</div>