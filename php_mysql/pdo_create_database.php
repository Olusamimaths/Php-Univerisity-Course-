<?php
$servername = "127.0.0.1";
$username = "guest";
$password = "guest123*";

try{
    $con = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    $sql = "CREATE DATABASE myDBPDO";
    $con->exec($sql);
    echo "Database created successfully<br>";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$con = null;
?>