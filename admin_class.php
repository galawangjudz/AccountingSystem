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
		$delete = $this->db->query("DELETE FROM t_client_info where id = ".$id);
		if($delete){
			return 1;
		}
	}


	function save_user(){
		extract($_POST);
		$password = md5($password);
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
		$delete = $this->db->query("DELETE FROM t_csr_buyers where c_csr_no = ".$id);
		$delete = $this->db->query("DELETE FROM t_csr where c_csr_no = ".$id);
		$delete = $this->db->query("DELETE FROM t_csr_commission where c_csr_no = ".$id);
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
	function delete_model_house(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM t_model_house where c_code = ".$id);
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
		$data = " c_name = '$c_name' ";
		$data .= ", c_acronym = '$c_acronym' ";
		$data .= ", c_address = '$c_address' "; 
	 	$data .= ", c_province = '$c_province' ";
		$data .= ", c_zip = '$c_zip' "; 
		$data .= ", c_rate = '$c_rate' ";
		$data .= ", c_reservation = '$c_reservation' ";
		$data .= ", c_status = '$c_status' ";
		$data .= ", c_code = '$c_code' ";
		if(empty($prod_id)){
			
			$save = $this->db->query("INSERT INTO t_projects set ".$data);
		}else{
			$save = $this->db->query("UPDATE t_projects set ".$data." where c_code = ".$prod_id);
		}
		if($save){
			return 1;
		}
	}


	function save_model_house(){
		extract($_POST);
		$data = " c_model = '$c_model' ";
		$data .= ", c_acronym = '$c_acronym' ";
		$data .= ", c_code = '$c_code' ";
		if(empty($prod_id)){
			
			$save = $this->db->query("INSERT INTO t_model_house set ".$data);
		}else{
			$save = $this->db->query("UPDATE t_model_house set ".$data." where c_code = ".$prod_id);
		}
		if($save){
			return 1;
		}
	}


	function save_agent(){
		extract($_POST);


		$getID = $_POST['c_code'];
		$c_last_name = $_POST['c_last_name']; 
		$c_first_name = $_POST['c_first_name']; 
		$c_middle_initial = $_POST['c_middle_initial']; 
		$c_nick_name = $_POST['c_nick_name']; 
		$c_sex = $_POST['c_sex']; 
		$c_birthdate = $_POST['c_birthdate']; 
		$c_birth_place = $_POST['c_birth_place']; 
		$c_civil_status = $_POST['c_civil_status']; 
		$c_address_ln1 = $_POST['c_address_ln1']; 
		$c_address_ln2 = $_POST['c_address_ln2']; 
		$c_tel_no = $_POST['c_tel_no']; 
		$c_sss_no =$_POST['c_sss_no']; 
		$c_tin = $_POST['c_tin']; 
		$c_status =$_POST['c_status']; 
		$c_recruited_by = $_POST['c_recruited_by']; 
		$c_hire_date = $_POST['c_hire_date']; 
		$c_position = $_POST['c_position']; 
		$c_network = $_POST['c_network']; 
		$c_division = $_POST['c_division']; 		
		$data = " c_last_name = '$$c_last_name' ";
		$data .= ", c_first_name = '$c_first_name' ";
		$data .= ", c_middle_initial = '$c_middle_initial' ";
		$data .= ", c_nick_name = '$c_nick_name' ";
		$data .= ", c_sex = '$c_sex' ";
		$data .= ", c_birthdate = '$c_birthdate' ";
		$data .= ", c_birth_place = '$c_birth_place' ";
		$data .= ", c_address_ln1 = '$customer_city_prov' ";
		$data .= ", c_address_ln2 = '$customer_zip_code' ";
		$data .= ", c_tel_no = '$customer_address_2' ";
		$data .= ", c_civil_status = '$birth_day' ";
		$data .= ", c_sss_no = '$customer_age' ";
		$data .= ", c_tin = '$customer_gender' ";
		$data .= ", c_status = '$customer_viber' ";
		$data .= ", c_recruited_by = '$civil_status' ";
		$data .= ", c_hire_date = '$employment_status' ";
		$data .= ", c_position = '$customer_email' ";
		$data .= ", c_network = '$customer_phone' ";
		$data .= ", c_division = '$customer_phone' ";
	
		if(empty($id)){
			$save = $this->db->query("INSERT INTO t_agents set ".$data);
		}else{
			$save = $this->db->query("UPDATE t_agents set ".$data." where id = ".$id);
		}
		if($save){
			return 1;
		}
	}

	function upload_file(){

		extract($_FILES);
		extract($_POST);
		$getID = $_POST['id'];
		$title = $_POST["title"];
	
		#	#retrieve file title
		
			
		#file name with a random number so that similar dont get replaced
		$pname = $_POST['getFileName'];
		
		#temporary file name to store file
		#$tname = $_FILES["file"]["tmp_name"];
		
			#upload directory path
		#$uploads_dir = 'attachments';
		#TO move the uploaded file to specific location
		#move_uploaded_file($tname, $uploads_dir.'/'.$pname);
		
		#sql query to insert into database
		
		$save = $this->db->query("INSERT into tbl_attachments(c_csr_no,title,name) VALUES('$getID','$title','".$pname."')");
		
		#$sql = "INSERT into tbl_attachments(c_csr_no,title,name) VALUES('$getID','$title','$pname')";
		if($save){
			return 1;
		}
		
		 
	}



	function save_client(){
		extract($_POST);
		$data = " last_name = '$customer_last_name' ";
		$data .= ", first_name = '$customer_first_name' ";
		$data .= ", middle_name = '$customer_middle_name' ";
		$data .= ", suffix_name = '$customer_suffix_name' ";
		$data .= ", address = '$customer_address' ";
		$data .= ", zip_code = '$customer_zip_code' ";
		$data .= ", address_abroad = '$customer_address_2' ";
		$data .= ", birthdate = '$birth_day' ";
		$data .= ", age = '$customer_age' ";
		$data .= ", gender = '$customer_gender' ";
		$data .= ", viber = '$customer_viber' ";
		$data .= ", civil_status = '$civil_status' ";
		$data .= ", citizenship = '$citizenship' ";
		$data .= ", email = '$customer_email' ";
		$data .= ", contact_no = '$contact_no' ";
	
		if(empty($id)){
			$save = $this->db->query("INSERT INTO t_client_info set ".$data);
		}else{
			$save = $this->db->query("UPDATE t_client_info set ".$data." where id = ".$id);
		}
		if($save){
			return 1;
		}
	}


	function save_csr(){
		extract($_POST);

		//lot computation
		$username =  $_POST['username'];
		$lot_lid = $_POST['l_lid'];
		$lot_area = $_POST['lot_area'];
		$price_sqm = $_POST['price_per_sqm'];
		$lot_disc = $_POST['lot_disc'];
		$lot_disc_amt = $_POST['lot_disc_amt'];
		$house_model = $_POST['house_model'];
		$floor_area = $_POST['floor_area'];
		$h_price_per_sqm = $_POST['h_price_per_sqm'];
		$house_disc = $_POST['house_disc'];
		$house_disc_amt = $_POST['house_disc_amt'];
		$total_tcp = $_POST['total_tcp'];
		$tcp_disc = $_POST['tcp_disc'];
		$tcp_disc_amt = $_POST['tcp_disc_amt'];
		$vat_amt = $_POST['vat_amt_computed'];
		$net_tcp = $_POST['net_tcp'];

		// Payment Details
		$reservation = $_POST['reservation'];
		$payment_type1 = $_POST['payment_type1'];
		$payment_type2 = $_POST['payment_type2'];
		$down_percent = $_POST['down_percent'];
		$net_dp = $_POST['net_dp'];
		$no_payment = $_POST['no_payment'];
		$monthly_down = $_POST['monthly_down'];
		$first_dp_date = $_POST['first_dp_date'];
		$full_down_date = $_POST['full_down_date'];
		$amt_to_be_financed = $_POST['amt_to_be_financed'];
		$terms= $_POST['terms'];
		$interest_rate = $_POST['interest_rate'];
		$fixed_factor = $_POST['fixed_factor'];
		$monthly_amortization = $_POST['monthly_amortization'];
		$start_date = $_POST['start_date'];
		$invoice_notes = $_POST['invoice_notes'];

		$data = " c_lot_lid = '$lot_lid' ";
		$data .= ", c_lot_area = '$lot_area' ";
		$data .= ", c_price_sqm = '$price_sqm' ";
		$data .= ", c_lot_discount= '$lot_disc' ";
		$data .= ", c_lot_discount_amt = '$lot_disc_amt' ";
		$data .= ", c_house_model = '$house_model' ";
		$data .= ", c_floor_area= '$floor_area' ";
		$data .= ", c_house_price_sqm= '$h_price_per_sqm' ";
		$data .= ", c_house_discount = '$house_disc' ";
		$data .= ", c_house_discount_amt = '$house_disc_amt' ";
		$data .= ", c_tcp_discount = '$tcp_disc' ";
		$data .= ", c_tcp_discount_amt = '$tcp_disc_amt' ";
		$data .= ", c_tcp = '$total_tcp' ";
		$data .= ", c_vat_amount = '$vat_amt' ";
		$data .= ", c_net_tcp = '$net_tcp' ";
		$data .= ", c_reservation = '$reservation' ";
		$data .= ", c_payment_type1 = '$payment_type1' ";
		$data .= ", c_payment_type2 = '$payment_type2' ";
		$data .= ", c_down_percent = '$down_percent' ";
		$data .= ", c_net_dp = '$net_dp' ";
		$data .= ", c_no_payments = '$no_payment' ";
		$data .= ", c_monthly_down = '$monthly_down' ";
		$data .= ", c_first_dp = '$first_dp_date' ";
		$data .= ", c_full_down = '$full_down_date' ";
		$data .= ", c_amt_financed = '$amt_to_be_financed' ";
		$data .= ", c_terms = '$terms' ";
		$data .= ", c_interest_rate = '$interest_rate' ";
		$data .= ", c_fixed_factor = '$fixed_factor' ";
		$data .= ", c_monthly_payment = '$monthly_amortization' ";
		$data .= ", c_start_date = '$start_date' ";
		$data .= ", c_remarks = '$invoice_notes' ";
		$data .= ", c_created_by = '$username' ";
		$data .= ", c_verify = 0 ";
		$data .= ", coo_approval = 0";
		$data .= ", c_revised = 0";

		
		if(empty($c_csr_no)){
			$save = $this->db->query("INSERT INTO t_csr set ".$data);

			// get last insert id
			$last_id = $this->db->insert_id;

			foreach($_POST['agent_name'] as $key => $value) {


				$agent = $value;
			
				$agent_code = $_POST['agent_code'][$key];
				$agent_pos = $_POST['agent_position'][$key];
				$agent_amount = $_POST['comm_amt'][$key];
				$agent_rate = $_POST['agent_rate'][$key]; 

				$data = " c_csr_no = '$last_id' ";
				$data .= ", c_code = '$agent_code' ";
				$data .= ", c_position = '$agent_pos' ";
				$data .= ", c_agent = '$agent' ";
				$data .= ", c_amount = '$agent_amount' ";
				$data .= ", c_rate = '$agent_rate' ";


				$save = $this->db->query("INSERT INTO t_csr_commission set ".$data);
				}




			$buyer_count = 1;
			foreach($_POST['last_name'] as $key => $value) {
		
				$lastname = $_POST['last_name'][$key];
				$firstname = $_POST['first_name'][$key];
				$middlename = $_POST['middle_name'][$key];
				$suffixname = $_POST['suffix_name'][$key]; 
				$address = $_POST['address'][$key];
				$zip_code = $_POST['zip_code'][$key];
				$address_abroad = $_POST['address_abroad'][$key];
				$birthdate = $_POST['birth_day'][$key];
				$age = $_POST['age'][$key];
				$viber = $_POST['viber'][$key];
				$gender = $_POST['gender'][$key];
				$civil_status = $_POST['civil_status'][$key];
				$citizenship = $_POST['citizenship'][$key];
				$id_presented = $_POST['id_presented'][$key];
				$tin_no = $_POST['tin_no'][$key];
				$email = $_POST['email'][$key];
				$contact_no = $_POST['contact_no'][$key];
				$contact_abroad = $_POST['contact_abroad'][$key];
				$relationship = $_POST['relationship'][$key];
			

				$data = " c_csr_no = '$last_id' ";
				$data .= ", c_buyer_count = '$buyer_count' ";
				$data .= ", last_name = '$lastname' ";
				$data .= ", first_name = '$firstname' ";
				$data .= ", middle_name = '$middlename' ";
				$data .= ", suffix_name = '$suffixname' ";
				$data .= ", address = '$address' ";
				$data .= ", zip_code = '$zip_code' ";
				$data .= ", address_abroad = '$address_abroad ' ";
				$data .= ", birthdate = '$birthdate ' ";
				$data .= ", age = '$age ' ";
				$data .= ", viber = '$viber ' ";
				$data .= ", gender = '$gender' ";
				$data .= ", civil_status = '$civil_status' "; 
				$data .= ", citizenship = '$citizenship' ";
				$data .= ", id_presented = '$id_presented' "; 
				$data .= ", tin_no = '$tin_no' "; 
				$data .= ", email = '$email' "; 
				$data .= ", contact_no = '$contact_no' "; 
				$data .= ", contact_abroad = '$contact_abroad' "; 
				$data .= ", relationship = '$relationship' ";

				$save = $this->db->query("INSERT INTO t_csr_buyers set ".$data);
				$buyer_count += 1;
				}
			
			}

		/* }else{
			$save = $this->db->query("UPDATE t_csr set ".$data." where c_csr_no = ".$c_csr_no);
		} */

		if($save){
			return 1;
		}

	}


	function update_csr(){
		extract($_POST);

		//lot computation
		$c_csr_no =  $_POST['update_id'];
		//lot computation
		$username =  $_POST['username'];
		$lot_lid = $_POST['l_lid'];
		$lot_area = $_POST['lot_area'];
		$price_sqm = $_POST['price_per_sqm'];
		$lot_disc = $_POST['lot_disc'];
		$lot_disc_amt = $_POST['lot_disc_amt'];
		$house_model = $_POST['house_model'];
		$floor_area = $_POST['floor_area'];
		$h_price_per_sqm = $_POST['h_price_per_sqm'];
		$house_disc = $_POST['house_disc'];
		$house_disc_amt = $_POST['house_disc_amt'];
		$total_tcp = $_POST['total_tcp'];
		$tcp_disc = $_POST['tcp_disc'];
		$tcp_disc_amt = $_POST['tcp_disc_amt'];
		$vat_amt = $_POST['vat_amt_computed'];
		$net_tcp = $_POST['net_tcp'];

		// Payment Details
		$reservation = $_POST['reservation'];
		$payment_type1 = $_POST['payment_type1'];
		$payment_type2 = $_POST['payment_type2'];
		$down_percent = $_POST['down_percent'];
		$net_dp = $_POST['net_dp'];
		$no_payment = $_POST['no_payment'];
		$monthly_down = $_POST['monthly_down'];
		$first_dp_date = $_POST['first_dp_date'];
		$full_down_date = $_POST['full_down_date'];
		$amt_to_be_financed = $_POST['amt_to_be_financed'];
		$terms= $_POST['terms'];
		$interest_rate = $_POST['interest_rate'];
		$fixed_factor = $_POST['fixed_factor'];
		$monthly_amortization = $_POST['monthly_amortization'];
		$start_date = $_POST['start_date'];
		$invoice_notes = $_POST['invoice_notes'];

		$data = " c_lot_lid = '$lot_lid' ";
		$data .= ", c_lot_area = '$lot_area' ";
		$data .= ", c_price_sqm = '$price_sqm' ";
		$data .= ", c_lot_discount= '$lot_disc' ";
		$data .= ", c_lot_discount_amt = '$lot_disc_amt' ";
		$data .= ", c_house_model = '$house_model' ";
		$data .= ", c_floor_area= '$floor_area' ";
		$data .= ", c_house_price_sqm= '$h_price_per_sqm' ";
		$data .= ", c_house_discount = '$house_disc' ";
		$data .= ", c_house_discount_amt = '$house_disc_amt' ";
		$data .= ", c_tcp_discount = '$tcp_disc' ";
		$data .= ", c_tcp_discount_amt = '$tcp_disc_amt' ";
		$data .= ", c_tcp = '$total_tcp' ";
		$data .= ", c_vat_amount = '$vat_amt' ";
		$data .= ", c_net_tcp = '$net_tcp' ";
		$data .= ", c_reservation = '$reservation' ";
		$data .= ", c_payment_type1 = '$payment_type1' ";
		$data .= ", c_payment_type2 = '$payment_type2' ";
		$data .= ", c_down_percent = '$down_percent' ";
		$data .= ", c_net_dp = '$net_dp' ";
		$data .= ", c_no_payments = '$no_payment' ";
		$data .= ", c_monthly_down = '$monthly_down' ";
		$data .= ", c_first_dp = '$first_dp_date' ";
		$data .= ", c_full_down = '$full_down_date' ";
		$data .= ", c_amt_financed = '$amt_to_be_financed' ";
		$data .= ", c_terms = '$terms' ";
		$data .= ", c_interest_rate = '$interest_rate' ";
		$data .= ", c_fixed_factor = '$fixed_factor' ";
		$data .= ", c_monthly_payment = '$monthly_amortization' ";
		$data .= ", c_start_date = '$start_date' ";
		$data .= ", c_remarks = '$invoice_notes' ";
		$data .= ", c_created_by = '$username' ";
		$data .= ", c_verify = 0 ";
		$data .= ", coo_approval = 0";
		$data .= ", c_revised = 0";

		if(!empty($c_csr_no)){
			$this->db->query("UPDATE t_csr set ".$data." where c_csr_no = ".$c_csr_no);
			$this->db->query("DELETE FROM t_csr_buyers where c_csr_no = ".$c_csr_no);
			$this->db->query("DELETE FROM t_csr_commission where c_csr_no = ".$c_csr_no);
			// get last insert id
			$last_id = $c_csr_no;

			foreach($_POST['agent_name'] as $key => $value) {
				$agent = $value;
				$agent_code = $_POST['agent_code'][$key];
				$agent_pos = $_POST['agent_position'][$key];
				$agent_amount = $_POST['comm_amt'][$key];
				$agent_rate = $_POST['agent_rate'][$key]; 

				$data = " c_csr_no = '$last_id' ";
				$data .= ", c_code = '$agent_code' ";
				$data .= ", c_position = '$agent_pos' ";
				$data .= ", c_agent = '$agent' ";
				$data .= ", c_amount = '$agent_amount' ";
				$data .= ", c_rate = '$agent_rate' ";


				$save = $this->db->query("INSERT INTO t_csr_commission set ".$data);
				}




			$buyer_count = 1;
			foreach($_POST['last_name'] as $key => $value) {
		
				$lastname = $_POST['last_name'][$key];
				$firstname = $_POST['first_name'][$key];
				$middlename = $_POST['middle_name'][$key];
				$suffixname = $_POST['suffix_name'][$key]; 
				$address = $_POST['address'][$key];
				$zip_code = $_POST['zip_code'][$key];
				$address_abroad = $_POST['address_abroad'][$key];
				$birthdate = $_POST['birth_day'][$key];
				$age = $_POST['age'][$key];
				$viber = $_POST['viber'][$key];
				$gender = $_POST['gender'][$key];
				$civil_status = $_POST['civil_status'][$key];
				$citizenship = $_POST['citizenship'][$key];
				$id_presented = $_POST['id_presented'][$key];
				$tin_no = $_POST['tin_no'][$key];
				$email = $_POST['email'][$key];
				$contact_no = $_POST['contact_no'][$key];
				$contact_abroad = $_POST['contact_abroad'][$key];
				$relationship = $_POST['relationship'][$key];
			

				$data = " c_csr_no = '$last_id' ";
				$data .= ", c_buyer_count = '$buyer_count' ";
				$data .= ", last_name = '$lastname' ";
				$data .= ", first_name = '$firstname' ";
				$data .= ", middle_name = '$middlename' ";
				$data .= ", suffix_name = '$suffixname' ";
				$data .= ", address = '$address' ";
				$data .= ", zip_code = '$zip_code' ";
				$data .= ", address_abroad = '$address_abroad ' ";
				$data .= ", birthdate = '$birthdate ' ";
				$data .= ", age = '$age ' ";
				$data .= ", viber = '$viber ' ";
				$data .= ", gender = '$gender' ";
				$data .= ", civil_status = '$civil_status' "; 
				$data .= ", citizenship = '$citizenship' ";
				$data .= ", id_presented = '$id_presented' "; 
				$data .= ", tin_no = '$tin_no' "; 
				$data .= ", email = '$email' "; 
				$data .= ", contact_no = '$contact_no' "; 
				$data .= ", contact_abroad = '$contact_abroad' "; 
				$data .= ", relationship = '$relationship' ";

				$save = $this->db->query("INSERT INTO t_csr_buyers set ".$data);
				$buyer_count += 1;
				}


		}
		if($save){
			return 1;
		}



	}

	function coo_approval(){
		extract($_POST);

	
		$data = " c_csr_no = '$id' ";
		$data .= ", c_lot_lid = '$lid' ";
		$data .= ", c_csr_status = '$value' ";
		$data .= ", c_reserve_status = '0' ";
		$data .= ", c_ca_status = '0' ";
		
		$data .= ", c_duration = DATE_ADD(CURRENT_TIMESTAMP(),INTERVAL 1 DAY) ";
 

		$chk = $this->db->query("SELECT * FROM t_lots where c_status = 'Available' and c_lid =".$lid);
			if($chk->num_rows > 0){
				if ($value == 1){
	  			$save = $this->db->query("UPDATE t_lots set c_status = 'Pre-Reserved' where c_lid =".$chk->fetch_array()['c_lid']);
				$save = $this->db->query("UPDATE t_csr SET coo_approval = ".$value." where c_csr_no = ".$id); 
		 		$save = $this->db->query("INSERT INTO t_approval_csr set ".$data);
				}
				if ($value == 3){
				$save = $this->db->query("UPDATE t_csr SET coo_approval = ".$value." where c_csr_no = ".$id);
				$save = $this->db->query("UPDATE t_csr SET c_verify = 2 where c_csr_no = ".$id);
				}
			}else{
				
			} 
		if($save){
			return 1;
		}
	}


	function new_coo_approval(){
		extract($_POST);
		$id =  $_POST['id'];
		$lid = $_POST['lid'];
		$value = $_POST['value'];
		$duration = $_POST['duration'];
		$datenow = GETDATE();
		$data = " c_csr_no = '$id' ";
		$data .= ", c_lot_lid = '$lid' ";
		$data .= ", c_csr_status = '$value' ";
		/* $chk_pay = $this->db->query("SELECT sum(c_amount_paid) as total_reservation FROM t_reservation where c_csr_no =".$id);
		if($chk_pay->num_rows > 0){
			while($row = $chk_pay->fetch_assoc()){
					$total = $row['total_reservation'];
					$chck_csr = $this->db->query("SELECT c_reservation FROM t_csr where c_csr_no =".$id);
					while($row2 = $chk_csr->fetch_assoc()){
						$reservation = $row2['c_reservation'];

						if($total != $reservation){
							$data . "c_reserve_status = 2";
						}
						elseif($total == $reservation) {
							$data . "c_reserve_status = 1";	
						}

					}
				}
			} */

	/* 	$data .= ", c_reserve_status = '0' "; */
		$data .= ", c_ca_status = '0' ";
		$data .= ", c_date_approved = CURRENT_TIMESTAMP() ";
		$data .= ", c_duration = DATE_ADD(CURRENT_TIMESTAMP(),INTERVAL $duration DAY)";
 
		$chk2 = $this->db->query("SELECT * FROM t_approval_csr where c_csr_no =".$id);
			if($chk2->num_rows > 0){
				if ($value == 1){
					$save = $this->db->query("UPDATE t_approval_csr set ".$data);
					$save = $this->db->query("UPDATE t_csr SET coo_approval = ".$value." where c_csr_no = ".$id);
			
				}
				if ($value == 3){
					$save = $this->db->query("UPDATE t_approval_csr set ".$data);
					$save = $this->db->query("UPDATE t_csr SET coo_approval = ".$value." where c_csr_no = ".$id);
					$save = $this->db->query("UPDATE t_csr SET c_verify = 2 where c_csr_no = ".$id);
				}
			}else{

				$chk = $this->db->query("SELECT * FROM t_lots where c_status = 'Available' and c_lid =".$lid);
					if($chk->num_rows > 0){
						if ($value == 1){
						$save = $this->db->query("UPDATE t_lots set c_status = 'Pre-Reserved' where c_lid =".$chk->fetch_array()['c_lid']);
						$save = $this->db->query("UPDATE t_csr SET coo_approval = ".$value." where c_csr_no = ".$id); 
						$save = $this->db->query("INSERT INTO t_approval_csr set ".$data);
						}
						if ($value == 3){
						$save = $this->db->query("UPDATE t_csr SET coo_approval = ".$value." where c_csr_no = ".$id);
						$save = $this->db->query("UPDATE t_csr SET c_verify = 2 where c_csr_no = ".$id);
						}
					}else{
						
					} 

			}
		if($save){
			return 1;
		}
	}



	function sm_verification(){
		extract($_POST);

		$chk = $this->db->query("SELECT * FROM t_csr where c_verify = 1 and c_lot_lid =".$lid);
			if($chk->num_rows == 0){
				$save = $this->db->query("UPDATE t_csr SET c_verify = ".$value." where c_csr_no = ".$id);
				}
			else{
				if ($value == 2){
					$save = $this->db->query("UPDATE t_csr SET c_verify = ".$value." where c_csr_no = ".$id);
				}
			} 
		if($save){
			return 1;
		}
	}
	

	function ca_approval(){
		extract($_POST);
		$data = " c_ca_status = '$value' ";
/* 		$data .= ", c_ca_approved_date = DATE_ADD(CURRENT_TIMESTAMP())";
		$data .= ", c_ca_duration = DATE_ADD(CURRENT_TIMESTAMP(),INTERVAL 30 DAY)"; */


		if ($value == 1):
			/* $save = $this->db->query("UPDATE t_approval_csr SET c_ca_status = ".$value." where ra_id = ".$ra_id); */
			$save = $this->db->query("UPDATE t_approval_csr SET ".$data." where ra_id = ".$ra_id);
		elseif ($value == 2):
			$save = $this->db->query("UPDATE t_csr SET c_verify = 2, coo_approval = 0 where c_csr_no = ".$id);
			$save = $this->db->query("UPDATE t_lots set c_status = 'Available' where c_lid =".$lot_id);
			$save = $this->db->query("UPDATE t_approval_csr SET c_csr_status = 3, c_ca_status = ".$value." where ra_id = ".$ra_id);
		elseif ($value == 3):
			$save = $this->db->query("UPDATE t_csr SET c_verify = 0, coo_approval = 0, c_revised = 1 where c_csr_no = ".$id);
			$save = $this->db->query("UPDATE t_approval_csr SET c_csr_status = 0, c_ca_status = ".$value." where ra_id = ".$ra_id);
		endif;

		if($save){
			return 1;
		}
	}
	
	function ca_approval2(){
		extract($_POST);
		$save = $this->db->query("UPDATE t_approval_csr SET c_ca_status = 2 where ra_id = ".$ra_id);
		if($save){
			return 1;
		}
	}
}