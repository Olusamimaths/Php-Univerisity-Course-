<?php
$servername = '127.0.0.1';
$username = 'guest';
$password = 'guest123*';
$dbName = "csc415";

$connection = mysqli_connect($servername, $username, $password, $dbName);

if (!$connection) {
    die('Connection failed, error: ' . mysqli_connect_error());
} else {
    echo 'Connection succesful', "\n";
}

$sql =
    "INSERT INTO MyGuests (firstName, lastName, email) VALUES('John', 'Doe', 'john@example.com');";
$sql .=
    "INSERT INTO MyGuests (firstName, lastName, email) VALUES('Mary', 'Moe', 'mary@example.com');";
$sql .=
    "INSERT INTO MyGuests (firstName, lastName, email) VALUES('Julie', 'Dooley', 'julie@example.com');";

if(mysqli_multi_query($connection, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

mysqli_close($connection);
?>
