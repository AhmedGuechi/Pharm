<?php
session_start();



$cnx=new mysqli("localhost","root","","pharmacy");
if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database. Please try again later.';
    exit;
}

$username=$_POST["identifiant"];
$password=$_POST["passwd"];


if($username=='anpp_admin' && $password=='administration2024'){
    $_SESSION['username']="anpp_admin";
    $_SESSION['passwd']='1';
    header("location:../admin/admin.php");
    exit;
}
$_SESSION['username']='';
$_SESSION['passwd']='0';

$isIn="SELECT * FROM logins WHERE username = '" .$username ."'";
$result = $cnx->query($isIn);
if ($result->num_rows == 1) {
    $isIn="SELECT * FROM logins where username='" .$username ."'";
    $result = $cnx->query($isIn);
    $row=$result->fetch_assoc();
    $_SESSION['username']=$username;
    if($password==$row["passwd"]){
        echo "<h1 style='text-align:center; color:rgba(16, 49, 120, 1);'>Bienvenue!</h1>";
        $_SESSION['passwd']='1';
        header("refresh:1;url=../html/homepage.php");
    }else{
        // echo "mot de passe incorrecte<br>Veuillez vous reconnectez";
        header("location:../html/login.php");
    }
}else{
    // echo "Nom d'utilisateur errone ou non existant";
    header("location:../html/login.php");
}

// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }


?>