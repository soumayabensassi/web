<?php
include_once "../model/medicament.php" ;
include_once "../config.php";
class medicamentcontroller
{
    public function ajoutermedicament($nomMedicament,$quantite,$prix,$typeMedicament,$imgMedicament,$desMedicament)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO medicament(nomMedicament,quantite,prix,typeMedicament,imgMedicament,desMedicament)
        VALUES(:nomMedicament,:quantite,:prix,:typeMedicament,:imgMedicament,:desMedicament)";
    $query = $db->prepare($sql);
    $query->execute([
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

        $sql="SELECT * FROM medicament";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
    }
     
    public function delete($idMedicament)
    {$db=config::getConnexion();
    try{
    
    $query=$db->prepare('DELETE FROM medicament WHERE idMedicament= :idMedicament');
    $query->execute([
        'idMedicament'=>$idMedicament
    ]);
    echo $query->rowCount() . "records DELETED successfully";
     }catch(PDOException $e)
      {$e->getMessage();}
     }
     function recuperermedicament($idMedicament){
         
        $sql="SELECT * from medicament where idMedicament=$idMedicament";
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
   
      
    function modifiermedicament($Med, $idMedicament){
        try {
            
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE medicament SET 
                    nomMedicament= :nomMedicament, 
                    quantite= :quantite,
                    prix= :prix,
                    typeMedicament= :typeMedicament,
                    imgMedicament= :imgMedicament
                    
    
                WHERE idMedicament= :idMedicament'
            );
         
            $query->execute([
                'nomMedicament'=>$Med->getNom(),
               'quantite'=>$Med->getQuantite(),
               'prix'=>$Med->getPrix(),
               'typeMedicament'=>$Med->getTypeMedicament(),
               'imgMedicament'=>$Med->getImgMedicament(),
              

               'idMedicament'=>$idMedicament   
               ]
);
            
           
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    public function getMedicamentByNom($nomMedicament) {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'SELECT * FROM medicament WHERE nomMedicament = :nomMedicament
                  UNION ALL
                 SELECT id, nomMedicament,quantite,prix,typeMedicament,imgMedicament,desMedicament  FROM fourni WHERE nomMedicament = :nomMedicament'
            );
            $query->execute([
                'nomMedicament' => $nomMedicament
            ]);
            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
   
    function medicament(){

        $sql="SELECT idMedicament,nomMedicament,quantite,prix,typeMedicament,imgMedicament,desMedicament FROM medicament
        UNION ALL
        SELECT id, nomMedicament,quantite,prix,typeMedicament,imgMedicament,desMedicament FROM fourni
        ";
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