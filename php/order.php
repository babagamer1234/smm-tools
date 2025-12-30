<?php
include "db.php";

$service = $_POST['service'];
$link = $_POST['link'];
$qty = $_POST['quantity'];

mysqli_query($conn,
"INSERT INTO orders(service,link,quantity,status)
VALUES('$service','$link','$qty','Pending')");

echo "Order placed successfully";
?>
