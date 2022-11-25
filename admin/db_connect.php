<?php 
// COMPANY INFORMATION
define('COMPANY_LOGO', 'images/logo.png');
define('COMPANY_LOGO_WIDTH', '300');
define('COMPANY_LOGO_HEIGHT', '90');
define('COMPANY_NAME','ASIANLAND STRATEGIES CORPORATION');
define('COMPANY_ADDRESS_1','GRAND ROYALE ');
define('COMPANY_ADDRESS_2','Bulihan, MALOLOS CITY');
define('COMPANY_ADDRESS_3','Philippines');
define('COMPANY_COUNTY','PH');
define('COMPANY_POSTCODE','3000');

// DATABASE INFORMATION
define('DATABASE_HOST', getenv('IP'));
define('DATABASE_NAME', 'alscdb');
define('DATABASE_USER', 'root');
define('DATABASE_PASS', '');

// CONNECT TO THE DATABASE
$conn= new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME)or die("Could not connect to mysql".mysqli_error($con));
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
