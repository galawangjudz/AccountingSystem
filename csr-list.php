<?php
  include('header.php');
  include('functions.php');
?>


<h2>Contract Sale List</h2><div class="addbtn"><a href="csr-create.php" class="btn btn-flat" id="btntop"><span class="fas fa-plus"></span>  Create New</a></div>
<hr>
<div class="row">
	<div class="col-xs-12">

  <div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="" id="filtercsr">
				<div class="card">
					<div class="card-body">
          <div class="form-group col-md-12">
								<label class="control-label">Filter by </label>
								<select name="filtercsr">
                <option selected="selected" value="Pending">Pending</option>
                <option value="Approved">Approved</option>
                <option value="Disapproved">Disapproved</option>
                <option value="Verified">Verified</option>
                <option value="Cancelled">Cancelled</option>
              </select>
              <br />
                  <input type="submit" value ='Filter'>
              </div>             
               
            </form> 
          </div>
					</div>

				</div>
			</form>
			</div>
</div>
</div>
</div>

		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
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
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php
	include('footer.php');
?>
