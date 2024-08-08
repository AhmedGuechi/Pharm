<?php
session_start();
if(isset($_SESSION['username'])){
  

  if($_SESSION['username']=="anpp_admin"){
    header("location:../admin/admin.php");
  }
  $conn = new mysqli("localhost", "root", "", "pharmacy");
  if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database. Please try again later.';
    exit;
  }
  if (isset($_SESSION['username'])) {
    $query = "SELECT * FROM inst_info WHERE username ='" . $_SESSION['username'] . "'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    
  }
}else{
  header("location:../html/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="../css/icon-w3.css">
  <link rel="stylesheet" href="../css/profile.css" />
  <link rel="icon" href="../images/icon.png" />
  <link rel="stylesheet" href="../css/roots.css" />
  <link rel="stylesheet" href="../css/general.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/nav.css" />
  <link rel="icon" href="https://anpp.dz/wp-content/uploads/2023/02/cropped-icon-04-32x32.png">
  <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->

  <!-- <script src="../js/log.js"></script> -->
  <title>Profile</title>
</head>


<body>

  <?php require "../php/nav.php" ?>
  <!-- profile section starts -->

  <div class="container">
    <div class="main">
      <!-- <div class="row"> -->
      <div class="col-md-4 mt-1">
        <div class="card text-center sidebar">
          <div class="profile_settings">
            <img src="../images/profile.png" class="rounded-circle" width="150" placeholder="">
            <div class="mt-3">
              <h3><?php echo $row['inst_name']; ?></h3>
              <form action="../php/disconnect.php" method="post">
                <button type="submit" id="logout-btn">Déconnecter</button>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-8 mt-1">
        <form method="post" action="../php/editprofile.php" class="edit-form">
          <div class="card mb-3 content">
            <h1 class="m-3 pt-3">Informations du responsable</h1>
            <div class="card-body">
              <div class="row" data-input="manager">
                <div class="col-md-3">
                  <h5>Nom du responsable</h5>
                </div>
                <div class="col-md-9 text-secondary">
                  <?php echo $row['resp_name'] ?>
                  <!-- <a href="" class="edit-btn"><img src="../images/edit.png" alt="Modifier" id="edit-button"></a> -->
                </div>
                <input type="text" name="manager" id="manager" placeholder="Changer le nom du gérant" onsubmit="return checkname();">
                <input type="submit" id="confirmation-btn" />
              </div>
              <hr>
              <div class="row" data-input="manager">
                <div class="col-md-3">
                  <h5>Numéro de téléphone</h5>
                </div>
                <div class="col-md-9 text-secondary">
                  <?php echo $row['resp_phone']?>
                  <!-- <a href="" class="edit-btn"><img src="../images/edit.png" alt="Modifier" id="edit-button"></a> -->
                </div>
                <input type="text" name="manager-phone" id="manager-phone" placeholder="Changer le numéro du gérant">
                <input type="submit" id="confirmation-btn" />
              </div>
              <hr>
              <h1 class="m-3 pt-3">Informations sur l'institution</h1>
              <div class="card-body">
                <div class="row" data-input="institution-name">
                  <div class="col-md-3">
                    <h5>Nom de l'institution</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    <?php echo $row['inst_name']; ?>
                    <!-- <a href="" class="edit-btn"><img src="../images/edit.png" alt="Modifier" id="edit-button"></a> -->
                  </div>
                  <input type="text" name="institution-name" id="institution-name" placeholder="Changer le nom de votre intitution" onsubmit="return checkInsname();">
                  <input type="submit" id="confirmation-btn" />
                </div>
                <hr>


                <div class="row" data-input="phone-number">
                  <div class="col-md-3">
                    <h5>Téléphone du contact officiel</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    <?php echo $row['inst_phone'] ?>
                    <!-- <a href="" class="edit-btn"><img src="../images/edit.png" alt="Modifier" id="edit-button"></a> -->
                  </div>
                  <input type="number" name="institution-phone" id="institution-phone" placeholder="Changer le numéro de téléphone officiel" onsubmit="return checkPhone();">
                  <input type="submit" id="confirmation-btn" />
                </div>
                <hr>
                <div class="row" data-input="address">
                  <div class="col-md-3">
                    <h5>Addresse</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    <?php echo $row['adress'] ?>
                    <!-- <a href="" class="edit-btn"><img src="../images/edit.png" alt="Modifier" id="edit-button"></a> -->
                  </div>
                  <input type="text" name="address" id="address" placeholder="Changer votre addresse" onsubmit="return checkAdress();">
                  <input type="submit" id="confirmation-btn" />
                </div>
                <hr>
                <div class="row" data-input="website">
                  <div class="col-md-3">
                    <h5>Site web</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    <?php echo $row['website'] ?>
                    <!-- <a href="" class="edit-btn"><img src="../images/edit.png" alt="Modifier" id="edit-button"></a> -->
                  </div>
                  <input type="text" name="website" id="website" placeholder="Changer le lien de votre site web">
                  <input type="submit" id="confirmation-btn" />
                </div>
                <hr>
                <!-- Add more rows and hr tags as needed -->
              </div>
            </div>



            <div class="card mb-3 content">
              <h1 class="m-3">Compte</h1>
              <div class="card-body">
                <div class="row" data-input="email-input">
                  <div class="col-md-3">
                    <h5>Addresse email</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    <?php echo $row['email'] ?>
                    <!-- <a href="" class="edit-btn"><img src="../images/edit.png" alt="Modifier" id="edit-button"></a> -->
                  </div>
                  <input type="email" name="email-input" id="email-input" placeholder="Changer votre addresse-email" onsubmit="return checkEmail();">
                  <input type="submit" id="confirmation-btn" />
                </div>
                <hr>
                <div class="row" data-input="password">
                  <div class="col-md-3">
                    <h5>Mot de passe</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    Changer votre mot de passe
                    <!-- <a href="" class="edit-btn"><img src="../images/edit.png" alt="Modifier" id="edit-button"></a> -->
                  </div>
                  <input type="password" name="new-password" id="new-password" placeholder="Nouveau mot de passe" onsubmit="return checkPasswds();">
                  <input type="password" name="confirmed-password" id="confirmed-password" placeholder="Confirmer le mot de passe" onsubmit="return checkPasswds();">
                  <input type="submit" id="confirmation-btn" />
                </div>
                <hr>
                <!-- Add more rows for project details -->
              </div>
            </div>




            <div class="card mb-3 content edit-confirmation">
              <h1 class="m-3">Confirmer votre mot de passe actuel</h1>
              <div class="card-body">
                <div class="row" data-input="confirmation-password">
                  <div class="col-md-3">

                    <input type="password" name="confirmation-password" id="confirmation-password" placeholder="Saisir votre mot de passe actuel" onsubmit="return checkPasswd();">
                    <input type="submit" name="edit-confirmation-btn"id="edit-confirmation-btn" />


                    <!-- Add more rows for project details -->
                  </div>
                </div>
        </form>
      </div>
      <!-- </div> -->
    </div>
  </div>
  </div>
  </div>









  <?php require '../php/footer.php' ?>
  <script src="../js/second.js"></script>
  <script src="../js/log.js"></script>
  <script src="../js/profile.js"></script>
  <!-- <script src="../js/regis.js"></script> -->

<!-- <?php

//   if(!isset($_SESSION['username'])){
//     echo "<script>funtion clearbody(){document.body.innerHTML='<h1>You are not connected</h1>'}</script>
//     <style>h1{text-align:center;width:100%}</style>";
//     header("refresh:2;url=../html/login.php");
// }

?> -->
</body>

</html>