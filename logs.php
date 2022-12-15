<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// Insert posts into database
include ('db.php');



$stt = "SELECT * FROM chat ORDER BY id ASC";

$result = mysqli_query($conn,$stt);

while($extract = mysqli_fetch_array($result)){
 echo "User_name: ".$extract['name'] . "  ". $extract['time'] . " <br>"  . $extract['message'] . "<br>";
}



mysqli_close($conn);
