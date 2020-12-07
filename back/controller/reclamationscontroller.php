<?php
include_once "../model/reclamation.php" ;
include_once "../config.php";

class reclamationcontroller
{
    public function ajouterreclamation($nom_reclamation,$email_reclamation,$number_reclamation,$message_reclamation)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO reclamation (nom_reclamation,email_reclamation,number_reclamation,message_reclamation)
        VALUES(:nom_reclamation,:email_reclamation,:number_reclamation,:message_reclamation)";
    $query = $db->prepare($sql);
    $query->execute([
        'nom_reclamation'=>$nom_reclamation,
        'email_reclamation'=>$email_reclamation,
        'number_reclamation'=>$number_reclamation,
        'message_reclamation'=>$message_reclamation
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }

    public function delete($id_reclamation)
    {$db=config::getConnexion();
    try{
    
    $query=$db->prepare('DELETE FROM reclamation WHERE id_reclamation= :id_reclamation');
    $query->execute([
        'id_reclamation'=>$id_reclamation
    ]);
    echo $query->rowCount() . "records DELETED successfully";
     }catch(PDOException $e)
      {$e->getMessage();}
     }


    function afficherreclamation(){

        $sql="SELECT * FROM reclamation";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
       }
     


     
}