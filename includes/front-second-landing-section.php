<?php $_second_landing_page_ID = get_theme_mod('radiance_lite_second_landing_page', '');
if( $_second_landing_page_ID != '' && $_second_landing_page_ID != '0' ) {
	$_second_landing_page_title = get_the_title( $_second_landing_page_ID );
	$_second_landing_page_object = get_post( $_second_landing_page_ID );
	$_second_landing_page_content = $_second_landing_page_object->post_content;
} else {
	$_second_landing_page_title = __('NEWS', 'radiance-lite');
	$_second_landing_page_content = '<div class="page-section clearfix"><div class="top-content  text-center col-md-8 col-sm-8 col-xs-12 ">This is second landing page.<br>Our high-tech media agency commands plethora of services and use it for your benefit. We create the right buzz.</div></div><div class="we-serve-bottom clearfix"><div class="serve-left col-md-6 col-sm-6 col-xs-12"><div class="left-content clearfix"><div class="serve-icon"><i class="fa fa-check-circle-o"></i></div><div class="serve-inner-content"><h2>Media Conference</h2><p>We bring together who\'s who of print and digital media to boost your brands.</p></div></div><div class="left-content clearfix"><div class="serve-icon"><i class="fa fa-check-circle-o"></i></div><div class="serve-inner-content"><h2>Social Media Promotion</h2><p>We spice up social media platform with innovative use of digital resources.</p></div></div></div><div class="serve-right col-md-6 col-sm-6 col-xs-12"><div class="left-content clearfix"><div class="serve-icon"><i class="fa fa-check-circle-o"></i></div><div class="serve-inner-content"><h2>Live Streaming</h2><p>We get your conferences streamed through full HD live videos transmission.</p></div></div><div class="left-content clearfix"><div class="serve-icon"><i class="fa fa-check-circle-o"></i></div><div class="serve-inner-content"><h2>Mobile Marketing</h2><p>Our special mobile contents and worthy banners make big difference for you.</p></div></div></div></div>';
} ?>
<div id="section2" class="skt-default-page"><div class="skt-page-overlay"></div>
	<!-- Container-->
	<div class="container post-wrap rpage_wrap" style="">
		<div class="row-fluid">
			<div class="title"><h2><?php echo esc_attr($_second_landing_page_title); ?></h2><span class="horizontal-style"></span></div>
			<div class="post">
				<div class="skepost clearfix">
					<div class="page-section">
						<?php get_template_part('news'); ?>
					</div>
				</div>
			</div>
			<!-- /end blog post -->
		</div>
	</div>
	<!-- /Container-->
</div>