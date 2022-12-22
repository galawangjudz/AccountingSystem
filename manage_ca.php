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
$query = "SELECT x.*, y.ra_id, y.c_csr_status, y.c_reserve_status, y.c_ca_status, y.c_duration, y.c_csr_no as csr_num FROM t_approval_csr y inner join t_csr_view x on x.c_csr_no = y.c_csr_no WHERE y.c_csr_no = '" . $mysqli->real_escape_string($getID) . "'";
 
/* $query = "SELECT * FROM t_approval_csr y inner join t_csr_view x on y.c_csr_no = x.c_csr_no WHERE y.ra_id = '" . $mysqli->real_escape_string($getID) . "'"; */

$result = mysqli_query($mysqli, $query);
// mysqli select query
if($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $ra_id = $row['ra_id'];
        $csr_no = $row['c_csr_no'];
        $lot_id = $row['c_lot_lid'];
        $customer_date_of_sale = $row['c_date_of_sale'];
        // buyer
        $customer_last_name_1 = $row['c_b1_last_name']; // customer last name
        $customer_first_name_1 = $row['c_b1_first_name']; // customer first name
        $customer_middle_name_1 = $row['c_b1_middle_name']; // customer middle name
        $customer_last_name_2 = $row['c_b2_last_name']; // customer last name 2
        $customer_first_name_2 = $row['c_b2_first_name']; // customer first name 2
        $customer_middle_name_2 = $row['c_b2_middle_name']; // customer middle name 2

        $cust_fullname1 = sprintf('%s, %s %s', $customer_last_name_1, $customer_first_name_1, $customer_middle_name_1); 
        $cust_fullname2 = sprintf('%s, %s %s', $customer_last_name_2, $customer_first_name_2, $customer_middle_name_2); 
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
        $csr_status = $row['c_csr_status'];// status
        if ($csr_status == 1){
            $csr_status = "Approved";
        }else{
            $csr_status = "Disapproved";
        }
        $reserv_status = $row['c_reserve_status'];// status
        if($reserv_status == 1){
            $reserv_status = "Approved";
        }else{
            $reserv_status = "Disapproved";
        }
        $ca_status = $row['c_ca_status'];// status 

        ///LOT
        $lot_area = $row['c_lot_area'];
        $price_sqm = $row['c_price_sqm'];
        $lot_disc = $row['c_lot_discount'];
        $lot_disc_amt = $row['c_lot_discount_amt'];
        $lres = $lot_area * $price_sqm;
        $lcp = $lres-($lres*($lot_disc*0.01));

        //HOUSE
        $house_model = $row['c_house_model'];
        $floor_area = $row['c_floor_area'];
        $house_price_sqm = $row['c_house_price_sqm'];
        $house_disc = $row['c_house_discount'];
        $house_disc_amt = $row['c_house_discount_amt'];
        $hres = $floor_area * $house_price_sqm;
        $hcp = $hres-($hres*($house_disc*0.01));
        
        //PAYMENT
        $tcp = $row['c_tcp'];
        $tcp_discount = $row['c_tcp_discount'];
        $tcp_discount_amt = $row['c_tcp_discount_amt'];
        $vat = $row['c_vat_amount'];
        $vat_amt = (0.01 * $vat)*$tcp;
        $net_tcp = $row['c_net_tcp'];

        $reservation = $row['c_reservation'];
        $p1 = $row['c_payment_type1'];
        $p2 = $row['c_payment_type2'];

        $amt_fnanced = $row['c_amt_financed'];
        $monthly_down = $row['c_monthly_down'];
        $first_dp = $row['c_first_dp'];
        $full_down = $row['c_full_down'];
        $terms = $row['c_terms'];
        $interest_rate = $row['c_interest_rate'];
        $fixed_factor = $row['c_fixed_factor'];
        $monthly_payment = $row['c_monthly_payment'];
        $no_payments = $row['c_no_payments'];
        $net_dp = $row['c_net_dp'];
        $down_percent = $row['c_down_percent'];
        $start_date = $row['c_start_date'];
        $verify = $row['c_verify'];
        $duration = $row['c_duration'];
        $acronym = $row['c_acronym'];
        $block = $row['c_block'];
        $lot = $row['c_lot'];
        }

/* $location = $mysqli->query("SELECT * FROM t_lots where  =".$lot_lid)->fetch_array(); */
}
/* close connection */
$mysqli->close();
?>
<style>
	.container-fluid p{
		margin: unset
	}
	#uni_modal .modal-footer{
		display: none;
	}
</style>
<div class="container-fluid">
	<p><b>RA # : </b><?php echo $ra_id ?></p>
	<p><b>Location : </b><?php echo $acronym ?> <?php echo $block?> <?php echo $lot ?></p>
	<p><b>Buyer's Name : </b><?php echo $cust_fullname1 ?></p>
	<p><b>NET TCP : </b><?php echo 'P'.number_format($net_tcp,2) ?></p>
	<p><b>Coo Approval : </b><span><?php echo $csr_status ?></span></p>
	<p><b>Reservation Status: </b><?php echo $reserv_status ?></p>
	<p><b>Loan Amount : </b><?php echo 'P'.number_format($amt_fnanced,2) ?></p>
    <p><b>Payment Type 1: </b><?php echo $p1 ?></p>
    <p><b>payment Type 2: </b><?php echo $p2 ?></p>
	<p><b>Interest Rate : </b><?php echo $interest_rate ?></p>
	<p><b>Terms : </b><?php echo $terms ?></p>
	<p><b>Monthly Amortization : </b><?php echo $monthly_payment ?></p>
	<hr>
    <hr>

    <div class="col-md-3">
        <button type="button" class="btn btn-success btn-s" id="ca_approved">Approved</button>
    </div>
    <div class="col-md-4">
        <button type="button" class="btn btn-danger btn-s"  id="ca_disapproved">Disapproved</button>
    </div>

    <div class="col-md-5">
        <button type="button" class="btn btn-secondary btn-s" data-dismiss="modal">Close</button>
    </div>
		

</div>
<script>
	$(document).ready(function(){
		
	})

	$('#ca_approved').click(function(){
		start_load()
		$.ajax({
			url:'ajax.php?action=ca_approval',
			method:'POST',
			data:{ra_id:'<?php echo $ra_id ?>'},
			success:function(resp){
				if(resp ==1){
					alert("Data successfully saved",'success')
					setTimeout(function(){
							$(".modal").removeClass("visible");
							$(".modal").modal('hide');
							end_load()
						},1500)

						setTimeout(function(){
							location.reload()
						},3000)
				}
			}
		})
	})

    $('#ca_disapproved').click(function(){
		start_load()
		$.ajax({
			url:'ajax.php?action=ca_approval2',
			method:'POST',
			data:{ra_id:'<?php echo $ra_id ?>'},
			success:function(resp){
				if(resp ==1){
					alert("Data successfully saved",'success')
					setTimeout(function(){
							$(".modal").removeClass("visible");
							$(".modal").modal('hide');
							end_load()
						},1500)

						setTimeout(function(){
							location.reload()
						},3000)
				}
			}
		})
	})
</script>