<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/icon-w3.css">
    <link rel="stylesheet" href="../css/general.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="../css/nav.css" />
    <link rel="stylesheet" href="../css/submis.css">
    <title>Document</title>
    <script src="../js/submis.js"></script>
    <script src="../js/second.js"></script>
</head>
<body>
    <?php require "../php/nav.php"?>
    
    
    <h3>Veuillez remplire ce formulaire pour l'inscription du medicament</h3>
    <form id="submis" action="../php/submition.php" method="post" enctype="multipart/form-data" onsubmit="return checking();">
        <input type="text" name="name" placeholder="Nom du medicament">
        <input type="text" name="type" placeholder="Categorie">
        <input type="text" name="form" placeholder="Forme">
        <input type="text" name="dose" placeholder="Dosage">
        
        <h3>Veuillez soumettre les fichiers suivants :</h3>
        
        <strong style="color: red;font-size:smaller;">* All files must be pdf (.pdf)<br></strong>
        
        <label for="">Résumé de la demande</label>
        <input type="file" name="resume" id="resume" >
        <small class="resume unvalid"></small>
        
        <label for="">Lettre d'accompagnement</label>
        <input type="file" name="accom" id="accom" >
        <small class="resume unvalid"></small>
        
        <label for="">Informations administratives</label>
        <input type="file" name="adminInf" id="adminInf" >
        <small class="resume unvalid"></small>
        
        <label for="">Données précliniques</label>
        <input type="file" name="preclin" id="preclin" >
        <small class="resume unvalid"></small>
        
        <label for="">Doncées cliniques</label>
        <input type="file" name="clin" id="clin" >
        <small class="resume unvalid"></small>
        
        <label for="">Etiquetage et notice</label>
        <input type="file" name="notice" id="notice" >
        <small class="resume unvalid"></small>
        
        <label for="">Pharmacovigilance</label>
        <input type="file" name="vigi" id="vigi" >
        <small class="resume unvalid"></small>
        
        <label for="">Résumé caractéristique du produit</label>
        <input type="file" name="resCarac" id="resCarac" >
        <small class="resume unvalid"></small>
        
        <input type="submit" value="Valider">
    </form>
    
    
    <?php require "../php/FOOTER.php"?>
    <!-- <script src="../js/submis.js"></script> -->
</body>
</html>