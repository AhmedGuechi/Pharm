<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$search = $_GET['query'];
$sql = "SELECT * FROM users WHERE name LIKE '%$search%'";
$result = $conn->query($sql);

$users = array();

if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
    $users[] = $row;
 }
}

echo json_encode($users);
$conn->close();
?>