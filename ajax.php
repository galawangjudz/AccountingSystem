<?php
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();

if($action == "delete_agent"){
	$save = $crud->delete_agent();
	if($save)
		echo $save;
}

if($action == "delete_customer"){
	$save = $crud->delete_customer();
	if($save)
		echo $save;
}