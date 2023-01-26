
<?php 
$getID = $_GET['id'];
?>
<!doctype html>
<html>

    <head>
       </head>  
    	<body>
        <!-- Modal -->
                    <!-- Form -->
                    <form method='post' action='' enctype="multipart/form-data" id="upload-file">
						<input type="hidden" value="<?php echo $getID; ?>" name="id">
						<table>
							<tr>
								<td>
								<label class="control-label">Select file:</label> </td><td><input type='file' name='fileToUpload[]' id='file' class='form-control required' style="margin-bottom:15px;" onchange="moveToFolder()" multiple>
								</td>
							</tr>
							<tr>
								<td>
								<label class="control-label">File Name:</label></td><td><input type="text" name="title" id="title" class="form-control required" style="margin-bottom:15px;" onchange="moveToFolder()">
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="getFileName" id="getFileName" class="form-control required">
								</td>
							</tr>
							</table>
                    </form>

                    <!-- Preview-->
                    <!-- <div id='preview'></div> -->
              

        <!-- Script -->
        <script type='text/javascript'>
        $(document).ready(function(){
            $('#submit').click(function(){
				var fileTitle = document.getElementById('title').value;
				var fileContent = document.getElementById('file').value;
				if (fileTitle=="" || fileContent==""){
					return;
				}
                var fd = new FormData();
                var files = $('#file')[0].files[0];
                fd.append('file',files);

                // AJAX request
                $.ajax({
                    url: 'ajaxfile.php',
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        if(response != 0){
                            // Show image preview
                            $('#preview').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                        }else{
                            alert('file not uploaded');
                        }
                    }
                });
            });
        });
        </script>
    </body>
</html>

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
    $('#upload-file').submit(function(e){
		e.preventDefault();
	 	start_load() 
		var errorCounter = validateForm();
		if (errorCounter > 0) {
			alert("It appear's you have forgotten to complete something!","warning")	  
            end_load()
		}else{

			$(".required").parent().removeClass("has-error")
			
			$.ajax({
				url:'ajax.php?action=upload_file',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
                        $("#response .message").html("<strong>" + "Success" + "</strong>: " + "Image successfully saved");
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
<script>
	function moveToFolder(){
		var filename=document.getElementById('file').files[0].name;

		document.getElementById('getFileName').value=filename;
	}
</script>


