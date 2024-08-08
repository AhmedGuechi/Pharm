<?php 
    session_start();
    $conn = new mysqli("localhost","root","","pharmacy");
    if(mysqli_connect_errno()){
        echo "cannot connect to the database";
        exit;
    }
    saveFile("resume");
    saveFile("accom");
    saveFile("adminInf");
    saveFile("preclin");
    saveFile("clin");
    saveFile("notice");
    saveFile("vigi");
    saveFile("resCarac");
    // echo $_SESSION['username'];
    function saveFile($name){
        if(isset($_FILES[$name])){
            $file_name = $_FILES[$name]['name'];
            $file_tmp =$_FILES[$name]['tmp_name'];
            $location="../files/" .$_SESSION['username'] ."/" .$_POST['name'];
            if (!file_exists($location)) {
                mkdir($location, 0777, true);
            }
            move_uploaded_file($file_tmp,$location ."/" .$name .".pdf");
            
            // echo "Success";
        }
    }
    $name=$_POST['name'];
    $type=$_POST['type'];
    $form=$_POST['form'];
    $dose=$_POST['dose'];
    $location="../files/" .$_SESSION['username'] ."/" .$name ."/";
    // $ech='';
    do{
        srand(time());
        $id=rand(1,999999999);
        // $ech.=$id ."  ";
        $idquery="SELECT * FROM medicament WHERE id ='" .$id ."'";
        $result=$conn->query($idquery);
    }while($result->num_rows != 0);
    // echo $ech;
    $query="INSERT INTO medicament VALUES('" .$name ."','" .$type ."','" .$form ."','" .$dose ."','" .$location ."','En attente','" .$id ."','" .$_SESSION['username'] ."')";

    $conn->query($query);
    echo "
    <style>
        h1{
            margin:20vh auto;
            text-align:center;
        }
    </style>
    <h1>Dossier soumis avec succes</h1>";
    $conn->close();
    
        header("refresh:1.3;url=../html/submissions.php");
    ?>
    