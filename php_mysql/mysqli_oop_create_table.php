<?php
$servername = "127.0.0.1";
$username = "guest";
$password = "guest123*";
$dbName = "csc415";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$tableName = "MyGuests";

$sql = "CREATE TABLE $tableName (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstName varchar(30) NOT NULL,
  lastName varchar(30) NOT NULL,
  email varchar(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($conn->query($sql) === TRUE) {
  echo "Table $tableName created successfully";
} else {
  echo "Error creating table $tableName". $conn->connect_error;
}

$conn->close();
?>