<?php
session_start();
include "db_connection.php";
$categary_id = $_GET["categary_id"];
$name = $_POST["name"];
$dis = $_POST["dis"];

$filename=$_FILES["image"]["name"];
$temp_name=$_FILES["image"]["tmp_name"];

if($filename){
    move_uploaded_file($temp_name,"uploads/ecommerce/$filename");
    $query = "UPDATE `categary` SET `image`='$filename',`product_name`='$name' ,`dis`= '$dis' WHERE `id`='$categary_id'";
}
else{
    $query = "UPDATE `categary` SET `product_name`='$name',`dis`= '$dis' WHERE `id`='$categary_id'";

}

$result = mysqli_query($conn, $query);
if($result)
{
    $_SESSION["edit"]="Edit successful..";
    echo "<script>window.location.href='categary.php'</script>";
}
else
{
    echo"data not int";
}
