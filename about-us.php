<?php 
/*About Us Page
Template Name: About Us

 */
 ?>

 <?php 
 	if (is_user_logged_in()) { get_header('user'); }
	else { get_header(); }
 ?>

<div class="container">
	<div class="row">
		 <h1 class="title-with-border" id="about-us-text">ABOUT US
		  	<div class="red-bottom-line">
		  	</div>
		  </h1>
	</div>
		<!-- <img id= class="size-medium wp-image-108 alignleft" src="<?php echo get_theme_mod('about_us_img', __('https://pixabay.com/static/uploads/photo/2016/02/19/15/46/dog-1210559_960_720.jpg')); ?>" alt="bluesquare" width="300" height="277" /> -->
	<div class="row">
		<div class="col-md-6">
			<img id="about-us-image" src="<?php echo get_theme_mod('about_us_img', __('https://pixabay.com/static/uploads/photo/2016/02/19/15/46/dog-1210559_960_720.jpg')); ?>" alt="bluesquare" width="500" />
		</div>
		<div class="col-md-6">
			<p id = "about-us-description"><?php echo get_theme_mod('about_us_content', __('Lorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet, consecteturadipiscing elit.Aliquam porta dignissim estadipiscing elit. Aliquam porta dignissim esthendrerit tincidunt.Praesent tellus arcu,hendrerit tincidunt. Praesent tellus arcu,viverra nec orci sit amet, pretium laciniaviverra nec orci sit amet, pretium laciniaenim. Praesent sit amet mi sit amet nuncenim. Praesent sit amet mi sit amet nuncimperdiet rhoncus vel convallis justo. Ut nonimperdiet rhoncus vel convallis justo. Ut nonvestibulum urna. Ut quis faucibus ligula.vestibulum urna. Ut quis faucibus ligula.Nunc id nisi turpis. Nam eget interdum enim.Nunc id nisi turpis. Nam eget interdum enim.Curabitur sollicitudin felis eu massa portaCurabitur sollicitudin felis eu massa portaplacerat.placerat.'));?> </p>
		</div>
	</div>

	
		<div class="broken-lines">
		</div><br>
	<div class="row">
		<div class ="col-md-6">
		<span class="red-banner"> Social Media </span> <br><br>
		<p id = "about-me-social-media"> Facebook | <a class="social-link" href="<?php echo get_theme_mod('radiance_lite_fbook_link',__('https://www.facebook.com')); ?>" target="_blank"><?php echo get_theme_mod('radiance_lite_fbook_link',__('https://www.facebook.com')); ?></a> </p>
		<p id = "about-me-social-media">	  Youtube | <a class="social-link" href="<?php echo get_theme_mod('radiance_lite_youtube_link','https://www.youtube.com/') ?>" target="_blank"><?php echo get_theme_mod('radiance_lite_youtube_link','https://www.youtube.com/') ?></a>  </p>



		</div>

		<div class = "col-md-6">

		<span class="red-banner"> Press Features </span> <br><br>
		<p id = "about-me-press-features"> WhenInManila.com | <a class="social-link" href="<?php echo get_theme_mod('radiance_lite_when_in_manila_link',__('https://www.wheninmanila.com')); ?>" target="_blank"><?php echo get_theme_mod('radiance_lite_when_in_manila_link',__('https://www.wheninmanila.com')); ?></a></p>
		<p id = "about-me-press-features">  Rappler | <a class="social-link" href="<?php echo get_theme_mod('radiance_lite_rappler_link','http://www.rappler.com/') ?>" target="_blank"><?php echo get_theme_mod('radiance_lite_rappler_link','http://www.rappler.com/') ?></a> </p>


		</p>
	</div>
	</div>
		
</div>
 