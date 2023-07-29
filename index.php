<?php
if (isset($_SERVER['HTTP_ORIGIN'])) {
  header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
  header('Access-Control-Allow-Credentials: true');
  header('Access-Control-Max-Age: 86400');
} 
$servername = "db4free.net";
$username = "reactcafeadmin";
$password = "123456789";

$conn = mysqli_connect($servername, $username, $password); 
$database = mysqli_select_db($conn, 'reactcafe');

if ($conn->connect_error) {
  echo "Failed to connect Database: " . $con->connect_error; 
  exit;
}

$encodedData = file_get_contents('php://input');  // take data from react native fetch API
$decodedData = json_decode($encodedData, true);

$sql = "SELECT * FROM menu";

$result = mysqli_query($conn,$sql);
//echo json_encode($result);

$menu=array();

if(mysqli_num_rows($result) > 0)
{
 while ($row = mysqli_fetch_row($result)){
 $menu = $row;
}
}

$conn->close();

echo json_encode($menu);
?>