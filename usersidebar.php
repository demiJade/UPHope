
<div class="sidebar">
	<br>
	<br><br>
	<img width="150px" height="150px" class="sidebar-logo" src="<php home_url(); ?>/wp-content/uploads/2016/09/sidebar-logo.png"/>
	<div class="member-container text-center">
		<span class="member-name"><?php global $current_user;
				get_currentuserinfo();
			      echo $current_user->user_firstname . " ";
			      echo $current_user->user_lastname ;
			 ?>
		</span> <br>
		<span class="member-member">member</span>
	</div>


	
	<ul class="side-nav fixed">
		<li class="panel-title">DASHBOARD</li>
		<li>
			<div class="panel panel-default side-list">
				<div class="panel-heading side-list" role="tab" id="formsHeading">
					<h4 class="panel-title"><a href="#formscollapse" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="formscollapse">FORMS</a></h4>
				</div>
				<div id="formscollapse" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="formsHeading">
					<div class="panel-body side-list-item">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<ul>
								<li>
									<div class="panel panel-default side-list">
										<div class="panel-heading side-list" role="tab" id="heading-advocacy">
											<h5 class="panel-title">
												<a href="#collapse-advocacy" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapse-advocacy">
													ADVOCACY
												</a>
											</h5>
										</div>
										<div class="panel-collapse collapse in" role="tabpanel" id="collapse-advocacy" aria-labelledby="heading-advocacy">
											<div class="panel-body side-list-item">
												<ul>
													<li><a class="side-nav-link" href="<?php echo get_theme_mod('advocacy_form','#') ?>">event evaluation</a></li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="panel panel-default side-list">
										<div class="panel-heading side-list" role="tab" id="heading-finance">
											<h5 class="panel-title">
												<a href="#collapse-finance" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapse-finance">
													FINANCE
												</a>
											</h5>
										</div>
										<div class="panel-collapse collapse in" role="tabpanel" id="collapse-finance" aria-labelledby="heading-finance">
											<div class="panel-body side-list-item">
												<ul>
													<li><a class="side-nav-link" href="<?php echo get_theme_mod('finance_form','#') ?>">event evaluation</a></li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="panel panel-default side-list">
										<div class="panel-heading side-list" role="tab" id="heading-formations">
											<h5 class="panel-title">
												<a href="#collapse-formations" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapse-formations">
													FORMATIONS
												</a>
											</h5>
										</div>
										<div class="panel-collapse collapse in" role="tabpanel" id="collapse-formations" aria-labelledby="heading-formations">
											<div class="panel-body side-list-item">
												<ul>
													<li><a class="side-nav-link" href="<?php echo get_theme_mod('formations_form','#') ?>">event evaluation</a></li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="panel panel-default side-list">
										<div class="panel-heading side-list" role="tab" id="heading-hospitals">
											<h5 class="panel-title">
												<a href="#collapse-hospitals" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapse-hospitals">
													HOSPITALS
												</a>
											</h5>
										</div>
										<div class="panel-collapse collapse in" role="tabpanel" id="collapse-hospitals" aria-labelledby="heading-hospitals">
											<div class="panel-body side-list-item">
												<ul>
													<li><a class="side-nav-link" href="<?php echo get_theme_mod('hospitals_form','#') ?>">event evaluation</a></li>
												</ul>
											</div>
										</div>
									</div>
								</li>
							</ul>
							
						</div>
					</div>
				</div>
			</div>
		</li>

	</ul>
</div>
	
