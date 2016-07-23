<div class="sidebar">
	<ul class="side-nav fixed">
		<li>
			<?php global $current_user;
				get_currentuserinfo();
			      echo $current_user->user_firstname . " ";
			      echo $current_user->user_lastname ;
			 ?> <br>
			 member
		</li>
		<li>Dashboard</li>
		<li>
			<div class="panel panel-default side-list">
				<div class="panel-heading side-list" role="tab" id="formsHeading">
					<h5 class="panel-title"><a href="#formscollapse" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="formscollapse">Forms</a></h5>
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
													Advocacy
												</a>
											</h5>
										</div>
										<div class="panel-collapse collapse in" role="tabpanel" id="collapse-advocacy" aria-labelledby="heading-advocacy">
											<div class="panel-body side-list-item">
												<ul>
													<li><a class="side-nav-link" href="http://uphopedev.misa.org.ph/wp-content/uploads/2016/07/1-Practicum-Orientation-2016.pdf">event evaluation</a></li>
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
													Finance
												</a>
											</h5>
										</div>
										<div class="panel-collapse collapse in" role="tabpanel" id="collapse-finance" aria-labelledby="heading-finance">
											<div class="panel-body side-list-item">
												<ul>
													<li>event evaluation</li>
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
													Formations
												</a>
											</h5>
										</div>
										<div class="panel-collapse collapse in" role="tabpanel" id="collapse-formations" aria-labelledby="heading-formations">
											<div class="panel-body side-list-item">
												<ul>
													<li>event evaluation</li>
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
													Hospitals
												</a>
											</h5>
										</div>
										<div class="panel-collapse collapse in" role="tabpanel" id="collapse-hospitals" aria-labelledby="heading-hospitals">
											<div class="panel-body side-list-item">
												<ul>
													<li>event evaluation</li>
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
