<?php
session_start();
Class Action {
	private $db;

	public function __construct() {
		ob_start();
	include("includes/config.php");
    
    $this->db = $mysqli;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}


	function delete_agent(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM t_agents where c_code = ".$id);
		if($delete){
			return 1;
		}
	}

	function delete_customer(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM store_customers where id = ".$id);
		if($delete){
			return 1;
		}
	}


	function save_user(){
		extract($_POST);
		$data = " last_name = '$last_name' ";
		$data .= ", first_name = '$first_name' ";
		$data .= ", middle_name = '$middle_name' ";
		$data .= ", email = '$email' "; 
	 	$data .= ", phone = '$phone' ";
		$data .= ", date_hired = '$date_hired' "; 
		$data .= ", username = '$username' ";
		$data .= ", user_type = '$user_type' ";
		$data .= ", password = '$password' ";
		if(empty($user_id)){
			$save = $this->db->query("INSERT INTO users set ".$data);
		}else{
			$save = $this->db->query("UPDATE users set ".$data." where user_id = ".$user_id);
		}
		if($save){
			return 1;
		}
	}

	function logout(){
		session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:login.php");
	}

	function delete_user(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM users where user_id = ".$id);
		if($delete){
			return 1;
		}
			
	}

	function delete_csr(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM t_csr where c_csr_no = ".$id);
		if($delete){
			return 1;
		}
			
	}
	function delete_lot(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM t_lots where c_lid = ".$id);
		if($delete){
			return 1;
		}
			
	}
	function delete_project(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM t_projects where c_code = ".$id);
		if($delete){
			return 1;
		}
			
	}


	function save_lot(){
		extract($_POST);

 		$prod_code = $_POST['prod_code'];
		$prod_block = $_POST['prod_block'];
		$prod_lot = $_POST['prod_lot']; 
	
 		$prod_lot_area = $_POST['prod_lot_area'];
		$prod_lot_price = $_POST['prod_lot_price'];
		$prod_lot_status = $_POST['prod_status'];
		$prod_remarks = $_POST['prod_remarks']; 
 
		$data = " c_site = '$prod_code' ";
		$data .= ", c_block = '$prod_block' ";
		$data .= ", c_lot = '$prod_lot' ";	 
	 	$data .= ", c_lot_area = '$prod_lot_area' ";
		$data .= ", c_price_sqm = '$prod_lot_price' "; 
		$data .= ", c_remarks = '$prod_remarks' ";
		$data .= ", c_status = '$prod_status' ";
	 	if(empty($prod_lid)){ 
		$prod_lid = sprintf('%03d%03d%02d', $prod_code, $prod_block, $prod_lot);
		$data .= ", c_lid = '$prod_lid' "; 
		$save = $this->db->query("INSERT INTO t_lots set ".$data);
	 	}else{
			$save = $this->db->query("UPDATE t_lots set ".$data." where c_lid = ".$prod_lid);
		} 
		if($save){
			return 1;
		}
			
	}

	function save_project(){
		extract($_POST);

	
		$proj_name = $_POST['c_name'];
		$proj_acronym = $_POST['c_acronym'];
 		$proj_address = $_POST['c_address'];
		$proj_province = $_POST['c_province'];
		$proj_zip = $_POST['c_zip'];
		$proj_rate = $_POST['c_rate']; 
		$proj_reservation = $_POST['c_reservation']; 
		$proj_status = $_POST['c_status']; 
		
		$data = ", c_name = '$proj_name' ";
		$data .= ", c_acronym = '$proj_acronym' ";
		$data .= ", c_address = '$proj_address' "; 
	 	$data .= ", c_province = '$proj_province' ";
		$data .= ", c_zip = '$proj_zip' "; 
		$data .= ", c_rate = '$proj_rate' ";
		$data .= ", c_reservation = '$proj_reservation' ";
		$data .= ", c_status = '$proj_status' ";
		if(empty($proj_code)){
			$proj_code = $_POST['c_code'];
			$data .= " c_code = '$proj_code' ";
			$save = $this->db->query("INSERT INTO t_projects set ".$data);
		}else{
			$save = $this->db->query("UPDATE t_projects set ".$data." where c_code = ".$proj_code);
		}
		if($save){
			return 1;
		}
	}


	function save_model_house(){
		extract($_POST);
		$data = " c_model = '$c_model' ";
		$data .= ", c_acronym = '$fc_acronym' ";
		

		if(empty($c_code)){
			$data .= ", c_code = '$c_code' ";

			$save = $this->db->query("INSERT INTO t_model_house set ".$data);
		}else{
			$save = $this->db->query("UPDATE t_model_house set ".$data." where c_code = ".$c_code);
		}
		if($save){
			return 1;
		}
	}

}