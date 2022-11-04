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
$query = "SELECT * FROM t_projects WHERE c_code = '" . $mysqli->real_escape_string($getID) . "'";

$result = mysqli_query($mysqli, $query);

// mysqli select query
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		$c_code = $row['c_code']; 
		$c_name = $row['c_name']; 
		$c_acronym = $row['c_acronym']; 
		$c_address = $row['c_address']; 
		$c_province = $row['c_province']; 
		$c_status = $row['c_status']; 
		$c_zip = $row['c_zip']; 
		$c_rate = $row['c_rate']; 
		$c_reservation = $row['c_reservation']; 
	}
}

/* close connection */
$mysqli->close();

?>

<h2>Update Project Site</h2>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
						
<div class="box_big">
	<div class="main_box">
		<form method="post" id="update_project">
			<input type="hidden" name="action" value="update_project">
			<input type="hidden" name="c_code" value="<?php echo $getID; ?>">
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Code: </label>
						<input type="text" class="form-control required" name="c_code" value="<?php echo $c_code; ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Name: </label>
						<input type="text" class="form-control required" name="c_name" value="<?php echo $c_name; ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Acronym: </label>
						<input type="text" class="form-control required" name="c_acronym" value="<?php echo $c_acronym; ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Address: </label>
						<input type="text" class="form-control required" name="c_address" value="<?php echo $c_address; ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Province: </label>
						<input type="text" class="form-control required" name="c_province" value="<?php echo $c_province; ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Zip Code: </label>
						<input type="text" class="form-control required" name="c_zip" value="<?php echo $c_zip; ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Rate: </label>
						<input type="text" class="form-control required" name="c_rate" value="<?php echo $c_rate; ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Reservation: </label>
						<input type="text" class="form-control required" name="c_reservation" value="<?php echo $c_reservation; ?>">
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
						<select name="c_status" id="c_status" class="form-control">
								<option value="0" <?php if($c_status === '0'){?>selected<?php }?>>Pre-Develop</option>
								<option value="1" <?php if($c_status === '1'){?>selected<?php }?>>Develop</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 margin-top btn-group">
					<input type="submit" id="action_update_project" class="btn btn-success float-right" value="Update Project Site" data-loading-text="Updating...">
				</div>
			</div>
		</form>
	</div>
</div>

<div class="row">
</div>

<?php
	include('footer.php');
?>