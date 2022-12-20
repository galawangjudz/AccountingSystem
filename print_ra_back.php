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
    <link rel="stylesheet" href="css/print_ra_back.css">
</head>

<body>
<div class="text-center" style="padding:20px;">
	<input type="button" id="rep" value="Print" class="btn btn-info btn_print">
</div>
<div class="container_content" id="container_content" >
    <div class="card-body">
    <div class="doc_title">PURCHASE GUIDELINES AND POLICIES</div>
    Provisions in the Reservation Agreement shall apply.<br>
1.&nbsp;&nbsp;RESERVATION FEE<br>
&#8195;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Reservation money shall be paid to reserve the chosen lot of the buyer. Asian Land shall issue a corresponding Official Receipt for
&#8195;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the application.<br>
&#8195;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Reservation Fee for approved sale shall be valid for 45 days only. Any failure to make the necessary payments within the
&#8195;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prescribed period shall cause the forfeiture of my reservation fee.<br>
2.&nbsp;&nbsp;PAYMENT METHOD<br>
&#8195;&nbsp;A.&nbsp;&nbsp;BANK FINANCING<br>
&#8195;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;The required down payment shall be payable in equal monthly installments based on the down schedule payment with issued
&#8195;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;post-dated checks<br>
&#8195;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;The remaining balance is subject for application for bank financing. The client should provide the loan application requirements
&#8195;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;five (5) months prior to Full downpayment.<br>
&#8195;&nbsp;B.&nbsp;&nbsp;DEFERRED CASH PAYMENT<br>
&#8195;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;The 20% minimum required full down payment shall be considered as reservation fee, the balance of the contract price is payable
&#8195;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;within a maximum period of two (2) years for House & Lot: one (1) year for Lot only; and six (6) months for Fence only at zero<br>
&#8195;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Client shall issue post-dated checks.<br>
3.&nbsp;&nbsp;PENALTIES & FEES<br>
&#8195;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Past due shall be subject to 5% surcharge per month.<br>
&#8195;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Should any one (1) of the issued post - dated checks be dishonored by the drawee bank, a fee of PhP 500.00 will be charged.<br>
&#8195;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;All payments shall be subject to the provisions of Republic Act No. 6552.<br>
<b>PAYMENTS</b><br>
A. LOCAL
B. BANK - TO - BANK

Banco de Oro (BDO) Account #: 002 - 550 - 023 - 753
Bank of Philippines Islands (BPI) Account #: 460 - 1000 - 143
China Bank Savings (CBS) Account #: 623 - 300 - 010 - 276
Security Bank (SB) Account #: 0682 - 2486 - 59 - 001

For payment related inquiries, please visit: www.asianland.ph

MONTHLY HOUSEHOLD INCOME (Kindly check one)

A. MANDATORY REQUIREMENTS IF SELF - EMPLOYED

B. INCOME REQUIREMENTS IF OFW : any one (1) of the following
IF LOCALLY EMPLOYED: any one (1) of the following

C. ADDITIONAL REQUIREMENT

1. Miscellaneous Fee is payable upon Full Downpayment
2. A Maintenance Fee shall be charged to client, commencing on the first monthly downpayment, such as:

a. Streetlight (STL) Php 100.00 / month
b. Grass cutting (GCF) Php 2.00 per sq.m. / month

_______________________________
Client Signature over Printed Name / Date

Over-the-counter at our office located in Malolos. Checks should be made payable to ASIAN LAND STRATEGIES
CORPORATION

PURCHASE GUIDELINES AND POLICIES

Reservation money shall be paid to reserve the chosen lot of the buyer. Asian Land shall issue a corresponding Official Receipt for
the application.

The 20% minimum required full down payment shall be considered as reservation fee, the balance of the contract price is payable
within a maximum period of two (2) years for House & Lot: one (1) year for Lot only; and six (6) months for Fence only at zero
Client shall issue post-dated checks.
The required down payment shall be payable in equal monthly installments based on the down schedule payment with issued
post-dated checks
The remaining balance is subject for application for bank financing. The client should provide the loan application requirements
five (5) months prior to Full downpayment.

2. Share my information to affiliates and necessary third parties for any legitimate business purpose. I am assured that security systems are
employed to protect my information.
Reservation Fee for approved sale shall be valid for 45 days only. Any failure to make the necessary payments within the
prescribed period shall cause the forfeiture of my reservation fee.

3. Inform me of future customer campaigns, billing notifications and updates using the personal information I shared with the company. I
have read this form, understood its contents and consent to the processing of my personal data. I understand that my consent does not
preclude the existence of other criteria for the lawful processing of personal data, and does not waive any rights under the Data Privacy Act of
2012 and other applicable laws.

Client Signature over Printed Name / Date
_______________________________
1. Retain my information for a period of three (3) years for the date of cancellation of my account, or at such time that I submit to ALSC a
written cancellation of this consent, whichever is earlier. I agree that my information will be deleted/destroyed after this period.

PURCHASER'S PROFILE

In compliance with the Data Privacy Act (DPA) of 2012, and its implementing Rules and Regulations (IRR) effective since September 8, 2016, I allow
Asian Land Strategies Corporation (ALSC) to provide me certain services declared in relation to this closed sales report. As such, I agree and authorize
ALSC to:

CREDIT ASSESSMENT CHECKLIST

DATA PRIVACY CONSENT
R E M A R K S

Should any one (1) of the issued post - dated checks be dishonored by the drawee bank, a fee of PhP 500.00 will be charged.
Past due shall be subject to 5% surcharge per month.
All payments shall be subject to the provisions of Republic Act No. 6552.
    </div>

</div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>


<script type="text/javascript">
	$(document).ready(function($) 
	{ 

		$(document).on('click', '.btn_print', function(event) 
		{
			event.preventDefault();
			
			var element = document.getElementById('container_content'); 

			var opt = 
			{
			  margin:       [10,20,0,5],
			  filename:    'RA<?php echo $c_csr_no; ?>-'+'<?php echo $c_b1_last_name; ?>_'+'<?php echo $c_b1_first_name; ?>_'+'<?php echo $c_b1_middle_name; ?>'+'.pdf',
              
			  image:        { type: 'jpeg', quality: 2 },
			  html2canvas:  { dpi: 300, letterRendering: true, width: 780, height: 1500, scale:2},
			  jsPDF:        { unit: 'mm', format: 'legal', orientation: 'portrait' }
			};

			html2pdf().set(opt).from(element).save();

            //window.setTimeout(function(){
            //window.history.back();
           // }, 100);
		});

 
 
	});
	</script>
 
