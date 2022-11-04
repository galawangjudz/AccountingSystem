<html>
<head>
<title>plus2net demo scripts using JQuery</title>
</head>

<body>

<form method=post action=dd-submit.php>
<select name='category' id='category'>
<option value='' selected>Select</option>
<?Php
require "config2.php";// connection to database 
$sql="SELECT  * from t_network "; // Query to collect data 

foreach ($dbo->query($sql) as $row) {
echo "<option value=$row[c_code]>$row[c_network]</option>";
}
?>
</select>
<select name='sub-category' id='sub-category'>
</select>
<input type=submit value=Submit></form>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
////////////
$('#category').change(function(){
//var st=$('#category option:selected').text();
var c_code=$('#category').val();
$('#sub-category').empty(); //remove all existing options
///////
$.get('ddck.php',{'c_code':c_code},function(return_data){
$.each(return_data.data, function(key,value){
		$("#sub-category").append("<option value=" + value.c_code +">"+value.c_division+"</option>");
	});
}, "json");
///////
});
/////////////////////
});
</script>
</body>
</html>
