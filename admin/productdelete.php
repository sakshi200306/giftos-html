<?php
session_start();
include "db_connection.php";
$product_id = $_GET["id"];
$query= "DELETE FROM `product_tbl` WHERE `id` = '$product_id'";
$result = mysqli_query($conn,$query);
if ($result) {
    $_SESSION["danger"]="Delete connection succssful";
     echo "<script>window.location.href='productlist.php'</script>"; 
} 
else {
    echo "connection error";
}
?>