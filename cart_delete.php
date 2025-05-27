<?php
session_start();
include 'db_connection.php';
$id = $_GET['id'];
$query = "DELETE FROM card_tbl WHERE cart_product_id='$id'";
$result = mysqli_query($conn, $query);
if ($result) {
    $_SESSION["delete"] = "delete successful.";
    echo "<script>window.location.href='cart_list.php'</script>";
} else {
    echo "connection error";
}


?>