<?php 
/*Donate Page
Template Name: Donate Page

 */
 ?>
<<<<<<< HEAD
<?php get_header(); ?>
<h1 class = "col-md-8" id = "about-us-text"> DONATE <h1>

<img id="about-us-image" class = "col-md-6" src = "<<?php echo get_theme_mod('about_us_img', __('https://pixabay.com/static/uploads/photo/2016/02/19/15/46/dog-1210559_960_720.jpg')); ?>" alt="bluesquare" width="300" height="277"/> 

<div class = "col-md-6">
=======
 <?php 
 	if (is_user_logged_in()) { get_header('user'); }
	else { get_header(); }
 ?>
<div class="container">
	<div class="row">
		<h1 class = "title-with-border" id = "about-us-text"> DONATE 
			<div class="red-bottom-line">
			</div>
		<h1>
			
	</div>
	<div class="row">
		
	</div>
	<div class="row">
		<div class="col-md-6">
					<img class="donate-image" src="<?php echo esc_url(get_theme_mod('donate_page_img', __(''.home_url().'/wp-content/uploads/2016/09/Donate-Img.png'))); ?>" alt="bluesquare" width="500"  />

		</div>
		<div class="col-md-6">
			<h2>Bank of the Philippine Islands (BPI)</h2>
			<h3>Account Name: <?php echo get_theme_mod('bpi_account_name', __('The Hope Project')); ?></h3>
			<h3>Account Number: <?php echo get_theme_mod('bpi_account_number', __('2723-0091-65')); ?></h3>
			<br>
			<h2>Banco de Oro (BDO)</h2>
			<h3>Account Name: <?php echo get_theme_mod('bdo_account_name', __('Coming soon!')); ?></h3>
			<h3>Account Number: <?php echo get_theme_mod('bdo_account_number', __('Coming soon!')); ?></h3>
		</div>
	</div>
	<div class="broken-lines">
	</div>
	<br>
	<div class="row">
		<div class="col-md-12">
			<span class="red-banner">what to do after donating</span>
			<br><br>
			<p><strong>Contact Us!</strong></p>
			<p><strong>Via Email: </strong></p>
			<ol>
				<li class="donate-list">send us an email at thehopeprojectupm@gmail.com</li>
				<li class="donate-list">attach a picture of your deposit slip/ proof of transaction</li>
			</ol>	
			<p><strong>Via Facebook:</strong> </p>
			<ol>
				<li class="donate-list">message our fb page at fb.com/thehopeprojectupm</li>
				<li class="donate-list">attach a picture of your deposit slip/ proof of transaction</li>
				<li class="donate-list">send us your email adddress if you’re interested in receiving updates about The Hope Project</li>
			</ol>
		</div>
	</div>

</div>




>>>>>>> e665bb936bcf74e74b7cd4152f4325978985708a

<h3 id="bank-name" >Bank of the Philippine Islands (BPI) </h3>
<p id = "bank-details"> Account Name </p>
<p id = "bank-details"> Account Number </p>
<br>
<h3 id = "bank-name" > Banco de Oro (BDO) </h3>
<p id = "bank-details"> Account Name </p>
<p id = "bank-details>"> Account Number </p>
</div>

<<<<<<< HEAD
<div class = "col-md-8">
<p id = "bonus-size-heading"> what to do after donating: <br> </p>

<p>
<ul> 1. send us an email at thehopeprojectupm@gmail.com </ul>

<ul> 2. attach a picture of your deposit slip/ proof of transaction </ul>

<ul> 3. message our fb page at fb.com/thehopeprojectupm </ul>

<ul> 4. attach a picture of your deposit slip/ proof of transaction </ul>

<ul> 5. send us your email adddress if you’re interested in receiving updates about The Hope Project </ul>

</p>
</div>
=======

</div>
>>>>>>> e665bb936bcf74e74b7cd4152f4325978985708a
