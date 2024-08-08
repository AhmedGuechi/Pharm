<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../images/icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/icon-w3.css">
    <link rel="stylesheet" href="../css/organigramme.css"/>
    <link rel="stylesheet" href="../css/roots.css" />
    <link rel="stylesheet" href="../css/general.css"/>
    <link rel="stylesheet" href="../css/nav.css" />   
    <script src="../js/second.js"></script>

    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="icon" href="https://anpp.dz/wp-content/uploads/2023/02/cropped-icon-04-32x32.png">
    <title>Organigramme-ANPP</title>
</head>

<body>

<?php include '../php/nav.php' ?>


    

    <div class="main">
        <h2>Organigramme</h2>
        <ul>
            <li>Décret Exécutif N° 19-190 DU 30 Choual 1440 Correspondant au 03 Juillet 2019, Modifié et Complété,
                Fixant les Missions, l'Organisation et le Fonctionnement de l'Agence Nationale des Produits
                Pharmaceutique.</li>
            <li>Arrêté du 28 Dhou El Kaâda 1443 Correspondant au 28 Juin 2022 Fixant l'Organisation Interne de l’Agence
                Nationale des Produits Pharmaceutiques.</li>



        </ul>
        <iframe class="pdf" src="https://anpp.dz/wp-content/uploads/2022/10/Organigramme.pdf" frameborder="0"></iframe>
        <a href="https://anpp.dz/wp-content/uploads/2022/10/Organigramme.pdf" download="Organigramme.pdf" target="_blank" class="télecharger">Télecharger par-ici! </a>
    </div>



    <?php require '../php/footer.php' ?>






</body>





</html>