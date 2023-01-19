<link rel="stylesheet" href="css/print_ra_b3_without_add_cost.css">
<script src="js/print.js"></script>
<?php $query2 = "SELECT x.*, y.*, y.c_csr_no as csr_num FROM t_csr_buyers y inner join t_csr x on x.c_csr_no = y.c_csr_no WHERE y.c_csr_no = '{$_GET['id']}' ";
                        $result2 = mysqli_query($mysqli, $query2);
                        if($result2) {
                            while ($row = mysqli_fetch_assoc($result2)) { 
                                $c_date_created = $row['c_date_created'];
        $c_csr_no = $row['c_csr_no']; 
        $c_b1_last_name = $row['last_name']; 
        $c_b1_first_name = $row['first_name']; 
        $c_b1_middle_name = $row['middle_name']; 
        $c_suffix = $row['suffix_name']; 
        $c_citizenship = $row['citizenship']; 
        $c_address = $row['address']; 
        $c_mobile_no = $row['contact_no']; 
        $c_viber_no = $row['viber']; 
        $c_address_abroad = $row['address_abroad']; 
        $c_mobile_abroad = $row['contact_abroad']; 
        
        $c_lid = $row['c_lot_lid']; 
        $c_birthday = $row['birthdate'];  
        $c_age = $row['age'];  
        $c_tin = $row['tin_no'];  
        $c_zip = $row['zip_code'];  
        $c_id_presented = $row['id_presented'];
        $c_sex = $row['gender']; 
        $c_civil_status = $row['civil_status'];  
        $c_email = $row['email'];  
        $c_lot_area = $row['c_lot_area'];
        $c_price_sqm = $row['c_price_sqm'];
        $c_lot_discount_amt = $row['c_lot_discount_amt'];
        $c_lot_discount = $row['c_lot_discount'];
        $c_house = $row['c_house_model'];
        $c_date_created = $row['c_date_created'];
        $c_floor_area = $row['c_floor_area'];
        $c_house_discount = $row['c_house_discount'];
        $c_house_discount_amt = $row['c_house_discount_amt'];
        $c_house_price_sqm = $row['c_house_price_sqm'];
        $c_tcp = $row['c_tcp'];
        $remarks = $row['c_remarks'];
        // $c_employment_status = $row['c_employment_status'];
        $c_lot_discount_percentage = $row['c_lot_discount'];

        $c_reservation = $row['c_reservation'];
        $c_terms = $row['c_terms'];
        $c_monthly_payment = $row['c_monthly_payment'];
        $amt_fnanced = $row['c_amt_financed'];
        $interest_rate = $row['c_interest_rate'];
        $down_percent = $row['c_down_percent'];
        $c_relation = $row['relationship'];

                        ?>
                    
<body>
<div class="card-body">
    <div class="doc_title">Name and Contact details of Purchaser's Spouse or Co-Owner - Details must be consistent will all documents</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Last Name:</label>
                    <input type="text" value="<?php echo $c_b1_last_name; ?>" class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label class="control-label">Suffix Name:</label>
                    <input type="text" value="<?php echo $c_suffix; ?>" class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">First Name:</label>
                    <input type="text" value="<?php echo $c_b1_first_name; ?>" class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Middle Name:</label>
                    <input type="text" value="<?php echo $c_b1_middle_name; ?>" class="form-control form-control-sm">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Citizenship:</label>
                    <input type="text" value="<?php echo $c_citizenship; ?>"  class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label class="control-label" id="small_title">Civil Status:</label>
                    <div class="chkboxes">
                        <div style="float:left;margin-right:2px;">
                        <input id="chkOption1" type="checkbox" name="chkOption1" />
                        </div>
                        <div style="float:left">
                            <label class="light">SINGLE<label>
                        </div>
                        <div style="float:left;margin-right:2px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="chkOption1" type="checkbox" name="chkOption1" />
                        </div>
                        <div style="float:left">
                            <label class="light">MARRIED<label>
                        </div>
                        <div style="float:left;margin-right:2px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="chkOption1" type="checkbox" name="chkOption1" />
                        </div>
                        <div style="float:left">
                            <label class="light">WIDOWED<label>
                        </div>
                        <div style="float:left;margin-right:2px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="chkOption1" type="checkbox" name="chkOption1" />
                        </div>
                        <div style="float:left">
                            <label class="light">SEPARATED<label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label class="control-label" id="small_title1" style="text-align:left;">Gender:</label>
                    <div class="chkboxes">
                        <div style="float:left;margin-left:2px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="chkOption1" type="checkbox" name="chkOption1" />
                        </div>
                        <div style="float:left">
                            <label class="light">&nbsp;M<label>
                        </div>
                        <div style="float:left;margin-left:2px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="chkOption1" type="checkbox" name="chkOption1" />
                        </div>
                        <div style="float:left">
                            <label class="light">&nbsp;F<label>
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label class="control-label">Age:</label>
                    <input type="text" value="<?php echo $c_age; ?>"  class="form-control form-control-sm">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Birthdate (YYYY-MM-DD):</label>
                    <input type="date" value="<?php echo $c_birthday; ?>"  class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Type of Valid ID presented:</label>
                    <input type="text" value="<?php echo $c_id_presented; ?>"  class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">TIN #:</label>
                    <input type="text" value="<?php echo $c_tin; ?>"  class="form-control form-control-sm">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Email Address:</label>
                    <input type="text" value="<?php echo $c_email; ?>"  class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Viber Account:</label>
                    <input type="text" value="<?php echo $c_viber_no; ?>"  class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                <label class="control-label" id="lbl_space">Contact Number:</label><br>	
                <input type="text" value="<?php echo $c_mobile_no; ?>"  class="form-control form-control-sm">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label class="control-label">Residential/Billing Address:</label>
                    <input type="text" value="<?php echo $c_address; ?>" class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label class="control-label">Area Code:</label>
                    <input type="text" value="<?php echo $c_zip; ?>"  class="form-control form-control-sm">
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom:-10px;">
        <div class="col-md-9">
            <div class="form-group">
                <label class="control-label">Address Abroad:</label>
                <input type="text" value="<?php echo $c_address_abroad; ?>"  class="form-control form-control-sm">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Contact Number Abroad:</label>
                <input type="text" value="<?php echo $c_mobile_abroad; ?>"  class="form-control form-control-sm" style="margin-bottom:-10px;"> 
            </div>
        </div>
        <div class="col-md-12">
            <div style="float:left;margin-right:2px">
                <input id="chkOption1" type="checkbox" name="chkOption1" />
            </div>
            <div style="float:left">
                <label style="font-weight:normal;margin-bottom:-5px;">And<label>
            </div>
            <div style="float:left;margin-right:2px">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
            </div>
            <div style="float:left">
                <label style="font-weight:normal;margin-bottom:-5px;">Spouses<label>
            </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <div style="float:left;margin-right:2px">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
            </div>
            <div style="float:left">
            <label style="font-weight:normal;margin-bottom:-5px;">Married To<label>
            </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <div style="float:left;margin-right:2px">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
            </div>
            <div style="float:left">
                <label style="font-weight:normal;margin-bottom:12px;">Minor/Represented by Legal Guardian<label>
            </div>
        </div>
        </div>
    </div>
</div>
</body>
<?php
}} 
$mysqli->close();?>
