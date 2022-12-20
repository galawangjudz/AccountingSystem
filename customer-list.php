<?php
  include('functions.php');
?>
<style>
.modal-content{
  width:1500px;
  margin-left:-450px;
}
</style>
<h2>Client List</h2><div class="addbtn"><a href="#" class="btn btn-flat" id="new_customer"><span class="fas fa-plus"></span>  Create New</a></div>
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
$('#new_customer').click(function(){
	uni_modal('New Client','manage_client.php')
})

$('.edit-customer').click(function(){
	uni_modal('Edit Client','manage_client.php?id='+$(this).attr('data-customer-id'))
})

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
