<?php
    include('functions.php');
    $getID = $_GET['id'];

// Connect to the database
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}

// the query
$query = "SELECT *
		FROM  t_reservation x
        LEFT JOIN t_lots y
        ON x.c_lot_id = y.c_lid
        LEFT JOIN t_projects z 
        ON z.c_code = y.c_site
		WHERE id = '" . $mysqli->real_escape_string($getID) . "'";
$result = mysqli_query($mysqli, $query);
// mysqli select query
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {

        $id       = $row['id'];
        $c_csr_no = $row['c_csr_no']; 
        $c_lot_id = $row['c_lid']; 
        $c_or_no  = $row['c_or_no']; 
        $c_acronym  = $row['c_acronym'];
        $c_block  = $row['c_block'];  
        $c_lot  = $row['c_lot'];
        $c_reserved_date =  $row['c_reserve_date']; 
        $c_amount_paid = $row['c_amount_paid']; 
	}
}
/* close connection */
$mysqli->close();
?>

<body>
    <h2><span class="ra_type">Update Reservation</span></h2>
    <div class="addbtn"><a href="#" class="btn select-ra" id="btntop"><span class="fas fa-mouse-pointer"></span>	Select An Existing RA</a></div>
    <hr>
    <div id="response" class="alert alert-success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <div class="message"></div>
    </div>
    <div>
    
    <form method="post" id="update_reservation">
    <div class="box_big">
	    <div class="main_box">
        <input type="hidden" name="action" value="update_reservation">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label>CSR #:</label>
                    <input type="hidden" name="res_id" id= "res_id" value="<?php echo $id; ?>">
                    <input type="text" class="form-control margin-bottom required" name="csr_no" id="csr_no" value="<?php echo $c_csr_no; ?>" readonly >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label>LID: </label>
                    <input type="text" class="form-control margin-bottom required" name="lot_lid" id="lot_lid" value="<?php echo $c_lot_id; ?>" readonly >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label>Site:</label>
                    <input type="text" class="form-control margin-bottom required" name="reserve_site" id="reserve_site" value="<?php echo $c_acronym; ?>" readonly >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label>Block:</label>
                    <input type="text" class="form-control margin-bottom required" requiredname="reserve_block" value="<?php echo $c_block; ?>" id="reserve_block" readonly>	
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">   
                <div class="form-group">
                    <label>Lot:</label>
                    <input type="text" class="form-control margin-bottom required" name="reserve_lot" id="reserve_lot" value="<?php echo $c_lot; ?>" readonly >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">   
                <div class="form-group">
                    <label>OR #:</label>
                    <input type="text" class="form-control margin-bottom required" name="or_no" id="or_no" tabindex="1" value="<?php echo $c_or_no; ?>">	
                </div>
            </div>
        </div>
       <!--  <div class="row">
            <div class="col-xs-12">   
                <div class="form-group">
                    <label>Pay Date:</label>
                    <div class="input-group date margin-bottom" id="reserve_date">
                        <input type="text" class="form-control required" name="pay_date" id = "pay_date" tabindex ="7"  value="<?php echo $c_reserved_date; ?>" data-date-format="<?php echo DATE_FORMAT ?>" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-xs-12">   
                <div class="form-group">
                    <label>Reservation Fee: </label>
                    <input type="text" class="form-control margin-bottom required" name="amount_paid" id="amount_paid" tabindex="3" value="<?php echo $c_amount_paid; ?>">	
                </div>
            </div>
        </div>   
		<div class="row">
			<div class="col-xs-12">		
                <input type="hidden" name="samp_txt" id="samp_txt">	
                <input type="submit" id="action_update_reservation" class="btn btn-success" value="Update Reservation" data-loading-text="Updating...">
            </div>
        </div>
    </div>
    </form>
   
    <div id="insert_ra" class="modal fade">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Select Reservation Application</h4>
            </div>
            <div class="modal-body">
                <?php popRAsList(); ?>
            </div>
            <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
</div>
<div class="row">
</div>
</body>

