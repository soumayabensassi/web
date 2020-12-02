<?php
include_once "../controller/clientscontroller.php";

    
       $nomClient= $_POST['nick'];
       $emailClient= $_POST['email'];
       $password= $_POST['pass'];
       $passwordVerif= $_POST['passV'];
$album=new clientcontroller();
$album->ajouterClient($nomClient,$emailClient,$password,$passwordVerif);
header('Location:../../../index.html');

?>