<?php

$conn = mysqli_connect("localhost", "nagendra", "nagendra", "payroll_management");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);

?>
