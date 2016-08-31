

<div class="container main">
	<div class="row">
		<div class="col-md-3 circle">
			<?php if ($current_user->project_involvement != '') {?>
				<?php echo $current_user->project_involvement; ?>
			<?php } else {
				echo 0;
			} ?>
		</div>
		<div class="col-md-3 circle">
			<?php if ($current_user->hospital_visits != '') {?>
				<?php echo $current_user->hospital_visits; ?>
			<?php } else {
				echo 0;
			} ?>
		</div>
		<div class="col-md-3 circle">
			<?php if ($current_user->formations_seminar != '') {?>
				<?php echo $current_user->formations_seminar; ?>
			<?php } else {
				echo 0;
			} ?>
		</div>
		<div class="col-md-3 circle">
			<?php if ($current_user->child_life_party != '') {?>
				<?php echo $current_user->child_life_party; ?>
			<?php } else {
				echo 0;
			} ?>
		</div>
	</div>
	
	<?php get_template_part('announcements'); ?>
</div>