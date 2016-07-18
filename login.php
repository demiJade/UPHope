<?php
/*
Template Name: Login Template
*/
?>


<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="loginLabel">Login</h4>
		      </div>
		      <form action="<?php echo site_url(); ?>/wp-login.php" method="post">
			      <div class="modal-body">
			        	
 			        	<?php echo do_shortcode(' [wppb-login redirect_url="http://localhost/wordpress/"]') ?>

			      </div>

		      </form>
		    </div>
		  </div>
		</div>