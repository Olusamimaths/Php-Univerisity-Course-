<?php
$servername = "127.0.0.1";
$username = "guest";
$password = "guest123*";

try{
    $con = new PDO("mysql:host=$servername;dbname=csc415", $username, $password);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed " . $e->getMessage();
}
?>