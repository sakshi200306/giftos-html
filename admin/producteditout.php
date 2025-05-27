<?php
session_start();
include "db_connection.php";
$product_id = $_GET["id"];
$productname = $_POST["name"];
$MRP = $_POST["MRP"];
$DiscountPercentage = $_POST["per"];
$DiscountValue = $_POST["value"];
$SellPrice = $_POST["sell"];
$Description = $_POST["dis"];
$categary = $_POST["categary"];

$filename=$_FILES["image"]["name"];
$temp_name=$_FILES["image"]["tmp_name"];

if($filename){
    move_uploaded_file($temp_name,"uploads/ecommerce/$filename");
    $query = "UPDATE `product_tbl` SET `name`='$productname', `image`='$filename',`MRP`= '$MRP',`per`='$DiscountPercentage' ,`value`= '$DiscountValue',`sell`= '$SellPrice',`dis`= '$Description', `categary`='$categary'  WHERE `id`='$product_id'";
}
else{
    $query = "UPDATE `product_tbl` SET `name`='$productname',`MRP`= '$MRP',`per`='$DiscountPercentage' ,`value`= '$DiscountValue',`sell`= '$SellPrice',`dis`= '$Description','categary'='$categary' WHERE `id`='$product_id'";

}
$result = mysqli_query($conn, $query);
if($result)
{
    $_SESSION["edit"]="Edit successful..";
    echo "<script>window.location.href='productlist.php'</script>";
}
else
{
    echo"datanotint";
}