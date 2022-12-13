<?php
  include('functions.php');
?>
<h2>Project Site List</h2><div class="addbtn"><a href="#" class="btn btn-flat" id="new_project"><span class="fas fa-plus"></span>  Create New</a></div>
<hr>
<div class="row">
	<div class="col-xs-12">
    <div id="response" class="alert alert-success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <div class="message"></div>
    </div>
	
		<div class="panel panel-default">
			<div class="panel-body form-group form-group-sm">
				<?php getProjectSite(); ?>
			</div>
		</div>
	</div>
<div>

<script>
$('#new_project').click(function(){
	uni_modal('New Project','manage_project.php')
})

$('.edit-project').click(function(){
	uni_modal('Edit Project','manage_project.php?id='+$(this).attr('data-project-id'))
})


$('.delete-project').click(function(){
		_conf("Are you sure to delete this project?","delete_project",[$(this).attr('data-project-id')])
	})


function delete_project($id){
	start_load()
	$.ajax({
		url:'ajax.php?action=delete_project',
		method:'POST',
		data:{id:$id},
		success:function(resp){
			if(resp==1){
				alert_toast("Project Data successfully deleted",'success') 
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

