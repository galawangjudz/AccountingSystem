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
$query = "SELECT * FROM t_model_house WHERE c_code = '" . $mysqli->real_escape_string($getID) . "'";

$result = mysqli_query($mysqli, $query);

// mysqli select query
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		$c_code = $row['c_code']; 
		$c_model = $row['c_model']; 
		$c_acronym = $row['c_acronym'];
	}
}

/* close connection */
$mysqli->close();

?>

<h2>Update House Model</h2>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>		
<div class="box_big">
	<div class="main_box">
		<form method="post" id="update_house">
			<input type="hidden" name="action" value="update_house">
			<input type="hidden" name="c_code" value="<?php echo $getID; ?>">
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Code: </label>
						<input type="text" class="form-control required" name="c_code" value="<?php echo $c_code; ?>" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
						<label class="control-label">Model Name: </label>
						<input type="text" class="form-control required" name="c_model" value="<?php echo $c_model; ?>">
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
				<div class="col-xs-12 margin-top btn-group">
					<input type="submit" id="action_update_house" class="btn btn-success float-right" value="Update House Model" data-loading-text="Updating...">
				</div>
			</div>
		</form>
	</div>
<div>



<?php
	include('footer.php');
?>