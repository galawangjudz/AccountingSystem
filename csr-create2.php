<?php

include('header.php');
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


</script>

		<h2>Create New <span class="csr_type">CSR</span> </h2>
		<!-- <hr> -->

		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>

		<!-- Tab links -->
		<div class="tab">
			<button class="tablinks" onclick="opentab(event, 'Buyer')">Buyer's Profile</button>
			<button class="tablinks" onclick="opentab(event, 'Investment')">Investment Value</button>
			<button class="tablinks" onclick="opentab(event, 'Payment')">Payment Computation</button>
			<button class="tablinks" onclick="opentab(event, 'Commission')">Commission</button>
		</div>


		<div id="Buyer" class="tabcontent">
		<form method="post" id="create_csr">
			<input type="hidden" name="action" value="create_csr">
			
			
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="float-left">Buyer's Information Details</h4>
							<a href="#" class="float-right select-customer"><b>OR</b> Select Existing Customer</a>
							<div class="clear"></div>
						</div>
						<div class="panel-body form-group form-group-sm">
						<div class="row">
						
								<div class="col-xs-8 text-right">
									
									<div class="col-xs-4 no-padding-right">
										<div class="form-group">
											<div class="input-group date margin-bottom" id="dos">
												<input type="text" class="form-control required date-of-sale" value= "" id ="date_of_sale" name = "date_of_sale" tabindex =1 data-date-format="<?php echo DATE_FORMAT ?>" />
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
										</div>
									</div>
									<div class="row-xs-8">
										<div class="input-group col-xs-3 float-right">
											<span class="input-group-addon">#<?php echo CSR_PREFIX ?></span>
											<input type="text" name="csr_id" id="csr_id" class="form-control required" placeholder="CSR Number" aria-describedby="sizing-addon1" tabindex =2 value="<?php getCSRId(); ?>">
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
							

								<div class="col-xs-4">		
									<div class="form-group">
										<label> LAST NAME <label>
									</div>
					
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_last_name_1" id="customer_last_name_1" placeholder="Buyer 1 Last Name" tabindex="3">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_last_name_2" id="customer_last_name_2" placeholder="Buyer 2 Last Name" tabindex="6">	
									</div>
									
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label> FIRST NAME <label>
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_first_name_1" id="customer_first_name_1" placeholder="Buyer 1 First Name" tabindex="5">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_first_name_2" id="customer_first_name_2" placeholder="Buyer 2 First Name" tabindex="7">	
									</div>
									
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label> MIDDLE NAME <label>
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_middle_name_1" id="customer_middle_name_1" placeholder="Buyer 1 Middle Name" tabindex="5">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_middle_name_2" id="customer_middle_name_2" placeholder="Buyer 2 Middle Name" tabindex="8">	
									</div>
								</div>

								<div class="col-xs-4">
									<div class="form-group">
										<label> ADDRESS <label>
									</div>
					
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_address_1" id="customer_address_1" placeholder="Address" tabindex="9">
									</div>
									

								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label> CITY/PROV <label>
									</div>
					
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_city_prov" id="customer_city_prov" placeholder="City/Province" tabindex="10">
									</div>
									
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label> ZIP CODE <label>
									</div>
					
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_zip_code" id="customer_zip_code" placeholder="Zipcode" tabindex="11">
									</div>
								

								</div>
								<div class="col-xs-8">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_address_2" id="customer_address_2" placeholder="Address Abroad" tabindex="12">
									</div>
								</div>
								<div class="col-xs-3">
									<div class="input-group date margin-bottom" id="birth_date">
										<input type="text" class="form-control birth_day required" name="birth_day" id = "birth_day" placeholder="YYYY-MM-DD"  tabindex ="13" data-date-format="<?php echo DATE_FORMAT ?>" >		
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>	
								</div>

								<div class="col-xs-1">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_age" id="customer_age" placeholder="Age" tabindex="14">
									</div>
								</div>	
								<div class="col-xs-4">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_phone" id="customer_phone" placeholder="Contact Number" tabindex="15">
									</div>	
									
									<div class="form-group">
										<style>
											select:invalid { color: gray; }
										</style>
										<select name="customer_gender" id="customer_gender" class="form-control" tabindex = "18" require>
											
												<option name="customer_gender" value="M" selected>Male</option>
												<option name="customer_gender" value="F">Female</option>
										</select>
									</div>

								</div>
								<div class="col-xs-4">
									
									<div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_viber" id="customer_viber" placeholder="Viber Account" tabindex="16">
									</div>
									<div class="form-group">
										<style>
											select:invalid { color: gray; }
										</style>
										<select name="civil_status" id="civil_status" class="form-control" tabindex = "19"required>
										
											<option name="civil_status" value="Single" selected>Single</option>
											<option name="civil_status" value="Married">Married</option>
											<option name="civil_status" value="Divorced">Divorced</option>
											<option name="civil_status" value="Widowed">Widowed</option>
										</select>
									</div>
								</div>

								<div class="col-xs-4">
									
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_email" id="customer_email" placeholder="Email Address" tabindex="17">
									</div>
									<div class="form-group">
										<style>
											select:invalid { color: gray; }
										</style>
										<select name="employment_status" id="employment_status" class="form-control required" tabindex = "20">
											
											<option name="employment_status" value="Employed" selected>Employed</option>
											<option name="employment_status" value="Self-Employed">Self-Employed</option>
											<option name="employment_status" value="OCW">OCW</option>
											<option name="employment_status" value="Retired">Retired</option>
											<option name="employment_status" value="Others">Others</option>
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
								<h4 class="float-left">Investment Value</h4>
								<!-- <a href="#" class="float-right select-customer"><b>OR</b> Select Existing Customer</a>  -->
								<div class="clear"></div>
							</div>
							<div class="panel-body form-group form-group-sm">
									
								<div class="row">
									<div class="col-xs-5">	
										<div class="col-xs-4">
											<!-- <div class="form-group" tabindex = "21">	
												<?php getProject(); ?>
											</div> -->
											    <input type="hidden" class="form-control margin-bottom copy-input" name="l_lid" id="l_lid" >
											<div class="form-group">
												<input type="text" class="form-control margin-bottom copy-input" name="l_site" id="l_site" readonly placeholder="Site" tabindex="21">
											</div>
										</div>
										<div class="col-xs-4">
											<div class="form-group">
												<input type="text" class="form-control margin-bottom copy-input" name="l_block" id="l_block" readonly placeholder="Block" tabindex="22">
											</div>
										</div>
										<div class="col-xs-4">
											<div class="form-group">
												<input type="text" class="form-control margin-bottom copy-input" name="l_lot" id="l_lot" readonly alt=""placeholder="Lot" tabindex="23">
											</div>
										</div>
										
										
									</div>

									<div class="col-xs-5">
										<div class="col-xs-2 form-group">
												<input type="submit" class="btn btn-success float-right select-lot" value="Find Lot" data-loading-text="Finding..." tabindex ="37">
										</div>
									</div>
									<div class="col-xs-5">
											
										<div class="col-xs-12">
										
											<div class="col-xs-12">
												<label> Lot Area </label>
												<input type="text" class="form-control margin-bottom lot-area" name="lot_area" id="lot_area" readonly placeholder="Lot Area" tabindex="24">
											</div>
											<div class="col-xs-12">
												<label> Price/SQM </label>
												<input type="text" class="form-control margin-bottom price-sqm" name="price_per_sqm" id="price_per_sqm" readonly placeholder="Price/SQM" tabindex="25">
											</div>
											<div class="col-xs-12">
												<label> Amount </label>
												<input type="text" class="form-control margin-bottom l-amount required" name="amount" id="amount" readonly placeholder="Amount" tabindex="26">
											</div>
											<div class="col-xs-4">
												
												<label><h7> Disc(%)</h7> </label>
												<input type="text" class="form-control margin-bottom lot-disc required" name="lot_disc" id="lot_disc" placeholder="%" tabindex="27">
											</div>
											<div class="col-xs-8">
												<label> <h7> Disc Amount </h7> </label>
												<input type="text" class="form-control margin-bottom lot-disc-amt required" name="lot_disc_amt" id="lot_disc_amt" readonly placeholder="Disc Amt" tabindex="28">
											
											</div>
											<div class="col-xs-12">
												<label> LCP </label>
												<input type="text" class="form-control margin-bottom l-lcp required" name="lcp" id="lcp" placeholder="LCP" tabindex="29">
											</div>
										</div>


									</div>
									<div class="col-xs-5">
										<div class="col-xs-12">
											<label> House Model</label>
											<input type="text" class="form-control margin-bottom house-model" name="house_model" id="house_model" value = "House Model" placeholder="House Model" tabindex="30">
										</div>
										<div class="col-xs-12">
											<label> Floor area </label>
											<input type="text" class="form-control margin-bottom floor-area " name="floor_area" id="floor_area" value = "0" placeholder="Floor Area" tabindex="31">
										</div>
										<div class="col-xs-12">
											<label> H Price/SQM </label>
											<input type="text" class="form-control margin-bottom h-price-sqm"  name="h_price_per_sqm" id="h_price_per_sqm" value = "0" placeholder="Price/SQM" tabindex="32">
										</div>
										<div class="col-xs-4">
											
											<label><h7> H Disc(%)</h7> </label>
											<input type="text" class="form-control margin-bottom house-disc" name="house_disc" id="house_disc" value = "0" placeholder="%" tabindex="33">
										</div>
										<div class="col-xs-8">
											<label> <h7> H Disc Amount </h7> </label>
											<input type="text" class="form-control margin-bottom h-disc-amt" name="house_disc_amt" id="house_disc_amt" value = "0" placeholder="Disc Amt" tabindex="34">
										
										</div>
										<div class="col-xs-12">
											<label> HCP </label>
											<input type="text" class="form-control margin-bottom house-hcp " name="hcp" id="hcp" value= "0" placeholder="HCP" tabindex="35">
										</div>
									</div>


								</div>
									
								<hr>

								<div class="col-xs-6">
									<div class="row">
										<div class="col-xs-3">
											<strong>TCP Disc:</strong>
										</div>
										<div class="col-xs-6">
											
											<div class="col-xs-4" >
												<input type="text" class="form-control margin-bottom tcp-disc required"  name="tcp_disc" id="tcp_disc" value= "0.00" placeholder="%" tabindex = '36'>
											</div>
											<div class="col-xs-8" >
												<input type="text" class="form-control margin-bottom tcp-disc-amt required"  value= "0.00" name="tcp_disc_amt" id="tcp_disc_amt" placeholder="Amount" tabindex = '37'>
											</div>

										</div>
									</div>
									<div class="row">
										<div class="col-xs-3">
											<strong>TCP:</strong>
										</div>
										<div class="col-xs-6">
											
											<input type="text" class="form-control margin-bottom total-tcp required" value= "0.00" name="total_tcp" id="total_tcp" placeholder="TCP" tabindex = '38'>
											<input type="hidden" name="invoice_discount" id="invoice_discount">
										</div>
									</div>
					
									<div class="row">
										<div class="col-xs-3">
											<strong>VAT:</strong>
										</div>
										<div class="col-xs-6" >
											<input type="text" class="form-control margin-bottom vat-amt required" value= "0.00" name="vat_amt" id="vat_amt" placeholder="Vat Amount" tabindex = '39'>
					
										   <!-- 	
											<input type="checkbox" id= "cb_vat" name="cb_vat" class="cb-vat">
											-->
										</div> 
									</div>
					
									<div class="row">
										<div class="col-xs-3">
											<strong>NET TCP:</strong>
										</div>
										<div class="col-xs-6">
										<input type="text" class="form-control margin-bottom net-tcp required"  name="net_tcp" readonly id="net_tcp" placeholder="NET TCP" tabindex = '40'>
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
									<h4 class="float-left">Payment Computation</h4>
									
									<div class="clear"></div>
								</div>
							<div class="panel-body form-group form-group-sm">
							
								
								<div class="row">
									<div class="col-xs-6">	
										<div class="form-group">
											<label>Total Selling Price : <label>
										</div>
										<div class="form-group">
											<input type="text" class="form-control margin-bottom required net-tcp-1" name="net_tcp1" id="net_tcp1" placeholder="Net tcp" value = "0.00" tabindex = "1" >
									
										</div>


									</div>
							
									<div class="col-xs-6">	
										<div class="form-group">
											<label>Reservation : <label>
										</div>
										<div class="form-group">
											<input type="text" class="form-control margin-bottom required reservation-fee" name="reservation" id="reservation" placeholder="Reservation" value="0.00" tabindex ="1" >
									
										</div>


								

									</div>
									<div class="col-xs-6"  id = "pay_type1">	
										<div class="form-group margin-top ">
											<label> Payment Type 1: <label>
										</div>	
										<div class="form-group">
											<style>
												select:invalid { color: gray; }
											</style>
											<select name="payment_type1" id="payment_type1" class="form-control required payment-type1" id= "payment_type1" tabindex = "2">
												
												<option name="payment_type1" value="Partial DownPayment" selected>Partial DownPayment</option>
												<option name="payment_type1" value="Full DownPayment">Full DownPayment</option>
												<option name="payment_type1" value="No DownPayment">No DownPayment</option>
												<option name="payment_type1" value="Spot Cash">Spot Cash</option>
											</select>	
										</div>
									</div>
									<div class="col-xs-6 " id= "pay_type2">
										<div class="form-group margin-top " >
											<label> Payment Type 2:<label>
										</div>
										<div class="form-group">
											<style>
												select:invalid { color: gray; }
											</style>
											<select name="payment_type2" id="payment_type2" class="form-control required payment-type2" tabindex = "3" >
												
												<option name="payment_type2" value="Monthly Amortization" selected>Monthly Amortization</option>
												<option name="payment_type2" value="Deferred Cash Payment">Deferred Cash Payment</option>
										
											</select>	
										</div>
										
									</div>
									 <div class="col-xs-6">
									 		<span style="color: red">
												<label id="down_text"> Downpayment </label>
											</span>
									</div>

									<div class="col-xs-6">
										<div class="form-group">
											<span style="color: red">
												<label id="ma_text"> Monthly Amortization </label>
											</span">
										</div>
									</div>	
									 

									<div class="col-xs-6  " >
										<div class="form-group down-frm" id= "down_frm" >
											<label>Down % : </label>
											
											<input type="text" class="form-control margin-bottom required down-percent" name="down_percent" id="down_percent" value = "0.00" tabindex="4">
									
											<label>Net DP : </label>
											
											
											<input type="text" class="form-control margin-bottom required net-dp" name="net_dp" id="net_dp" value= '0.00' tabindex="5">

											<label id= "no_pay_text"># Payments : </label>
											
											<input type="text" class="form-control margin-bottom required no-payment" name="no_payment" id="no_payment" value= "0.00" maxlength= "2" placeholder="No of Payment" tabindex="6">
										
											<label id = "mo_down_text">Monthly Down: </label>
											
											<input type="text" class="form-control margin-bottom required monthly-down" name="monthly_down" value= '0.00' id="monthly_down" placeholder="Monthly Down" tabindex="7">
											
										
											<label>First DP: </label>
											<div class="input-group date margin-bottom" id="down_start_date">
												<input type="text" class="form-control required first-dp-date" name="first_dp_date" id = "first_dp_date" placeholder="First DP Date" tabindex ="8" data-date-format="<?php echo DATE_FORMAT ?>" />
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
											<label>Full Down: </label>
											
											<div class="input-group date margin-bottom" id="down_end_date">
												<input type="text" class="form-control required full-down-date" name="full_down_date" id = "full_down_date" placeholder="Full Down Date" tabindex ="9" data-date-format="<?php echo DATE_FORMAT ?>" />
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
									
										</div>
									</div>
								
									<div class="col-xs-6">
										
										
										<label id='loan_text'>Amount to be Financed:</label>
										<input type="text" class="form-control margin-bottom required amt-to-be-financed" name="amt_to_be_financed" id="amt_to_be_financed" value="0.00" tabindex="10">
									
									
										<div class="form-group monthly-frm" id = "monthly_frm">
										
											
											<label>Terms: </label>
											<input type="text" class="form-control margin-bottom required terms-count" name="terms" id="terms" value="1" tabindex="11">
									
									
											<label id='rate_text'>Interest Rate: </label>
											<input type="text" class="form-control margin-bottom required interest-rate" value="0.00" name="interest_rate" id="interest_rate" placeholder="Interest Rate" tabindex="12">
									
										
											<label id='factor_text' >Fixed Factor: </label>
											<input type="text" class="form-control margin-bottom required fixed-factor" value="0.00" name="fixed_factor" id="fixed_factor" placeholder="Fixed Factor" tabindex="13">
										
										
											<label>Monthly Payment: </label>
											<input type="text" class="form-control margin-bottom required monthly-amor" name="monthly_amortization" id="monthly_amortization" value="0.00" tabindex="14">
									

												
										</div>
									
										<label id= "start_text">Start Date: </label>	
											<div class="input-group date margin-bottom" id="mo_start_date">
												<input type="text" class="form-control required mo-start-date" name="start_date" id = "start_date" placeholder="Start Date" tabindex ="15" data-date-format="<?php echo DATE_FORMAT ?>" />
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

			

			<div id="Commission" class="tabcontent">
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="float-left">Agents and Commission</h4>
									
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
														<input type="text" class="form-control form-group-sm item-input customer-agent" name="customer_agent[]" placeholder="Find an agents...">
														<p class="item-select"><a href="#">or select an agent</a></p>
													</div>
												</td>
												<td class="text-right">
													<div class="form-group form-group-sm no-margin-bottom">
														<input type="text" class="form-control agent-pos" name="agent_position[]" placeholder="Position" disabled>
													</div>
												</td>
												<td class="text-right">
													<div class="input-group input-group-sm  no-margin-bottom">
														
														<input type="text" class="form-control agent-code" name="code" aria-describedby="sizing-addon1" placeholder="Code" disabled >
													</div>
												</td>
												<td class="text-right">
													<div class="form-group form-group-sm  no-margin-bottom">
														<input type="number" class="form-control calculate agent-rate required" name="agent_rate[]" id="agent_rate" placeholder="Rate" value="0.0">
													</div>
												</td>
												<td class="text-right">
													<div class="input-group input-group-sm">
														<span class="input-group-addon"><?php echo CURRENCY ?></span>
														<input type="text" class="form-control comm-amt" name="comm_amt[]" id="comm_amt" value="0.00" placeholder= "Commission" aria-describedby="sizing-addon1">
													</div>
												</td>
											</tr>
										</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			
		
			<div id="remarks" class="padding-right row text-right">
				<div class="col-xs-6">
					<div class="input-group form-group-sm textarea no-margin-bottom">
						<textarea class-"form-control" name="remarks_notes" placeholder="Additional Notes..."></textarea>
					</div>

					
				</div>

				<div class="col-xs-6 margin-top btn-group">
					<input type="submit" id="action_create_csr" class="btn btn-success float-right btn-l" value="Create CSR" data-loading-text="Creating...">
				</div>
		
			</div>

			</form>
			</div>	
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
				popProductsList();
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



		


		
<?php
	
	include('footer.php');
?>