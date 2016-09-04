

	

	<div class="row">
		<div class="col-md-9 col-md-offset-1">
			<h1 class="text-center">RETENTION PROGRESS</h1>
		</div>
		
	</div>
	<div class="row circles">
		<div class="col-md-2 col-md-offset-1">
			<div class="circle">
				<?php global $current_user;
				get_currentuserinfo();?>
				<?php if ($current_user->project_involvement != '') {
						$project_involvement = $current_user->project_involvement;
				} else {
					$project_involvement = 0;} ?>
					
				<span class="text-center"><?php echo $project_involvement ?></span>
				
			</div>
			<span>project involvement</span>
		</div>
		<div class="col-md-2">
			<div class="circle">
				<?php if ($current_user->hospital_visits != '') {
					$hospital_visits = $current_user->hospital_visits;
				} else {
					$hospital_visits = 0;} ?>
					
				<span class="text-center"><?php echo $hospital_visits; ?></span>
			</div>
			<span>hospital visits</span>
		</div>
		<div class="col-md-2">
			<div class="circle">
				<?php if ($current_user->formations_seminar != '') {
					$formations_seminar = $current_user->formations_seminar;
				} else {
					$formations_seminar = 0;} ?>
					
				<span class="text-center"><?php echo $formations_seminar; ?></span>
			</div>
			<span>formations seminar</span>
		</div>
		<div class="col-md-2">
			<div class="circle">
				<?php if ($current_user->child_life_party != '') {
					$child_life_party = $current_user->child_life_party;
				} else {
					$child_life_party = 0;} ?>

				<span class="text-center"><?php echo $child_life_party; ?></span>
			</div>
			<span>child life party (CLP)</span>
		</div>
	</div>
	<div class="row">
		<div class="progress col-md-7 col-md-offset-2">
			<?php $progress = 0; ?>
			<?php if ($project_involvement >= 1) {
				$progress += 1; }
				if ($hospital_visits >= 3) {
					$progress += 3;
				} else {
					$progress += $hospital_visits;
				}
				if ($formations_seminar >= 1){
					$progress += 1;
				}
				if ($child_life_party >= 1){
					$progress += 1;
				}
				$percentage = ($progress / 6) * 100;
				?>
		  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentage ?>%;">
		    <?php echo round($percentage,2); ?>% Complete
		  </div>
		</div>
	</div>
	


<div class="broken-lines">
</div>
<br>
<?php get_template_part('announcements'); ?>
<div class="broken-lines">
</div>