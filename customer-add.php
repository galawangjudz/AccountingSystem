<?php
	include('functions.php');

?>
<h2>Add Client</h2>
<hr>
<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
<form method="post" id="create_customer">
	<input type="hidden" name="action" value="create_customer">
	<div class="panel panel-default">
		<div class="panel-body form-group form-group-sm">
			<div class="main_box">
				<div class="row">
					<div class="col-xs-4">		
						<div class="form-group">
							<label class="control-label">Last Name: </label>
							<input type="text" class="form-control margin-bottom copy-input required" name="customer_last_name" id="customer_last_name" tabindex="1">
						</div>
						<div class="form-group">
							<input type="text" class="form-control margin-bottom copy-input" name="b2_customer_last_name" id="b2_customer_last_name" tabindex="2">
						</div>
					</div>
					<div class="col-xs-4">		
						<div class="form-group">
							<label class="control-label">First Name: </label>
							<input type="text" class="form-control margin-bottom copy-input required" name="customer_first_name" id="customer_first_name" tabindex="3">	
						</div>
						<div class="form-group">
							<input type="text" class="form-control margin-bottom copy-input" name="b2_customer_first_name" id="b2_customer_first_name" tabindex="4">
						</div>
					</div>
					<div class="col-xs-4">		
						<div class="form-group">
							<label class="control-label">Middle Name: </label>
							<input type="text" class="form-control margin-bottom copy-input" name="customer_middle_name" id="customer_middle_name" tabindex="5">	
						</div>
						<div class="form-group">
							<input type="text" class="form-control margin-bottom copy-input" name="b2_customer_middle_name" id="b2_customer_middle_name" tabindex="6">
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-4">		
						<div class="form-group">
							<label class="control-label">Address: </label>
							<input type="text" class="form-control margin-bottom copy-input required" name="customer_address" id="customer_address" tabindex="7">		
						</div>
					</div>
					<div class="col-xs-4">		
						<div class="form-group">
							<label class="control-label">City/Province: </label>
							<input type="text" class="form-control margin-bottom copy-input required" name="customer_city_prov" id="customer_city_prov" tabindex="8">	
						</div>
					</div>
					<div class="col-xs-4">		
						<div class="form-group">
							<label class="control-label">Zip Code: </label>
							<input type="text" class="form-control copy-input" name="customer_zip_code" id="customer_zip_code" tabindex="9">					
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-8">
						<div class="form-group">
							<label class="control-label">Address Abroad (if any): </label>
							<input type="text" class="form-control margin-bottom" name="customer_address_2" id="customer_address_2" tabindex="10">
						</div>
					</div>
					<div class="col-xs-3">
						<div class="form-group">
							<label class="control-label">Birthdate: </label>
							<div class="input-group date margin-bottom" id="birth_date">
								<input type="text" class="form-control birth_day required" name="birth_day" id = "birth_day" placeholder="YYYY-MM-DD" data-date-format="<?php echo DATE_FORMAT ?>" tabindex="11">		
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>	
						</div>
					</div>
					<div class="col-xs-1">
						<div class="form-group">
							<label class="control-label">Age: </label>
							<input type="text" class="form-control margin-bottom required" name="customer_age" id="customer_age" tabindex="12" readonly>
						</div>
					</div>	
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-4">
						<div class="form-group">
							<label class="control-label">Contact Number: </label>
							<input type="text" class="form-control margin-bottom required" name="customer_phone" id="customer_phone" tabindex="13">
						</div>	
					</div>
					<div class="col-xs-4">
						<div class="form-group">
							<label class="control-label">Viber Account: </label>
							<input type="text" class="form-control margin-bottom" name="customer_viber" id="customer_viber" tabindex="14">
						</div>
					</div>
					<div class="col-xs-4">
						<div class="form-group">
							<label class="control-label">Email Address: </label>
							<div class="input-group float-right margin-bottom">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="text" class="form-control margin-bottom required" name="customer_email" id="customer_email" tabindex="15">
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
							<select name="customer_gender" id="customer_gender" class="form-control" tabindex = "16" required>
								
									<option name="customer_gender" value="M" selected>Male</option>
									<option name="customer_gender" value="F">Female</option>
							</select>
						</div>
					</div>
					<div class="col-xs-4">
						<label class="control-label">Civil Status: </label>
						<style>
							select:invalid { color: gray; }
						</style>
						<select name="civil_status" id="civil_status" class="form-control" tabindex = "17" required>
						
							<option name="civil_status" value="Single" selected>Single</option>
							<option name="civil_status" value="Married">Married</option>
							<option name="civil_status" value="Divorced">Divorced</option>
							<option name="civil_status" value="Widowed">Widowed</option>
						</select>
					</div>
					<div class="col-xs-4">
						<label class="control-label">Employment Status: </label>
						<style>
							select:invalid { color: gray; }
						</style>
						<select name="employment_status" id="employment_status" class="form-control required" tabindex = "18">
							
							<option name="employment_status" value="Employed" selected>Employed</option>
							<option name="employment_status" value="Self-Employed">Self-Employed</option>
							<option name="employment_status" value="OCW">OCW</option>
							<option name="employment_status" value="Retired">Retired</option>
							<option name="employment_status" value="Others">Others</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 margin-top btn-group">
						<input type="submit" id="action_create_customer" class="btn btn-success float-right" value="Create Client" data-loading-text="Creating...">
					</div>
				</div>
			</div>
		</div>
	</div>
</form>


