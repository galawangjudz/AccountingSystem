<?php 
include('functions.php');
/* include('includes/config.php'); */
if(isset($_GET['id'])){
$user = $mysqli->query("SELECT * FROM t_lots where c_lid =".$_GET['id']);
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
}
?>
<div class="container-fluid">
	<div id="response" class="alert alert-success" style="display:none;">
		<a href="#" class="close" data-dismiss="alert">&times;</a>
		<div class="message"></div>
	</div>


	<form action="" id="manage-lot">
		<input type="hidden" name="prod_lid" id="prod_lid" value="<?php echo isset($meta['c_lid']) ? $meta['c_lid']: '' ?>">
		<div class="form-group">
			<label class="control-label">Phase: </label>
				<select name="prod_code" id= "prod_code" class="form-control">
					<?php 
					$cat = $mysqli->query("SELECT * FROM t_projects order by c_acronym asc ");
					while($row= $cat->fetch_assoc()) {
						$cat_name[$row['c_code']] = $row['c_acronym'];
						$code = $row['c_code'];
						?>
						<option value="<?php echo $row['c_code'] ?>" <?php echo isset($meta['c_site']) && $meta['c_site'] == "$code" ? 'selected': '' ?>><?php echo $row['c_acronym'] ?></option>
					<?php
					}
					?>
				</select>
		</div>
		<div class="form-group">
			<label for="name">Block</label>
            <input type="number" class="form-control required" name="prod_block" id="prod_block" value="<?php echo isset($meta['c_block']) ? $meta['c_block']: '' ?>">
		</div>
		<div class="form-group">
			<label for="name">Lot</label>
            <input type="number" class="form-control required" name="prod_lot" id="prod_lot" value="<?php echo isset($meta['c_lot']) ? $meta['c_lot']: '' ?>">
		</div>
		<div class="form-group">
			<label for="name">Lot Area</label>
			<input type="number" class="form-control required" name="prod_lot_area"  id="prod_lot_area" value="<?php echo isset($meta['c_lot_area']) ? $meta['c_lot_area']: '' ?>" id="prod_lot_area" onchange="lcp()">
		</div>
		<div class="form-group">
			<label for="name">Price per SQM</label>
            <input type="number" class="form-control required" name="prod_lot_price" id="prod_lot_price" value="<?php echo isset($meta['c_price_sqm']) ? $meta['c_price_sqm']: '' ?>" id="prod_lot_price" onchange="lcp()">
		</div>
		<div class="form-group">
			<label class="control-label">Status: </label>
				<style>
					select:invalid { color: gray; }
				</style>
				<select required name="prod_status" id="prod_status" class="form-control" >
                    <option value="Available" <?php echo isset($meta['c_status']) && $meta['c_status'] == "Available" ? 'selected': '' ?>>Available</option>
                    <option value="Reserved" <?php echo isset($meta['c_status']) && $meta['c_status'] == "Reserved" ? 'selected': '' ?>>Reserved</option>
                    <option value="Pre-Reserved" <?php echo isset($meta['c_status']) && $meta['c_status'] == "Pre-Reserved" ? 'selected': '' ?>>Pre-Reserved</option>
                    <option value="Sold"<?php echo isset($meta['c_status']) && $meta['c_status'] == "Sold" ? 'selected': '' ?>> Sold</option>
                    <option value="Packaged"<?php echo isset($meta['c_status']) && $meta['c_status'] == "Packaged" ? 'selected': '' ?>>Packaged</option>
                    <option value="On Hold" <?php echo isset($meta['c_status']) && $meta['c_status'] == "On Hold" ? 'selected': '' ?>>On Hold</option>
				</select>
		</div>
		<div class="form-group">
            <label class="control-label">Lot Contract Price: </label>
            <div class="input-group">
                <span class="input-group-addon"><?php echo CURRENCY ?></span>
                <input type="number" name="prod_lcp" id="prod_lcp" value="<?php echo isset($meta['prod_lcp']) ? $meta['prod_lcp']: '' ?>" id="prod_lcp" class="form-control" placeholder="0.00" aria-describedby="sizing-addon1">
            </div>
        </div>
		<div class="form-group">
            <label class="control-label">Remarks: </label>
            <div class="input-group form-group-sm textarea no-margin-bottom">
                <textarea class="form-control required textarea" name="prod_remarks" id="prod_remarks" value="<?php echo isset($meta['c_remarks']) ? $meta['c_remarks']: '' ?>" rows="3"></textarea>
            </div>
        </div>
	</form>
</div>
<script>

    function lcp(){
		var lot_area = document.getElementById('prod_lot_area').value;
		var lot_price = document.getElementById('prod_lot_price').value;
		var res = lot_area * lot_price;
		document.getElementById('prod_lcp').value=res;
	}


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

	$('#manage-lot').submit(function(e){
		e.preventDefault();
	 	start_load() 
		var errorCounter = validateForm();
		if (errorCounter > 0) {
			alert_toast("It appear's you have forgotten to complete something!","warning")	  
			end_load()  
		}else{

			$(".required").parent().removeClass("has-error")
			
			$.ajax({
				url:'ajax.php?action=save_lot',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						$("#response .message").html("<strong>" + "Success" + "</strong>: " + "Data successfully saved");
						$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
						$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					/* 	alert("Data successfully saved",'success') */
						setTimeout(function(){
							location.reload()
						},1500)
					}
					else{
						$("#response .message").html("<strong> Error  </strong>: ");
						$("#response").removeClass("alert-success").addClass("alert-danger").fadeIn();
						$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
						setTimeout(function(){
							location.reload()
						},1500)
					/* 	console.log()
						alert_toast("An error occured",'danger') */
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