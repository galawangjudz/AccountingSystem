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
$query = "SELECT c_lid, c_acronym, c_block, c_lot, c_lot_area, c_price_sqm, i.c_status
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
		$c_status = $row['c_status'];
	}
}

/* close connection */
$mysqli->close();

?>

<h1>Edit Property</h1>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
						
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Editing Property (<?php echo $getID; ?>)</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<form method="post" id="update_product">
					<input type="hidden" name="action" value="update_product">
					<input type="hidden" name="prod_lid" value="<?php echo $getID; ?>">

					<div class="row">	
						
						<div class="form-group">
							<input type="text" class="form-control required" name="prod_acronym" placeholder="Phase" value="<?php echo $c_acronym; ?>" readonly>
						</div>	

						<div class="form-group">
							<input type="text" class="form-control required" name="prod_block" placeholder="Block" value="<?php echo $c_block; ?>" readonly>
						</div>
						<div class="form-group">
							<input type="text" class="form-control required" name="prod_lot" placeholder="Lot" value="<?php echo $c_lot; ?>" readonly> 
						</div>
						<div class="form-group">
							<input type="text" class="form-control required" name="prod_lot_area" placeholder="Lot Area" value="<?php echo $c_lot_area; ?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control required" name="prod_lot_price" placeholder="Price/SQM" value="<?php echo $c_price_sqm; ?>">
						</div>

						<div class="form-group">
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
							<input type="submit" id="action_update_product" class="btn btn-success float-right" value="Update product" data-loading-text="Updating...">
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