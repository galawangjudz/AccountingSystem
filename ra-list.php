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
      <div class="panel-body form-group form-group-sm" id="main_div">
         
        </div>
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
                <h2>Result</h2>
                <hr style="border-top:2px dotted #ccc;"/>
                <?php
                    $query = mysqli_query($mysqli, "SELECT *
                    FROM `t_approval_csr` i inner join t_csr_view x on i.c_csr_no = x.c_csr_no
                    WHERE `ra_id` LIKE '%$keyword%' ORDER BY `c_date_approved`") or die(mysqli_error());
                    while($fetch = mysqli_fetch_array($query)){
                ?>
                <div style="word-wrap:break-word;">
                    <a href="get_blog.php?id=<?php echo $fetch['ra_id']?>"><h4><?php echo $fetch['c_csr_no']?></h4></a>
                    <?php echo $fetch['c_csr_status']?>
                    <?php echo $fetch['c_duration']?>
                </div>
                <hr style="border-bottom:1px solid #ccc;"/>
                <?php
                    }
                ?>
            </div>
            <?php
                }
            ?>
        </div>
    </div>


    
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
