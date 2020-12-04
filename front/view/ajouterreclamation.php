<?php
include_once "../controller/reclamationscontroller.php";

    
       $nom_reclamation= $_POST['name'];
       $email_reclamation= $_POST['email'];
       $number_reclamation= $_POST['number'];
       $message_reclamation= $_POST['msg'];
     
$reclamation= new reclamationcontroller();
$reclamation->ajouterreclamation($nom_reclamation,$email_reclamation,$number_reclamation,$message_reclamation);
header('Location:index.html');
?>















