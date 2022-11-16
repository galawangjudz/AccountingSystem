<?php 

	include('includes/config.php');

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	session_start();

	$username = $_SESSION['login_username'];
	$usertype = $_SESSION['login_usertype'];
	$userlast = $_SESSION['login_lastname'];
	$userfirst = $_SESSION['login_firstname'];
	$usermiddle = $_SESSION['login_middlename'];

	if(!isset($username)) {
	    header("Location:index.php");
	}


?>