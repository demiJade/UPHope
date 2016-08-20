<?php global $query_string; // required
/**
* The template for displaying institutions.
*
* Template Name: Admin User Management Dashboard
* 
* 
*
*/
get_header('admin');
?>
<?php $args = array(
	'role' => 'Subscriber',
); ?>
<?php $users = get_users($args); ?>
<table>
	<tr>
		<th>Name</th>
		<th>Project Involvement</th>
		<th>Hospital Visits</th>
		<th>Formations Seminar</th>
		<th>Child Life Party</th>
		<th>Actions</th>
	</tr>
	<?php foreach ($users as $user) { ?>
		<tr>
			<td><?php echo $user->user_firstname; ?> <?php echo $user->user_lastname; ?></td>
			<td><?php if ($user->project_involvement != '') {echo $user->project_involvement;} else {echo 0;} ?></td>
			<td><?php if ($user->hospital_visits != '') {echo $user->project_involvement;} else {echo 0;} ?></td>
			<td><?php if ($user->formations_seminar != '') {echo $user->project_involvement;} else {echo 0;} ?></td>
			<td><?php if ($user->child_life_party != '') {echo $user->project_involvement;} else {echo 0;} ?></td>
			<td>
				<button>Edit</button>
				<?php if ($user->project_involvement == '' && $user->hospital_visits == '' && $user->formations_seminar == '') {?><button id="delete" onclick="deleteUser(<?php echo $user->ID ?>)">Delete</button><?php } ?>
			</td>
		</tr>
	<?php } ?>
</table>

<script type="text/javascript">
	function deleteUser(user_id){
		jQuery.ajax({
			type: "POST",
			url: ajaxurl,
			data: "action=delete_user&id=" + user_id,
			success: function(msg){
				alert("Deleted");
				location.reload();
			}
		})
	}
</script>

<script>
jQuery('button[type=submit]').click(function(e) {
	e.preventDefault();
	var name = document.getElementById("project-name");
	var project_id = name.options[name.selectedIndex].value;
	jQuery.ajax({
	       type: "POST",
	       url: ajaxurl,
	       data: "action=signup&id="+project_id+"&user="+'<?php echo $current_user->user_firstname ?>' + " " + '<?php echo $current_user->user_lastname ?>',  
	       success: function(msg){
	            jQuery('.vehicle-value-box').html(msg+",00€");
	            alert("Updated");
	            location.reload();
	       }
	});
})
</script>