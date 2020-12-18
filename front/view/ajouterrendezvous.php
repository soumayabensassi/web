<?php
include_once "../controller/rendezvouscontroller.php";

    
       $nom= $_POST['name'];
       $prenom= $_POST['prenom'];
       $email= $_POST['email'];
       $date= $_POST['date'];
       $heure= $_POST['time'];
       $doctor= $_POST['appointmentfor'];
       $client=$_POST['idClient'];
     
$rendezvous= new rendezvouscontroller();
$rendezvous->ajouterrendezvous($nom,$prenom,$email,$date,$heure,$doctor,$client);
header('Location:index.php');
?>