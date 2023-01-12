<?php
include('functions.php');
if(isset($_GET['id'])){
    $user = $mysqli->query("SELECT *
    FROM  t_reservation x
    LEFT JOIN t_lots y
    ON x.c_lot_id = y.c_lid
    LEFT JOIN t_projects z 
    ON z.c_code = y.c_site
    WHERE id = '" . $mysqli->real_escape_string($getID) . "'");
    foreach($user->fetch_array() as $k =>$v){
        $meta[$k] = $v;
    }
    }

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
        <input type="hidden" name="id" id="id" value="<?php echo isset($meta['id']) ? $meta['id']: '' ?>">
       
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label>Ra No:</label>
                    <input type="text" class="form-control margin-bottom required" name="ra_no" id="ra_no" readonly value="<?php echo isset($meta['ra_no']) ? $meta['ra_no']: '' ?>"> 
                    <input type="hidden" class="form-control margin-bottom required" name="csr_no" id="csr_no" readonly value="<?php echo isset($meta['c_csr_no']) ? $meta['c_csr_no']: '' ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <input type="hidden" class="form-control margin-bottom required" name="lot_lid" id="lot_lid" readonly value="<?php echo isset($meta['c_lot_id']) ? $meta['c_lot_id']: '' ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label>Site:</label>
                    <input type="text" class="form-control margin-bottom required" name="reserve_site" id="reserve_site" readonly value="<?php echo isset($meta['c_acronym']) ? $meta['c_acronym']: '' ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label>Block:</label>
                    <input type="text" class="form-control margin-bottom required" requiredname="reserve_block" id="reserve_block" readonly value="<?php echo isset($meta['c_block']) ? $meta['c_block']: '' ?>">	
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">   
                <div class="form-group">
                    <label>Lot:</label>
                    <input type="text" class="form-control margin-bottom required" name="reserve_lot" id="reserve_lot" readonly value="<?php echo isset($meta['c_lot']) ? $meta['c_lot']: '' ?>" >
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-xs-12">   
                <div class="form-group">
                    <label>Full name:</label>
                    <input type="text" class="form-control margin-bottom required" name="fullname" id="fullname" readonly>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-xs-12">   
                <div class="form-group">
                    <label>OR #:</label>
                    <input type="text" class="form-control margin-bottom required" name="or_no" id="or_no" tabindex="1" value="<?php echo isset($meta['c_or_no']) ? $meta['c_or_no']: '' ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">   
                <div class="form-group">
                    <label>Reservation Fee: </label>
                    <input type="text" class="form-control margin-bottom required" name="amount_paid" id="amount_paid" tabindex="3" value="<?php echo isset($meta['c_amount_paid']) ? $meta['c_amount_paid']: '' ?>">	
                </div>
            </div>
        </div>      
		<div class="row">
			<div class="col-xs-12">		
                <input type="submit" id="save_reservation" class="btn btn-success" value="Save Reservation" data-loading-text="Creating...">
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
<script>
    $('#save_reservation').submit(function(e){
		e.preventDefault();
	 	start_load() 
		var errorCounter = validateForm();
		if (errorCounter > 0) {
			/* alert("It appear's you have forgotten to complete something!","warning");	 */
			$("#response .message").html("<strong>" + "Warning" + "</strong>: " + "It appear's you have forgotten to complete something!");
			$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();  
            end_load()
		}else{

			$(".required").parent().removeClass("has-error")
			
			$.ajax({
				url:'ajax.php?action=save_csr',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
                        $("#response .message").html("<strong>" + "Success" + "</strong>: " + "Data successfully saved");
						$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
						$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
                        setTimeout(function(){
							$(".modal").removeClass("visible");
							$(".modal").modal('hide');
							end_load()
						},1500)

						setTimeout(function(){
							location.reload()
						},3000)
					}
					else{
                        console.log()
                        $("#response .message").html("<strong> Error  </strong>:"  + "Data unsuccessfully saved");
						$("#response").removeClass("alert-success").addClass("alert-danger").fadeIn();
						$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
                        setTimeout(function(){
							$(".modal").removeClass("visible");
							$(".modal").modal('hide');
							end_load()
						},1500)

						setTimeout(function(){
							location.reload()
						},3000)
				}
			},
			error:err=>{
				console.log()
				alert("An error occured")
			}
			})
		}
	})

    </script>