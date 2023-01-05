<?php 
include('functions.php');

if(isset($_GET['id'])){
$user = $mysqli->query("SELECT * FROM t_client_info where id =".$_GET['id']);
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
}

?>
<div class="container-fluid">
	<form action="" id="manage-client">
        <input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id']: '' ?>">
        <div class="panel panel-default">
            <div class="panel-body form-group form-group-sm">
               <!--  <div class="main_box"> -->
                    <div class="row">
                        <div class="col-xs-4">		
                            <div class="form-group">
                                <label class="control-label">Last Name: </label>
                                <input type="text" class="form-control margin-bottom copy-input required" name="customer_last_name" id="customer_last_name" value="<?php echo isset($meta['last_name']) ? $meta['last_name']: '' ?>">
                            </div>
                           
                        </div>
                        <div class="col-xs-3">		
                            <div class="form-group">
                                <label class="control-label">First Name: </label>
                                <input type="text" class="form-control margin-bottom copy-input required" name="customer_first_name" id="customer_first_name" value="<?php echo isset($meta['first_name']) ? $meta['first_name']: '' ?>">	
                            </div>
                           
                        </div>
                        <div class="col-xs-3">		
                            <div class="form-group">
                                <label class="control-label">Middle Name: </label>
                                <input type="text" class="form-control margin-bottom copy-input" name="customer_middle_name" id="customer_middle_name" value="<?php echo isset($meta['middle_name']) ? $meta['middle_name']: '' ?>">	
                            </div>
                         
                        </div>
                        <div class="col-xs-2">		
                            <div class="form-group">
                                <label class="control-label">Suffix Name: </label>
                                <input type="text" class="form-control margin-bottom copy-input" name="customer_suffix_name" id="customer_suffix_name" value="<?php echo isset($meta['suffix_name']) ? $meta['suffix_name']: '' ?>">	
                            </div>
                         
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-10">		
                            <div class="form-group">
                                <label class="control-label">Address: </label>
                                <input type="text" class="form-control margin-bottom copy-input required" name="customer_address" id="customer_address" value="<?php echo isset($meta['address']) ? $meta['address']: '' ?>">		
                            </div>
                        </div>
                      
                        <div class="col-xs-2">		
                            <div class="form-group">
                                <label class="control-label">Zip Code: </label>
                                <input type="text" class="form-control copy-input" name="customer_zip_code" id="customer_zip_code" value="<?php echo isset($meta['zip_code']) ? $meta['zip_code']: '' ?>">					
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7    ">
                            <div class="form-group">
                                <label class="control-label">Address Abroad (if any): </label>
                                <input type="text" class="form-control margin-bottom" name="customer_address_2" id="customer_address_2" value="<?php echo isset($meta['address_abroad']) ? $meta['address_abroad']: '' ?>">
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label class="control-label">Birthdate: </label>
                                <div class="input-group date margin-bottom" id="birth_date">
                                    <input type="text" class="form-control birth_day required" name="birth_day" id = "birth_day" placeholder="YYYY-MM-DD" data-date-format="<?php echo DATE_FORMAT ?>" value="<?php echo isset($meta['birthdate']) ? $meta['birthdate']: '' ?>">		
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>	
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label class="control-label">Age: </label>
                                <input type="text" class="form-control margin-bottom required" name="customer_age" id="customer_age" value="<?php echo isset($meta['age']) ? $meta['age']: '' ?>">
                            </div>
                        </div>	
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label class="control-label">Contact Number: </label>
                                <input type="text" class="form-control margin-bottom required" name="contact_no" id="contact_no" value="<?php echo isset($meta['contact_no']) ? $meta['contact_no']: '' ?>">
                            </div>	
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label class="control-label">Viber Account: </label>
                                <input type="text" class="form-control margin-bottom" name="customer_viber" id="customer_viber" value="<?php echo isset($meta['viber']) ? $meta['viber']: '' ?>">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label class="control-label">Email Address: </label>
                                <div class="input-group float-right margin-bottom">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="text" class="form-control margin-bottom required" name="customer_email" id="customer_email" value="<?php echo isset($meta['email']) ? $meta['email']: '' ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-xs-4">
                            <div class="form-group">
                                <label class="control-label">Citizenship: </label>
                                <input type="text" class="form-control margin-bottom required" name="citizenship" id="citizenship" value="<?php echo isset($meta['citizenship']) ? $meta['citizenship']: '' ?>">
                            </div>	
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                             
                                <label class="control-label">Gender: </label>
                                <style>
                                    select:invalid { color: gray; }
                                </style>
                                <select required name="customer_gender" id="customer_gender" class="form-control required" >
                                    <option value="M" <?php echo isset($meta['gender']) && $meta['gender'] == "M" ? 'selected': '' ?>>Male</option>
                                    <option value="F" <?php echo isset($meta['gender']) && $meta['gender'] == "F" ? 'selected': '' ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <label class="control-label">Civil Status: </label>
                            <style>
                                select:invalid { color: gray; }
                            </style>
                            <select name="civil_status" id="civil_status" class="form-control required">
                                <option value="Single" <?php echo isset($meta['civil_status']) && $meta['civil_status'] == "Single" ? 'selected': '' ?>>Single</option>
                                <option value="Married" <?php echo isset($meta['civil_status']) && $meta['civil_status'] == "Married" ? 'selected': '' ?>>Married</option>
                                <option value="Divorced" <?php echo isset($meta['civil_status']) && $meta['civil_status'] == "Divorced" ? 'selected': '' ?>>Divorced</option>
                                <option value="Widowed" <?php echo isset($meta['civil_status']) && $meta['civil_status'] == "Widowed" ? 'selected': '' ?>>Widowed</option>
                            </select>
                        </div>
                        
                    </div>
                  
                </div>
            </div>
       <!--  </div> -->
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

	$('#manage-client').submit(function(e){
		e.preventDefault();
	 	start_load() 
		var errorCounter = validateForm();
		if (errorCounter > 0) {
			alert("It appear's you have forgotten to complete something!","warning")	  
            end_load()
		}else{

			$(".required").parent().removeClass("has-error")
			
			$.ajax({
				url:'ajax.php?action=save_client',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
                        $("#response .message").html("<strong>" + "Success" + "</strong>: " + "Data successfully saved");
						$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
						$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
                        setTimeout(function(){
							$(".modal").removeClass("visible");
							$(".modal").modal('hide');
							end_load()
						},1500)

						setTimeout(function(){
							location.reload()
						},3000)
					}
					else{
                        console.log()
                        $("#response .message").html("<strong> Error  </strong>: ");
						$("#response").removeClass("alert-success").addClass("alert-danger").fadeIn();
						$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
                        setTimeout(function(){
							$(".modal").removeClass("visible");
							$(".modal").modal('hide');
							end_load()
						},1500)

						setTimeout(function(){
							location.reload()
						},3000)
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