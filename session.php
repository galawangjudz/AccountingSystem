
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alscdb";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
      die ('connection faild:'.$conn->connect_error);
    }
    session_start();
    if (isset($_POST['username']) && isset($_POST['password'])) {

        function validate($data){
    
           $data = trim($data);
    
           $data = stripslashes($data);
    
           $data = htmlspecialchars($data);
    
           return $data;
    
        }
    
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);


   // $sql = "INSERT INTO users (username,password)VALUES('$username','$password')"; 

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                
                $_SESSION['user_type'] = $row['user_type'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['lastname'] = $row['last_name'];
                $_SESSION['firstname'] = $row['first_name'];
                $_SESSION['middlename'] = $row['middle_name'];
                //$_SESSION['id'] = $row['id'];


                echo "Logged in successfully!"; 
                
                ?>
                <?php
            }else{
            echo "Incorrect credentials!"; 
                exit();
            }

        }else{
        echo "Incorrect credentials!"; 
            exit();
        }
    }
    
   // if ($conn->query($sql)===TRUE) {
      //echo "message sent successfully";     
  //  }else{
    //  echo "YOW";
   // }

    $conn->close();
?>
