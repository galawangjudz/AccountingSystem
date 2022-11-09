<?php
    require 'includes/mail/PHPMailer.php';
    require 'includes/mail/SMTP.php';
    require 'includes/mail/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";

    $mail->SMTPSecure = "tls";

    $mail->Port = "587";

    $mail->Username = "asianland.ph.it@gmail.com";

    $mail->Password = "fnvdjrculizsfdbo";

    $mail->Subject = "Test";

    $mail->setFrom("asianland.ph.it@gmail.com");

    $mail->Body = "Sample Notification";

    $mail->addAddress("donitarosetantoco2028@gmail.com");

    if($mail->Send()){?>
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
    ?>

<?php/*MANUAL EMAIL - For emergency lang in case na hindi mag-send yung email*/?>