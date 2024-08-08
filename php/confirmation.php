<?php
session_start();

$cnx = new mysqli("localhost", "root", "", "pharmacy");

if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to the database. Please try again later.';
    exit;
}

// Assuming you want to use the session username for the query
// $username = $_POST["identifiant"];
$password = $_POST["confirmation-password"];

// Check if the session username is set
if (isset($_SESSION['username'])) {
    // Use prepared statements to prevent SQL injection
    $stmt = $cnx->prepare("SELECT * FROM logins WHERE username = ?");
    $stmt->bind_param("s", $_SESSION['username']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

      
        if ($password == $row["passwd"]) {
            echo "<h1 style='text-align:center;'>Welcome</h1>";
        } else {
            echo "Mot de passe actuel incorrecte<br>";
            header("refresh:1;url=../html/profile.php");
            exit();  
    }
} else {
    echo "Session username not set";
}
}
// Redirect to homepage
header("refresh:1;url=../html/homepage.php");
exit();  // Ensure that the script stops here after the header is sent

?>
