

<?php


include_once('includes/config.php');

// show PHP errors
ini_set('display_errors', 1);

//get session user
session_start();

// output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$action = isset($_POST['action']) ? $_POST['action'] : "";


if ($action == 'update_reservation'){


	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	$id = $_POST['res_id'];
	$csr_no = $_POST['csr_no'];
	$c_or_no = $_POST['or_no'];
	$c_amount_paid = $_POST['amount_paid'];
	$c_lot_lid =  $_POST['lot_lid'];


	$query = "UPDATE t_reservation SET
				c_or_no = ?,
				c_amount_paid = ?
				WHERE id = ?
			";

	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
	$stmt->bind_param(
		'ssssss',
		$c_or_no,
		$c_reserve_date,
		$c_amount_paid,
		$duration,
		$duration_stat,
		$id);

	//execute the query
	if($stmt->execute()){
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Reservation has been updated successfully!'
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

if($action == 'delete_ra') {

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$id = $_POST["delete"];
	$csr_no = $_POST["csr_no"];

	// the query
	$query ="UPDATE t_csr 
	SET c_reserve_status = ''
	where c_csr_no = ".$csr_no."
	;";

	$query .= "DELETE FROM t_reservation WHERE id = ".$id.";";

	
	if($mysqli -> multi_query($query)) {
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Reservation has been deleted successfully!'
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

if($action == 'delete_reservation') {

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$id = $_POST["delete"];
	$csr_no = $_POST["csr_no"];

	// the query
	$query ="UPDATE t_approval_csr 
	SET c_reserve_status = 0
	where c_csr_no = ".$csr_no."
	;";

	$query .= "DELETE FROM t_reservation WHERE id = ".$id.";";

	


	if($mysqli -> multi_query($query)) {
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Reservation has been deleted successfully!'
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


	$query .= "DELETE FROM t_csr_commission WHERE c_csr_no = ".$id.";";


	if($mysqli -> multi_query($query)) {
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'CSR has been deleted successfully!'
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

		$_SESSION['username'] = $row['username'];
		$_SESSION['user_type'] = $row['user_type'];
		$_SESSION['password'] = $row['password'];

		$_SESSION['lastname'] = $row['last_name'];
		$_SESSION['firstname']= $row['first_name'];
		$_SESSION['middlename'] = $row['middle_name'];


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

if ($action == 'add_comment'){

	date_default_timezone_set("Asia/Manila");
	$mysqldate = date("Y-m-d H:i:s"); 


	$name = $_POST["name"];
	$comment = $_POST["comment"];
	$csr_no = $_POST["csr_id"];
	$reply_of = 0;

	
	/* $query  = "SELECT * FROM t_csr_comments ;"; */
	$query = "INSERT INTO t_csr_comments(name, comment, c_csr_no, created_at, reply_of) 
			VALUES ('" . $name . "', '" . $comment . "', '" . $csr_no . "', '" . $mysqldate . "', '" . $reply_of . "');
	";
		
	
	
	header('Content-Type: application/json');
	// execute the query
	if($mysqli -> multi_query($query)){
		//if saving success
		$arr = array(
			'status' => 'Success',
			'message'=> 'Comment has been posted!'
		);
		echo json_encode($arr);
		
	} else {
		$arr = array(
			'status' => 'Error',
			'message'=> 'There has been an error, please try again.');
			// 'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>');
		echo json_encode($arr); 
			}
	//close database connection
	$mysqli->close();

}


if ($action == 'add_reply'){


 
	$username = $_POST["name"];
	$comment = $_POST["comment"];	
	$csr_no = $_POST["csr_id"];
	$reply_of = $_POST["reply_of"];


	$query = "INSERT INTO t_csr_comments(name, comment, c_csr_no, created_at, reply_of) VALUES ('" . $username . "', '" . $comment . "', '" . $csr_no . "', '" . $mysqldate . "' , '" . $reply_of . "')";


	header('Content-Type: application/json');
	// execute the query
	if($mysqli -> multi_query($query)){
		//if saving success
		$arr = array(
			'status' => 'Success',
			'message'=> 'Reply has been posted!'
		);
		echo json_encode($arr);
		
	} else {
		$arr = array(
			'status' => 'Error',
			'message'=> 'There has been an error, please try again.');
			// 'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>');
		echo json_encode($arr); 
			}
	//close database connection
	$mysqli->close();



}
?>
