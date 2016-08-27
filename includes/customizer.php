<?php

function radiance_lite_customize_register( $wp_customize ) {

	$wp_customize->remove_control('header_textcolor');

	// ====================================
	// = Background Image Size for custom-background
	// ====================================
	$wp_customize->add_setting( 'background_size', array(
		'default'        => 'auto',
		'theme_supports' => 'custom-background',
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('background_size', array(
		'label' => __('Background Image Size','radiance-lite'),
		'section' => 'background_image',
	));
	
	// ====================================
	// = Rational Lite Theme Pannel
	// ==================================== 
	$wp_customize->add_panel( 'sketchthemes', array(
		'title' => __( 'Home Page Settings', 'radiance-lite'),
		'priority' => 1,
	) );

	// ====================================
	// = Rational Lite Theme Sections
	// ====================================
	$wp_customize->add_section( 'home_feature_settings' , array(
		'title' => __('Featured Box Section','radiance-lite'),
		'panel' => 'sketchthemes'
	) );
	$wp_customize->add_section( 'home_page_settings' , array(
		'title' => __('Landing Page Section','radiance-lite'),
		'panel' => 'sketchthemes'
	) );


	$wp_customize->add_section( 'blog_page_settings' , array(
		'priority' => 2,
		'title' => __('Blog Page Settings','radiance-lite'),
	) );

	$wp_customize->add_section( 'social_settings' , array(
		'priority' => 3,
		'title' => __('Social Links','radiance-lite'),

	) );
	$wp_customize->add_section( 'footer_settings' , array(
		'priority' => 4,
		'title' => __('Footer Settings','radiance-lite'),
	) );
	$wp_customize->add_section('contact_us_settings' , array(
		'priority' => 5,
		'title' => __('Contact Us Settings', 'radiance-lite'),
	) );
	$wp_customize->add_section('video_background_settings' , array(
		'priority' => 6,
		'title' => __('Video Background Settings', 'radiance-lite'),
	) );

	$wp_customize->add_section('menu_bar_settings' , array(
		'priority' => 7,
		'title' => __('Menu Bar Settings', 'radiance-lite'),
	) );
	$wp_customize->add_section('about_us_settings' , array(
		'priority' => 8,
		'title' => __('About Us Settings', 'radiance-lite'),
	) );
	$wp_customize->add_section('donate_settings' , array(
		'priority' => 9,
		'title' => __('Donate Page Settings', 'radiance-lite'),
	) );
	$wp_customize->add_section('forms_settings' , array(
		'priority' => 10,
		'title' => __('Forms Settings', 'radiance-lite'),
	) );
	
	// ====================================
	// = Forms Settings Sections
	// ====================================
	$wp_customize->add_setting( 'advocacy_form', array(
		'default'        => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'advocacy_form', array(
		'label'      => __( 'Advocacy Form', 'radiance-lite' ),
		'section'    => 'forms_settings',
		'settings'   => 'advocacy_form',
	) ) );
	$wp_customize->add_setting( 'finance_form', array(
		'default'        => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'finance_form', array(
		'label'      => __( 'Finance Form', 'radiance-lite' ),
		'section'    => 'forms_settings',
		'settings'   => 'advocacy_form',
	) ) );
	$wp_customize->add_setting( 'formations_form', array(
		'default'        => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'formations_form', array(
		'label'      => __( 'Advocacy Form', 'radiance-lite' ),
		'section'    => 'forms_settings',
		'settings'   => 'formations_form',
	) ) );
	$wp_customize->add_setting( 'hospitals_form', array(
		'default'        => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'hospitals_form', array(
		'label'      => __( 'Advocacy Form', 'radiance-lite' ),
		'section'    => 'forms_settings',
		'settings'   => 'hospitals_form',
	) ) );

	// ====================================
	// = Menu Bar Settings Sections
	// ====================================
	$wp_customize->add_setting( 'menu_bar_logo_img', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'menu_bar_logo_img', array(
		'priority' => 1,
		'label' => __( 'Logo Image', 'radiance-lite' ),
		'section' => 'menu_bar_settings',
		'mime_type' => 'image',
	) ) );

	// ====================================
	// = About Us Settings Sections
	// ====================================
	$wp_customize->add_setting( 'about_us_content', array(
		'default'        => __('Lorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet, consecteturadipiscing elit.Aliquam porta dignissim estadipiscing elit.', 'radiance-lite'),
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('about_us_content', array(
		'type' => 'textarea',
		'label' => __('About Us Content','radiance-lite'),
		'section' => 'about_us_settings',
	));
	$wp_customize->add_setting( 'about_us_img', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'about_us_img', array(
		'priority' => 1,
		'label' => __( 'About Us Image', 'radiance-lite' ),
		'section' => 'about_us_settings',
		'mime_type' => 'image',
	) ) );

	// ====================================
	// = Contact Us Settings Sections
	// ====================================
	$wp_customize->add_setting( 'contact_us_background_img', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'contact_us_background_img', array(
		'priority' => 1,
		'label' => __( 'Background Image', 'radiance-lite' ),
		'section' => 'contact_us_settings',
		'mime_type' => 'image',
	) ) );
	$wp_customize->add_setting('contact_us_email', array(
		'default'           => 'thehopeprojectupm@gmail.com',
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	) );
	$wp_customize->add_control('contact_us_email', array(
		'label' => __('Email Address','radiance-lite'),
		'section' => 'contact_us_settings',
	) );
	$wp_customize->add_setting('contact_us_fb_link', array(
		'default'           => 'fb.com/thehopeprojectupm',
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	) );
	$wp_customize->add_control('contact_us_fb_link', array(
		'label' => __('Facebook','radiance-lite'),
		'section' => 'contact_us_settings',
	) );
		// ====================================
	// = Video Background Settings Sections
	// ====================================
	$wp_customize->add_setting( 'video_background_link', array(
		'default'           => 'https://www.youtube.com/embed/6v2L2UGZJAM',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  'video_background_link', array(
		'priority' => 1,
		'label' => __( 'Video Background Link', 'radiance-lite' ),
		'section' => 'video_background_settings',

	) );

	// ====================================
	// = General Settings Sections
	// ====================================
	$wp_customize->add_setting( 'radiance_lite_pri_color', array(
		'default'           => '#ffdd24',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'radiance_lite_pri_color', array(
		'label'       => __( 'Primary Color', 'radiance-lite' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_setting( 'radiance_lite_sec_color', array(
		'default'           => '#293936',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'radiance_lite_sec_color', array(
		'label'       => __( 'Secondary Color', 'radiance-lite' ),
		'section'     => 'colors',
	) ) );

	// ====================================
	// = Header Settings Sections
	// ====================================
	$wp_customize->add_setting( 'radiance_lite_logo_img', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'radiance_lite_logo_img', array(
		'priority' => 1,
		'label' => __( 'Logo Image', 'radiance-lite' ),
		'section' => 'title_tagline',
		'mime_type' => 'image',
	) ) );
	$wp_customize->add_setting( 'radiance_lite_logo_width', array(
		'default'        => '228',
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_logo_width', array(
		'label' => __('Logo Width', 'radiance-lite'),
		'section' => 'title_tagline',
	));
	$wp_customize->add_setting( 'radiance_lite_logo_height', array(
		'default'        => '65',
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_logo_height', array(
		'label' => __('Logo Height', 'radiance-lite'),
		'section' => 'title_tagline',
	));

	
	$wp_customize->add_setting( 'radiance_lite_fbook_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('radiance_lite_fbook_link', array(
		'label' => __('Facebook Link', 'radiance-lite'),
		'section' => 'social_settings',
	));

	$wp_customize->add_setting( 'radiance_lite_twitter_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('radiance_lite_twitter_link', array(
		'label' => __('Twitter Link', 'radiance-lite'),
		'section' => 'social_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_gplus_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('radiance_lite_gplus_link', array(
		'label' => __('Goolge Plus Link', 'radiance-lite'),
		'section' => 'social_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_linkedin_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('radiance_lite_linkedin_link', array(
		'label' => __('Linked In Link', 'radiance-lite'),
		'section' => 'social_settings',
	));

	$wp_customize->add_setting( 'radiance_lite_when_in_manila_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('radiance_lite_when_in_manila_link', array(
		'label' => __('WhenInManila Link', 'radiance-lite'),
		'section' => 'social_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_rappler_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('radiance_lite_rappler_link', array(
		'label' => __('Rappler Link', 'radiance-lite'),
		'section' => 'social_settings',
	));
	
	// ====================================
	// = Home Page Settings Sections
	// ====================================
	$the_query = new WP_Query( array('post_type' => 'page', 'posts_per_page' => '-1') );
	$pages_dropdown[0] = __( 'Select Page', 'radiance-lite' );
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post();
			$pages_dropdown[ get_the_ID() ] = get_the_title();
		endwhile;
	wp_reset_postdata();
	else : ?>
		<p><?php $pages_dropdown[0] = __( 'No page found.', 'radiance-lite' ); ?></p>
	<?php endif;

	$wp_customize->add_setting( 'radiance_lite_first_landing_page', array(
		'default'           => '',
		'sanitize_callback' => 'radiance_lite_sanitize_pages',
	) );
	$wp_customize->add_control( 'radiance_lite_first_landing_page', array(
		'label' => __( 'First landing page', 'radiance-lite' ),
		'section' => 'home_page_settings',
		'type' => 'select',
		'choices' => $pages_dropdown,
	) );
	$wp_customize->add_setting( 'radiance_lite_second_landing_page', array(
		'default'           => '',
		'sanitize_callback' => 'radiance_lite_sanitize_pages',
	) );
	$wp_customize->add_control( 'radiance_lite_second_landing_page', array(
		'label' => __( 'Second landing page', 'radiance-lite' ),
		'section' => 'home_page_settings',
		'type' => 'select',
		'choices' => $pages_dropdown,
	) );
	$wp_customize->add_setting( 'radiance_lite_third_landing_page', array(
		'default'           => '',
		'sanitize_callback' => 'radiance_lite_sanitize_pages',
	) );
	$wp_customize->add_control( 'radiance_lite_third_landing_page', array(
		'label' => __( 'Third landing page', 'radiance-lite' ),
		'section' => 'home_page_settings',
		'type' => 'select',
		'choices' => $pages_dropdown,
	) );
	$wp_customize->add_setting( 'radiance_lite_login', array(
		'default'           => '',
		'sanitize_callback' => 'radiance_lite_sanitize_pages',
	) );
	$wp_customize->add_control( 'radiance_lite_login', array(
		'label' => __( 'Login', 'radiance-lite' ),
		'section' => 'home_page_settings',
		'type' => 'select',
		'choices' => $pages_dropdown,
	) );



	// ====================================
	// = Home Featured Box Sections
	// ====================================
	$wp_customize->add_setting( 'radiance_lite_vision_title', array(
		'default'        => __('What\'s Special', 'radiance-lite'),
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_vision_title', array(
		'label' => __('Featured Section Heading','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_vision_content', array(
		'default'        => __('Our media agency is fuelled with the elements to speed up your business marketing, PR & Promotional campaigns, Media Marketing, Internet Marketing, Email Marketing.', 'radiance-lite'),
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_vision_content', array(
		'type' => 'textarea',
		'label' => __('Featured Section Description','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_mission_title', array(
		'default'        => __('What\'s Special', 'radiance-lite'),
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_mission_title', array(
		'label' => __('Featured Section Heading','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_mission_content', array(
		'default'        => __('Our media agency is fuelled with the elements to speed up your business marketing, PR & Promotional campaigns, Media Marketing, Internet Marketing, Email Marketing.', 'radiance-lite'),
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_mission_content', array(
		'type' => 'textarea',
		'label' => __('Featured Section Description','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_first_feature_title', array(
		'default'        => __('Web Development', 'radiance-lite'),
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_first_feature_title', array(
		'label' => __('First Featured Box Heading','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_first_feature_icon', array(
		'default'        => 'fa-desktop',
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_first_feature_icon', array(
		'label' => __('First Featured Box Icon Class','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_first_feature_content', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.', 'radiance-lite'),
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_first_feature_content', array(
		'type' => 'textarea',
		'label' => __('First Featured Box Content','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_first_feature_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('radiance_lite_first_feature_link', array(
		'type' => 'url',
		'label' => __('First Featured Box Link','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	// Second Feature
	$wp_customize->add_setting( 'radiance_lite_second_feature_title', array(
		'default'        => __('Web Design', 'radiance-lite'),
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_second_feature_title', array(
		'label' => __('Second Featured Box Heading','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_second_feature_icon', array(
		'default'        => 'fa-code',
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_second_feature_icon', array(
		'label' => __('Second Featured Box Icon Class','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_second_feature_content', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.', 'radiance-lite'),
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_second_feature_content', array(
		'type' => 'textarea',
		'label' => __('Second Featured Box Content','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_second_feature_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('radiance_lite_second_feature_link', array(
		'type' => 'url',
		'label' => __('Second Featured Box Link','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	// Third Feature
	$wp_customize->add_setting( 'radiance_lite_third_feature_title', array(
		'default'        => __('Theme Development', 'radiance-lite'),
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_third_feature_title', array(
		'label' => __('Third Featured Box Heading','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_third_feature_icon', array(
		'default'        => 'fa-cog',
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_third_feature_icon', array(
		'label' => __('Third Featured Box Icon Class','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_third_feature_content', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.', 'radiance-lite'),
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_third_feature_content', array(
		'type' => 'textarea',
		'label' => __('Third Featured Box Content','radiance-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_third_feature_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('radiance_lite_third_feature_link', array(
		'type' => 'url',
		'label' => __('Third Featured Box Link','radiance-lite'),
		'section' => 'home_feature_settings',
	));

	// ====================================
	// = Blog Page Settings Sections
	// ====================================
	$wp_customize->add_setting( 'radiance_lite_blogpage_heading', array(
		'default'        => __('Blog', 'radiance-lite'),
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_blogpage_heading', array(
		'label' => __('Blog Page Title','radiance-lite'),
		'section' => 'blog_page_settings',
	));
	$wp_customize->add_setting( 'radiance_lite_feature_box_sec', array(
		'default'           => 'on',
		'sanitize_callback' => 'radiance_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'radiance_lite_feature_box_sec', array(
		'label' => __( 'Featured Box Section ON/OFF', 'radiance-lite' ),
		'section' => 'blog_page_settings',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );
	$wp_customize->add_setting( 'radiance_lite_first_landing_sec', array(
		'default'           => 'on',
		'sanitize_callback' => 'radiance_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'radiance_lite_first_landing_sec', array(
		'label' => __( 'First Landing Page ON/OFF', 'radiance-lite' ),
		'section' => 'blog_page_settings',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );
	$wp_customize->add_setting( 'radiance_lite_second_landing_sec', array(
		'default'           => 'on',
		'sanitize_callback' => 'radiance_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'radiance_lite_second_landing_sec', array(
		'label' => __( 'Second Landing Page ON/OFF', 'radiance-lite' ),
		'section' => 'blog_page_settings',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );
	$wp_customize->add_setting( 'radiance_lite_third_landing_sec', array(
		'default'           => 'on',
		'sanitize_callback' => 'radiance_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'radiance_lite_third_landing_sec', array(
		'label' => __( 'Third Landing Page ON/OFF', 'radiance-lite' ),
		'section' => 'blog_page_settings',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );

	// ====================================
	// = Footer Settings Sections
	// ====================================
	$wp_customize->add_setting( 'radiance_lite_copyright', array(
		'default'        => __('Proudly Powered by WordPress', 'radiance-lite'),
		'sanitize_callback' => 'radiance_lite_sanitize_textarea',
	));
	$wp_customize->add_control('radiance_lite_copyright', array(
		'label' => __('Copyright Text','radiance-lite'),
		'section' => 'footer_settings',
	));

}
add_action( 'customize_register', 'radiance_lite_customize_register' );

// sanitize textarea
function radiance_lite_sanitize_textarea( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

function radiance_lite_sanitize_on_off( $input ) {
	$valid = array(
		'on' =>'ON',
		'off'=> 'OFF'
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function radiance_lite_sanitize_background_repeat( $input ) {
	$valid = array(
		'no-repeat'  => __('No Repeat', 'radiance-lite'),
		'repeat'     => __('Tile', 'radiance-lite'),
		'repeat-x'   => __('Tile Horizontally', 'radiance-lite'),
		'repeat-y'   => __('Tile Vertically', 'radiance-lite'),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function radiance_lite_sanitize_background_position( $input ) {
	$valid = array(
		'left'       => __('Left', 'radiance-lite'),
		'center'     => __('Center', 'radiance-lite'),
		'right'      => __('Right', 'radiance-lite'),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function radiance_lite_sanitize_background_attachment( $input ) {
	$valid = array(
		'scroll'     => __('Scroll', 'radiance-lite'),
		'fixed'      => __('Fixed', 'radiance-lite'),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function radiance_lite_sanitize_pages( $input ) {
	$the_query = new WP_Query( array('post_type' => 'page','posts_per_page' => '-1') );
	$pages_dropdown = array();
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post();
			$pages_dropdown[ get_the_ID() ] = get_the_title();
		endwhile;
		wp_reset_postdata();
	else : ?>
		<p><?php $pages_dropdown[0] = __( 'No page found.', 'radiance-lite' ); ?></p>
	<?php endif;

	$valid = $pages_dropdown;
 
    // if ( array_key_exists( $input, $valid ) ) {
    //     return $input;
    // } else {
    //     return '';
    // }
    return $input;
}

function radiance_lite_active_breadcrumb_image( $control ) {
	if ( $control->manager->get_setting('breadcrumbbg_image')->value() != '' ) {
		return true;
	} else {
		return false;
	}
}
