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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> 
	<script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>
</head>
<style>
.container-content{
    border:none!important;
}
.card-body{
    border:none!important;
    text-align:justify;
    font-size:10.5px;
    line-height:13.5px;
}
.watermark_sample{
    background-image: url("images/4.png");
    width:400px;
    background-repeat:no-repeat;
    position:absolute;
    height:350px;
    margin-top:900px;
    margin-left:350px;
    opacity:0.1;
}
</style>

<body onload="printAgreement()">
<div class="text-center" style="padding:20px;">
	<input type="button" id="rep" value="Print" class="btn btn-info btn_print">
</div>
<div class="container_content" id="container_content">
<img src="images/Header.jpg" class="img-thumbnail" style="height:95px;width:650px" alt="">
<h5 class="text-center"><b>RESERVATION AGREEMENT</b></h5>
<div style="clear:both"></div>
    <br>
    <div class="card-body">
        <div class="watermark_sample"></div>
    I hereby offer to purchase from Asian Land Strategies Corporation (“ALSC”, “Seller”) the following property (“Property”) and request that the property be reserved for my
purchase. Project Name and Phase ___________________________ Block ______ Lot ______ . The property is to be paid by me in the manner I chose as indicated in the
attachments and understand that the purchase price is valid only for the payment scheme and manner of payment which has been selected herein. I request that the
Property be reserved, and for this purpose I deposit the amount of Pesos: ___________________________________ (Php ____________) my reservation money for the
Property. Should I decide to change the selected payment manner, such change will be effective only upon the approval of the Seller, and will also result in a change of
Purchase Price and amendment of necessary documents.<br><br>
I understand and agree that my reservation for the property is subject to the following Terms and Conditions:<br>

1.&#8195;That &nbsp;the &nbsp;Reservation &nbsp;for &nbsp;the &nbsp;property &nbsp;specified &nbsp;above&nbsp; is good&nbsp;&nbsp; only &nbsp;&nbsp;for &nbsp;&nbsp;a &nbsp;&nbsp;period of &nbsp;&nbsp;forty-five (45) &nbsp;&nbsp;calendar &nbsp;&nbsp;days &nbsp;&nbsp;from the &nbsp;&nbsp;payment of the &nbsp;&nbsp;reservation money &#8195;&#8195;and I
understand that Seller reserves the right to approve or deny my offer for reservation.<br>
2.&#8195;Reservation Money/Check shall not produce the effect of payment until proceeds thereof have been actually received by ALSC and issued with a Collection Receipt /
Sales &#8195;&#8195;Invoice for the application.<br>
3.&#8195;I undertake to submit to the Seller a completely filled out Reservation Application with all the information, requirements and documentation required in connection
with &#8195;&#8195;the sale and that I understand that this RA shall be deemed cancelled in case I fail to submit all requirements, documents and information within fifteen (15) days
from &#8195;&#8195;the date of reservation. I also understand that an additional house account shall be treated as a separate account and shall be subject to the terms and conditions
and &#8195;&#8195;documentation distinct from the lot account. I undertake to submit to full credit assessment which may be conducted by the Seller in connection to the purchase
of the &#8195;&#8195;Property.<br>
4.&#8195;It is further agreed that my Reservation is valid and binding only when approved by the Seller and my payments will be forfeited in favor of the Seller, if my application
is &#8195;&#8195;not approved.<br>
&#8195;&#8195;A.&#8195;If my purchase of the Property is approved by the Seller, I agree to comply with all the conditions for purchase which are or may be prescribed by the Seller for
the &#8195;&#8195;&#8195;&#8195;purchase of the Property, including but not limited to (i) obtaining a Credit Life Insurance plus Fire Insurance from a reputable insurance provider acceptable
to the &#8195;&#8195;&#8195;&#8195;Seller in an amount sufficient to cover the value of the Property or, subject to the acceptance of the Seller, assigning to the Seller, as beneficiary to the
extent of the &#8195;&#8195;&#8195;&#8195;unpaid balance of the Purchase Price of the Property, my existing life insurance policy, and (ii) submitting post dated checks covering the installment
payment due &#8195;&#8195;&#8195;&#8195;under the agreed payment scheme. I understand that a penalty will be charged to me upon my failure to fund said checks.
<br>&#8195;&#8195;B.&#8195;If the purchase of the Property is disapproved, I understand that I may still purchase the Property only under any of the following payment schemes which may be
&#8195;&#8195;&#8195;&#8195;prescribed by the Seller: (i) cash scheme, where I agree to pay the Purchase Price, taxes and other costs in full; or (ii) deferred cash payment scheme (refer to
&#8195;&#8195;&#8195;&#8195;Reservation Application).<br>
5.&#8195;Should I decide to cancel the reservation, or if unable to settle the amount due on the date stipulated, it is understood that the reservation shall lapse and the
reservation &#8195;&#8195;money shall be forfeited. I agree that any failure by me to make the necessary payments forty-five (45) days from the date of payment of the reservation
shall cause the &#8195;&#8195;full forfeiture in favor of the Seller and that the latter shall have the right to automatically cancel the reservation without further notice as liquidated
damages. It is &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;understood that in any event of cancellation of this Reservation Agreement, the Seller shall be free to dispose of the Property as if this Reservation
Agreement had not &#8195;&#8195;been executed.<br>
6.&nbsp;&#8195;In the event that I fail to pay any amounts due under my payment scheme in relation to my purchase of the property, or fail to comply with my undertakings herein, or
fail &#8195;&#8195;to execute the relevant Contract to Sell and/or Deed of Absolute Sale for the property, or comply with the terms of my purchase, then the Seller shall have the
option to &#8195;&#8195;cancel the sale and refund all payments less: (i) The Reservation Fee, which shall be forfeited in favor of the Seller as liquidated damage; (ii) Broker’s
commission; (iii) &#8195;&#8195;Any unpaid charges and dues on the Property ; (iv) Taxes and expenses paid by the Seller to the government or third parties in connection herewith;
(v) Construction bond &#8195;&#8195;for my construction works, if applicable; (vi) any amount determined by the Seller to be necessary to restore the Property to the same physical
condition it was found &#8195;&#8195;at the time of acceptance of the Property. I understand that remittance to the Bureau of Internal Revenue of the applicable creditable
withholding tax (CWT) on my &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;payments is required under applicable rules and regulations. Should a delay in the remittance of the CWT arise by the reason of the
information I provide herein, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;including information on whether I am engaged in business, I undertake to pay and not to hold the Seller liable for any penalty and/or
surcharge, costs, and expenses &#8195;&#8195;which may be incurred in connection with such delay.<br>
7.&#8195;It is agreed that this Reservation is transferable only to immediate family members, and any third party transfer made by me shall be void and shall cause for the
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cancellation of the Reservation and forfeiture of my reservation money and other payment.<br>
8.&#8195;That I certify that I have personally inspected the Property subject of this reservation and I have found the same to be satisfactory.
<br>9.&nbsp;&#8195;In the event the subject property is unavailable for sale to me due to a prior sale commitment, the same having been offered to me by mistake or inadvertence, I agree
to &#8195;&#8195;have the subject property exchanged with a property of equal value, or to the cancellation of the reservation agreement, subject to the reimbursement of all my
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;payments previously made by me by reason of this reservation.<br>
10.&#8195;Any provision to the contrary withstanding, I hereby agree and acknowledge that the Seller has the right to cancel and rescind this reservation for any cause
whatsoever &#8195;&#8195;at any time before issuance of my Contract to Sell by giving written notice of its intention and refunding to me all payments made by virtue thereof.
<br>11.&#8195;I hereby undertake to execute the Contract to Sell with the seller upon payment of the down payment, and the Deed of Absolute Sale with the Seller upon full payment
of &#8195;&#8195;the Purchase Price and all amounts due on the purchase of the property. The contracts will be in the form and under the terms prescribed by the Seller. I confirm
that &#8195;&#8195;upon full payment, the Seller shall have the right to execute a Deed of Absolute Sale in my favor. I understand that non delivery of the copy of Contract to Sell shall
not &#8195;&#8195;delay the commencement of the payment of the monthly installment due.<br>
12.&#8195;I agree that all taxes, fees and expenses which are imposed or incurred in connection with the sale of the Property, execution of documents with the Registry of Deeds,
&#8195;&#8195;and the transfer in my favor of the certificates of title covering the property, and any increase in the rates prevailing of the date of this reservation of all taxes, fees and
&#8195;&#8195;expenses shall be for my account.<br>
13.&#8195;I agree that the purchase of the property is subject to the covenants and restrictions as specified in the project’s Deed of Restrictions, and that I undertake to faithfully
&#8195;&#8195;comply with. That compliance herein is an essential consideration of the sale by the Seller of the Property to me and all other agreements executed in connection
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;herewith.<br>
14.&#8195;I warrant that the information provided are true and correct as of the date hereof and agree to inform the Seller of any changes in my personal data such as name,
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;address and contact details. I also warrant that the funds used for the purchase of the property is obtained through legitimate means and do not constitute all or part
of &#8195;&#8195;proceeds of any unlawful activity under applicable laws. I hereby hold Seller free and harmless from any incident, claim, action or liability arising from the breach of
my &#8195;&#8195;warranty herein, and hereby authorize the Seller to disclose to any government body or agency any information pertaining to this sale and purchase transaction if
so &#8195;&#8195;warranted and required under existing laws.<br>
15.&#8195;To facilitate continuous vital and crucial communication between the Seller, I agree to join the Viber Contact and Channel of Seller, whose main number is 0917-523-
&#8195;&#8195;7373. I commit not to leave the said Viber Channel to assure that I always receive and send any communication required under the herein Contract. I agree to update
my &#8195;&#8195;contact information yearly.<br>
16.&#8195;This Reservation Agreement constitutes the complete understanding between parties with respect to the subject matter and supersedes any prior expression of intent,
&#8195;&#8195;representation or warranty with respect to this transaction. ALSC is not and shall not be bound by stipulations, representations, agreements, or promises, oral or
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;otherwise not contained in this agreement. That any representation to me by the agent who handled this sale not embodied herein shall not be binding on the Seller
&#8195;&#8195;unless reduced into writing and confirmed by the President of ALSC and this contract shall not be considered as changed, modified, altered or in any way amended by
&#8195;&#8195;acts of tolerance of ALSC, unless such changes, modification or amendments are made in writing and signed by the aforementioned officer. Only duly authorized
officers &#8195;&#8195;of the company are allowed to make commitments for and in behalf of ALSC.<br>
17.&#8195;I understand and agree that this Reservation Agreement only gives me the right to purchase the property and that no other right, title or ownership is vested upon me
by &#8195;&#8195;the execution of the Reservation Agreement. The Seller retains title and ownership of the property until my full payment of all amounts due to the Seller by reason
of &#8195;&#8195;purchase of the Property.<br><br><br>

&#8195;&#8195;&#8195;&#8195;&#8195;I conform to the foregoing and certify that all information provided herein are true and correct.<br><br><br>
&#8195;&#8195;&#8195;&#8195;&#8195;______________________________________________________&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;______________________________________________________<br>
&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&nbsp;Client’s Signature over Printed Name/Date Purchase&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;Client’s Signature over Printed Name/Date Purchase<br><br>
<br>&#8195;&#8195;&#8195;&#8195;&#8195;Witnessed by:<br><br>
&#8195;&#8195;&#8195;&#8195;&#8195;______________________________________________________<br><br>
&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&nbsp;&nbsp;&nbsp;Authorized Signature over Printed Name/Date
    </div>
</div>
</body>
</html>
<script>
    ///////////////////////////BILLING ADDRESS///////////////////////////////////

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>



    <script type="text/javascript">
    function printAgreement(){
			var element = document.getElementById('container_content'); 

			var opt = 
			{
			  margin:       [0,10,0,5],
			  filename:    'RA<?php echo $c_csr_no; ?>-'+'<?php echo $c_b1_last_name; ?>_AGREEMENT'+'.pdf',
              
			  image:        { type: 'jpeg', quality: 2 },
			  html2canvas:  { dpi: 300, letterRendering: true, width: 780, height: 1500, scale:2},
			  jsPDF:        { unit: 'mm', format: 'legal', orientation: 'portrait' }
			};

			html2pdf().set(opt).from(element).save();

            window.setTimeout(function(){
            window.history.back();
            }, 500);
    }
	</script>
 
