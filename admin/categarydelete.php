<?php
session_start();
include "db_connection.php";
echo "<script>(confirm('are you sure delete'))</script>";

$categary_id = $_GET["categary_id"];
$query= "DELETE FROM `categary` WHERE `id` = '$categary_id'";
$result = mysqli_query($conn,$query);
if ($result) {
     $_SESSION["danger"]="Delete successful..";
     echo "<script>window.location.href='categary.php'</script>";
   
} else {
    echo "connection error";
}
?>