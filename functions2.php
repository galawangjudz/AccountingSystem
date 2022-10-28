<?php


include_once("includes/config.php");




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
	

// get csr list
function getCSRs() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
    $query = "SELECT *
		FROM t_csr
		ORDER BY c_date_of_sale";

	// mysqli select query
	$results = $mysqli->query($query);

	// mysqli select query
	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table" cellspacing="0"><thead><tr>

				<th>Contract No. #</th>
				<th>Full Name</th>
				<th>Net TCP</th>
				<th>Date of Sale</th>
				<th>Status</th>
				<th>Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {
				
			
			print '
				<tr>
					<td>'.$row["c_csr_no"].'</td>
					<td>'.$row["c_b1_last_name"].', '.$row["c_b1_first_name"].' '.$row["c_b1_middle_name"].' </td>
				    
					<td>'.$row["c_net_tcp"].'</td>
				    <td>'.$row["c_date_of_sale"].'</td>
				';
		/* 		
			print '<td><button onclick="updateStatus(<?php echo '.$row["c_csr_no"].';?>)" id="statusBtn<?php echo '.$row["c_csr_no"].';?>" class="status-btn <?php echo '.$row["c_csr_status"].'==0?"approve":"disapprove"; ?>"><?php echo '.$row["c_csr_status"].'==0?"Approve":"Disapprove"; ?></button></td>'
 */
				if($row['c_csr_status'] == "Approved"){
					print '<td><span class="label label-success">'.$row['c_csr_status'].'</span></td>';
				} elseif ($row['c_csr_status'] == "Pending"){
					print '<td><span class="label label-warning">'.$row['c_csr_status'].'</span></td>';
				} elseif ($row['c_csr_status'] == "Disapproved"){
					print '<td><span class="label label-danger">'.$row['c_csr_status'].'</span></td>';}

				else{
					print '<td><span class="label label-danger">No status</span></td>';
				} 
			/*  	print '<td>
				 <select class= "csr-stat" name= "status_list" id ="status_list" csr-id ='.$row["c_csr_no"].' >
					<option value="No Status">Update Status</option>  
					<option value="Pending">Pending</option>  
					<option value="Approved">Approved</option>  
					<option value="Disapproved">Disapproved</option>  
				 </select>';
   */
				print '
				<td><a href="csr-view.php?id='.$row["c_csr_no"].'" class="btn btn-success btn-xs">
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span></a> 
				<a href="csr-edit.php?id='.$row["c_csr_no"].'" class="btn btn-primary btn-xs">
				<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 
				<a href="#" data-csr-id="'.$row['c_csr_no'].'" data-email="'.$row['c_email'].'" data-invoice-type="'.$row['c_employment_status'].'" data-custom-email="'.$row['c_email'].'" class="btn btn-success btn-xs email-invoice">
				<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> 
				<a href="print.php?id='.$row["c_csr_no"].'" class="btn btn-info btn-xs" target="_blank">
				<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> 
				<a data-csr-id="'.$row['c_csr_no'].'" class="btn btn-danger btn-xs delete-csr">
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
function getCSRId() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$query = "SELECT c_csr_no FROM t_csr ORDER BY c_csr_no DESC LIMIT 1";

	if ($result = $mysqli->query($query)) {

		$row_cnt = $result->num_rows;

	    $row = mysqli_fetch_assoc($result);

	    //var_dump($row);

	    if($row_cnt == 0){
			echo CSR_INITIAL_VALUE;
		} else {
			echo $row['c_csr_no'] + 1; 
		}

	    // Frees the memory associated with a result
		$result->free();

		// close connection 
		$mysqli->close();
	}
	
}

// populate product dropdown for invoice creation
function popProductsList() {

// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	


	// the query
	$query = "SELECT * 
	FROM t_lots i 
	JOIN t_projects c 
	ON i.c_site = c.c_code
	WHERE i.c_site = c.c_code  
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
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
					<td>'.$row["c_lid"].'</td>
					<td>'.$row["c_acronym"].'</td>
				    <td>'.$row["c_block"].'</td>
				    <td>'.$row["c_lot"].'</td>
				    <td><a href="#" class="btn btn-primary btn-xs lot-select" data-lot-lid="'.$row['c_lid'].'" data-lot-site="'.$row['c_acronym'].'" data-lot-block="'.$row['c_block'].'" data-lot-lot="'.$row['c_lot'].'" data-lot-lot-area="'.$row['c_lot_area'].'" data-lot-per-sqm="'.$row['c_price_sqm'].'">Select</a></td>
			   
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

// populate product dropdown for invoice creation



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
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
					<td>'.$row["last_name"].'</td>
					<td>'.$row["first_name"].'</td>
					<td>'.$row["middle_name"].'</td>
					<td>'.$row["email"].'</td>
					<td>'.$row["phone"].'</td>
					<td><a href="#" class="btn btn-primary btn-xs customer-select" data-customer-lname="'.$row['last_name'].'" data-customer-fname="'.$row['first_name'].'" data-customer-mname="'.$row['middle_name'].'" data-customer-email="'.$row['email'].'" data-customer-phone="'.$row['phone'].'" data-customer-address-1="'.$row['address'].'" data-customer-city-prov="'.$row['city_prov'].'" data-customer-zip-code="'.$row['zip_code'].'">Select</a></td>
				</tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no products to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();



}

// get products list
function getProducts() {

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
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
					<td>'.$row["c_lid"].'</td>
				    <td>'.$row["c_acronym"].'</td>
				    <td>'.$row["c_block"].'</td>
					<td>'.$row["c_lot"].'</td>
					<td>'.$row["c_lot_area"].'</td>
					<td>P'.$row["c_price_sqm"].'</td>
					<td>'.$row["c_status"].'</td>
				    <td><a href="product-edit.php?id='.$row["c_lid"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a data-product-id="'.$row['c_lid'].'" class="btn btn-danger btn-xs delete-product"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no products to display.</p>";

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

				<th>Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
					<td>'.$row["username"].'</td>
				    <td>'.$row["email"].'</td>
				    <td>'.$row["phone"].'</td>
				    <td><a href="user-edit.php?id='.$row["id"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a data-user-id="'.$row['id'].'" class="btn btn-danger btn-xs delete-user"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
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
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['c_code'].'</td>
					<td>'.$row["c_last_name"].'</td>
				    <td>'.$row["c_first_name"].'</td>
				    <td>'.$row["c_position"].'</td>
					<td>'.$row["c_status"].'</td>
				    <td><a href="agent-edit.php?id='.$row["c_code"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a data-agent-code="'.$row['c_code'].'" class="btn btn-danger btn-xs delete-agent"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
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
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
					<td>'.$row["last_name"].', '.$row["first_name"].'</td>
				    <td>'.$row["email"].'</td>
				    <td>'.$row["phone"].'</td>
				    <td><a href="customer-edit.php?id='.$row["id"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a data-customer-id="'.$row['id'].'" class="btn btn-danger btn-xs delete-customer"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
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



// get ra list
function getRAs() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
    $query = "SELECT *
		FROM t_ra i
		JOIN t_csr x 
		ON i.c_csr_no = x.c_csr_no
		ORDER BY c_date_approved";
		

	// mysqli select query
	$results = $mysqli->query($query);

	// mysqli select query
	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table" cellspacing="0"><thead><tr>

				<th>Ra No. #</th>
				<th>Contract No. #</th>
				<th>Full Name</th>
				<th>Net TCP</th>
				<th>Date of Sale</th>
				<th>Status</th>
				<th>Approval</th>
				<th>Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {
				
			
			print '
				<tr>
					<td>'.$row["ra_id"].'</td>
					<td>'.$row["c_csr_no"].'</td>
					<td>'.$row["c_b1_last_name"].', '.$row["c_b1_first_name"].' '.$row["c_b1_middle_name"].' </td>
					<td>'.$row["c_net_tcp"].'</td>
				    <td>'.$row["c_date_of_sale"].'</td>
				';
			
				if($row['c_ra_status'] == "Approved"){
					print '<td><span class="label label-success">'.$row['c_ra_status'].'</span></td>';
				} elseif ($row['c_ra_status'] == "Pending"){
					print '<td><span class="label label-warning">'.$row['c_ra_status'].'</span></td>';
				} elseif ($row['c_ra_status'] == "Disapproved"){
					print '<td><span class="label label-danger">'.$row['c_ra_status'].'</span></td>';}

				else{
					print '<td><span class="label label-danger">No status</span></td>';
				}


			print '<td>
				<select id= "ra_stat" onchange=status_change(this.option[this.selectedIndex].value,'.$row["ra_id"].')>
					<option value="No Status">Update Status</option>  
					<option value="Pending">Pending</option>  
					<option value="Approved">Approved</option>  
					<option value="Disapproved">Disapproved</option>  
				</select>';

			 print '
				    <td><a data-ra-id="'.$row['ra_id'].'" class="btn btn-danger btn-xs delete-ra"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			'; 

		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no reservation application to display.</p>";

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
		
	
		// the query
		$query = "SELECT ra_id, i.c_csr_no, c_acronym, c_block, c_lot, x.c_lid
		FROM t_ra i
		LEFT JOIN t_csr c 
		ON i.c_csr_no = c.c_csr_no 
        LEFT JOIN t_lots x 
        ON x.c_lid = c.c_lot_lid
        LEFT JOIN t_projects y 
        ON y.c_code = x.c_site
		ORDER BY ra_id";
	
		//echo $query;
		// mysqli select query
		$results = $mysqli->query($query);
	
		if($results) {
		
	
			print '<table class="table table-striped table-hover table-bordered" id= "data-table" cellspacing="0"><thead><tr>
	
				<th>Ra No.</th>
				<th>Lot Lid.</th>
				<th>CSR No.</th>
				<th>Phase</th>
				<th>Block</th>
				<th>Lot</th>
				<th>Action</th>


			  </tr></thead><tbody>';
	
			while($row = $results->fetch_assoc()) {
	
				print '
					<tr>
						<td>'.$row["ra_id"].'</td>
						<td>'.$row["c_lid"].'</td>
						<td>'.$row["c_csr_no"].'</td>
						<td>'.$row["c_acronym"].'</td>
						<td>'.$row["c_block"].'</td>
						<td>'.$row["c_lot"].'</td>
						
						<td><a href="#" class="btn btn-primary btn-xs ra-select" data-ra-no="'.$row['ra_id'].'" data-ra-lot-lid="'.$row['c_lid'].'" data-csr-no="'.$row['c_csr_no'].'" data-ra-site="'.$row['c_acronym'].'" data-ra-block="'.$row['c_block'].'" data-ra-lot="'.$row['c_lot'].'">Select</a></td>
				   
						</tr>
				';
			}
	
			print '</tr></tbody></table>';
	
		} else {
	
			echo "<p>There are no reservation application to display.</p>";
	
		}
	
		// Frees the memory associated with a result
		$results->free();
	
		// close connection 
		$mysqli->close();
	
	}
	
	// populate product dropdown for invoice creation


?>

