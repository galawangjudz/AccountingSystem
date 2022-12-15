<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    </head>
<body>

    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">PHP - Simple Search Box</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <a href="index1.php" class="btn btn-success">Back</a>
        <?php
            require 'includes/config.php';
            if(ISSET($_REQUEST['id'])){
                $query = mysqli_query($conn, "SELECT * FROM `t_approval_csr` WHERE `c_csr_no` = '$_REQUEST[id]'") or die(mysqli_error());
                $fetch = mysqli_fetch_array($query);
        ?>
                <h3><?php echo $fetch['c_csr_no']?></h3>
                <p><?php echo nl2br($fetch['c_lot_id'])?></p>
        <?php
            }
        ?>
 
    </div>
</body>
</html>