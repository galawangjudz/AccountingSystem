<?php
include('header.php');
include('functions.php');

?>

<h2>Add House Model</h2>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>		
<div class="box_big">
	<div class="main_box">
		<form method="post" id="add_house">
		<input type="hidden" name="action" value="add_house">
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Code: </label>
					<input type="text" class="form-control required" name="c_code" id="c_code">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Model Name: </label>
					<input type="text" class="form-control required" name="c_model" id="c_model">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Acronym: </label>
					<input type="text" class="form-control required" name="c_acronym" id="c_acronym">
				</div>
			</div>
		</div>
		<div class="col-xs-12 margin-top btn-group">
			<input type="submit" id="action_add_house" class="btn btn-success float-right" value="Add House Model" data-loading-text="Adding...">
		</div>
		</form>
	</div>
</div>
<div class="row">
</div>
<?php
	include('footer.php');
?>
