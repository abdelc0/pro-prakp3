<?php
$servername = "localhost";
$username = "imran_m1";
$password = "vxBMzpzH80TgN9rQ";
$dbname = "anime_da";
$conn = mysqli_connect($servername,$username,$password,$dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo " ";
?>


