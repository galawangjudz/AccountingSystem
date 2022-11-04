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
<form method="post" id="add_lot">
<div class="box_big">
	<div class="main_box">
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
					<input type="number" class="form-control required" name="prod_block">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Lot: </label>
					<input type="number" class="form-control required" name="prod_lot">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Lot Area: </label>
					<input type="number" class="form-control required" name="prod_lot_area" id="prod_lot_area" onchange="lcp()">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<div class="form-group">
					<label class="control-label">Price/Sqm: </label>
					<input type="number" class="form-control required" name="prod_lot_price" id="prod_lot_price" onchange="lcp()">
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
						<input type="number" name="prod_lcp" id="prod_lcp" class="form-control" placeholder="0.00" aria-describedby="sizing-addon1">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label">Remarks: </label>
					<div class="input-group form-group-sm textarea no-margin-bottom">
						<textarea class="textarea" name="prod_remarks" rows="3"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">		
				<input type="submit" id="action_add_lot" class="btn btn-success float-right" value="Add Lot" data-loading-text="Adding...">
			</div>
		</div>
	</div>
</form>
</div>
<div class="row">
</div>
<script>
	function lcp(){
		var lot_area = document.getElementById('prod_lot_area').value;
		var lot_price = document.getElementById('prod_lot_price').value;

		var res = lot_area * lot_price;

		document.getElementById('prod_lcp').value=res;
	}
</script>
<?php
	include('footer.php');
?>
