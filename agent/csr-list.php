<?php
  include('functions.php');
?>
<body>
<h2>Pending List</h2><div class="addbtn"><a href="index.php?page=csr-create" class="btn btn-flat" id="btntop"><span class="fas fa-plus"></span>  Create New</a></div>
<hr>
<div id="response" class="alert alert-success" style="display:none;">
  <a href="#" class="close" data-dismiss="alert">&times;</a>
  <div class="message"></div>
</div>
<div class="filterDiv">
  <form action="" id="filtercsr">
    <div class="form-group col-md-12">
        <label class="lblFilter">Filter by: </label>
          <select name="filtercsr">
            <option selected="selected" value=0>Pending</option>
            <option value=1>Approved</option>
            <option value=3>Disapproved</option>
            <option value=2>Lapsed</option>
          </select>
          <input type="submit" class="filterBtn" value ='Filter'>
    </div>             
  </form>
</div>
		<div class="panel panel-default">
			<div class="panel-body form-group form-group-sm">
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
    </div>
  </div>
</div>
</body>