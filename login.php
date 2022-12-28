<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ALSC Web App System</title>
 	

<?php include('functions.php'); ?>
<?php 
session_start();
if(isset($_SESSION['username']))
header("location:index.php?page=dashboard");
  
?>


<!--<link rel="stylesheet" href="css/bootstrap.min.css">!-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
<link rel="stylesheet" href="css/index_style.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css"> 
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/index_style.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script src="js/bootstrap.datetime.js"></script>
<script src="js/bootstrap.password.js"></script>
<script src="js/scripts.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>  
<style>
.main_panel{
    border-radius:5px;
    margin-top:130px;
    box-shadow: 2px 20px 20px #C0C0C0;
    width:30%;
    height:auto;
}
</style>
<body>  
    <div class="main_panel">
        <div class="panel panel-default login-panel">
            <div class="panel-heading panel-login">
				<img src="<?php echo COMPANY_LOGO ?>" class="img-responsive">
		 	</div>
            <div class="panel-body form-group form-group-sm">
                <div class="row">
                    <form id="submit_form">
                        <table>
                            <tr>           
                                <div class="toast" id="myToast" data-bs-autohide="true">
                                    <div class="toast-body">
                                        <div id="error_message"></div>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                                    </div>
                                </div>
                            <tr>
                            <tr>
                                <td width="1%"><div class="small-icons"></div></td>
                                <td width="99%"><input class="form-control" type="username" name="username" id="username" required style="margin-bottom:10px;background-color:white;"/></td> 
                            </tr>
                            <tr>
                                <td width="1%"><div class="small-icon2" style="margin-top:-15px;"></div></td>
                                <td width="99%"><input class="form-control" name="password" id="password" type="password" required style="margin-bottom:10px;background-color:white;"/></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td width="1%"><div class="checkbox"></div></td>
                                <td width="99%"><label><input name="remember" type="checkbox" value="Remember Me"> Remember Me</label>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td width="100%">
                                    <input type="button" name="submit" id="submit" class="btn btn-primary" value="Submit" style="width:100%;font-weight: bold;margin-top:10px;margin-bottom:10px;background-color:#0038a5;color:white!important;"/><br>
                                    <input type="text" id="samp_txt">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

        </div>
    </div>

<script>  
    $(document).bind('keypress', function(e) {
		e.preventDefault;
		
        if(e.keyCode==13){
            $('#submit').trigger('click');
        }
    });

    $(document).ready(function(){  
        $('#submit').click(function(){  
            var username = $('#username').val();  
            var password = $('#password').val();  
            if(username == '' || password == ''){  
               
                $('#error_message').html("All fields are required!");
                getMsg();
                $('.toast').toast('show');
            }else{  
                $.ajax({  
                    url:"session.php",  
                    method:"POST",  
                    data:{username:username, password:password},  
                    success:function(data){
                        $('.toast').toast('show');
                        $('#error_message').html(data);  
                        getMsg();
                    }
                });  
            }  
        });  
    }); 

    function getMsg(){
        var msg = document.getElementById('error_message');
        var msg_res = msg.textContent || msg.innerText;
        document.getElementById('samp_txt').value=msg_res;
        var samp = document.getElementById('samp_txt').value;
        var box = document.getElementsByClassName('toast');
        if(samp == "Logged in successfully!"){
            for(var i = 0; i < box.length; i++){
                box[i].style.backgroundColor = "#00a65a";
                setInterval(redirectToDashboard,1000);
            }
        }
    }
    function redirectToDashboard(){
	window.location.href = "index.php?page=dashboard";
}
</script>  
</body>  
</html>  
