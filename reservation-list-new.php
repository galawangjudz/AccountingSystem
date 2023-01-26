<?php
  include('functions.php');
?>

<div class="container-fluid">

<h2>Reservation List</h2><div class="addbtn"><a href="?page=reservation-create" class="btn btn-flat" id="btntop"><span class="fas fa-plus"></span>  Create New</a></div>
<hr>


	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-3">
			<form action="" id="manage-reservation">
				<div class="card">
					<div class="card-header">
						    Official Reciept Reservation Form
				  	</div>
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Reservation Application #</label>
								<input type="text" class="form-control" name="ra_no">
							</div>
							<div class="form-group">
								<label class="control-label">Phase/BLock/Lot</label>
								<input type="text" class="form-control text-right" name="location" step="any">
							</div>
                            <div class="form-group">
								<label class="control-label">Fullname</label>
								<input type="text" class="form-control text-right" name="fullname" step="any">
							</div>
                            <div class="form-group">
								<label class="control-label">OR No.</label>
								<input type="text" class="form-control text-right" name="or_no" step="any">
							</div>
                            <div class="form-group">
								<label class="control-label">Pay Date</label>
								<input type="date" class="form-control text-right" name="pay_date" step="any">
							</div>
                            <div class="form-group">
								<label class="control-label">Amount</label>
								<input type="number" class="form-control text-right" name="amount_paid" step="any">
							</div>
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
								<button class="btn btn-sm btn-default col-sm-3" type="button" onclick="$('#manage-reservation').get(0).reset()"> Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
                                    <th class="text-center"> No. </th>
                                    <th class="text-center">RA No.</th>
                                    <th class="text-center">Location </th>
                                    <th class="text-center">Buyer Name </th>
                                    <th class="text-center"> Reserved Date </th>
                                    <th class="text-center"> OR No. </th>
                                    <th class="text-center"> Reservation Fee</th>
                                    <th class="text-center"> Reservation Status</th>
                                    <th class="text-center">Actions</th>
									
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
                                $ras = $mysqli->query("SELECT * FROM t_reservation i inner join t_csr_view x on i.c_csr_no = x.c_csr_no inner join t_approval_csr y on i.ra_no = y.ra_id order by c_reserve_date");

                                while($row=$ras->fetch_assoc()):
								?>
								<tr>
                                    <td class="text-center"><?php echo $i++ ?></td>
                                    <td class="text-center"><?php echo $row["ra_no"] ?></td>
                                    <!-- <td class="text-center"><?php echo $row["c_csr_no"] ?></td> -->
                                    <td class="text-center"><?php echo $row["c_acronym"]. ' Block ' .$row["c_block"] . ' Lot '.$row["c_lot"] ?></td>
                                    <td class="text-center"><?php echo $row["last_name"].  $row["suffix_name"]. ','  .$row["first_name"] .' ' .$row["middle_name"]?></td>
                                    <td><?php echo $row["c_reserve_date"]?></td>
                                    <td><?php echo $row["c_or_no"]?></td>
                                    <td><?php echo $row["c_amount_paid"]?></td>
                                    
                                    <?php if($row['c_reserve_status'] == 1): ?>
                                        <td class="text-center"><span class="label label-success">Paid</span></td>
                                    <?php elseif($row['c_reserve_status'] == 0): ?>
                                        <td class="text-center"><span class="label label-warning">Unpaid</span></td>
                                    <?php endif; ?>


                                    <td class="actions"><a href="?page=reservation-edit&id=<?php echo $row["ra_no"]?>" class="btn btn-primary btn-xs">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                    <a data-ra-id="<?php $row['id'] ?>" data-csr-no="<?php echo $row['c_csr_no'] ?>" class="btn btn-danger btn-xs delete-reservation">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
									
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>

<script>
	
	$('#manage-reservation').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_reservation',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert("Data successfully added",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					alert("Data successfully updated",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	})
	$('.edit_cat').click(function(){
		start_load()
		var cat = $('#manage-reservation')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='name']").val($(this).attr('data-name'))
		cat.find("[name='price']").val($(this).attr('data-price'))
		cat.find("#cimg").attr('src','../assets/img/'+$(this).attr('data-cover_img'))
		end_load()
	})
	$('.delete_cat').click(function(){
		_conf("Are you sure to delete this category?","delete_cat",[$(this).attr('data-id')])
	})
	function delete_cat($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_category',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>