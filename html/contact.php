<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="../css/icon-w3.css">
  <link rel="stylesheet" href="../css/contact.css" />
  <link rel="icon" href="../images/icon.png" />
  <link rel="stylesheet" href="../css/roots.css" />
  <link rel="stylesheet" href="../css/general.css" />
  <script src="../js/second.js"></script>
  
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/nav.css" />
  <link rel="icon" href="https://anpp.dz/wp-content/uploads/2023/02/cropped-icon-04-32x32.png">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <title>Contactez-nous-ANPP</title>
</head>


<body>

<?php include '../php/nav.php' ?>


 


  <div class="main">
    <div class="main_top">
      <div class="left_part">
        <h2>Comment pouvons-nous vous aider?</h2>
        <p>N'hésitez pas à nous contacter pour vous renseigner sur tout ce que vous voulez.</p>
      </div>
      <div class="contact_info">
        <h3><a href="tel:+213-23-36-75-22"><i class="material-icons">phone</i>(+213)23 36 75 22</a></h3>
        <p>Dimanche- Jeudi : 9h00-16h00</p>
        <a class="email" href="mailto:direction_generale@anpp.dz"> direction_generale@anpp.dz</a>
        <hr>
        <a href="https://web.facebook.com/ANPP.AGENCE?_rdc=1&_rdr" title="Facebook" target="_blank"
          class="fa fa-facebook"></a>
        <a href="https://dz.linkedin.com/company/agence-nationale-des-produits-pharmaceutiques" title="Linkedin"
          target="_blank" class="fa fa-linkedin"></a>
      </div>
    </div>
    <div id="main_form">
      <h2>Remplissez le formulaire si vous avez des questions</h2>
      <form action="../php/contact2.php" method="post" id="main_form1">
        <label for="surname" id="nom">Nom </label>
        <input type="text" name="surname" id="surname" size="15" autocomplete="off" />
        <p class="hidden-text"></p>
        <label for="firstname">Prénom </label>
        <input type="text" name="firstname" id="firstname" size="15" autocomplete="off" />
        <p class="hidden-text"></p>
        <label for="email">Email </label>
        <input type="email" name="email" id="email" autocomplete="off" />
        <p class="hidden-text"></p>
        <label for="objet">Objet </label>
        <input type="text" name="object" id="objet" autocomplete="off" />
        <p class="hidden-text"></p>
        <label for="message">Message (facultatif) </label>
        <textarea type="text" name="message" rows="4" cols="100" id="message" autocomplete="off"></textarea>
        <input type="submit" name="submit" id="button" />
      </form>
    </div>
  </div>

  <?php require '../php/footer.php' ?>





<script src="../js/contact.js"></script>
</body>





</html>