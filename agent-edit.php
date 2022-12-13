<?php
    include('functions.php');
    $getID = $_GET['id'];
// Connect to the database
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}
// the query
$query = "SELECT * FROM t_agents WHERE c_code = '" . $mysqli->real_escape_string($getID) . "'";
$result = mysqli_query($mysqli, $query);
// mysqli select query
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {
        $c_last_name = $row['c_last_name']; 
        $c_first_name = $row['c_first_name']; 
        $c_middle_initial = $row['c_middle_initial']; 
        $c_nick_name = $row['c_nick_name']; 
        $c_sex = $row['c_sex']; 
        $c_birthdate = $row['c_birthdate']; 
        $c_birth_place = $row['c_birth_place']; 
        $c_address_ln1 = $row['c_address_ln1']; 
        $c_address_ln2 = $row['c_address_ln2']; 
        $c_tel_no = $row['c_tel_no']; 
        $c_civil_status = $row['c_civil_status']; 
        $c_sss_no = $row['c_sss_no']; 
        $c_tin = $row['c_tin']; 
        $c_status = $row['c_status']; 
        $c_recruited_by = $row['c_recruited_by']; 
        $c_hire_date = $row['c_hire_date']; 
        $c_position = $row['c_position']; 
        $c_network = $row['c_network']; 
        $c_division = $row['c_division']; 		
	}
}
/* close connection */
$mysqli->close();
?>
<h2>Update Agent</h2>
<hr>
<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
<form method="post" id="update_agent">
<input type="hidden" name="action" value="update_agent">
	<input type="hidden" name="id" value="<?php echo $getID; ?>">
	<div class="row">
	<div class="col-xs-12">
			<div class="panel panel-default">
                <div class="panel-body form-group form-group-sm">
                    <div class="main_box">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label">Code: </label>
                                    <input type="text" class="form-control margin-bottom required" name="c_code"  id="c_code" tabindex ="1" value="<?php echo $getID; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label">Nick Name: </label>
                                    <input type="text" class="form-control margin-bottom" name="c_nick_name" id="c_nick_name" tabindex ="2" value="<?php echo $c_nick_name; ?>">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label class="control-label">Last Name: </label>
                                    <input type="text" class="form-control margin-bottom required" name="c_last_name" id="c_last_name" tabindex ="3" value="<?php echo $c_last_name; ?>">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label class="control-label">First Name: </label>
                                    <input type="text" class="form-control margin-bottom required" name="c_first_name" id="c_first_name" tabindex ="4" value="<?php echo $c_first_name; ?>">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label class="control-label">Middle Name: </label>
                                    <input type="text" class="form-control margin-bottom" name="c_middle_initial" id="c_middle_initial" tabindex ="5" value="<?php echo $c_middle_initial; ?>">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <style>
                                        select:invalid { color: gray; }
                                    </style>
                                    <label class="control-label">Gender: </label>
                                    <select name="c_sex" id="c_sex" class="form-control" tabindex = "6" required>
                                        <option value="M" <?php if($c_sex === 'M'){?>selected<?php }?>>Male</option>
                                        <option value="F" <?php if($c_sex === 'F'){?>selected<?php }?>>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <style>
                                        select:invalid { color: gray; }
                                    </style>
                                    <label class="control-label">Civil Status: </label>
                                    <select name="c_civil_status" id="c_civil_status" class="form-control" tabindex = "7" required>
                                        <option value="Single" <?php if($c_civil_status === 'Single'){?>selected<?php }?>>Single</option>
                                        <option value="Married" <?php if($c_civil_status === 'Married'){?>selected<?php }?>>Married</option>
                                        <option value="Divorced" <?php if($c_civil_status === 'Divorced'){?>selected<?php }?>>Divorced</option>
                                        <option value="Widowed" <?php if($c_civil_status === 'Widowed'){?>selected<?php }?>>Widowed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <label class="control-label">Birthdate: </label>
                                    <div class="input-group date margin-bottom" id="birth_date">
                                        <input type="text" class="form-control birth_day required" name="c_birthdate" id = "c_birthdate" data-date-format="<?php echo DATE_FORMAT ?>" value="<?php echo $c_birthdate; ?>" tabindex="8">		
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>	
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <label class="control-label">Birth Place: </label>
                                    <input type="text" class="form-control margin-bottom" name="c_birth_place" id="c_birth_place" value="<?php echo $c_birth_place; ?>" tabindex ="9">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="control-label">Address 1: </label>
                                    <input type="text" class="form-control margin-bottom required" name="c_address_ln1" id="c_address_ln1" value="<?php echo $c_address_ln1; ?>" tabindex ="10">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="control-label">Address 2: </label>
                                    <input type="text" class="form-control margin-bottom" name="c_address_ln2" id="c_address_ln2" value="<?php echo $c_address_ln2; ?>" tabindex ="11">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label class="control-label">Contact Number: </label>
                                    <input type="text" class="form-control margin-bottom required" name="c_tel_no" id="c_tel_no" value="<?php echo $c_tel_no; ?>" tabindex ="12">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label class="control-label">SSS #: </label>
                                    <input type="text" class="form-control margin-bottom" name="c_sss_no" id="c_sss_no" value="<?php echo $c_sss_no; ?>" tabindex ="13">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label class="control-label">TIN: </label>
                                    <input type="text" class="form-control margin-bottom" name="c_tin" id="c_tin" value="<?php echo $c_tin; ?>" tabindex ="14">
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
                                    <select name="c_status" id="c_status" class="form-control" tabindex = "15" required>
                                        <option value="Active" <?php if($c_status === 'Active'){?>selected<?php }?>>Active</option>
                                        <option value="Inactive" <?php if($c_status === 'Inactive'){?>selected<?php }?>>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label class="control-label">Recruited by: </label>
                                    <input type="text" class="form-control margin-bottom required" name="c_recruited_by" id="c_recruited_by" value="<?php echo $c_recruited_by; ?>" tabindex ="16">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label class="control-label">Date Hired: </label>
                                    <div class="input-group date margin-bottom" id="hire_date">
                                        <input type="text" class="form-control hire_date required" name="c_hire_date" id = "c_hire_date" data-date-format="<?php echo DATE_FORMAT ?>" value="<?php echo $c_hire_date; ?>" tabindex="17">		
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
                                        <option value="AM" <?php if($c_position === 'AM'){?>selected<?php }?>>AM</option>
                                        <option value="AVP" <?php if($c_position === 'AVP'){?>selected<?php }?>>AVP</option>
                                        <option value="B." <?php if($c_position === 'B.'){?>selected<?php }?>>B.</option>
                                        <option value="Broker" <?php if($c_position === 'Broker'){?>selected<?php }?>>Broker</option>
                                        <option value="DS" <?php if($c_position === 'DS'){?>selected<?php }?>>DS</option>
                                        <option value="EMP" <?php if($c_position === 'EMP'){?>selected<?php }?>>EMP</option>
                                        <option value="FM" <?php if($c_position === 'FM'){?>selected<?php }?>>FM</option>
                                        <option value="HG" <?php if($c_position === 'HG'){?>selected<?php }?>>HG</option>
                                        <option value="JAV" <?php if($c_position === 'JAV'){?>selected<?php }?>>JAV</option>
                                        <option value="MA" <?php if($c_position === 'MA'){?>selected<?php }?>>MA</option>
                                        <option value="PC" <?php if($c_position === 'PC'){?>selected<?php }?>>PC</option>
                                        <option value="PD" <?php if($c_position === 'PD'){?>selected<?php }?>>PD</option>
                                        <option value="PSMI" <?php if($c_position === 'PSMI'){?>selected<?php }?>>PSMI</option>
                                        <option value="Remax" <?php if($c_position === 'Remax'){?>selected<?php }?>>Remax</option>
                                        <option value="SG" <?php if($c_position === 'SG'){?>selected<?php }?>>SG</option>
                                        <option value="SM" <?php if($c_position === 'SM'){?>selected<?php }?>>SM</option>
                                        <option value="SMG" <?php if($c_position === 'SMG'){?>selected<?php }?>>SMG</option>
                                        <option value="SPC" <?php if($c_position === 'SPC'){?>selected<?php }?>>SPC</option>
                                        <option value="TF" <?php if($c_position === 'TF'){?>selected<?php }?>>TF</option>
                                        <option value="VP" <?php if($c_position === 'VP'){?>selected<?php }?>>VP</option>
                                        <option value="VPS" <?php if($c_position === 'VPS'){?>selected<?php }?>>VPS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <style>
                                        select:invalid { color: gray; }
                                    </style>
                                    <label class="control-label">Network: </label>
                                    <select name='c_network' id='c_network' class="c_network form-control" tabindex="19">
                                    <?php
                                        $mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
                                        $sql = mysqli_query($mysqli,"SELECT * FROM t_network WHERE c_code = $c_network");
                                        $sql1 = mysqli_query($mysqli,"SELECT * FROM t_network ORDER BY c_network");
                                        while($row = mysqli_fetch_array($sql)){
                                            ?>
                                            <option value="<?php echo $row['c_code'];?>">
                                            <?php echo $row['c_network'];?></option>
                                            <?php
                                        }
                                        while($row = mysqli_fetch_array($sql1)){
                                            ?>
                                            <option value="<?php echo $row['c_code'];?>">
                                            <?php echo $row['c_network'];?></option>
                                            <?php
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
                                    <label class="control-label">Division: </label>
                                    <select name='c_division' id='c_division' class="c_division form-control" tabindex="20">
                                        <option value="<?php echo $c_division; ?>" selected><?php echo $c_division; ?></option>
                                    </select>
                                </div>
                            </div>
                        </div> 
                    <div class="row">
                        <div class="col-xs-12 margin-top btn-group">
                            <input type="submit" id="action_update_agent" class="btn btn-success float-right" value="Update Agent" data-loading-text="Updating...">
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</form>		

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

<script type="text/javascript">
    $(document).ready(function()
    {
        $(".c_network").change(function(){
            var c_code=$(this).val();
            $.ajax({
                url:"division.php",
                method:"POST",
                data:{c_code:c_code},
                success:function(data){
                    $(".c_division").html(data);
                }
            });
        });
    });
</script>
<?php
	include('footer.php');
?>




