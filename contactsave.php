<?php
include("db_connection.php");
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];
$query="INSERT INTO contact_tbl (`name`,`email`,`phone`,`message`)VALUES('$name','$email','$phone','$message')";
$result = mysqli_query($conn, $query);
if ($result) {
    $_SESSION["success"] = "Registration successful..";
    echo "<script>window.location.href='contact.php'</script>";

} else {
    echo "connection error";
}
?>