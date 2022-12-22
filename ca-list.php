<?php
  include('functions.php');
  
?>
<h2>CA For Approval List</h2>
<hr>
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
		 <div class="panel-body form-group form-group-sm">  
		  <table class="table table-striped table-hover table-bordered" id="data-table">
		  <thead>
			  <tr>
			  	  <th>Ref. No.</th>
				  <th>RA No.</th>
				  <th>Location </th>
				  <th>Buyer Name </th>
				  <th>CA Status</th>
				  <th class="actions">Actions</th>

			  </tr>
		  </thead>
		  <tbody>
				<?php 
					$i = 0;
					$ras = $mysqli->query("SELECT * FROM t_approval_csr i inner join t_csr_view x on i.c_csr_no = x.c_csr_no where c_reserve_status = 1 ORDER BY c_date_approved");
					while($row=$ras->fetch_assoc()):
						
						$i ++;
						$ra_id = $row["ra_id"];
						$status=$row["c_csr_status"];
						$date_created=$row["c_date_created"];
						$id=$row["c_csr_no"];
						$lid = $row["c_lot_lid"];

						?>
					<tr>
						<td class="text-center"><?php echo $row["c_csr_no"] ?></td>
						<td class="text-center"><?php echo $row["ra_id"] ?></td>
						<td class="text-center"><?php echo $row["c_acronym"]. ' Block ' .$row["c_block"] . ' Lot '.$row["c_lot"] ?></td>
						<td class="text-center"><?php echo $row["c_b1_last_name"]. ','  .$row["c_b1_first_name"] .' ' .$row["c_b1_middle_name"]?></td>

						<?php if($row['c_ca_status'] == 1): ?>
							<td><span class="label label-success">CA Approved</span></td>
						<?php elseif ($row['c_ca_status'] == 0): ?>
							<td><span class="label label-warning">Pending</span></td>
						<?php elseif ($row['c_ca_status'] == 2): ?>
							<td><span class="label label-danger">Disapproved</span></td>
						<?php elseif ($row['c_ca_status'] == 3): ?>
							<td><span class="label label-danger">For Revision</span></td>
						<?php else: ?>
							<td><span class="label label-danger"> --- </span></td>
						<?php endif; ?>

						<td class="actions">
						<!-- 	<a href="?page=ca-view&id=<?php echo $row['c_csr_no'] ?>" data-ra-id="<?php $row['ra_id'] ?>" class="btn btn-primary btn-xs">View
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span></a> -->
						<button class="btn btn-sm btn-primary ca_approval" type="button" data-id="<?php echo $row['c_csr_no'] ?>">View <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button> </td>
						 
					
					</tr>	
					<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<script>

$('.ca_approval').click(function(){
		uni_modal("CA Approval","manage_ca.php?approval=1&id="+$(this).attr("data-id"))

})
</script>