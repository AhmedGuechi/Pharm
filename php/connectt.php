<?php
$conn = new mysqli('localhost', 'root', '', 'pharmacy');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM newss ORDER BY news_date DESC;";
$sql_files="SELECT * FROM filess ORDER BY file_date DESC LIMIT 5;";
$result =mysqli_query($conn, $sql);
$result_files = mysqli_query($conn, $sql_files) ;

$card = mysqli_fetch_all($result, MYSQLI_ASSOC);
$card_files = mysqli_fetch_all($result_files, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);
mysqli_free_result($result_files);

//close connection
mysqli_close($conn);

// Return the connection object
return $conn;
?>
