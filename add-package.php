<?php
// database connection code
if(isset($_POST['package']))
{
	
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','customer');

// get the post records

$txtPackage = $_POST['package'];
$txtChanel = $_POST['chanel'];
$txtPrice = $_POST['price'];
$txtValidity = $_POST['validity'];
// database insert SQL code
$sql = "INSERT INTO `package` (`name`, `pid`,`channels` ,`pack_price`,`validity`,`active`) VALUES ('$txtPackage', '0', '$txtChanel', '$txtPrice', '$txtValidity', '1')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>