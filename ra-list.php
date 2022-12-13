<?php
  include('functions.php');
  
?>
<!-- <script>
  $(document).ready(function(){
    $('#main_div').load("load.php");
 
    setInterval(function(){
      $('#main_div').load("load.php");
      
    }, 1000);
    
  });
</script> -->
<h2>RA Sale List</h2>
<hr>
<div class="row">
	<div class="col-xs-12">
		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>
		<div class="panel panel-default">
			 <div class="panel-body form-group form-group-sm" id="main_div"> 
          <?php  getRAs(); ?>
     
			</div>
		</div>
	</div>
<div>
