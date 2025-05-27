<?php
session_start();
include "db_connection.php";
$email = $_POST["email"];
$password  = $_POST["password"]; 
$query = " SELECT * FROM tbl_register where `register_email` = '$email' and `register_pass` = '$password' ";
$result = mysqli_query($conn,$query);
if($result->num_rows>0){

    echo "Login successful";
    $row = mysqli_fetch_array($result);
    $_SESSION["login"] = 1;
    $_SESSION['register_id']= $row['register_id'];
    echo "<script>window.location.href='index.php'</script>";
}
else{
    echo "Login not successful";
}
?>