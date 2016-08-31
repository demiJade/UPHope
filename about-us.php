<?php 
/*About Us Page
Template Name: About Us

 */
 ?>

 <?php 
 	if (is_user_logged_in()) { get_header('user'); }
	else { get_header(); }
 ?>

<!--  <h1 class="about-us-settings">ABOUT US</h1> -->
  <h1 class="col-md-8" id="about-us-text">ABOUT US</h1>
<!-- <img id= class="size-medium wp-image-108 alignleft" src="<?php echo get_theme_mod('about_us_img', __('https://pixabay.com/static/uploads/photo/2016/02/19/15/46/dog-1210559_960_720.jpg')); ?>" alt="bluesquare" width="300" height="277" /> -->

 <img id="about-us-image" class="col-md-6" src="<?php echo get_theme_mod('about_us_img', __('https://pixabay.com/static/uploads/photo/2016/02/19/15/46/dog-1210559_960_720.jpg')); ?>" alt="bluesquare" width="300" height="277" />
<p id = "about-us-description" class="col-md-6">Lorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet, consecteturadipiscing elit.Aliquam porta dignissim estadipiscing elit. Aliquam porta dignissim esthendrerit tincidunt.Praesent tellus arcu,hendrerit tincidunt. Praesent tellus arcu,viverra nec orci sit amet, pretium laciniaviverra nec orci sit amet, pretium laciniaenim. Praesent sit amet mi sit amet nuncenim. Praesent sit amet mi sit amet nuncimperdiet rhoncus vel convallis justo. Ut nonimperdiet rhoncus vel convallis justo. Ut nonvestibulum urna. Ut quis faucibus ligula.vestibulum urna. Ut quis faucibus ligula.Nunc id nisi turpis. Nam eget interdum enim.Nunc id nisi turpis. Nam eget interdum enim.Curabitur sollicitudin felis eu massa portaCurabitur sollicitudin felis eu massa portaplacerat.placerat. </p>

<hr />

<div class ="col-md-6">
<p id="bonus-size-heading"> Social Media </p> <br>
<p1 id = "about-me-social-media"> Facebook | <a href="https://www.facebook.com" target="_blank">https://www.facebook.com</a> <br>
								  Youtube | <a href="https://www.youtube.com/" target="_blank">https://www.youtube.com/</a>  </p>
<br>
<a href = "https://www.facebook.com/thehopeprojectupm">
	<img id = "external-link-logo" src = "http://www.androidpolice.com/wp-content/uploads/2014/08/nexus2cee_facebook-icon.png" alt = "Visit our Facebook page!">	
</a> 
<a href = "https://www.twitter.com/thehopeprojectupm">
	<img id = "external-link-logo" src = "https://www.youtube.com/yt/brand/media/image/YouTube-icon-full_color.png" alt = "Check us out on Youtube!">	
</a>

</div>

<div class = "col-md-6">

<p id = "bonus-size-heading"> Press Features </p> <br>
<ul id = "about-me-press-features"> WhenInManila.com | <a href="http://www.wheninmanila.com/" target="_blank">http://www.wheninmanila.com/</a>
								    Rappler | <a href="http://www.rappler.com/" target="_blank">http://www.rappler.com/</a> </p>
<br>
<a href = "http://www.wheninmanila.com/">
	<img id = "external-link-logo" src = "https://upload.wikimedia.org/wikipedia/en/8/82/When_In_Manila_logo.png" alt = "Check us out on When in Manila!">	
</a> 
<a href = "https://www.rappler.com">
	<img id = "external-link-logo" src = "https://hronlineph.files.wordpress.com/2012/04/rappler_logo.jpg" alt = "Check us out on Rappler!">	
</a>

</p>