<?php
session_start();
include "db.php";

$email = $_POST['email'];
$pass = md5($_POST['password']);

$q = mysqli_query($conn,
"SELECT * FROM users WHERE email='$email' AND password='$pass'");

if(mysqli_num_rows($q)){
  $_SESSION['user']=$email;
  header("Location: ../order.html");
}else{
  echo "Login Failed";
}
?>
