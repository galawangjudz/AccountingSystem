<?php

include('header.php');
include('functions.php');

?>

<h2>Add Agent</h2>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
<form method="post" id="add_agent">
    <input type="hidden" name="action" value="add_agent">
    <div class="panel panel-default">
        <div class="panel-body form-group form-group-sm">
            <div class="main_box">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label class="control-label">Code: </label>
                            <input type="text" class="form-control margin-bottom required" name="c_code" tabindex ="1">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label class="control-label">Nick Name: </label>
                            <input type="text" class="form-control margin-bottom" name="c_nick_name" tabindex ="2">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label class="control-label">Last Name: </label>
                            <input type="text" class="form-control margin-bottom required" name="c_last_name" tabindex ="3">
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label class="control-label">First Name: </label>
                            <input type="text" class="form-control margin-bottom required" name="c_first_name" tabindex ="4">
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label class="control-label">Middle Name: </label>
                            <input type="text" class="form-control margin-bottom" name="c_middle_initial" tabindex ="5">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label class="control-label">Gender: </label>
                            <style>
                                select:invalid { color: gray; }
                            </style>
                            <select name="c_sex" id="c_sex" class="form-control" tabindex ="6">
                                <option name="c_sex" value="M" selected>Male</option>
                                <option name="c_sex" value="F">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label class="control-label">Civil Status: </label>
                            <style>
                                select:invalid { color: gray; }
                            </style>
                            <select name="c_civil_status" id="c__civil_status" class="form-control" tabindex = "7">
                                <option name="c_civil_status" value="Single" selected>Single</option>
                                <option name="c_civil_status" value="Married">Married</option>
                                <option name="c_civil_status" value="Divorced">Divorced</option>
                                <option name="c_civil_status" value="Widowed">Widowed</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label class="control-label">Birthdate: </label>
                            <div class="input-group date margin-bottom" id="birth_date" required>
                                <input type="text" class="form-control birth_day required" name="c_birthdate" id = "c_birthdate" placeholder="YYYY-MM-DD"  tabindex ="8" data-date-format="<?php echo DATE_FORMAT ?>" >		
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>	
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label class="control-label">Birth Place: </label>
                            <input type="text" class="form-control margin-bottom" name="c_birth_place" tabindex ="9">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="control-label">Address 1: </label>
                            <input type="text" class="form-control margin-bottom required" name="c_address_ln1" tabindex ="10">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="control-label">Address 2: </label>
                            <input type="text" class="form-control margin-bottom" name="c_address_ln2" tabindex ="11">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label class="control-label">Contact Number: </label>
                            <input type="text" class="form-control margin-bottom required" name="c_tel_no" tabindex ="12">
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label class="control-label">SSS #: </label>
                            <input type="text" class="form-control margin-bottom" name="c_sss_no" tabindex ="13">
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label class="control-label">TIN: </label>
                            <input type="text" class="form-control margin-bottom" name="c_tin" tabindex ="14">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="form-group">
                            <style>
                                select:invalid { color: gray; }
                            </style>
                            <label class="control-label">Status: </label>
                            <select name="c_status" id="agent_status" class="form-control" tabindex ="15">
                                <option name="c_status" value="Active" selected>Active</option>
                                <option name="c_status" value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label class="control-label">Recruited by: </label>
                            <input type="text" class="form-control margin-bottom required" name="c_recruited_by" tabindex ="16">
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label class="control-label">Date Hired: </label>
                            <div class="input-group date margin-bottom" id="hire_date" required>
                                <input type="text" class="form-control hire_date required" name="c_hire_date" id = "c_hire_date" placeholder="YYYY-MM-DD"  tabindex ="17" data-date-format="<?php echo DATE_FORMAT ?>" >		
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>	
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="form-group">
                            <style>
                                select:invalid { color: gray; }
                            </style>
                            <label class="control-label">Position: </label>
                            <select name="c_position" id="c_position" class="form-control" tabindex ="18">
                                <option name="c_position" value="AM" selected>AM</option>
                                <option name="c_position" value="AVP">AVP</option>
                                <option name="c_position" value="B.">B.</option>
                                <option name="c_position" value="Broker">Broker</option>
                                <option name="c_position" value="DS">DS</option>
                                <option name="c_position" value="EMP">EMP</option>
                                <option name="c_position" value="FM">FM</option>
                                <option name="c_position" value="HG">HG</option>
                                <option name="c_position" value="JAV">JAV</option>
                                <option name="c_position" value="MA">MA</option>
                                <option name="c_position" value="PC">PC</option>
                                <option name="c_position" value="PD">PD</option>
                                <option name="c_position" value="PSMI">PSMI</option>
                                <option name="c_position" value="Remax">Remax</option>
                                <option name="c_position" value="SG">SG</option>
                                <option name="c_position" value="SM">SM</option>
                                <option name="c_position" value="SMG">SMG</option>
                                <option name="c_position" value="SPC">SPC</option>
                                <option name="c_position" value="TF">TF</option>
                                <option name="c_position" value="VP">VP</option>
                                <option name="c_position" value="VPS">VPS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            <style>
                                select:invalid { color: gray; }
                            </style>
                            <label class="control-label">Network: </label>
                            <select class="form-control" name="c_network" id="c_network" tabindex ="19" required>
                                    <?php
                                        require 'includes/config.php';
                                        $sql="SELECT DISTINCT(c_network) FROM t_network";

                                        foreach($mysqli->query($sql) as $row){
                                            echo "<option value=$row[c_network]>$row[c_network]</option>";
                                        }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4">
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
                </div> 
            </div>
                <div class="row">
                    <div class="col-xs-12 margin-top btn-group">
                        <input type="submit" id="action_add_agent" class="btn btn-success float-right" value="Create Agent" data-loading-text="Adding...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>	
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $('#c_network').change(function(){
            var c_code=$('#c_network').val();
            $('#c_division').empty();
        $.get('includes/division.php',{'c_code':c_code},function(return_data){
        $.each(return_data.data,function(key,value){
            $('#c_division').append("
            <option value="+value.c_code+">"+
            value.c_division+"</option>");
        });
        },
        'json');
    });

    });
</script>
<?php
	include('footer.php');
?>
