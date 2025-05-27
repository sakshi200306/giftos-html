<?php
include "db_connection.php";
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$pass = $_POST["pass"];

$query = "INSERT INTO tbl_register (`register_name`,`register_email`,`register_no`,`register_pass`) VALUE('$name','$email','$mobile','$pass')";
$result = mysqli_query($conn, $query);
if($result){
    echo " Data inserted successfully";
}
else{
    echo  "Data is inserted";
}
?>
