<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "idelline";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->select_db($db);

echo "Connected successfully";
?>