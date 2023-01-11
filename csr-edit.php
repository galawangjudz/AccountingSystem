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
$query = "SELECT * FROM t_csr WHERE c_csr_no = '" . $mysqli->real_escape_string($getID) . "'";

$result = mysqli_query($mysqli, $query);

// mysqli select query
if($result) {

while ($row = mysqli_fetch_assoc($result)) {



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
	$remarks = $row['c_remarks'];
	$date_created = $row['c_date_created'];
	$date_updated = $row['c_date_updated'];

	if ($vat_amt_computed == 0){
		$vat_percent = 0.00;
	}else{
		$vat_percent = round(($vat_amt_computed / $tcp) * 100,2) ;
		
	}
}
}

/* close connection */


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
			
		document.getElementById('Buyer').style.display="block";
		
		var l_payment_type1 = $('.payment-type1').val();
	/* 	$('#payment_type2').removeAttr('disabled'); */
		$('#loan_text').text("Amount to be financed :");
		$('#down_frm').show();
		$('#monthly_frm').show();
		$('#no_pay_text').show();
		$('#no_payment').show();
		$('#mo_down_text').show();
		$('#monthly_down').show();
		$('#down_text').show();
		$('#start_text').text("Start Date :");	
		$('#ma_text').text("Monthly Amortization ");
		//alert(l_payment_type1);
		if (l_payment_type1 == "Spot Cash"){
	/* 		$('#payment_type2').attr('disabled','disable'); */
			$('#down_frm').hide();
			$('#monthly_frm').hide();
			$('#down_text').hide();
			$('#p1').hide();
			document.getElementById('p2').style.width='100%';
			document.getElementById('p2').style.marginLeft='0%';

			$('#loan_text').text("Amount :");
			$('#start_text').text("Pay Date :");	
			$('#ma_text').text("Spot Cash Payment ");
		} else if(l_payment_type1 == "Full DownPayment"){
			
			$('#no_pay_text').hide();
			$('#no_payment').val(0);
			$('#no_payment').hide();
			$('#mo_down_text').hide();
			$('#monthly_down').val(0);
			$('#monthly_down').hide();
			$('#p1').show();
			document.getElementById('p2').style.width='49%';
			document.getElementById('p2').style.marginLeft='2%';
			compute_net_dp();
			compute_no_payment();
			compute_rate();
			compute_monthly_payments();
			
			
		} else if(l_payment_type1 == "No DownPayment"){
			$('#down_text').hide();
			l_a = $('.net-tcp').val();
			l_b = $('.reservation-fee').val();
			$('#down_frm').hide();
			/* $('#no_payment').val('1'); */
			$('#mo_down_text').hide();
			l_sdate = $('.first-dp-date').val();
			$('#p1').hide();
			document.getElementById('p2').style.width='100%';
			document.getElementById('p2').style.marginLeft='0%';
			
			$('#start_date').val(l_sdate);

			var l_c = parseFloat(l_a) - parseFloat(l_b);
			$('#amt_to_be_financed').val(l_c.toFixed(2))
			$("#down_percent").val(0);
			$("#net_dp").val(0);
			$("#no_payment").val(0);
			$("#monthly_down").val(0);
			compute_net_dp();
			compute_no_payment();
			compute_rate();
			compute_monthly_payments();
			
		}else{
			$('#p1').show();
			document.getElementById('p2').style.width='49%';
			document.getElementById('p2').style.marginLeft='2%';
			compute_net_dp();
			compute_no_payment();
			compute_rate();
			compute_monthly_payments();
			
		}

	

	var l_payment_type2 = $('.payment-type2').val();

	if (l_payment_type2 == "Deferred Cash Payment"){
	$('#loan_text').text("Amount to be financed :");
	$('#interest_rate').show();
	$('#fixed_factor').show();
	$('#monthly_frm').show();
	$('#rate_text').show()
	$('#factor_text').show()
	$('#ma_text').text("Monthly Amortization ");
	
	}else if (l_payment_type2 == "Deferred Cash Payment"){
		$('#ma_text').text("Deferred Cash Payment ");
		$('#loan_text').text("Deferred Amount:");
		$("#interest_rate").val(0);
		$("#fixed_facotr").val(0);
		$('#rate_text').hide()
		$('#factor_text').hide()
		$('#interest_rate').hide();
		$('#fixed_factor').hide();
	
	}

}

</script>
<body onload="showTab()">
		
		
	
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
			<input type="hidden" name="username" value="<?php echo  $_SESSION['username'] ?>">
            <div id="Buyer" class="tabcontent">
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="titles">Buyer's Information Details</div>
							<div class="clear"></div>
						</div>
					<div class="panel-body form-group form-group-sm">
						<table class="table table-bordered table-hover table-striped" id="buyer_table">
							<thead>
								<tr>
									<th width="100">
                                        <h4><a href="#" class="btn btn-success btn-xs add-buyer-row"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a> Add Buyers</h4>
									</th>
                                    <th width="800">
                                        <h4>Buyer's Details</h4>
                                    </th>
								</tr>
							</thead>
							<tbody>
                            <?php
                               

                                $getID = $_GET['id'];

                                // Connect to the database
                                $mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

                                // output any connection error
                                if ($mysqli->connect_error) {
                                    die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
                                }

                                // the query
                                $query2 = "SELECT * FROM t_csr_buyers WHERE c_csr_no = '" . $mysqli->real_escape_string($getID) . "'";

                                $result2 = mysqli_query($mysqli, $query2);

                                // mysqli select query
                                if($result2) {

                                while ($row = mysqli_fetch_assoc($result2)) {
                                    $buyer_count = $row['c_buyer_count']; // customer buyers no
                                    $customer_last_name_1 = $row['last_name']; // customer last name
                                    $customer_suffix_name_1 = $row['suffix_name']; // customer suffix name
                                    $customer_first_name_1 = $row['first_name']; // customer first name
                                    $customer_middle_name_1 = $row['middle_name']; // customer middle name
                                    $customer_address_1 = $row['address']; // customer address
                                    $customer_zip_code = $row['zip_code']; // customer zip_code
                                    $customer_address_abroad = $row['address_abroad']; // customer address abroad
                                    $citizenship = $row['citizenship'];
                                    $id_presented = $row['id_presented'];
                                    $tin_no = $row['tin_no'];
                                    $birth_date = $row['birthdate']; // customer birthday
                                    $customer_age = $row['age']; // customer age
                                        
                                    $contact_no = $row['contact_no']; // customer phone 
                                    $contact_abroad = $row['contact_abroad']; // customer phone number
                                    $customer_email = $row['email']; // customer civil status
                                    $customer_viber= $row['viber']; // customer viber
                                    $customer_gender = $row['gender']; // customer phone number
                                    $civil_status = $row['civil_status']; // customer civil status

                                    $civil_status = $row['civil_status']; // customer civil status
                                    $relationship = $row['relationship'];
                                ?>

								<tr>
									<td>
										<div class="form-group form-group-sm  no-margin-bottom">
                                            <a href="#" class="btn btn-danger btn-xs delete-buyer-row"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
									   
                                            <p class="select-customer"> <a href="#" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> select a buyer</a></p>
								
										</div>
									</td>
									<td>
                                        <div class="main_box">
                                            <div class="row">
                                                <div class="col-xs-3">		
                                                    <div class="form-group">
                                                    <label class="control-label">Last Name: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-last required" name="last_name[]" value="<?php echo $customer_last_name_1 ?>" >
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-xs-3">		
                                                    <div class="form-group">
                                                    <label class="control-label">Suffix Name: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-suffix" name="suffix_name[]" value="<?php echo $customer_suffix_name_1 ?>">
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-xs-3">
                                                    <div class="form-group">
                                                        <label class="control-label">First Name: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-first required" name="first_name[]" value="<?php echo $customer_first_name_1 ?>" >
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-xs-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Middle Name: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-middle" name="middle_name[]" value="<?php echo $customer_middle_name_1 ?>">
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Citizenship: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-ctzn required" name="citizenship[]" value="<?php echo $citizenship ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xs-2">
                                                    <label class="control-label">Civil Status: </label>
                                                    <style>
                                                        select:invalid { color: gray; }
                                                    </style>
                                                    <select name="civil_status[]" id="civil_status" class="form-control buyer-civil required">
                                                    
                                                    <option value="Single" <?php if($civil_status === 'Single'){?>selected<?php }?>>Single</option>
                                                    <option value="Married" <?php if($civil_status === 'Married'){?>selected<?php }?>>Married</option>
                                                    <option value="Divorced" <?php if($civil_status === 'Divorced'){?>selected<?php }?>>Divorced</option>
                                                    <option value="Widowed" <?php if($civil_status === 'Widowed'){?>selected<?php }?>>Widowed</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-2">
                                                    <div class="form-group">
                                                        <style>
                                                            select:invalid { color: gray; }
                                                        </style>
                                                        <label class="control-label">Gender: </label>
                                                        <select name="gender[]" id="customer_gender" class="form-control buyer-gender required">
                                                            
                                                            <option value="M" <?php if($customer_gender === 'M'){?>selected<?php }?>>Male</option>
                                                            <option value="F" <?php if($customer_gender === 'F'){?>selected<?php }?>>Female</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Birthdate: </label>
                                                        <div class="input-group date margin-bottom" id="birth_date">
                                                            <input type="text" class="form-control buyer-bday required" name="birth_day[]" value="<?php echo $birth_date ?>" placeholder="YYYY-MM-DD" data-date-format="<?php echo DATE_FORMAT ?>" >		
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>	
                                                    </div>
                                                </div>
                                                <div class="col-xs-1">
                                                    <div class="form-group">
                                                        <label class="control-label">Age: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-age required" name="age[]" value="<?php echo $customer_age ?>">
                                                    </div>
                                                </div>	
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Type of Valid ID Presented: </label>
                                                        <input type="text" class="form-control margin-bottom" name="id_presented[]" value="<?php echo $id_presented ?>">
                                                    </div>	
                                                </div>
                                                <div class="col-xs-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Tin #: </label>
                                                        <input type="text" class="form-control margin-bottom" name="tin_no[]" value="<?php echo $tin_no ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xs-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Contact Number: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-contact required" name="contact_no[]" value="<?php echo $contact_no ?>">
                                                    </div>	
                                                </div>
                                                <div class="col-xs-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Viber Account: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-viber" name="viber[]" value="<?php echo $customer_viber ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xs-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Email Address: </label>
                                                        <div class="input-group float-right margin-bottom">
                                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                            <input type="text" class="form-control margin-bottom buyer-email required" name="email[]" value="<?php echo $customer_email ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-9">
                                                    <div class="form-group">
                                                        <label class="control-label">Residential/Billing Address: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-address required" name="address[]" value="<?php echo $customer_address_1 ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xs-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Area Code : </label>
                                                        <input type="text" class="form-control margin-bottom buyer-zipcode required" name="zip_code[]" value="<?php echo $customer_zip_code ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xs-9">
                                                    <div class="form-group">
                                                        <label class="control-label">Address Abroad (if any): </label>
                                                        <input type="text" class="form-control margin-bottom buyer-add-abroad" name="address_abroad[]" value="<?php echo $customer_address_abroad ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xs-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Contact Number Abroad : </label>
                                                        <input type="text" class="form-control margin-bottom" name="contact_abroad[]" value="<?php echo $contact_abroad ?>">
                                                    </div>
                                                </div>
                                            </div>  

										 	<div class="col-xs-2">
												<div class="form-group">
													<style>
														select:invalid { color: gray; }
													</style>
													<label class="control-label">Relationship: </label>
													<select name="relationship[]" id="relationship" class="form-control required">
															<option name="customer_gender" value="0" <?php if($relationship === '0'){?>selected<?php }?>>None</option>
															<option name="customer_gender" value="1" <?php if($relationship === '1'){?>selected<?php }?>>And</option>
															<option name="customer_gender" value="2" <?php if($relationship === '2'){?>selected<?php }?>>Spouses</option>
															<option name="customer_gender" value="3" <?php if($relationship === '3'){?>selected<?php }?>>Married To</option>
															<option name="customer_gender" value="4" <?php if($relationship === '4'){?>selected<?php }?>>Minor/Represented by Legal Guardian</option>
													</select>
												</div>
											</div>
                                        </div>

                                    </td>	
								</tr>
                                <?php
                                }}

                                $mysqli->close();

                                ?>
							</tbody>
						</table>
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
										
											<?php 

												// Connect to the database
												$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

												// output any connection error
												if ($mysqli->connect_error) {
													die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
												}

												// the query
												$query3 = "SELECT * 
												FROM t_lots  WHERE c_lid = '" . $mysqli->real_escape_string($lot_id) . "'";

												$result3 = mysqli_query($mysqli, $query3);

												//var_dump($result2);

												// mysqli select query
												if($result3) {
													while ($rows = mysqli_fetch_assoc($result3)) {

														//var_dump($rows);
														$phase = $rows['c_site'];
														$block = $rows['c_block'];
														$lot = $rows['c_lot'];
													}
												}

												?>
																							
											<input type="hidden" class="form-control margin-bottom copy-input" name="l_lid" id="l_lid"  value="<?php echo $lot_id; ?>">
											<div class="form-group">
												<label class="control-label">Phase: </label>
												<input type="text" class="form-control margin-bottom copy-input" name="l_site" id="l_site" readonly tabindex="21" value="<?php get_acronym($phase); ?>">
											</div>
										</div>
										<div class="col-xs-3">
											<div class="form-group">
												<label class="control-label">Block: </label>
												<input type="text" class="form-control margin-bottom copy-input" name="l_block" id="l_block" readonly tabindex="22" value="<?php echo $block; ?>">
											</div>
										</div>
										<div class="col-xs-3">
											<div class="form-group">
												<label class="control-label">Lot: </label>
												<input type="text" class="form-control margin-bottom copy-input" name="l_lot" id="l_lot" readonly alt="" tabindex="23" value="<?php echo $lot; ?>">
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
										<input type="hidden" class="form-control margin-bottom copy-input" name="l_house_lid" id="l_house_lid" >
										<div class="col-xs-12">		
											<div class="form-group">
												<label class="control-label">House Model: </label>
												<input type="text" class="form-control margin-bottom house-model" name="house_model" id="house_model" value="<?php echo $house_model ?>" tabindex="31">
												</select>
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
											<input type="text" class="form-control margin-bottom vat-percent" name="vat_percent" id="vat_percent" placeholder="Vat Amount" tabindex = '39' value="<?php echo $vat_percent; ?>" >
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
									
										<select name="payment_type1" id="payment_type1" class="form-control required payment-type1" tabindex = "2">
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
												<option name="payment_type2" value="None" <?php if($payment_type2 === 'None'){?>selected<?php }?>>None</option>
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
												<input type="text" class="form-control first-dp-date" name="first_dp_date" id = "first_dp_date" placeholder="First DP Date" tabindex ="8" data-date-format="<?php echo DATE_FORMAT ?>" value="<?php echo $first_dp; ?>"/>
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
											<label class="control-label">Full Down: </label>
											<div class="input-group date margin-bottom" id="down_end_date">
												<input type="text" class="form-control full-down-date" name="full_down_date" id = "full_down_date" placeholder="Full Down Date" tabindex ="9" data-date-format="<?php echo DATE_FORMAT ?>" value="<?php echo $full_down; ?>"/>
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
									<?php 

											// Connect to the database
											$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

											// output any connection error
											if ($mysqli->connect_error) {
												die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
											}

											// the query
											$query2 = "SELECT * FROM t_csr_commission WHERE c_csr_no = '" . $mysqli->real_escape_string($getID) . "'";
											
											$result2 = mysqli_query($mysqli, $query2);

											//var_dump($result2);

											// mysqli select query
											if($result2) {
												while ($rows = mysqli_fetch_assoc($result2)) {

													//var_dump($rows);

													$agent_name = $rows['c_agent'];
													$position = $rows['c_position'];
													$code = $rows['c_code'];
													$rate = $rows['c_rate'];
													$amount = $rows['c_amount'];

											?>
										<tr>
											<td>
												<div class="form-group form-group-sm  no-margin-bottom">
													<a href="#" class="btn btn-danger btn-xs delete-row"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
													<input type="text" class="form-control form-group-sm item-input agent-name" name="agent_name[]" placeholder="Agent Name" value="<?php echo $agent_name; ?>">
													<p class="item-select"><a href="#">select an agent</a></p>
												</div>
											</td>
											<td class="text-right">
												<div class="form-group form-group-sm no-margin-bottom">
													<input type="text" class="form-control agent-pos" name="agent_position[]" placeholder="Position" readonly value="<?php echo $position; ?>">
												</div>
											</td>
											<td class="text-right">
												<div class="input-group input-group-sm  no-margin-bottom">
													<input type="text" class="form-control agent-code" name="agent_code[]" aria-describedby="sizing-addon1" placeholder="Code" readonly value="<?php echo $code; ?>">
												</div>
											</td>
											<td class="text-right">
												<div class="form-group form-group-sm  no-margin-bottom">
													<input type="number" class="form-control calculate agent-rate required" name="agent_rate[]"placeholder="Rate" value="<?php echo $rate; ?>">
												</div>
											</td>
											<td class="text-right">
												<div class="input-group input-group-sm">
													<span class="input-group-addon"><?php echo CURRENCY ?></span>
													<input type="text" class="form-control comm-amt" name="comm_amt[]"  placeholder= "Commission" aria-describedby="sizing-addon1" value="<?php echo $amount; ?>"> 
												</div>
											</td>
										</tr>
										<?php } } ?>
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
													<textarea class-"form-control" name="invoice_notes" id="invoice_notes"><?php echo $remarks ; ?></textarea>
												</div>	
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-12 margin-top btn-group">
									<input type="submit" id="update_csr" class="btn btn-success float-right btn-l" value="Update CSR" data-loading-text="Creating...">
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
        window.location.href = "./mail.php";
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


	

	function validateForm() {
	    // error handling
	    var errorCounter = 0;

	    $(".required").each(function(i, obj) {

	        if($(this).val() === ''){
	            $(this).parent().addClass("has-error");
	            errorCounter++;
	        } else{ 
	            $(this).parent().removeClass("has-error"); 
	        }

	    });
		
	    return errorCounter;

	}

	$('#update_csr').submit(function(e){
		e.preventDefault();
	 	start_load() 
		var errorCounter = validateForm();
		if (errorCounter > 0) {
			/* alert("It appear's you have forgotten to complete something!","warning");	 */
			$("#response .message").html("<strong>" + "Warning" + "</strong>: " + "It appear's you have forgotten to complete something!");
			$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();  
            end_load()
		}else{

			$(".required").parent().removeClass("has-error")
			
			$.ajax({
				url:'ajax.php?action=update_csr',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
                        $("#response .message").html("<strong>" + "Success" + "</strong>: " + "Data successfully saved");
						$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
						$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
                        setTimeout(function(){
							$(".modal").removeClass("visible");
							$(".modal").modal('hide');
							end_load()
						},1500)

						setTimeout(function(){
							location.reload()
						},3000)
					}
					else{
                        console.log()
                        $("#response .message").html("<strong> Error  </strong>:"  + "Data unsuccessfully saved");
						$("#response").removeClass("alert-success").addClass("alert-danger").fadeIn();
						$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
                        setTimeout(function(){
							$(".modal").removeClass("visible");
							$(".modal").modal('hide');
							end_load()
						},1500)

						setTimeout(function(){
							location.reload()
						},3000)
				}
			},
			error:err=>{
				console.log()
				alert("An error occured")
			}
			})
		}
	})










</script>