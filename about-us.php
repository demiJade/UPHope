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
			<img id="about-us-image" src="<?php echo get_theme_mod('about_us_img', __(''.home_url().'/wp-content/uploads/2016/09/AboutUs-Img.png')); ?>" alt="bluesquare" width="500" />
		</div>
		<div class="col-md-6">
			<p id = "about-us-description"><?php echo get_theme_mod('about_us_content', __('From 24 individuals who wanted to empower pediatric patients in a hospital setting, The Hope Project is now an accredited organization under the University of the Philippines Manila. Through play therapy, the hundred-strong volunteers of The Hope Project alleviate the conditions experienced by the kids, continuing to bring smiles and their brand of #InspireHope since 2014.'));?> </p>
		</div>
	</div>

	
		<div class="broken-lines">
		</div><br>
	<div class="row">
		<div class ="col-md-6">
		<span class="red-banner"> Social Media </span> <br><br>
		<p id = "about-me-social-media"> <strong>Facebook |</strong> <a class="social-link" href="<?php echo get_theme_mod('radiance_lite_fbook_link',__('https://www.fb.com/thehopeprojectupm')); ?>" target="_blank"><?php echo get_theme_mod('radiance_lite_fbook_link',__('fb.com/thehopeprojectupm')); ?></a> </p>
		<p id="about-me-social-media"><strong> Twitter | </strong><a href="<?php echo get_theme_mod('radiance_lite_twitter_link', __('https://www.twitter.com/hopeprojectupm')) ?>" class="social-link"><?php echo get_theme_mod('radiance_lite_twitter_link', __('twitter.com/hopeprojectupm')); ?></a></p>
		<p id = "about-me-social-media">	  <strong> Youtube | </strong><a class="social-link" href="<?php echo get_theme_mod('radiance_lite_youtube_link','https://www.youtube.com/channel/UCOcztDmOlu9lnmVG504-aIw') ?>" target="_blank"><?php echo get_theme_mod('radiance_lite_youtube_link','youtube.com/channel/UCOcztDmOlu9lnmVG504-aIw') ?></a>  </p>



		</div>

		<div class = "col-md-6">

		<span class="red-banner"> Press Features </span> <br><br>
		<p id = "about-me-press-features"> <strong> WhenInManila.com | </strong><a class="social-link" href="<?php echo get_theme_mod('radiance_lite_when_in_manila_link',__('http://www.wheninmanila.com/the-hope-project-explorers-of-hope/?utm_campaign=shareaholic&utm_medium=facebook&utm_source=socialnetwork')); ?>" target="_blank"><?php echo get_theme_mod('radiance_lite_when_in_manila_link',__('http://www.wheninmanila.com/the-hope-project-explorers-of-hope/?utm_campaign=shareaholic&utm_medium=facebook&utm_source=socialnetwork')); ?></a></p>
		<p id="about-me-press-features"><strong>  WhenInManila.com |</strong> <a href="http://www.wheninmanila.com/inspire-hope-and-spread-love-with-splash-a-benefit-fun-run/" class="social-link">http://www.wheninmanila.com/inspire-hope-and-spread-love-with-splash-a-benefit-fun-run/</a></p>
		<p id = "about-me-press-features">  <strong> X Rappler |</strong> <a class="social-link" href="<?php echo get_theme_mod('radiance_lite_rappler_link','http://x.rappler.com/x/AjaNicdao/1472651857476-Discover-Hope-with-The-Hope-Project') ?>" target="_blank"><?php echo get_theme_mod('radiance_lite_rappler_link','http://x.rappler.com/x/AjaNicdao/1472651857476-Discover-Hope-with-The-Hope-Project') ?></a> </p>
		<p id="about-me-press-features"><strong> ClicktheCity.com | </strong><a href="http://www.clickthecity.com/events/details.php?id=30633" class="social-link">http://www.clickthecity.com/events/details.php?id=30633</a></p>
		<p id="about-me-press-features"><strong> ClicktheCity.com |</strong> <a href="http://www.clickthecity.com/events/details.php?id=29222" class="social-link">http://www.clickthecity.com/events/details.php?id=29222</a></p>

		</p>
	</div>
	</div>
		
</div>
 