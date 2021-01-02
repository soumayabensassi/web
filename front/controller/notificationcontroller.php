<?php
include_once "../model/notification.php" ;
include_once "../config.php";

class notificationcontroller
{

function affichernotification($email){

    $sql="SELECT * FROM notification where ( emailclients='$email' and status_notification='unread' )  order by `date` DESC";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }

   }


function modifiernotification($id_notification){
    try {
        
        $db = config::getConnexion();
        $query = $db->prepare(
           'UPDATE notification SET 
                status_notification=:status_notification


            WHERE id_notification= :id_notification'
        );
     
        $query->execute([
           'status_notification'=>'read',
           'id_notification'=>$id_notification 
           ]
);
        
       
    } catch (PDOException $e) {
        $e->getMessage();
    }
} 


}
?>