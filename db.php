<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "miniproject";
$db_port = "3307";
$conn="";
try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name, $db_port);
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
if (!$conn) {
    // die("Connection failed: " . mysqli_connect_error());
    echo "Error: ";
} else if ($conn) {
    // echo "Connected successfully";
}