<?php
session_start();
include "db_connection.php";

$contact_id = $_GET["contact_id"];
$query= "DELETE FROM `contact_tbl` WHERE `id` = '$contact_id'";
$result = mysqli_query($conn,$query);
if ($result) {
     $_SESSION["danger"]="Delete successful..";
     echo "<script>window.location.href='contactlist.php'</script>";
   
} else {
    echo "connection error";
}
?>