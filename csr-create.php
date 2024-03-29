
<?php
	include('functions.php');
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
	  }
</script>
<style>
#action_create_csr:hover{
  background-color:blue;
}
#action_create_csr{
	background-color:#0038a5;

}
</style>
<body onload="showTab()">
		<h2>Create New <span class="csr_type">RA</span> </h2>
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
		<form method="post" id="create_csr">
			<input type="hidden" name="action" value="create_csr">
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
                                        <h4><a href="#" class="btn btn-success btn-xs add-buyer-row"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a> Add Buyers</h4>
									</th>
                                    <th width="800">
                                        <h4>Buyer's Details</h4>
                                    </th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="form-group form-group-sm  no-margin-bottom">
                                            <a href="#" class="btn btn-danger btn-xs delete-buyer-row"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
									   
                                            <p class="select-customer"> <a href="#" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> select a buyer</a></p>
								
										</div>
									</td>
									<td>
                                        <div class="main_box">
                                            <div class="row">
                                                <div class="col-xs-3">		
                                                    <div class="form-group">
                                                    <label class="control-label">Last Name: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-last required" name="last_name[]" >
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-xs-3">		
                                                    <div class="form-group">
                                                    <label class="control-label">Suffix Name: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-suffix" name="suffix_name[]" >
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-xs-3">
                                                    <div class="form-group">
                                                        <label class="control-label">First Name: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-first required" name="first_name[]" >
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-xs-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Middle Name: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-middle" name="middle_name[]">
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Citizenship: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-ctzn required" name="citizenship[]">
                                                    </div>
                                                </div>
                                                <div class="col-xs-2">
                                                    <label class="control-label">Civil Status: </label>
                                                    <style>
                                                        select:invalid { color: gray; }
                                                    </style>
                                                    <select name="civil_status[]" id="civil_status" class="form-control buyer-civil required">
                                                    
                                                        <option name="civil_status" value="Single" selected>Single</option>
                                                        <option name="civil_status" value="Married">Married</option>
                                                        <option name="civil_status" value="Divorced">Divorced</option>
                                                        <option name="civil_status" value="Widowed">Widowed</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-2">
                                                    <div class="form-group">
                                                        <style>
                                                            select:invalid { color: gray; }
                                                        </style>
                                                        <label class="control-label">Gender: </label>
                                                        <select name="gender[]" id="customer_gender" class="form-control buyer-gender required">
                                                            
                                                                <option name="customer_gender" value="M" selected>Male</option>
                                                                <option name="customer_gender" value="F">Female</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Birthdate: </label>
                                                        <div class="input-group date margin-bottom" id="birth_date">
                                                            <input type="text" class="form-control buyer-bday required" name="birth_day[]" placeholder="YYYY-MM-DD" data-date-format="<?php echo DATE_FORMAT ?>" >		
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>	
                                                    </div>
                                                </div>
                                                <div class="col-xs-1">
                                                    <div class="form-group">
                                                        <label class="control-label">Age: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-age required" name="age[]" >
                                                    </div>
                                                </div>	
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Type of Valid ID Presented: </label>
                                                        <input type="text" class="form-control margin-bottom" name="id_presented[]">
                                                    </div>	
                                                </div>
                                                <div class="col-xs-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Tin #: </label>
                                                        <input type="text" class="form-control margin-bottom" name="tin_no[]">
                                                    </div>
                                                </div>
                                                <div class="col-xs-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Contact Number: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-contact required" name="contact_no[]">
                                                    </div>	
                                                </div>
                                                <div class="col-xs-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Viber Account: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-viber" name="viber[]">
                                                    </div>
                                                </div>
                                                <div class="col-xs-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Email Address: </label>
                                                        <div class="input-group float-right margin-bottom">
                                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                            <input type="text" class="form-control margin-bottom buyer-email required" name="email[]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-9">
                                                    <div class="form-group">
                                                        <label class="control-label">Residential/Billing Address: </label>
                                                        <input type="text" class="form-control margin-bottom buyer-address required" name="address[]">
                                                    </div>
                                                </div>
                                                <div class="col-xs-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Area Code : </label>
                                                        <input type="text" class="form-control margin-bottom buyer-zipcode required" name="zip_code[]">
                                                    </div>
                                                </div>
                                                <div class="col-xs-9">
                                                    <div class="form-group">
                                                        <label class="control-label">Address Abroad (if any): </label>
                                                        <input type="text" class="form-control margin-bottom buyer-add-abroad" name="address_abroad[]">
                                                    </div>
                                                </div>
                                                <div class="col-xs-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Contact Number Abroad : </label>
                                                        <input type="text" class="form-control margin-bottom" name="contact_abroad[]">
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
															<option name="customer_relation" value="0" selected>None</option>
															<option name="customer_relation" value="1">And</option>
															<option name="customer_relation" value="2">Spouses</option>
															<option name="customer_relation" value="3">Married To</option>
															<option name="customer_relation" value="4">Minor/Represented by Legal Guardian</option>

													</select>
												</div>
											</div>
                                        </div>
                                    
                                    </td>	
								</tr>
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
									<!-- <div class="form-group" tabindex = "21">	
									<?php getProject(); ?>
									</div> -->
									<input type="hidden" class="form-control margin-bottom copy-input" name="l_lid" id="l_lid" >
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
										<input type="text" class="form-control margin-bottom lot-area" name="lot_area" id="lot_area" readonly tabindex="24">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label class="control-label">Price/SQM: </label>
										<input type="text" class="form-control margin-bottom price-sqm" name="price_per_sqm" id="price_per_sqm" readonly tabindex="25">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group">
										<label class="control-label">Amount: </label>
										<input type="text" class="form-control margin-bottom l-amount" name="amount" id="amount" readonly tabindex="26">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label class="control-label">Discount (%): </label>
										<input type="text" class="form-control margin-bottom lot-disc" name="lot_disc" id="lot_disc" tabindex="27">
									</div>
								</div>
								<div class="col-xs-8">
									<div class="form-group">
										<label class="control-label">Discount Amount: </label>
										<input type="text" class="form-control margin-bottom lot-disc-amt" name="lot_disc_amt" id="lot_disc_amt" readonly tabindex="28">
									</div>
								</div>
							</div>	
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group">
										<label class="control-label">Lot Contract Price: </label>
										<input type="text" class="form-control margin-bottom l-lcp" name="lcp" id="lcp" tabindex="29">
									</div>
								</div>
							</div>
						</div>
						<div class="house_box">
							<div class="titles">House</div>
							<hr>
							<div class="row">
								<input type="hidden" class="form-control margin-bottom copy-input" name="l_house_lid" id="l_house_lid" >
								<div class="col-xs-6">		
									<div class="form-group">
										<label class="control-label">House Model: </label>
										<input type="text" class="form-control margin-bottom house-model" name="house_model" id="house_model" value = "" tabindex="31">
										</select>
									</div>
								</div>
								<!-- <div class="col-xs-3">
									<div class="form-group">
										<br>
										<input type="submit" class="btn btn-success float-right select-house" value="Find House Model" data-loading-text="Finding..." id="btnfind" tabindex ="37">
									</div>
								</div> -->
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group">
										<label class="control-label">Floor area: </label>
										<input type="text" class="form-control margin-bottom floor-area" name="floor_area" id="floor_area" value = "0" tabindex="31">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group">
										<label class="control-label">House Price/SQM: </label>
										<input type="text" class="form-control margin-bottom h-price-sqm"  name="h_price_per_sqm" id="h_price_per_sqm" value = "0" tabindex="32">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-5">
									<div class="form-group">
										<label class="control-label">House Discount(%): </label>
										<input type="text" class="form-control margin-bottom house-disc" name="house_disc" id="house_disc" value = "0" tabindex="33">
									</div>
								</div>
								<div class="col-xs-7">
									<div class="form-group">
										<label class="control-label">House Discount Amount: </label>
										<input type="text" class="form-control margin-bottom h-disc-amt" name="house_disc_amt" id="house_disc_amt" value = "0" tabindex="34">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group">
										<label class="control-label">House Contract Price: </label>
										<input type="text" class="form-control margin-bottom house-hcp" name="hcp" id="hcp" value= "0" tabindex="35">
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
										<input type="text" class="form-control margin-bottom tcp-disc"  name="tcp_disc" id="tcp_disc" value= "0.00" tabindex = '36'>
									</div>
								</div>
								<div class="col-xs-2">
									<div class="form-group">
										<label class="control-label">TCP Disc. Amount:</label>
									</div>
								</div>
								<div class="col-xs-4" >
									<div class="form-group">
										<input type="text" class="form-control margin-bottom tcp-disc-amt"  value= "0.00" name="tcp_disc_amt" id="tcp_disc_amt" tabindex = '37'>
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
										<input type="text" class="form-control margin-bottom total-tcp" value= "0.00" name="total_tcp" id="total_tcp" tabindex = '38'>
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
									<input type="text" class="form-control margin-bottom vat-percent" value= "0.00" name="vat_percent" id="vat_percent" tabindex = '39' onkeyup='getVat()'>
									</div> 
								</div> 
								<div class="col-xs-2">
									<div class="form-group">
										<label class="control-label">VAT Amount:</label>
									</div>
								</div>
								<div class="col-xs-4" >
									<div class="form-group">
									<input type="text" class="form-control margin-bottom vat-amt-computed" value= "0.00" name="vat_amt_computed" id="vat_amt_computed" tabindex = '39'>
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
								<input type="text" class="form-control margin-bottom net-tcp"  value= "0.00" name="net_tcp" readonly id="net_tcp" tabindex = '40'>
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
										<input type="text" class="form-control margin-bottom required net-tcp-1" name="net_tcp1" id="net_tcp1" value = "0.00" tabindex = "1" >
									</div>
								</div>
								<div class="col-xs-6">	
									<div class="form-group">
										<label class="control-label">Reservation: </label>
										<input type="text" class="form-control margin-bottom required reservation-fee" name="reservation" id="reservation" value="0.00" tabindex ="1" >
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
									<option name="payment_type1" value="Partial DownPayment" selected>Partial DownPayment</option>
									<option name="payment_type1" value="Full DownPayment">Full DownPayment</option>
									<option name="payment_type1" value="No DownPayment">No DownPayment</option>
									<option name="payment_type1" value="Spot Cash">Spot Cash</option>
								</select>	
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
										<option name="payment_type2" value="None" >None</option>
										<option name="payment_type2" value="Monthly Amortization" >Monthly Amortization</option>
										<option name="payment_type2" value="Deferred Cash Payment">Deferred Cash Payment</option>
									</select>	
								</div>
							</div>
						</div>
						<div class="space"></div>
						<div class="payment_box" id="p1">
							<div class="col-xs-12">
								<div class="form-group down-frm" id= "down_frm" >
									<label class="control-label">Down %: </label>
									<input type="text" class="form-control margin-bottom required down-percent" name="down_percent" id="down_percent" value = "0.00" tabindex="4">
									<label class="control-label">Net DP: </label>
									<input type="text" class="form-control margin-bottom required net-dp" name="net_dp" id="net_dp" value= '0.00' tabindex="5">
									<label class="control-label" id= "no_pay_text"># Payments : </label>
									<input type="text" class="form-control margin-bottom required no-payment" name="no_payment" id="no_payment" value= "0.00" maxlength= "2" tabindex="6">
									<label class="control-label" id = "mo_down_text">Monthly Down: </label>
									<input type="text" class="form-control margin-bottom required monthly-down" name="monthly_down" value= '0.00' id="monthly_down" tabindex="7">
									<label class="control-label">First DP: </label>
									<div class="input-group date margin-bottom" id="down_start_date">
										<input type="text" class="form-control first-dp-date" name="first_dp_date" id = "first_dp_date" tabindex ="8" data-date-format="<?php echo DATE_FORMAT ?>" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
									<label class="control-label">Full Down: </label>
									<div class="input-group date margin-bottom" id="down_end_date">
										<input type="text" class="form-control full-down-date" name="full_down_date" id = "full_down_date" tabindex ="9" data-date-format="<?php echo DATE_FORMAT ?>" />
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
								<input type="text" class="form-control margin-bottom required amt-to-be-financed" name="amt_to_be_financed" id="amt_to_be_financed" value="0.00" tabindex="10">
								<div class="form-group monthly-frm" id = "monthly_frm">
									<label class="control-label">Terms: </label>
									<input type="text" class="form-control margin-bottom required terms-count" name="terms" id="terms" value="1" tabindex="11">
									<label class="control-label" id='rate_text'>Interest Rate: </label>
									<input type="text" class="form-control margin-bottom required interest-rate" name="interest_rate" id="interest_rate" value="0.00" tabindex="12">
									<label class="control-label" id='factor_text' >Fixed Factor: </label>
									<input type="text" class="form-control margin-bottom required fixed-factor" name="fixed_factor" id="fixed_factor" value="0.00" tabindex="13">
									<label class="control-label">Monthly Payment: </label>
									<input type="text" class="form-control margin-bottom required monthly-amor" name="monthly_amortization" id="monthly_amortization" value="0.00" tabindex="14">	
								</div>
								<label class="control-label" id= "start_text">Start Date: </label>	
								<div class="input-group date margin-bottom" id="mo_start_date">
									<input type="text" class="form-control required mo-start-date" name="start_date" id = "start_date" tabindex ="15" data-date-format="<?php echo DATE_FORMAT ?>" />
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
											<input type="text" class="form-control form-group-sm item-input agent-name" name="agent_name[]">
											<p class="item-select"><a href="#"> select an agent</a></p>
										</div>
									</td>
									<td class="text-right">
										<div class="form-group form-group-sm no-margin-bottom">
											<input type="text" class="form-control agent-pos" name="agent_position[]" readonly>
										</div>
									</td>
									<td class="text-right">
										<div class="input-group input-group-sm  no-margin-bottom">
											
											<input type="text" class="form-control agent-code" name="agent_code[]" aria-describedby="sizing-addon1" readonly>
										</div>
									</td>
									<td class="text-right">
										<div class="form-group form-group-sm  no-margin-bottom">
											<input type="text" class="form-control calculate agent-rate required" name="agent_rate[]" value="0.0">
										</div>
									</td>
									<td class="text-right">
										<div class="input-group input-group-sm">
											<span class="input-group-addon"><?php echo CURRENCY ?></span>
											<input type="text" class="form-control comm-amt" name="comm_amt[]" value="0.00" aria-describedby="sizing-addon1">
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
							<div class="col-xs-12 margin-top btn-group">
								<input type="submit" id="create_csr" class="btn btn-success float-right btn-l" value="Create CSR" data-loading-text="Creating...">
							</div>
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

	$('#create_csr').submit(function(e){
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
				url:'ajax.php?action=save_csr',
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
							window.location.href = "?page=list-sm"
							/* location.reload() */
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




