<?php
include_once "../config.php";
class ordonnancecontroller
{
    public function ajouterordonnance($id_Client,$img)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO ordonnance(client,img)
        VALUES(:client,:img)";
    $query = $db->prepare($sql);
    $query->execute([
        'client'=>$id_Client,
       
        'img'=>$img,
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }
    function  afficherordonnance($idClient){
        
        try{$db = config::getConnexion();
            $query=$db->prepare('SELECT * from ordonnance where client=:id');
             $query->execute(['id'=>$idClient]);
            
                 
                    return $query->fetchAll();
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