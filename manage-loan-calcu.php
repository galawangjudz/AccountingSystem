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
	.result{
		text-align:center;
	}
	table tr td{
		border:solid 1px black;
		width:100%;
		font-size:15px;
	}
</style>
<h2>Loan Calculator</h2>
<hr>
<div class="row">
	<div class="col-xs-12">
		<!-- <div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div> -->
		<div class="panel panel-default">

			<div class="panel-body form-group form-group-sm">
			<h2>Instructions</h2>
			<ul>
				<li>This calculator outputs the monthly payments for a loan and income requirements.</li>
				<li>The loan amount is the total amount of money you are borrowing and must be a whole number greater than zero.
					Do not enter commas, <abbr title="for example">e.g.</abbr>, 1,000 would be entered as 1000.</li>
				<li>Interest is the interest rate you are paying, this is a decimal or whole number greater than 0.1;
					do not include the percent sign.</li>
				<li>The number of months is how many months the loan will be carried out. This is a whole number greater than zero.</li>
				<br>
			</ul>

			<form method="post" id="loanCalcForm" role="">
			<fieldset>
				<legend>Loan Calculator</legend>
				<table>
					<ul>
						<li>
							<label for="loanAmount">Loan Amount: </label>
							<input type="text" size="8" name="loanAmount" id="loanAmount" value="<?php if (isset($loanAmount)) { echo $loanAmount; } ?>" />
							<?php if (isset($errorArray[0])) { echo $errorArray[0]; } ?>
						</li>
						<li>
							<label for="interest">Interest: </label>
							<input type="text" size="8" name="interest" id="interest" value="<?php if (isset($interest)) { echo $interest; } ?>" />
							<?php if (isset($errorArray[1])) { echo $errorArray[1]; } ?>
						</li>
						<li>
							<label for="numOfMonths">Number of Months: </label>
							<input type="text" size="8" name="numOfMonths" id="numOfMonths" value="<?php if (isset($numOfMonths)) { echo $numOfMonths; } ?>" />
							<?php if (isset($errorArray[2])) { echo $errorArray[2]; } ?>
						</li>
					</ul>
					<input type="submit" name="submit" value="Submit" class="button" />
				</table>
			</fieldset>
			</form>
			<div id="result" class="result">
				<?php if (isset($result)) { echo $result; } ?>
			</div>
		
			</div>
		</div>
	</div>
<div>
<script src="loan-calcu/js/Utils.js"></script>
<script src="loan-calcu/js/loanCalc.js"></script>



    

