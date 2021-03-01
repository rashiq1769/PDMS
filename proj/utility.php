<?php
session_start();
require_once('config.php');
$api = $_POST['api'];
//$api = $_POST['api'];

if($api == "getActualMaterial"){
  $basicTypeId = $_POST['id'];
  getActualMaterial($basicTypeId, $con);
}

if($api == "getActualMaterialData"){
  $basicTypeId = $_POST['bid'];
  $actualTypeId = $_POST['aid'];
  $from = $_POST['from'];
  $to = $_POST['to'];
  getActualMaterialData($basicTypeId, $actualTypeId, $from, $to,  $con);
}


function getActualMaterial($material_type, $con){
$sql = "SELECT * FROM Actual_Materials where basic_type=".$material_type;
$result1 = mysqli_query($con, $sql);
$mList = array();
while($row2 = mysqli_fetch_array($result1))
{
$mList[] = array(
"id" => $row2[0],
"desc" => $row2[1]
);
}
echo json_encode($mList);
}


function getActualMaterialData($material_type, $actualType, $from, $to,  $con){
$sql = "SELECT * FROM Materials_Data WHERE Entry_Date BETWEEN '".$from."' AND '".$to."' AND Actual_Type=".$actualType." AND Basic_Type=".$material_type;
//echo $sql;
$result1 = mysqli_query($con, $sql);
$mList = array();
while($row2 = mysqli_fetch_array($result1))
{
$mList[] = array(
"month" => $row2[0],
"year" => $row2[1],
"capacity" => $row2[4]
);
}
echo json_encode($mList);
}
?>
