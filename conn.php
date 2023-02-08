<?php
$username = "lm";
$passwd = "";


$servername = "localhost";
$usernameDb = "root";
$password = "";
$dbname = "crm";
$conn = new mysqli($servername, $usernameDb, $password, $dbname);
 $conn->query("set names utf8");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  exit();
}
?>
