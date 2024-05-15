<?php
session_start();

// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "jobportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from database according to user's input
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login successful
    $_SESSION['username'] = $username;
    header('Location: home.php');
} else {
    // Login failed
    header('Location: index.php');
}

$conn->close();
?>
