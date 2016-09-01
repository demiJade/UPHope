<?php 
/*Donate Page
Template Name: Donate Page

 */
 ?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<h1 class = "col-md-8" id = "about-us-text"> DONATE <h1>
			
	</div>
	<div class="row">
		<div class="red-bottom-line">
			</div>
	</div>
	<div class="row">
		<div class="col-md-6">
					<img class="donate-image" src="<?php echo esc_url(get_theme_mod('donate_page_img', __('https://s-media-cache-ak0.pinimg.com/236x/b3/e1/97/b3e19765b8e71866d2e11e765ac0469a.jpg'))); ?>" alt="bluesquare" width="300" height="277" />

		</div>
		<div class="col-md-6">
			<p>Bank of the Philippine Islands (BPI)</p>
			<p><?php echo get_theme_mod('bpi_account_name', __('Account Name')); ?></p>
			<p><?php echo get_theme_mod('bpi_account_number', __('Account Number')); ?></p>
			<br>
			<p>Banco de Oro (BDO)</p>
			<p><?php echo get_theme_mod('bdo_account_name', __('Account Name')); ?></p>
			<p><?php echo get_theme_mod('bdo_account_number', __('Account Number')); ?></p>
		</div>
	</div>
	<div class="broken-lines">
	</div>
	<div class="row">
		<div class="col-md-12">
			<span class="red-banner">what to do after donating</span>
			<ol>
				<li>send us an email at thehopeprojectupm@gmail.com</li>
				<li>attach a picture of your deposit slip/ proof of transaction</li>
			</ol>	
			<ol>
				<li>message our fb page at fb.com/thehopeprojectupm</li>
				<li>attach a picture of your deposit slip/ proof of transaction</li>
				<li>send us your email adddress if you’re interested in receiving updates about The Hope Project</li>
			</ol>
		</div>
	</div>

</div>





<hr />


</div>
