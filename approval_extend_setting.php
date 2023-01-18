<?php 
include('functions.php');

$getID = $_GET['id'];
/* 
$extend = $_GET['extend']; */

if(isset($_GET['id'])){
    $csr = $mysqli->query("select q.c_acronym, z.c_block, z.c_lot, y.last_name, y.first_name, 
							y.middle_name, y.suffix_name ,j.c_duration, x.* from t_csr x , t_csr_buyers y ,
							t_lots z, t_projects q, t_approval_csr j
							where x.c_csr_no = y.c_csr_no 
							and x.c_lot_lid = z.c_lid 
							and z.c_site = q.c_code 
                            and x.c_csr_no = j.c_csr_no
							and y.c_buyer_count = 1 
							and x.c_csr_no = ".$_GET['id']);

    foreach($csr->fetch_array() as $k =>$v){
        $meta[$k] = $v;
    }
    }
 

?>

<!-- <style>
	.container-fluid p{
		margin: unset
	}
 	#uni_modal .modal-footer{
		display: none;
	} 
</style> -->
<div class="container-fluid">
	<form action="" id="approval">
		<input type="hidden" name="id"  id="id" value="<?php echo $getID ?>">
		<input type="hidden" name="lid" id="lid" value="<?php echo $meta['c_lot_lid'] ?>">
		<input type="hidden" name="reservation_amt" id="reservation_amt" value="<?php echo $meta['c_reservation'] ?>">
		<input type="hidden" name="value" id="value" value="1">

      	<p><b>Location : </b><?php echo $meta['c_acronym'] ?> <?php echo $meta['c_block'] ?> <?php echo $meta['c_lot'] ?></p>
        <p><b>Buyer's Name : </b><?php echo $meta['last_name']?> ,<?php echo $meta['first_name'] ?></p>
        <p><b>NET TCP : </b><?php echo 'P'.number_format($meta['c_net_tcp'],2) ?></p>
        <p><b>Exisiting Approval Duration : </b><?php echo $meta['c_duration'] ?></p>
        <input type="hidden" class="form-control existing-duration " name="ext_duration" id="ext_duration" value="<?php echo $meta['c_duration'] ?>">

		<div class="form-group">
			<label class="control-label">Extend Time Duration: (No of Days) </label>
			<input type="text" class="form-control duration-day required" name="duration" id="duration" value="1" min="1">
		</div>

		<?php 
			 $newDate = date('Y-m-d', strtotime('+1 days'));
		
		?>
	</form>
</div>



<script>
	$(document).ready(function(){
		
	})



	$('#approval').submit(function(e){
		e.preventDefault();
		start_load()
	
		$.ajax({
			url:'ajax.php?action=extend_coo_approval',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp==1){
					/* alert("CSR successfully approved",'success') */
                    $("#response .message").html("<strong>" + "Success" + "</strong>: " + "Data Successfully saved");
                    $("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
                    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					setTimeout(function(){
						location.reload()
					},1500)
                }else{
                    $("#response .message").html("<strong> Error Extended duration </strong>: ");
                    $("#response").removeClass("alert-success").addClass("alert-danger").fadeIn();
                    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					setTimeout(function(){
						location.reload()
					},1500)
                }
			},
			error:err=>{
				console.log()
				alert("An error occured")
			}
		
		})
	})

</script>