<?php 

	include('includes/config.php');

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	session_start();

	$username = $_SESSION['login_username'];
	$usertype = $_SESSION['login_usertype'];

	if(!isset($username)) {
	    header("Location:index.php");
	}

?>