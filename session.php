
<?php 
    include_once("includes/config.php");

    $conn = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

    if($conn->connect_error){
      die ('connection faild:'.$conn->connect_error);
    }
    session_start();
    extract($_POST);

    $username = mysqli_real_escape_string($mysqli,$_POST['username']);
    $pass_encrypt = md5(mysqli_real_escape_string($mysqli,$_POST['password']));

    $query = "SELECT * FROM `users` WHERE username='$username' AND `password` = '$pass_encrypt'";

    $results = mysqli_query($mysqli,$query) or die (mysqli_error());
    $count = mysqli_num_rows($results);
    if($results->num_rows > 0){
		$row = $results->fetch_assoc();
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['lastname'] = $row['last_name'];
        $_SESSION['firstname'] = $row['first_name'];
        $_SESSION['middlename'] = $row['middle_name'];
       
        echo "Logged in successfully!"; 
    }else{
    echo "Incorrect credentials!"; 
    exit();

    }


    $mysqli->close();
?>
