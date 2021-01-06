<?php
include_once "../model/fournisseur.php" ;
include_once "../config.php";
class fournisseurcontroller
{
    public function ajoutermedicament($nomfournisseur,$nomMedicament,$quantite,$prix,$typeMedicament,$imgMedicament,$desMedicament)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO fourni(nomfournisseur,nomMedicament,quantite,prix,typeMedicament,imgMedicament,desMedicament)
        VALUES(:nomfournisseur,:nomMedicament,:quantite,:prix,:typeMedicament,:imgMedicament,:desMedicament)";
    $query = $db->prepare($sql);
    $query->execute([
        'nomfournisseur'=>$nomfournisseur,
        'nomMedicament'=>$nomMedicament,
        'quantite'=>$quantite,
        'prix'=>$prix,
        'typeMedicament'=>$typeMedicament,
        'imgMedicament'=>$imgMedicament,
        'desMedicament'=>$desMedicament
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }
    function affichermedicament(){

        $sql="SELECT * FROM fourni";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
    }
   
    function afficherfourni(){

        $sql="SELECT * FROM fourni";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
    }
    public function delete($id)
    {$db=config::getConnexion();
    try{
    
    $query=$db->prepare('DELETE FROM fourni WHERE id= :id');
    $query->execute([
        'id'=>$id
    ]);
    echo $query->rowCount() . "records DELETED successfully";
     }catch(PDOException $e)
      {$e->getMessage();}
     }
     function recuperermedicament($id){
         
        $sql="SELECT * from fourni where id=$id";
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
   
      
    function modifiermedicament($Med, $id){
        try {
            
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE fourni SET
                    nomfournisseur= :nomfournisseur, 
                    nomMedicament= :nomMedicament, 
                    quantite= :quantite,
                    prix= :prix,
                    typeMedicament= :typeMedicament,
                    imgMedicament= :imgMedicament
                    
    
                WHERE id= :id'
            );
         
            $query->execute([
                'nomfournisseur'=>$Med->getNomF(),
                'nomMedicament'=>$Med->getNom(),
               'quantite'=>$Med->getQuantite(),
               'prix'=>$Med->getPrix(),
               'typeMedicament'=>$Med->getTypeMedicament(),
               'imgMedicament'=>$Med->getImgMedicament(),
              

               'id'=>$id   
               ]
);
            
           
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }





   

}