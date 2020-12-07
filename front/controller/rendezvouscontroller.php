<?php
include_once "../model/rendezvous.php" ;
include_once "../config.php";

class rendezvouscontroller
{
    public function ajouterrendezvous($nom,$prenom,$email,$date,$heure,$doctor)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO rendezvous (nom,prenom,email,date,heure,doctor)
        VALUES(:nom,:prenom,:email,:date,:heure,:doctor)";
    $query = $db->prepare($sql);
    $query->execute([
        'nom'=>$nom,
        'prenom'=>$prenom,
        'email'=>$email,
        'date'=>$date,
        'heure'=>$heure,
        'doctor'=>$doctor,
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }

    public function delete($id_rendezvous)
    {$db=config::getConnexion();
    try{
    
    $query=$db->prepare('DELETE FROM rendezvous WHERE id_rendezvous= :id_rendezvous');
    $query->execute([
        'id_rendezvous'=>$id_rendezvous
    ]);
    echo $query->rowCount() . "records DELETED successfully";
     }catch(PDOException $e)
      {$e->getMessage();}
     }


    function afficherrendezvous(){

        $sql="SELECT * FROM rendezvous";
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