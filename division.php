<?php
$mysqli = mysqli_connect("localhost","root","","alscdb");

if(isset($_POST['c_code'])){
    $c_code = $_POST['c_code'];
    $sql = mysqli_query($mysqli,"SELECT * FROM t_division WHERE c_code='$c_code' order by c_division");
?>
<select name='c_division' id="c_division" class="form-control">
    <?php
    while($row=mysqli_fetch_array($sql)){
        ?>
        <option value="<?php echo $row['c_division'];?>"><?php echo $row['c_division'];?></option>
        <?php
    }
}
?>