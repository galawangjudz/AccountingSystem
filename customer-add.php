<?php

include('header.php');

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
					</div>
					<div class="col-xs-4">		
						<div class="form-group">
							<label class="control-label">First Name: </label>
							<input type="text" class="form-control margin-bottom copy-input required" name="customer_first_name" id="customer_first_name" tabindex="2">	
						</div>
					</div>
					<div class="col-xs-4">		
						<div class="form-group">
							<label class="control-label">Middle Name: </label>
							<input type="text" class="form-control margin-bottom copy-input" name="customer_middle_name" id="customer_middle_name" tabindex="3">	
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-4">		
						<div class="form-group">
							<label class="control-label">Address: </label>
							<input type="text" class="form-control margin-bottom copy-input required" name="customer_address" id="customer_address" tabindex="4">		
						</div>
					</div>
					<div class="col-xs-4">		
						<div class="form-group">
							<label class="control-label">City/Province: </label>
							<input type="text" class="form-control margin-bottom copy-input required" name="customer_city_prov" id="customer_city_prov" tabindex="5">	
						</div>
					</div>
					<div class="col-xs-4">		
						<div class="form-group">
							<label class="control-label">Zip Code: </label>
							<input type="text" class="form-control copy-input required" name="customer_zip_code" id="customer_zip_code" tabindex="6">					
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-6">		
						<div class="form-group">
							<label class="control-label">Contact Number: </label>
							<input type="text" class="form-control required" name="customer_phone" id= "customer_phone" tabindex="8">
						</div>
					</div>
					<div class="col-xs-6">		
						<div class="form-group">
							<label class="control-label">Email Address: </label>
							<div class="input-group float-right margin-bottom">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" class="form-control copy-input required" name="customer_email" id="customer_email" aria-describedby="sizing-addon1" tabindex="9">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 margin-top btn-group">
					<input type="submit" id="action_create_customer" class="btn btn-success float-right" value="Create Client" data-loading-text="Creating...">
				</div>
			</div>
		</div>
	</div>
</form>

<?php
	include('footer.php');
?>