<?php

include_once("dbconnect.php");

$fullName = $_POST["txtFullName"];
$email = $_POST["txtEmail"];
$phoneNumber = $_POST["txtPhoneNumber"];
$address = $_POST["txtAddress"];

$fullName = $conn->real_escape_string($fullName);
$email = $conn->real_escape_string($email);
$phoneNumber = $conn->real_escape_string($phoneNumber);
$address = $conn->real_escape_string($address);

$sql = "INSERT into users (email, fullName, phoneNumber, address) VALUES('$email', '$fullName', '$phoneNumber', '$address')";

if(mysqli_query($conn, $sql)){
    echo "New record created";
} else {
    die("Dead");
}

?>