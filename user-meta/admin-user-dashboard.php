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
<input type="file" id="fileinput">
<button class="btn" id="update">Update</button>
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
			<td>
				<?php $project_involvement =  get_user_meta($user->ID,'project_involvement',true);
				if ($project_involvement == '') {
					echo 0;
				} else {
					echo $project_involvement;
				}
				?>
			</td>
			<td><?php if ($user->hospital_visits != '') {echo $user->hospital_visits;} else {echo 0;} ?></td>
			<td><?php if ($user->formations_seminar != '') {echo $user->formations_seminar;} else {echo 0;} ?></td>
			<td><?php if ($user->child_life_party != '') {echo $user->child_life_party;} else {echo 0;} ?></td>
			<td>

				<button class="btn" data-toggle="modal" data-target="#editUser<?php echo $user->ID ?>">Edit</button>
				<?php if ($user->project_involvement == '' && $user->hospital_visits == '' && $user->formations_seminar == '') {?><button id="delete" class="btn" onclick="if (confirm('Are you sure you want to delete <?php echo $user->user_firstname.' '.$user->user_lastname ?>?')){deleteUser(<?php echo $user->ID ?>)}">Delete</button><?php } ?>
								<!-- Modal -->
				<div class="modal fade" id="editUser<?php echo $user->ID ?>" tabindex="-1" role="dialog" aria-labelledby="User<?php echo $user->ID ?>">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Edit User: <?php echo $user->user_firstname.' '.$user->user_lastname; ?></h4>
				      </div>
				      <div class="modal-body">
				        <form class="form-horizontal">
				        	<div class="form-group">
				        		<label class="control-label col-sm-5" for="project-involvement">Projects Involvement: </label>
				        		<div class="col-sm-5">
				        			<input type="text" class="form-control" id="project-involvement">
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<label class="control-label col-sm-5" for="hospital-visits">Hospital Visits: </label>
				        		<div class="col-sm-5">
				        			<input type="text" class="form-control" id="hospital-visits">
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<label class="control-label col-sm-5">Formations Seminar: </label>
				        		<div class="col-sm-5">
				        			<input type="text" class="form-control" id="formations-seminar">
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<label class="control-label col-sm-5">Child Life Party: </label>
				        		<div class="col-sm-5">
				        			<input type="text" class="form-control" id="child-life-party">
				        		</div>
				        	</div>
				        </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div>
				  </div>
				</div>


				<?php if ($user->project_involvement == '' && $user->hospital_visits == '' && $user->formations_seminar == '') {?><button id="delete" onclick="if (confirm('Are you sure you want to delete '+ '<?php echo $user->user_firstname ?>')){deleteUser(<?php echo $user->ID ?>)}">Delete</button><?php } ?>

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
	            
	            location.reload();
	       }
	});
	alert("Updated");
})
</script>

<script>
var users = [];
jQuery(document).ready(function() {
  document.getElementById('fileinput').addEventListener('change', readSingleFile, false);

});


function readSingleFile(evt){
	users = [];
	var f = evt.target.files[0];
	if (f) {
		var r = new FileReader();
		r.onload = function(e) {
			var contents = e.target.result;
			
			var lines = contents.split('\n');
			
			var headers = lines[0].split(",");
			console.log(headers);
			for (var i = 1; i < lines.length-1; i++) {
				var obj = {};
				var currentline = lines[i].split(",");

				for (var j = 0; j < headers.length+1; j++) {
					if (j == headers.length-1){
						console.log(headers[j]);
					}
					var column = headers[j];
					obj[column] = currentline[j];
				}
				users.push(obj);
			}
			console.log("file loaded");
			console.log(users);
		}
		var text = r.readAsText(f);
	}
}
</script>

<script>
jQuery('button[id=update]').click(function(e) {
	e.preventDefault();
	console.log(users);
	for (user in users){
		var query = "action=update_user&user=" + users[user]['Username'] + "&project_involvement=" + 
	        users[user]["Project Involvement"] + "&hospital_visits=" +  users[user]["Hospital Visits"] +
	       "&formations_seminar=" +  users[user]["Formations Seminar"] + "&child_life_party=" + 
	        users[user]["Child Life Party"] + "&email=" +  users[user]["Email"] + "&first_name=" +
	        users[user]["First Name"] + "&last_name=" + users[user]["Last Name"];
	        console.log(query);
		jQuery.ajax({
	       type: "POST",
	       url: ajaxurl,
	       data: query,

	       success: function(msg){
	            jQuery('.vehicle-value-box').html(msg+",00€");
	            
	            alert("Updated");
	            location.reload();
	       }
	});
	}
	
})
</script>
