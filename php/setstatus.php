<?php 
  session_start();

    $conn = new mysqli("localhost","root","","pharmacy");
    if(mysqli_connect_errno()){
        echo "cannot connect to the database";
        exit;
    }
    $newstatus=$_POST['status'];

    $query="SELECT * FROM medicament WHERE id ='" .$_POST['id'] ."'";    $result=$conn->query($query);
    $result=$conn->query($query);
    if($result->num_rows>0){
        $query="UPDATE medicament SET status='" .$newstatus ."' WHERE id ='" .$_POST['id'] ."'";    $result=$conn->query($query);
        $result=$conn->query($query);

    }else{
        echo "<h3>Id inexistant, verifiez et reeseyer</h3>";
        header("refresh:2;url=../admin/admin.php");
    }
    
    header("location:../admin/admin.php");
?>