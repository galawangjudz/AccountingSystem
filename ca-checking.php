<?php
    include('functions.php');
?>
<body>
    <h2><span class="ra_type">Credit Assestment</span></h2>
    <div class="addbtn"><a href="#" class="btn select-ra" id="btntop"><span class="fas fa-mouse-pointer"></span>	Select RA</a></div>
    <hr>
    <div id="response" class="alert alert-success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <div class="message"></div>
    </div>
    <div>
    <form method="post" id="save_ca">
    <div class="box_big1">
	    <div class="main_box">
        <input type="hidden" name="action" value="save_reservation">
       
    
        <div class="col-xs-12">
            <div class="form-group">
                <label for="name">Applicant's Name:</label>
                <input type="text" class="form-control margin-bottom required" name="full_name" id="full_name" readonly > 
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
            <label for="name">Project:</label>
            <input type="text" class="form-control margin-bottom required" name="project" id="project" readonly > 
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
            <label for="name">Block:</label>
            <input type="text" class="form-control margin-bottom required" name="block" id="block" readonly > 
            </div>
        </div> 
        <div class="col-xs-4">
            <div class="form-group">
            <label for="name">Lot:</label>
            <input type="text" class="form-control margin-bottom required" name="lot" id="lot" readonly >
            </div>
        </div> 
        <div class="col-xs-6">
            <div class="form-group">
            <label for="name">NET TCP</label>
            <input type="text" class="form-control margin-bottom required" name="net_tcp" id="net_tcp" readonly > 
            </div>
        </div> 
        <div class="col-xs-6">
            <div class="form-group">
            <label for="name">Loanable Amount</label>
            <input type="text" class="form-control margin-bottom required" name="amt_financed" id="amt_financed" readonly > 

            </div>
        </div> 

        <div class="col-xs-6">
            <div class="form-group">
            <label for="name">ON DOCUMENTARY REQUIREMENTS:</label>
            <ul>
			<li>MANDATORY REQUIREMENTS </li>
			<li>INCOME/EMPLOYEMENT REQUIREMENTS</li>
			<li>ADDITIONAL REQUIREMENTS</li>
			

            <label for="remark">REMARKS IF FAIL:</label>
            <input type="text" class="form-control margin-bottom required" name="remark_doc" id="remark_doc" > 

            </ul>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
            <label for="name">PASS OR FAIL </label>
            <li>
            <input type="checkbox" name="mr[]" value="1" />
            <input type="checkbox" name="mr[]" value="0" />
            </li>
            <li>
            <input type="checkbox" name="mr[]" value="1" />
            <input type="checkbox" name="mr[]" value="0" />
            </li>
            <li>
            <input type="checkbox" name="mr[]" value="1" />
            <input type="checkbox" name="mr[]" value="0" />
            </li>
            </div>
        </div>

        <div class="col-xs-8">
            <div class="form-group">
            <label for="name">ON VERIFICATION OF DOCUMENTS:</label>
            <ul>
			<li>ON EMPLOYMENT & COMPENSATION </li>
			<li>ON BANK ACCOUNTS</li>
		
            <label for="remark">REMARKS IF FAIL:</label>
            <input type="text" class="form-control margin-bottom required" name="remark_ver" id="remark_ver" > 

            </ul>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
            <label for="name">PASS OR FAIL </label>
            <li>
            <input type="checkbox" name="mr[]" value="1" />
            <input type="checkbox" name="mr[]" value="0" />
            </li>
            <li>
            <input type="checkbox" name="mr[]" value="1" />
            <input type="checkbox" name="mr[]" value="0" />
            </li>
       
            </div>
        </div>

        <div class="col-xs-12">
            <div class="form-group">
            <label for="name">ON BANK LOAN CALCULATOR:</label>
            </div>
        </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="name">LOAN AMOUNT APPLIED FOR :</label>
                    <input type="text" class="form-control margin-bottom required" name="net_tcp" id="net_tcp" readonly > 
                    <label for="name">MAX LOAN TERM PER AGE:</label>
                    <input type="text" class="form-control margin-bottom required" name="net_tcp" id="net_tcp" readonly > 
                    <label for="name">LOAN TERM APPLIED FOR:</label>
                    <input type="text" class="form-control margin-bottom required" name="net_tcp" id="net_tcp" readonly > 
                    <label for="name"> GROSS INCOME APPLICANT :</label>
                    <input type="text" class="form-control margin-bottom required" name="net_tcp" id="net_tcp" readonly > 
                    <label for="name"> SPOUSES/CO-BORRROWER  :</label>
                    <input type="text" class="form-control margin-bottom required" name="net_tcp" id="net_tcp" readonly > 
                    <label for="name"> TOTAL :</label>
                    <input type="text" class="form-control margin-bottom required" name="net_tcp" id="net_tcp" readonly > 
                    <label for="name"> INCOME REQ. PER CALCULATOR :</label>
                    <input type="text" class="form-control margin-bottom required" name="net_tcp" id="net_tcp" readonly > 
                </div>
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
		$.ajax({
			url:'ajax.php?action=save_reservation',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp ==1){
					alert("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)
				}else{
                    alert("error");
                }
			}
		})
	})
</script>