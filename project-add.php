<?php
include('header.php');
include('functions.php');

?>

<h2>Add Project Site</h2>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>		
<div class="box_big">
	<div class="main_box">
		<form method="post" id="add_project">
		<input type="hidden" name="action" value="add_project">
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
					<label class="control-label">Name: </label>
					<input type="text" class="form-control required" name="c_name" id="c_name">
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
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Address: </label>
					<input type="text" class="form-control required" name="c_address" id="c_address">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">City/Province: </label>
					<input type="text" class="form-control required" name="c_province" id="c_province">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Zip: </label>
					<input type="text" class="form-control required" name="c_zip" id="c_zip">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Rate: </label>
					<input type="text" class="form-control required" name="c_rate" id="c_rate">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Reservation: </label>
					<input type="text" class="form-control required" name="c_reservation" id="c_reservation">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Status: </label>
					<style>
					select:invalid { color: gray; }
				</style>
				<select required name="c_status" id="c_status" class="form-control" >
					<option value="" disabled selected>Status</option>
					<option value="0">Pre-Develop</option>
					<option value="1">Develop</option>
				</select>
				</div>
			</div>
		</div>
		<div class="col-xs-12 margin-top btn-group">
			<input type="submit" id="action_add_project" class="btn btn-success float-right" value="Add Project Site" data-loading-text="Adding...">
		</div>
		</form>
	</div>
</div>
<div class="row">
</div>
<?php
	include('footer.php');
?>
