<?php
$servername = '127.0.0.1';
$username = 'username';
$password = 'guest123*';
$dbname = 'csc415';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $conn->beginTransaction();
    
    $conn->exec("INSERT INTO MyGuests (firstName, lastName, email) VALUES('John', 'Doe', 'john@example.com');");
    $conn->exec("INSERT INTO MyGuests (firstName, lastName, email) VALUES ('Mary', 'Moe', 'mary@example.com');");
    $conn->exec("INSERT INTO MyGuests (firstName, lastName, email) VALUES ('Julie', 'Dooley', 'julie@example.com')");

    $conn->commit();

    echo "New records created successfully";
} catch (PDOException $e) {
    $conn->rollBack();
    echo "Error: " . $e->getMessage();
}
?>
