<?php
  include('functions.php');
?>
<h2>Client List</h2><div class="addbtn"><a href="?page=customer-add" class="btn btn-flat" id="btntop"><span class="fas fa-plus"></span>  Create New</a></div>
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


<script>
$('.delete-customer').click(function(){
		_conf("Are you sure to delete this customer?","delete_cust",[$(this).attr('data-customer-id')])
	})

function delete_cust($id){
	start_load()
	$.ajax({
		url:'ajax.php?action=delete_customer',
		method:'POST',
		data:{id:$id},
		success:function(resp){
			if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)
				}
		}
	})
}
</script> 
