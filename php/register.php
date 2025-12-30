<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$pass = md5($_POST['password']);

mysqli_query($conn,
"INSERT INTO users(name,email,password)
VALUES('$name','$email','$pass')");

header("Location: ../login.html");
?>
