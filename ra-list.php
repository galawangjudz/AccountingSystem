<?php
  include('functions.php');
  
?>
<script>
  $(document).ready(function(){
    $('#main_div').load("load.php");
 
    setInterval(function(){
      $('#main_div').load("load.php");
      
    }, 1000);
    
  });

 /*  var table = $('data-table').DataTable( {
    ajax: "data.json"
  } );
 
  setInterval( function () {
    table.ajax.reload( null, false ); // user paging is not reset on reload
  }, 1000 );
 */

</script>
<h2>RA Sale List</h2>
<hr>
<div class="row">
	<div class="col-xs-12">
		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>
		<div class="panel panel-default">
			 <div class="panel-body form-group form-group-sm" id="main_div"> 
     
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
