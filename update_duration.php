<?php 

    require_once("includes/config.php");

    if(isset($_POST['samp_txt']))
    {
        $CSRID = $_GET['c_csr_no'];
        $status = "Reopen";
        $duration = '0000-00-00 00:00:00';

        $query = " update t_csr set c_csr_status = 'Reopen', c_duration='".$duration."' where c_csr_no='".$CSRID."'";
        $result = mysqli_query($mysqli,$query);

        if($result)
        {
            header("location:javascript://history.go(-1)");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        //header("location:csr-list.php");
    }


?>