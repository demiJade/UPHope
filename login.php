<?php
/*
Template Name: Login Template
*/
?>

<!-- 			        	<?php echo do_shortcode(' [wppb-login redirect_url="http://localhost/wordpress/"]') ?>
 -->			        	<!-- <div class="form-group">
			        		<label for="username">Username</label>
			        		<input type="text" class="form-control" id="username" placeholder="Username" />
			        	</div>
			        	<div class="form-group">
			        		<label for="password">Password</label>
			        		<input type="password" class="form-control" id="password" placeholder="Password" />
			        	</div> -->
			        

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="loginLabel">Login</h4>
		      </div>
		      <form action="http://localhost/wordpress/wp-login.php" method="post">
			      <div class="modal-body">
			        	
 			        	<?php echo do_shortcode(' [wppb-login redirect_url="http://localhost/wordpress/"]') ?>

			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="submit" id="wp-submit" class="btn btn-primary" name="submit">Login</button>
			      </div>
		      </form>
		    </div>
		  </div>
		</div>