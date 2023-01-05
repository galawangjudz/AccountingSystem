<?php 
include('functions.php');

$getID = $_GET['id'];

/* if(isset($_GET['id'])){
    $csr = $mysqli->query("SELECT * FROM t_csr_view where c_csr_no =".$_GET['id']);
    foreach($csr->fetch_array() as $k =>$v){
        $meta[$k] = $v;
    }
    }
 */

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
        <p><b>Location : </b><?php echo $acronym ?> <?php echo $block?> <?php echo $lot ?></p>
        <p><b>Buyer's Name : </b><?php echo $cust_fullname1 ?></p>
        <p><b>NET TCP : </b><?php echo 'P'.number_format($net_tcp,2) ?></p>
		<div class="form-group">
            <label class="control-label">Approval Time Duration: (No of Days) </label>
			<input type="number" class="form-control required" name="c_duration" id="c_duration" value="1">
		</div>
	</form>
</div>

<script>
	$(document).ready(function(){
		
	})

	$('.approval').click(function(){
		start_load()
		$.ajax({
			url:'ajax.php?action=coo_approval_new',
			method:'POST',
			data:{ra_id:'<?php echo $ra_id ?>',id:'<?php echo $csr_no ?>',value:$(this).attr('value')},
			success:function(resp){
				if(resp ==1){
					alert("Data successfully saved",'success')
					setTimeout(function(){
							$(".modal").removeClass("visible");
							$(".modal").modal('hide');
							end_load()
						},1500)

						setTimeout(function(){
							location.reload()
						},3000)
				}
			}
		})
	})

</script>    

