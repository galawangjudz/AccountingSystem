



<?php

include('header.php');
include('functions.php');

$getID = $_GET['id'];


// Connect to the database
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}

// the query
$query = "SELECT * FROM t_csr WHERE c_csr_no = '" . $mysqli->real_escape_string($getID) . "'";

$result = mysqli_query($mysqli, $query);

// mysqli select query
if($result) {

while ($row = mysqli_fetch_assoc($result)) {

	$customer_date_of_sale = $row['c_date_of_sale'];
	// buyer
	$customer_last_name_1 = $row['c_b1_last_name']; // customer last name
	$customer_first_name_1 = $row['c_b1_first_name']; // customer first name
	$customer_middle_name_1 = $row['c_b1_middle_name']; // customer middle name
	$customer_last_name_2 = $row['c_b2_last_name']; // customer last name 2
	$customer_first_name_2 = $row['c_b2_first_name']; // customer first name 2
	$customer_middle_name_2 = $row['c_b2_middle_name']; // customer middle name 2

	// more details
	
	$customer_address_1 = $row['c_address']; // customer address
	$customer_city_prov= $row['c_city_prov']; // customer city_prov
	$customer_zip_code = $row['c_zip_code']; // customer zip_code
	$customer_address_2 = $row['c_address_abroad']; // customer address abroad

	$birth_date = $row['c_birthday']; // customer birthday
	$customer_age = $row['c_age']; // customer age

	$customer_phone = $row['c_mobile_no']; // customer phone number
	$customer_email = $row['c_email']; // customer civil status
	$customer_viber= $row['c_viber_no']; // customer viber
	$customer_gender = $row['c_sex']; // customer phone number
	$civil_status = $row['c_civil_status']; // customer civil status
	$employment_status = $row['c_employment_status']; // customer civil status

}
}

/* close connection */
$mysqli->close();

?>
		<h2>Edit CSR #<?php echo $getID; ?> </h2>
		<!-- <hr> -->

		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>

		<form method="post" id="update_csr">
			<input type="hidden" name="action" value="update_csr">
			<input type="hidden" name="update_id" value="<?php echo $getID; ?>">
			
			<div class="row">
				<div class="col-xs-4">
				
				</div>
				<div class="col-xs-8 text-right">
					
					<div class="col-xs-4 no-padding-right">
				        <div class="form-group">
				            <div class="input-group date" id="date_of_sale">
				                <input type="text" class="form-control required" name="date_of_sale" placeholder="Date of Sale" data-date-format="<?php echo DATE_FORMAT ?>" value="<?php echo $customer_date_of_sale; ?>" />
								<span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
				    </div>
					<div class="row">
						<div class="input-group col-xs-3 float-right">
							<span class="input-group-addon">#<?php echo CSR_PREFIX ?></span>
							<input type="text" name="csr_id"  class="form-control" placeholder="CSR Number" aria-describedby="sizing-addon1" tabindex =2 value=" <?php echo $getID; ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="float-left">Buyer'S Information</h4>
							<a href="#" class="float-right select-customer"><b>OR</b> Select Existing Customer</a>
							<div class="clear"></div>
						</div>
						<div class="panel-body form-group form-group-sm">
							
							<div class="row">

								<div class="col-xs-4">		
									<div class="form-group">
										<label> LAST NAME <label>
									</div>
					
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_last_name_1" id="customer_last_name_1" placeholder="Buyer 1 Last Name" tabindex="3" value="<?php echo $customer_last_name_1; ?>">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_last_name_2" id="customer_last_name_2" placeholder="Buyer 2 Last Name" tabindex="6" value="<?php echo $customer_last_name_2; ?>">	
									</div>
									
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label> FIRST NAME <label>
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_first_name_1" id="customer_first_name_1" placeholder="Buyer 1 First Name" tabindex="4" value="<?php echo $customer_first_name_1; ?>">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_first_name_2" id="customer_first_name_2" placeholder="Buyer 2 First Name" tabindex="7" value="<?php echo $customer_first_name_2; ?>">	
									</div>
									
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label> MIDDLE NAME <label>
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_middle_name_1" id="customer_middle_name_1" placeholder="Buyer 1 Middle Name" tabindex="5" value="<?php echo $customer_middle_name_1; ?>">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_middle_name_2" id="customer_middle_name_2" placeholder="Buyer 2 Middle Name" tabindex="8" value="<?php echo $customer_middle_name_2; ?>">	
									</div>
								</div>

								<div class="col-xs-4">
									<div class="form-group">
										<label> ADDRESS <label>
									</div>
					
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_address_1" id="customer_address_1" placeholder="Address" tabindex="9" value="<?php echo $customer_address_1; ?>">
									</div>
									

								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label> CITY/PROV <label>
									</div>
					
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_city_prov" id="customer_city_prov" placeholder="City/Province" tabindex="10" value="<?php echo $customer_city_prov; ?>">
									</div>
									
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label> ZIP CODE <label>
									</div>
					
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_zip_code" id="customer_zip_code" placeholder="Zipcode" tabindex="11" value="<?php echo $customer_zip_code; ?>">
									</div>
								

								</div>
								<div class="col-xs-8">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_address_2" id="customer_address_2" placeholder="Address Abroad" tabindex="12" value="<?php echo $customer_address_2; ?>">
									</div>
								</div>
								<div class="col-xs-3">
									<div class="input-group date" id="birth_date">
										<input type="text" class="form-control required" name="birth_date" id = "birth_date" placeholder="Birthday Date" tabindex ="13"  data-date-format="<?php echo DATE_FORMAT ?>" value="<?php echo $birth_date; ?>" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>

									
								</div>
								<div class="col-xs-1">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_age" id="customer_age" placeholder="Age" tabindex="14" value="<?php echo $customer_age; ?>">
									</div>
								</div>	
								<div class="col-xs-4">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_phone" id="customer_phone" placeholder="Contact Number" tabindex="15" value="<?php echo $customer_phone; ?>">
									</div>	
									
									<div class="form-group">
										<style>
											select:invalid { color: gray; }
										</style>
										<select name="customer_gender" id="customer_gender" class="form-control" tabindex = "18" require>
												<option value="M" <?php if($customer_gender === 'M'){?>selected<?php }?>>Male</option>
												<option value="F" <?php if($customer_gender === 'F'){?>selected<?php }?>>Female</option>
										</select>
									</div>

								</div>
								<div class="col-xs-4">
									
									<div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_viber" id="customer_viber" placeholder="Viber Account" tabindex="16"value="<?php echo $customer_viber; ?>">
									</div>
									<div class="form-group">
										<style>
											select:invalid { color: gray; }
										</style>
										<select name="civil_status" id="civil_status" class="form-control" tabindex = "19"required>
											<option value="Single" <?php if($civil_status === 'Single'){?>selected<?php }?>>Single</option>
											<option value="Married" <?php if($civil_status === 'Married'){?>selected<?php }?>>Married</option>
											<option value="Divorced" <?php if($civil_status === 'Divorced'){?>selected<?php }?>>Divorced</option>
											<option value="Widowed" <?php if($civil_status === 'Widowed'){?>selected<?php }?>>Widowed</option>
										</select>
									</div>
								</div>

								<div class="col-xs-4">
									
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_email" id="customer_email" placeholder="Email Address" tabindex="17"value="<?php echo $customer_email; ?>">
									</div>
									<div class="form-group">
										<style>
											select:invalid { color: gray; }
										</style>
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
							
						</div>
					</div>
				</div>
				
				
			</div>

		 	<div class="row">
				<!-- <div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="float-left">Investment Value</h4>
							<a href="#" class="float-right select-customer"><b>OR</b> Select Existing Customer</a> 
							<div class="clear"></div>
						</div>
						<div class="panel-body form-group form-group-sm">
							
							<div class="row">
							

								<div class="col-xs-5">	
									<div class="col-xs-4">
										<div class="form-group" tabindex = "21">	
											<?php getProject(); ?>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<input type="text" class="form-control margin-bottom copy-input" name="l_block" id="l_block" placeholder="Block" tabindex="22">
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<input type="text" class="form-control margin-bottom copy-input" name="l_lot" id="l_lot" placeholder="Lot" tabindex="23">
										</div>
									</div>
									
									
								</div>

								<div class="col-xs-5">
									<div class="col-xs-2 form-group">
											<input type="submit" id="find_lots" class="btn btn-success float-right" value="Set" data-loading-text="Finding...">
									</div>
									
								</div>
								<div class="col-xs-5">
									
									<div class="col-xs-12">
									
										<div class="col-xs-12">
											<label> Lot Area </label>
											<input type="text" class="form-control margin-bottom" name="lot_area" id="lot_area" placeholder="Lot Area" tabindex="24">
										</div>
										<div class="col-xs-12">
											<label> Price/SQM </label>
											<input type="text" class="form-control margin-bottom" name="price_per_sqm" id="price_per_sqm" placeholder="Price/SQM" tabindex="25">
										</div>
										<div class="col-xs-12">
											<label> Amount </label>
											<input type="text" class="form-control margin-bottom" name="amount" id="amount" placeholder="Amount" tabindex="26">
										</div>
										<div class="col-xs-4">
											
											<label><h7> Disc(%)</h7> </label>
											<input type="text" class="form-control margin-bottom" name="lot_disc" id="lot_disc" placeholder="%" tabindex="27">
										</div>
										<div class="col-xs-8">
											<label> <h7> Disc Amount </h7> </label>
											<input type="text" class="form-control margin-bottom" name="lot_disc_amt" id="lot_disc_amt" placeholder="Disc Amt" tabindex="28">
										
										</div>
										<div class="col-xs-12">
											<label> LCP </label>
											<input type="text" class="form-control margin-bottom" name="lcp" id="lcp" placeholder="LCP" tabindex="29">
										</div>
									</div>

									



								</div>
								<div class="col-xs-5">
									<div class="col-xs-12">
										<label> House Model</label>
										<input type="text" class="form-control margin-bottom" name="house_model" id="house_model" placeholder="House Model" tabindex="30">
									</div>
									<div class="col-xs-12">
										<label> Floor area </label>
										<input type="text" class="form-control margin-bottom" name="floor_area" id="floor_area" placeholder="Floor Area" tabindex="31">
									</div>
									<div class="col-xs-12">
										<label> H Price/SQM </label>
										<input type="text" class="form-control margin-bottom"  name="price_per_sqm" id="price_per_sqm" placeholder="Price/SQM" tabindex="32">
									</div>
									<div class="col-xs-4">
										
										<label><h7> H Disc(%)</h7> </label>
										<input type="text" class="form-control margin-bottom" name="house_disc" id="house_disc" placeholder="%" tabindex="33">
									</div>
									<div class="col-xs-8">
										<label> <h7> H Disc Amount </h7> </label>
										<input type="text" class="form-control margin-bottom" name="house_disc_amt" id="house_disc_amt" placeholder="Disc Amt" tabindex="34">
									
									</div>
									<div class="col-xs-12">
										<label> HCP </label>
										<input type="text" class="form-control margin-bottom" name="hcp" id="hcp" placeholder="HCP" tabindex="35">
									</div>
								</div>


								



							</div>
							
						<hr> 


						<div class="col-xs-6">
							<div class="row">
								<div class="col-xs-3">
									<strong>TCP Discount:</strong>
								</div>
								<div class="col-xs-6">
									
									<div class="col-xs-4" >
										<input type="text" class="form-control margin-bottom"  name="" id="" placeholder="%" tabindex = '36'>
									</div>
									<div class="col-xs-8" >
										<input type="text" class="form-control margin-bottom"  disabled = "disabled" name="" id="" placeholder="Amount">
									</div>

								</div>
							</div>
							<div class="row">
								<div class="col-xs-3">
									<strong>TCP:</strong>
								</div>
								<div class="col-xs-6">
									
									<input type="text" class="form-control margin-bottom" disabled = "disabled" name="" id="" placeholder="TCP">
									<input type="hidden" name="invoice_discount" id="invoice_discount">
								</div>
							</div>
							
							<?php if (ENABLE_VAT == true) { ?>
							<div class="row">
								<div class="col-xs-3">
									<strong>VAT:</strong><br>Remove VAT <input type="checkbox" class="remove_vat">
								</div>
								
								<div class="col-xs-6" >
									<input type="text" class="form-control margin-bottom"  name="" id="" placeholder="Vat Amount">
									<input type="hidden" name="invoice_vat" id="invoice_vat">
								</div>
							</div>
							<?php } ?>
							<div class="row">
								<div class="col-xs-3">
									<strong>NET TCP:</strong>
								</div>
								<div class="col-xs-6">
								<input type="text" class="form-control margin-bottom"  name="" disabled = "disabled" id="" placeholder="NET TCP">
									<input type="hidden" name="invoice_total" id="invoice_total">
								</div>
							</div>
						</div>




						</div>
					</div>
				</div>			 -->
			</div>
		
			<div id="invoice_totals" class="padding-right row text-right">
				<div class="col-xs-6">
					<div class="input-group form-group-sm textarea no-margin-bottom">
						<textarea class-"form-control" name="invoice_notes" placeholder="Additional Notes..."></textarea>
					</div>

					
				</div>

					<div class="col-xs-6 margin-top btn-group">
						<input type="submit" id="action_edit_csr" class="btn btn-success float-right" value="Update CSR" data-loading-text="Creating...">
					</div>
			

			</div>
			<div class="row">
				
			</div>
		</form>
		


		<div id="insert_customer" class="modal fade">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Select An Existing Customer</h4>
		      </div>
		      <div class="modal-body">
				<?php popCustomersList(); ?>
		      </div>
		      <div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
				
<?php
	include('footer.php');
?>