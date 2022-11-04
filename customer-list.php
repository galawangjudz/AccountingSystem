<?php


include('header.php');
include('functions.php');

?>

<h2>Client List</h2><div class="addbtn"><a href="http://localhost/ALSC/customer-add.php" class="btn btn-flat" id="btntop"><span class="fas fa-plus"></span>  Create New</a></div>
<hr>

<div class="row">
	
	<div class="col-xs-12">
		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>
	
		<div class="panel panel-default">
			<div class="panel-body form-group form-group-sm">
				<?php getCustomers(); ?>
			</div>
		</div>
	</div>
<div>

<div id="delete_customer" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete Client</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this client?</p>
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