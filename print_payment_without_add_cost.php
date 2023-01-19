
<div class="card-body" id="card-payment">
    <input type="hidden" value="<?php echo $c_lid; ?>" id="lid">
    <?php
                $l_lid=$c_lid;
                $l_phase = intval(substr($l_lid, 0,3));
                $l_block = intval(substr($l_lid, 3,3));
                $l_lot = intval(substr($l_lid, 6,8));
            ?>
    

    <input type="hidden" value="<?php echo $l_phase; ?>" id="txtPhase">

    <div class="investment_value" id="bottom_space">INVESTMENT VALUE</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-0.5">
                <div class="form-group">
                &nbsp&nbsp&nbsp&nbsp<label class="control-label">Project:</label>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="final_phase" style="font-size:8px;">
                </div>
            </div>
            <div class="col-md-0.5">
                <div class="form-group">
                &nbsp&nbsp&nbsp&nbsp<label class="control-label">Block:</label>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" value="<?php echo $l_block; ?>">
                </div>
            </div>
            <div class="col-md-0.5">
                <div class="form-group">
                &nbsp&nbsp&nbsp&nbsp<label class="control-label">Lot:</label>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" value="<?php echo $l_lot; ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="control-label" id="options">
                        <div style="float:left;margin-right:2px;">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                        </div>
                        <div style="float:left">
                            <label class="light" style="font-weight:normal;">Lot Only<label>
                        </div>
                        <div style="float:left;margin-right:2px;">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                        </div>
                        <div style="float:left">
                            <label class="light" style="font-weight:normal;">House Only<label>
                        </div>
                        <div style="float:left;margin-right:2px;">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                        </div>
                        <div style="float:left">
                            <label class="light" style="font-weight:normal;">House & Lot<label>
                        </div>
                        <div style="float:left;margin-right:2px;">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                        </div>
                        <div style="float:left">
                            <label class="light" style="font-weight:normal;">Fence<label>
                        </div>
                        <div style="float:left;margin-right:2px;">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" />
                        </div>
                        <div style="float:left">
                            <label class="light" style="font-weight:normal;">Add Cost<label>
                        </div>
                        <input type="hidden" id="investment_type" name="investment_type" value="<?php echo isset($c_investment_type) ? $c_investment_type : ''; ?>" >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top:-20px;">
        <div class="row">
            <div class="col-md-1" id="tcp_coverage">
                <label class="control-label" style="margin-bottom:1px;">LOT</label><br>
                <label class="control-label" style="margin-bottom:1px;">HOUSE</label><br>
                <label class="control-label" style="margin-bottom:1px;">FENCE</label><br>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2" style="font-weight:normal;">Lot Area:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="c_lot_area" name="c_lot_area" value="<?php echo $c_lot_area; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2" style="font-weight:normal;">Model:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text"  id="c_mod" value="<?php echo $c_house; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2" id="lbliv" style="font-weight:normal;">Linear Meter:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="c_lot_price" name="c_lot_price" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                <div class="col-md-4">
                        <label class="control-label2" id="lbliv" style="font-weight:normal;">Price/SQM:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="c_house_price_sqm" name="c_house_price_sqm" value="<?php echo $c_floor_area; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2" id="lbliv" style="font-weight:normal;">Floor Area:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="c_floor_area" name="c_floor_area" value="<?php echo $c_floor_area; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2" id="lbliv" style="font-weight:normal;">Price/LM:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="c_house_price_lm" name="c_house_price_lm" value="<?php echo $c_house_price_sqm; ?>" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                <div class="col-md-6">
                        <label class="control-label2" id="lbliv">Lot Contract Price: </label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="c_floor_area" name="c_floor_area" value="<?php echo $c_floor_area; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label2" id="lbliv">House Contact Price: </label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="c_floor_area" name="c_floor_area" value="<?php echo $c_floor_area; ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label2" id="lbliv">Fence Contract Price: </label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="c_house_price_sqm" name="c_house_price_sqm" value="<?php echo $c_house_price_sqm; ?>" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-body" style="margin-top:-1px; padding-top:5px;">
    <table>
        <tr>
        <!-- <div style="margin-top:10px;"></div> -->
        <div class="row" style="padding-top:5px;">
            <div class="col-md-2">
                <label class="control-label" style="margin-left:8px;">PROCESSING FEE:</label>
            </div>
            <div class="col-md-4">
                <input type="text" value="" class="form-control form-control-sm">
            </div>
            <div class="col-md-2">
                <label class="control-label">PF/mo.:</label>
            </div>
            <div class="col-md-4">
                <input type="text" value="" class="form-control form-control-sm" style="margin-left:-8px;">
            </div>
        </div>
        <div class="row" style="margin-top:9px;">
            <div class="col-md-2.5">
                <label class="control-label" style="margin-left:15px;">LESS: Applied Disc:</label>
            </div>
            <div class="col-md-4">
                <input type="text" value="" class="form-control form-control-sm" style="margin-left:25px;">
            </div>
            <div class="col-md-3">
                <label class="control-label" style="margin-left:20px;margin-right:-20px;">TOTAL CONTRACT PRICE: </label>
                <div class="vatlbl">VAT Inclusive</div>
            </div>
            <div class="col-md-3">
                <input type="text" value="" class="form-control form-control-sm" style="width:195px;margin-left:5px;">
            </div>
        </div>
        </tr>
    </table>
</div>
<div class="card-body" id="payment_details">
    <div class="row">
        <div class="dp_sched">
            <div class="titles">DOWN PAYMENT SCHEDULE</div>
            <div class="dp_container">
                <div class="row">
                    <input type="hidden" value="<?php echo $down_percent; ?>" id="down_percent">
                    <div style="float:left;margin-right:2px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;<input id="chkOption1" type="checkbox" name="chkOption1"/>
                    </div>
                    <div style="float:left">
                        <label class="light">20%</label>
                    </div>
                    <div style="float:left;margin-right:2px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="chkOption1" type="checkbox" name="chkOption1"/>
                    </div>
                    <div style="float:left">
                        <label class="light">30%<label>
                    </div>
                    <div style="float:left;margin-right:2px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="chkOption1" type="checkbox" name="chkOption1"/>
                    </div>
                    <div style="float:left">
                        <label class="light">FDP<label>
                    </div>
                    <div style="float:left;margin-right:2px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="chkOption1" type="checkbox" name="chkOption1"/>
                    </div>
                    <div style="float:left">
                        <label class="light"><input type="text" id="txtothers" value="" class="form-control form-control-sm" style="margin-bottom:-18px;"><label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" style="margin-bottom:-5px;margin-top:-55px;">Down Payment Amount:</label>
                        <input type="text" value="" class="form-control form-control-sm" style="margin-bottom:-18px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <label class="control-label2" id="lbl_dp">Less: Reservation Money:</label>
                    </div>
                    <div class="col-md-5">
                        <label class="control-label2" id="lbl_dp">Payable in (mos):</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <input type="text" value="<?php echo $c_reservation; ?>" class="form-control form-control-sm" style="margin-bottom:-18px;">
                    </div>
                    <div class="col-md-5">
                        <input type="text" value="<?php echo $c_terms; ?>" class="form-control form-control-sm" style="margin-bottom:-18px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="lbl_dp">Monthly Down Payment:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="title_sub">Monthly Down Payments</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label2" id="lbl_dp" style="margin-top:5px;">PF/mo:</label>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label2" id="lbl_dp" style="margin-top:5px;">GCF/mo:</label>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label2" id="lbl_dp" style="margin-top:5px;">STL/mo:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" value="" class="form-control form-control-sm" style="margin-bottom:-18px;">
                    </div>
                    <div class="col-md-4">
                        <input type="text" value="" class="form-control form-control-sm" style="margin-bottom:-18px;">
                    </div>
                    <div class="col-md-4">
                        <input type="text" value="" class="form-control form-control-sm" style="margin-bottom:-18px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="lbl_dp">Total Monthly Payment:</label>
                        <input type="text" value="<?php echo $c_monthly_payment; ?>" class="form-control form-control-sm" style="margin-bottom:-18px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="lbl_dp">Commencing Date:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
        </div>
        <div class="ma">
        <div class="titles2">MONTHLY AMORTIZATION</div>
        <div class="ma_sub"> *Based on In-House Financing pending Bank approval of Housing Loan</div>
            <div class="dp_container2">
                <div class="row">
                <div style="float:left;margin-right:2px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;<input id="chkOption1" type="checkbox" name="chkOption1" />
                    </div>
                    <div style="float:left">
                        <label class="light">MDP-BF<label>
                    </div>
                    <div style="float:left;margin-right:2px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="chkOption1" type="checkbox" name="chkOption1" />
                    </div>
                    <div style="float:left">
                        <label class="light">FULL DP-DFC<label>
                    </div>
                    <div style="float:left;margin-right:2px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="chkOption1" type="checkbox" name="chkOption1" />
                    </div>
                    <div style="float:left">
                        <label class="light">CASH<label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8" >
                        <label class="control-label2" style="margin-top:-5px;margin-bottom:12px;"> &nbsp;Amount to be financed:</label>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label2" style="margin-top:-12px;margin-bottom:12px;">In Years:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" value="<?php echo $amt_fnanced; ?>" class="form-control form-control-sm"  style="margin-top:-12px;">
                    </div>
                    <div class="col-md-4">
                        <input type="text" value="" class="form-control form-control-sm" style="margin-top:-12px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <label class="control-label2" id="lbl_dp" style="margin-top:7px;"> Interest Rate:</label>
                    </div>
                    <div class="col-md-7">
                        <label class="control-label2" id="lbl_dp" style="margin-top:7px;">Fixed Factor:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <input type="text" value="<?php echo $interest_rate; ?>" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-7">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="lbl_dp" style="margin-top:15px;">Monthly Amortization:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="title_sub">Monthly Amortization</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label2" id="lbl_dp" style="margin-top:5px;">PF/mo:</label>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label2" id="lbl_dp" style="margin-top:5px;">STL/mo:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="lbl_dp" style="margin-top:15px;">Total Monthly Amortization:</label>
                        <input type="text" value="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label2" id="lbl_dp" style="margin-top:14px;">Commencing Date:</label>
                        <input type="text" value="" id="monthly_due" class="form-control form-control-sm" style="margin-bottom:-5px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="sales" style="font-weight:normal;">
            <div class="titles3">SALES</div>
            <div class="first_table">
            <!-- <?php
            $mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

            // output any connection error
            if ($mysqli->connect_error) {
                die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
            }

            // the query
            $query = "SELECT * FROM t_csr_commission WHERE c_csr_no = $c_csr_no";

            // mysqli select query
            $results = $mysqli->query($query);

            if($results) {
                print '<table class="table-bordered" id="table-bordered1"><thead><tr>
                        <th class="agent_position2">POSITION</th>
                        <th>AGENT</th>
                        <th class="signature_width2">SIGNATURE</th>
                    </tr></thead><tbody>';
                while($row = $results->fetch_assoc()) {
                    print '
                        <tr>
                            <td>'.$row["c_position"].'</td>
                            <td>'.$row["c_agent"].'</td>
                            <td id="border_right_none"></td>
                        </tr>
                    ';
                }
                print '</tr></tbody></table>';
            } else {
                echo "<p>There are no project sites to display.</p>";
            }
            $results->free();
            $mysqli->close(); 
            ?>-->
                    <table class="table-bordered" id="table-bordered1"><thead><tr>
                        <th class="agent_position2">POSITION</th>
                        <th>AGENT</th>
                        <th class="signature_width2">SIGNATURE</th>
                        </tr></thead><tbody>
                    </table>
            </div>
            <div class="second_table">
                <table class="table-bordered">

                <tbody>
                    <tr>
                        <td id="spc" class="agent_position3">SALES DIRECTOR</td>
                        <td></td>
                        <td class="signature_width3" id="border_right_none"></td>
                    </tr>
                    <tr>
                        <td id="spc" class="agent_position3">SALES MANAGER</td>
                        <td></td>
                        <td class="signature_width3" id="border_right_none"></td>
                    </tr>
                    <tr>
                        <td id="spc" class="agent_position3">SENIOR PROPERTY CONSULTANT</td>
                        <td></td>
                        <td class="signature_width3" id="border_right_none"></td>
                    </tr>
                    <tr>
                        <td id="spc">PC COORDINATOR</td>
                        <td></td>
                        <td id="border_right_none"></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row" id="sales_checkbox">
                                <div style="float:left;margin-right:2px;">
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" style="margin-top:5px;"/>
                                </div>
                                <div style="float:left">
                                    <label class="light" style="font-weight:normal;margin-bottom:-10px;margin-top:5px;">REB<label>
                                </div>
                                <div style="float:left;margin-right:2px;">
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="chkOption1" type="checkbox" name="chkOption1" style="margin-top:5px;"/>
                                </div>
                                <div style="float:left">
                                    <label class="light" style="font-weight:normal;margin-bottom:-10px;margin-top:5px;">PC<label>
                                </div>
                            </div>
                        </td>
                        <td></td>
                        <td id="border_right_none"></td>
                    </tr>
                    <tr>
                        <td>Employee Referral</td>
                        <td></td>
                        <td id="border_right_none"></td>
                    </tr>
                </tbody>
                </table>
            </div>
            <table width="100%" id="tblborder">
                <tr><td><div class="notes">I have read and understood the Guidelines and Policies for In-House Financing and Data Privacy Consent at the back page. I certify that all information given are true and correct.</div></td></tr>
                <tr><td><div class="client_conforme" style="font-weight:normal;font-size:9px;margin-bottom:8px;">Conforme:</div><td></tr>
                <tr><td>
                        <br>
                        <!-- <input type="text" class="buyers_name" value="<?php echo $c_b1_last_name; ?>, <?php echo $c_b1_first_name; ?> <?php echo $c_b1_middle_name; ?>"> -->
                        <input type="text" class="txtSignature" value="Client's Signature Over Printed Name">
                </td></tr>
                <tr><td><div class="rec_app" style="font-weight:normal;font-size:9px;">Recommending Approval:</div><td></tr>
                <tr><td><div class="coo_name" style="margin-top:10px;">PIA MARIE ISABELLE B. MADRID</div></td></tr>
                <tr><td class="txtSignature" style="font-weight:bold;margin-top:-5px;height:19px;line-height:10px;">Chief Operating Officer</td></tr>
            </table>      
        </div>
    </div>
</div>
<div class="row">
    <table class="rem">
        <tr>
            <td width="50%"><div style="background-color:black;color:white;text-align:left;font-weight:bold;margin-top:0px;padding-left:8px;font-size:10px;height:auto;margin-right:-25px;">&nbsp;&nbsp;REMARKS</div></td>
            <td width="30%"><div style="background-color:black;color:white;padding:0px;text-align:center;font-weight:bold;margin-top:0px;font-size:10px;height:auto;margin-right:-5px;">Checked & Verified</div></td>
            <td width="20%"><div style="background-color:black;color:white;padding:0px;text-align:center;font-weight:bold;margin-top:0px;font-size:10px;height:auto;">Cashier Validation</div></td>
        </tr>
    </table>
    <table class="tablerem">
        <tr>
            <td width="50%" class="withbd">
                <textarea style="width: 100%; max-width:98%; border:none; height:100%; margin-left:1px; margin-top:3px;"><?php echo $remarks; ?></textarea>
            </td>
        </tr>
    </table>
    <table class="tablerem_checked_verfied">
        <tr>
            <td width="30%" class="withbd" style="padding-left:5px;">
                <label class="control-label" style="font-style:normal;font-size:10px;">Engineering</label><br>
                <label class="control-label" style="font-style:normal;font-weight:normal;">Date:</label>
            </td>
        </tr>
        <tr>
            <td width="30%" class="withbd" style="border-top:1px solid black;padding-left:5px;">
                <label class="control-label" style="font-style:normal;font-size:10px;">SMO</label><br>
                <label class="control-label" style="font-style:normal;font-weight:normal;">Date:</label>
            </td>
        </tr>
    </table>
    <table class="tablerem_cashier">
        <tr> 
        </tr>
    </table>
</div>