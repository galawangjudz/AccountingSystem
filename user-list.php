<?php
	include('functions.php');
?>
<!--  <h2>User List</h2><div class="addbtn"><a href="?page=user-add" class="btn btn-flat" id="btntop"><span class="fas fa-plus"></span>  Create New</a></div>  -->
 <h2>User List</h2><div class="addbtn"><a href="#" class="btn btn-flat" id="new_user"><span class="fas fa-plus"></span>  Create New</a></div> 
<hr>
<div class="row">
	<div class="col-xs-12">
		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>
	
		<div class="panel panel-default">
			<div class="panel-body form-group form-group-sm">
				<?php getUsers(); ?>
			</div>
		</div>
	</div>
<div>


<script>
$('#new_user').click(function(){
	uni_modal('New User','manage_user.php')
})

$('.edit-user').click(function(){
	uni_modal('Edit User','manage_user.php?id='+$(this).attr('data-id'))
})


$('.delete-user').click(function(){
		_conf("Are you sure to delete this user?","delete_user",[$(this).attr('data-id')])
	})

function delete_user($id){
	start_load()
	$.ajax({
		url:'ajax.php?action=delete_user',
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
            	alert("An error occured2")
			}
		},
		error:err=>{
            console.log()
            alert("An error occured")
        }
	})
}

</script>
  