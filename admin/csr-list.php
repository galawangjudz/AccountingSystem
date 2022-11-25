<?php
  include 'db_connect.php';
  include 'functions.php' ;
?>
<h2>Contract Sale List</h2><div class="addbtn"><a href="csr-create.php" class="btn btn-flat" id="btntop"><span class="fas fa-plus"></span>  Create New</a></div>
<hr>
<div class="row">
	<div class="col-xs-12">
		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>

   

		<div class="panel panel-default">
			<div class="panel-body form-group form-group-sm">

        <div class="col-md-12">
          <form id="filter">
            <div class="row">
              <div class=" col-md-4">
                <label class="control-label">Category</label>
                <select class="custom-select browser-default" name="category_id">
                  <option value="all" <?php echo isset($_GET['category_id']) && $_GET['category_id'] == 'all' ? 'selected' : '' ?>>All</option>
                  <?php 
                  $cat = $conn->query("SELECT * FROM room_categories order by name asc ");
                  while($row= $cat->fetch_assoc()) {
                    $cat_name[$row['id']] = $row['name'];
                    ?>
                    <option value="<?php echo $row['id'] ?>" <?php echo isset($_GET['category_id']) && $_GET['category_id'] == $row['id'] ? 'selected' : '' ?>><?php echo $row['name'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div> 
              <div class="col-md-2">
                <label for="" class="control-label">&nbsp</label>
                <button class="btn btn-block btn-primary">Filter</button>
              </div>
            </div>
          </form>
        </div>
  


        <form action= "" method="POST">
        <select name="filtercsr">
          <option selected="selected" value="Pending">Pending</option>
          <option value="Approved">Approved</option>
          <option value="Disapproved">Disapproved</option>
          <option value="Verified">Verified</option>
          <option value="Cancelled">Cancelled</option>
        </select>
        <br />
        <input type="submit" value ='Filter'>
        </form>
				<?php getCSRs(); ?>
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
