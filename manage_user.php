<?php 
include('includes/config.php');
if(isset($_GET['id'])){
$user = $mysqli->query("SELECT * FROM users where user_id =".$_GET['id']);
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
}
?>
<div class="container-fluid">
	
	<form action="" id="manage-user">
		<input type="hidden" name="user_id" value="<?php echo isset($meta['user_id']) ? $meta['user_id']: '' ?>">
		<div class="form-group">
			<label for="name">Last Name</label>
			<input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo isset($meta['last_name']) ? $meta['last_name']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="name">First Name</label>
			<input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo isset($meta['first_name']) ? $meta['first_name']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="name">Middle Name</label>
			<input type="text" name="middle_name" id="middle_name" class="form-control" value="<?php echo isset($meta['middle_name']) ? $meta['middle_name']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="name">Email Address</label>
			<input type="text" name="email_address" id="email_address" class="form-control" value="<?php echo isset($meta['email_address']) ? $meta['email_address']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="name">Contact Number</label>
			<input type="text" name="phone" id="phone" class="form-control" value="<?php echo isset($meta['phone']) ? $meta['phone']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="name">Date Hired</label>
			<div class="input-group date margin-bottom" id="hire_date" required>
				<input type="text" class="form-control hire_date required" value="<?php echo isset($meta['date_hired']) ? $meta['date_hired']: '' ?>" name="date_hired" id = "date_hired" placeholder="YYYY-MM-DD" data-date-format="<?php echo DATE_FORMAT ?>" >		
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>	
		</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" class="form-control" value="<?php echo isset($meta['username']) ? $meta['username']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control" value="<?php echo isset($meta['password']) ? $meta['user_id']: '' ?>" required>
		</div>
		<div class="form-group">
			<style>
				select:invalid { color: gray; }
			</style>
			<label class="control-label">User Type: </label>
			<select name="user_type" id="user_type" class="form-control">
				<option value="SOS" <?php echo isset($meta['user_type']) && $meta['user_type'] == "IT Admin" ? 'selected': '' ?>>Sales Operation Supervisor</option>
				<option value="COO"<?php echo isset($meta['user_type']) && $meta['user_type'] == "COO" ? 'selected': '' ?>> COO</option>
				<option value="IT Admin"<?php echo isset($meta['user_type']) && $meta['user_type'] == "IT Admin" ? 'selected': '' ?>>IT Admin</option>
				<option value="Agent" <?php echo isset($meta['user_type']) && $meta['user_type'] == "Agent" ? 'selected': '' ?>>Agent</option>
				<option value="CA" <?php echo isset($meta['user_type']) && $meta['user_type'] == "CA Supervisor" ? 'selected': '' ?>>CA Supervisor</option>
				<option value="Cashier" <?php echo isset($meta['user_type']) && $meta['user_type'] == "Cashier" ? 'selected': '' ?>>Cashier</option>
			</select>
		</div>
	</form>
</div>
<script>
	$('#manage-user').submit(function(e){
		e.preventDefault();
		start_load()
		$.ajax({
			url:'ajax.php?action=save_user',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp == 1){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)
				}
				else{
				console.log()
            	alert("An error occured2")
			}
		},
		error:err=>{
            console.log()
            alert("An error occured")
        }
		})
	})
</script>