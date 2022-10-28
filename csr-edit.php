



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
	$customer_address_abroad = $row['c_address_abroad']; // customer address
	$customer_city_prov= $row['c_city_prov']; // customer city_prov
	$customer_zip_code = $row['c_zip_code']; // customer zip_code
	$customer_address_2 = $row['c_address_abroad']; // customer address abroad

	$birth_date = $row['c_birthday']; // customer birthday
	$customer_age = $row['c_age']; // customer age

	$customer_phone = $row['c_mobile_no']; // customer phone number
	$customer_email = $row['c_email']; // customer email
	$customer_viber= $row['c_viber_no']; // customer viber
	$customer_gender = $row['c_sex']; // customer gender
	$civil_status = $row['c_civil_status']; // customer civil status
	$employment_status = $row['c_employment_status']; // customer employement status

	$lot_id = $row['c_lot_lid'];
	$lot_area = $row['c_lot_area'];
	$price_sqm = $row['c_price_sqm'];
	$lot_discount = $row['c_lot_discount'];
	$lot_discount_amt = $row['c_lot_discount_amt'];
	$house_model = $row['c_house_model'];
	$floor_area = $row['c_floor_area'];
	$house_price_sqm = $row['c_house_price_sqm'];
	$house_discount = $row['c_house_discount'];
	$house_discount_amt = $row['c_house_discount_amt'];
	$tcp_discount = $row['c_tcp_discount'];
	$tcp_discount_amt = $row['c_tcp_discount_amt'];
	$tcp = $row['c_tcp'];
	$vat_amt_computed = $row['c_vat_amount'];
	$net_tcp = $row['c_net_tcp'];
	$net_tcp1 = $row['c_net_tcp'];
	$reservation = $row['c_reservation'];
	$payment_type1 = $row['c_payment_type1'];
	$payment_type2 = $row['c_payment_type2'];
	$down_percent = $row['c_down_percent'];
	$net_dp = $row['c_net_dp'];
	$no_payments = $row['c_no_payments'];
	$monthly_down = $row['c_monthly_down'];
	$first_dp = $row['c_first_dp'];
	$full_down = $row['c_full_down'];
	$amt_financed = $row['c_amt_financed'];
	$terms = $row['c_terms'];
	$interest_rate = $row['c_interest_rate'];
	$fixed_factor = $row['c_fixed_factor'];
	$monthly_payment = $row['c_monthly_payment'];
	$start_date = $row['c_start_date'];
	$csr_status = $row['c_csr_status'];
	$date_created = $row['c_date_created'];
	$date_updated = $row['c_date_updated'];
}
}

/* close connection */
$mysqli->close();

?>

<script type="text/javascript">
	


	function opentab(evt, tabName) {
		// Declare all variables
		var i, tabcontent, tablinks;
	  
		// Get all elements with class="tabcontent" and hide them
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
		  tabcontent[i].style.display = "none";
		}
	  
		// Get all elements with class="tablinks" and remove the class "active"
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
		  tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
	  
		// Show the current tab, and add an "active" class to the button that opened the tab
		document.getElementById(tabName).style.display = "block";
		evt.currentTarget.className += " active";

	  }
	  function showTab(){
			
		/*  document.getElementById('Buyer').style.display="block"; */
		/* document.getElementById('down_percent').style.display="hidden";  */
	  }

	
	  


</script>
<body>
		

	
		<h2>Edit CSR #<span class="csr_type"></span> <?php echo $getID; ?></h2>
		<hr>
		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>
		<!-- Tab links -->
		<div class="tab">
			<button class="tablinks" onclick="opentab(event, 'Buyer')" id="onlink1" onkeyup="tabclicked1()">Buyer's Profile</button>
			<button class="tablinks" onclick="opentab(event, 'Investment')" id="onlink2" onkeyup="tabclicked2()">Investment Value</button>
			<button class="tablinks" onclick="opentab(event, 'Payment')" id="onlink3" onkeyup="tabclicked3()">Payment Computation</button>
			<button class="tablinks" onclick="opentab(event, 'Agents and Commission')" id="onlink4" onkeyup="tabclicked4()">Agents and Commission</button>
		</div>

		<form method="post" id="update_csr">
			<input type="hidden" name="action" value="update_csr">
			<input type="hidden" name="update_id" value="<?php echo $getID; ?>">
			
			<div id="Buyer" class="tabcontent">
	<!-- 	<form method="post" id="create_csr">
			<input type="hidden" name="action" value="create_csr"> -->
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="titles">Buyer's Information Details</div>
							<a href="#" class="float-right select-customer"><b>OR</b> Select Existing Customer</a>
							<div class="clear"></div>
						</div>
						<div class="panel-body form-group form-group-sm">
						<div class="main_box">
						<div class="row">
							<div class="col-xs-6">		
								<label class="control-label">Date of Sale: </label>
								<div class="input-group date margin-bottom" id="dos">
									<input type="text" class="form-control required date-of-sale" value= "" id ="date_of_sale" name = "date_of_sale" tabindex =1 data-date-format="<?php echo DATE_FORMAT ?>" value="<?php echo $customer_date_of_sale; ?>" />
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
							<div class="col-xs-6">
								<label class="control-label">CSR No: <label>
								<div class="input-group col-xs-12">
									<span class="input-group-addon">#<?php echo CSR_PREFIX ?></span>
									<input type="text" name="csr_id" id="csr_id" class="form-control required" aria-describedby="sizing-addon1" tabindex =2 value=" <?php echo $getID; ?>">
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4">		
								<div class="form-group">
								<label class="control-label">Last Name: </label>
									<input type="text" class="form-control margin-bottom required" name="customer_last_name_1" id="customer_last_name_1" placeholder="Buyer 1 Last Name" tabindex="3" value="<?php echo $customer_last_name_1; ?>">
								</div>
								<div class="form-group">
									<input type="text" class="form-control margin-bottom" name="customer_last_name_2" id="customer_last_name_2" placeholder="Buyer 2 Last Name" tabindex="6" value="<?php echo $customer_last_name_2; ?>">	
								</div>
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<label class="control-label">First Name: </label>
									<input type="text" class="form-control margin-bottom required" name="customer_first_name_1" id="customer_first_name_1" placeholder="Buyer 1 First Name" tabindex="5" value="<?php echo $customer_first_name_1; ?>">
								</div>
								<div class="form-group">
									<input type="text" class="form-control margin-bottom" name="customer_first_name_2" id="customer_first_name_2" placeholder="Buyer 2 First Name" tabindex="7" value="<?php echo $customer_first_name_2; ?>">	
								</div>	
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<label class="control-label">Middle Name: </label>
									<input type="text" class="form-control margin-bottom" name="customer_middle_name_1" id="customer_middle_name_1" placeholder="Buyer 1 Middle Name" tabindex="5" value="<?php echo $customer_middle_name_1; ?>">
								</div>
								<div class="form-group">
									<input type="text" class="form-control margin-bottom" name="customer_middle_name_2" id="customer_middle_name_2" placeholder="Buyer 2 Middle Name" tabindex="8" value="<?php echo $customer_middle_name_2; ?>">	
								</div>
							</div>
						</div>
	  						<hr>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label class="control-label">Address in the Philippines (Required): </label>
										<input type="text" class="form-control margin-bottom required" name="customer_address_1" id="customer_address_1" tabindex="9" value="<?php echo $customer_address_1; ?>">
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label class="control-label">City/Province: </label>
										<input type="text" class="form-control margin-bottom required" name="customer_city_prov" id="customer_city_prov" tabindex="10" value="<?php echo $customer_city_prov; ?>">
									</div>	
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label class="control-label">Zip Code: </label>
										<input type="text" class="form-control margin-bottom required" name="customer_zip_code" id="customer_zip_code" tabindex="11" value="<?php echo $customer_zip_code; ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-8">
									<div class="form-group">
										<label class="control-label">Address Abroad (if any): </label>
										<input type="text" class="form-control margin-bottom" name="customer_address_2" id="customer_address_2" tabindex="12" value="<?php echo $customer_address_2; ?>">
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label class="control-label">Birthdate: </label>
										<div class="input-group date margin-bottom" id="birth_date">
											<input type="text" class="form-control birth_day required" name="birth_day" id = "birth_day" placeholder="YYYY-MM-DD"  tabindex ="13" data-date-format="<?php echo DATE_FORMAT ?>" value="<?php echo $birth_date; ?>" >		
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>	
									</div>
								</div>
								<div class="col-xs-1">
									<div class="form-group">
										<label class="control-label">Age: </label>
										<input type="text" class="form-control margin-bottom required" name="customer_age" id="customer_age" tabindex="14" value="<?php echo $customer_age; ?>">
									</div>
								</div>	
							</div>
	  						<hr>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label class="control-label">Contact Number: </label>
										<input type="text" class="form-control margin-bottom required" name="customer_phone" id="customer_phone" tabindex="15" value="<?php echo $customer_phone; ?>">
									</div>	
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label class="control-label">Viber Account: </label>
										<input type="text" class="form-control margin-bottom" name="customer_viber" id="customer_viber" tabindex="16" value="<?php echo $customer_viber; ?>">
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label class="control-label">Email Address: </label>
										<div class="input-group float-right margin-bottom">
											<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
											<input type="text" class="form-control margin-bottom required" name="customer_email" id="customer_email" tabindex="17" value="<?php echo $customer_email; ?>">
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
										<select name="customer_gender" id="customer_gender" class="form-control" tabindex = "18" require>
												<option value="M" <?php if($customer_gender === 'M'){?>selected<?php }?>>Male</option>
												<option value="F" <?php if($customer_gender === 'F'){?>selected<?php }?>>Female</option>
										</select>
									
									</div>
								</div>
								<div class="col-xs-4">
									<label class="control-label">Civil Status: </label>
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
								<div class="col-xs-4">
									<label class="control-label">Employment Status: </label>
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
	</div>
			<div id="Investment" class="tabcontent">
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
							<div class="titles">Investment Value</div>
								<!-- <a href="#" class="float-right select-customer"><b>OR</b> Select Existing Customer</a>  -->
								<div class="clear"></div>
							</div>
							<div class="panel-body form-group form-group-sm">
								<div class="lot_box">
									<div class="titles">Lot</div>
									<hr>
									<div class="row">
										<div class="col-xs-3">
											<!-- <div class="form-group" tabindex = "21">	
											<?php getProject(); ?>
											</div> -->
											<input type="hidden" class="form-control margin-bottom copy-input" name="l_lid" id="l_lid"  value="<?php echo $lot_id; ?>">
											<div class="form-group">
												<label class="control-label">Phase: </label>
												<input type="text" class="form-control margin-bottom copy-input" name="l_site" id="l_site" readonly tabindex="21">
											</div>
										</div>
										<div class="col-xs-3">
											<div class="form-group">
												<label class="control-label">Block: </label>
												<input type="text" class="form-control margin-bottom copy-input" name="l_block" id="l_block" readonly tabindex="22">
											</div>
										</div>
										<div class="col-xs-3">
											<div class="form-group">
												<label class="control-label">Lot: </label>
												<input type="text" class="form-control margin-bottom copy-input" name="l_lot" id="l_lot" readonly alt="" tabindex="23">
											</div>
										</div>
										<div class="col-xs-3">
											<div class="form-group">
												<br>
												<input type="submit" class="btn btn-success float-right select-lot" value="Find Lot" data-loading-text="Finding..." id="btnfind" tabindex ="37">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label class="control-label">Lot Area: </label>
												<input type="text" class="form-control margin-bottom lot-area" name="lot_area" id="lot_area" readonly placeholder="Lot Area" tabindex="24" value="<?php echo $lot_area; ?>"> 
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label class="control-label">Price/SQM: </label>
												<input type="text" class="form-control margin-bottom price-sqm" name="price_per_sqm" id="price_per_sqm" readonly placeholder="Price/SQM" tabindex="25" value="<?php echo $price_sqm; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label class="control-label">Amount: </label>
												<input type="text" class="form-control margin-bottom l-amount" name="amount" id="amount" readonly placeholder="Amount" tabindex="26" value="<?php echo $lot_area * $price_sqm; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-group">
												<label class="control-label">Discount (%): </label>
												<input type="text" class="form-control margin-bottom lot-disc" name="lot_disc" id="lot_disc" placeholder="%" tabindex="27" value="<?php echo $lot_discount; ?>">
											</div>
										</div>
										<div class="col-xs-8">
											<div class="form-group">
												<label class="control-label">Discount Amount: </label>
												<input type="text" class="form-control margin-bottom lot-disc-amt" name="lot_disc_amt" id="lot_disc_amt" readonly placeholder="Disc Amt" tabindex="28" value="<?php echo $lot_discount_amt; ?>">
											</div>
										</div>
									</div>	
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label class="control-label">Lot Contract Price: </label>
												<input type="text" class="form-control margin-bottom l-lcp" name="lcp" id="lcp" placeholder="LCP" tabindex="29" value=" <?php echo $lcp =($lot_area * $price_sqm) - $lot_discount_amt; ?>" >
											</div>
										</div>
									</div>
								</div>
								<div class="house_box">
									<div class="titles">House</div>
									<hr>
									<div class="row">
										<div class="col-xs-12">		
											<div class="form-group">
												<label class="control-label">House Model: </label>
												<?php echo $house_model; ?>
												<?php getHouseModel(); ?>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label class="control-label">Floor area: </label>
												<input type="text" class="form-control margin-bottom floor-area" name="floor_area" id="floor_area" placeholder="Floor Area" tabindex="31" value="<?php echo $floor_area; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label class="control-label">House Price/SQM: </label>
												<input type="text" class="form-control margin-bottom h-price-sqm"  name="h_price_per_sqm" id="h_price_per_sqm" placeholder="Price/SQM" tabindex="32" value="<?php echo $house_price_sqm; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-5">
											<div class="form-group">
												<label class="control-label">House Discount(%): </label>
												<input type="text" class="form-control margin-bottom house-disc" name="house_disc" id="house_disc" placeholder="%" tabindex="33" value="<?php echo $house_discount; ?>">
											</div>
										</div>
										<div class="col-xs-7">
											<div class="form-group">
												<label class="control-label">House Discount Amount: </label> 
												<input type="text" class="form-control margin-bottom h-disc-amt" name="house_disc_amt" id="house_disc_amt" placeholder="Disc Amt" tabindex="34" value="<?php echo $house_discount_amt; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label class="control-label">House Contract Price: </label>
												<input type="text" class="form-control margin-bottom house-hcp" name="hcp" id="hcp" placeholder="HCP" tabindex="35" value="<?php echo $hcp = ($floor_area * $house_price_sqm) - $house_discount_amt; ?>">
											</div>
										</div>	
									</div>		
								</div>
								<div class="space"></div>
								<div class="main_box">
									<div class="row">
										<div class="col-xs-3">
											<div class="form-group">
												<label class="control-label">TCP Discount:</label>
											</div>
										</div>
										<div class="col-xs-3" >
											<div class="form-group">
												<input type="text" class="form-control margin-bottom tcp-disc"  name="tcp_disc" id="tcp_disc" placeholder="%" tabindex = '36' value="<?php echo $tcp_discount; ?>">
											</div>
										</div>
										<div class="col-xs-2">
											<div class="form-group">
												<label class="control-label">TCP Disc. Amount:</label>
											</div>
										</div>
										<div class="col-xs-4" >
											<div class="form-group">
												<input type="text" class="form-control margin-bottom tcp-disc-amt" readonly name="tcp_disc_amt" id="tcp_disc_amt" placeholder="Amount" tabindex = '37' value="<?php echo $tcp_discount_amt; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-3">
											<div class="form-group">
												<label class="control-label">Total Contract Price:</label>
											</div>
										</div>
										<div class="col-xs-9">
											<div class="form-group">
												<input type="text" class="form-control margin-bottom total-tcp" readonly name="total_tcp" id="total_tcp" placeholder="TCP" tabindex = '38' value="<?php echo $tcp; ?>">
												<input type="hidden" name="invoice_discount" id="invoice_discount">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-3">
											<div class="form-group">
												<label class="control-label">VAT:</label>
											</div>
										</div>
										<div class="col-xs-3" >
											<div class="form-group">
											<input type="text" class="form-control margin-bottom vat-amt" name="vat_amt" id="vat_amt" placeholder="Vat Amount" tabindex = '39' onkeyup='getVat()' value="<?php echo $vat_percent = $net_tcp / $vat_amt_computed; ?>" >
											</div> 
										</div> 
										<div class="col-xs-2">
											<div class="form-group">
												<label class="control-label">VAT Amount:</label>
											</div>
										</div>
										<div class="col-xs-4" >
											<div class="form-group">
											<input type="text" class="form-control margin-bottom vat-amt-computed" name="vat_amt_computed" id="vat_amt_computed" tabindex = '39' value="<?php echo $vat_amt_computed; ?>" >
											</div> 
										</div> 
									</div>
									<div class="row">
										<div class="col-xs-3">
											<div class="form-group">
												<label class="control-label">NET Total Contract Price:</label>
											</div>
										</div>
										<div class="col-xs-9">
										<input type="text" class="form-control margin-bottom net-tcp"  name="net_tcp" readonly id="net_tcp" tabindex = '40' value="<?php echo $net_tcp; ?>">
											<input type="hidden" name="total_net_tcp" id="total_net_tcp">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>		
				</div>	 
			</div>
			<div id="Payment" class="tabcontent">
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="titles">Payment Computation</div>
							</div>
							<div class="panel-body form-group form-group-sm">
								<div class="main_box">
									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label class="control-label">Total Selling Price:</label>
												<input type="text" class="form-control margin-bottom required net-tcp-1" name="net_tcp1" id="net_tcp1" placeholder="Net tcp" tabindex = "1" value="<?php echo $net_tcp1; ?>" >
											</div>
										</div>
										<div class="col-xs-6">	
											<div class="form-group">
												<label class="control-label">Reservation: </label>
												<input type="text" class="form-control margin-bottom required reservation-fee" name="reservation" id="reservation" placeholder="Reservation"  tabindex ="1"  value="<?php echo $reservation; ?>">
											</div>
										</div>
									</div>
								</div>
	  							<div class="space"></div>
								<div class="payment_box">
									<div class="col-xs-12"  id = "pay_type1">	
										<label class="control-label">Payment Type 1: </label>
										<div class="form-group">
										<style>
											select:invalid { color: gray; }
										</style>
									
										<select name="payment_type1" id="payment_type1" class="form-control required payment-type1" id= "payment_type1" tabindex = "2">
											<option name="payment_type1" value="Partial DownPayment" <?php if($payment_type1 === 'Partial DownPayment'){ ?> selected <?php }?>>Partial DownPayment</option>
											<option name="payment_type1" value="Full DownPayment" <?php if($payment_type1 === 'Full DownPayment'){?>selected<?php }?>>Full DownPayment</option>
											<option name="payment_type1" value="No DownPayment" <?php if($payment_type1 === 'No DownPayment'){?>selected<?php }?>>No DownPayment</option>
											<option name="payment_type1" value="Spot Cash" <?php if($payment_type1 === 'Spot Cash'){?>selected<?php }?>>Spot Cash</option>
										</select>
										<script> <?php echo "payment_type1_changed();"; ?> </script>
									</div>	
								</div>
								</div>
								<div class="payment_box2">
									<div class="col-xs-12 " id= "pay_type2">
										<label class="control-label">Payment Type 2: </label>
										<div class="form-group">
											<style>
												select:invalid { color: gray; }
											</style>
											<select name="payment_type2" id="payment_type2" class="form-control required payment-type2" tabindex = "3" >
												<option name="payment_type2" value="Monthly Amortization" <?php if($payment_type2 === 'Monthly Amortization'){?>selected<?php }?>>Monthly Amortization</option>
												<option name="payment_type2" value="Deferred Cash Payment" <?php if($payment_type2 === 'Deferred Cash Payment'){?>selected<?php }?>>Deferred Cash Payment</option>
											</select>	
										</div>
									</div>
								</div>
								<div class="space"></div>
								<div class="payment_box" id="p1">
									<div class="col-xs-12">
										<div class="form-group down-frm" id= "down_frm" >
											<label class="control-label">Down %: </label>
											<input type="text" class="form-control margin-bottom required down-percent" name="down_percent" id="down_percent"  tabindex="4" value="<?php echo $down_percent; ?>">
											<label class="control-label">Net DP: </label>
											<input type="text" class="form-control margin-bottom required net-dp" name="net_dp" id="net_dp"  tabindex="5" value="<?php echo $net_dp; ?>">
											<label class="control-label" id= "no_pay_text"># Payments : </label>
											<input type="text" class="form-control margin-bottom required no-payment" name="no_payment" id="no_payment"  maxlength= "2" placeholder="No of Payment" tabindex="6" value="<?php echo $no_payments; ?>">
											<label class="control-label" id = "mo_down_text">Monthly Down: </label>
											<input type="text" class="form-control margin-bottom required monthly-down" name="monthly_down" id="monthly_down" placeholder="Monthly Down" tabindex="7" value="<?php echo $monthly_down; ?>">
											<label class="control-label">First DP: </label>
											<div class="input-group date margin-bottom" id="down_start_date">
												<input type="text" class="form-control required first-dp-date" name="first_dp_date" id = "first_dp_date" placeholder="First DP Date" tabindex ="8" data-date-format="<?php echo DATE_FORMAT ?>" value="<?php echo $first_dp; ?>"/>
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
											<label class="control-label">Full Down: </label>
											<div class="input-group date margin-bottom" id="down_end_date">
												<input type="text" class="form-control required full-down-date" name="full_down_date" id = "full_down_date" placeholder="Full Down Date" tabindex ="9" data-date-format="<?php echo DATE_FORMAT ?>" value="<?php echo $full_down; ?>"/>
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
										</div>
									</div>
								</div>		
								<div class="payment_box2" id="p2">	
									<div class="col-xs-12">
										<label class="control-label" id='loan_text'>Amount to be Financed:</label>
										<input type="text" class="form-control margin-bottom required amt-to-be-financed" name="amt_to_be_financed" id="amt_to_be_financed"  tabindex="10" value="<?php echo $amt_financed ; ?>">
										<div class="form-group monthly-frm" id = "monthly_frm">
											<label class="control-label">Terms: </label>
											<input type="text" class="form-control margin-bottom required terms-count" name="terms" id="terms" tabindex="11" value="<?php echo $terms ; ?>">
											<label class="control-label" id='rate_text'>Interest Rate: </label>
											<input type="text" class="form-control margin-bottom required interest-rate" name="interest_rate" id="interest_rate"  placeholder="Interest Rate" tabindex="12" value="<?php echo $interest_rate; ?>">
											<label class="control-label" id='factor_text' >Fixed Factor: </label>
											<input type="text" class="form-control margin-bottom required fixed-factor" name="fixed_factor" id="fixed_factor"  placeholder="Fixed Factor" tabindex="13" value="<?php echo $fixed_factor; ?>">
											<label class="control-label">Monthly Payment: </label>
											<input type="text" class="form-control margin-bottom required monthly-amor" name="monthly_amortization" id="monthly_amortization"  tabindex="14" value="<?php echo $monthly_payment; ?>">	
										</div>
										<label class="control-label" id= "start_text">Start Date: </label>	
										<div class="input-group date margin-bottom" id="mo_start_date">
											<input type="text" class="form-control required mo-start-date" name="start_date" id = "start_date" placeholder="Start Date" tabindex ="15" data-date-format="<?php echo DATE_FORMAT ?>" value="<?php echo $start_date; ?>" />
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="Agents and Commission" class="tabcontent">
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
							<div class="titles">Agents and Commission</div>
								<div class="clear"></div>
							</div>
							<div class="panel-body form-group form-group-sm">
								<table class="table table-bordered table-hover table-striped" id="comm_table">
									<thead>
										<tr>
											<th width="500">
												<h4><a href="#" class="btn btn-success btn-xs add-row"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a> Agents</h4>
											</th>
											<th  width="90">
												<h4>Position</h4>
											</th>
											<th width="90">
												<h4>Code</h4>
											</th>
											<th width="150">
												<h4>Rate</h4>
											</th>
											<th width="200">
												<h4>Amount</h4>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="form-group form-group-sm  no-margin-bottom">
													<a href="#" class="btn btn-danger btn-xs delete-row"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
													<input type="text" class="form-control form-group-sm item-input agent-name" name="agent_name[]" placeholder="Agent Name">
													<p class="item-select"><a href="#">select an agent</a></p>
												</div>
											</td>
											<td class="text-right">
												<div class="form-group form-group-sm no-margin-bottom">
													<input type="text" class="form-control agent-pos" name="agent_position[]" placeholder="Position" readonly>
												</div>
											</td>
											<td class="text-right">
												<div class="input-group input-group-sm  no-margin-bottom">
													<input type="text" class="form-control agent-code" name="agent_code[]" aria-describedby="sizing-addon1" placeholder="Code" readonly >
												</div>
											</td>
											<td class="text-right">
												<div class="form-group form-group-sm  no-margin-bottom">
													<input type="number" class="form-control calculate agent-rate required" name="agent_rate[]"placeholder="Rate" >
												</div>
											</td>
											<td class="text-right">
												<div class="input-group input-group-sm">
													<span class="input-group-addon"><?php echo CURRENCY ?></span>
													<input type="text" class="form-control comm-amt" name="comm_amt[]"  placeholder= "Commission" aria-describedby="sizing-addon1">
												</div>
											</td>
										</tr>
									</tbody>

								</table>
								<hr>
								<div class="space"></div>
								<div class="main_box">
									<div id="invoice_totals" class="padding-right row text-left">
										<div class="row">
											<div class="col-xs-12">
												<label class="control-label">Additional Notes: </label>
												<div class="input-group form-group-sm textarea no-margin-bottom">
													<textarea class-"form-control" name="invoice_notes" id="invoice_notes"></textarea>
												</div>	
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-12 margin-top btn-group">
									<input type="submit" id="action_create_csr" class="btn btn-success float-right btn-l" value="Create CSR" data-loading-text="Creating...">
								</div>

							</div>


						</div>
					</div>
				</div>
				
			</div>
		

			<div class="row">
				
			</div>
		</form>
		</div>	

		<div id="insert_customer" class="modal fade">
			<div class="modal-dialog modal-lg">
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

<div id="insert_lot" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Select Lot</h4>
		</div>
		<div class="modal-body">
				<!-- <input type="text" name="l_code" id="hide_code" value="" >
				<input type="text" name="l_blk" id="hide_blk" value="" >
				<input type="text" name="l_lot" id="hide_lot" value="" > -->
			<?php				
				popLotsList();
			?>
		</div>
		<div class="modal-footer">
			<button type="button" data-dismiss="modal" class="btn">Cancel</button>
		</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->	
</div><!-- /.modal -->

		
<div id="insert" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Select Agent</h4>
			</div>
			<div class="modal-body">
			<?php popAgentsList(); ?>
			</div>
			<div class="modal-footer">
			<button type="button" data-dismiss="modal" class="btn btn-primary" id="selected">Add</button>
			<button type="button" data-dismiss="modal" class="btn">Cancel</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->



		


	</body>
		
				


		
<?php
	
	include('footer.php');
?>
<script>
	function redirectToMail() {
        window.location.href = "http://localhost/ALSC/mail.php";
    }
	function tabclicked1(){
		document.getElementById('activation_text').value='1';
		document.getElementById('onlink1').style.backgroundColor="#ccc";
		document.getElementById('onlink2').style.backgroundColor="#f1f1f1";
		document.getElementById('onlink3').style.backgroundColor="#f1f1f1";
		document.getElementById('onlink4').style.backgroundColor="#f1f1f1";
	}
	function tabclicked2(){
		document.getElementById('activation_text').value='0';
		document.getElementById('onlink1').style.backgroundColor="#f1f1f1";
		document.getElementById('onlink2').style.backgroundColor="#ccc";
		document.getElementById('onlink3').style.backgroundColor="#f1f1f1";
		document.getElementById('onlink4').style.backgroundColor="#f1f1f1";
	}
	function tabclicked3(){
		document.getElementById('activation_text').value='0';
		document.getElementById('onlink1').style.backgroundColor="#f1f1f1";
		document.getElementById('onlink2').style.backgroundColor="#f1f1f1";
		document.getElementById('onlink3').style.backgroundColor="#ccc";
		document.getElementById('onlink4').style.backgroundColor="#f1f1f1";
	
	}
	function tabclicked4(){
		document.getElementById('activation_text').value='0';
		document.getElementById('onlink1').style.backgroundColor="#f1f1f1";
		document.getElementById('onlink2').style.backgroundColor="#f1f1f1";
		document.getElementById('onlink3').style.backgroundColor="#f1f1f1c";
		document.getElementById('onlink4').style.backgroundColor="#ccc";
	}

</script>
