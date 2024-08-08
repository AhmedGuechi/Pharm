<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription-ANPP-</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/icon-w3.css">
    <link rel="icon" href="https://anpp.dz/wp-content/uploads/2023/02/cropped-icon-04-32x32.png">
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <link rel="stylesheet" href="../css/general.css"/>
    <link rel="stylesheet" href="../css/footer.css"/>
    <link rel="stylesheet" href="../css/nav.css" />
    <link rel="stylesheet" href="../css/registration.css">
    <script src="../js/second.js"></script>
    <script src="../js/regis.js"></script>
  </head>
<body>
    <?php include '../php/nav.php' ?>
    
      <section>
        <h1 style="text-align: center;">S'inscrire</h1>
        <form id="regisform" action="../php/welcome.php" onsubmit="return check(event);" method="post">
            <label>Nom de l'institution</label>
            <input type="text" name="instName">
            <small></small>
            <h3>Responsable (PDG/DG)</h3>
            <label>Nom et prenom</label>
            <input type="text" name="respName">
            <small></small>
            <label>Numero de telephone</label>
            <input type="tel" name="respPhone" maxlength="10">
            <small></small>
            <h3>Information sur l'institution</h3>
            <label>Email</label>
            <input type="email" name="Email">
            <small></small>
            <label>Telephone de contact officiel</label>
            <input type="tel" maxlength="9" name="instTel">
            <small></small>
            <label>Adresse</label>
            <input type="text" name="adress">
            <small></small>
            <label>Site web</label>
            <input type="text" name="website">
            <small></small>
            <label>Numero d'identification fiscale</label>
            <input type="text" maxlength="15" name="fiscNum">
            <small></small>
            <h3>Compte</h3>
            <label>Mot de passe</label>
            <input type="password" minlength="8" name="passwd">
            <small></small>
            <label>Confirmer le mot de passe</label>
            <input type="password" minlength="8" name="confpasswd">
            <small></small>
            <!-- <div  name="" value="Confirmer" onclick="check()">Confirmer</div> -->
            <input type="submit" value="Confirmer">
        </form>
      </section>

    
      <?php include '../php/footer.php' ?>

      
</body>1
</html>