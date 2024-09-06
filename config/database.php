<?php
session_start();
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "crud_operation";

$conn = @new mysqli($serverName,$userName,$password,$databaseName);

if($conn->connect_error){
    echo "Failed to connect: " . $conn->connect_error;
}

?>