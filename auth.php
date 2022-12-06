<?php 

	include('includes/config.php');

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);


	$check = $_SESSION['username'];

	if(!isset($check)) {
	    header("Location:login.php");
	}

?>