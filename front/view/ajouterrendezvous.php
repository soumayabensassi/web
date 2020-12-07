<?php
include_once "../controller/rendezvouscontroller.php";

    
       $nom= $_POST['name'];
       $prenom= $_POST['prenom'];
       $email= $_POST['email'];
       $date= $_POST['date'];
       $heure= $_POST['time'];
       $doctor= $_POST['appointmentfor'];
     
$rendezvous= new rendezvouscontroller();
$rendezvous->ajouterrendezvous($nom,$prenom,$email,$date,$heure,$doctor);
header('Location:index.php');
?>