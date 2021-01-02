<?php
include_once "../model/reclamation.php" ;
include_once "../config.php";

class reclamationcontroller
{
    public function ajouterreclamation($nom_reclamation,$email_reclamation,$number_reclamation,$message_reclamation,$client)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO reclamation (nom_reclamation,email_reclamation,number_reclamation,message_reclamation,status,client)
        VALUES(:nom_reclamation,:email_reclamation,:number_reclamation,:message_reclamation,:status,:client)";
    $query = $db->prepare($sql);
    $query->execute([
        'nom_reclamation'=>$nom_reclamation,
        'email_reclamation'=>$email_reclamation,
        'number_reclamation'=>$number_reclamation,
        'message_reclamation'=>$message_reclamation,
        'status'=>'en attente',
        'client'=>$client
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
       function recupererreclamation($id_reclamation){
        $sql="SELECT * from reclamation where id_reclamation='$id_reclamation'";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $user=$query->fetch();
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherR($email){

        $sql="SELECT * FROM reclamation WHERE email_reclamation='$email'";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
       }
    function modifierreclamation($reclamation , $id_reclamation){
        
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reclamation SET 
                    nom_reclamation = :nom_reclamation, 
                    email_reclamation = :email_reclamation,
                    number_reclamation = :number_reclamation,
                    message_reclamation = :message_reclamation
                    WHERE id_reclamation= :id_reclamation'
            );
            $query->execute([
                'nom_reclamation'=>$reclamation->getNomreclamation(),
                'email_reclamation'=>$reclamation->getEmailreclamation(),
                'number_reclamation'=>$reclamation->getNombre(),
                'message_reclamation'=>$reclamation->getMessage(),
                'id_reclamation' => $id_reclamation
            ]);
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
    } 

  

}
