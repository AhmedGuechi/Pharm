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
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/icon-w3.css">
    <link rel="stylesheet" href="../css/general.css"/>
    <link rel="stylesheet" href="../css/footer.css"/>
    <link rel="stylesheet" href="../css/nav.css"/>
    <link rel="icon" href="https://anpp.dz/wp-content/uploads/2023/02/cropped-icon-04-32x32.png">
    <script src="https://kit.fontawesome.com/0b19b4a096.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/homepage.css">
    <title>Accueil</title>
    <script src="../js/second.js"></script>

</head>

<body>
    <?php include '../php/nav.php' ?>



    <img src="../images/medss.jpg" alt="" id="rose" class="rose">
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
            echo "<a href='$templatePage?page=$index'>\n<img class='img' src='$photo'</a>\n";

            echo "<h5 class='date'>$date</h5>\n";

            echo "<div class='text-title'><a href='$templatePage?page=$index'>$title</a></div>\n";
            echo "</div>";
            if ($index == 2) {
                break;
            }
        }
        ?>
    </section>
    <section class="table1">
        <h1 class="title table-header title-2">Communiqués</h1>
        <button type="submit" class=" download-all" id="download-all"><a class="txtt adownload-all" href="">Télecharger la
                sélection</a></button>
        <div class="thead">
            <h3>Titre</h3>
            <h3>Télecharger</h3>
        </div>
        <ul>
            <?php
            foreach ($card_files as $index_files => $file) {
                $file_date = $file['file_date'];
                $file_path =  $file['file_path'];
                $file_title = $file['file_title'];
                echo "<li>";

                echo "<div class='clm1'>";
                echo "<label class='checkbox-label'>
            <input type='checkbox' class='checkbox'>
            </label>
            <h5 class='file-description'>$file_title</h5>";
                echo "<div class='date'>$file_date</div>
            </div>";
                echo "<div class='clm2'>
                <a href='../files/$file_path' download='$file_path'>
                <button class='button download-button'>
            <svg class='w-6 h-6' stroke='currentColor' stroke-width='1.5' viewBox='0 0 24 24' fill='none'>
                <path d='M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75' stroke-linejoin='round' stroke-linecap='round'></path>
            </svg>
            <a href='../files/$file_path' download='$file_path' class='button-text'>Télecharger</a>
        </button> </a>
        <a href='../files/$file_path' target='_blank'>
        <button class='button preview-button'>
            <svg class='w-6 h-6' stroke='currentColor' stroke-width='1.5' viewBox='0 0 24 24' fill='none'>
                <path d='M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75' stroke-linejoin='round' stroke-linecap='round'></path>
            </svg>
            <a href='../files/$file_path' target='_blank' class='button-text'>Aperçu</a>
        </button>   </a>
        <a href='../files/$file_path' download='$file_path'>    <img class='btn-image download' src='../images/download icon.png' alt=''> </a>
      </div> </li>";
            }
            ?>


            <!-- 
            <li>
                <div class="clm1">
                    <label class="checkbox-label">
                        <input type="checkbox" class="checkbox">
                    </label>
                     <h5 class="file-description">title</h5>
                    <div class="date">dd-mm-yyyy</div>
                </div>
                <div class="clm2">
                    <button class="button download-button">
                        <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none">
                            <path d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" stroke-linejoin="round" stroke-linecap="round"></path>
                          </svg>
                        <div class="button-text">Télecharger</div>
                        <button class="button preview-button">
                            <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none">
                                <path d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                            <div class="button-text">َAperçu</div>
                        </button>
                        <img class="btn-image download" src="../images/download icon.png" alt="">


            </li>
            <li>
                <div class="clm1">
                    <label class="checkbox-label">
                        <input type="checkbox" class="checkbox">
                    </label>                      <h5 class="file-description">title</h5>
                    <div class="date">dd-mm-yyyy</div>
                </div>
                <div class="clm2">
                    <button class="button download-button">
                        <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none">
                            <path d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                        <div class="button-text">Télecharger</div>
                        <button class="button preview-button">
                            <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none">
                                <path d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                            <div class="button-text">َAperçu</div>
                        </button>
                        <img class="btn-image download" src="../images/download icon.png" alt="">


            </li>
            <li>
                <div class="clm1">
                    <label class="checkbox-label">
                        <input type="checkbox" class="checkbox">
                    </label>                      <h5 class="file-description">title</h5>
                    <div class="date">dd-mm-yyyy</div>
                </div>
                <div class="clm2">
                    <button class="button download-button">
                        <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none">
                            <path d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                        <div class="button-text">Télecharger</div>
                        <button class="button preview-button">
                            <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none">
                                <path d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                            <div class="button-text">َAperçu</div>
                        </button>
                        <img class="btn-image download" src="../images/download icon.png" alt="">


            </li>
            <li>
                <div class="clm1">
                    <label class="checkbox-label">
                        <input type="checkbox" class="checkbox">
                    </label>                      <h5 class="file-description">title</h5>
                    <div class="date">dd-mm-yyyy</div>
                </div>
                <div class="clm2">
                    <button class="button download-button">
                        <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none">
                            <path d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                        <div class="button-text">Télecharger</div>
                        <button class="button preview-button">
                            <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none">
                                <path d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                            <div class="button-text">َAperçu</div>
                        </button>
                        <img class="btn-image download" src="../images/download icon.png" alt="">


            </li> -->
        </ul>

    </section>
    <section class="nos-mission  container-3">
        <h1 class="title title3">Nos Missions</h1>
        <div class="cards">
            <div class=" card-5 crd ">
                <div class="icon icon-1">
                    <img src="../images/icon-03.cardspng.png" alt="">

                </div><a href="a_propos.html">Enregistrement des Produits Pharmaceutiques</a>
            </div>
            <div class="card-6 crd">
                <div class="icon icon-2">
                    <img src="../images/icon-04cards.png" alt="">

                </div><a href="a_propos.html">
                    Homologation des Dispositifs Médicaux</a>
            </div>
            <div class="card-7  crd">
                <div class="icon icon-3">
                    <img src="../images/icon-01cards.png" alt="">

                </div> <a href="a_propos.html">Contrôle de la Qualité et de l'Expertise </a>
            </div>
        </div>
        <div><a href="../html/a_propos.php" class="txtt"> Voir plus</a></div>
    </section>
    <a href="#" class="to-top">
        <i class="fa-solid fa-caret-up"></i>
    </a>
    <?php require '../php/footer.php' ?>


    <script src="../js/homepage.js"></script>
    <script src="../js/searchbar.js"></script>
</body>

</html>