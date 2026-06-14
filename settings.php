<?php
$host = "localhost";
$user = "root";
$pwd = "";
$sql_db = "3a1w_db";

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
  die("Database connection failed: " . mysqli_connect_error());
}
?>
