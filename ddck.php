<?Php
@$c_code=$_GET['c_code'];
//$cat_id=2;
/// Preventing injection attack //// 
if(!is_numeric($c_code)){
echo "Data Error";
exit;
 }
/// end of checking injection attack ////
require "config2.php"; // Database connection string 

$sql="SELECT c_division,c_code FROM t_network WHERE c_code=:c_code";
$row=$dbo->prepare($sql);
$row->bindParam(':c_code',$c_code,PDO::PARAM_INT,5);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);

$main = array('data'=>$result);
echo json_encode($main);
?>
