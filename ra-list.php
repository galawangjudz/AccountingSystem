<?php
  include('functions.php');
  
?>
<!-- <script>
  $(document).ready(function(){
    $('#main_div').load("load.php");
 
    setInterval(function(){
      $('#main_div').load("load.php");
      
    }, 1000);
    
  });
</script> -->
<h2>RA Sale List</h2>
<hr>
<div class="row">
	<div class="col-xs-12">
		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>
		<div class="panel panel-default">
		<!-- 	 <div class="panel-body form-group form-group-sm" id="main_div">  -->  
		  <table class="table table-striped table-hover table-bordered" id="data-table">
		  <thead>
			  <tr>
				  <th>RA No.</th>
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
						$i += 1;
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
						<td class="text-center"><?php echo $row["c_acronym"]. ' Block ' .$row["c_block"] . ' Lot '.$row["c_lot"] ?></td>
						<td class="text-center"><?php echo $row["c_b1_last_name"]. ','  .$row["c_b1_first_name"] .' ' .$row["c_b1_middle_name"]?></td>



						<script>
						// Set the date we're counting down to
						var countDownDate = new Date("<?php echo $row["c_duration"]?>").getTime();

						// Update the count down every 1 second
						var x = setInterval(function() {

						// Get today's date and time
						var now = new Date().getTime();
						
						// Find the distance between now and the count down date
						var distance = countDownDate - now;
						
						// Time calculations for days, hours, minutes and seconds
				/* 		var days = Math.floor(distance / (1000 * 60 * 60 * 24)); */
						var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
						var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
						var seconds = Math.floor((distance % (1000 * 60)) / 1000);
							
					
						// Display the result in the element with id="demo"
						document.getElementById("demo<?php echo $i ?>").innerHTML = hours + "h "
						+ minutes + "m " + seconds + "s ";

						// If the count down is finished, write some text
						if (distance < 0) {
							clearInterval(x);
							document.getElementById("demo<?php echo $i ?>").innerHTML = "EXPIRED";
						}
						}, 1000);
						</script>

						<td id="demo<?php echo $i ?>"> </td>

						
						<?php if($row['c_reserve_status'] == 1): ?>
							<td><span class="label label-success">Paid </span></td>
						<?php else: ?>
							<td><span class="label label-warning">Unpaid</span></td>
						<?php endif; ?>


						<?php if($row['c_ca_status'] == 1): ?>
							<td><span class="label label-success">CA Approved</span></td>
						<?php elseif ($row['c_ca_status'] == 0): ?>
							<td><span class="label label-warning">Pending</span></td>
						<?php elseif ($row['c_ca_status'] == 2): ?>
							<td><span class="label label-danger">Disapproved</span></td>
						<?php else: ?>
							<td><span class="label label-danger"> --- </span></td>
						<?php endif; ?>

						<td class="actions"><a href="?page=ra-view&id='<?php $row["c_csr_no"] ?>" data-ra-id="<?php $row['ra_id'] ?>" class="btn btn-primary btn-xs">View
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span></a> 
					
					</tr>	
					<?php endwhile; ?>
		 
							
     
			</div>
		</div>
	</div>
<div>


