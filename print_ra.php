<?php
//--->get app url > start

if (isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $ssl = 'https';
}
else {
  $ssl = 'http';
}
 
$app_url = ($ssl  )
          . "://".$_SERVER['HTTP_HOST']
          //. $_SERVER["SERVER_NAME"]
          . (dirname($_SERVER["SCRIPT_NAME"]) == DIRECTORY_SEPARATOR ? "" : "/")
          . trim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");

//--->get app url > end
header("Access-Control-Allow-Origin: *");

?>
<!DOCTYPE html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> 
	<script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>
</head>
<style>
    .watermark_sample{
    background-image: url("images/4.png");
    width:400px;
    background-repeat:no-repeat;
    position:absolute;
    height:350px;
    margin-top:860px;
    margin-left:375px;
    opacity:0.1;
}

</style>


<!DOCTYPE html>
<html lang="en">
<?php 
      include "includes/header.php" ;
      include('functions.php');?> 
  <?php
    $mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
    $query = "SELECT * from `t_csr` where c_csr_no = '{$_GET['id']}' ";

    $result = mysqli_query($mysqli, $query);

    // mysqli select query
    if($result) {
        while ($row = mysqli_fetch_assoc($result)) {
        
        $c_csr_no = $row['c_csr_no']; 
        $c_b1_last_name = $row['c_b1_last_name']; 
        $c_b2_last_name = $row['c_b2_last_name']; 
        $c_b1_first_name = $row['c_b1_first_name']; 
        $c_b2_first_name = $row['c_b2_first_name']; 
        $c_b1_middle_name = $row['c_b1_middle_name']; 
        $c_b2_middle_name = $row['c_b2_middle_name']; 
        $c_citizenship = $row['c_citizenship']; 
        $c_address = $row['c_address']; 
        $c_city_prov = $row['c_city_prov']; 
        $c_mobile_no = $row['c_mobile_no']; 
        $c_viber_no = $row['c_viber_no']; 
        $c_address_abroad = $row['c_address_abroad']; 
        $c_mobile_abroad = $row['c_mobile_abroad']; 
        $c_billing_address = $row['c_billing_address'];
        $c_birthday = $row['c_birthday'];  
        $c_age = $row['c_age'];  
        $c_tin = $row['c_tin'];  
        $c_zip_code = $row['c_zip_code'];  
        $c_id_presented = $row['c_id_presented'];
        $c_sex = $row['c_sex']; 
        $c_civil_status = $row['c_civil_status'];  
        $c_email = $row['c_email'];  
        $c_lot_area = $row['c_lot_area'];
        $c_price_sqm = $row['c_price_sqm'];
        $c_lot_discount_amt = $row['c_lot_discount_amt'];
        $c_lot_discount = $row['c_lot_discount'];
        $c_house_model = $row['c_house_model'];
        $c_date_created = $row['c_date_created'];
        $c_floor_area = $row['c_floor_area'];
        $c_house_discount = $row['c_house_discount'];
        $c_house_discount_amt = $row['c_house_discount_amt'];
        $c_house_price_sqm = $row['c_house_price_sqm'];
        $c_tcp = $row['c_tcp'];
        $remarks = $row['c_remarks'];
        $c_employment_status = $row['c_employment_status'];
        $c_lot_discount_percentage = $row['c_lot_discount'];

        $c_reservation = $row['c_reservation'];
        $c_terms = $row['c_terms'];
        $c_monthly_payment = $row['c_monthly_payment'];
        $amt_fnanced = $row['c_amt_financed'];
        $interest_rate = $row['c_interest_rate'];
        $down_percent = $row['c_down_percent'];
	}
}
/* close connection */
$mysqli->close();
?>
<head>
    <link rel="stylesheet" href="css/print_ra.css">
</head>
<body onload="printFront()">
<div class="text-center" style="padding:20px;">
	<input type="button" id="rep" value="Print" class="btn btn-info btn_print">
</div>
<div class="container_content" id="container_content" >
<img src="images/Header.jpg" class="img-thumbnail" style="height:95px;width:650px" alt="">
<h5 class="text-center"><b>RESERVATION APPLICATION</b></h5>
<div style="clear:both"></div>
    <div class="text-center" id="dateofsale"><b>Date of Sale:</b> <?php echo date("F d, Y",strtotime('c_date_created')) ?></div>
    <br>
    <div class="card-body">
    <div class="watermark_sample"></div>
        <div class="col-md-12" id="checkboxes">
            <div id="csr_status">
                <div style="float:left;margin-right:2px">
                    <input id="chkOption1" type="checkbox" name="chkOption1" />
                </div>
                <div style="float:left">
                    <label>NEW<label>
                </div>
                <div style="float:left;margin-right:2px">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                </div>
                <div style="float:left">
                    <label>REVISED<label>
                </div>
            </div>
            <div class="col-md-12">
                <div style="float:left;margin-right:2px">
                    <input id="chkOption1" type="checkbox" name="chkOption1" />
                </div>
                <div style="float:left">
                    <label>And<label>
                </div>
                <div style="float:left;margin-right:2px">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                </div>
                <div style="float:left">
                    <label>Spouses<label>
                </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <div style="float:left;margin-right:2px">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                </div>
                <div style="float:left">
                <label>Married To<label>
                </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <div style="float:left;margin-right:2px">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                </div>
                
                <div style="float:left">
                    <label>Minor/Represented by Legal Guardian<label>
                </div>
            </div>
        </div>
        <div class="doc_title">Name and Contact details of Purchaser's Spouse or Co-Owner - Details must be consistent will all documents</div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Last Name:</label>
                        <input type="text" value="<?php echo $c_b1_last_name; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Suffix Name:</label>
                        <input type="text" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">First Name:</label>
                        <input type="text" value="<?php echo $c_b1_first_name; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Middle Name:</label>
                        <input type="text" value="<?php echo $c_b1_middle_name; ?>" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Citizenship:</label>
                        <input type="text" value="<?php echo $c_citizenship; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="control-label" id="small_title">Civil Status:</label>
                        <div class="chkboxes">
                            <div style="float:left;margin-right:2px;">
                            <input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">SINGLE<label>
                            </div>
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">MARRIED<label>
                            </div>
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">WIDOWED<label>
                            </div>
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">SEPARATED<label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label class="control-label" id="small_title">Gender:</label>

                            <div style="float:left;margin-right:2px;">
                            <input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">M<label>
                            </div>
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">F<label>
                            </div>
                            
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Age:</label>
                        <input type="text" value="<?php echo $c_age; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Birthdate (MM-DD-YYYY):</label>
                        <input type="date" value="<?php echo $c_birthday; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Type of Valid ID presented:</label>
                        <input type="text" value="<?php echo $c_id_presented; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">TIN #:</label>
                        <input type="text" value="<?php echo $c_tin; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                    <label class="control-label" id="lbl_space">Contact Number:</label><br>	
                    <input type="text" value="<?php echo $c_mobile_no; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Viber Account:</label>
                        <input type="text" value="<?php echo $c_viber_no; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Email Address:</label>
                        <input type="text" value="<?php echo $c_email; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label class="control-label">Residential/Billing Address:</label>
                        <input type="text" value="<?php echo $c_address; ?>, <?php echo $c_city_prov; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Area Code:</label>
                        <input type="text" value="<?php echo $c_zip_code; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
    <div class="doc_title">Name and Contact details of Purchaser's Spouse or Co-Owner - Details must be consistent will all documents</div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Last Name:</label>
                        <input type="text" value="<?php echo $c_b2_last_name; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Suffix Name:</label>
                        <input type="text" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">First Name:</label>
                        <input type="text" value="<?php echo $c_b2_first_name; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Middle Name:</label>
                        <input type="text" value="<?php echo $c_b2_middle_name; ?>" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Citizenship:</label>
                        <input type="text" value="<?php echo $c_citizenship; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="control-label" id="small_title">Civil Status:</label>
                        <div class="chkboxes">
                            <div style="float:left;margin-right:2px;">
                            <input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">SINGLE<label>
                            </div>
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">MARRIED<label>
                            </div>
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">WIDOWED<label>
                            </div>
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">SEPARATED<label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label class="control-label" id="small_title">Gender:</label>
                                <div style="float:left;margin-right:2px;">
                                <input id="chkOption1" type="checkbox" name="chkOption1" />
                                </div>
                                <div style="float:left">
                                    <label class="light">M<label>
                                </div>
                                <div style="float:left;margin-right:2px;">
                                &nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                                </div>
                                <div style="float:left">
                                    <label class="light">F<label>
                                </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Age:</label>
                        <input type="text" value="<?php echo $c_age; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Birthdate (MM-DD-YYYY):</label>
                        <input type="date" value="<?php echo $c_birthday; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Type of Valid ID presented:</label>
                        <input type="text" value="<?php echo $c_id_presented; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">TIN #:</label>
                        <input type="text" value="<?php echo $c_tin; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                    <label class="control-label" id="lbl_space">Contact Number:</label><br>	
                    <input type="text" value="<?php echo $c_mobile_no; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Viber Account:</label>
                        <input type="text" value="<?php echo $c_viber_no; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Email Address:</label>
                        <input type="text" value="<?php echo $c_email; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label class="control-label">Residential/Billing Address:</label>
                        <input type="text" value="<?php echo $c_address; ?>, <?php echo $c_city_prov; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Area Code:</label>
                        <input type="text" value="<?php echo $c_zip_code; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
    <div class="doc_title">Name and Contact details of Purchaser's Spouse or Co-Owner - Details must be consistent will all documents</div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Last Name:</label>
                        <input type="text" value="<?php echo $c_b2_last_name; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Suffix Name:</label>
                        <input type="text" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">First Name:</label>
                        <input type="text" value="<?php echo $c_b2_first_name; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Middle Name:</label>
                        <input type="text" value="<?php echo $c_b2_middle_name; ?>" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Citizenship:</label>
                        <input type="text" value="<?php echo $c_citizenship; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="control-label" id="small_title">Civil Status:</label>
                        <div class="chkboxes">
                            <div style="float:left;margin-right:2px;">
                            <input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">SINGLE<label>
                            </div>
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">MARRIED<label>
                            </div>
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">WIDOWED<label>
                            </div>
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">SEPARATED<label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label class="control-label" id="small_title">Gender:</label>

                                <div style="float:left;margin-right:2px;">
                                <input id="chkOption1" type="checkbox" name="chkOption1" />
                                </div>
                                <div style="float:left">
                                    <label class="light">M<label>
                                </div>
                                <div style="float:left;margin-right:2px;">
                                &nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                                </div>
                                <div style="float:left">
                                    <label class="light">F<label>
                                </div>
    
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Age:</label>
                        <input type="text" value="<?php echo $c_age; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Birthdate (MM-DD-YYYY):</label>
                        <input type="date" value="<?php echo $c_birthday; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Type of Valid ID presented:</label>
                        <input type="text" value="<?php echo $c_id_presented; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">TIN #:</label>
                        <input type="text" value="<?php echo $c_tin; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                    <label class="control-label" id="lbl_space">Contact Number:</label><br>	
                    <input type="text" value="<?php echo $c_mobile_no; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Viber Account:</label>
                        <input type="text" value="<?php echo $c_viber_no; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Email Address:</label>
                        <input type="text" value="<?php echo $c_email; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label class="control-label">Residential/Billing Address:</label>
                        <input type="text" value="<?php echo $c_address; ?>, <?php echo $c_city_prov; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">Area Code:</label>
                        <input type="text" value="<?php echo $c_zip_code; ?>"  class="form-control form-control-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="investment_value" id="bottom_space">INVESTMENT VALUE</div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-0.5">
                    <div class="form-group">
                    &nbsp&nbsp&nbsp&nbsp<label class="control-label">Project:</label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-0.5">
                    <div class="form-group">
                    &nbsp&nbsp&nbsp&nbsp<label class="control-label">Block:</label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-0.5">
                    <div class="form-group">
                    &nbsp&nbsp&nbsp&nbsp<label class="control-label">Lot:</label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <div class="control-label" id="options">
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">Lot Only<label>
                            </div>
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">House Only<label>
                            </div>
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">House & Lot<label>
                            </div>
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">Fence<label>
                            </div>
                            <div style="float:left;margin-right:2px;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                            </div>
                            <div style="float:left">
                                <label class="light">Add Cost<label>
                            </div>
                            <input type="hidden" id="investment_type" name="investment_type" value="<?php echo isset($c_investment_type) ? $c_investment_type : ''; ?>" >
                        </div>
                    </div>
				</div>
            </div>
        </div>

        <!--------------------------------------------------------------------------------------------------------->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1" id="tcp_coverage">
                    <label class="control-label3">LOT:</label><br>
                    <label class="control-label3">HOUSE:</label><br>
                    <label class="control-label3">FENCE:</label><br>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="control-label2" id="lbliv">Lot Area:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="c_lot_area" name="c_lot_area" value="<?php echo $c_lot_area; ?>" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="control-label2" id="lbliv">Model:</label>
                        </div>
                        <div class="col-md-6">
                            <?php
                            $mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
                            $query1 = "SELECT * FROM t_model_house WHERE c_model = '" . $c_house_model . "'";

                            $result1 = mysqli_query($mysqli, $query1);
                            if($result1) {
                                while ($row = mysqli_fetch_assoc($result1)) {
                                    $c_model = $row['c_model']; 
                                }
                            }
                            ?>
                            <input type="text"  id="c_mod" value="<?php echo $c_model; ?>" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="control-label2" id="lbliv">Linear Meter:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="c_lot_price" name="c_lot_price" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                    <div class="col-md-4">
                            <label class="control-label2" id="lbliv">Price/SQM:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="c_house_price_sqm" name="c_house_price_sqm" value="<?php echo $c_floor_area; ?>" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="control-label2" id="lbliv">Floor Area:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="c_floor_area" name="c_floor_area" value="<?php echo $c_floor_area; ?>" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="control-label2" id="lbliv">Price/LM:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="c_house_price_lm" name="c_house_price_lm" value="<?php echo $c_house_price_sqm; ?>" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                    <div class="col-md-6">
                            <label class="control-label2" id="lbliv">LOT CONTRACT PRICE: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="c_floor_area" name="c_floor_area" value="<?php echo $c_floor_area; ?>" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label2" id="lbliv">HOUSE CONTRACT PRICE: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="c_floor_area" name="c_floor_area" value="<?php echo $c_floor_area; ?>" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label2" id="lbliv">FENCE CONTRACT PRICE: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="c_house_price_sqm" name="c_house_price_sqm" value="<?php echo $c_house_price_sqm; ?>" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="others_title" id="bottom_space">Others</div>

    <div class="card-body" id="others_main_div">
        <div class="container-fluid" id="lbl_div_others">
            <div class="row">
                <label class="control-label2" id="lbl1">Floor Elevation: </label>
            </div>
            <div class="row">
                <label class="control-label2" id="lbl1">Aircon Outlets: </label>
            </div>
            <div class="row">
                <label class="control-label2" id="lbl1">Aircon Grille: </label>
            </div>
            <div class="row">
                <label class="control-label2" id="lbl2">(for window-type) </label>
            </div>
            <div class="row">
                <label class="control-label2" id="lbl1">Convenience Outlet: </label>
            </div>
            <div class="row">
                <label class="control-label2" id="lbl1">Faucet: </label>
            </div>
            <div class="row">
                <label class="control-label2" id="lbl1">Others (specify): </label>
            </div>
        </div>
        <div class="container-fluid" id="lbl_units">
            <div class="row">
                <label class="control-label2" id="lbl1"></label>
            </div>
            <div class="row">
                <label class="control-label2" id="lbl1">___Unit/s</label>
            </div>
            <div class="row">
                <label class="control-label2" id="lbl1">___Unit/s</label>
            </div>
            <div class="row">
                <label class="control-label2" id="lbl3">___Unit/s</label>
            </div>
            <div class="row">
                <label class="control-label2" id="lbl1">___Unit/s</label>
            </div>
            <div class="row">
                <label class="control-label2" id="lbl1">___Unit/s</label>
            </div>
        </div>
        <div class="rdo_buttons">
            <div class="row">
                <input type="radio" id="rdo20meter" value="1">
                <label class="control-label" id="rdolight"> 0.20 meter</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="radio" id="rdo20meter" value="1">
                <label class="control-label" id="rdolight"> 0.40 meter</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="radio" id="rdo20meter" value="1">
                <label class="control-label" id="rdolight"> 0.60 meter</label>
            </div>
            <div class="row" id="r2">
                <input type="radio" id="rdo20meter" value="1">
                <label class="control-label" id="rdolight"> MBR</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="radio" id="rdo20meter" value="1">
                <label class="control-label" id="rdolight"> BR-1</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="radio" id="rdo20meter" value="1">
                <label class="control-label" id="rdolight"> BR-2</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="radio" id="rdo20meter" value="1">
                <label class="control-label" id="rdolight"> LIV</label>
            </div>
            <div class="row" id="r2">
                <input type="radio" id="rdo20meter" value="1">
                <label class="control-label" id="rdolight"> MBR</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="radio" id="rdo20meter" value="1">
                <label class="control-label" id="rdolight"> BR-1</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="radio" id="rdo20meter" value="1">
                <label class="control-label" id="rdolight"> BR-2</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="radio" id="rdo20meter" value="1">
                <label class="control-label" id="rdolight"> LIV</label>
            </div>
            <div class="row" id="r3">
                <input type="radio" id="rdo20meter" value="1">
                <label class="control-label" id="rdolight"> INTERIOR (2-gang)</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="radio" id="rdo20meter" value="1">
                <label class="control-label" id="rdolight"> EXTERIOR (2-gang)</label>
            </div>
            <div class="row">
                <input type="text" value="" class="form-control form-control-sm" id="txtfaucet">
            </div>
            <div class="row">
                <input type="text" value="" class="form-control form-control-sm" id="txtotherspecify">
            </div>
        </div>
        <div class="lbl_div_others_txtbox">
            <div class="row" id="lbl11">
            <input type="text" value="" class="form-control form-control-sm">
            </div>
            <div class="row" id="lbl12">
            <input type="text" value="" class="form-control form-control-sm">
            </div>
            <div class="row" id="lbl13">
            <input type="text" value="" class="form-control form-control-sm">
            </div>
            <div class="row" id="lbl9">
            <input type="text" value="" class="form-control form-control-sm">
            </div>
            <div class="row" id="lbl14">
            <input type="text" value="" class="form-control form-control-sm">
            </div>
            <div class="row" id="lbl15">
            <input type="text" value="" class="form-control form-control-sm">
            </div>
        </div>
    </div>
    <div class="card-body" id="processing_fee">
        <table>
            <tr>
            <div class="row">
                <div class="ml">   
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label class="control-label" id="pf_space">PROCESSING FEE</label>
                </div>
                <div class="col-md-2">   
                <input type="text" id="txtpf" value="" class="form-control form-control-sm">
                </div>
                <div class="ml">   
                    <label class="control-label">PF/mo.</label>
                </div>
                <div class="col-md-2">   
                <input type="text" id="txtpf" value="" class="form-control form-control-sm">
                </div>
                <div class="ml">   
                    <label class="control-label">LESS: APPLIED DISCOUNT</label>
                </div>
                <div class="col-md-2">   
                <input type="text" id="txtpf" value="" class="form-control form-control-sm">
                </div>
                <div class="ml">   
                    <label class="control-label">TOTAL</label>
                </div>
                <div class="col-md-2">   
                    <input type="text" id="txtpf1" value="" class="form-control form-control-sm">
                </div>
            </div>
            </tr>
        </table>
    </div>
    <div class="card-body" id="nobotspace">
        <div class="row">
            <div class="dp_sched">
                <div class="titles">DOWN PAYMENT SCHEDULE</div>
                <div class="row">
                    <input type="hidden" value="<?php echo $down_percent; ?>" id="down_percent">
                    <div style="float:left;margin-right:2px;">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                    </div>
                    <div style="float:left">
                        <label class="light">20%<label>
                    </div>
                    <div style="float:left;margin-right:2px;">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                    </div>
                    <div style="float:left">
                        <label class="light">30%<label>
                    </div>
                    <div style="float:left;margin-right:2px;">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                    </div>
                    <div style="float:left">
                        <label class="light">FDP<label>
                    </div>
                    <div style="float:left;margin-right:2px;">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                    </div>
                    <div style="float:left">
                        <label class="light"><input type="text" id="txtothers" value="" class="form-control form-control-sm"><label>
                    </div>
                </div>
                <div class="row" id="dplbl">
                    <div class="col-md-12">
                        <label class="control-label2">Down Payment Amount:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <label class="control-label2" id="spacetop">Less: Reservation Money:</label>
                    </div>
                    <div class="col-md-5">
                        <label class="control-label2" id="spacetop">Payable in (mos):</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <input type="text" value="<?php echo $c_reservation; ?>" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-5">
                        <input type="text" value="<?php echo $c_terms; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="spacetop">Partial Monthly Down Payment:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="title_sub">Monthly Down Payments</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2">PF/mo:</label>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label2">GCF/mo:</label>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label2">STL/mo:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-4">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-4">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="spacetop">Total Monthly Payment:</label>
                        <input type="text" value="<?php echo $c_monthly_payment; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="spacetop">Monthly Due Date:</label>
                        <input type="text" value="" id="monthly_due" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="ma">
            <div class="titles2">MONTHLY AMORTIZATION</div>
            <div class="sub"> *Based on In-House Financing pending Bank approval of Housing Loan</div>
                <div class="row">
                <div style="float:left;margin-right:2px;">
                    &nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                    </div>
                    <div style="float:left">
                        <label class="light">MDP-BF<label>
                    </div>
                    <div style="float:left;margin-right:2px;">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                    </div>
                    <div style="float:left">
                        <label class="light">FULL DP-DFC<label>
                    </div>
                    <div style="float:left;margin-right:2px;">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                    </div>
                    <div style="float:left">
                        <label class="light">CASH<label>
                    </div>
                </div>
                <div class="row" id="aflbl">
                    <div class="col-md-8">
                        <label class="control-label2">Amount to be financed:</label>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label2">In Years:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" value="<?php echo $amt_fnanced; ?>" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-4">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2" id="spacetop">Interest Rate:</label>
                    </div>
                    <div class="col-md-8">
                        <label class="control-label2" id="spacetop">Interest Factor:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $interest_rate; ?>" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-8">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="spacetop">Monthly Amortization Payment:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="title_sub">Monthly Payments</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label2">PF/mo:</label>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label2">GCF/mo:</label>
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
                        <label class="control-label2" id="spacetop">Total Monthly Payment:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="spacetop">Monthly Due Date:</label>
                        <input type="text" value="" id="monthly_due" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="sales">
                <div class="titles3">SALES</div>
                <div class="first_table">
                <?php
                $mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

                // output any connection error
                if ($mysqli->connect_error) {
                    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
                }

                // the query
                $query = "SELECT * FROM t_csr_commission WHERE c_csr_no = $c_csr_no";

                // mysqli select query
                $results = $mysqli->query($query);

                if($results) {

                    print '<table class="table-bordered" id="table-bordered1"><thead><tr>

                            <th class="agent_position2">POSITION</th>
                            <th>AGENT</th>
                            <th class="signature_width2">SIGNATURE</th>

                        </tr></thead><tbody>';

                    while($row = $results->fetch_assoc()) {

                        print '
                            <tr>
                                <td>'.$row["c_position"].'</td>
                                <td>'.$row["c_agent"].'</td>
                                <td id="border_right_none"></td>
                            </tr>
                        ';
                    }
                    print '</tr></tbody></table>';
                } else {
                    echo "<p>There are no project sites to display.</p>";
                }
                $results->free();
                $mysqli->close();
                ?>
                </div>
                <div class="second_table">
                    <table class="table-bordered">

                    <tbody>
                        <tr>
                            <td id="spc" class="agent_position3">SENIOR PROPERTY CONSULTANT</td>
                            <td></td>
                            <td class="signature_width3" id="border_right_none"></td>
                        </tr>
                        <tr>
                            <td id="spc">PC COORDINATOR</td>
                            <td></td>
                            <td id="border_right_none"></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row" id="sales_checkbox">
                                    <div style="float:left;margin-right:2px;">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                                    </div>
                                    <div style="float:left">
                                        <label class="light">REB<label>
                                    </div>
                                    <div style="float:left;margin-right:2px;">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                                    </div>
                                    <div style="float:left">
                                        <label class="light">PC<label>
                                    </div>
                                </div>
                            </td>
                            <td></td>
                            <td id="border_right_none"></td>
                        </tr>
                        <tr>
                            <td>Employee Referral</td>
                            <td></td>
                            <td id="border_right_none"></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <table width="100%" id="tblborder">
                    <tr><td><div class="notes">I have read and understood the Guidelines and Policies for In-House Financing and Data Privacy Consent at the back page.</div></td></tr>
                    <tr><td><div class="client_conforme">Client Conforme:</div><td></tr>
                    <tr><td>
                            <input type="text" class="txtSignature" value="Client's Signature Over Printed Name">
                    </td></tr>
                    <tr><td><div class="rec_app">RECOMMENDING APPROVAL:</div><td></tr>
                    <tr><td><div class="coo_name">PIA MARIE ISABELLE B. MADRID</div></td></tr>
                    <tr><td><div class="coo_val">Chief Operating Officer</div></td></tr>
                </table>
                <!--<table class="rec" width="100%">
                    <tr width="60%">
                        <td><div class="approval">Recommending Approval:</div>
                        <div class="coo_name">PIA MARIE ISABELLE B. MADRID</div><br>
                        <div class="coo_val">Chief Operating Officer</div>
                        </td>
                    </tr>
                </table>!-->
            </div>
        </div>
    </div>
    <div class="row">
        <table class="rem">
            <tr>
                <td width="50%" class="rightbd"><div class="doc_title_lastrem">REMARKS</div></td>
                <td width="25%" class="rightbd"><div class="doc_title_last">Fit to Lot Verification:</div></td>
                <td width="25%" class="rightbd"><div class="doc_title_last">Cashier Validation:</div></td>
            </tr>
            <tr>
                <td width="50%" class="withbd">
                    <textarea style="width: 100%; max-width: 98%; border:none; height:100%; margin-left:1px; margin-top:3px;"><?php echo $remarks; ?></textarea>
                </td>
                <td>
                    <table class="test">
                    <tr class="rightbdarch"><td style="text-align:left; padding-left:5px;">Architect Date:</td><td><input type="text" id="arch_date"></td></tr>
                    <tr><td class="rightbdarch2"></td></tr>
                    </table>
                </td>
                
                <td width="25%" class="rightbd">

                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
<script>
    ///////////////////////////BILLING ADDRESS///////////////////////////////////
function getLocal(){
	var rd1=document.getElementById('rdolocal');
	var rd2=document.getElementById('rdoabroad');
	if(rd1.checked==true){
		rd2.checked=false;
		document.getElementById('c_billing_address').value=document.getElementById("rdolocal").value;
	}
}
function getAbroad(){
	var rd1=document.getElementById('rdolocal');
	var rd2=document.getElementById('rdoabroad');
	if(rd2.checked==true){
		rd1.checked=false;
		document.getElementById('c_billing_address').value=document.getElementById("rdoabroad").value;
	}
}

///////////////////////////EMPLOYMENT STATUS///////////////////////////////////
function Unemployed(){
	var rd0=document.getElementById('rdounemployed');
	var rd1=document.getElementById('rdoemployed');
	var rd2=document.getElementById('rdoselfemployed');
	var rd3=document.getElementById('rdoocw');
	var rd4=document.getElementById('rdoretired');
	var rd5=document.getElementById('rdoothers');
	if(rd0.checked==true) { 
		rd1.checked=false;
		rd2.checked=false;
		rd3.checked=false;
		rd4.checked=false;
		rd5.checked=false;
		document.getElementById("c_employment_status").value = document.getElementById("rdounemployed").value; 
		document.getElementById("c_employment_status_others").readOnly = true;
	}
}
function Employed(){
	var rd0=document.getElementById('rdounemployed');
	var rd1=document.getElementById('rdoemployed');
	var rd2=document.getElementById('rdoselfemployed');
	var rd3=document.getElementById('rdoocw');
	var rd4=document.getElementById('rdoretired');
	var rd5=document.getElementById('rdoothers');
	if(rd1.checked==true) { 
		rd0.checked=false;
		rd2.checked=false;
		rd3.checked=false;
		rd4.checked=false;
		rd5.checked=false;
		document.getElementById("c_employment_status").value = document.getElementById("rdoemployed").value; 
		document.getElementById("c_employment_status_others").readOnly = true;
	}
}
function SelfEmployed(){
	var rd0=document.getElementById('rdounemployed');
	var rd1=document.getElementById('rdoemployed');
	var rd2=document.getElementById('rdoselfemployed');
	var rd3=document.getElementById('rdoocw');
	var rd4=document.getElementById('rdoretired');
	var rd5=document.getElementById('rdoothers');
	if(rd2.checked==true) { 
		rd0.checked=false;
		rd1.checked=false;
		rd3.checked=false;
		rd4.checked=false;
		rd5.checked=false;
		document.getElementById("c_employment_status").value = document.getElementById("rdoselfemployed").value; 
		document.getElementById("c_employment_status_others").readOnly = true;
	}
}
function OCW(){
	var rd0=document.getElementById('rdounemployed');
	var rd1=document.getElementById('rdoemployed');
	var rd2=document.getElementById('rdoselfemployed');
	var rd3=document.getElementById('rdoocw');
	var rd4=document.getElementById('rdoretired');
	var rd5=document.getElementById('rdoothers');
	if(rd3.checked==true) { 
		rd0.checked=false;
		rd1.checked=false;
		rd2.checked=false;
		rd4.checked=false;
		rd5.checked=false;
		document.getElementById("c_employment_status").value = document.getElementById("rdoocw").value; 
		document.getElementById("c_employment_status_others").readOnly = true;
	}
}
function Retired(){
	var rd0=document.getElementById('rdounemployed');
	var rd1=document.getElementById('rdoemployed');
	var rd2=document.getElementById('rdoselfemployed');
	var rd3=document.getElementById('rdoocw');
	var rd4=document.getElementById('rdoretired');
	var rd5=document.getElementById('rdoothers');
	if(rd4.checked==true) { 
		rd0.checked=false;
		rd1.checked=false;
		rd2.checked=false;
		rd3.checked=false;
		rd5.checked=false;
		document.getElementById("c_employment_status").value = document.getElementById("rdoretired").value; 
		document.getElementById("c_employment_status_others").readOnly = true;
	}
}
function Others(){
	var rd0=document.getElementById('rdounemployed');
	var rd1=document.getElementById('rdoemployed');
	var rd2=document.getElementById('rdoselfemployed');
	var rd3=document.getElementById('rdoocw');
	var rd4=document.getElementById('rdoretired');
	var rd5=document.getElementById('rdoothers');
	if(rd5.checked==true) { 
		rd0.checked=false;
		rd1.checked=false;
		rd2.checked=false;
		rd3.checked=false;
		rd4.checked=false;
		document.getElementById("c_employment_status").value = document.getElementById("rdoothers").value; 
		document.getElementById("c_employment_status_others").readOnly = false;
	}
}
function computeAge() {
    var now = new Date();                            
    var currentY = now.getFullYear();               
    var currentM= now.getMonth();                   

    var dobget = document.getElementById('c_birthdate').value; 
    var dob = new Date(dobget);                             
    var prevY = dob.getFullYear();                         
    var prevM = dob.getMonth();                             

    var ageY =currentY - prevY;
    var ageM =Math.abs(currentM- prevM);         

    document.getElementById('c_age').value = ageY;
}
function getAcronym(){
    var acronym =  document.getElementById('c_site');
    var code = model.options[acronym.selectedIndex].value;
    document.getElementById('c_site_txt').value = code;
}
///////////////////////////INVESTMENT TYPE///////////////////////////////////
function lotOnly(){
	var rd0=document.getElementById('rdolotonly');
	var rd1=document.getElementById('rdohouseonly');
	var rd2=document.getElementById('rdopackaged');
	var rd3=document.getElementById('rdoitothers');
	if(rd0.checked==true) { 
		rd1.checked=false;
		rd2.checked=false;
		rd3.checked=false;
		document.getElementById("c_investment_type").value = document.getElementById("rdolotonly").value; 
	}
}
function houseOnly(){
	var rd0=document.getElementById('rdolotonly');
	var rd1=document.getElementById('rdohouseonly');
	var rd2=document.getElementById('rdopackaged');
	var rd3=document.getElementById('rdoitothers');
	if(rd1.checked==true) { 
		rd0.checked=false;
		rd2.checked=false;
		rd3.checked=false;
		document.getElementById("c_investment_type").value = document.getElementById("rdohouseonly").value; 
	}
}
function Packaged(){
	var rd0=document.getElementById('rdolotonly');
	var rd1=document.getElementById('rdohouseonly');
	var rd2=document.getElementById('rdopackaged');
	var rd3=document.getElementById('rdoitothers');
	if(rd2.checked==true) { 
		rd0.checked=false;
		rd1.checked=false;
		rd3.checked=false;
		document.getElementById("c_investment_type").value = document.getElementById("rdopackaged").value; 
	}
}
function ITOthers(){
	var rd0=document.getElementById('rdolotonly');
	var rd1=document.getElementById('rdohouseonly');
	var rd2=document.getElementById('rdopackaged');
	var rd3=document.getElementById('rdoitothers');
	if(rd3.checked==true) { 
		rd0.checked=false;
		rd1.checked=false;
		rd2.checked=false;
		document.getElementById("c_investment_type").value = document.getElementById("rdoitothers").value; 
	}
}
///////////////////////////TITLE///////////////////////////////////
function getAnd(){
	var rdo0 = document.getElementById('rdoand');
	var rdo1 = document.getElementById('rdospouses');
	var rdo2 = document.getElementById('rdomarriedto');
	var rdo3 = document.getElementById('rdominorrep');

	if(rdo0.checked==true){
		rdo1.checked=false;
		rdo2.checked=false;
		rdo3.checked=false;
		document.getElementById("c_conjunction").value = document.getElementById("rdoand").value;
	}
}
function getSpouses(){
	var rdo0 = document.getElementById('rdoand');
	var rdo1 = document.getElementById('rdospouses');
	var rdo2 = document.getElementById('rdomarriedto');
	var rdo3 = document.getElementById('rdominorrep');

	if(rdo1.checked==true){
		rdo0.checked=false;
		rdo2.checked=false;
		rdo3.checked=false;
		document.getElementById("c_conjunction").value = document.getElementById("rdospouses").value;
	}
}
function getMarriedTo(){
	var rdo0 = document.getElementById('rdoand');
	var rdo1 = document.getElementById('rdospouses');
	var rdo2 = document.getElementById('rdomarriedto');
	var rdo3 = document.getElementById('rdominorrep');

	if(rdo2.checked==true){
		rdo0.checked=false;
		rdo1.checked=false;
		rdo3.checked=false;
		document.getElementById("c_conjunction").value = document.getElementById("rdomarriedto").value;
	}
}
function getMinorRep(){
	var rdo0 = document.getElementById('rdoand');
	var rdo1 = document.getElementById('rdospouses');
	var rdo2 = document.getElementById('rdomarriedto');
	var rdo3 = document.getElementById('rdominorrep');

	if(rdo3.checked==true){
		rdo0.checked=false;
		rdo1.checked=false;
		rdo2.checked=false;
		document.getElementById("c_conjunction").value = document.getElementById("rdominorrep").value;
	}
}
function concatName(){
	var lastname = document.getElementById("c_b1_last_name").value;
	var firstname = document.getElementById("c_b1_first_name").value;
	var middlename = document.getElementById("c_b1_middle_name").value;
	
	var res = firstname + ' ' + middlename + ' ' + lastname
	document.getElementById('c_client_name').value = res;
}
///////////////////////////DROPDOWN///////////////////////////////////
function selectPayment(){
    var dp1 = document.getElementById('c_payment_type1').value;
    var dp2 = document.getElementById('c_payment_type2').value;

    if(dp1=="PD" && dp2=="MA"){
        document.getElementById('div_partialdp').style.display="block";
        document.getElementById('div_fulldp').style.display="none";
        document.getElementById('div_sc').style.display="none";
        document.getElementById('div_ma').style.display="block";
        document.getElementById('div_dfc').style.display="none";  
    }else if(dp1=="PD" && dp2=="DFC"){
        document.getElementById('div_fulldp').style.display="none";
        document.getElementById('div_partialdp').style.display="block";
        document.getElementById('div_sc').style.display="none";
        document.getElementById('div_ma').style.display="none";
        document.getElementById('div_dfc').style.display="block";      
    }else if(dp1=="FD" && dp2=="MA"){
        document.getElementById('div_fulldp').style.display="block";
        document.getElementById('div_partialdp').style.display="none";
        document.getElementById('div_sc').style.display="none";
        document.getElementById('div_ma').style.display="block";
        document.getElementById('div_dfc').style.display="none";  
    }else if(dp1=="FD" && dp2=="DFC"){
        document.getElementById('div_fulldp').style.display="block";
        document.getElementById('div_partialdp').style.display="none";
        document.getElementById('div_sc').style.display="none";
        document.getElementById('div_ma').style.display="none";
        document.getElementById('div_dfc').style.display="block";
    }else if(dp1=="ND" && dp2=="MA"){
        document.getElementById('div_partialdp').style.display="none";
        document.getElementById('div_fulldp').style.display="none";
        document.getElementById('div_sc').style.display="none";
        document.getElementById('div_ma').style.display="block";
        document.getElementById('div_dfc').style.display="none";
    }else if(dp1=="ND" && dp2=="DFC"){
        document.getElementById('div_partialdp').style.display="none";
        document.getElementById('div_fulldp').style.display="none";
        document.getElementById('div_sc').style.display="none";
        document.getElementById('div_ma').style.display="none";
        document.getElementById('div_dfc').style.display="block";
    }else if(dp1=="SC"){
        document.getElementById('div_sc').style.display="block";
        document.getElementById('div_partialdp').style.display="none";
        document.getElementById('div_fulldp').style.display="none";
        document.getElementById('div_ma').style.display="none";
        document.getElementById('div_dfc').style.display="none";
        //document.getElementById('c_payment_type2').disabled="true";
    }    
}

///////////////////////////COMPUTATIONS///////////////////////////////////
function getVat(){
	var vat=document.getElementById('rdovat');
	var vatexempt=document.getElementById('rdovatexempt');
	if(vat.checked==true){
		vatexempt.checked=false;
		document.getElementById("c_vat_res").value = document.getElementById("rdovat").value;
	}
}
function getVatExempt(){
	var vat=document.getElementById('rdovat');
	var vatexempt=document.getElementById('rdovatexempt');
	if(vatexempt.checked==true){
		vat.checked=false;
		document.getElementById("c_vat_res").value = document.getElementById("rdovatexempt").value;
	}
}
function getTitleMonthly(){
	var titlemonthly=document.getElementById('rdotitlemonthly');
	var lumpsum=document.getElementById('rdolumpsum');
	if(titlemonthly.checked==true){
		lumpsum.checked=false;
		document.getElementById("c_title_monthly_res").value = document.getElementById("rdotitlemonthly").value;
	}
}
function getLumpsum(){
	var titlemonthly=document.getElementById('rdotitlemonthly');
	var lumpsum=document.getElementById('rdolumpsum');
	if(lumpsum.checked==true){
		titlemonthly.checked=false;
		document.getElementById("c_title_monthly_res").value = document.getElementById("rdolumpsum").value;
	}
}
function lotCalculation(){
	var l_area = document.getElementById("c_lot_area").value;
	var l_price = document.getElementById("c_price_sqm").value;
	var res = l_area * l_price;
		
	document.getElementById('c_lot_price').value = res;
	
	var l_disc_percentage = document.getElementById("c_lot_discount_percentage").value;

	var l_discount_amt = res*(l_disc_percentage*0.01);     
	var l_lcp = res - l_discount_amt; 

	document.getElementById('c_lot_discount_amount').value = l_discount_amt;
	document.getElementById('c_lcp').value = l_lcp;
}
function houseCalculation(){
    var h_price = document.getElementById('c_house_price_sqm').value;
    var h_flr_area = document.getElementById('c_floor_area').value;

	var res = h_price / h_flr_area;

	var h_disc_percentage = document.getElementById('c_house_discount').value;

	var h_discount_amt = h_price*(h_disc_percentage*0.01);     

	document.getElementById('c_house_discount_amt').value = h_discount_amt;
	var h_hcp = h_price - h_discount_amt

	document.getElementById('c_hcp').value = h_hcp;
	getTCP();
}
function getTCP(){
	var hcp = parseFloat(document.getElementById('c_hcp').value); 
	var lcp = parseFloat(document.getElementById('c_lcp').value); 

	var res = hcp + lcp;

	document.getElementById('c_tcp').value = res;
}
function getNTCP(){
	var tcp = document.getElementById('c_tcp').value;
	var tcp_disc = document.getElementById('c_tcp_discount').value;

	var res = tcp*(tcp_disc*0.01);
	var ntcp = tcp - res;

	document.getElementById('c_ntcp').value = ntcp;
}

//////////////////////////////////////////////////////////////////////////PRINT.PHP
function loadBasics(){

    loadEmpStatus();
	lotCalculation();
	houseCalculation();
	loadBillingAddress();
	loadGender();
	loadCivilStatus();	
	loadInvestmentType();
    loadDP();
}
function loadBillingAddress(){
	var billingaddress=document.getElementById("billing_address").value;
	if(billingaddress=='0'){
		document.getElementById('rdolocal').checked=true;
	}else{
		document.getElementById('rdoabroad').checked=true;
	}
}
function loadGender(){
	var gender=document.getElementById("gender").value;
	if(gender=='0'){
		document.getElementById("female").selected = true;
	}else{
		document.getElementById("male").selected = true;
	}
}
function loadCivilStatus(){
	var civil=document.getElementById("civil_status").value;
	if(civil=='0'){
		document.getElementById("married").selected = true;
	}else if(civil=='1'){
		document.getElementById("separated").selected = true;
	}else if(civil=='2'){
		document.getElementById("single").selected = true;
	}else{
		document.getElementById("widowed").selected = true;
	}
}

function loadInvestmentType(){
	var investment=document.getElementById("investment_type").value;
	if(investment=='0'){
		document.getElementById("rdolotonly").checked=true;
	}else if(investment=='1'){
		document.getElementById("rdohouseonly").checked=true;
	}else if(investment=='2'){
		document.getElementById("rdopackaged").checked=true;
	}else if(investment=='3'){
		document.getElementById("rdoitothers").checked=true;
	}
}

    function loadEmpStatus(){
	var empstats=document.getElementById("employment_status").value;
	if(empstats=='Unemployed'){
		document.getElementById("rdounemployed").checked=true;
	}else if(empstats=='Employed'){
		document.getElementById("rdoemployed").checked=true;
	}else if(empstats=='Self-Employed'){
		document.getElementById("rdoselfemployed").checked=true;
	}else if(empstats=='OCW'){
		document.getElementById("rdoocw").checked=true;
	}else if(empstats=='Retired'){
		document.getElementById("rdoretired").checked=true;
	}else if(empstats=='Others'){
		document.getElementById("rdoothers").checked=true;
        //document.getElementById("others").value=empstats;
	}
}
function loadDP(){
    var downpercent=document.getElementById("down_percent").value;
    if(downpercent=='20'){
        document.getElementById("cbo20").checked=true;
        return;
    }
    else if(downpercent=='30'){
        document.getElementById("cbo30").checked=true;
        return;
    }
    else if(downpercent=='0'){

        return;
    }
    else{
        document.getElementById("cboothers").checked=true;
        document.getElementById("txtothers").value=downpercent;
        return;
    }
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>


<script type="text/javascript">
    function printFront(){


			//credit : https://ekoopmans.github.io/html2pdf.js
			
			var element = document.getElementById('container_content'); 

			//easy
			//html2pdf().from(element).save();

			//custom file name
			//html2pdf().set({filename: 'code_with_mark_'+js.AutoCode()+'.pdf'}).from(element).save();


			//more custom settings
			var opt = 
			{
			  margin:       [0,5,0,5],
			  filename:    'RA<?php echo $c_csr_no; ?>-'+'<?php echo $c_b1_last_name; ?>_'+'<?php echo $c_b1_first_name; ?>_'+'<?php echo $c_b1_middle_name; ?>'+'.pdf',
              
			  image:        { type: 'jpeg', quality: 2 },
			  html2canvas:  { dpi: 300, letterRendering: true, width: 780, height: 1500, scale:2},
              //html2canvas:  { dpi: 2000, letterRendering: true, width: 216, height: 356, scale:2},
			  jsPDF:        { unit: 'mm', format: 'legal', orientation: 'portrait' }
			};

			// New Promise-based usage:
			html2pdf().set(opt).from(element).save();

            window.setTimeout(function(){
            window.history.back();
            }, 500);

        }
	</script>
 
