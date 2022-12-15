<?php

   ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
// date_default_timezone_set('Asia/Tokyo');
// $array_data = array('msg' => $_POST['msg'], 'name' => 'unknown', 'date' => date("F j, Y, g:i a"));
// echo json_encode($array_data);

// Insert posts into database
include ('db.php');
$msg = $_REQUEST['msg'];
$name = $_REQUEST['name'];


$sql = "INSERT INTO chat (message, name) VALUES ('$msg', '$name')";
mysqli_query($conn, $sql);


$stt = "SELECT * FROM chat ORDER BY id ASC";

$result = mysqli_query($conn,$stt);

while($extract = mysqli_fetch_array($result)){
    echo "User_name: ".$extract['name'] . "  ". $extract['time'] . " <br>"  . $extract['message'] . "<br>";
    // $array_data = array('msg' => $extract['message'], 'name' => $extract['name'], 'date' => $extract['time']);
    // echo json_encode(array('msg' => $extract['message'], 'name' => $extract['name'], 'date' => $extract['time']));
}



mysqli_close($conn);
