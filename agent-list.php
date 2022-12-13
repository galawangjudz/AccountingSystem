<?php
	include('functions.php');
?>
<h2>Agent List</h2><div class="addbtn"><a href="?page=agent-add" class="btn btn-flat" id="btntop"><span class="fas fa-plus"></span>  Create New</a></div>
<hr>
<div class="row">
		<div class="panel panel-default">
			<div class="panel-body form-group form-group-sm">


				<table class="table table-striped table-hover table-bordered" id="data-table">
							<thead>
								<tr>
									<th>No</th>
									<th>Code</th>
									<th>Last Name</th>
									<th>First Name</th>
									<th>Position</th>
									<th>Status</th>
									<th class="actions">Actions</th>

								</tr>
							</thead>
							<tbody>
								<?php 
									$i = 1;
									$agents = $mysqli->query("SELECT * FROM t_agents order by c_last_name asc");
									while($row=$agents->fetch_assoc()):
								?>
									<td class="text-center"><?php echo $i++ ?> </td>
									<td class="text-center"><?php echo $row['c_code'] ?></td>
									<td class="text-center"><?php echo $row["c_last_name"]?></td>
									<td class="text-center"><?php echo $row["c_first_name"]?></td>
									<td class="text-center"><?php echo $row["c_position"]?></td>
									<?php if($row['c_status'] == "ACTIVE" || $row['c_status'] == "Active" ): ?>
										<td class="text-center"><span class="label label-success">Active</span></td>
									<?php else: ?>
										<td class="text-center"><span class="label label-default">Inactive</span></td>
									<?php endif; ?>
									<td class="text-center">
									<a href="?page=agent-edit&id=<?php echo $row["c_code"] ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 
									<a data-agent-id="<?php $row['c_code'] ?>" class="btn btn-danger btn-xs delete-agent"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
			</div>
		</div>
	</div>
<div>

<script>
$('.delete-agent').click(function(){
		_conf("Are you sure to delete this agent?","delete_agent",[$(this).attr('data-id')])
	})

function delete_agent($id){
	start_load()
	$.ajax({
		url:'ajax.php?action=delete_agent',
		method:'POST',
		data:{id:$id},
		success:function(resp){
			if(resp==1){
				alert_toast("Data successfully deleted",'success') 
				setTimeout(function(){
					location.reload()
				},1500)
				}
			else{
				console.log()
            	alert("An error occured2")
			}
		},
		error:err=>{
            console.log()
            alert("An error occured")
        }
	})
}


</script> 

