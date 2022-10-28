<?php

include('header.php');

?>

<h1>Add Agent</h1>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
						
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Agent Information</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<form method="post" id="add_agent">
					<input type="hidden" name="action" value="add_agent">

					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom required" name="code" placeholder="Code">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom required" name="last_name" placeholder="Enter Last Name">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom required" name="first_name" placeholder="Enter First Name">
						</div>
                        <div class="col-xs-4">
							<input type="text" class="form-control margin-bottom required" name="middle_initial" placeholder="Enter Middle Initial">
						</div>
                        <div class="form-group">
                            <style>
                                select:invalid { color: gray; }
                            </style>
                            <select name="agent_gender" id="agent_gender" class="form-control">
                                
                                    <option name="agent_gender" value="M" selected>Male</option>
                                    <option name="agent_gender" value="F">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <style>
                                select:invalid { color: gray; }
                            </style>
                            <select name="agent_civil_status" id="agent_civil_status" class="form-control" tabindex = "19"required>
                            
                                <option name="agent_civil_status" value="Single" selected>Single</option>
                                <option name="agent_civil_status" value="Married">Married</option>
                                <option name="agent_civil_status" value="Divorced">Divorced</option>
                                <option name="agent_civil_status" value="Widowed">Widowed</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <style>
                                select:invalid { color: gray; }
                            </style>
                            <select name="agent_position" id="agent_position" class="form-control">
                                
                                    <option name="agent_position" value="SM" selected>Sales Manager</option>
                                    <option name="agent_position" value="PC">Property Consultant</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <style>
                                select:invalid { color: gray; }
                            </style>
                            <select name="agent_status" id="agent_status" class="form-control">
                                
                                    <option name="agent_status" value="Active" selected>Active</option>
                                    <option name="agent_status" value="Inactive">Inactive</option>
                            </select>
                        </div>
					</div>

					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<input type="submit" id="action_add_agent" class="btn btn-success float-right" value="Add Agent" data-loading-text="Adding...">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<div>

<?php
	include('footer.php');
?>