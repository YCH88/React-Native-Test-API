<?php
include "db.php";
include "function.php";

$jsonArray = array();
if($_SERVER['REQUEST_METHOD'] == "GET") {
$sql = "SELECT * FROM menu";

$result = mysqli_query($conn,$sql);
//echo json_encode($result);

$menu=array();

if(mysqli_num_rows($result) > 0)
{
 while ($row = mysqli_fetch_row($result)){
 $jsonArray["menu"] = $row;
}
}
$_code=200;
SetHeader($_code);
$jsonArray[$_code]=HttpStatus($_code);
echo json_encode($menu);
}
?>