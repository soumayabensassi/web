<?php
include_once "../model/categorie.php" ;
include_once "../config.php";
class categoriecontroller
{
    public function ajoutercategorie($nom_categorie,$sous_categorie)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO categorie(nom_categorie,sous_categorie)
        VALUES(:nom_categorie,:sous_categorie)";
    $query = $db->prepare($sql);
    $query->execute([
        'nom_categorie'=>$nom_categorie,
        'sous_categorie'=>$sous_categorie

    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }
    function affichercategorie(){

        $sql="SELECT * FROM categorie";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
    }
     
    public function delete($idcategorie)
    {$db=config::getConnexion();
    try{
    
    $query=$db->prepare('DELETE FROM categorie WHERE idcategorie= :idcategorie');
    $query->execute([
        'idcategorie'=>$idcategorie
    ]);
    echo $query->rowCount() . "records DELETED successfully";
     }catch(PDOException $e)
      {$e->getMessage();}
     }
     function recuperercategorie($idcategorie){
        $sql="SELECT * from categorie where idcategorie=$idcategorie";
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
    function modifiercategorie($Cat, $idcategorie){
        try {
            
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE categorie SET 
                    nom_categorie= :nom_categorie, 
                    sous_categorie= :sous_categorie

                    
    
                WHERE idcategorie= :idcategorie'
            );
         
            $query->execute([
                'nom_categorie'=>$Cat->getNomcategorie(),
               'sous_categorie'=>$Cat->getSouscategorie(),
               'idcategorie'=>$idcategorie   
               ]
);
            
           
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
   
     
 
}