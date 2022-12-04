<?php
$servername = "127.0.0.1";
$username = "guest";
$password = "guest123*";
$dbname = "csc415";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("Connection to DB failed". $conn->connect_error);
}

$age = $_GET['age'];
$sex = $_GET['sex'];
$wpm = $_GET['wpm'];

$age = $conn->real_escape_string($age);
$sex = $conn->real_escape_string($sex);
$wpm = $conn->real_escape_string($wpm);

$sql = "SELECT * FROM ajax_example WHERE sex='$sex'";

if(is_numeric($age)) {
    $sql .= " AND age = $age";
}

if(is_numeric($wpm)) {
    $sql .= " AND wpm = $wpm";
}

$query_result = $conn->query($sql) or die($conn->error);

$display_string = "table";
$display_string .= "<tr>";
$display_string .= "<th>Name</th>";
$display_string .= "<th>Age</th>";
$display_string .= "<th>Sex</th>";
$display_string .= "<th>WPM</th>";
$display_string .= "</tr>";

if($query_result->num_rows > 0) {
    while($row = $query_result->fetch_assoc()) {
        $display_string .= "<tr>";
        $display_string .= "<td>".$row["name"]."</td>";
        $display_string .= "<td>".$row["age"]."</td>";
        $display_string .= "<td>".$row["sex"]."</td>";
        $display_string .= "<td>".$row["wpm"]."</td>";
        $display_string .= "</tr>";
    }

    echo "Query: " . $sql . "<br />";

    $display_string .= "</table>";
    echo $display_string;
}


?>