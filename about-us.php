<?php 
/*About Us Page
Template Name: About Us

 */
 ?>

 <?php 
 	if (is_user_logged_in()) { get_header('user'); }
	else { get_header(); }
 ?>


  <h1 class="col-md-8" id="about-us-text">ABOUT US</h1>
  <span class="horizontal-style"></span>
<!-- <img id= class="size-medium wp-image-108 alignleft" src="<?php echo get_theme_mod('about_us_img', __('https://pixabay.com/static/uploads/photo/2016/02/19/15/46/dog-1210559_960_720.jpg')); ?>" alt="bluesquare" width="300" height="277" /> -->

 <img id="about-us-image" class="col-md-6" src="<?php echo get_theme_mod('about_us_img', __('https://pixabay.com/static/uploads/photo/2016/02/19/15/46/dog-1210559_960_720.jpg')); ?>" alt="bluesquare" width="300" height="277" />
<p id = "about-us-description" class="col-md-6">Lorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet, consecteturadipiscing elit.Aliquam porta dignissim estadipiscing elit. Aliquam porta dignissim esthendrerit tincidunt.Praesent tellus arcu,hendrerit tincidunt. Praesent tellus arcu,viverra nec orci sit amet, pretium laciniaviverra nec orci sit amet, pretium laciniaenim. Praesent sit amet mi sit amet nuncenim. Praesent sit amet mi sit amet nuncimperdiet rhoncus vel convallis justo. Ut nonimperdiet rhoncus vel convallis justo. Ut nonvestibulum urna. Ut quis faucibus ligula.vestibulum urna. Ut quis faucibus ligula.Nunc id nisi turpis. Nam eget interdum enim.Nunc id nisi turpis. Nam eget interdum enim.Curabitur sollicitudin felis eu massa portaCurabitur sollicitudin felis eu massa portaplacerat.placerat. </p>

<hr />
<div class="broken-lines">
</div>

<div class ="col-md-2 col-md-offset-2">
<p id="bonus-size-heading"> Social Media </p> <br>
<p1 id = "about-me-social-media"> Facebook | <a href="https://www.facebook.com" target="_blank">https://www.facebook.com</a> <br>
								  Youtube | <a href="https://www.youtube.com/" target="_blank">https://www.youtube.com/</a>  </p>



</div>

<div class = "col-md-2 col-md-offset-3">

<p id = "bonus-size-heading"> Press Features </p> <br>
<ul id = "about-me-press-features"> WhenInManila.com | <a href="http://www.wheninmanila.com/" target="_blank">http://www.wheninmanila.com/</a>
								    Rappler | <a href="http://www.rappler.com/" target="_blank">http://www.rappler.com/</a> </p>


</p>