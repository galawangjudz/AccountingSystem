<?php
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
          . (dirname($_SERVER["SCRIPT_NAME"]) == DIRECTORY_SEPARATOR ? "" : "/")
          . trim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");
header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/print_payment.css">
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
        margin-top:900px;
        margin-left:375px;
        opacity:0.1;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<?php 
      include "includes/header.php" ;
      include('functions.php');?> 
<!-- <style>
.whole_content{
    visibility:hidden;
}
</style> -->
<body>
<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>
    
</head>
<div class="whole_content">
    <div class="text-center" style="padding:20px;">
	<input type="button" id="rep" value="Print" class="btn btn-info btn_print">
</div>
<div class="container_content" id="container_content" style="margin-top:5px;font-size:9px;">
    <img src="images/Header.jpg" class="img-thumbnail" style="height:80px;width:500px;margin-left:130px;border:none;margin-bottom:-5px;z-index:-1;position: relative;" alt="">
    <h6 class="text-center" style="position:absolute;margin-top:-40px;margin-left:330px;"><b>RESERVATION APPLICATION</b></h6>
    <div style="clear:both"></div>