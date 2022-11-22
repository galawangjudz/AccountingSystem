<?php
include('header.php');
include('functions.php');
$getID = $_GET['id'];
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}
// the query
$query = "SELECT * FROM t_csr WHERE c_csr_no = '" . $mysqli->real_escape_string($getID) . "'";
$result = mysqli_query($mysqli, $query);
// mysqli select query
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		$csr_no = $row['c_csr_no']; // customer last name
    }
}
$mysqli->close();
?>
<head>
    <!-- include summernote css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" />
    <!-- include summernote js-->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<?php
 require 'includes/mail/PHPMailer.php';
 require 'includes/mail/SMTP.php';
 require 'includes/mail/Exception.php';

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;

 if(isset($_POST['send'])){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";
    $mail->Username = "asianland.ph.it@gmail.com";
    $mail->Password = "fnvdjrculizsfdbo";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";

    $mail->setFrom("asianland.ph.it@gmail.com", 'IT ASIANLAND');
    //$mail->addAddress($_POST["email"]);
    $addresses = explode(',',$_POST["email"]);
    foreach ( $addresses as $address ){
        $mail->AddAddress($address);
    }


    for ($i=0; $i < count($_FILES['file']['tmp_name']); $i++){
        $mail->addAttachment($_FILES['file']['tmp_name'][$i],$_FILES['file']['name'][$i]);
    }

    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];

    $mail->Body = $_POST["message"];
    
    if($mail->send()){?>
        <script>
            alert("Email Sent!");
            location.href="csr-list.php";
        </script>
    <?php
    }else{
    ?>
        <script>
            alert("Error! Email not sent!");
            location.href="csr-list.php";
        </script>
    <?php
    }
    $mail->smtpClose();
}
    ?>
<h2>Compose Email</h2>
<hr>
<body>
    <form class="" method="post" enctype="multipart/form-data">
        <div class="box_big1">
	        <div class="main_box">
                <div class="row">
                    <div class="col-xs-12">		
                        <div class="form-group">
                            <label class="control-label">To: </label>
                            <textarea class="form-control required textarea" type="text" name="email">donitarosetantoco2028@gmail.com</textarea><br/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">		
                        <div class="form-group">
                        <label class="control-label">Subject: </label>
                        <input type="text" name="subject" class="form-control required" value="APPROVAL FOR CSR #<?php echo $getID; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">		
                        <div class="form-group">
                            <label class="control-label">Message: </label>
                            <textarea class="form-control required textarea" id='makeMeSummernote' name="message" rows="3">
                            <br><br><br><br><br><br>
                            <input type="text" id="inside_txtbox" disabled style="border:none" value="----------"><br>
                            <input type="text" id="inside_txtbox" disabled style="border:none" value="<?php echo $_SESSION['lastname'];?>, <?php echo $_SESSION['firstname'];?> <?php echo $_SESSION['middlename'];?>"><br>
                            <input type="text" id="inside_txtbox" disabled style="border:none" value="<?php echo $_SESSION['user_type'];?>">

                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">		
                        <div class="form-group">
                            <label class="control-label">Attachment/s: </label>
                            <input name="file[]" multiple="multiple" class="form-control" type="file" id="file">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">		
                        <div class="form-group">
                            <button type="submit" name="send" id="btnSend" class="btn btn-success">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<div class="row">
</div>
</body>
<?php
	include('footer.php');
?>
 <script type="text/javascript">
    $('#makeMeSummernote').summernote({
        height:200,
        toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    });

</script>