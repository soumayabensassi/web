<?php
include_once "../controller/doctorcontroller.php";

       $nom= $_POST['nom'];
       $username= $_POST['username'];
       $email= $_POST['email'];
       $mdp= $_POST['mdp'];
       $specealite= $_POST['specealite'];
       $img= $_POST['img'];
       
       
$test=new doctorcontroller();
$test->ajouterdoctor($nom,$username,$email,$mdp,$specealite,$img);
header('Location:doctor-finder.php');

?>