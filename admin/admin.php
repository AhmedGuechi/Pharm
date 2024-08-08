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
    <link rel="icon" href="../images/icon.png" />
    <link rel="stylesheet" href="../css/roots.css" />
    <link rel="stylesheet" href="../css/general.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="../css/nav.css" />
    <link rel="stylesheet" href="../css/admin.css">
    <title>Admin</title>
</head>
<body>
    <?php require "../php/nav.php"?>
    
    <div class="option"><p class="title"><a href="../html/medicaments.php" class="down">Afficher tous les medicaments</a></p></div>
    <div class="option">
        <p class="title">Changer le status d'un dossier : </p>
        <form action="../php/setstatus.php" method="post">
            <p class="nb">*Si le id entre est faut rien ne ce passera</p>
            <input type="text" name="id" id="input-id" placeholder="Id du medicament">
            <select name="status" id="">
                <option value="" selected disabled >-En attente-</option>
                <option value="Etape administrative">Etape administrative</option>
                <option value="Etape Analytique">Etape Analytique</option>
                <option value="Etape clinique">Etape clinique</option>
                <option value="Confirme">Confirme</option>
                <option value="Refuse">Refuse</option>
            </select>
            <input type="submit" name="" id="">
        </form>
    </div>
    
    <!-- <?php require "../php/footer.php"?> -->
</body>
</html>