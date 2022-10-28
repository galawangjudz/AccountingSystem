



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

}
}

/* close connection */
$mysqli->close();

?>

<!-- <hr> -->

<div id="response" class="alert alert-success" style="display:none;">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <div class="message"></div>
</div>


<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="float-left">CSR. No. <?php echo $getID; ?></h2>
                
                <div class="clear"></div>
            </div>
            <div class="panel-body form-group form-group-sm">

                <div class="row">
                    <h2 class="float-center"> Contract Details </h2>

                    <form method="POST">
                    <div id="update_status" class="padding-right row text-right">
                        <div class="float-right col-xs-8">
                          
                            <select class= "status-list" name= "status_list" id ="status_list" csr-id =<?php echo $getID; ?> csr-lot-lid = <?php echo  $lot_id?> >
                                <option value="No Status">Update Status</option>  
                                <option value="Pending">Pending</option>  
                                <option value="Approved">Approved</option>  
                                <option value="Disapproved">Disapproved</option>  
                            </select>
                           <!--  <button type="submit" class="btn btn-sm btn-success" name = "approved_csr" id="approve_csr">Approved<i class="fa fa-check"></i></button>'
                            <button type="submit" class="btn btn-sm btn-danger ml-2" name = "reject_csr" id="reject_csr">Reject<i class="fa fa-times"></i></button></td></tr></tbody>';
                             -->
                            
                              <!--   <button type="sumbit" class="btn btn-success waves-effect waves-light csr-status" id="csr_status" name="csr_approved" ><i class="fa fa-check"></i>  Aprroved</button> </a>
                                <button type="sumbit" class="btn btn-primary waves-effect waves-light csr-status" id="csr_status" name="csr_pending"><i class="fa fa-clock-o"></i>  Pending </button></a>
                                <button type="sumbit" class="btn btn-warning waves-effect waves-light csr-status" id="csr_status" name="csr_disapproved"><i class="fa fa-times"></i>  Disapproved </button></a>
                                --> <!-- <input type="submit" id="" class="btn btn-success float-right" value="Aprroved" data-loading-text="Creating..."> -->
                            
                        </div>
                    </div>
              
                    <br>
                   
                    <div class="float-left col-xs-12">
                        <table class="table table-striped">
                          
                            
                            <td><b>Date of Sale: </b></td>
                            <td><?php echo $customer_date_of_sale ?></td>
                            </tr>
                            <tr>
                            <td><b>Lot ID:</b></td>
                            <td><?php echo $lot_id ?></td>
                            </tr>
                            <tr>
                            <td><b>Buyer's Full Name:</b></td>
                            <td><?php echo $cust_fullname1 ?></td>
                            </tr>
                            <tr>
                            <td><b>2nd Buyer's Full Name:</b></td>
                            <td><?php echo $cust_fullname2 ?></td>
                            </tr>
                            <tr>
                            <td><b>Address 1:</b></td>
                            <td><?php echo $customer_address_1 ?></td>
                            </tr>
                            <tr>
                            <td><b>City Province :</b></td>
                            <td><?php echo $customer_city_prov ?></td>
                            </tr>
                            <tr>
                            <td><b>Zipcode : </b></td>
                            <td><?php echo $customer_zip_code?></td>
                            </tr>
                            <td><b>Status : </b></td>
                            <td><?php echo $csr_status?></td>
                            </tr>
                            
                            
                    </div>
                    </form>

                </div>

                
            </div>

           
    </div>


        </div>
    </div>
   

<div id="update_stat" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Update Status</h4>
      </div>
      <div class="modal-body">
        <p>Change Status to <input type="text" name="upstat" id="upstat" value="" readonly/> ? </p>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="confirm">Confirm</button>
		<button type="button" data-dismiss="modal" class="btn">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


   

</div>

<?php
	include('footer.php');
?>
