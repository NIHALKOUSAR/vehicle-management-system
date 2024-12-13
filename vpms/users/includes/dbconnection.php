<?php
// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "vmps";

// Establish connection
$con = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (mysqli_connect_errno()) {
    // Connection failed, display error
    echo "Connection Failed: " . mysqli_connect_error();
} else {
    // Connection successful
    echo "Database connection successful!";
}
?>