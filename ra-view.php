<?php
include('functions.php');

$getID = $_GET['id'];
$usertype = $_SESSION['user_type'];

// Connect to the database
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}
// the query
$query = "SELECT x.*, y.ra_id, y.c_csr_status, y.c_reserve_status, y.c_ca_status, y.c_duration, y.c_csr_no as csr_num FROM t_approval_csr y inner join t_csr x on x.c_csr_no = y.c_csr_no WHERE y.c_csr_no = '" . $mysqli->real_escape_string($getID) . "'";
 
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
        $reserv_status = $row['c_reserve_status'];// status
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
        }

}
/* close connection */
$mysqli->close();
?>
<head>
    <link rel="stylesheet" href="css/TimeCircles.css"></script>
    <script src="js/TimeCircles.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

    h4{
        font-size:12px!important;
        font-weight:bold;
    }
    .modal-content{
    width:1035px;
    height:auto;
    margin-left:-200px;
    max-width:1035px;
        display: block!important; /* remove extra space below image */
    }
</style>
<body onload="loadAll()">

<div id="response" class="alert alert-success" style="display:none;">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <div class="message"></div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="timer_box">
            <div id="CountDown" data-date="<?php echo $duration; ?>"></div>
            <br>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <input type="hidden" value="<?php echo $p1; ?>" id="p1">
                <input type="hidden" value="<?php echo $p2; ?>" id="p2">
                 <h2 class="float-left">RA #<?php echo $ra_id; ?></h2>
                <div class="clear"></div>
            </div>
            <div class="panel-body form-group form-group-sm">
                <div class="row">
                    <div class="buttons">
                       
                                <a href="?page=csr-edit&id=<?php echo $getID; ?>" class="btn btn-primary">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a>
                                <a href="?page=mail&id=<?php echo $getID; ?>" data-csr-id="'.$row['c_csr_no'].'" data-email="'.$row['c_email'].'" data-invoice-type="'.$row['c_employment_status'].'" data-custom-email="'.$row['c_email'].'" class="btn btn-info"> E-mail&nbsp;&nbsp;<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> </a>

                                      <!-- Navbar Right Menu -->
                                
                              
                                    <li class="dropdown user user-menu">

                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                        <span class="btn btn-info" target="_blank">Print&nbsp;&nbsp;<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                                        </a>
                                        <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="print_ra.php?id=<?php echo $getID; ?>" class="btn btn-info">Print Front Page</a>
                                        <li><a class="dropdown-item" href="print_ra_back.php?id=<?php echo $getID; ?>" class="btn btn-info">Print Back Page</a>
                                        <li><a class="dropdown-item" href="print_agreement.php?id=<?php echo $getID; ?>" class="btn btn-info">Print Agreement Page</a>
                                        </ul>
                                    </li>
                                    <a attachment-id="<?php echo $getID; ?>" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal" id="upload_file">Upload file&nbsp;&nbsp;<span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></a>
                                    
                                <hr>
                                <?php if($reserv_status == 1  && $ca_status == 0){ ?>
                         
                                    <button type="button" id= "ca_approval_btn" csr-id =<?php echo $getID; ?> value=1 class="btn btn-success btn-lg btn-block">CA Approved <span class="glyphicon glyphicon-ok" aria-hidden="true"> </button>
                                    <button type="button" id= "dis_ca_approval_btn" csr-id =<?php echo $getID; ?> value=2 class="btn btn-danger btn-lg btn-block">CA Disapproved <span class="glyphicon glyphicon-remove" aria-hidden="true"> </button>
                                
                                <?php } ?> 

                        
                    </div>
                    <div class="titles"> Buyer's Profile</div>
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
                           
                               <!--      <tr>
                                        <td> <label id="lblupdatestatus3">COO Approval: </label> </td>
                                        <td> <?php echo $csr_status ?> </span>
                                    
                                    </tr>
                                    <tr> 
                                        <td><b>Reservation Status:</b></td>
                                        <td><?php echo $reserv_status ?></td>
                                    </tr>
                                    <tr>
                                        <div class="lbl_box2">
                                        <td> <label id="lblupdatestatus3">CA Approval: </label> </td>
                                        <td> <?php echo $ca_status ?>
                                        </div>
                                    </tr> -->
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
                            <div id="space1" class="space"></div>
                            <div id="space1" class="space"></div>
                            <div class="view_box" style="padding:20px;">
                            <table style="text-align:center;" class="table table-striped">
                                                <th style="text-align:center;">File Name</th>
                                                <th style="text-align:center;">Date Uploaded</th>
                                <?php
                                    $mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
                                    if ($mysqli->connect_error) {
                                        die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
                                    }
                                    $query1 = "SELECT * FROM tbl_attachments WHERE c_csr_no = '".$getID."' ORDER BY date_uploaded DESC";

                                    $results1 = $mysqli->query($query1);

                                    if($results1) {
                                        ?>
                                        
                                                <b>Attachments: </b>
                                                <?php
                                                while($row1 = $results1->fetch_assoc()):
                                                    
                                                    ?>
                                                
                                               
                                                    <tr>
                                                        <td style="width:50%;">
                                                        <div data-id='<?php echo $row1["id"]; ?>' class="attachment_name btn-link"><?php echo $row1["title"]; ?>
                                                </td>
                                                <td>
                                                        <?php echo $row1["date_uploaded"]; ?></div>
                                                </td>
                                                    </tr>
                                                

                                                <?php endwhile; ?>
                                                </table>
                                        <?php
                                        
                                    }
                                ?>
                                  
                            </div>
                        

                        <!--     add comment form here  -->
                            <div class="commentDiv">
                                <form  method="POST" id="add_comment">
                                    <input type="hidden" name="action" value="add_comment">
                                    <input type="hidden" class="form-control required" name="csr_id" value="<?php echo $getID; ?>">
                                    <input type="hidden" class="form-control required" name="name" value= "<?php echo $_SESSION['username'];?>">
                                    <div class="title_comment">Comment:</div>
                                        <textarea name="comment" id="txtarea_comment" rows="4" cols="50"></textarea>
                                        <input type="submit" id="action_add_comment" class="btn btn-success float-right" value="Add Comment">
                                </form>
                            </div>  

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
                <div class="comment_list">
                    <ul class="comments">
                        <?php foreach ($comments as $comment): ?>
                            <li>
                                <p>
                                    <div class="com_name"><?php echo $comment->name; ?></div>
                                </p>
                    
                                <p>
                                    <textarea class="com_comment" rows="3" style='max-width:100%;' readonly><?php echo $comment->comment; ?></textarea>
                                </p>
                    
                                <p>
                                    <div class="com_date"><?php echo date("F d, Y h:i a", strtotime($comment->created_at)); ?></div>
                                </p>
                                <hr>   
                            </li>
                        <?php endforeach; ?>
                    </ul>    
                </div>
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
        <p>Are you sure you want to change the status to <input type="text" name="upstat" id="upstat" value="" readonly/>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="confirm">Confirm</button>
		<button type="button" data-dismiss="modal" class="btn" id="btncancel">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="verify_stat" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Verify Status</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to verify CSR?</p>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="verify">Confirm</button>
		<button type="button" data-dismiss="modal" class="btn" id="btncancel">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

<div id="reopen_csr" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Reopen CSR</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to reopen CSR?</p>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="reopen">Confirm</button>
		<button type="button" data-dismiss="modal" class="btn" id="btncancel">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
</div>
<div class="modal fade" id="a_modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">User Info</h4>
				<button type="button" class="close" data-dismiss="modal"></button>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<form id="statform" action="update_duration.php?c_csr_no=<?php echo $getID ?>" method="post">
    <input type="hidden" name="samp_txt" id="samp_txt">
</form>
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
    /*     statusColor(); */
    }
</script>
<script>

    $("#CountDown").TimeCircles();
    $("#CountDown").TimeCircles({count_past_zero: false}).addListener(countdownComplete);
	
    function countdownComplete(unit, value, total){
        if(total<=0){
            //alert('RESERVATION ALREADY EXPIRED');
            //$(this).fadeOut('slow').replaceWith("<h3>RESERVATION ALREADY EXPIRED</h3>");
            document.getElementById("samp_txt").value="EXPIRED";
            updateStat();

        }
    }
</script>
<script>
        function updateStat(){
           // document.getElementById("samp_txt").onchange = function() {
            document.getElementById("statform").submit();
        //}
        }
</script>
<script>
	$(document).ready(function(){
		$('.attachment_name').click(function(){
			var csrno=$(this).data('id');
            $.ajax({
				url:'ajax_attachments.php',
				type:'post',
				data:{csrno:csrno},
				success:function(response){
					$('.modal-body').html(response);
					$('#a_modal').modal('show');
				}
			})
		});
	});
</script>
<script>
$('#upload_file').click(function(){
	uni_modal('Upload File','upload_files.php?id='+$(this).attr('attachment-id'));
})

</script>
