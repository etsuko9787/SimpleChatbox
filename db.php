<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "chatbox";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection 
if($error = $conn->connect_error){
    dir("Conection failed: ". $error);
}
// echo "Connected successfully";