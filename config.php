<?php
// Database configuration
$server = "localhost";
$username = "root";       // default XAMPP MySQL user
$password = "";           // default XAMPP root password is empty
$database = "bluebirdhotel";

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
    die("<script>alert('Connection Failed. Please check your database credentials.')</script>");
}
// Connection successful (optional for debugging)
// echo "<script>alert('Connection Successful.')</script>";
?>
