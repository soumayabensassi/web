<?php


	include_once "../controller/rendezvouscontroller.php";
	include_once '../model/rendezvous.php';
    include_once "../controller/notificationcontroller.php";
	include_once '../model/notification.php';

    $utilisateur1= new rendezvouscontroller();
    $notification= new notificationcontroller();
    if (
		isset($_POST['id_rendezvous'])
       
   
	){
        if (isset($_POST['accepter']))
        {
        $status='accepté';
        }
        if (isset($_POST['refuser'])) 
        {
        $status='refuser';    
        }
        $message="votre rendez vous a ete ";
        $datetime = date("Y-m-d H:i:s");
        echo $datetime;
        $notification->ajouternotification($_POST['emailclients'],$datetime,$message,$status);
        $utilisateur1->modifierrendezvous($status,$_POST['id_rendezvous']);
            
       header('Location:rendezvousmanagement.php');
             

      }
       
       
?>