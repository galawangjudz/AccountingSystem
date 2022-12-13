<?php 
include('functions.php');
/* include('includes/config.php'); */
if(isset($_GET['id'])){
$user = $mysqli->query("SELECT * FROM t_model_house where c_code =".$_GET['id']);
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
}
?>
<div class="container-fluid">
	<form action="" id="manage-model-h">
    <input type="hidden" name="c_code" value="<?php echo isset($meta['c_code']) ? $meta['c_code']: '' ?>">
		<div class="form-group">
            <label class="control-label">Code: </label>
			<input type="number" class="form-control required" name="c_code" id="c_code" value="<?php echo isset($meta['c_code']) ? $meta['c_code']: '' ?>">
		</div>
		<div class="form-group">
            <label class="control-label">Model: </label>
			<input type="text" class="form-control required" name="c_model" id="c_model" value="<?php echo isset($meta['c_model']) ? $meta['c_model']: '' ?>">
		</div>
		<div class="form-group">
            <label class="control-label">Acronym: </label>
			<input type="text" class="form-control required" name="c_acronym" id="c_acronym" value="<?php echo isset($meta['c_acronym']) ? $meta['c_acronym']: '' ?>">
		</div>
	</form>
</div>
<script>


	function validateForm() {
	    // error handling
	    var errorCounter = 0;

	    $(".required").each(function(i, obj) {

	        if($(this).val() === ''){
	            $(this).parent().addClass("has-error");
	            errorCounter++;
	        } else{ 
	            $(this).parent().removeClass("has-error"); 
	        }

	    });
		
	    return errorCounter;

	}

	$('#manage-model-h').submit(function(e){
		e.preventDefault();
	 	start_load() 
		var errorCounter = validateForm();
		if (errorCounter > 0) {
			alert_toast("It appear's you have forgotten to complete something!","warning")	  
		}else{

			$(".required").parent().removeClass("has-error")
			
			$.ajax({
				url:'ajax.php?action=save_model_house',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						alert_toast("Model House Data successfully saved",'success')
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
	})

</script>