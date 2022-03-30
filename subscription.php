<?php
$con = mysqli_connect('localhost', 'root', '','customer');
$tableName="subscription";
$columns= [`sid`, `customer_id` ,`package_id` ,`start_date`,`end_date`,`active`];
$fetchData = fetch_data($con, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
$columnName = implode(", ", $columns);
$query = "SELECT * FROM $tableName";
$result = $db->query($query);

if($result== true){  
 if ($result->num_rows > 0) { 
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>