<?php
  include('functions.php');
?>
<h2>Lot List</h2><div class="addbtn"><a href="#" class="btn btn-flat" id="new_lot"><span class="fas fa-plus"></span>  Create New</a></div>
<hr>
<div class="row">
	<div class="col-xs-12">
		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body form-group form-group-sm">
				<?php getLots(); ?>
			</div>
		</div>
	</div>
</div>

<script>
$('#new_lot').click(function(){
	uni_modal('New Lot','manage_lot.php')
})

$('.edit-lot').click(function(){
	uni_modal('Edit Lot','manage_lot.php?id='+$(this).attr('data-lot-id'))
})


$('.delete-lot').click(function(){
		_conf("Are you sure to delete this Lot?","delete_lot",[$(this).attr('data-lot-id')])
	})

function delete_lot($id){
	start_load()
	$.ajax({
		url:'ajax.php?action=delete_lot',
		method:'POST',
		data:{id:$id},
		success:function(resp){
			if(resp==1){
				alert_toast("Data successfully deleted",'success') 
				setTimeout(function(){
					location.reload()
				},1500)
				}
			else{
				console.log()
            	alert_toast("An error occured",'danger')
				end_load()
		
			}
		},
		error:err=>{
            console.log()
            alert("An error occured")
        }
	})
}

</script>

