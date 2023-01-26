<?php 

include('functions.php');
include_once('loan-calcu/classes/Calculation.php');
$Calculation = new Calculation();

if (isset($_POST['submit'])) {
    $Calculation->init();
}
?>
<link href="loan-calcu/css/style.css" rel="stylesheet">
<style>
    
	.container-fluid p{
		margin: unset
	}
 	#uni_modal .modal-footer{
		display: none;
	} 
</style>
<body>
<h2>Credit Assessment</h2>
<div class="container-fluid">
        <div class="col-xs-12">

    <!--         <div class="panel panel-default">
                <div class="panel-heading">
                <h2>Credit Assessment</h2>
                </div>
            </div> -->
            <div class="panel-body form-group form-group-sm">

                <form id="searchbtn">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" name="ref_no" value="<?php if(isset($_GET['ref_no'])){echo $_GET['ref_no'];} ?>" class="form-control required">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary searchbtn">Search</button>
                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="col-md-12">
                        <hr>
                        <?php 
                           
                            if(isset($_GET['ref_no']))
                            {
                                $ref_no = $_GET['ref_no'];
                                
                                $query_run = $mysqli->query("SELECT CONCAT(x.first_name, ' ', x.middle_name, ' ', x.last_name, ' ' , x.suffix_name) as full_name , x.*, i.* FROM t_approval_csr i inner join t_csr_view x on i.c_csr_no = x.c_csr_no 
                                                            where c_csr_status = 1 and c_reserve_status = 1 and x.ref_no = $ref_no");
                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $row)
                                    {
                                        ?>
                                        <div class="form-group mb-3">
                                            <label for="">Applicant's Name</label>
                                            <input type="text" value="<?= $row['full_name']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Project</label>
                                            <input type="text" value="<?= $row['c_acronym']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Block </label>
                                            <input type="text" value="<?= $row['c_block']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Lot </label>
                                            <input type="text" value="<?= $row['c_lot']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Contract Price </label>
                                            <input type="text" value="<?= $row['c_net_tcp']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Loanable Amount  </label>
                                            <input type="text" value="<?= $row['c_amt_financed']; ?>" class="form-control">
                                        </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No Record Found";
                                }
                            }
                            
                        ?>

                    </div>
                </div>

        </div>
    </div>

     
</body>



<script src="loan-calcu/js/Utils.js"></script>
<script src="loan-calcu/js/loanCalc.js"></script>

<script>
$('#searchbtn').submit(function(e){
		e.preventDefault()
        location.replace('index.php?page=manage-credit&ref_no='+$(this).find('[name="ref_no"]').val())
	})
</script>

</div>
