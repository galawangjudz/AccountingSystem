<?php
  include('functions.php');
?>
<h2>Reservation List</h2><div class="addbtn"><a href="?page=reservation-create" class="btn btn-flat" id="btntop"><span class="fas fa-plus"></span>  Create New</a></div>
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
            <button class="btn btn-btn-block filterBtn"><span class="fas fa-filter"></span>Filter</button>
        </div>
        
    </div>
</form>


<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
		 <div class="panel-body form-group form-group-sm">  
		  <table class="table table-striped table-hover table-bordered" id="data-table">
		  <thead>
			  <tr>
                <th> No. </th>
				<th>RA No.</th>
                <th>Location </th>
				<th>Buyer Name </th>
				<th> Reserved Date </th>
				<th> OR No. </th>
				<th> Reservation Fee</th>
				<th class="actions">Actions</th>
			  </tr>
		  </thead>
		  <tbody>
				<?php 
					$i = 0;
					$ras = $mysqli->query("SELECT * FROM t_reservation i inner join t_csr_view x on i.c_csr_no = x.c_csr_no inner join t_approval_csr y on i.ra_no = y.ra_id order by c_reserve_date");

					while($row=$ras->fetch_assoc()):
						
						$i ++;
						?>
					<tr>
                        <td class="text-center"><?php echo $i++ ?></td>
						<td class="text-center"><?php echo $row["ra_no"] ?></td>
						<!-- <td class="text-center"><?php echo $row["c_csr_no"] ?></td> -->
						<td class="text-center"><?php echo $row["c_acronym"]. ' Block ' .$row["c_block"] . ' Lot '.$row["c_lot"] ?></td>
						<td class="text-center"><?php echo $row["c_b1_last_name"]. ','  .$row["c_b1_first_name"] .' ' .$row["c_b1_middle_name"]?></td>
                        <td><?php echo $row["c_reserve_date"]?></td>
					    <td><?php echo $row["c_or_no"]?></td>
					    <td><?php echo $row["c_amount_paid"]?></td>
						
						<?php if($row['c_reserve_status'] == 1): ?>
							<td class="text-center"><span class="label label-success">Paid</span></td>
						<?php elseif($row['c_reserve_status'] == 0): ?>
							<td class="text-center"><span class="label label-warning">Unpaid</span></td>
						<?php endif; ?>


            <td class="actions"><a href="?page=reservation-edit&id='<?php $row["id"]?>'" class="btn btn-primary btn-xs">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
              <a data-ra-id="'<?php $row['id'] ?>'" data-csr-no="'<?php $row['c_csr_no'] ?>'" class="btn btn-danger btn-xs delete-reservation">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
					</tr>	
					<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<div id="delete_ra" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete RA</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this RA?</p>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
		<button type="button" data-dismiss="modal" class="btn">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div id="update_stat" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Update Status</h4>
      </div>
      <div class="modal-body">
        <p>Change Status ?</p>
		<!-- <p>Change Status to <input type="text" name="upstat" id="upstat"/> ? </p> -->
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="confirm">Confirm</button>
		<button type="button" data-dismiss="modal" class="btn">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php
	include('footer.php');
?>