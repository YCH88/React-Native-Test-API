<?php
$servername = "db4free.net";
$username = "reactcafeadmin";
$password = "123456789";

$conn = mysqli_connect($servername, $username, $password); 
$database = mysqli_select_db($conn, 'reactcafe');

if ($conn->connect_error) {
  echo "Failed to connect Database: " . $con->connect_error; 
  exit;
}
?>