<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Log-in ANPP</title>
    <script src="../js/log.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    <div class="left-login-container">
        <div class="left-login">
            <img src="../images/anpp.png" id="logo">
        </div>
    </div>
    <div class="right-login">
        <a href="homepage.php"><i class="fa fa-angle-left"></i> Retour</a>
        <img class="logo-1" src="../images/anpp.png">
        <h2>Vous avez deja un compte sur le nouveau site ANPP ?</h2>
        <h2>Connectez vous à votre espace adhérent</h2>
        <form action="../php/log.php" method="post" onsubmit="return check();">
            <label>Identifiant ou adresse e-mail</label>
            <input type="text" name="identifiant" id="usernIn">
            <small id="usern"></small>
            <label>Mot de passe</label>
            <input type="password" name="passwd" id="passw">
            <small>
                <?php
                    if(isset($_SESSION['passwd']) && $_SESSION['passwd']=='0'){
                        echo "Nom d'utilisateur ou mot de passe incorrecte";
                    }else{

                    }
                    ?>
            </small>
            <input type="checkbox" value="" name="" style="display: none;">
            <label style="display: none;">Se souvenir de moi</label>
            <button type="submit">Connexion</button>

            <a href="" style="display: none;">Mot de passe perdu ?</a>
        </form>
        <p>Vous n'avez pas de compte? <a href="registration.php">Creer un compte</a></p>
    </div>

    <?php
        if(isset($_SESSION['passwd']) && $_SESSION['passwd']=='0'){
            echo "<script>
            document.getElementById('passw').classList.add('unvalid');"
            ."document.getElementById('usernIn').classList.add('unvalid')"
            ."</script>";
            $_SESSION['passwd']='2';
            // unset($_SESSION['username']);
        }else{
            echo "<script>
            document.getElementById('passw').classList.remove('unvalid');"
            // ."document.getElementById('usernIn').setAttribute('value','" .$_SESSION['username'] ."');"
            ."document.getElementById('usernIn').classList.remove('valid')"
            ."</script>";
            }
        ?>
        <?php if(isset($_SESSION['username']) &&  $_SESSION['username']!=''){
            // $style= "style='text-align:center;'";
            echo "
            <script>document.body.innerHTML='<h1>You are already connected</h1>'</script>
            <style>h1{text-align:center;width:100%}</style>";
            header("refresh:2;url=../html/profile.php");
        }?>
</body>
</html>

