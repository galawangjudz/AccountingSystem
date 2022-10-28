<?php
include('header.php');
include('functions.php');

?>

<h2>Add Product</h2>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
						
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Product Information</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<form method="post" id="add_product">
					<input type="hidden" name="action" value="add_product">

					<div class="row">
						<div class="col-xs-4">
							<div class="form-group">
								<?php getProject(); ?>
							</div>
							<div class="form-group">
								<input type="text" class="form-control required" name="prod_block" placeholder="Block">
							</div>
							<div class="form-group">
								<input type="text" class="form-control required" name="prod_lot" placeholder="Lot">
							</div>
							<div class="form-group">
								<input type="text" class="form-control required" name="prod_lot_area" placeholder="Lot Area">
							</div>
							<div class="form-group">
								<input type="text" class="form-control required" name="prod_lot_price" placeholder="Price/SQM">
							</div>
							<div class="form-group">
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
							<div class="input-group">
								<span class="input-group-addon"><?php echo CURRENCY ?></span>
								<input readonly type="number" name="prod_lcp" class="form-control" placeholder="0.00" aria-describedby="sizing-addon1">
							</div>
							
							<div class="input-group form-group-sm textarea no-margin-bottom">
								<br>
								<textarea class-"form-control" name="prod_remarks" placeholder="Remarks..."></textarea>
							</div>

					
					</div>
					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<input type="submit" id="action_add_product" class="btn btn-success float-right" value="Add Product" data-loading-text="Adding...">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<div>


<?php
	include('footer.php');
?>
