<?php

// Enable error reporting for development
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);//
//error_reporting(E_ALL);

// Create connection to the MySQL database
$conn = mysqli_connect("localhost", "nagendra", "nagendra", "payroll_management");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Connection successful
//echo "Connected successfully";

// Close the connection
//mysqli_close($conn);

?>

