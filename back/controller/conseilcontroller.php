<?php
include_once "../model/conseil.php" ;
include_once "../config.php";
class conseilcontroller
{
    public function ajouterconseil($nomconseil,$conseil,$typeconseil,$imgconseil)
    {$db=config::getConnexion();    
       try{ $sql="INSERT INTO conseill (nomconseil,conseil,typeconseil,imgconseil)
        VALUES(:nomconseil,:conseil,:typeconseil,:imgconseil)";
    $query = $db->prepare($sql);
    $query->execute([
        'nomconseil'=>$nomconseil,
        'conseil'=>$conseil,
        'typeconseil'=>$typeconseil,
        'imgconseil'=>$imgconseil
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }   
    function afficherconseil(){

        $sql="SELECT * FROM conseill";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
    }
     
    public function delete($idconseil)
    {$db=config::getConnexion();
    try{
    
    $query=$db->prepare('DELETE FROM conseill WHERE idconseil= :idconseil');
    $query->execute([
        'idconseil'=>$idconseil
    ]);
    echo $query->rowCount() . "records DELETED successfully";
     }catch(PDOException $e)
      {$e->getMessage();}
     }
     function recupererconseil($idconseil){
         
        $sql="SELECT * from conseill where idconseil=$idconseil";
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
   
      
    function modifierconseil($cons, $idconseil){
        try {
            
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE conseill SET 
                    nomconseil= :nomconseil, 
                    conseil= :conseil,
                    typeconseil= :typeconseil,
                    imgconseil= :imgconseil
                    
    
                WHERE idconseil= :idconseil'
            );
         
            $query->execute([
                'nomconseil'=>$cons->getNom(),
               'conseil'=>$cons->getConseil(),
               'typeconseil'=>$cons->getTypeconseil(),
               'imgconseil'=>$cons->getImgconseil(),
              

               'idconseil'=>$idconseil  
               ]
);
            
           
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
   
     
 
}