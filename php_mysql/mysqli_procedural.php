<?php
$servername = '127.0.0.1';
$username = 'guest';
$password = 'guest123*';

$connection = mysqli_connect($servername, $username, $password);

if (!$connection) {
    die('Connection failed, error: ' . mysqli_connect_error());
} else {
    echo 'Connection succesful';
}
?>
