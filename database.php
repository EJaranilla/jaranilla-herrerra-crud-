<?php

function connectDB(){

$servername = "localhost";
$username = "ehd_admin";
$password = "hnqiAy*7fm2BP-w[";
$db = "crud"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

return $conn;
//echo "Connected successfully";

}

?>
