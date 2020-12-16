<?php
include_once "../config.php";
class ordonnancecontroller
{
    public function ajouterordonnance($nom_patients,$prenom_patients,$img)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO ordonnance(nom_patients,prenom_patients,img)
        VALUES(:nom_patients,:prenom_patients,:img)";
    $query = $db->prepare($sql);
    $query->execute([
        'nom_patients'=>$nom_patients,
        'prenom_patients'=>$prenom_patients,
        'img'=>$img,
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }
    function afficherordonnance(){

        $sql="SELECT * FROM ordonnance";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
    }
     
    public function delete($id_ordonnance)
    {$db=config::getConnexion();
    try{
    
    $query=$db->prepare('DELETE FROM ordonnance WHERE id_ordonnance= :id_ordonnance');
    $query->execute([
        'id_ordonnance'=>$id_ordonnance
    ]);
    echo $query->rowCount() . "records DELETED successfully";
     }catch(PDOException $e)
      {$e->getMessage();}
     }
   
    
   
     
 
}