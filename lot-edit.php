<?php
	include('header.php');
	include('functions.php');
	$getID = $_GET['id'];
// Connect to the database
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}
// the query
$query = "SELECT c_lid, c_acronym, c_block, c_lot, c_lot_area, c_price_sqm, c_remarks, i.c_status
FROM t_lots i 
JOIN t_projects c 
ON i.c_site = c.c_code
WHERE i.c_site = c.c_code  and c_lid = '" . $mysqli->real_escape_string($getID) . "'";

$result = mysqli_query($mysqli, $query);
// mysqli select query
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		$c_lid = $row['c_lid']; 
		$c_acronym = $row['c_acronym'];
		$c_site = $row['c_acronym']; 
		$c_block = $row['c_block']; 
		$c_lot = $row['c_lot']; 
		$c_lot_area = $row['c_lot_area']; 
		$c_price_sqm = $row['c_price_sqm'];
		$c_remarks = $row['c_remarks'];
		$c_status = $row['c_status'];
	}
}
/* close connection */
$mysqli->close();
?>
<body onload="lcp()">
<h2>Update Lot</h2>
<hr>
<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
<form method="post" id="update_lot">
	<div class="box_big">
		<div class="main_box">
			<input type="hidden" name="action" value="update_lot">
			<input type="hidden" name="prod_lid" value="<?php echo $getID; ?>">
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Phase: </label>
						<input type="text" class="form-control required" name="prod_acronym" value="<?php echo $c_acronym; ?>" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Block: </label>
						<input type="number" class="form-control required" name="prod_block" value="<?php echo $c_block; ?>" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Lot: </label>
						<input type="number" class="form-control required" name="prod_lot" value="<?php echo $c_lot; ?>" readonly> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Lot Area: </label>
						<input type="number" class="form-control required" name="prod_lot_area" id="prod_lot_area" value="<?php echo $c_lot_area; ?>" onchange="lcp()">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Price/Sqm: </label>
						<input type="number" class="form-control required" name="prod_lot_price" id="prod_lot_price" value="<?php echo $c_price_sqm; ?>" onchange="lcp()">
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
						<select name="prod_status" id="prod_status" class="form-control">
								<option value="Available" <?php if($c_status === 'Available'){?>selected<?php }?>>Available</option>
								<option value="Sold" <?php if($c_status === 'Sold'){?>selected<?php }?>>Sold</option>
								<option value="Packaged" <?php if($c_status === 'Packaged'){?>selected<?php }?>>Packaged</option>
								<option value="On Hold" <?php if($c_status === 'On Hold'){?>selected<?php }?>>On Hold</option>
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
							<input readonly type="number" name="prod_lcp" id="prod_lcp" class="form-control" placeholder="0.00" aria-describedby="sizing-addon1">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label class="control-label">Remarks: </label>
						<div class="input-group form-group-sm textarea no-margin-bottom">
							<textarea class="textarea" name="prod_remarks" rows="3"><?php echo $c_remarks; ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 margin-top btn-group">
					<input type="submit" id="action_update_lot" class="btn btn-success float-right" value="Update Lot" data-loading-text="Updating...">
				</div>
			</div>
		</div>
	</form>
</div>
<div class="row">
</div>
</body>
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