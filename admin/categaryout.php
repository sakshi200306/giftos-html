<?php
session_start();
include("db_connection.php");

$product_name = $_POST["name"];
$dis = $_POST["dis"];
 
$filename = $_FILES["image"]["name"];
$temp_name = $_FILES["image"]["tmp_name"];
move_uploaded_file($temp_name,"uploads/ecommerce/$filename");

$query = "INSERT INTO categary(`product_name`,`image`,`dis`) VALUES ('$product_name','$filename','$dis')";
$result = mysqli_query($conn, $query);
if ($result) {
  $_SESSION["success"] = "  Add Connection  successful..";
  echo "<script> window.location.href='categary.php'</script>";
} else {
  echo "connection error";
}
