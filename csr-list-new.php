<form id="filter">
    <div class="filterDiv">
        <div class=" col-md-4">
            <label class="control-label">Category</label>
            <select class="lblFilter" name="approval_id">
                <option value="all" <?php echo isset($_GET['approval_id']) && $_GET['approval_id'] == 'all' ? 'selected' : '' ?>>All</option>
                <?php 
                $cat = $mysqli->query("SELECT DISTINCT(coo_approval) FROM t_csr");
                while($row= $cat->fetch_assoc()) {
                    if($row['coo_approval'] == 0): 
                        $cat_name = "Pending";
                        
                    elseif($row['coo_approval'] == 1):
                        $cat_name = "Approved";
                        
                    elseif($row['coo_approval'] == 3):
                        $cat_name = "Disapproved";

                    elseif($row['coo_approval'] == 2):
                        $cat_name = "Cancelled";
                    endif;
                    ?>
                    <option value="<?php echo $row['coo_approval'] ?>" <?php echo isset($_GET['approval_id']) && $_GET['approval_id'] == $row['coo_approval'] ? 'selected' : '' ?>><?php echo $cat_name ?></option>
                <?php
                }
                ?>
            </select>
                
        </div> 
        <div class=" col-md-4">
            <label for="" class="control-label">&nbsp</label>
            <button class="btn btn-block btn-primary">Filter</button>
        </div>
        
    </div>
</form>


<?php
  include('functions.php');

/* 
$cat = $mysqli->query("SELECT * FROM ");
$cat_arr = array();
while($row = $cat->fetch_assoc()){
	$cat_arr[$row['id']] = $row;
}

 */
?>
<body>
<h2>Pending List</h2><div class="addbtn"><a href="index.php?page=csr-create" class="btn btn-flat" id="btntop"><span class="fas fa-plus"></span>  Create New</a></div>
<hr>
<div id="response" class="alert alert-success" style="display:none;">
  <a href="#" class="close" data-dismiss="alert">&times;</a>
  <div class="message"></div>
</div>
    <div class="panel panel-default">
        <div class="panel-body form-group form-group-sm">


    
                        <table class="table table-striped table-hover table-bordered" id="data-table" cellspacing="0">
                            <thead>
                                <tr>

                                    <th> No.</th>	
                                    <th> Prepared by </th>	
                                    <th> Location </th>		
                                    <th>Buyers Name</th>
                                    <th>Net TCP</th>
                                    <th>Prepared Date</th>
                                    <th>Status</th>
                                    <th>Approval Status</th>
                                    <th class="actions">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
		
								<?php 
								$i = 1;
								$where = '';
								if(isset($_GET['approval_id']) && !empty($_GET['approval_id'])  && $_GET['approval_id'] != 'all'){
									$where .= " where coo_approval = '".$_GET['approval_id']."' ";
								}
								else{
									$where .= " ";
                                }
								$csr = $mysqli->query("SELECT * FROM t_csr ".$where." order by c_date_updated asc");
								while($row=$csr->fetch_assoc()):
                                    $timeStamp = date( "m/d/Y", strtotime($row['c_date_updated']));
								?>
                                        <tr>
                                            <td>'.$no++.'</td>
                                            <td class="text-center">'.$row["c_created_by"].'</td>
                                            <td>'.$row["c_acronym"].' Block '.$row["c_block"].' Lot '.$row["c_lot"].' </td>
                                            <td>'.$row["c_b1_last_name"].', '.$row["c_b1_first_name"].' '.$row["c_b1_middle_name"].' </td>
                                            <td class="text-right">'.number_format($row["c_net_tcp"], 2).'</td>
                                            <td class="text-center">'.$timeStamp.'</td>
                                            
                                        ';
                                    
                                        if($row['c_verify'] == 0){
                                            print '<td class="text-center"><span class="label label-warning">Pending</span></td>';
                                        }elseif($row['c_verify'] == 1){
                                            print '<td class="text-center"><span class="label label-info">SOS Verified</span></td>';
                                        }elseif($row['c_verify'] == 2){
                                            print '<td class="text-center"><span class="label label-danger">SOS Void</span></td>';
                                        }

                                        if($row['coo_approval'] == 0){
                                            print '<td class="text-center"><span class="label label-warning">Pending</span></td>';
                                        }elseif($row['coo_approval'] == 3){
                                            print '<td class="text-center"><span class="label label-danger">Disapproved</span></td>';
                                        
                                        }elseif($row['coo_approval'] == 1){
                                            print '<td class="text-center"><span class="label label-success">Approved</span></td>';
                                        }
                                        elseif($row['coo_approval'] == 2){
                                            print '<td class="text-center"><span class="label label-default">Cancelled</span></td>';
                                        }
                                        print '
                                        <td class="actions"><a href="?page=csr-view&id='.$row["c_csr_no"].'" class="btn btn-info btn-xs">View
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a> 

                                        <a data-csr-id="'.$row['c_csr_no'].'" class="btn btn-danger btn-xs delete-csr">Delete
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                                        
                                        </tr>
							<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


        
        </div>
    </div>
</body>

<script>
$('.delete-csr').click(function(){
		_conf("Are you sure to delete this csr?","delete_csr",[$(this).attr('data-csr-id')])
	})

function delete_csr($id){
	start_load()
	$.ajax({
		url:'ajax.php?action=delete_csr',
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