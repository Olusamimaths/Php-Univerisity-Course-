<?php
$servername = '127.0.0.1';
$username = 'guest';
$password = 'guest123*';
$dbname = 'csc415';

try {
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected successfully', "\n";

    $tableName = 'Students';
    $sql = "CREATE TABLE $tableName (
    id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName varchar(30) NOT NULL,
    lastName varchar(30) NOT NULL,
    department varchar(30) NOT NULL,
    course_of_study varchar(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $con->exec($sql);
    echo "Table $tableName created successfully<br>";
} catch (PDOException $e) {
    echo $sql . '<br>' . $e->getMessage();
}

$con = null;
?>
