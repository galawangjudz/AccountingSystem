



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
    }
}

/* close connection */
$mysqli->close();

?>

<!-- <hr> -->
<style>
.view_box{
    border: solid black 1px;
    height:auto;
    width:100%;
    background-color:white;
    border-radius:5px;
   box-shadow: 5px 5px #E2DFD2; 
    float:left;
}
.view_lot{
    border: solid black 1px;
    height:auto;
    width:49%;
    margin-right:1%;
    background-color:white;
    border-radius:5px;
    box-shadow: 5px 5px #E2DFD2;
    float:left;
}
.view_house{
    border: solid black 1px;
    height:auto;
    width:49%;
    margin-left:1%;
    background-color:white;
    border-radius:5px;
    box-shadow: 5px 5px #E2DFD2;
    float:left;
}
.sc{
    border: solid black 1px;
    height:auto;
    width:100%;
    background-color:white;
    border-radius:5px;
    box-shadow: 5px 5px #E2DFD2;
    float:left;
}
.pd{
    border: solid black 1px;
    height:auto;
    width:100%;
    background-color:white;
    border-radius:5px;
   box-shadow: 5px 5px #E2DFD2;
    float:left;
}
.ma{
    border: solid black 1px;
    height:auto;
    width:100%;
    background-color:white;
    border-radius:5px;
    box-shadow: 5px 5px #E2DFD2;
    float:left;
}
.dfc{
    border: solid black 1px;
    height:auto;
    width:100%;
    background-color:white;
    border-radius:5px;
    box-shadow: 5px 5px #E2DFD2;
    float:left;
}
.fdp{
    border: solid black 1px;
    height:auto;
    width:100%;
    background-color:white;
    border-radius:5px;
    box-shadow: 5px 5px #E2DFD2;
    float:left;
}
table{
    width:100%;
}
#status_list{
    width:175px;
    float: right;
    height:25px!important;

    border-radius:5px;
    font-weight:bold;
    border:none;
}
.update_status_box{
    width:100%;
    height:42px;
    border-radius:10px;
    margin-bottom:-30px;
}
#lblupdatestatus{
    width:125px;
    margin-left:505px;
    margin-top:3px;
}
#upstat{
    border:none;
    font-weight:bold;
    font-style:italic;
    width:95px;
    padding:auto;
}
#txtstatus{
    border:none;
    text-align:center;
    font-weight:bold;
    color:white!important;
    font-style:italic;
    border-radius:5px;
}
.options1{
    background-color:white!important;
    color:black;
}
.lbl_box{
    width:auto;
    height:30px;
    float:right;
}
.btn1{
    background-color:blue!important;
}
</style>
<body onload="loadAll()">
<div id="response" class="alert alert-success" style="display:none;">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <div class="message"></div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <input type="hidden" value="<?php echo $p1; ?>" id="p1">
                <input type="hidden" value="<?php echo $p2; ?>" id="p2">
                <h2 class="float-left">CSR #<?php echo $getID; ?></h2>
                <div class="clear"></div>
            </div>
            <div class="panel-body form-group form-group-sm">
                <div class="row">
                    <div class="titles">Buyer's Profile</div>
                    <form method="POST">
                        <div class="three_buttons">
                            <a href="csr-edit.php?id=<?php echo $getID; ?>" class="btn1 btn-primary btn-xs">
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 

                            <a href="mail.php?id=<?php echo $getID; ?>" data-csr-id="'.$row['c_csr_no'].'" data-email="'.$row['c_email'].'" data-invoice-type="'.$row['c_employment_status'].'" data-custom-email="'.$row['c_email'].'" class="btn1 btn-success btn-xs email-invoice">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> 

                            <a href="print.php?id=<?php echo $getID; ?>" class="btn1 btn-info btn-xs" target="_blank">
                            <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> 
                        </div>
                        <div class="update_status_box">
                            <div class="lbl_box">
                            <label id="lblupdatestatus">Update Status: </label>
                                <select class= "status-list" name= "status_list" id ="status_list" csr-id =<?php echo $getID; ?> csr-lot-lid = <?php echo  $lot_id?>>
                                    <option class="options1" id="pendingselected" value="Pending" <?php if($csr_status === 'Pending'){?>selected<?php }?>>Pending</option>
                                    <option class="options1" id="approvedselected" value="Approved" <?php if($csr_status === 'Approved'){?>selected<?php }?>>Approved</option>
                                    <option class="options1" id="disapprovedselected" value="Disapproved" <?php if($csr_status === 'Disapproved'){?>selected<?php }?>>Disapproved</option>
                                </select>
                            </div>
                            
                            <!--  <button type="submit" class="btn btn-sm btn-success" name = "approved_csr" id="approve_csr">Approved<i class="fa fa-check"></i></button>'
                                <button type="submit" class="btn btn-sm btn-danger ml-2" name = "reject_csr" id="reject_csr">Reject<i class="fa fa-times"></i></button></td></tr></tbody>';
                                -->
                                
                                <!--   <button type="sumbit" class="btn btn-success waves-effect waves-light csr-status" id="csr_status" name="csr_approved" ><i class="fa fa-check"></i>  Aprroved</button> </a>
                                    <button type="sumbit" class="btn btn-primary waves-effect waves-light csr-status" id="csr_status" name="csr_pending"><i class="fa fa-clock-o"></i>  Pending </button></a>
                                    <button type="sumbit" class="btn btn-warning waves-effect waves-light csr-status" id="csr_status" name="csr_disapproved"><i class="fa fa-times"></i>  Disapproved </button></a>
                                    --> <!-- <input type="submit" id="" class="btn btn-success float-right" value="Aprroved" data-loading-text="Creating..."> -->
                                
                        </div>
                
                        <br>
                        <div class="view_box">
                            <div class="float-left col-xs-12">
                                <table class="table table-striped">
                                    <tr>
                                        <td><b>Date of Sale: </b></td>
                                        <td><?php echo $customer_date_of_sale ?></td>
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
                                    <tr>
                                        <td><b>Address 2 (Abroad):</b></td>
                                        <td><?php echo $customer_address_2 ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Birthdate:</b></td>
                                        <td><?php echo $birth_date ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Age:</b></td>
                                        <td><?php echo $customer_age ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Contact Number:</b></td>
                                        <td><?php echo $customer_phone ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Email Address:</b></td>
                                        <td><?php echo $customer_email ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Viber Account:</b></td>
                                        <td><?php echo $customer_viber ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Gender:</b></td>
                                        <td><?php echo $customer_gender ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Civil Status:</b></td>
                                        <td><?php echo $civil_status ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Employment Status:</b></td>
                                        <td><?php echo $employment_status ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Status: </b></td>
                                        <td><input type="text" id="txtstatus" value="<?php echo $csr_status?>"></td>
                                    </tr>
                                </table> 
                            </div>       
                        </div>
                        <br>
                        <div class="space"></div>
                        <div class="space"></div>
                        <div class="titles">Investment Value</div>
                        <div class="space"></div>
                            <div class="view_lot">
                            <div class="titles">Lot</div>
                                <div class="float-left col-xs-12">
                                    <table class="table table-striped">
                                        <tr>
                                            <td><b>Lot ID:</b></td>
                                            <td><?php echo $lot_id ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Lot Area:</b></td>
                                            <td><?php echo $lot_area ?> SQM</td>
                                        </tr>
                                        <tr>
                                            <td><b>Price/SQM:</b></td>
                                            <td><?php echo number_format($price_sqm,2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Discount (%):</b></td>
                                            <td><?php echo $lot_disc ?> %</td>
                                        </tr>
                                        <tr>
                                            <td><b>Discount Amount:</b></td>
                                            <td><?php echo number_format($lot_disc_amt,2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Lot Contract Price:</b></td>
                                            <td><?php echo number_format($lcp,2) ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="view_house">
                            <div class="titles">House</div>
                                <div class="float-left col-xs-12">
                                    <table class="table table-striped">
                                        <tr>
                                            <td><b>House Model:</b></td>
                                            <td><?php echo $house_model ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Floor Area:</b></td>
                                            <td><?php echo $floor_area ?> SQM</td>
                                        </tr>
                                        <tr>
                                            <td><b>House Price/SQM:</b></td>
                                            <td><?php echo number_format($house_price_sqm,2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Discount (%):</b></td>
                                            <td><?php echo $house_disc ?>  %</td>
                                        </tr>
                                        <tr>
                                            <td><b>Discount Amount:</b></td>
                                            <td><?php echo number_format($house_disc_amt,2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>House Contract Price:</b></td>
                                            <td><?php echo number_format($hcp,2) ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="space"></div>
                            <div class="space"></div>
                            <div class="titles">Payment Computation</div>
                            <div class="view_box">
                                <div class="float-left col-xs-12">
                                    <table class="table table-striped">
                                        <tr>
                                            <td><b>TCP Discount: </b></td>
                                            <td><?php echo $tcp_discount ?>  %</td>
                                        </tr>
                                        <tr>
                                            <td><b>TCP Discount Amount: </b></td>
                                            <td><?php echo number_format($tcp_discount_amt,2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Total Contract Price: </b></td>
                                            <td><?php echo number_format($tcp,2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>VAT: </b></td>
                                            <td><?php echo number_format($vat,2) ?></td>
                                        </tr>
                                        <!---<tr>
                                            <td><b>VAT Amount: </b></td>
                                            <td><?php echo number_format($vat_amt,2) ?></td>
                                        </tr>!-->
                                        <tr>
                                            <td><b>Net TCP: </b></td>
                                            <td><?php echo number_format($net_tcp,2) ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="space"></div>
                            <div class="space"></div>
                            <div class="view_box">
                                <div class="float-left col-xs-12">
                                    <table class="table table-striped">
                                        <tr>
                                            <td><b>Reservation: </b></td>
                                            <td><?php echo number_format($reservation,2) ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="space"></div>
                            <div id="space1" class="space"></div>
                            <div id="pd" class="pd">
                                <div class="titles">Partial DownPayment</div>
                                <div class="float-left col-xs-12">
                                    <table class="table table-striped">
                                        <tr>
                                            <td><b>Down %:</b></td>
                                            <td><?php echo $down_percent ?>  %</td>
                                        </tr>
                                        <tr>
                                            <td><b>Net DP:</b></td>
                                            <td><?php echo number_format($net_dp,2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b># of Payments:</b></td>
                                            <td><?php echo $no_payments ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Monthly Down:</b></td>
                                            <td><?php echo number_format($monthly_down,2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>First DP:</b></td>
                                            <td><?php echo $first_dp ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Full Down:</b></td>
                                            <td><?php echo $full_down ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="fdp" class="fdp" >
                                <div class="titles">Full Down Payment</div>
                                <div class="float-left col-xs-12">
                                    <table class="table table-striped">
                                        <tr>
                                            <td><b>Down %:</b></td>
                                            <td><?php echo $down_percent ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Net DP:</b></td>
                                            <td><?php echo number_format($net_dp,2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Full Down:</b></td>
                                            <td><?php echo $full_down ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="space1" class="space"></div>
                            <div id="ma" class="ma">
                                <div class="titles">Monthly Amortization</div>
                                <div class="float-left col-xs-12">
                                    <table class="table table-striped">
                                        <tr>
                                            <td><b>Amount to be Financed:</b></td>
                                            <td><?php echo number_format($amt_fnanced,2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Terms:</b></td>
                                            <td><?php echo $terms ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Interest Rate:</b></td>
                                            <td><?php echo $interest_rate ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Fixed Factor:</b></td>
                                            <td><?php echo $fixed_factor ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Monthly Payment:</b></td>
                                            <td><?php echo number_format($monthly_payment,2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Start Date:</b></td>
                                            <td><?php echo $start_date ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="space1" class="space"></div>
                            <div id="dfc" class="dfc">
                                <div class="titles">Deferred Cash Payment</div>
                                <div class="float-left col-xs-12">
                                    <table class="table table-striped">
                                        <tr>
                                            <td><b>Deferred Amount:</b></td>
                                            <td><?php echo number_format($amt_fnanced,2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Terms:</b></td>
                                            <td><?php echo $terms ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Monthly Payment:</b></td>
                                            <td><?php echo number_format($monthly_payment,2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Start Date:</b></td>
                                            <td><?php echo $start_date ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="sc" class="sc">
                                <div class="titles">Spot Cash</div>
                                <div class="float-left col-xs-12">
                                    <table class="table table-striped">
                                        <tr>
                                            <td><b>Amount:</b></td>
                                            <td><?php echo number_format($amt_fnanced,2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Pay Date:</b></td>
                                            <td><?php echo $start_date ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                    </form>
                </div>  
                    
              <!--     add comment form here  -->
              

              <hr>
                <br>
                <br>
                <form  method="POST" id="add_comment">
                    <input type="hidden" name="action" value="add_comment">
                    <input type="hidden" class="form-control required" name="csr_id" value="<?php echo $getID; ?>">
                    <input type="hidden" class="form-control required" name="name" value= "<?php echo $username; ?>">
               
                    <p>
                        <label>Comment</label>
                        <textarea class="form-control required" name="comment" ></textarea>
                    </p>
                
                    <p>
                        <input type="submit" id="action_add_comment" value="Add Comment" >
                    </p>
                </form>
                

                <?php
 
                // Connect to the database
                $mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

                // output any connection error
                if ($mysqli->connect_error) {
                    die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
                }

                // the query
                $query = "SELECT * FROM t_csr_comments WHERE c_csr_no = '" . $mysqli->real_escape_string($getID) . "'";
                //print $query;
                $result = mysqli_query($mysqli, $query);
                
                $comments = array();
                while ($row = mysqli_fetch_object($result))
                {
                    array_push($comments, $row);
                }
                
                // loop through each comment
                foreach ($comments as $comment_key => $comment)
                {
                    // initialize replies array for each comment
                    $replies = array();
                
                    // check if it is a comment to csr, not a reply to comment
                    if ($comment->reply_of == 0)
                    {
                        // loop through all comments again
                        foreach ($comments as $reply_key => $reply)
                        {
                            // check if comment is a reply
                            if ($reply->reply_of == $comment->comment_id)
                            {
                                // add in replies array
                                array_push($replies, $reply);
                
                                // remove from comments array
                                unset($comments[$reply_key]);
                            }
                        }
                    }
                
                    // assign replies to comments object
                    $comment->replies = $replies;
                }
            
                ?>
                
                <ul class="comments">
                    <?php foreach ($comments as $comment): ?>
                        <li>
                            <p>
                                <?php echo $comment->name; ?>
                            </p>
                
                            <p>
                                <?php echo $comment->comment; ?>
                            </p>
                
                            <p>
                                <?php echo date("F d, Y h:i a", strtotime($comment->created_at)); ?>
                            </p>
        
                                        
                        </li>
                    <?php endforeach; ?>
                </ul>    
                
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
        <p>Are you sure you want to change the status to <input type="text" name="upstat" id="upstat" value="" readonly/>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="confirm">Confirm</button>
		<button type="button" data-dismiss="modal" class="btn" id="btncancel">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
</body>

<script>


    function showReplyForm(self) {
        var commentId = self.getAttribute("data-id");
        if (document.getElementById("form-" + commentId).style.display == "") {
            document.getElementById("form-" + commentId).style.display = "none";
        } else {
            document.getElementById("form-" + commentId).style.display = "";
        }
    }
    

    function showReplyForReplyForm(self) {
    var commentId = self.getAttribute("data-id");
    var name = self.getAttribute("data-name");
 
    if (document.getElementById("form-" + commentId).style.display == "") {
        document.getElementById("form-" + commentId).style.display = "none";
    } else {
        document.getElementById("form-" + commentId).style.display = "";
    }
 
    document.querySelector("#form-" + commentId + " textarea[name=comment]").value = "@" + name;
    document.getElementById("form-" + commentId).scrollIntoView();
    }




    function statusColor(){
        var cstatus=document.getElementById('txtstatus').value;
        if (cstatus=='Disapproved'){
            document.getElementById('txtstatus').style.background = "#dd4b39";
            document.getElementById('status_list').style.background = "#dd4b39";
            document.getElementById('status_list').style.color = "white";
        }else if (cstatus=='Approved'){
            document.getElementById('txtstatus').style.background = "#00a65a";
            document.getElementById('status_list').style.background = "#00a65a";
            document.getElementById('status_list').style.color = "white";
        }else{
            document.getElementById('txtstatus').style.background = "#f39c12";
            document.getElementById('status_list').style.background = "#f39c12";
            document.getElementById('status_list').style.color = "white";
        }
    }
    function changeSelected(){
        var cstatus_changed=document.getElementById('status_list').value;
    }
    function paymentType(){
        var dp1=document.getElementById('p1').value;
        var dp2=document.getElementById('p2').value;
        if(dp1 == "Full DownPayment" && dp2 == "Monthly Amortization"){
                $('#pd').hide();
                $('#ma').show();
                $('#dfc').hide();
                $('#sc').hide();
                $('#fdp').show();
                return;
        }
        if(dp1 == "Full DownPayment" && dp2 == "Deferred Cash Payment"){
                $('#pd').hide();
                $('#ma').hide();
                $('#dfc').show();
                $('#sc').hide();
                $('#fdp').show();
                return;
        }
        if (dp1 == "Partial DownPayment" && dp2 == "Monthly Amortization"){
                $('#pd').show();
                $('#ma').show();
                $('#dfc').hide();
                $('#sc').hide();
                $('#fdp').hide();
                return;
        }
        if(dp1 == "Partial DownPayment" && dp2 == "Deferred Cash Payment"){
                $('#pd').show();
                $('#ma').hide();
                $('#dfc').show();
                $('#sc').hide();
                $('#fdp').hide();
                return;
        }
        if(dp1 == "No DownPayment" && dp2 == "Monthly Amortization"){
                $('#pd').hide();
                $('#ma').show();
                $('#dfc').hide();
                $('#sc').hide();
                $('#fdp').hide();
                return;
        }
        if(dp1 == "No DownPayment" && dp2 == "Deferred Cash Payment"){
                $('#pd').hide();
                $('#ma').hide();
                $('#dfc').show();
                $('#sc').hide();
                $('#fdp').hide();
                return;
        }
        if(dp1 == "Spot Cash"){
                $('#space1').hide();
                $('#pd').hide();
                $('#ma').hide();
                $('#dfc').hide();
                $('#sc').show();
                $('#fdp').hide();
                return;
        }
    }

    function loadAll(){
        paymentType();
        statusColor();
        resFormat();
    }
	function resFormat(){

	}
</script>