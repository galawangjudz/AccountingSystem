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
        $customer_last_name_1 = $row['last_name']; // customer last name
        $customer_first_name_1 = $row['first_name']; // customer first name
        $customer_middle_name_1 = $row['middle_name']; // customer middle name
    
        $cust_fullname1 = sprintf('%s, %s %s', $customer_last_name_1, $customer_first_name_1, $customer_middle_name_1);  
        // more details
      
        $csr_status = $row['c_csr_status'];// status
        if ($csr_status == 1){
            $csr_status = "Approved";
        }else{
            $csr_status = "Disapproved";
        }
        $reserv_status = $row['c_reserve_status'];// status
        if($reserv_status == 1){
            $reserv_status = "Paid";
        }else{
            $reserv_status = "unpaid";
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
    <table class="table table-striped table-hover table-bordered" id="data-table">
        <tr>
            <td><b>RA #: </b></td><td><?php echo $ra_id ?></td>
        </tr>
        <tr>
            <td><b>Location: </b></td><td><?php echo $acronym ?> <?php echo $block?> <?php echo $lot ?></td>
        </tr>
        <tr>
            <td><b>Buyer's Name: </b></td><td><?php echo $cust_fullname1 ?></td>
        </tr>
        <tr>
            <td><b>NET TCP: </b></td><td><?php echo 'P'.number_format($net_tcp,2) ?></td>
        </tr>
        <tr>
            <td><b>Coo Approval: </b></td><td><?php echo $csr_status ?></td>
        </tr>
        <tr>
            <td><b>Reservation Status: </b></td><td><?php echo $reserv_status ?></td>
        </tr>
        <tr>
            <td><b>Loan Amount: </b></td><td><?php echo 'P'.number_format($amt_fnanced,2) ?></td>
        </tr>
        <tr>
            <td><b>Payment Type 1: </b></td><td><?php echo $p1 ?></td>
        </tr>
        <tr>
            <td><b>Payment Type 2: </b></td><td><?php echo $p2 ?></td>
        </tr>
        <tr>
            <td><b>Interest Rate: </b></td><td><?php echo $interest_rate ?></td>
        </tr>
        <tr>
            <td><b>Terms: </b></td><td><?php echo $terms ?></td>
        </tr>
        <tr>
            <td><b>Monthly Amortization: </b></td><td><?php echo $monthly_payment ?></td>
        </tr> 
        <form>
            <div class="form-group">
                <label class="control-label">Loan Amount: </label>
                <input type="text" class="form-control margin-bottom loan-amt required" name="loan_amt" id="loan_amt" value="<?php echo isset($amt_fnanced) ? $amt_fnanced: '' ?>">
            </div>
            <div class="form-group">
                <label class="control-label">Interest Rate: </label>
                <input type="text" class="form-control margin-bottom int-rate required" name="int_rate" id="int_rate" value="<?php echo isset($interest_rate) ? $interest_rate: '' ?>">
            </div>
            <div class="form-group">
                <label class="control-label">Terms: </label>
                <input type="text" class="form-control margin-bottom term-rate equired" name="term_rate" id="term_rate" value="<?php echo isset($terms) ? $terms: '' ?>">
            </div>
            <?php 
           
                $i = ($interest_rate /100)/12;
                $n = $terms;
                $fv  = 0;
                $pv =  $amt_fnanced;
                $type = 0;
                if ($terms != 0 or $i != 0){
                    $ans = (($pv - $fv) * $i )/ (1 - pow((1 + $i), (-$n)));
                    $PMT = number_format($ans,2) ;
                    $income_req = $ans / 0.4;
                    $income_req = number_format($income_req,2) ;
                }else{ 
                    $PMT = 0;
                    $income_req = 0;
                }
                   
            ?>
            <div class="form-group">
                <label class="control-label">Monthly : </label>
                <input type="text" class="form-control margin-bottom required" name="monthly" id="monthly" value="<?php echo isset($PMT) ? $PMT: '' ?>">
            </div>
            <div class="form-group">
                <label class="control-label">Income Requirement: </label>
                <input type="text" class="form-control margin-bottom required" name="income_req" id="income_req" value="<?php echo isset($income_req) ? $income_req: '' ?>">
            </div>

         <!--    <button class="btn btn-primary btn-xs compute-pmt">Compute</button>
            -->

        <br>
    </table>

    



    <div class="col-md-3"> 
    <button type="button" style="width:160px;margin-left:-16px;" class="btn btn-success btn-s ca_approved" csr-id ="<?php $csr_no ?>"  value= 1>Approved</button>
    </div>

    <div class="col-md-4">
    <button type="button" style="width:160px;margin-left:36px;" class="btn btn-danger btn-s ca_approved" csr-id ="<?php $csr_no ?>"  value= 2>Disapproved</button>
    </div>

    <div class="col-md-4">
    <button type="button" style="width:160px;margin-left:46px;margin-bottom:10px;" class="btn btn-danger btn-s ca_approved" csr-id ="<?php $csr_no ?>" value= 3>For Revision</button>
    </div>

  <!--   <div class="col-md-5">
        <button type="button" class="btn btn-secondary btn-s ca_approved" data-dismiss="modal">Close</button>

    </div>
		 -->

</div>
<script>

    


	$(document).ready(function(){
		
	})

	$('.ca_approved').click(function(){
		start_load()
		$.ajax({
			url:'ajax.php?action=ca_approval',
			method:'POST',
			data:{ra_id:'<?php echo $ra_id ?>',id:'<?php echo $csr_no ?>',lot_id:'<?php echo $lot_id ?>',value:$(this).attr('value')},
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