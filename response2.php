<?php


include_once('includes/config.php');

// show PHP errors
ini_set('display_errors', 1);




// output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$action = isset($_POST['action']) ? $_POST['action'] : "";


// Create customer
if ($action == 'create_customer'){

	// customer information

	$customer_last_name = $_POST['customer_last_name']; // customer last name
	$customer_first_name = $_POST['customer_first_name']; // customer first name
	$customer_middle_name = $_POST['customer_middle_name']; // customer midddle name
	$customer_address = $_POST['customer_address']; // customer address
	$customer_city_prov = $_POST['customer_city_prov']; // customer city/prov
	$customer_zip_code = $_POST['customer_zip_code']; // customer zipcode
	$customer_email = $_POST['customer_email']; // customer email
	$customer_phone = $_POST['customer_phone']; // customer phone number


	$query = "INSERT INTO store_customers (
					last_name,
					first_name,
					middle_name,
					address,
					city_prov,
					zip_code,
					email,
					phone
				) VALUES (
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?
				);
			";

	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
	$stmt->bind_param(
		'ssssssss',
		$customer_last_name,$customer_first_name,$customer_middle_name,$customer_address,
		$customer_city_prov,$customer_zip_code,$customer_email,$customer_phone);

	if($stmt->execute()){
		//if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message' => 'Customer has been created successfully!'
		));
		


	} else {
		// if unable to create invoice
		echo json_encode(array(
			'status' => 'Error',
			'message' => 'There has been an error, please try again.'
			// debug
			//'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
		));
	}

	//close database connection
	$mysqli->close();
}



// Create Reservation
if ($action == 'save_reservation'){


	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}


	$ra_no =  $_POST['reserve_no'];
	$csr_no = $_POST['csr_no'];
	$c_or_no = $_POST['or_no'];
	/* $c_acronym = $_POST['reserve_site'];
	$c_block = $_POST['reserve_block'];
	$c_lot = $_POST['reserve_lot']; */
	$c_reserve_date = $_POST['pay_date'];
	$c_amount_paid = $_POST['amount_paid'];
	$c_lot_lid =  $_POST['lot_lid'];

/* 
	// insert reservation into database
	$query = "INSERT INTO t_reservation (
					ra_id,
					c_csr_no,
					c_or_no,
					c_reserve_date,
					c_amount_paid,
					c_lot_id
				) VALUES (
					'".$ra_no."',
					'".$csr_no."',
					'".$c_or_no."',
					'".$c_reserve_date."',
					'".$c_amount_paid."',
					'".$c_lot_lid."'
					);
				";  */
	
	$query = "INSERT INTO t_reservation (
					ra_id,
					c_csr_no,
					c_or_no,
					c_reserve_date,
					c_amount_paid,
					c_lot_id
				) VALUES (
					?,
					?,
					?,
					?,
					?,
					?
				);
			";

	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
	$stmt->bind_param(
		'ssssss',
		$ra_no,$csr_no,$c_or_no,$c_reserve_date,$c_amount_paid,$c_lot_lid);



	header('Content-Type: application/json');

	if($stmt->execute()){
		//if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message' => 'Reservation has been created successfully!'
		));
		


	} else {
		// if unable to create invoice
		echo json_encode(array(
			'status' => 'Error',
			'message' => 'There has been an error, please try again.'
			// debug
			//'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
		));
	}

	//close database connection
	$mysqli->close();
				


}

// Create invoice
if ($action == 'create_csr'){


	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}


	//
	date_default_timezone_set("Asia/Manila");
	$mysqldate = date("Y-m-d H:i:s"); 
	$csr_status = 'Pending';

	$csr_id = $_POST['csr_id'];
	$lot_lid = $_POST['l_lid'];
	$customer_date_of_sale = $_POST['date_of_sale'];
	// buyer details
	$customer_last_name_1 = $_POST['customer_last_name_1']; // customer last name
	$customer_first_name_1 = $_POST['customer_first_name_1']; // customer first name
	$customer_middle_name_1 = $_POST['customer_middle_name_1']; // customer middle name
	$customer_last_name_2 = $_POST['customer_last_name_2']; // customer last name 2
	$customer_first_name_2 = $_POST['customer_first_name_2']; // customer first name 2
	$customer_middle_name_2 = $_POST['customer_middle_name_2']; // customer middle name 2

	
	
	$customer_address_1 = $_POST['customer_address_1']; // customer address
	$remove[] = "'";
	$customer_address_1 = str_replace( $remove, "", $customer_address_1);
	$customer_city_prov= $_POST['customer_city_prov']; // customer city_prov
	$customer_zip_code = $_POST['customer_zip_code']; // customer zip_code
	$customer_address_2 = $_POST['customer_address_2']; // customer address abroad

	$birth_day = $_POST['birth_day']; // customer birthday
	$customer_age = $_POST['customer_age']; // customer age

	$customer_phone = $_POST['customer_phone']; // customer phone number
	$customer_email = $_POST['customer_email']; // customer civil status
	$customer_viber= $_POST['customer_viber']; // customer viber
	$customer_gender = $_POST['customer_gender']; // customer phone number
	$civil_status = $_POST['civil_status']; // customer civil status
	$employment_status = $_POST['employment_status']; // customer civil status
	

	// Investment Value
	$lot_area = $_POST['lot_area'];
	$price_sqm = $_POST['price_per_sqm'];
	$lot_disc = $_POST['lot_disc'];
	$lot_disc_amt = $_POST['lot_disc_amt'];
	$house_model = $_POST['house_model'];
	$floor_area = $_POST['floor_area'];
	$h_price_per_sqm = $_POST['h_price_per_sqm'];
	$house_disc = $_POST['house_disc'];
	$house_disc_amt = $_POST['house_disc_amt'];
	$tcp_disc = $_POST['tcp_disc'];
	$tcp_disc_amt = $_POST['tcp_disc_amt'];
	$total_tcp = $_POST['total_tcp'];
	$vat_amt = $_POST['vat_amt'];
	$net_tcp = $_POST['net_tcp'];


	// Payment Details
	$c_reservation = $_POST['reservation'];
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




	// insert invoice into database
	$query = "INSERT INTO t_csr (
					c_csr_no,
					c_lot_lid,
					c_date_of_sale,
					c_b1_last_name,
					c_b1_first_name,
					c_b1_middle_name,
					c_b2_last_name,
					c_b2_first_name,
					c_b2_middle_name,
					c_address,
					c_city_prov,
					c_zip_code,
					c_address_abroad,
					c_birthday,
					c_age,
					c_sex,
					c_mobile_no, 
					c_viber_no, 
					c_civil_status, 
					c_email,
					c_employment_status,
					c_lot_area, 
					c_price_sqm, 
					c_lot_discount, 
					c_lot_discount_amt,
					c_house_model,
					c_floor_area, 
					c_house_price_sqm, 
					c_house_discount, 
					c_house_discount_amt, 
					c_tcp_discount, 
					c_tcp_discount_amt, 
					c_tcp, 
					c_vat_amount, 
					c_net_tcp, 
					c_reservation,
					c_payment_type1, 
					c_payment_type2, 
					c_down_percent, 
					c_net_dp, 
					c_no_payments, 
					c_monthly_down, 
					c_first_dp, 
					c_full_down, 
					c_amt_financed, 
					c_terms, 
					c_interest_rate, 
					c_fixed_factor, 
					c_monthly_payment, 
					c_start_date,
					c_csr_status,
					c_date_created,
					c_date_updated
			
				) VALUES (
					'".$csr_id."',
					'".$lot_lid."',
					'".$customer_date_of_sale."',
				  	'".$customer_last_name_1."',
				  	'".$customer_first_name_1."',
				  	'".$customer_middle_name_1."',
					'".$customer_last_name_2."',
				  	'".$customer_first_name_2."',
				  	'".$customer_middle_name_2."',
				  	'".$customer_address_1."',
				  	'".$customer_city_prov."',
				  	'".$customer_zip_code."',
				  	'".$customer_address_2."',
				  	'".$birth_day."',
				  	'".$customer_age."',
					'".$customer_gender."',
				  	'".$customer_phone."',
				  	'".$customer_viber."',
					'".$civil_status."',
					'".$customer_email."',
					'".$employment_status."',
					'$lot_area', 
					'$price_sqm', 
					'$lot_disc',
					'$lot_disc_amt',
					'".$house_model."',
					'$floor_area',
					'$h_price_per_sqm', 
					'$house_disc',
					'$house_disc_amt',
					'$tcp_disc', 
					'$tcp_disc_amt', 
					'$total_tcp',
					'$vat_amt',
					'$net_tcp',
					'$c_reservation',
					'".$payment_type1."',
					'".$payment_type2."', 
					'".$down_percent."',
					'".$net_dp."', 
					'".$no_payment."',
					'".$monthly_down."',
					'".$first_dp_date."', 
					'".$full_down_date."', 
					'".$amt_to_be_financed."', 
					'".$terms."',
					'".$interest_rate."',
					'".$fixed_factor."', 
					'".$monthly_amortization."', 
					'".$start_date."',
					'".$csr_status."',
					'".$mysqldate."',
					'".$mysqldate."'
						);
					"; 

	// invoice product items
	foreach($_POST['customer_agent'] as $key => $value) {
	    $agent = $value;
	    $agent_code = $_POST['code'][$key];
		$agent_pos = $_POST['agent_position'][$key];
	    $agent_amount = $_POST['comm_amt'][$key];
	    $agent_rate = $_POST['aget_rate'][$key];
	

	    // insert invoice items into database
		$query .= "INSERT INTO t_csr_commission (
				c_code,
				c_position,
				c_amount,
				c_rate,
				c_agent
				) VALUES (
				'".$agent_code."',
				'".$agent_pos."',
				'".$agent_amount."',
				'".$agent_rate."',
				'".$agent."'	
			);
		";

	}
						



	header('Content-Type: application/json');





	// execute the query
	if($mysqli -> multi_query($query)){
		//if saving success
		$arr = array(
			'status' => 'Success',
			'message'=> 'CSR has been created successfully!'
		);
		echo json_encode($arr);
		
	} else {
		$arr = array(
			'status' => 'Error',
			//'message'=> 'There has been an error, please try again.');
			'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>');
		echo json_encode($arr);
			}

	//close database connection
	$mysqli->close();

}
if($action == 'update_stat') {
	

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$id = $_POST["id"];
	$stat = $_POST["stat"];
	$lot_lid = $_POST["lot_lid"];
	$ra_stat = "Pending";
	date_default_timezone_set("Asia/Manila");
	$ra_date_create = date("Y-m-d H:i:s"); 

	

	// the query
	$query = "UPDATE t_csr SET c_csr_status = ".$stat." where c_csr_no = ".$id.";";


	if ($stat == '"Approved"'){
		
		$query .= "INSERT INTO t_ra (
				c_csr_no,
				c_lot_lid,
				c_ra_status,
				c_date_created
			) VALUES (
				'".$id."',
				'".$lot_lid."',
				'".$ra_stat."',
				'".$ra_date_create."'
			)
		";}



	if($mysqli -> multi_query($query)) {
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'CSR has been updated status successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	// close connection 
	$mysqli->close();

}


if($action == 'ra_stat') {
	

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$id = $_POST["id"];
	$stat = $_POST["stat"];
	date_default_timezone_set("Asia/Manila");
	$ra_date_approved = date("Y-m-d H:i:s"); 

	

	// the query
	$query = "UPDATE t_ra SET c_ra_status = ".$stat.", c_date_approved = ".$ra_date_approved." where ra_id = ".$id.";";


	if ($stat == '"Approved"'){
		
				/* 	$query .= "INSERT INTO t_buyers_account (
				c_csr_no,
				c_lot_lid,
				c_ra_status,
				c_date_created
				) VALUES (
				'".$id."',
				'".$lot_lid."',
				'".$ra_stat."',
				'".$ra_date_create."'
				)
				";}

				*/
				}
		

	if($mysqli -> multi_query($query)) {
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'CSR has been updated status successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	// close connection 
	$mysqli->close();

}

// delete csr
if($action == 'delete_ra') {

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$id = $_POST["delete"];

	// the query
	$query = "DELETE FROM t_ra WHERE ra_id = ".$id.";";


	if($mysqli -> multi_query($query)) {
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'RA has been deleted successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	// close connection 
	$mysqli->close();

}
// delete csr
if($action == 'delete_csr') {

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$id = $_POST["delete"];

	// the query
	$query = "DELETE FROM t_csr WHERE c_csr_no = ".$id.";";


	if($mysqli -> multi_query($query)) {
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Product has been deleted successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	// close connection 
	$mysqli->close();

}

// Adding new customer
if($action == 'update_customer') {

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$getID = $_POST['id']; // id

	/// customer information

	$customer_last_name = $_POST['customer_last_name']; // customer last name
	$customer_first_name = $_POST['customer_first_name']; // customer first name
	$customer_middle_name = $_POST['customer_middle_name']; // customer midddle name
	$customer_address = $_POST['customer_address']; // customer address
	$customer_city_prov = $_POST['customer_city_prov']; // customer city/prov
	$customer_zip_code = $_POST['customer_zip_code']; // customer zipcode
	$customer_email = $_POST['customer_email']; // customer email
	$customer_phone = $_POST['customer_phone']; // customer phone number



	// the query
	$query = "UPDATE store_customers SET
				last_name = ?,
				first_name = ?,
				middle_name = ?,
				address = ?,
				city_prov = ?,
				zip_code = ?,
				email = ?,
				phone = ?
				WHERE id = ?

			";

	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
	$stmt->bind_param(
		'sssssssss',
		$customer_last_name,$customer_first_name,$customer_middle_name,$customer_address,
		$customer_city_prov,$customer_zip_code,$customer_email,$customer_phone,$getID);

	//execute the query
	if($stmt->execute()){
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Customer has been updated successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	//close database connection
	$mysqli->close();
	
}

// Update product
if($action == 'update_product') {

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// invoice product information
	$getID = $_POST['prod_lid']; // lid
	$c_lot_area = $_POST['prod_lot_area']; // product name
	$c_price_sqm= $_POST['prod_lot_price']; // product desc
	$c_status = $_POST['prod_status']; // product price

	// the query
	$query = "UPDATE t_lots SET
				c_lot_area = ?,
				c_price_sqm = ?,
				c_status = ?
			 WHERE c_lid = ?
			";

	
	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
	$stmt->bind_param(
		'ddss',
		$c_lot_area,
		$c_price_sqm,
		$c_status,
		$getID);

	//execute the query
	if($stmt->execute()){
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Product has been updated successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	//close database connection
	$mysqli->close();
	
}


// Adding new product
if($action == 'update_csr') {

	// output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$id = $_POST["update_id"];
	//
	//$csr_id = $_POST['csr_id'];
	$customer_date_of_sale = $_POST['date_of_sale'];
	// buyer
	$customer_last_name_1 = $_POST['customer_last_name_1']; // customer last name
	$customer_first_name_1 = $_POST['customer_first_name_1']; // customer first name
	$customer_middle_name_1 = $_POST['customer_middle_name_1']; // customer middle name
	$customer_last_name_2 = $_POST['customer_last_name_2']; // customer last name 2
	$customer_first_name_2 = $_POST['customer_first_name_2']; // customer first name 2
	$customer_middle_name_2 = $_POST['customer_middle_name_2']; // customer middle name 2

	// more details

	$customer_address_1 = $_POST['customer_address_1']; // customer address
	$remove[] = "'";
	$customer_address_1 = str_replace( $remove, "", $customer_address_1);
	$customer_city_prov= $_POST['customer_city_prov']; // customer city_prov
	$customer_zip_code = $_POST['customer_zip_code']; // customer zip_code
	$customer_address_2 = $_POST['customer_address_2']; // customer address abroad

	$birth_date = $_POST['birth_date']; // customer birthday
	$customer_age = strval($_POST['customer_age']); // customer age

	$customer_phone = $_POST['customer_phone']; // customer phone number
	$customer_email = $_POST['customer_email']; // customer civil status
	$customer_viber= $_POST['customer_viber']; // customer viber
	$customer_gender = $_POST['customer_gender']; // customer phone number
	$civil_status = $_POST['civil_status']; // customer civil status
	$employment_status = $_POST['employment_status']; // customer civil status
	


	$query = "UPDATE t_csr SET 
			c_csr_no = ?,
			c_date_of_sale = ?,
			c_b1_last_name = ?,
			c_b1_first_name = ?,
			c_b1_middle_name = ?,
			c_b2_last_name = ?,
			c_b2_first_name = ?,
			c_b2_middle_name = ?,
			c_address = ?,
			c_city_prov = ?,
			c_zip_code = ?,
			c_address_abroad = ?,
			c_birthdate = ?,
			c_age = ?,
			c_mobile_no = ?,
			c_email= ?,
			c_viber_no = ?,
			c_gender = ?,
			c_civil_status = ?,	
			c_employment_status = ? 
			WHERE c_csr_no = ?
			";


	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */					
 	$stmt->bind_param(
		'sssssssssssssssssssss',
		$id,
		$customer_date_of_sale,
		$customer_last_name_1,
		$customer_first_name_1,
		$customer_middle_name_1,
		$customer_last_name_2,
		$customer_first_name_2,
		$customer_middle_name_2,
		$customer_address_1,
		$customer_city_prov,
		$customer_zip_code,
		$customer_address_2,
		$birth_date,
		$customer_age,
		$customer_phone,
		$customer_email,
		$customer_viber,
		$customer_gender,
		$civil_status,
		$employment_status,
		$id);
								    
	
	//execute the query
	if($stmt->execute()){
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'CSR has been updated successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	$mysqli->close();

}

// Adding new product
if($action == 'delete_product') {

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$id = $_POST["delete"];

	// the query
	$query = "DELETE FROM t_lots WHERE c_lid = ?";

	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
	$stmt->bind_param('s',$id);

	//execute the query
	if($stmt->execute()){
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Product has been deleted successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	// close connection 
	$mysqli->close();

}

// Login to system
if($action == 'login') {

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	session_start();

    extract($_POST);

    $username = mysqli_real_escape_string($mysqli,$_POST['username']);
    $pass_encrypt = md5(mysqli_real_escape_string($mysqli,$_POST['password']));

    $query = "SELECT * FROM `users` WHERE username='$username' AND `password` = '$pass_encrypt'";

    $results = mysqli_query($mysqli,$query) or die (mysqli_connect_error());
    $count = mysqli_num_rows($results);

    if($count!="") {
		$row = $results->fetch_assoc();

		$_SESSION['login_username'] = $row['username'];

		// processing remember me option and setting cookie with long expiry date
		if (isset($_POST['remember'])) {	
			session_set_cookie_params([604800]); //one week (value in seconds)
			session_regenerate_id(true);
		}  
		
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Login was a success! Transfering you to the system now, hold tight!'
		));
    } else {
    	echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'Login incorrect, does not exist or simply a problem! Try again!'
	    ));
    }
}

// Adding new product
if($action == 'add_product') {

	$prod_code = $_POST['prod_code'];
	$prod_block = $_POST['prod_block'];
	$prod_lot = $_POST['prod_lot'];
	$prod_lid = sprintf('%03d%03d%02d', $prod_code, $prod_block, $prod_lot); 
	$prod_lot_area = $_POST['prod_lot_area'];
	$prod_lot_price = $_POST['prod_lot_price'];
	$prod_lot_status = $_POST['prod_status'];
	//$prod_lcp = $_POST['prod_lcp'];
	$prod_remarks = $_POST['prod_remarks'];

	//our insert query query
	$query  = "INSERT INTO t_lots
				(
					c_lid,
					c_site,
					c_block,
					c_lot,
					c_lot_area,
					c_price_sqm,
					c_status,
					c_remarks
				)
				VALUES (
					?,
					?, 
                	?,
                	?,
					?,
					?,
					?,
					?
                );
              ";

    header('Content-Type: application/json');

	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
	$stmt->bind_param('ssssssss',$prod_lid,$prod_code,$prod_block,$prod_lot,$prod_lot_area,$prod_lot_price,$prod_lot_status,$prod_remarks);

	if($stmt->execute()){
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Product has been added successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	//close database connection
	$mysqli->close();
}

// Adding new user
if($action == 'add_user') {

	$user_name = $_POST['name'];
	$user_username = $_POST['username'];
	$user_email = $_POST['email'];
	$user_phone = $_POST['phone'];
	$user_password = $_POST['password'];

	//our insert query query
	$query  = "INSERT INTO users
				(
					name,
					username,
					email,
					phone,
					password
				)
				VALUES (
					?,
					?, 
                	?,
                	?,
                	?
                );
              ";

    header('Content-Type: application/json');

	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	$user_password = md5($user_password);
	/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
	$stmt->bind_param('sssss',$user_name,$user_username,$user_email,$user_phone,$user_password);

	if($stmt->execute()){
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'User has been added successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	//close database connection
	$mysqli->close();
}

// Update product
if($action == 'update_user') {

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// user information
	$getID = $_POST['id']; // id
	$name = $_POST['name']; // name
	$username = $_POST['username']; // username
	$email = $_POST['email']; // email
	$phone = $_POST['phone']; // phone
	$password = $_POST['password']; // password

	if($password == ''){
		// the query
		$query = "UPDATE users SET
					name = ?,
					username = ?,
					email = ?,
					phone = ?
				 WHERE id = ?
				";
	} else {
		// the query
		$query = "UPDATE users SET
					name = ?,
					username = ?,
					email = ?,
					phone = ?,
					password =?
				 WHERE id = ?
				";
	}

	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	if($password == ''){
		/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
		$stmt->bind_param(
			'sssss',
			$name,$username,$email,$phone,$getID
		);
	} else {
		$password = md5($password);
		/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
		$stmt->bind_param(
			'ssssss',
			$name,$username,$email,$phone,$password,$getID
		);
	}

	//execute the query
	if($stmt->execute()){
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'User has been updated successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	//close database connection
	$mysqli->close();
	
}

// Delete User
if($action == 'delete_user') {

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$id = $_POST["delete"];

	// the query
	$query = "DELETE FROM users WHERE id = ?";

	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
	$stmt->bind_param('s',$id);

	if($stmt->execute()){
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'User has been deleted successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	// close connection 
	$mysqli->close();

}

// Delete User
if($action == 'delete_customer') {

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$id = $_POST["delete"];

	// the query
	$query = "DELETE FROM store_customers WHERE id = ?";

	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
	$stmt->bind_param('s',$id);

	if($stmt->execute()){
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Customer has been deleted successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	// close connection 
	$mysqli->close();

}

?>