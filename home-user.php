

	

<div class="container">
	<div class="row">
		<h1 class="text-center">RETENTION PROGRESS</h1>
	</div>
	<div class="row circles">
		<div class="col-md-2">
			<div class="circle">
				<span class="text-center"><?php if ($current_user->project_involvement != '') {echo $current_user->project_involvement;} else {echo 0;} ?></span>
			</div>
		</div>
		<div class="col-md-2">
			<div class="circle">
				<span class="text-center"><?php if ($current_user->hospital_visits != '') {echo $current_user->hospital_visits;} else {echo 0;} ?></span>
			</div>
		</div>
		<div class="col-md-2">
			<div class="circle">
				<span class="text-center"><?php if ($current_user->formations_seminar != '') {echo $current_user->formations_seminar;} else {echo 0;} ?></span>
			</div>
		</div>
		<div class="col-md-2">
			<div class="circle">
				<span class="text-center"><?php if ($current_user->child_life_party != '') {echo $current_user->child_life_party;} else {echo 0;} ?></span>
			</div>
		</div>
	</div>

</div>

<?php get_template_part('announcements'); ?>