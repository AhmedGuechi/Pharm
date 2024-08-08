<?php 
    session_start();
    $conn=new mysqli("localhost","root","","pharmacy");
    if(mysqli_connect_errno()){
        echo "cannot connect to the database";
        exit;
    }

    $all="
    <table>
    <thead>
        <tr>
            <th>Nom du medicament</th>
            <th>Nom du laboratoire</th>
            <th>Id</th>
            <th>Status</th>
            <th>Fichiers</th>
        </tr>
    </thead>
    <tbody>
    ";

    
    $query="SELECT * FROM medicament WHERE status='En attente'";
    $result=$conn->query($query);
    while($row=$result->fetch_assoc()){
        $all.="
                    <tr>
                        <td>" .$row['nom'] ."</td>
                        <td>" .str_replace('_',' ',strtolower($row['username'])) ."</td>
                        <td>" .$row['id'] ."</td>
                        <td>" .$row['status'] ."</td>
                        <td><form action='fichiers.php' method='post'><input type='text' id='files' style='display:none;' name='files' value='" .$row['files'] ."'><input type='submit' name='submit' value='Afficher'></form></td>
                    </tr>   
        ";
    }


    $query="SELECT * FROM medicament WHERE status='Etape administrative'";
    $result=$conn->query($query);
    while($row=$result->fetch_assoc()){
        $all.="
                    <tr>
                        <td>" .$row['nom'] ."</td>
                        <td>" .str_replace('_',' ',strtolower($row['username'])) ."</td>
                        <td>" .$row['id'] ."</td>
                        <td>" .$row['status'] ."</td>
                        <td><form action='fichiers.php' method='post'><input type='text' id='files' style='display:none;' name='files' value='" .$row['files'] ."'><input type='submit' name='submit' value='Afficher'></form></td>

                    </tr>   
        ";
    }
    
    $query="SELECT * FROM medicament WHERE status='Etape Analytique'";
    $result=$conn->query($query);
    while($row=$result->fetch_assoc()){
        $all.="
                    <tr>
                        <td>" .$row['nom'] ."</td>
                        <td>" .str_replace('_',' ',strtolower($row['username'])) ."</td>
                        <td>" .$row['id'] ."</td>
                        <td>" .$row['status'] ."</td>
                        <td><form action='fichiers.php' method='post'><input type='text' id='files' style='display:none;' name='files' value='" .$row['files'] ."'><input type='submit' name='submit' value='Afficher'></form></td>

                    </tr>   
        ";
    }

    $query="SELECT * FROM medicament WHERE status='Etape clinique'";
    $result=$conn->query($query);
    while($row=$result->fetch_assoc()){
        $all.="
                    <tr>
                        <td>" .$row['nom'] ."</td>
                        <td>" .str_replace('_',' ',strtolower($row['username'])) ."</td>
                        <td>" .$row['id'] ."</td>
                        <td>" .$row['status'] ."</td>
                        <td><form action='fichiers.php' method='post'><input type='text' id='files' style='display:none;' name='files' value='" .$row['files'] ."'><input type='submit' name='submit' value='Afficher'></form></td>

                    </tr>   
        ";
    }

    $query="SELECT * FROM medicament WHERE status='Confirme'";
    $result=$conn->query($query);
    while($row=$result->fetch_assoc()){
        $all.="
                    <tr>
                        <td>" .$row['nom'] ."</td>
                        <td>" .str_replace('_',' ',strtolower($row['username'])) ."</td>
                        <td>" .$row['id'] ."</td>
                        <td>" .$row['status'] ."</td>
                        <td><form action='fichiers.php' method='post'><input type='text' id='files' style='display:none;' name='files' value='" .$row['files'] ."'><input type='submit' name='submit' value='Afficher'></form></td>
                    </tr>   
        ";
    }
    
    $query="SELECT * FROM medicament WHERE status='Refuse'";
    $result=$conn->query($query);
    while($row=$result->fetch_assoc()){
        $all.="
                    <tr>
                        <td>" .$row['nom'] ."</td>
                        <td>" .str_replace('_',' ',strtolower($row['username'])) ."</td>
                        <td>" .$row['id'] ."</td>
                        <td>" .$row['status'] ."</td>
                        <td><form action='fichiers.php' method='post'><input type='text' id='files' style='display:none;' name='files' value='" .$row['files'] ."'><input type='submit' name='submit' value='Afficher'></form></td>
                    </tr>   
        ";
    }

    $all.="
        </tbody>
        </table>
        ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/submissions.css">
    <title>Document</title>
</head>
<body>
    <?php echo $all; ?>
</body>
</html>