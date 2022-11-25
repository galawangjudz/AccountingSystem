<?php include('db_connect.php');?>
<style>
	.tbl-img {
    width: calc(100%);
    display: flex;
    justify-content: center;
    max-width: calc(100%);
    max-height: 15vh;
}
.tbl-img img{
	max-width: calc(100%)
	max-height: calc(100%)
}
</style>
<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>List of models</b>
						<span class="float:right"><a class="btn btn-primary btn-block btn-sm col-sm-2 float-right" href="index.php?page=manage_model" id="new_model">
					<i class="fa fa-plus"></i> New Entry
				</a></span>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<colgroup>
								<col width="5%">
								<col width="25%">
								<col width="20%">
								<col width="35%">
								<col width="15%">
							</colgroup>
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="">Img</th>
									<th class="">Name</th>
									<th class="">Description</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$models = $conn->query("SELECT * FROM model_houses order by title asc");
								while($row=$models->fetch_assoc()):
									$trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
									unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
									$desc = strtr(html_entity_decode($row['description']),$trans);
									$desc=str_replace(array("<li>","</li>"), array("",","), $desc);
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										 <div class='tbl-img'>
										 	<img src="assets/uploads/models/<?php echo $row['cover'] ?>" alt="">
										 </div>
									</td>
									<td class="">
										 <p> <b><?php echo ucwords($row['title']) ?></b></p>
									</td>
									<td>
										 <p class="truncate"><?php echo strip_tags($desc) ?></p>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-outline-primary view_model" type="button" data-id="<?php echo $row['id'] ?>" >View</button>
										<button class="btn btn-sm btn-outline-primary edit_model" type="button" data-id="<?php echo $row['id'] ?>" >Edit</button>
										<button class="btn btn-sm btn-outline-danger delete_model" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
<script>
	$(document).ready(function(){
		$('table').dataTable()
	})
	
	$('.view_model').click(function(){
		window.open("../index.php?page=view_model&id="+$(this).attr('data-id'))
		
	})
	$('.edit_model').click(function(){
		location.href ="index.php?page=manage_model&id="+$(this).attr('data-id')
		
	})
	$('.delete_model').click(function(){
		_conf("Are you sure to delete this model?","delete_model",[$(this).attr('data-id')])
	})
	
	function delete_model($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_model',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>