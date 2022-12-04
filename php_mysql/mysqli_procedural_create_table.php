<?php
$servername = '127.0.0.1';
$username = 'guest';
$password = 'guest123*';
$dbName = 'csc415';

$connection = mysqli_connect($servername, $username, $password, $dbName);

if (!$connection) {
    die('Connection failed, error: ' . mysqli_connect_error());
} 

$tableName = 'Students';
$sql = "CREATE TABLE $tableName (
    id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName varchar(30) NOT NULL,
    lastName varchar(30) NOT NULL,
    department varchar(30) NOT NULL,
    course_of_study varchar(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($connection, $sql)) {
    echo "Table $tableName created successuflly", "\n";
} else {
    echo "Error creating table $tableName", mysqli_error($connection), "\n";
}


?>
