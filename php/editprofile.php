<?php
session_start();
$conn = new mysqli("localhost", "root", "", "pharmacy");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$editedManager = $_POST["manager"];
$editedManagerPhone = $_POST["manager-phone"];
$editedInstitutionName = $_POST["institution-name"];
$editedInstitutionPhone = $_POST["institution-phone"];
$editedAddress = $_POST["address"];
$editedWebsite = $_POST["website"];
$editedEmail = $_POST["email-input"];
$sendPss= $_POST["edit-confirmation-btn"];
$password = $_POST["confirmation-password"];    

// Check if the session username is set
if (isset($_SESSION['username'])) {
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM logins WHERE username = ?");
    $stmt->bind_param("s", $_SESSION['username']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();


        if ($password == $row["passwd"]) {
            echo "POST data: "; var_dump($_POST);

            if (isset($editedManager) && $editedManager!="") {
                echo"updating manager";
                updateAttribute("inst_info", $conn, "resp_name", $editedManager);
            }
            if (isset($editedManagerPhone) && $editedManagerPhone !="") {
                echo"updating resp_phone";
               updateAttribute("inst_info", $conn, "resp_phone", $editedManagerPhone);
            }
            if (isset($editedInstitutionName) && $editedInstitutionName !="") {
                updateAttribute("inst_info", $conn, "inst_name", $editedInstitutionName);
            }
            if (isset($editedInstitutionPhone) && $editedInstitutionPhone !="") {
                updateAttribute("inst_info", $conn, "inst_phone", $editedInstitutionPhone);
            }
            if (isset($editedEmail) && $editedEmail !="") {
                updateAttribute("inst_info", $conn, "email", $editedEmail);
            }
            if (isset($editedAddress) && $editedAddress!="") {
                updateAttribute("inst_info", $conn, "adress", $editedAddress);
            }
            if (isset($editedWebsite) && $editedWebsite !="") {
                updateAttribute("inst_info", $conn, "website", $editedWebsite);
            }
            if (isset($password) && $password!="") {
                updateAttribute("logins", $conn, "passwd", $editedPassword);
            }
            echo "<h1 style='text-align:center;color:rgba(16, 49, 120, 1);'>Modification(s) Réussie(s)</h1>";
            header("refresh:1;url=../html/homepage.php");
        } else {
            echo "<h1 style='text-align:center;color:rgba(16, 49, 120, 1);'>Modification Impossible<br>Mot de passe actuel incorrecte</h1>";
            header("refresh:1;url=../html/profile.php");
            exit();
        }}}
    
function updateAttribute($tableName, $conn, $columnName, $columnValue)
{
    $query = "UPDATE $tableName SET $columnName = ? WHERE username = ?";
    $stm = $conn->prepare($query);
    $stm->bind_param('ss', $columnValue, $_SESSION['username']);
    $stm->execute();
}

