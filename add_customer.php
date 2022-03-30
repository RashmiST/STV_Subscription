<?php
// database connection code
if(isset($_POST['customer']))
{
	
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','customer');

// get the post records

$txtCustomer = $_POST['customer'];
$txtId = $_POST['id'];
$txtName = $_POST['name'];
$txtGender = $_POST['gender'];
$txtEmailId = $_POST['emailid'];
$txtMobileNo = $_POST['mobileno'];
$txtPhoto = $_POST['photo'];
$txtAddress1 = $_POST['address1'];
$txtAddress2 = $_POST['address2'];
$txtCityId = $_POST['cityid'];
$txtCountryId = $_POST['countryid'];
$txtActive  = $_POST['active'];
// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`customer`, `id`, `name` ,`gender` ,`emailid`,`mobileno`,`photo`,``address1`,`address1`,`cityid`,`countryid`,active`) VALUES ('$txtCustomer', '$txtId','$txtName','$txtGender', '$txtEmailId', '$txtMobileNo',`$txtPhoto`,`$txtAddress1`,`$txtAddress2`,'$txtCityId','$txtCountryId', '$txtActive')";

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