<?php
	include('header.php');
	include('functions.php');
	$getID = $_GET['id'];
// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}
// the query
$query = "SELECT * FROM users WHERE user_id = '" . $mysqli->real_escape_string($getID) . "'";
$result = mysqli_query($mysqli, $query);
// mysqli select query
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		$last_name = $row['last_name']; // name
		$first_name = $row['first_name']; // name
		$middle_name = $row['middle_name']; // name
		$username = $row['username']; // username
		$email = $row['email']; // username
		$date_hired = $row['date_hired']; // username
		$phone = $row['phone']; // username
		$password = $row['password']; // password
	}
}
/* close connection */
$mysqli->close();
?>
<h2>Edit User</h2>
<hr>
<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>				
<form method="post" id="update_user">
<div class="box_big">
	<div class="main_box">
		<input type="hidden" name="action" value="update_user">
		<div class="row">
			<div class="col-xs-12">
				<label class="control-label">User ID: </label>
				<b><input type="text" class="form-control margin-bottom required" name="id" value="<?php echo $getID; ?>"></b>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label class="control-label">Last Name: </label>
				<input type="text" class="form-control margin-bottom required" id="last_name" name="last_name" value="<?php echo $last_name; ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label class="control-label">First Name: </label>
				<input type="text" class="form-control margin-bottom required" id="first_name" name="first_name" value="<?php echo $first_name; ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label class="control-label">Middle Name: </label>
				<input type="text" class="form-control margin-bottom" id="middle_name" name="middle_name" value="<?php echo $middle_name; ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label class="control-label">Email Address: </label>
				<input type="text" class="form-control margin-bottom required" id="email" name="email" value="<?php echo $email; ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label class="control-label">Contact Number: </label>
				<input type="text" class="form-control margin-bottom required" id="phone" name="phone" value="<?php echo $phone; ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label">Date Hired: </label>
					<div class="input-group date margin-bottom" id="hire_date">
						<input type="text" class="form-control hire_date required" name="date_hired" id = "date_hired" data-date-format="<?php echo DATE_FORMAT ?>" value="<?php echo $date_hired; ?>" tabindex="17">		
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>	
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<style>
						select:invalid { color: gray; }
					</style>
					<label class="control-label">User Type: </label>
					<select name="user_type" id="user_type" class="form-control" tabindex ="18">
						<option value="SOS" <?php if($usertype === 'SOS'){?>selected<?php }?>>Sales Operation Supervisor</option>
						<option value="COO" <?php if($usertype === 'COO'){?>selected<?php }?>>COO</option>
						<option value="IT Admin" <?php if($usertype === 'IT Admin'){?>selected<?php }?>>IT Admin</option>
						<option value="Agent" <?php if($usertype === 'Agent'){?>selected<?php }?>>Agent</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label class="control-label">Username: </label>
				<input type="text" class="form-control margin-bottom required" id="username" name="username" value="<?php echo $username; ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label class="control-label">Password: </label>
				<input type="password" class="form-control" name="password1" id="password1" placeholder="Enter user's new password, if left empty it won't change.">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 margin-top btn-group">
				<input type="submit" id="action_update_user" class="btn btn-success float-right" value="Edit User" data-loading-text="Editing...">
			</div>
		</div>
	</div>
</div>
</form>
<div class="row">
</div>
<?php
	include('footer.php');
?>