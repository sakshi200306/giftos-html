<?php
session_start();
include "db_connection.php";
$product_id = $_POST["id"];
$customer_id = $_SESSION["register_id"];
$cart_qty = $_POST['qty'];
$query = "INSERT INTO card_tbl (`cart_product_id`, `cart_customer_id`, `cart_qty`) VALUES ('$product_id','$customer_id','$cart_qty')";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "<script>window.location.href='cart_list.php'</script>";
} else {
    echo "Contact form submission failed";
}
