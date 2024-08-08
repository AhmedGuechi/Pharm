
<?php
@$My_Connection = new mysqli('localhost', 'root', '', 'pharmacy');
if (mysqli_connect_errno()) {
echo 'Error: Could not connect to database. Please try again later.';
exit;
}




// define variables and set to empty values
$instName = $email = $respphone = $respName = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $instName = test_input($_POST["instName"]);
  $email = test_input($_POST["Email"]);
  $website = test_input($_POST["website"]);
  $respName = test_input($_POST["respName"]);
  $respPhone = test_input($_POST["respPhone"]);
  $instPhone = test_input($_POST["instTel"]);
  $adress = test_input($_POST["adress"]);
  $fiscNum = test_input($_POST["fiscNum"]);
  $passwd = test_input($_POST["passwd"]);
  $confpasswd = test_input($_POST["confpasswd"]);
}
$username=str_replace(' ','_',strtolower($instName));
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$isItIn="SELECT * FROM inst_info WHERE inst_name = '" .$instName . "'";
$isItIn= $My_Connection->query($isItIn);


if($isItIn->num_rows == 0){ 
  $welcome = "<h1 style='text-align:center'>Merci pour votre inscription</h1>
  <h3 style='text-align:center'>Votre nom d'utilisateur de connexion est : ";
  $welcome .= $username;
  $welcome .= "</h3>";

  echo $welcome;

  $columns="inst_name,resp_name,resp_phone,email,inst_phone,adress,website,fiscal_id,username";
  $querie="INSERT INTO inst_info VALUES('$instName','$respName','$respPhone','$email','$instPhone','$adress','$website','$fiscNum','$username')";
  $My_Connection->query($querie);
  $querie="INSERT INTO logins VALUES('$username','$passwd')";
  $My_Connection->query($querie);
  //checking if the username exists

  header("refresh:3;url=../html/login.php");
}else{
  $welcome = "<h1 style='text-align:center;font-size:3rem'>Votre institution est deja enregistre</h1>
  <h3 style='text-align:center'>Veuillez vous connectez";
  // $welcome .= $username;
  $welcome .= "</h3>";
  echo $welcome;
  header("refresh:1;url=../html/login.php");
}






?>

