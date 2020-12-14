<?php
include_once "../model/notification.php" ;
include_once "../config.php";
class notificationcontroller
{
    public function ajouternotification($emailclients,$date,$message,$status)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO notification(emailclients,date,message,status,status_notification)
        VALUES(:emailclients,:date,:message,:status,:status_notification)";
    $query = $db->prepare($sql);
    $query->execute([
        'emailclients'=>$emailclients,
        'date'=>$date,
        'message'=>$message,
        'status'=>$status,
        'status_notification'=>'unread'
        
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    
    }
    
}
?>