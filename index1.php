<?php
  include('header.php');
  include('functions.php');
?>
<script>
  $(document).ready(function(){
    $('#main_div').load("load.php");
    setInterval(function(){
      $('#main_div').load("load.php");
    }, 1000);
  });
</script>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    </head>
<body>
<h2>RA Sale List</h2><div class="addbtn"><a href="csr-create.php" class="btn btn-flat" id="btntop"><span class="fas fa-plus"></span>  Create New</a></div>
<hr>
<div class="row">
	<div class="col-xs-12">
		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>
		<div class="panel panel-default">
            <form class="form-inline" method="POST" action="index1.php">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control" placeholder="Search here..." name="keyword" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
                    <span class="input-group-btn">
                        <button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </form>
			<div class="panel-body form-group form-group-sm" id="main_div"></div>
		</div>
	</div>
<div>
<div id="delete_csr" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete CSR</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this CSR?</p>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
		<button type="button" data-dismiss="modal" class="btn" id="btncancel">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php
	include('footer.php');
?>





    <div class="col-md-3"></div>
    <div class="col-md-6 well">

        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal">Add Content</button>
            <br />
            <br />
            <form class="form-inline" method="POST" action="index1.php">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control" placeholder="Search here..." name="keyword" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
                    <span class="input-group-btn">
                        <button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </form>
            <br />
            <?php
                if(ISSET($_POST['search'])){
                    $keyword = $_POST['keyword'];
            ?>
          <div>
                <?php
                   $query = mysqli_query($mysqli, "SELECT *
                   FROM `t_approval_csr` i inner join t_csr_view x on i.c_csr_no = x.c_csr_no
                   WHERE `ra_id` LIKE '%$keyword%' ORDER BY `c_date_approved`") or die(mysqli_error());
                   	$no = 1;
                   ?>
                    <table class="table table-striped table-hover table-bordered" id="data-table" cellspacing="0"><thead>
                      <tr>
                        <th> No. </th>
                        <th>RA No.</th>

                        <th>Date of Sale</th>
                        <th>Location </th>
                        <th>Buyer Name </th>
                        <th>Approval Status</th>
                        <th>Reserve Status</th>
                        <th>CA Status</th>
                        <th class="actions">Actions</th>
			                </tr></thead><tbody>
                   <?php
                      while($fetch = mysqli_fetch_array($query)){
                        $status=$fetch["c_csr_status"];
                        $date_created=$fetch["c_date_created"];
                        $id=$fetch["c_csr_no"];
                  
                  
                        $exp_date=new DateTime($fetch["c_duration"]);
                        $exp_date_str=$fetch["c_duration"];
                        //$exp_date_only=date("Y-m-d",strtotime($exp_date_str));
                        //echo $exp_date_only;
                  
                        $today_date=date('Y/m/d H:i:s');
                        //$today_date_only=date("Y-m-d",strtotime($today_date));
                        //echo $today_date_only;
                  
                        $exp=strtotime($exp_date_str);
                        $td=strtotime($today_date);
                    ?>
                    <a href="get_blog.php?id=<?php echo $fetch['ra_id']?>"><h4><?php echo $fetch['c_csr_no']?></h4></a>
                    <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $fetch["ra_id"] ?></td>
                    <td><?php echo $fetch["c_date_of_sale"] ?></td>
					          <td><?php echo $fetch["c_acronym"]?> Block <?php echo $fetch["c_block"]?> Lot <?php echo $fetch["c_lot"]?></td>
					          <td><?php echo $fetch["c_b1_last_name"]?>, <?php echo $fetch["c_b1_first_name"]?> <?php echo $fetch["c_b1_middle_name"]?> </td>




                    
                    <?php
                    if($fetch['c_csr_status'] == "Approved"){
                      if(($td>$exp)){ 
                        //$diff=$td-$exp;
                        $x=$exp_date->diff(new DateTime());
            
                        ?><td class="counter"><span class="label label-danger">Reopen</span></td><?php
                        
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
                    
                    }else{
                      $x=$exp_date->diff(new DateTime());?>
                      <td><span class="label label-success"> COO <?php echo $fetch['c_csr_status']?><br></span>
                      <span class="label label-info"><?php echo $x->format('%h hr/s %i min/s %s sec/s remaining')?></td></span><?php
                      }
                    } elseif ($fetch['c_csr_status'] == "Pending"){?>
                      <td><span class="label label-warning"><?php echo $fetch['c_csr_status']?></span></td>
                    <?php } elseif ($fetch['c_csr_status'] == "Disapproved"){?>
                      <td><span class="label label-danger">COO <?php echo $fetch['c_csr_status']?></span></td>
                    <?php } elseif ($fetch['c_csr_status'] == "Verified"){?>
                      <td><span class="label label-info"> SOS <?php echo $fetch['c_csr_status']?></span></td>
                    <?php } elseif ($fetch['c_csr_status'] == "Cancelled"){?>
                      <td><span class="label label-danger"> SOS <?php echo $fetch['c_csr_status']?></span></td>
                      <?php }
            
                    else{?>
                      <td><span class="label label-danger">No status</span></td>
                    <?php }

                    if($fetch['c_reserve_status'] == "Paid"){?>
                      <td><span class="label label-success"><?php echo $fetch['c_reserve_status']?></span></td>

                    <?php}else{?>
                      <td><span class="label label-warning">Unpaid</span></td>
                   <?php }

                    if($fetch['c_ca_status'] == "Approved"){
?>
                      <td><span class="label label-success">CA '.$row['c_ca_status'].'</span></td>
                    <?php} elseif ($row['c_ca_status'] == "Pending"){
                      <td><span class="label label-warning">'.$row['c_ca_status'].'</span></td>
                    } elseif ($row['c_ca_status'] == "Disapproved"){
                      print '<td><span class="label label-danger">CA '.$row['c_ca_status'].'</span></td>';}

                    else{
                      print '<td><span class="label label-danger"> --- </span></td>';
                    }


                  }

                      
                      
?>







                      
























 





                </div>
                <?php
                    
                ?>
            </div>
                  </tbody>
                  </table>
        </div>
    </div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>