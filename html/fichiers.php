<?php 
    session_start();
    $conn=new mysqli("localhost","root","","pharmacy");
    if(mysqli_connect_errno()){
        echo "cannot connect to the database";
        exit;
    }
    $query="SELECT * FROM medicament WHERE files='" .$_POST['files'] ."'";
    $result=$conn->query($query);
    $row=$result->fetch_assoc();
    // echo $row['files'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            margin-top: 2vh;
            display: block;
            font-size: x-large;
            color: black;
            text-decoration: none;
        }
        a:hover{
            color: blue;
        }
    </style>
</head>
<body>
    <ul>

        <li><a href="<?php echo $row['files'] ."resume.pdf" ?>">Résumé de la demande</a></li>
        <li><a href="<?php echo $row['files'] ."accom.pdf" ?>" download="Lettre-d'accompagnement(<?php echo $row['nom'] ?>)">Lettre d'accompagnement</a></li>
        <li><a href="<?php echo $row['files'] ."adminInf.pdf" ?>" download="Informations-administratives(<?php echo $row['nom'] ?>)">Informations administratives</a></li>
        <li><a href="<?php echo $row['files'] ."preclin.pdf" ?>" download="Données-précliniques(<?php echo $row['nom'] ?>)">Données précliniques</a></li>
        <li><a href="<?php echo $row['files'] ."clin.pdf" ?>" download="Doncées-cliniques(<?php echo $row['nom'] ?>)"> Doncées cliniques</a></li>
        <li><a href="<?php echo $row['files'] ."notice.pdf" ?>" download="Etiquetage-et-notice(<?php echo $row['nom'] ?>)">Etiquetage et notice</a></li>
        <li><a href="<?php echo $row['files'] ."vigi.pdf" ?>" download="Pharmacovigilance(<?php echo $row['nom'] ?>)">Pharmacovigilance</a></li>
        <li><a href="<?php echo $row['files'] ."resCarac.pdf" ?>" download="Résumé-caractéristique-du-produit(<?php echo $row['nom'] ?>).pdf">Résumé caractéristique du produit</a></li>
    </ul>
</body>
</html>