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
    <script src="../js/second.js"></script>
    <link rel="stylesheet" href="../css/submissions.css">
    <title>Document</title>
</head>
<body>
    <?php require "../php/nav.php"?>    
    <h1 style="text-align: center;" >Voici les produits que vous avez soumis</h1>
    <?php 
        $conn = new mysqli("localhost","root","","pharmacy");
        if(mysqli_connect_errno()){
            echo "cannot connect to the database";
            exit;
        }

        $all='';
        $query="SELECT * FROM medicament WHERE username = '" .$_SESSION['username'] ."'";
        $result=$conn->query($query);
        if($result->num_rows>0){
            $all.="
                <table>
                    <thead>
                        <tr>
                            <th>Nom du medicament</th>
                            <th>Id</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
            ";
        while($row=$result->fetch_assoc()){
            $all.="
                        <tr>
                            <td>" .$row['nom'] ."</td>
                            <td>" .$row['id'] ."</td>
                            <td>" .$row['status'] ."</td>
                        </tr>   
            ";
        }
        $all.="
        </tbody>
        </table>
        ";
        echo $all;
        }else{
            echo "<div class='none'>Aucun dossier soumis</div>";
        }
    ?>
    
    <strong>* Si le un medicament a ete refuse, contacter nous.</strong>

    <?php require "../php/footer.php"?>    
</body>
</html>