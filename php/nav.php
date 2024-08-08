<nav>
    <div class="icon-container">
        <a href="../html/homepage.php"><img src="../images/anpp.png" class="logo"></a>
    </div>
    <div class="nav">
        <div class="upper-nav">
            <div class="login" onclick="location.href='../html/login.php'" id="loginProfile"><i class="material-icons w3-large">person</i><a href="../html/login.php"> Login</a></div>
            <?php 
                        // $profile="<script>";
                        // $profile .="let loginCard=document.getElementById('loginProfile');";
                        // $profile .='loginCard.innerHTML="';
                        // if(isset($_SESSION['admin'])){
                    if(isset($_SESSION['username'])){
                    $profile = "<script>";
                    $profile .= "let loginCard=document.getElementById('loginProfile');";
                    $profile .= "loginCard.innerHTML='";
                    // if(isset($_SESSION['admin'])){

                        //     $profile .=$_SESSION['username'];
                        // }
                        
                        if($_SESSION['username']=='anpp_admin'){
                            $profile.="<form action='../php/disconnect.php' method='post'><input type='submit' value='Deconnecte' id='discon'></form>";
                            $profile .="';";
                            $profile .='loginCard.setAttribute("onclick","");';
                            
                            $profile .="</script>";
                            $profile.="<style>#discon{border:none;background-color:inherit;color:red;font-weight:600;cursor:pointer;}</style>";
                        }else{
                            $profile .=$_SESSION['username'];
                            $profile .="';";
                            $profile .='loginCard.setAttribute("onclick","location.href=' ."'../html/profile.php'" .'")';
                            $profile .="</script>";
                        }
                        echo $profile;
                    }
                
            
            ?>

                <div class="search"  style="display: none;">
                    <form action="../html/searches.php" method="post">
                    <input placeholder="Search a product" type="text" name="searching" id="search-input">
                    <button id="search-btn" type="submit" class="material-icons w3-large">search</i></button>
                    </form>
                </div>

        </div>
        <div class="lower-nav">
            <div id="complete"></div>
            <a class="item" href="../html/homepage.php">Home</a>
            <a class="item" href="../html/actualiltes.php">Actualités</a>
            <div class="item">
                Documents
                <div class="dropdown">
                    <div>
                        <a href="../html/Textes_Reglementaires.php">Textes Réglementaires</a>
                        <a href="../html/informations.php">Information Médicales</a>
                        <a href="../html/telechargement.php">Téléchargements</a>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_SESSION['username']) && isset($_SESSION['passwd']) && $_SESSION['passwd'] == '1' && $_SESSION['username'] != "anpp_admin") {
                echo "<div class='item'>
                                Enregistrement de produits
                                <div class='dropdown'>
                                    <div>
                                        <a href='../html/submis.php'>Soumettre un dossier</a>
                                        <a href='../html/submissions.php'>Dossier en cours</a>
                                    </div>
                                </div>
                            </div>";
            }
            ?>
            <!-- <a class="item" href="Textes_Reglementaires.php">Textes Réglementaires</a> -->
            <a class="item" href="../html/contact.php">Contact</a>
            <div class="item"><a href="../html/a_propos.php">À Propos</a>

                <!-- <div class="dropdown">
                    <div>
                        <a href="../html/organigramme.php">Organigramme</a>
                        <a href="../html/a_propos.php">Nos missions</a>

                    </div> -->
                </div>
            </div>

            <!-- <div class="underline"></div> -->
        </div>
    </div>
</nav>

<div class="sideMenu1" id="leftMenu">
    <div><a href="#">Actualités</a></div>

    <div><a>Documents</a><i class="arrow" onclick="makeChildsAppear('a')"></i></div>
    <div id="a" class="nn appear">
        <div><a href="../html/Textes_Reglementaires.php">Textes Réglementaires</a></div>
        <div><a href="../html/informations.php">Information Médicales</a></div>
        <div><a href="../html/telechargement.php">Téléchargement</a></div>
    </div>

    <!-- <div><a>Dispositifs medicales</a><i class="arrow" onclick="makeChildsAppear('b')"></i></div>
        <div id="b" class="nn appear">
          <div><a href="Textes_Reglementaires.php">Textes Reglementaires</a></div>
        </div>
  
        <div><a href="Textes_Reglementaires.php">Textes Reglementaires</a>
        </div> -->

    <div><a href="contact.php">Contact</a>
    </div>
<div><a href="../html/a_propos.php">À Propos</a></div>
    <!-- <div>A propos<i class="arrow" onclick="makeChildsAppear('e')"></i></div> -->
    <!-- <div id="e" class="nn appear">
        <div><a href="a_propos.php">Nos Missions</a></div>
        <div><a href="organigramme.php">Organigramme</a></div>
    </div> -->

</div>

<div class="bottom-nav">
    <div class="menu">
        <div class="menu-icon" onclick="MenuAppear(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </div>
    <div class="line vertical-line"></div>
    <div class="home w3-xlarge"><a href="homepage.php"><i class="fa fa-home"></i></a></div>

    <?php
    echo "
            <script>
                medLoged();
            </script>"
    ?>

</div>