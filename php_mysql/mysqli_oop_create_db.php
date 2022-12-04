<?php
$servername = "127.0.0.1";
$username = "guest";
$password = "guest123*";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE DATABASE myDB";
if($conn->query($sql) === TRUE) {
  echo "Database created succefully";
} else {
  echo "Error creating database". $conn->error;
}

$conn->close();
?>