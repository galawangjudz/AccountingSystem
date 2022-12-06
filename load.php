<?php
  include('functions.php');
  //include('includes/config.php');
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
				<th>Approval Status</th>
				<th>Reserve Status</th>
				<th>CA Status</th>
				<th class="actions">Actions</th>
			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {
			$status=$row["c_csr_status"];
			$date_created=$row["c_date_created"];
			$id=$row["c_csr_no"];


			$exp_date=new DateTime($row["c_duration"]);
			$exp_date_str=$row["c_duration"];
			//$exp_date_only=date("Y-m-d",strtotime($exp_date_str));
			//echo $exp_date_only;

			$today_date=date('Y/m/d H:i:s');
			//$today_date_only=date("Y-m-d",strtotime($today_date));
			//echo $today_date_only;

			$exp=strtotime($exp_date_str);
			$td=strtotime($today_date);
				
			
			print '
				<tr>
					<td>'.$no++.'</td>
					<td>'.$row["ra_id"].'</td>
					';
					
					//else if($today_date_only==$exp_date_only && $status!='Approved'){
						//print '<td class="counter"><span class="label label-danger">'."-".'</span></td>';
					//}
					//else{
						//$diff=$td-$exp;
					//	$x=$exp_date->diff(new DateTime());
						//print '<td class="counter"><span class="label label-info">'.$x->format('%h hr/s %i min/s %s sec/s remaining').'</span></td>';
					//}




			print '
					<td>'.$row["c_date_of_sale"].'</td>
					<td>'.$row["c_acronym"].' Block '.$row["c_block"].' Lot '.$row["c_lot"].' </td>
					<td>'.$row["c_b1_last_name"].', '.$row["c_b1_first_name"].' '.$row["c_b1_middle_name"].' </td>
				    
					
				';

				if($row['c_csr_status'] == "Approved"){
					if(($td>$exp)){ 
						//$diff=$td-$exp;
						$x=$exp_date->diff(new DateTime());

						print '<td class="counter"><span class="label label-danger">'."Reopen".'</span></td>';
						
						$query1 = "UPDATE t_csr SET c_csr_status = 'Reopen' WHERE c_csr_no = '".$id."'";
						$query2 = "UPDATE t_approval_csr SET c_csr_status = 'Reopen' WHERE c_csr_no = '".$id."'";
						$result1 = mysqli_query($mysqli,$query1);
						$result2 = mysqli_query($mysqli,$query2);

						//if($result1 && $result2){
							//echo "goods";
						//}
						//else{
							//echo "not goods";
						//}
						
					}
					else{
					$x=$exp_date->diff(new DateTime());
					print '<td><span class="label label-success"> COO '.$row['c_csr_status'].'<br></span>
					<span class="label label-info">'.$x->format('%h hr/s %i min/s %s sec/s remaining').'</td></span>';
					}
				} elseif ($row['c_csr_status'] == "Pending"){
					print '<td><span class="label label-warning">'.$row['c_csr_status'].'</span></td>';
				} elseif ($row['c_csr_status'] == "Disapproved"){
					print '<td><span class="label label-danger">COO '.$row['c_csr_status'].'</span></td>';
				} elseif ($row['c_csr_status'] == "Verified"){
					print '<td><span class="label label-info"> SOS '.$row['c_csr_status'].'</span></td>';
				} elseif ($row['c_csr_status'] == "Cancelled"){
					print '<td><span class="label label-danger"> SOS '.$row['c_csr_status'].'</span></td>';
				}

				else{
					print '<td><span class="label label-danger">No status</span></td>';
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
				<td class="actions"><a href="csr-view.php?id='.$row["c_csr_no"].'" data-ra-id="'.$row['ra_id'].'" class="btn btn-primary btn-xs">View
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


?>
