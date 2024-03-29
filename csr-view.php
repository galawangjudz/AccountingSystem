<?php
include('functions.php');

$getID = $_GET['id'];
$usertype = $_SESSION['user_type'];
$refno = $_GET['ref'];


// Connect to the database
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}
// the query
 $query = "SELECT * FROM t_csr WHERE c_csr_no = '" . $mysqli->real_escape_string($getID) . "'"; 
/* $query = "SELECT * FROM t_csr WHERE ref_no = '" . $mysqli->real_escape_string($getID) . "'"; */
$result = mysqli_query($mysqli, $query);
// mysqli select query
if($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $csr_no = $row['c_csr_no'];
        $lot_id = $row['c_lot_lid'];
        $lot_id = $row['c_lot_lid'];   
        $coo_approval = $row['coo_approval'];// status

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
   /*      $duration = $row['c_duration']; */
        }

}
/* close connection */

?>

<style>
    h4{
        font-size:12px!important;
        font-weight:bold;
    }
    h3{
        text-align:center;
        font-weight:bold;
    }
    #btnprint:hover{
        background-color:blue;
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
                 <h2 class="float-left">Reference #<?php echo $refno; ?></h2> 
                <div class="clear"></div>
            </div>
            <div class="panel-body form-group form-group-sm">
                <div class="row">
                    <div class="buttons">
                                <?php if($verify == 0){?>
                                    <a href="?page=csr-edit&id=<?php echo $getID; ?>" class="btn btn-primary">Edit <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a>
                                <?php } ?>
                                <a href="?page=mail&id=<?php echo $getID; ?>" data-csr-id="'.$row['c_csr_no'].'" data-email="'.$row['c_email'].'" data-invoice-type="'.$row['c_employment_status'].'" data-custom-email="'.$row['c_email'].'" class="btn btn-info"> E-mail <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> </a>
                                <a href="print_ra.php?id=<?php echo $getID; ?>" class="btn btn-info" target="_blank"> Print <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>
                           
                                <!-- <a href="print_ra.php?id=<?php echo $getID; ?>" class="btn btn-info" target="_blank"> Print <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> -->

     
                                    
                                    <!-- User Account Menu -->
                                    <li class="dropdown user user-menu">
                                        <!-- Menu Toggle Button -->
                                        <a href="#" class="btn btn-info" id="btnprint" data-toggle="dropdown">
                                        <!-- The user image in the navbar-->
                                        
                                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                        Print <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                        <!-- Drop down list-->
                                        <li><a class="dropdown-item" href="print_ra.php?id=<?php echo $getID; ?>">Print Front Page</a>
                                        <li><a class="dropdown-item" href="print_ra_back.php?id=<?php echo $getID; ?>">Print Back Page</a>
                                        <li><a class="dropdown-item" href="print_agreement.php?id=<?php echo $getID; ?>">Print Agreement Page</a>
                                        </ul>
                                    </li>
                                
                           

                                <!--  <a data-csr-id="<?php echo $getID ?>" class="btn btn-info compose-email"> E-mail <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> </a>
                                 -->
                                <hr>
                                <?php if($verify == 0){?> 
                                    <button type="button" csr-id =<?php echo $getID; ?> csr-lot-lid = <?php echo  $lot_id?> value="1" class="btn btn-success btn-lg btn-block sm-verification">Verified <span class="glyphicon glyphicon-ok" aria-hidden="true"> </button>                            
                                    <button type="button" csr-id =<?php echo $getID; ?> csr-lot-lid = <?php echo  $lot_id?> value="2" class="btn btn-danger btn-lg btn-block sm-verification2">Void <span class="glyphicon glyphicon-remove" aria-hidden="true"> </button>                            
                                <?php } ?>

                                <?php if($verify == 1 && $coo_approval == 0 && ($usertype == "COO" or $usertype == "IT Admin" )){ ?>
                                    <button type="button" data-csr-id =<?php echo $getID; ?> class="btn btn-success btn-lg btn-block new-coo-approval">COO Approved <span class="glyphicon glyphicon-ok" aria-hidden="true"> </button>
                                   
                                   <!--  <button type="button" csr-id =<?php echo $getID; ?> csr-lot-lid = <?php echo  $lot_id?> value="1" class="btn btn-success btn-lg btn-block coo-approval">COO Approved <span class="glyphicon glyphicon-ok" aria-hidden="true"> </button>
                                     --><button type="button" csr-id =<?php echo $getID; ?> csr-lot-lid = <?php echo  $lot_id?> value="3" class="btn btn-danger btn-lg btn-block coo-approval2">COO DisApproved <span class="glyphicon glyphicon-remove" aria-hidden="true"> </button>
                                  
                                 
                                <?php } ?>

                        
                    </div>
                    <div class="titles"> Buyer's Profile</div>
                        <br>
                        <?php $query2 = "SELECT * FROM t_csr_buyers WHERE c_csr_no = '" . $mysqli->real_escape_string($getID) . "'";
                        $result2 = mysqli_query($mysqli, $query2);
                        if($result2) {
                            while ($row = mysqli_fetch_assoc($result2)) { 
                                $buyer_count = $row['c_buyer_count']; // customer buyers no
                                $customer_last_name_1 = $row['last_name']; // customer last name
                                $customer_suffix_name_1 = $row['suffix_name']; // customer suffix name
                                $customer_first_name_1 = $row['first_name']; // customer first name
                                $customer_middle_name_1 = $row['middle_name']; // customer middle name
                                $cust_fullname1 = sprintf('%s %s, %s %s', $customer_last_name_1, $customer_suffix_name_1, $customer_first_name_1, $customer_middle_name_1); 
                                $customer_address_1 = $row['address']; // customer address
                                $customer_zip_code = $row['zip_code']; // customer zip_code
                                $customer_address_2 = $row['address_abroad']; // customer address abroad
                        
                                $birth_date = $row['birthdate']; // customer birthday
                                $customer_age = $row['age']; // customer age
                        
                                $customer_phone = $row['contact_no']; // customer phone number
                                $customer_email = $row['email']; // customer civil status
                                $customer_viber= $row['viber']; // customer viber
                                $customer_gender = $row['gender']; // customer phone number
                                $civil_status = $row['civil_status']; // customer civil status

                        ?>
                        <div class="view_box">
                            <div class="float-left col-xs-12">
                                <table class="table table-striped">
                                    <tr>
                                        <td><b>Buyer No: </b></td>
                                        <td><?php echo $buyer_count ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Buyer's Full Name:</b></td>
                                        <td><?php echo $cust_fullname1 ?></td>
                                    </tr>
                                 
                                    <tr>
                                        <td><b>Address 1:</b></td>
                                        <td><?php echo $customer_address_1 ?></td>
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
                                  
                                </table> 
                               
                            </div>       
                        </div>
                        <br>
                        <div class="space"></div>
                        <?php 
                               
                            }} 
                            $mysqli->close();?>
                       
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

</body>

<script>

    
    $('.new-coo-approval').click(function(){   
        uni_modal('Coo Approval','approval_setting.php?id='+$(this).attr('data-csr-id'))
    })

    $('.coo-approval2').click(function(){
		_conf("Are you sure to disapproved this csr?","coo_approval",[$(this).attr('csr-id'),$(this).attr('csr-lot-lid'),$(this).attr('value')])
	})



    $('.sm-verification').click(function(){
		_conf("Are you sure to verified this csr?","sm_verification",[$(this).attr('csr-id'),$(this).attr('csr-lot-lid'),$(this).attr('value')])
	})

    $('.sm-verification2').click(function(){
		_conf("Are you sure to void this csr?","sm_verification",[$(this).attr('csr-id'),$(this).attr('csr-lot-lid'),$(this).attr('value')])
	})
	function sm_verification($id,$lid,$value){
		start_load()
		$.ajax({
			url:'ajax.php?action=sm_verification',
			method:'POST',
            data:{id:$id,lid:$lid,value:$value},
			success:function(resp){
				if(resp==1){
					/* alert("CSR successfully approved",'success') */
                    $("#response .message").html("<strong>" + "Data Successfully saved" + "</strong> ");
                    $("#response").removeClass("alert-danger");
                    $("#response").removeClass("alert-warning");
                    $("#response").removeClass("alert-success");
                    $("#response").addClass("alert-success").fadeIn();
                    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					setTimeout(function(){
						location.reload()
					},1500)
                
                }else{
                    $("#response .message").html("<strong> Lot Already Verified </strong> ");
                    $("#response").removeClass("alert-danger");
                    $("#response").removeClass("alert-warning");
                    $("#response").removeClass("alert-success");
                    $("#response").addClass("alert-danger").fadeIn();
                    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
                   /*  alert("Lot already Reserved",'warning') */
					setTimeout(function(){
						location.reload()
					},1500)
                }
			},
			error:err=>{
				console.log()
				alert("An error occured")
			}
		})
	}




    $('.compose-email').click(function(){
           uni_modal('Compose Email','mail.php?id='+$(this).attr('data-csr-id')) 
    /*     uni_modal("Compose Email","mail.php?id='<?php echo $getID ?>") */
    })

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
    }
</script>



