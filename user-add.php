<?php
	include('functions.php');
?>
<h2>Add User</h2>
<hr>
<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
<form method="post" id="add_user">
<div class="box_big">
	<div class="main_box">
		<input type="hidden" name="action" value="add_user">
		<div class="row">
			<div class="col-xs-12">
				<label>User ID:</label>
				<b><input type="text" class="form-control margin-bottom" id="user_id" name="user_id" value="100" readonly></b>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label>Last Name:</label>
				<input type="text" class="form-control margin-bottom required" id="last_name" name="last_name" tabindex='1'>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label>First Name:</label>
				<input type="text" class="form-control margin-bottom required" id="first_name" name="first_name" tabindex='2'>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label>Middle Name:</label>
				<input type="text" class="form-control margin-bottom" id="middle_name" name="middle_name" tabindex='3'>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label>Email Address:</label>
				<input type="text" class="form-control margin-bottom required" id="email" name="email" tabindex='4'>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label>Contact Number:</label>
				<input type="text" class="form-control margin-bottom required" id="phone" name="phone" tabindex='5'>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label">Date Hired: </label>
					<div class="input-group date margin-bottom" id="hire_date" required>
						<input type="text" class="form-control hire_date required" name="date_hired" id = "date_hired" placeholder="YYYY-MM-DD"  tabindex ="6" data-date-format="<?php echo DATE_FORMAT ?>" >		
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
					<select name="user_type" id="user_type" class="form-control" tabindex ="7">
						<option name="user_type" value="SOS" selected>Sales Operation Supervisor</option>
						<option name="user_type" value="COO">COO</option>
						<option name="user_type" value="IT Admin">IT Admin</option>
						<option name="user_type" value="Agent">Agent</option>
						<option name="user_type" value="CA">CA Supervisor</option>
						<option name="user_type" value="Cashier">Cashier</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label>Username:</label>
				<input type="text" class="form-control margin-bottom required" id="username" name="username" tabindex='8'>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label>Password:</label>
				<input type="password" class="form-control" name="password1" id="password1" tabindex='9'>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 margin-top btn-group">
				<input type="submit" id="action_add_user" class="btn btn-success float-right" value="Add User" data-loading-text="Adding...">
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

