<?php 
include('functions.php');
/* include('includes/config.php'); */
if(isset($_GET['id'])){
$user = $mysqli->query("SELECT * FROM t_projects where c_code =".$_GET['id']);
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
}
?>
<div class="container-fluid">
	<form action="" id="manage-project">
    <input type="hidden" name="prod_id" value="<?php echo isset($meta['c_code']) ? $meta['c_code']: '' ?>">
		<div class="form-group">
            <label class="control-label">Code: </label>
			<input type="number" class="form-control required" name="c_code" id="c_code" value="<?php echo isset($meta['c_code']) ? $meta['c_code']: '' ?>">
		</div>
		<div class="form-group">
            <label class="control-label">Name: </label>
			<input type="text" class="form-control required" name="c_name" id="c_name" value="<?php echo isset($meta['c_name']) ? $meta['c_name']: '' ?>">
		</div>
		<div class="form-group">
            <label class="control-label">Acronym: </label>
			<input type="text" class="form-control required" name="c_acronym" id="c_acronym" value="<?php echo isset($meta['c_acronym']) ? $meta['c_acronym']: '' ?>">
		</div>
        <div class="form-group">
            <label class="control-label">Address: </label>
			<input type="text" class="form-control required" name="c_address" id="c_address" value="<?php echo isset($meta['c_address']) ? $meta['c_address']: '' ?>">
		</div>
        <div class="form-group">
            <label class="control-label">City/Province: </label>
			<input type="text" class="form-control required" name="c_province" id="c_province" value="<?php echo isset($meta['c_province']) ? $meta['c_province']: '' ?>">
		</div>
        <div class="form-group">
            <label class="control-label">Zipcode: </label>
			<input type="text" class="form-control required" name="c_zip" id="c_zip" value="<?php echo isset($meta['c_zip']) ? $meta['c_zip']: '' ?>">
		</div>
        <div class="form-group">
            <label class="control-label">Rate: </label>
			<input type="number" class="form-control required" name="c_rate" id="c_rate" value="<?php echo isset($meta['c_rate']) ? $meta['c_rate']: '' ?>">
		</div>
        <div class="form-group">
            <label class="control-label">Reservation: </label>
			<input type="number" class="form-control required" name="c_reservation" id="c_reservation" value="<?php echo isset($meta['c_reservation']) ? $meta['c_reservation']: '' ?>">
		</div>
		<div class="form-group">
			<label for="c_status">Status</label>
			<select name="c_status" id="c_status" class="form-control required">
				<option value="0" <?php echo isset($meta['c_status']) && $meta['c_status'] == 0 ? 'selected': '' ?>>Pre-Develop</option>
				<option value="1" <?php echo isset($meta['c_status']) && $meta['c_status'] == 1 ? 'selected': '' ?>>Develop</option>
			</select>
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

	$('#manage-project').submit(function(e){
		e.preventDefault();
	 	start_load() 
		var errorCounter = validateForm();
		if (errorCounter > 0) {
			alert_toast("It appear's you have forgotten to complete something!","warning")
			end_load()  	  
		}else{

			$(".required").parent().removeClass("has-error")
			
			$.ajax({
				url:'ajax.php?action=save_project',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						$("#response .message").html("<strong>" + "Success" + "</strong>: " + "Data successfully saved");
						$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
						$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					/* 	alert_toast("Project Data successfully saved",'success') */
						setTimeout(function(){
							location.reload()
						},1500)
					}
					else{
						console.log()
						$("#response .message").html("<strong> Error  </strong>: ");
						$("#response").removeClass("alert-success").addClass("alert-danger").fadeIn();
						$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
						/* alert_toast("An error occured",'danger') */
						end_load()
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