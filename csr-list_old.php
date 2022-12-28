<?php
  include('functions.php');

/* 
$cat = $mysqli->query("SELECT * FROM ");
$cat_arr = array();
while($row = $cat->fetch_assoc()){
	$cat_arr[$row['id']] = $row;
}


 */
?>
<body>
<h2>Pending List</h2><div class="addbtn"><a href="index.php?page=csr-create" class="btn btn-flat" id="btntop"  style="background-color:#0038a5;"><span class="fas fa-plus"></span>  Create New</a></div>
<hr>
<div id="response" class="alert alert-success" style="display:none;">
  <a href="#" class="close" data-dismiss="alert">&times;</a>
  <div class="message"></div>
</div>
<!-- <div class="filterDiv">
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
</div> -->
		<div class="panel panel-default">
			<div class="panel-body form-group form-group-sm">
        		<?php getCSRs(); ?>
      		</div>
		</div>
	</div>
<div>
</body>

<script>
$('.delete-csr').click(function(){
		_conf("Are you sure to delete this csr?","delete_csr",[$(this).attr('data-csr-id')])
	})

function delete_csr($id){
	start_load()
	$.ajax({
		url:'ajax.php?action=delete_csr',
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