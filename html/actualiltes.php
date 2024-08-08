<?php 
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ANPP | Page Principale</title>
    <script src="../js/second.js"></script>
    <meta name="description" card="this is the description.">
    <link rel="stylesheet" href="../css/homepage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/icon-w3.css">
    <link rel="stylesheet" href="../css/general.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="../css/nav.css" />
    <link rel="icon" href="https://anpp.dz/wp-content/uploads/2023/02/cropped-icon-04-32x32.png">
    <script src="https://kit.fontawesome.com/0b19b4a096.js" crossorigin="anonymous"></script>
    <title>Accueil</title>
    <script src="../js/second.js"></script>

</head>

<body>
<?php include '../php/nav.php' ?>


    

    <h1 class="title title-1">Actualités</h1>
    <section class=" actuality-card">
    <?php include_once "../php/config.php";
        require('../php/connectt.php');
        foreach ($card as $index => $card) {
            $photo = $path . $card['news_photo'];
            $date = $card['news_date'];
            $title = $card['news_title'];
            $a_href = "<a href='homepage.php'>";
            $templatePage = "news_template.php";

            //HTML for each actuality card
            echo "<div class='card card-$index'>\n";
            echo "<a href='$templatePage?page=$index'><img class='img' src='$photo'</a>\n";

            echo "<h5 class='date'>$date</h5>\n";

            echo "<div class='text-title'><a href='$templatePage?page=$index'>$title</a></div>\n";
            echo "</div>";
        }
        ?>
    
    
    
    
    
    
    
    <!-- <div class="card card-1">
            <a href="homepage.html"> <img src="../images/PHOTO1.jpg"></a>
            <div class=" imgtxt text">
                <div class="txt button-1"><a href="homepage.html">AFRISUMMIT2023</a></div>
                <div class="txt button-2"><a href="homepage.html">ANPP</a></div>
                <div class="txt button-3"><a href="homepage.html">PHARMAREG</a></div>
            </div>
            <div class="date">
                <h5 class="date">08-11-2023</h5>
            </div>
            <div class="text-title"><a href="homepage.html">Réunion ANPP-PNUD:</a></div>
        </div>
        <div class="card card-2">
            <a href="homepage.html"> <img src="../images/photo2.jpg"> </a>
            <div class="imgtxt text">
                <div class="txt button-1"><a href="homepage.html">AFRISUMMIT2023</a></div>
                <div class="txt button-2"><a href="homepage.html">ANPP</a></div>
                <div class="txt button-3"><a href="homepage.html">PHARMAREG</a></div>
            </div>
            <div class="date">
                <h5 class="date">31-10-2023</h5>
            </div>
            <div class="text-title"><a href="homepage.html">Avis de consultation pour le choix d’un commissaire aux comptes</a></div>
        </div>
        <div class="card card-3">
            <a href="homepage.html"> <img src="../images/photo3-.jpg"> </a>
            <div class="imgtxt text">
                <div class="txt button-1"><a href="homepage.html">AFRISUMMIT2023</a></div>
                <div class="txt button-2"><a href="homepage.html">ANPP</a></div>
                <div class="txt button-3"><a href="homepage.html">PHARMAREG</a></div>
            </div>
            <div class="date">
                <h5 class="date">30-10-2023</h5>
            </div>
            <div class="text-title"><a href="homepage.html">L’interview du Dr Chérif DELIH, DG de l’ANPP publié sur les colonnes du journal HORIZONS du 30/10/2023:</a></div>
        </div>
        <div class="card card-4">
            <a href="homepage.html"> <img src="../images/photo4.jpg"> </a>
            <div class="imgtxt text">
                <div class="txt button-1"><a href="homepage.html">AFRISUMMIT2023</a></div>
                <div class="txt button-2"><a href="homepage.html">ANPP</a></div>
                <div class="txt button-3"><a href="homepage.html">PHARMAREG</a></div>
            </div>
            <div class="date">
                <h5 class="date">30-10-2023</h5>
            </div>
            <div class="text-title"><a href="homepage.html">L’ANPP au Pharma Reg AfriSummit 2023.</a></div>
        </div>
        <div class="card card-4">
            <a href="homepage.html"> <img src="../images/photo4.webp"> </a>
            <div class="imgtxt text">
                <div class="txt button-1"><a href="homepage.html">AFRISUMMIT2023</a></div>
                <div class="txt button-2"><a href="homepage.html">ANPP</a></div>
                <div class="txt button-3"><a href="homepage.html">PHARMAREG</a></div>
            </div>
            <div class="date">
                <h5 class="date">32-11-2023</h5>
            </div>
            <div class="text-title"><a href="homepage.html">L’ANPP au Pharma Reg IV AfriSummit 2023.</a></div>
        </div>
        <div class="card card-4">
            <a href="homepage.html"> <img src="../images/photo6.jpg"> </a>
            <div class="imgtxt text">
                <div class="txt button-1"><a href="homepage.html">AFRISUMMIT2023</a></div>
                <div class="txt button-2"><a href="homepage.html">ANPP</a></div>
                <div class="txt button-3"><a href="homepage.html">PHARMAREG</a></div>
            </div>
            <div class="date">
                <h5 class="date">10-10-2023</h5>
            </div>
            <div class="text-title"><a href="homepage.html">L’ANPP au forum des industries arabes</a></div>
        </div> -->

    </section>
    <a href="#" class="to-top">
        <i class="fa-solid fa-caret-up"></i>
    </a>
    <?php require '../php/footer.php' ?>


</body>
<script src="../js/homepage.js"></script>

</html>