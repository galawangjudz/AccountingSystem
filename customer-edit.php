<?php
	include('functions.php');
	$getID = $_GET['id'];
// Connect to the database
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}
// the query
$query = "SELECT * FROM store_customers WHERE id = '" . $mysqli->real_escape_string($getID) . "'";
$result = mysqli_query($mysqli, $query);
// mysqli select query
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {

		$customer_last_name = $row['last_name']; // customer last name
		$customer_first_name = $row['first_name']; // customer first name
		$customer_middle_name = $row['middle_name']; // customer middle name
		$b2_customer_last_name = $row['b2_last_name']; // customer last name
		$b2_customer_first_name = $row['b2_first_name']; // customer first name
		$b2_customer_middle_name = $row['b2_middle_name']; // customer middle name

		$customer_address = $row['address']; // customer address
		$customer_city_prov = $row['city_prov']; // customer city/prov
		$customer_zip_code = $row['zip_code']; // customer zipcode
		$customer_email = $row['email']; // customer email
		$customer_phone = $row['phone']; // customer phone number

		$customer_address_abroad = $row['address_abroad']; // customer zipcode
		$customer_bday = $row['birthdate']; // customer zipcode
		$customer_age = $row['age']; // customer zipcode
		
		$customer_viber = $row['viber']; // customer phone number
		$customer_gender = $row['gender']; // customer phone number
		$civil_status = $row['civil_status']; // customer civil status
		$employment_status = $row['employment_status']; // customer civil status
			
	}
}
/* close connection */
$mysqli->close();
?>
<h2>Update Client</h2>
<hr>
<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
<form method="post" id="update_customer">
	<input type="hidden" name="action" value="update_customer">
	<input type="hidden" name="id" value="<?php echo $getID; ?>">
	<div class="row">
	<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="titles">Client #<?php echo $getID; ?></h4>
					<div class="clear"></div>
				</div>
				<div class="panel-body form-group form-group-sm">
				<div class="main_box">
					<div class="row">
						<div class="col-xs-4">		
							<div class="form-group">
								<label class="control-label">Last Name: </label>
								<input type="text" class="form-control margin-bottom copy-input required" name="customer_last_name" id="customer_last_name" tabindex="1" value="<?php echo $customer_last_name; ?>">
							</div>
							<div class="form-group">
								<input type="text" class="form-control margin-bottom copy-input" name="b2_customer_last_name" id="b2_customer_last_name" value="<?php echo $b2_customer_last_name; ?>" tabindex="2">
							</div>
						</div>
						<div class="col-xs-4">		
							<div class="form-group">
								<label class="control-label">First Name: </label>
								<input type="text" class="form-control margin-bottom copy-input required" name="customer_first_name" id="customer_first_name" tabindex="3" value="<?php echo $customer_first_name; ?>">
							</div>
							<div class="form-group">
								<input type="text" class="form-control margin-bottom copy-input" name="b2_customer_first_name" id="b2_customer_first_name" value="<?php echo $b2_customer_first_name; ?>" tabindex="4">
							</div>
						</div>
						<div class="col-xs-4">		
							<div class="form-group">
								<label class="control-label">Middle Name: </label>
								<input type="text" class="form-control margin-bottom copy-input" name="customer_middle_name" id="customer_middle_name" tabindex="5" value="<?php echo $customer_middle_name; ?>">
							</div>
							<div class="form-group">
								<input type="text" class="form-control margin-bottom copy-input" name="b2_customer_middle_name" id="b2_customer_middle_name" value="<?php echo $b2_customer_middle_name; ?>" tabindex="6">
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-4">		
							<div class="form-group">
								<label class="control-label">Address: </label>
								<input type="text" class="form-control margin-bottom copy-input required" name="customer_address" id="customer_address" value="<?php echo $customer_address; ?>" tabindex="7">		
							</div>
						</div>
						<div class="col-xs-4">		
							<div class="form-group">
								<label class="control-label">City/Province: </label>
								<input type="text" class="form-control margin-bottom copy-input required" name="customer_city_prov" id="customer_city_prov" value="<?php echo $customer_city_prov; ?>" tabindex="8">	
							</div>
						</div>
						<div class="col-xs-4">		
							<div class="form-group">
								<label class="control-label">Zip Code: </label>
								<input type="text" class="form-control copy-input" name="customer_zip_code" id="customer_zip_code" value="<?php echo $customer_zip_code; ?>" tabindex="9">					
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-8">
							<div class="form-group">
								<label class="control-label">Address Abroad (if any): </label>
								<input type="text" class="form-control margin-bottom" name="customer_address_abroad" id="customer_address_abroad" value="<?php echo $customer_address_abroad; ?>" tabindex="10">
							</div>
						</div>
						<div class="col-xs-3">
							<div class="form-group">
								<label class="control-label">Birthdate: </label>
								<div class="input-group date margin-bottom" id="birth_date">
									<input type="text" class="form-control birth_day required" name="customer_bday" id = "customer_bday" data-date-format="<?php echo DATE_FORMAT ?>" value="<?php echo $customer_bday; ?>" tabindex="11">		
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>	
							</div>
						</div>
						<div class="col-xs-1">
							<div class="form-group">
								<label class="control-label">Age: </label>
								<input type="text" class="form-control margin-bottom required" name="customer_age" id="customer_age" value="<?php echo $customer_age; ?>" tabindex="12" readonly>
							</div>
						</div>	
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-4">
							<div class="form-group">
								<label class="control-label">Contact Number: </label>
								<input type="text" class="form-control margin-bottom required" name="customer_phone" id="customer_phone" value="<?php echo $customer_phone; ?>" tabindex="13">
							</div>	
						</div>
						<div class="col-xs-4">
							<div class="form-group">
								<label class="control-label">Viber Account: </label>
								<input type="text" class="form-control margin-bottom" name="customer_viber" id="customer_viber" value="<?php echo $customer_viber; ?>" tabindex="14">
							</div>
						</div>
						<div class="col-xs-4">
							<div class="form-group">
								<label class="control-label">Email Address: </label>
								<div class="input-group float-right margin-bottom">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-control margin-bottom required" name="customer_email" id="customer_email" value="<?php echo $customer_email; ?>" tabindex="15">
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-4">
							<div class="form-group">
								<style>
									select:invalid { color: gray; }
								</style>
								<label class="control-label">Gender: </label>
								<select name="customer_gender" id="customer_gender" class="form-control" tabindex = "18" required>
										<option value="M" <?php if($customer_gender === 'M'){?>selected<?php }?>>Male</option>
										<option value="F" <?php if($customer_gender === 'F'){?>selected<?php }?>>Female</option>
								</select>
							</div>
						</div>
						<div class="col-xs-4">
							<div class="form-group">
								<style>
									select:invalid { color: gray; }
								</style>
								<label class="control-label">Civil Status: </label>
								<select name="civil_status" id="civil_status" class="form-control" tabindex = "19" required>
									<option value="Single" <?php if($civil_status === 'Single'){?>selected<?php }?>>Single</option>
									<option value="Married" <?php if($civil_status === 'Married'){?>selected<?php }?>>Married</option>
									<option value="Divorced" <?php if($civil_status === 'Divorced'){?>selected<?php }?>>Divorced</option>
									<option value="Widowed" <?php if($civil_status === 'Widowed'){?>selected<?php }?>>Widowed</option>
								</select>
							</div>
						</div>
						<div class="col-xs-4">
							<div class="form-group">
								<style>
									select:invalid { color: gray; }
								</style>
								<label class="control-label">Employment Status: </label>
								<select name="employment_status" id="employment_status" class="form-control required" tabindex = "20" required >
									<option value="Employed" <?php if($employment_status === 'Employed'){?>selected<?php }?>>Employed</option>
									<option value="Self-mployed" <?php if($employment_status === 'Self-Employed'){?>selected<?php }?>>Self Employed</option>
									<option value="OCW" <?php if($employment_status === 'OCW'){?>selected<?php }?>>OCSW</option>
									<option value="Retired" <?php if($employment_status === 'Retired'){?>selected<?php }?>>Retired</option>
									<option value="Others" <?php if($employment_status === 'Others'){?>selected<?php }?>>Others</option>
								</select>
							</div>
						</div>
					</div>
				<div class="row">
					<div class="col-xs-12 margin-top btn-group">
						<input type="submit" id="action_update_customer" class="btn btn-success float-right" value="Update Client" data-loading-text="Updating...">
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</form>
<?php
	include('footer.php');
?>