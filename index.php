<?php
include('header-login.php');
include('functions.php');

?>
<style>
img{
	width:100%;
	height:100%;
	padding:15px;
}

.form-control{
	border-radius:0px 5px 5px 0px!important;
	margin-bottom:15px;
	margin-top:0px;
	width: 100%;
}
.btn{
	margin-bottom:15px;
	margin-top:15px;
	width: 100%;
}
table{
	width:100%;
}

.small-icons{
  background-color:	#E0E0E0;
  padding-top:8px;
  padding-left:8px;
  height:34px;
  width:30px;
  margin-top:-15px;
  border-radius: 5px 0px 0px 5px;

}
</style>
<div class="row vertical-offset-100">
	<div id="response" class="alert alert-success" style="display:none;">
		<a href="#" class="close" data-dismiss="alert">&times;</a>
		<div class="message"></div>
	</div>

	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default login-panel">
		  	<div class="panel-heading panel-login">
				<img src="<?php echo COMPANY_LOGO ?>" class="img-responsive">
		 	</div>
		  	<div class="panel-body">
		    	<form accept-charset="UTF-8" role="form" method="post" id="login_form">
		    		<input type="hidden" name="action" value="login">
	                <fieldset>
						<table>
							<tr>
								<td width="1%"><div class="small-icons"><span class="glyphicon glyphicon-user"></span></div></td>
								<td width="99%"><input class="form-control required" name="username" id="username" type="text" placeholder="Enter Username"></td>
							</tr>
							<tr>
								<td width="1%"><div class="small-icons"><span class="glyphicon glyphicon-lock"></span></div></td>
								<td width="99%"><input class="form-control required" placeholder="Password" name="password" type="password" placeholder="Enter Password"></td>
							</tr>
							
						</table>
						<table>
							<tr>
								<td width="1%"><div class="checkbox"></div></td>
								<td width="99%"><label><input name="remember" type="checkbox" value="Remember Me"> Remember Me</label>
								</td>
							</tr>
								<!--a href="forgot.php" class="float-right">Forgot password?</a-->
							<tr><td></td>
								<td width="100%">
									<button type="button" id="btn-login" class="btn btn-danger btn-block">Login</button><br>
								</td>
							</tr>
						</table>
			    	</fieldset>
		      	</form>
		    </div>
		</div>
	</div>
</div>
