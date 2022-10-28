<?php
include('header.php');
include('functions.php');

?>

<h2>Add Lot</h2>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>		
<div class="box_big">
	<div class="main_box">
		<form method="post" id="add_lot">
		<input type="hidden" name="action" value="add_lot">
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Phase: </label>
					<?php getProject(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Block: </label>
					<input type="text" class="form-control required" name="prod_block">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Lot: </label>
					<input type="text" class="form-control required" name="prod_lot">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Lot Area: </label>
					<input type="text" class="form-control required" name="prod_lot_area">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Price/Sqm: </label>
					<input type="text" class="form-control required" name="prod_lot_price">
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
				<select required name="prod_status" id="prod_status" class="form-control" >
					<option value="" disabled selected>Status</option>
					<option value="Available">Available</option>
					<option value="Sold">Sold</option>
					<option value="Packaged">Packaged</option>
					<option value="On Hold">On Hold</option>
				</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label">Lot Contract Price: </label>
					<div class="input-group">
						<span class="input-group-addon"><?php echo CURRENCY ?></span>
						<input type="number" name="prod_lcp" class="form-control" placeholder="0.00" aria-describedby="sizing-addon1">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label">Remarks: </label>
					<div class="input-group form-group-sm textarea no-margin-bottom">
						<textarea class-"form-control" name="prod_remarks"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 margin-top btn-group">
			<input type="submit" id="action_add_lot" class="btn btn-success float-right" value="Add Lot" data-loading-text="Adding...">
		</div>
		</form>
	</div>
</div>
<div class="row">
</div>
<?php
	include('footer.php');
?>
