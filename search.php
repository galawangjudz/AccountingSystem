<?php
    if(ISSET($_POST['search'])){
        $keyword = $_POST['keyword'];
?>
<div>
    <h2>Result</h2>
    <hr style="border-top:2px dotted #ccc;"/>
    <?php
        require 'conn.php';
        $query = mysqli_query($conn, "SELECT * FROM `t_approval_csr` WHERE `ra_id` LIKE '%$keyword%' ORDER BY `ra_id`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>
    <div style="word-wrap:break-word;">
        <a href="get_blog.php?id=<?php echo $fetch['ra_id']?>"><h4><?php echo $fetch['c_csr_no']?></h4></a>
        <p><?php echo substr($fetch['c_lot_id'], 0, 100)?>...</p>
    </div>
    <hr style="border-bottom:1px solid #ccc;"/>
    <?php
        }
    ?>
</div>
<?php
    }
?>