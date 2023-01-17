<?php
  include('functions.php');
  
?>

<h2>RA Sale List</h2>
<hr>

<form id="filter">
    <div class="filterDiv">
        <div class=" col-md-3">
            <label class="control-label">Category :</label>
            <select class="custom-select browser-default" name="category_id">
                <option value="all"> All</option>
				<option value="0" <?php echo isset($_GET['category_id']) && $_GET['category_id'] == 1 ? 'selected' : '' ?>>Pending</option>
                <option value="1" <?php echo isset($_GET['category_id']) && $_GET['category_id'] == 1 ? 'selected' : '' ?>>Approved</option>
                <option value="2" <?php echo isset($_GET['category_id']) && $_GET['category_id'] == 2 ? 'selected' : '' ?>>Lapsed/Cancelled</option>
                <option value="3" <?php echo isset($_GET['category_id']) && $_GET['category_id'] == 3 ? 'selected' : '' ?>>Disapproved</option>   
            </select>
                
        </div> 
        <div class=" col-md-2">
          <!--   <label for="" class="control-label">&nbsp</label> -->
            <button class="btn btn-btn-block filterBtn" style="margin-left:-85px;margin-top:-2px;"><span class="fas fa-filter"></span>Filter</button>
        </div>
        
    </div>
</form>


<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
		 <div class="panel-body form-group form-group-sm">  
		  <table class="display table table-striped table-hover table-bordered" id="">
		  <thead>
			  <tr>
				  <th>RA No.</th>
				  <th>Ref. No.</th>
				  <th>Location </th>
				  <th>Buyer Name </th>
				  <th>Approval Status</th>
				  <th>Reserve Status</th>
				  <th>CA Status</th>
				  <th class="actions">Actions</th>

			  </tr>
		  </thead>
		  <tbody>
				<?php 
					$i = 0;
					$ras = $mysqli->query("SELECT * FROM t_approval_csr i inner join t_csr_view x on i.c_csr_no = x.c_csr_no ORDER BY c_date_approved");
					while($row=$ras->fetch_assoc()):
						
						$i ++;
						$ra_id = $row["ra_id"];
						$status=$row["c_csr_status"];
						$date_created=$row["c_date_created"];
						$id=$row["c_csr_no"];
						$lid = $row["c_lot_lid"];


						$exp_date=new DateTime($row["c_duration"]);
						$exp_date_str=$row["c_duration"];
						$exp_date_only=date("Y-m-d",strtotime($exp_date_str));
						//echo $exp_date_only;

						$today_date=date('Y/m/d H:i:s');
						$today_date_only=date("Y-m-d",strtotime($today_date));
						//echo $today_date_only;

						$exp=strtotime($exp_date_str);
						$td=strtotime($today_date);
						?>
					<tr>
					
						<td class="text-center"><?php echo $row["ra_id"] ?></td>
						<td class="text-center"><?php echo $row["c_csr_no"] ?></td>
						<td class="text-center"><?php echo $row["c_acronym"]. ' Block ' .$row["c_block"] . ' Lot '.$row["c_lot"] ?></td>
						<td class="text-center"><?php echo $row["last_name"]. ','  .$row["first_name"] .' ' .$row["middle_name"]?></td>



					
						<?php if($row['c_csr_status'] == 1 && ($row['c_reserve_status'] == 0)): ?>
							<td><span class="label label-success">COO Approved</span>
							<span class="label label-info"><b id="demo<?php echo $id ?>"></b></span></td>
						<?php elseif (($row['c_csr_status'] == 1) && ($row['c_reserve_status'] == 1)): ?>
							<td><span class="label label-success">COO Approved </span>
						<?php elseif ($row['c_csr_status'] == 2): ?>
							<td><span class="label label-danger">Cancelled</span>
							<span class="label label-danger"><b id="demo<?php echo $id ?>"></b></span></td>
						<?php else: ?>
							<td><span class="label label-warning">Pending</span>
							<!-- <span class="label label-warning"><b id="demo<?php echo $id ?>"></b></span> --></td>
						<?php endif; ?>
							
						
						<script>

						
						// Set the date we're counting down to
						var countDownDate<?php echo $id ?> = new Date("<?php echo $row["c_duration"]?>").getTime();

						// Update the count down every 1 second
						var x<?php echo $id ?> = setInterval(function() {

						// Get today's date and time
						var now<?php echo $id ?> = new Date().getTime();
						
						// Find the distance between now and the count down date
						var distance<?php echo $id ?> = countDownDate<?php echo $id ?> - now<?php echo $id ?>;
						
						// Time calculations for hours, minutes and seconds
						var days<?php echo $id ?> = Math.floor(distance<?php echo $id ?> / (1000 * 60 * 60 * 24));
						var hours<?php echo $id ?> = Math.floor((distance<?php echo $id ?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
						var minutes<?php echo $id ?> = Math.floor((distance<?php echo $id ?> % (1000 * 60 * 60)) / (1000 * 60));
						var seconds<?php echo $id ?> = Math.floor((distance<?php echo $id ?> % (1000 * 60)) / 1000);
							
						
						// Display the result in the element with id="demo"
						document.getElementById("demo<?php echo $id ?>").innerHTML = " Time Left: " + days<?php echo $id ?>+ "d " + hours<?php echo $id ?> + "h " + minutes<?php echo $id?> + "m " + seconds<?php echo $id ?> + "s ";
						
						// If the count down is finished, write some text
						if (distance<?php echo $id ?> < 0) {
							clearInterval(x<?php echo $id ?>);
							document.getElementById("demo<?php echo $id ?>").innerHTML = " Expired";
						
						}
						}, 1000);

						
						</script>
					 	
						<?php 
						 		
								


							$exp_date=new DateTime($row["c_duration"]);
							$exp_date_str=$row["c_duration"];
							$exp_date_only=date("Y-m-d",strtotime($exp_date_str));
							//echo $exp_date_only;
	
							$today_date=date('Y/m/d H:i:s');
							$today_date_only=date("Y-m-d",strtotime($today_date));
							//echo $today_date_only;
	
							$exp=strtotime($exp_date_str);
							$td=strtotime($today_date);		
	
							if(($td>$exp) && ($row['c_reserve_status'] == 0)  && ($row['c_csr_status'] == 1)){
								$update_csr = $mysqli->query("UPDATE t_csr SET c_verify = 2, coo_approval = 2 WHERE c_csr_no = '".$id."'");	
								$update_app = $mysqli->query("UPDATE t_approval_csr SET c_csr_status = 2 WHERE c_csr_no = '".$id."'");
								$update_lot = $mysqli->query("UPDATE t_lots SET c_status = 'Available' WHERE c_lid = '".$lid."'");
							}
						?> 
							

						
						<?php if($row['c_reserve_status'] == 1): ?>
							<td><span class="label label-success">Paid</span></td>
						<?php elseif($row['c_reserve_status'] == 0): ?>
							<td><span class="label label-warning">Unpaid</span></td>
						<?php elseif($row['c_reserve_status'] == 3): ?>
							<td><span class="label label-info">Partial Paid</span></td>
						<?php endif; ?>


						<?php if($row['c_ca_status'] == 1): ?>
							<td><span class="label label-success">CA Approved</span></td>
						<?php elseif ($row['c_ca_status'] == 0): ?>
							<td><span class="label label-warning">Pending</span></td>
						<?php elseif ($row['c_ca_status'] == 2): ?>
							<td><span class="label label-danger">Disapproved</span></td>
							<?php elseif ($row['c_ca_status'] == 3): ?>
							<td><span class="label label-info">For Revision</span></td>
						<?php else: ?>
							<td><span class="label label-danger"> --- </span></td>
						<?php endif; ?>
						<td class="actions">	
						<li class="dropdown user user-menu">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown">

							<span class="btn btn-info" target="_blank">Actions&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
							</a>
							<ul class="dropdown-menu">

							<li><a class="dropdown-item" href="?page=ra-view&id=<?php echo $row['c_csr_no'] ?>" >View RA</a>
							<?php if ($status == 1 && ($row["c_duration"] > $row["c_date_approved"])) { ?>
							<li><a class="dropdown-item extend-approval" extend=1 data-csr-id=<?php echo $row['c_csr_no'] ?> >Extend Approval Time</a>
							<?php } ?>
							<li><a class="dropdown-item" href="print_agreement.php?id=<?php echo $getID; ?>">Cancelled</a>
							</ul>
						</li>		
						</td>
					
					</tr>	
					<?php endwhile; ?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>


<script>
$('.extend-approval').click(function(){   
        uni_modal('Extend Coo Approval','approval_extend_setting.php?&id='+$(this).attr('data-csr-id'))
    })

$('.new_reservation').click(function(){
	uni_modal('New Reservation','manage_reservation.php?id='+$(this).attr('data-ra-id'))
})

$('.edit-lot').click(function(){
	uni_modal('Edit Lot','manage_reservation.php?id='+$(this).attr('data-ra-id'))
})
</script>
	
