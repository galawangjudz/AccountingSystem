
<!DOCTYPE html>
<html lang="en">
<?php include "includes/header.php" ?>
  <?php
  $mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
?>

 <?php
$type = isset($_GET['type']) ? $_GET['type'] : 1 ;
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $mysqli->query("SELECT * from `t_csr` where c_csr_no = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }
}
?>
<style>
.rec{
    height:115px;
}
.dp_sched{
	width:25%;
	border:solid 1px black;
	padding:3px;
	display:inline-block;
	margin-left:7px;
    font-size:18px;;
}
.ma{
	width:25%;
	border:solid 1px black;
	padding:3px;
	display:inline-block;
	margin-left:7px;
    font-size:18px;;
}
.sales{
	width:47.9%;
	border:solid 1px black;
	padding:3px;
	display:inline-block;
	margin-left:7px;
    font-size:18px;;
}
.small_box_lot{
	width:32.5%;
	border:solid 1px white;
	padding:3px;
	display:inline-block;
	margin-left:7px;
    font-size:18px;;
}
.titles{
	background-color:#E0E0E0;
	font-weight:bold;
	text-align:center;
	margin-bottom:3px;
    padding-top: 3px;
    padding-right: 0px;
    padding-bottom: 3px;
    padding-left: 0px;
}
.small_box{
	width:33%;
	border:solid 1px white;
	padding:3px;
	display:inline-block;
    font-size:18px;;
}
.small_box1{
	width:33%;
	border:solid 1px white;
	display:inline-block;
    font-size:18px;;
}
.small_box2{
	width:32.5%;
	border:solid 1px white;
	padding:3px;
	display:inline-block;
	margin-left:7px;
}
.form-control{
    background-color:#E0E0E0;
    border-radius: 0px;
    margin-top:4px!important;
    font-size:18px!important;
    height:auto!important;
    padding-top:0px!important;
    padding-bottom:0px!important;
}
.control-label{
    display: inline-block;
    width: auto;
    font-style:italic;
    margin-bottom:0px;
}
.control-label2{
    display: inline-block;
    width: auto;
    font-style:italic;
    margin-bottom:0px;
    font-size:13px;
}
.control-label4{
    width: auto;
    font-style:italic;
    font-size:13px;
    width:auto;
    height:auto;
}
.control-label3{
    display: inline-block;
    width: auto;
    margin-bottom:6px;
    margin-top:5px;
    font-weight:normal!important;
}
.sub{
	background-color:#E0E0E0;
    text-align:center;
    font-size:12px;
    margin-top:-7px;
    line-height:15px;
}
img{
    margin-left: auto;
    margin-right: auto;
    border: none !important;
    display:block;
    width:100%;
    margin-top:none;
}
h3{
    margin-top:-60px;
    margin-left:100px;
}
#dateofsale{
    margin-top:-12px;
    margin-left:85px;
    margin-bottom:8px;
}
.card-body{
    border: 1px solid black!important;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px!important;
    padding-left: 0px;
}
#sales_checkbox{
    height:100%;
    width:100%;
    align-items:center;
    margin-left:20px;
    margin-right:20px;
}
.doc_title{
	width:100%;
    background-color:black;
    color:white;
    font-weight:bold;
    text-align:center;
    display:inline-block;
}
.doc_title_last{
	width:100%;
    background-color:black;
    color:white;
    font-weight:bold;
    text-align:left;
    display:inline-block;
    padding-left:5px;
}
.checkboxes{
    width:100%;
    margin-left:0.5%;
    height:-25px;
    display:inline-block;
}
.csr_status{
    width:50%;
    float:left;
    height:18px;
}
.csr_source{
    width:30%;
    float:right;
    height:18px;
}
#txtsrc{
    border:0;
    margin-left:5px;
    border-bottom:1px solid black;
    width:100px;
    height:25px!important;
}
.subcontainer{
    width:100%;
    height:25px;
    display:inline-block;
    margin-top:1px;
}
.client_label{
    width:60%;
    float:right;
}
.sidetexts{
    font-size:13px;
    float:left;
    width:35%;
    margin-left:0.5%;
}
.label1{
    height:4px;
}
.label2{
    font-style:italic;
}
#bottom_space{
    margin-bottom:3px;
}
#tcp_coverage{
	background-color:black;
    color:white;
	padding-top:0px !important;
	height:110px;
}
table td{
    text-align:center;
    border: 1px solid black;
}
.txtSignature{
    width: 100%;
    height:auto;
    text-align:center;
    border-right:none;
    border-left:none;
    border-bottom:none;
    border-top:solid 1px black;
    margin-top:25px;
}
.noborder{
    border: none;
}
body{
    margin-top:0px!important;
    height:100%;
    width:100%;
}
.container-fluid{
    margin-bottom:-10px;
}
table{
  font-weight:normal;
  font-size:15px;
}
.notes{
    font-style:italic;
    line-height:20px;
    padding-left:5px;
    padding-right:5px;
    font-size:15px;
}
.client_conforme{
    float:left;
    text-align:left;
    width:100%;
    height:auto;
    margin-bottom:10px;
    padding-left:15px;
    padding-right:5px;
}
.approval{
    float:left;
    text-align:left;
    width:100%;
    height:auto;
    padding-left:15px;
    padding-right:5px;
    margin-top:-25px;
}
.coo_val{
    font-size:15px;
    margin-bottom:-55px;
    height:50px;
}
.validation{
    font-size:15px;
    margin-top:92px;
}
.coo_name{
    width:auto;
    height:auto;
    margin-bottom:-25px;
}
#rdo_class{
    margin-top:8px;
    font-style:normal;
    font-weight:normal;
}
</style>
<img src="images/Header.jpg" class="img-thumbnail" style="height:110px;width:700px" alt="">
<h3 class="text-center"><b>CLOSED SALES REPORT</b></h3>
<div class="text-center" id="dateofsale"><b>Date of Sale:</b> <?php echo date("F d, Y",strtotime($c_date_created)) ?></div>

<?php 
    if ($mysqli -> connect_errno)
    {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
    $sql = "SELECT * from `t_csr` where c_csr_no = '{$_GET['id']}' ";
    $result = ($mysqli->query($sql));
    //declare array to store the data of database
    $row = []; 
    
    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }   
    ?>
    <?php
        if(!empty($row))
        foreach($row as $rows)
        { 
    ?>
    <div class="card-body">
        <div class="checkboxes">
            <div class="csr_status">
                <input type="checkbox" id="chknew" name="chknew" value="new">
                <label> NEW</label>&nbsp&nbsp&nbsp
                <input type="checkbox" id="chkrevised" name="chkrevised" value="revised">
                <label> REVISED</label>
            </div>
            <div class="csr_source">
                <input type="checkbox" id="chkmanning" name="chkmanning" value="manning">
                <label> Manning</label>
                <input type="checkbox" id="chkonline" name="chkonline" value="online">
                <label> Online</label>
                <input type="text" id="txtsrc" value="">
            </div>
        </div>
        <div class="doc_title">NAME OF BUYER</div>
        <div class="subcontainer">
            <div class="sidetexts">
                <label class="label1">Name/s you want shown or printed in the contract</label><br>
                <label class="label2">Please fill-out the box legibly</label>
            </div>
            <div class="client_label">
                <input type="checkbox" id="chkand" name="chkand" value="and">
                <label> And</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="checkbox" id="chkspouses" name="chkspouses" value="spouses">
                <label> Spouses</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="checkbox" id="chkmarriedto" name="chkmarriedto" value="marriedto">
                <label> Married To</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="checkbox" id="chkminorrep" name="chkminorrep" value="minorrep">
                <label> Minor/Represented by Legal Guardian</label>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Last Name:</label>
                        <input type="text" value="<?php echo $rows['c_b1_last_name']; ?>" class="form-control form-control-sm">
                        <input type="text" value="<?php echo $rows['c_b2_last_name']; ?>" class="form-control form-control-sm">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">First Name:</label>
                        <input type="text" value="<?php echo $rows['c_b1_first_name']; ?>" class="form-control form-control-sm">
                        <input type="text" value="<?php echo $rows['c_b2_first_name']; ?>" class="form-control form-control-sm">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Middle Name:</label>
                        <input type="text" value="<?php echo $rows['c_b1_middle_name']; ?>" class="form-control form-control-sm">
                        <input type="text" value="<?php echo $rows['c_b2_middle_name']; ?>" class="form-control form-control-sm">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Tax Identification No.:</label>
                        <input type="text" class="form-control form-control-sm">
                        <input type="text" class="form-control form-control-sm">
                        <input type="text" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="control-label">Address in the Philippines (Required):</label>
                        <input type="text" value="<?php echo $rows['c_address']; ?>"  class="form-control form-control-sm">
                        <label class="control-label">City/Province:</label>
                        <input type="text" value="<?php echo $rows['c_city_prov']; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Contact Numbers:</label>
                        <input type="text" value="<?php echo $rows['c_mobile_no']; ?>"  class="form-control form-control-sm">
                        <label class="control-label">Viber Account:</label>
                        <input type="text" value="<?php echo $rows['c_viber_no']; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="control-label">Address Abroad (if any):</label>
                        <input type="text" value="<?php echo $rows['c_address_abroad']; ?>"  class="form-control form-control-sm">
                        <input type="text" value=""  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Contact Numbers:</label>
                        <input type="text" value="<?php echo $rows['c_mobile_abroad']; ?>"  class="form-control form-control-sm">
                        <input type="text" value=""  class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                    <label class="control-label" id="lbl_space">Billing Address:</label><br>	
                    <input type="hidden" id="billing_address" value="<?php echo $rows['c_billing_address']; ?>">					
                    <input type="radio" id="rdolocal"/>
                    <label class="rdobtn">Local</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="rdoabroad"/>
                    <label class="rdobtn">Abroad</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Birthdate:</label>
                        <input type="date" id="birthdate" name="birthdate" value="<?php echo $rows['c_birthday']; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label class="control-label">Age:</label>
                        <input type="text" id="age" name="age" value="<?php echo $rows['c_age']; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label class="control-label">Gender:</label>
                        <input type="hidden" id="gender" value="<?php echo $rows['c_sex']; ?>">
                        <select class="form-control form-control-sm">
                        <option style="display:none">
                        <option id="female">Female</option>
                        <option id="male">Male</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Civil Status:</label>
                        <input type="hidden" id="civil_status" value="<?php echo $rows['c_civil_status']; ?>">
                        <select class="form-control form-control-sm">
                        <option style="display:none">
                        <option id="married">Married</option>
                        <option id="separated">Separated</option>
                        <option id="single">Single</option>
                        <option id="widowed">Widowed</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Email Address:</label>
                        <input type="text" id="email_address" name="email_address" value="<?php echo $rows['c_email']; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="control-label" id="lbl_space">Employment Status:</label><br>
                        <input type="hidden" id="employment_status" value="<?php echo $rows['c_employment_status']; ?>" class="form-control form-control-sm">					
                        <input type="radio" id="rdoemployed" value="employed">
                        <label class="rdobtn">Employed</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="radio" id="rdoselfemployed" value="selfemployed">
                        <label class="rdobtn">Self-Employed</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="radio" id="rdoocw" value="ocw">
                        <label class="rdobtn">OCW</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="radio" id="rdoretired" value="retired">
                        <label class="rdobtn">Retired</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="radio" id="rdoothers" value="others">
                        <label class="rdobtn">Others:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="others" name="others" value=""  class="form-control form-control-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="doc_title" id="bottom_space">INVESTMENT VALUE</div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-0.5">
                    <div class="form-group">
                    &nbsp&nbsp<label class="control-label">Project:</label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-0.5">
                    <div class="form-group">
                        <label class="control-label">Block:</label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-0.5">
                    <div class="form-group">
                        <label class="control-label">Lot:</label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <div class="control-label">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" id="rdolotonly" value="0">
                            <label class="control-label"> Lot Only</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <input type="checkbox" id="rdohouseonly" value="1">
                            <label class="control-label"> House Only</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <input type="checkbox" id="rdopackaged" value="2">
                            <label class="control-label"> House & Lot</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <input type="checkbox" id="rdoitothers" value="3">
                            <label class="control-label"> Others</label>
                            <input type="hidden" id="investment_type" name="investment_type" value="<?php echo isset($c_investment_type) ? $c_investment_type : ''; ?>" >
                        </div>
                    </div>
				</div>
            </div>
        </div>
        <div class="row">
            <div class="small_box_lot">
                <div class="titles">LOT</div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2">Lot Area:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" value="<?php echo $rows['c_lot_area']; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2">Price/SQM:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" value="<?php echo $rows['c_price_sqm']; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2">Lot Price:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2">Discount (%):</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2">Disc. Amount:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <label class="control-label2"></label><br>
                <div class="sub_titles"><b><i>NET LOT CONTRACT PRICE:</i></b></div>
                <input type="text" id="c_lcp" name="c_lcp" value="<?php echo isset($c_lcp) ? $c_lcp : ''; ?>" class="highlighted_textbox form-control form-control-sm">
            </div>
            <div class="small_box">
                <div class="titles">HOUSE</div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2">House Model:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" value="<?php echo $rows['c_house_model']; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2">Floor Area:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" value="<?php echo $rows['c_floor_area']; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2">House Price:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" value="<?php echo $rows['c_house_price_sqm']; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2">Misc. Fee:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2">Soil Poisoning:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <label class="control-label2"></label><br>
                <div class="sub_titles"><b><i>HOUSE CONTRACT PRICE:</i></b></div>
                <input type="text" id="c_hcp" name="c_hcp" value="<?php echo isset($c_hcp) ? $c_hcp : ''; ?>" class="highlighted_textbox form-control form-control-sm">
            </div>
            <div class="small_box">
                <div class="titles">OTHERS</div>
                <div class="row">
                    <div class="col-md-5">
                        <label class="control-label2">Fence:</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <label class="control-label2">Provision for 2F:</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label2">Add Flr Elevation:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <label class="control-label2">UPGRADE</label>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-9">
                        <label class="control-label2">Sliding Glass Analek Windows: </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                        <label class="control-label2">Floor Finishes: </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                        <label class="control-label2">ACU hole, outlet & grills: </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="control-label2"><b><i>TOTAL ADD-ONS:</i></b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="" class="highlighted_textbox form-control form-control-sm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="buyer_info_box">	
            <div class="row">
                <div class="small_box2" id="tcp_coverage">
                    <label class="control-label3">TOTAL CONTRACT PRICE:</label><br>
                    <label class="control-label3">TITLING FEE:</label><br>
                    <label class="control-label3">TOTAL SELLING PRICE:</label><br>
                </div>
                <div class="small_box2">
                    <input type="text" value="<?php echo $rows['c_tcp']; ?>" class="form-control form-control-sm">
                    <input type="text" value="" class="form-control form-control-sm">
                    <input type="text" value="" class="form-control form-control-sm">
                </div>
                <div class="small_box2">
                    <div class="row">
                        <div class="col-md-4">
                                <input type="hidden" id="c_vat_res" name="c_vat_res">
                                <input type="hidden" id="c_title_monthly_res" name="c_title_monthly_res">
                                <input type="checkbox" id="rdovat">
                                <label class="control-label" id="rdo_class">VAT:</label><br>		
                                <input type="checkbox" id="rdotitlemonthly">
                                <label class="control-label" id="rdo_class">Monthly: </label>&nbsp&nbsp&nbsp
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="" class="form-control form-control-sm">					
                            <input type="text" value="" class="form-control form-control-sm">					
                        </div>
                        <div class="col-md-5">
                                &nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" id="rdovatexempt">
                                <label class="control-label" id="rdo_class">VAT-exempt </label><br>		
                                &nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" id="rdolumpsum">
                                <label class="control-label" id="rdo_class">Lumpsum </label>&nbsp&nbsp&nbsp
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="dp_sched">
                <div class="titles">DOWN PAYMENT <br/>SCHEDULE</div>
                <div class="row">
                    <div class="col-md-4">
                        <input type="checkbox">
                        <label class="control-label4"> 20%</label>&nbsp&nbsp&nbsp
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" class="control-label2">
                        <label class="control-label4"> 30%</label>&nbsp&nbsp&nbsp
                    </div>
                    <div class="col-md-1">
                        <input type="checkbox" class="control-label2">
                    </div>
                    <div class="col-md-3">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2">Down Payment Amount:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <label class="control-label2">Less: Reservation Fee:</label>
                    </div>
                    <div class="col-md-5">
                        <label class="control-label2">Payable in (mos):</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-5">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2">Monthly Amortization Payment:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label2">Mo. Closing Fee:</label>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label2">Mo. Maintenance Fee:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2">Total Monthly Payment:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2">Monthly Due Date:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="ma">
            <div class="titles">MONTHLY AMORTIZATION</div>
            <div class="sub"> *Based on In-House Financing pending <br/>Bank approval of Housing Loan</div>
                <div class="row">
                    <div class="col-md-4">
                        <input type="checkbox" class="control-label2">
                        <label class="control-label4"> MDP-BF </label>&nbsp&nbsp&nbsp
                    </div>
                    <div class="col-md-5">
                        <input type="checkbox" class="control-label2">
                        <label class="control-label4"> FULL DP-DFC </label>&nbsp&nbsp&nbsp
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" class="control-label2">
                        <label class="control-label4"> CASH </label>&nbsp&nbsp&nbsp
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <label class="control-label2">Amount to be financed:</label>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label2">In Years:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-4">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2">Interest Rate:</label>
                    </div>
                    <div class="col-md-8">
                        <label class="control-label2">Interest Factor:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-8">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2">Partial Monthly Down Payment:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label2">Mo. Closing Fee:</label>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label2">Mo. Maintenance Fee:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2">Total Monthly Payment:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2">Monthly Due Date:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="sales">
                <div class="titles">SALES</div>
                <table width="100%">
                    <tr>
                        <td width="30%" class="table_head">POSITION</td>
                        <td width="50%" class="table_head">AGENT</td>
                        <td width="20%" class="table_head">SIGNATURE</td>
                    </tr>
                    <tr>
                        <td width="30%">Sales Director</td>
                        <td width="50%">ZANDRO LEMUEL SANTOS</td>
                        <td width="20%"></td>
                    </tr>
                    <tr>
                        <td width="30%">Sales Manager</td>
                        <td width="50%">DEVIE ROQUE</td>
                        <td width="20%"></td>
                    </tr>
                    <tr>
                        <td width="30%">PC Coordinator</td>
                        <td width="50%">WOW Properties PH Realty</td>
                        <td width="20%"></td>
                    </tr>
                    <tr>
                    <td width="25%">
                        <div class="row" id="sales_checkbox">
                            <div class="col-md-5">
                                <input type="checkbox" class="control-label2">REB
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" class="control-label2">PC
                            </div>
                        </div>
                        </td>
                        <td width="50%"></td>
                        <td width="25%"></td>
                    </tr>
                    <tr>
                        <td width="25%">Employee Referral</td>
                        <td width="50%"></td>
                        <td width="25%"></td>
                    </tr>
                </table>
                <table width="100%">
                    <tr><td><div class="notes">I have read and understood the Guidelines and Policies for In-House Financing and Data Privacy Consent at the back page.</div></td></tr>
                    <tr><td><div class="client_conforme">Client Conforme:</div><br>
                    <?php echo $rows['c_b1_first_name']; ?> <?php echo $rows['c_b1_middle_name']; ?> <?php echo $rows['c_b1_last_name']; ?><br>
                            <input type="text" class="txtSignature" value="Client's Signature Over Printed Name">
                    </td></tr>
                </table>
                <table class="rec" width="100%">
                    <tr width="60%">
                        <td><div class="approval">Recommending Approval:</div><br><br>
                        <div class="coo_name">PIA MARIE ISABELLE B. MADRID</div><br>
                        <div class="coo_val">Chief Operating Officer</div>
                        </td>
                        <td><div class="validation">Validation</div></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <table width="99.5%">
                <tr>
                    <td width="75%"><div class="doc_title_last">REMARKS</div></td>
                    <td width="25%"><div class="doc_title_last">CHECKED AND VERIFIED BY:</div></td>
                </tr>
                <tr>
                    <td width="75%">
                        <textarea style="width: 100%; max-width: 98%;" class="noborder"></textarea>
                    </td>
                    <td width="25%">
                        <input type="text" value="" style="width: 100%; max-width: 98%;" class="noborder">
                        <input type="text" value="VSB, SMO dated" style="width: 100%; max-width: 98%;" class="noborder">
                        <input type="text" value="" style="width: 100%; max-width: 98%;" class="noborder">
                    </td>
                </tr>
            </table>
        </div>
    </div>
<?php } ?>
<hr>
</body>
</html>