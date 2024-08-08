<?php
session_start();
$connect= new mysqli('localhost','root','','pharmacy');

if(isset($_POST['submit'])){
    $username=$_POST['surname'];
    $firstname=$_POST['firstname'];
    $message=$_POST['message'];
    $object=$_POST['object'];
    $email=$_POST['email'];
    
    $query="INSERT INTO `contact`(`surname`, `firstname`, `message`, `object`, `email`) VALUES (?,?,?,?,?)";
    $stmt=$connect->prepare($query);
    $stmt->bind_param('sssss',$username,$firstname,$message,$object,$email);
    $stmt->execute();
    echo"<h1 style='text-align:center;color:rgba(16, 49, 120, 1);'>Message Envoyé<br>Vérifier Votre Email bientôt</h1>";
    header("refresh:1; url=../html/contact.php");
     
}