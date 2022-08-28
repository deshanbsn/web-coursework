<?php 

$sname = "localhost";
$uname = "root";
$password = "";
$dbName = "shopping_cart";

$conn = mysqli_connect($sname, $uname, $password, $dbName);

if(!$conn) {
  echo "Connection faild!";
  exit();
}

?>