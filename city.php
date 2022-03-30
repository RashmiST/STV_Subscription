<?php
// database connection code
if(isset($_POST['city']))
{
	
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','city');

// get the post records

$txtCity = $_POST['city'];
$txtCId = $_POST['cid'];
$txtCountryId = $_POST['countryid'];
$txtName = $_POST['name'];
$txtActive  = $_POST['active'];
// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`city`, `cid`, `countryid` ,`name` ,`active`) VALUES ('$txtCity', '$txtCId','$txtCountryId','$txtName',  '$txtActive')";

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