<?php
$servername = "139.99.88.192";
$username = "tedi";
$password = "tedi1234!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>