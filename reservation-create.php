<?php
    include('header.php');
    include('functions.php');
?>
<body>
    <h2><span class="ra_type">Reservation</span></h2>
    <div class="addbtn"><a href="#" class="btn select-ra" id="btntop"><span class="fas fa-mouse-pointer"></span>	Select An Existing RA</a></div>
    <hr>
    <div id="response" class="alert alert-success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <div class="message"></div>
    </div>
    <div>
    <form method="post" id="save_reservation">
    <div class="box_big">
	    <div class="main_box">
        <input type="hidden" name="action" value="save_reservation">
       
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label>Ra No:</label>
                    <input type="text" class="form-control margin-bottom required" name="ra_no" id="ra_no" readonly >
                    <input type="hidden" class="form-control margin-bottom required" name="csr_no" id="csr_no" readonly >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <input type="hidden" class="form-control margin-bottom required" name="lot_lid" id="lot_lid" readonly >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label>Site:</label>
                    <input type="text" class="form-control margin-bottom required" name="reserve_site" id="reserve_site" readonly >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label>Block:</label>
                    <input type="text" class="form-control margin-bottom required" requiredname="reserve_block" id="reserve_block" readonly>	
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">   
                <div class="form-group">
                    <label>Lot:</label>
                    <input type="text" class="form-control margin-bottom required" name="reserve_lot" id="reserve_lot" readonly >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">   
                <div class="form-group">
                    <label>Full name:</label>
                    <input type="text" class="form-control margin-bottom required" name="fullname" id="fullname" readonly >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">   
                <div class="form-group">
                    <label>OR #:</label>
                    <input type="text" class="form-control margin-bottom required" name="or_no" id="or_no" tabindex="1">	
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">   
                <div class="form-group">
                    <label>Pay Date:</label>
                    <div class="input-group date margin-bottom" id="reserve_date">
                        <input type="text" class="form-control required" name="pay_date" id = "pay_date" tabindex ="7" data-date-format="<?php echo DATE_FORMAT ?>" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">   
                <div class="form-group">
                    <label>Reservation Fee: </label>
                    <input type="text" class="form-control margin-bottom required" name="amount_paid" id="amount_paid" tabindex="3">	
                </div>
            </div>
        </div>      
		<div class="row">
			<div class="col-xs-12">		
                <input type="submit" id="action_save_reservation" class="btn btn-success" value="Save Reservation" data-loading-text="Creating...">
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
<?php
	include('footer.php');
?>