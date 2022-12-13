<?php
	include('functions.php');
?>
<!--  <h2>User List</h2><div class="addbtn"><a href="?page=user-add" class="btn btn-flat" id="btntop"><span class="fas fa-plus"></span>  Create New</a></div>  -->
 <h2>House Model List</h2><div class="addbtn"><a href="#" class="btn btn-flat" id="new_house"><span class="fas fa-plus"></span>  Create New</a></div>
<hr>
<div class="row">
	<div class="col-xs-12">
		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>
	
		<div class="panel panel-default">
			<div class="panel-body form-group form-group-sm">
				<?php  getHouse(); ?>
			</div>
		</div>
	</div>
<div>


<script>
$('#new_house').click(function(){
	uni_modal('New House','manage_house.php')
})

$('.edit-house').click(function(){
	uni_modal('Edit House','manage_house.php?id='+$(this).attr('data-house-id'))
})

$('.delete-house').click(function(){
		_conf("Are you sure to delete this house?","delete_model_house",[$(this).attr('data-house-id')])
	})

function delete_model_house($id){
	start_load()
	$.ajax({
		url:'ajax.php?action=delete_model_house',
		method:'POST',
		data:{id:$id},
		success:function(resp){
			if(resp==1){
				alert_toast("House Data successfully deleted",'success') 
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
  