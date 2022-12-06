<?php
include_once("includes/config.php");
date_default_timezone_set('Asia/Manila');

function getProject() {
 
   // Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
	}

    // Get all the project
    $sql = "SELECT * FROM t_projects order by c_acronym";
	$results = $mysqli->query($sql);
    //$all_categories = mysqli_query($con,$sql);
	if($results) {
		echo '<select name="prod_code" id= "prod_code" class="form-control">';
		while($row = $results->fetch_assoc()) {

			print '<option value="'.$row['c_code'].'">'.$row['c_acronym'].'</option>';
			
		}
		echo '</select>';

	} else {
		echo '<select name = "prod_code" id= "prod_code" class="form-control">';
		echo '<option value="">No Project</option>';
		echo '</select>';
		
	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
	

}
function getHouseModel() {
 
	// Connect to the database
	 $mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
 
	 // output any connection error
	 if ($mysqli->connect_error) {
		 die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
	 }
 
	 // Get all the project
	 $sql = "SELECT * FROM t_model_house order by c_code";
	 $results = $mysqli->query($sql);
	 //$all_categories = mysqli_query($con,$sql);
	 if($results) {
		 echo '<select name="house_model" id= "house_model" class="form-control">';
		 while($row = $results->fetch_assoc()) {
 
			 print '<option value="'.$row['c_model'].'">'.$row['c_model'].'</option>';
			 
		 }
	
 
	 } else {
		 echo '<select name = "house_model" id= "house_model" class="form-control">';
		 echo '<option value="">No House Model</option>';
	
		 
	 }
 
	 // Frees the memory associated with a result
	 $results->free();
 
	 // close connection 
	 $mysqli->close();
	 
 
 }
 
function getProjectSite() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM t_projects ORDER BY c_code ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>Code</th>
				<th>Name</th>
				<th>Acronym</th>
				<th>Address</th>
				<th>Province</th>
				<th>Zip</th>
				<th>Rate</th>
				<th>Reservation</th>
				<th class="actions">Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
					<td>'.$row["c_code"].'</td>
				    <td>'.$row["c_name"].'</td>
				    <td>'.$row["c_acronym"].'</td>
					<td>'.$row["c_address"].'</td>
				    <td>'.$row["c_province"].'</td>
				    <td>'.$row["c_zip"].'</td>
					<td>'.$row["c_rate"].'</td>
				    <td>'.number_format($row["c_reservation"],2).'</td>
				    <td class="actions"><a href="project-edit.php?id='.$row["c_code"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a data-project-id="'.$row['c_code'].'" class="btn btn-danger btn-xs delete-project"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no project sites to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}

function getHouse() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM t_model_house ORDER BY c_code ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>Code</th>
				<th>Model</th>
				<th>Acronym</th>
				<th class="actions">Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
					<td>'.$row["c_code"].'</td>
				    <td>'.$row["c_model"].'</td>
				    <td>'.$row["c_acronym"].'</td>
				    <td class="actions"><a href="house-edit.php?id='.$row["c_code"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a data-house-id="'.$row['c_code'].'" class="btn btn-danger btn-xs delete-house"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no project sites to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}

// get csr list
function getCSRs() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query

	if(isset($_POST["filtercsr"])){
		$filter = $_POST["filtercsr"];
		$query = "SELECT * FROM t_csr_view where c_csr_status = '$filter' order by c_csr_no";
	}else{
		$query = "SELECT * FROM t_csr_view";
	}

	//$query = "SELECT * FROM t_csr_view";

	//$usertype = $_SESSION['user_type'];
	//$username = $_SESSION['username'];
	
	/* if(($usertype) == ('IT Admin')){
		$query = "SELECT * FROM t_csr_view";
	}else if ($usertype ==  'COO'){
		$query = "SELECT *
		FROM t_csr WHERE (c_csr_status = 'Verified' or c_csr_status = 'Approved' or c_csr_status = 'Disapproved')
		ORDER BY c_date_of_sale";
	}else if ($usertype ==  'SOS') {
		$query = "SELECT *
		FROM t_csr WHERE (c_csr_status = 'Pending' or c_csr_status ='Verified' or c_csr_status = 'Cancelled')
		ORDER BY c_date_of_sale";
	}else if ($usertype ==  'CA') {
		$query = "SELECT *
		FROM t_csr WHERE (c_ca_status = 'Pending' or c_ca_status ='Approved' or c_ca_status = 'Disapproved')
		ORDER BY c_date_of_sale";
	
	}else {
	$query = "SELECT *
	FROM t_csr 
	WHERE c_created_by = '$username'
	ORDER BY c_date_of_sale";
 	} */

	// mysqli select query
	$results = $mysqli->query($query);
	$no = 1;
	if($results) {


		//MGA NIREMOVE KO MUNA
		//<th>Location</th>
		//<td>'.$row["c_acronym"].' Block '.$row["c_block"].' Lot '.$row["c_lot"].' </td>



		print '<table class="table table-striped table-hover table-bordered" id="data-table" cellspacing="0"><thead><tr>

				<th> No.</th>

				<th>Location</th>
				

				<th>Buyers Name</th>
				<th>Net TCP</th>
				<th>Aproval Status</th>
				<th>Res. Status</th>
				<th class="actions">Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {
			$status=$row["c_csr_status"];
			$date_created=$row["c_date_created"];
			$id=$row["c_csr_no"];


			$exp_date=new DateTime($row["c_duration"]);
			$exp_date_str=$row["c_duration"];
			$exp_date_only=date("Y-m-d",strtotime($exp_date_str));
			//echo $exp_date_only;

			$today_date=date('Y/m/d H:i:s');
			$today_date_only=date("Y-m-d",strtotime($today_date));
			//echo $today_date_only;

			$exp=strtotime($exp_date_str);
			$td=strtotime($today_date);
			
			print '
				<tr>
					<td>'.$no++.'</td>
					<td>'.$row["c_acronym"].' Block '.$row["c_block"].' Lot '.$row["c_lot"].' </td>
					';
					
			print '
					<td>'.$row["c_b1_last_name"].', '.$row["c_b1_first_name"].' '.$row["c_b1_middle_name"].' </td>
					<td>'.number_format($row["c_net_tcp"], 2).'</td>
				';
			
				if($row['c_csr_status'] == "Approved"){
					print '<td><span class="label label-success"> COO '.$row['c_csr_status'].'</span></td>';
				} elseif ($row['c_csr_status'] == "Pending"){
					print '<td><span class="label label-warning">'.$row['c_csr_status'].'</span></td>';
				} elseif ($row['c_csr_status'] == "Disapproved"){
					print '<td><span class="label label-danger">COO '.$row['c_csr_status'].'</span></td>';
				} elseif ($row['c_csr_status'] == "Verified"){
					print '<td><span class="label label-info"> SOS '.$row['c_csr_status'].'</span></td>';
				} elseif ($row['c_csr_status'] == "Cancelled"){
					print '<td><span class="label label-danger"> COO '.$row['c_csr_status'].'</span></td>';
				}

				else{
					print '<td><span class="label label-danger">No status</span></td>';
				}

				if(($td>$exp && $status!='Verified' && $status!='Pending')){ 
					//$diff=$td-$exp;
					$x=$exp_date->diff(new DateTime());

					print '<td class="counter"><span class="label label-danger">'."Reopen".'</span></td>';
					
					$query1 = "UPDATE t_csr SET c_csr_status = 'Reopen' WHERE c_csr_no = '".$id."'";
					$result1 = mysqli_query($mysqli,$query1);

					if($result1){
						//echo "goods";
						}else{
							//echo "not goods";
						}
					}
				else if($today_date_only==$exp_date_only && $status!='Approved'){
					print '<td class="counter"><span class="label label-danger">'."-".'</span></td>';
				}
				else{
					//$diff=$td-$exp;
					$x=$exp_date->diff(new DateTime());
					print '<td class="counter"><span class="label label-info">'.$x->format('%h hr/s %i min/s %s sec/s remaining').'</span></td>';
				}


				print '
				<td class="actions"><a href="csr-view.php?id='.$row["c_csr_no"].'" class="btn btn-info btn-xs">View
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span></a> 

				<a data-csr-id="'.$row['c_csr_no'].'" class="btn btn-danger btn-xs delete-csr">Delete
				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
				
			    </tr>
			'; 
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no invoices to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();

}

// Initial csr number
function getUserId() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$query = "SELECT user_id FROM users ORDER BY user_id DESC LIMIT 1";

	if ($result = $mysqli->query($query)) {

		$row_cnt = $result->num_rows;

	    $row = mysqli_fetch_assoc($result);

	    //var_dump($row);

	    if($row_cnt == 0){
			echo CSR_INITIAL_VALUE;
		} else {
			echo $row['user_id'] + 1; 
		}

	    // Frees the memory associated with a result
		$result->free();

		// close connection 
		$mysqli->close();
	}
	
}


// Initial csr number
function getCSRId() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$query = "SELECT AUTO_INCREMENT AS c_csr_no
		FROM information_schema.TABLES
		WHERE TABLE_SCHEMA = 'alscdb'
		AND TABLE_NAME = 't_csr'";


	if ($result = $mysqli->query($query)) {

		$row_cnt = $result->num_rows;

	    $row = mysqli_fetch_assoc($result);

	    //var_dump($row);

	    if($row_cnt == 0){
			echo CSR_INITIAL_VALUE;
		} else {

			echo $row['c_csr_no']; 
				
			}

	    // Frees the memory associated with a result
		$result->free();

		// close connection 
		$mysqli->close();
	}
	
}
function get_acronym($phase) {
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	


	// the query
	$query = "SELECT * from t_projects where c_code = $phase ";
	
	$results = $mysqli->query($query);

	if($results) {

		while($row = $results->fetch_assoc()) {

			print ' '.$row["c_acronym"].'';

		}
	}else{
			print "None";

		}


	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();

}

function popLotsList() {

// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	


	// the query
	$query = "SELECT c_lid, c.c_acronym, i.c_block, i.c_lot, i.c_status, i.c_lot_area, i.c_price_sqm 
	FROM t_lots i 
	JOIN t_projects c 
	ON i.c_site = c.c_code
	WHERE i.c_site = c.c_code  and  (i.c_status = 'Available' or i.c_status  = 'Pre-Reserved')
	ORDER BY c.c_acronym, i.c_block, i.c_lot";

	//echo $query;
	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table-lot"><thead><tr>
				
				<th>Lot ID</th>
				<th>Project</th>
				<th>Block</th>
				<th>Lot</th>
				<th>Status </th>
				<th class="actions">Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {
	
		    print '
			    <tr>
					<td>'.$row["c_lid"].'</td>
					<td>'.$row["c_acronym"].'</td>
				    <td>'.$row["c_block"].'</td>
				    <td>'.$row["c_lot"].'</td>
					<td>'.$row["c_status"].'</td>
				    <td class="actions"><a href="#" class="btn btn-primary btn-xs lot-select" data-lot-lid="'.$row['c_lid'].'" data-lot-site="'.$row['c_acronym'].'" data-lot-block="'.$row['c_block'].'" data-lot-lot="'.$row['c_lot'].'" data-lot-lot-area="'.$row['c_lot_area'].'" data-lot-per-sqm="'.$row['c_price_sqm'].'">Select</a></td>
			   
				</tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no lots to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();

}
function popHousesList() {

	// Connect to the database
		$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
	
		// output any connection error
		if ($mysqli->connect_error) {
			die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
		}
		
		
	
		// the query
		$query = "SELECT distinct(c_lid), i.c_status as c_lot_status, i.*, c.*
		FROM t_house i 
		JOIN t_projects c 
		ON i.c_site = c.c_code
		WHERE i.c_site = c.c_code  and i.c_status = 'Available' 
		ORDER BY c.c_acronym, i.c_block, i.c_lot";
	
		//echo $query;
		// mysqli select query
		$results = $mysqli->query($query);
	
		if($results) {
	
			print '<table class="table table-striped table-hover table-bordered" id="data-table-lot"><thead><tr>
					
					<th>Lot ID</th>
					<th>Project</th>
					<th>Block</th>
					<th>Lot</th>
					<th>Status</th>
					<th>Action</th>
	
				  </tr></thead><tbody>';
	
			while($row = $results->fetch_assoc()) {
	
				print '
					<tr>
						<td>'.$row["c_lid"].'</td>
						<td>'.$row["c_acronym"].'</td>
						<td>'.$row["c_block"].'</td>
						<td>'.$row["c_lot"].'</td>
						<td>'.$row["c_lot_status"].'</td>
						<td><a href="#" class="btn btn-primary btn-xs house-select" data-house-model="'.$row['c_house_model'].'" data-house-floor-area="'.$row['c_floor_area'].'" data-house-per-sqm="'.$row['c_h_price_sqm'].'">Select</a></td>
				   
					</tr>
				';
			}
	
			print '</tr></tbody></table>';
	
		} else {
	
			echo "<p>There are no lots to display.</p>";
	
		}
	
		// Frees the memory associated with a result
		$results->free();
	
		// close connection 
		$mysqli->close();
	
	}



	function popCustomersList() {

	
		// Connect to the database
		$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
	
		// output any connection error
		if ($mysqli->connect_error) {
			die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
		}
	
		// the query
		$query = "SELECT * FROM store_customers ORDER BY last_name ASC";
	
		//echo $query;
		// mysqli select query
		$results = $mysqli->query($query);
	
		if($results) {
	
			print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>
	
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th class="actions">Actions</th>
	
				  </tr></thead><tbody>';
	
			while($row = $results->fetch_assoc()) {
	
				print '
					<tr>
						<td>'.$row["last_name"].'</td>
						<td>'.$row["first_name"].'</td>
						<td>'.$row["middle_name"].'</td>
						<td>'.$row["email"].'</td>
						<td>'.$row["phone"].'</td>
						<td class="actions"><a href="#" class="btn btn-primary btn-xs customer-select" data-customer-employment="'.$row['employment_status'].'" data-customer-civil="'.$row['civil_status'].'" data-customer-gender="'.$row['gender'].'" data-customer-age="'.$row['age'].'" data-customer-birthday="'.$row['birthdate'].'" data-customer-viber="'.$row['viber'].'" data-customer-address-1="'.$row['address'].'" data-customer-zip-code="'.$row['zip_code'].'" data-customer-city-prov="'.$row['city_prov'].'" data-customer-address-abroad="'.$row['address_abroad'].'" data-customer-lname2="'.$row['b2_last_name'].'" data-customer-fname2="'.$row['b2_first_name'].'" data-customer-mname2="'.$row['b2_middle_name'].'" data-customer-lname="'.$row['last_name'].'" data-customer-fname="'.$row['first_name'].'" data-customer-mname="'.$row['middle_name'].'" data-customer-email="'.$row['email'].'" data-customer-phone="'.$row['phone'].'">Select</a></td>
					</tr>
				';
			}
	
			print '</tr></tbody></table>';
	
		} else {
	
			echo "<p>There are no clients to display.</p>";
	
		}
	
		// Frees the memory associated with a result
		$results->free();
	
		// close connection 
		$mysqli->close();
	
	
	
	}

function getLots() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT c_lid, c_acronym, c_block, c_lot, c_lot_area, c_price_sqm, i.c_status
			FROM t_lots i 
			JOIN t_projects c 
			ON i.c_site = c.c_code
			WHERE i.c_site = c.c_code  
			ORDER BY c.c_acronym, i.c_block, i.c_lot";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table" ><thead><tr>

				<th>Lot ID#</th>
				<th>Phase</th>
				<th>Block</th>
				<th>Lot</th>
				<th>Lot Area</th>
				<th>Price SQM</th>
				<th>Status</th>
				<th class="actions">Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
					<td>'.$row["c_lid"].'</td>
				    <td>'.$row["c_acronym"].'</td>
				    <td>'.$row["c_block"].'</td>
					<td>'.$row["c_lot"].'</td>
					<td>'.$row["c_lot_area"].'</td>
					<td>'.number_format($row["c_price_sqm"],2).'</td>
					<td>'.$row["c_status"].'</td>
				    <td class="actions"><a href="lot-edit.php?id='.$row["c_lid"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a data-lot-id="'.$row['c_lid'].'" class="btn btn-danger btn-xs delete-lot"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no lots to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}

// get user list
function getUsers() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM users ORDER BY username ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>User ID</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Username</th>
				<th>User Type</th>
				<th class="actions">Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['user_id'].'</td>
					<td>'.$row["last_name"].'</td>
				    <td>'.$row["first_name"].'</td>
				    <td>'.$row["middle_name"].'</td>
					<td>'.$row["username"].'</td>
					<td>'.$row["user_type"].'</td>
				    <td class="actions"><a href="user-edit.php?id='.$row["user_id"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a data-user-id="'.$row['user_id'].'" class="btn btn-danger btn-xs delete-user"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no users to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}
function popAgentsList() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM t_agents ORDER BY c_last_name ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {
		echo '<select class="form-control item-select">';
		while($row = $results->fetch_assoc()) {

		    print '<option value="'.$row['c_code'].' - '.$row["c_position"].' ">'.$row["c_last_name"].' , '.$row["c_first_name"].' </option>';
		}
		echo '</select>';

	} else {

		echo "<p>There are no agents, please add an agents.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();

}


function getAgents() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM t_agents ORDER BY c_last_name ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>Code</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Position</th>
				<th>Status</th>
				<th class="actions">Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['c_code'].'</td>
					<td>'.$row["c_last_name"].'</td>
				    <td>'.$row["c_first_name"].'</td>
				    <td>'.$row["c_position"].'</td>
					<td>'.$row["c_status"].'</td>
				    <td class="actions">
					<a href="agent-edit.php?id='.$row["c_code"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 
					<a data-agent-id="'.$row['c_code'].'" class="btn btn-danger btn-xs delete-agent"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no users to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}


// get user list
function getCustomers() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM store_customers ORDER BY last_name ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th class="actions">Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
					<td>'.$row["last_name"].', '.$row["first_name"].'</td>
				    <td>'.$row["email"].'</td>
				    <td>'.$row["phone"].'</td>
				    <td class="actions"><a href="customer-edit.php?id='.$row["id"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 
					<a data-customer-id="'.$row['id'].'" class="btn btn-danger btn-xs delete-customer">
					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no customers to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}

// get csr list
function getRAs() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
    $query = "SELECT *
		FROM t_approval_csr i inner join t_csr_view x on i.c_csr_no = x.c_csr_no
		ORDER BY c_date_approved";

	// mysqli select query
	$results = $mysqli->query($query);
	$no = 1;
	// mysqli select query
	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table" cellspacing="0"><thead><tr>

				<th> No. </th>
				<th>RA No.</th>
				<th>Date of Sale</th>
				<th>Location </th>
				<th>Buyer Name </th>
				<th>Net TCP</th>
				<th>Approval Status</th>	
				<th>Approval Duration</th>
				<th>Reserve Status</th>
				<th>CA Status</th>
				<th class="actions">Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {
			$status=$row["c_csr_status"];
			$date_created=$row["c_csr_date_approved"];
			$id=$row["c_csr_no"];


			$exp_date=new DateTime($row["c_duration"]);
			$exp_date_str=$row["c_duration"];
			$exp_date_only=date("Y-m-d",strtotime($exp_date_str));
			//echo $exp_date_only;

			$today_date=date('Y/m/d H:i:s');
			$today_date_only=date("Y-m-d",strtotime($today_date));
			//echo $today_date_only;

			$exp=strtotime($exp_date_str);
			$td=strtotime($today_date);

			print '
				<tr>
					<td>'.$no++.'</td>
					<td>'.$row["ra_id"].'</td>
					<td>'.$row["c_date_of_sale"].'</td>
					<td>'.$row["c_acronym"].' Block '.$row["c_block"].' Lot '.$row["c_lot"].' </td>
					<td>'.$row["c_b1_last_name"].', '.$row["c_b1_first_name"].' '.$row["c_b1_middle_name"].' </td>
					
					<td>'.number_format($row["c_net_tcp"], 2).'</td>
				';

				if($row['c_csr_status'] == "Approved"){
					print '<td><span class="label label-success"> COO '.$row['c_csr_status'].'';
					print '\n';
					$x=$exp_date->diff(new DateTime());
					print ''.$x->format('%h hr/s %i min/s %s sec/s remaining').'</span></td>';
				} elseif ($row['c_csr_status'] == "Pending"){
					print '<td><span class="label label-warning">'.$row['c_csr_status'].'</span></td>';
				} elseif ($row['c_csr_status'] == "Disapproved"){
					print '<td><span class="label label-danger">COO '.$row['c_csr_status'].'</span></td>';
				} elseif ($row['c_csr_status'] == "Verified"){
					print '<td><span class="label label-info"> SOS '.$row['c_csr_status'].'</span></td>';
				} elseif ($row['c_csr_status'] == "Cancelled"){
					print '<td><span class="label label-danger"> SOS '.$row['c_csr_status'].'</span></td>';
				} elseif ($row['c_csr_status'] == "For Reopen"){
					print '<td><span class="label label-danger"> For '.$row['c_csr_status'].'</span></td>';
				}

				else{
					print '<td><span class="label label-danger">No status</span></td>';
				}

			
				if(($td>$exp && $status!='Verified' && $status!='Pending')){ 
					//$diff=$td-$exp;
					$x=$exp_date->diff(new DateTime());

					print '<td class="counter"><span class="label label-danger">'."Reopen".'</span></td>';
					
					$query1 = "UPDATE t_csr SET c_csr_status = 'Reopen' WHERE c_csr_no = '".$id."'";
					$result1 = mysqli_query($mysqli,$query1);

					if($result1){
						//echo "goods";
						}else{
							//echo "not goods";
						}
					}
				else if($today_date_only==$exp_date_only && $status!='Approved'){
					print '<td class="counter"><span class="label label-danger">'."-".'</span></td>';
				}
				else{
					//$diff=$td-$exp;
					$x=$exp_date->diff(new DateTime());
					print '<td class="counter"><span class="label label-info">'.$x->format('%h hr/s %i min/s %s sec/s remaining').'</span></td>';
				}

				
			
		

				if($row['c_reserve_status'] == "Paid"){
					print '<td><span class="label label-success">'.$row['c_reserve_status'].'</span></td>';
			
				}else{
					print '<td><span class="label label-warning">Unpaid</span></td>';
				}


				if($row['c_ca_status'] == "Approved"){

					print '<td><span class="label label-success">CA '.$row['c_ca_status'].'</span></td>';
				} elseif ($row['c_ca_status'] == "Pending"){
					print '<td><span class="label label-warning">'.$row['c_ca_status'].'</span></td>';
				} elseif ($row['c_ca_status'] == "Disapproved"){
					print '<td><span class="label label-danger">CA '.$row['c_ca_status'].'</span></td>';}

				else{
					print '<td><span class="label label-danger"> --- </span></td>';
				}

			
				print '
				<td class="actions"><a href="ra-view.php?id='.$row["c_csr_no"].'" data-ra-id="'.$row['ra_id'].'" class="btn btn-primary btn-xs">View
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span></a> 
				
			    </tr>
			'; 

		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no invoices to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();

}



// get reservations list
function getReservations() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
    $query = "SELECT *
		FROM t_reservation
		ORDER BY id";

	// mysqli select query
	$results = $mysqli->query($query);
	$no = 1;
	// mysqli select query
	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table" cellspacing="0"><thead><tr>

				<th> No. </th>
				<th>RA No.</th>
				<th> Reserved Date </th>
				<th> OR No. </th>
				<th> Reservation Fee</th>
				<th class="actions">Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {
				
			
			print '
				<tr>
					<td>'.$no++.'</th>
					<td>'.$row["ra_no"].'</td>
					<td>'.$row["c_reserve_date"].'</td>
					<td>'.$row["c_or_no"].'</td>
					<td>'.$row["c_amount_paid"].'</td>
					<td class="actions"><a href="reservation-edit.php?id='.$row["id"].'" class="btn btn-primary btn-xs">
					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				  	<a data-ra-id="'.$row['id'].'" data-csr-no="'.$row['c_csr_no'].'" class="btn btn-danger btn-xs delete-reservation">
					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>

			    </tr>
			'; 

		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no invoices to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();

}



function popRAsList() {

	// Connect to the database
		$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
	
		// output any connection error
		if ($mysqli->connect_error) {
			die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
		}
		/* // the query
		$query = "SELECT i.ra_id, i.c_csr_no, c_acronym, c_block, c_lot, x.c_lid, c_or_no, c_reserve_date, c_amount_paid
		FROM t_ra i
		LEFT JOIN t_csr c 
		ON i.c_csr_no = c.c_csr_no 
        LEFT JOIN t_lots x 
        ON x.c_lid = c.c_lot_lid
        LEFT JOIN t_projects y 
        ON y.c_code = x.c_site
		LEFT JOIN t_reservation z
		ON z.c_csr_no = i.c_csr_no
		ORDER BY i.ra_id"; */
/* 
		$query = "SELECT c.c_reservation,c_csr_no, c_acronym, c_block, c_lot, x.c_lid
		FROM  t_csr c 
        LEFT JOIN t_lots x 
        ON x.c_lid = c.c_lot_lid
        LEFT JOIN t_projects y 
        ON y.c_code = x.c_site
		WHERE c_reserve_status = '' AND c_csr_status = 'Approved'
		ORDER BY c_csr_no"; */


		$query ="SELECT *
		FROM t_approval_csr i inner join t_csr_view x on i.c_csr_no = x.c_csr_no
		ORDER BY c_date_approved";

		
		//echo $query;
		// mysqli select query
		$results = $mysqli->query($query);
	
		if($results) {
		
	
			print '<table class="table table-striped table-hover table-bordered" id= "data-table" cellspacing="0"><thead><tr>
			
			
			
				<th>RA No.</th>
				<th>Phase</th>
				<th>Block</th>
				<th>Lot</th>
				<th>Buyer Name</th>
				<th>Action</th>


			  </tr></thead><tbody>';
	
			while($row = $results->fetch_assoc()) {
	
				print '
					<tr>
						<td>'.$row["ra_id"].'</td>
						<td>'.$row["c_acronym"].'</td>
						<td>'.$row["c_block"].'</td>
						<td>'.$row["c_lot"].'</td>
						<td>'.$row["c_b1_last_name"].', '.$row["c_b1_first_name"].' '.$row["c_b1_middle_name"].' </td>
					
						
						<td><a href="#" class="btn btn-primary btn-xs ra-select" data-ra-no="'.$row['ra_id'].'" data-ra-lot-lid="'.$row['c_lot_lid'].'" data-csr-no="'.$row['c_csr_no'].'" data-ra-site="'.$row['c_acronym'].'" data-ra-block="'.$row['c_block'].'" data-ra-lot="'.$row['c_lot'].'" data-ra-res="'.$row['c_reservation'].'" data-ra-fname="'.$row["c_b1_last_name"].', '.$row["c_b1_first_name"].' '.$row["c_b1_middle_name"].'">Select</a></td>
				   
						</tr>
				';
			}
	
			print '</tr></tbody></table>';
	
		} else {
	
			echo "<p>There are no RAs to display.</p>";
	
		}
	
		// Frees the memory associated with a result
		$results->free();
	
		// close connection 
		$mysqli->close();
	
	}
?>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $(".c_network").change(function(){
            var c_code=$(this).val();
            $.ajax({
                url:"division.php",
                method:"POST",
                data:{c_code:c_code},
                success:function(data){
                    $(".c_division").html(data);
                }
            });
        });
    });
</script>
