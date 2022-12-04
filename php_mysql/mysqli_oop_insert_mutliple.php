<?php
$servername = '127.0.0.1';
$username = 'guest';
$password = 'guest123*';
$dbName = 'csc415';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
$sql = "INSERT INTO MyGuests (firstName, lastName, email)
VALUES ('John', 'Doe', 'john@example.com'),
('Mary', 'Moe', 'mary@example.com'),
('Julie', 'Dooley', 'julie@example.com');
";

$sql =
    "INSERT INTO MyGuests (firstName, lastName, email) VALUES('John', 'Doe', 'john@example.com');";
$sql .=
    "INSERT INTO MyGuests (firstName, lastName, email) VALUES('Mary', 'Moe', 'mary@example.com');";
$sql .=
    "INSERT INTO MyGuests (firstName, lastName, email) VALUES('Julie', 'Dooley', 'julie@example.com');";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
