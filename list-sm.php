



<?php
  include('functions.php');

  $usertype = $_SESSION['user_type'];
  $username = $_SESSION['username'];

?>
<body>
<h2>For Verification</h2><div class="addbtn"><a href="index.php?page=csr-create" class="btn btn-flat" id="btntop"><span class="fas fa-plus"></span>  Create New RA</a></div>
<hr>
<div id="response" class="alert alert-success" style="display:none;">
  <a href="#" class="close" data-dismiss="alert">&times;</a>
  <div class="message"></div>
</div>

<form id="filter">
    <div class="filterDiv">
        <div class=" col-md-3">
            <label class="control-label">Category :</label>
            <select class="custom-select browser-default" name="category_id">
                <option value="all"> All</option>
                <option value="0" <?php echo isset($_GET['category_id']) && $_GET['category_id'] == 0 ? 'selected' : '' ?>> Pending</option>
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


    <div class="panel panel-default">
        <div class="panel-body form-group form-group-sm">

            <table class="display table table-striped table-hover table-bordered" id="" cellspacing="0">
                <thead>
                    <tr>

                        <th> No.</th>
                        <th> Ref. No.</th>
                        <th> Prepared by </th>	
                        <th> Location </th>		
                        <th>Buyers Name</th>
                        <th>Net TCP</th>
                        <th>Prepared Date</th>
                        <th>SM Approval</th>
                        <th>Coo Approval</th>
                        <th class="actions">Actions</th>

                    </tr>
                </thead>
                <tbody>

                    <?php 
                    $i = 1;
                    $where = '';
                    if(isset($_GET['category_id'])  && $_GET['category_id'] != 'all'){
                        if ($usertype == 'Agent')
                            $where .= " where coo_approval = '".$_GET['category_id']."' and c_created_by = '$username' and c_revised = 0 ";
                        
                        if ($usertype == 'COO')
                            $where .= " where coo_approval = '".$_GET['category_id']."'  and c_verify = '1' and c_revised = 0 ";
                        else
                            $where .= " where coo_approval = '".$_GET['category_id']."' and c_revised = 0 ";
                    }
                    else{
                        if ($usertype == 'Agent')
                            $where .=  " where c_created_by = '$username' and c_revised = 0 ";
                        if ($usertype == 'COO')
                            $where .=  " where c_verify = 1  and c_revised = 0";
                        else
                            $where .= "where c_revised = 0";
                    }
                   /* $csr = $mysqli->query("SELECT * FROM t_csr_view ".$where." order by c_date_updated asc");  */
                   $csr = $mysqli->query("select q.c_acronym, z.c_block, z.c_lot, y.last_name, y.first_name, y.middle_name, y.suffix_name , x.* from t_csr x , t_csr_buyers y ,
                            t_lots z,  t_projects q
                            ".$where." and  x.c_csr_no = y.c_csr_no 
                            and x.c_lot_lid = z.c_lid 
                            and z.c_site = q.c_code 
                            and y.c_buyer_count = 1"); 
                    while($row=$csr->fetch_assoc()):
                        $timeStamp = date( "m/d/Y", strtotime($row['c_date_updated']));
                    ?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $row['ref_no'] ?></td>
                                <td class="text-center"><?php echo $row["c_created_by"] ?></td>
                                <td><?php echo $row["c_acronym"]. ' Block ' .$row["c_block"] . ' Lot '.$row["c_lot"] ?></td>
                                <td class="text-center"><?php echo $row["last_name"]. ' ' .$row["suffix_name"]. ','  .$row["first_name"] .' ' .$row["middle_name"]?></td>

                                <td class="text-right"><?php echo "P".number_format($row["c_net_tcp"], 2) ?></td>
                                <td class="text-center"><?php echo $timeStamp ?> </td>
                                
                        
                        
                            <?php if($row['c_verify'] == 0){ ?>
                                <td class="text-center"><span class="label label-warning">Pending</span></td>
                            <?php }elseif($row['c_verify'] == 1){ ?>
                                <td class="text-center"><span class="label label-info">SOS Verified</span></td>
                            <?php }elseif($row['c_verify'] == 2){ ?>
                                <td class="text-center"><span class="label label-danger">SOS Void</span></td>
                            <?php } ?>
                             
                            
                            <?php if($row['coo_approval'] == 0){ ?> 
                                <td class="text-center"><span class="label label-warning">Pending</span></td>
                            <?php }elseif($row['coo_approval'] == 3){ ?>
                                <td class="text-center"><span class="label label-danger">Disapproved</span></td>
                            
                            <?php }elseif($row['coo_approval'] == 1){ ?>
                                <td class="text-center"><span class="label label-success">Approved</span></td>
                            <?php }
                            elseif($row['coo_approval'] == 2){ ?> 
                                <td class="text-center"><span class="label label-default">Cancelled</span></td>
                            <?php } ?>


                            <td class="actions"><a href="?page=csr-view&id=<?php echo $row["c_csr_no"] ?>&ref=<?php echo $row["ref_no"] ?>" class="btn btn-info btn-xs">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a> 

                            <a data-csr-id="<?php echo $row['c_csr_no'] ?>" class="btn btn-danger btn-xs delete-csr">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                            
                            </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        
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
				alert("Data successfully deleted",'success') 
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


$('#filter').submit(function(e){
		e.preventDefault()
		location.replace('index.php?page=list-sm&category_id='+$(this).find('[name="category_id"]').val())
	})



$('#filter2').submit(function(e){
		e.preventDefault()
		location.replace('index.php?page=list-sm&category_id2='+$(this).find('[name="category_id2"]').val())
	})
</script>