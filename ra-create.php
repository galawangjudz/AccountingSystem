<?php

include('header.php');
include('functions.php');



?>



    <h2> <span class="ra_type">Reservation</span> </h2>
            <!-- <hr> -->

    <div id="response" class="alert alert-success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <div class="message"></div>
    </div>

    <div>
    <form method="post" id="save_reservation">
        <input type="hidden" name="action" value="save_reservation">

        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="float-left">RESERVATION</h4>
                        
                        <div class="clear"></div>
                    </div>
                    <div class="panel-body form-group form-group-sm">
                    <div class="row">

                           
                        <div class="col-xs-12 form-group">
							    <a href="#" class="float-right select-ra">Select Existing RA</a>
                        </div>

                        <div class="col-xs-4">	
                            

                            <div class="form-group">
                                <label> RA #. </label>
                                <input type="text" class="form-control margin-bottom required" name="reserve_no" id="reserve_no" readonly >
                            </div>
                            <div class="form-group">
                                <label>CSR No.</label>
                                <input type="text" class="form-control margin-bottom required" name="csr_no" id="csr_no" readonly >
                            </div>
                            <div class="form-group">
                                <label>Lot Lid</label>
                                <input type="text" class="form-control margin-bottom required" name="lot_lid" id="lot_lid" readonly >
                            </div>

                            <div class="form-group">
                                <label>Site</label>
                                <input type="text" class="form-control margin-bottom required" name="reserve_site" id="reserve_site" readonly >
                            </div>
                            <div class="form-group">
                                <label>Block</label>
                                <input type="text" class="form-control margin-bottom required" requiredname="reserve_block" id="reserve_block" readonly>	
                            </div>
                    
                            <div class="form-group">
                                <label>Lot</label>
                                <input type="text" class="form-control margin-bottom required" name="reserve_lot" id="reserve_lot" readonly >
                            </div>
                            <div class="form-group">
                                <label>OR #</label>
                                <input type="text" class="form-control margin-bottom required" name="or_no" id="or_no" placeholder="OR #" tabindex="1">	
                            </div>
                            <div class="input-group date margin-bottom" id="first_dp_date">
                                <input type="text" class="form-control required" name="pay_date" id = "pay_date" placeholder="Pay Date" tabindex ="7" data-date-format="<?php echo DATE_FORMAT ?>" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
    
                            <div class="form-group">
                                <label>Reservation Fee </label>
                                <input type="text" class="form-control margin-bottom required" name="amount_paid" id="amount_paid" placeholder="Amount" tabindex="3">	
                            </div>
                                
                            </div>
                        
                        </div>
                        
                        <div class="col-xs-6 margin-top btn-group">
					        <input type="submit" id="action_save_reservation" class="btn btn-success float-right  btn-xs" value="Save Reservation" data-loading-text="Creating...">
				        </div>


                    </div>
                    
                </div>
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
<?php
	
	include('footer.php');
?>