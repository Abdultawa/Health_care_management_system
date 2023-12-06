<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$database = "Health";

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    // die("Database connection failed: " . mysqli_connect_error());
    echo "not connected";
}else{
//   echo "Connected";
}

?>
 
