<?php
// database connection code
if(isset($_POST['country']))
{
	
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','country');

// get the post records

$txtCountry = $_POST['country'];
$txtCoId = $_POST['coid'];
$txtName = $_POST['name'];
$txtActive  = $_POST['active'];
// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`country`, `coid`, `name` ,`active`) VALUES ('$txtCountry', '$txtCoId','$txtName', '$txtActive')";

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