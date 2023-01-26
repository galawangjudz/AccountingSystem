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

if($action == "save_client"){
	$save = $crud->save_client();
	if($save)
		echo $save;
}

if($action == "upload_file"){
	$save = $crud->upload_file();
	if($save)
		echo $save;
}

if($action == "save_agent"){
	$save = $crud->save_agent();
	if($save)
		echo $save;
}

if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}

if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == "delete_user"){
	$save = $crud->delete_user();
	if($save)
		echo $save;
}

if($action == "delete_csr"){
	$save = $crud->delete_csr();
	if($save)
		echo $save;
}

if($action == "save_lot"){
	$save = $crud->save_lot();
	if($save)
		echo $save;
}

if($action == "delete_lot"){
	$save = $crud->delete_lot();
	if($save)
		echo $save;
}
if($action == "delete_model_house"){
	$save = $crud->delete_model_house();
	if($save)
		echo $save;
}
if($action == "delete_project"){
	$save = $crud->delete_project();
	if($save)
		echo $save;
}
if($action == "save_project"){
	$save = $crud->save_project();
	if($save)
		echo $save;
}
if($action == "save_model_house"){
	$save = $crud->save_model_house();
	if($save)
		echo $save;
}

if($action == "coo_approval"){
	$save = $crud->coo_approval();
	if($save)
		echo $save;
}

if($action == "new_coo_approval"){
	$save = $crud->new_coo_approval();
	if($save)
		echo $save;
}

if($action == "extend_coo_approval"){
	$save = $crud->extend_coo_approval();
	if($save)
		echo $save;
}

if($action == "sm_verification"){
	$save = $crud->sm_verification();
	if($save)
		echo $save;
}

if($action == "ca_approval"){
	$save = $crud->ca_approval();
	if($save)
		echo $save;
}

if($action == "save_csr"){
	$save = $crud->save_csr();
	if($save)
		echo $save;
}

if($action == "update_csr"){
	$save = $crud->update_csr();
	if($save)
		echo $save;
}


if($action == "save_reservation"){
	$save = $crud->save_reservation();
	if($save)
		echo $save;
}

if($action == "delete_reservation"){
	$save = $crud->delete_reservation();
	if($save)
		echo $save;
}


if($action == "approved_upload"){
	$save = $crud->approved_upload();
	if($save)
		echo $save;
}
if($action == "delete_upload"){
	$save = $crud->delete_upload();
	if($save)
		echo $save;
}