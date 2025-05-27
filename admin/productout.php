<?php
session_start();
include("db_connection.php");

$name = $_POST["name"];
$MRP = $_POST["MRP"];
$per  = $_POST["per"];
$value  = $_POST["value"];
$sell  = $_POST["sell"];
$dis  = $_POST["dis"];
$categary = $_POST["categary"];

$filename = $_FILES["image"]["name"];
$temp_name = $_FILES["image"]["tmp_name"];
move_uploaded_file($temp_name,"uploads/ecommerce/$filename");

$query = "INSERT INTO product_tbl(`name`,`image`,`MRP`,`per`,`value`,`sell`,`dis`,`categary`) VALUES ('$$name','$filename', '$MRP','$per','$value','$sell','$dis','$categary ')";
$result = mysqli_query($conn, $query);
if ($result) {
  $_SESSION["success"] = "  Add Connection  successful..";
  echo "<script> window.location.href='productlist.php'</script>";
} else {
  echo "connection error";
}
