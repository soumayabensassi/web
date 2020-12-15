<?php
include_once "../model/rating.php" ;
include_once "../config.php";
class ratingcontroller
{
    public function ajouternote($idclient,$idblog,$note)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO rating(idclient,idblog,note)
        VALUES(:idclient,:idblog,:note)";
    $query = $db->prepare($sql);
    $query->execute([
        'idclient'=>$idclient,
        'idblog'=>$idblog,
        'note'=>$note
        
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }
    function affichernote(){

        $sql="SELECT * FROM rating";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
    }
     
    
     


    //modifier
    function modifierClient($Cli, $idClient){
        try {
            
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE rating SET 
                    nomClient=:nomClient, 
                    emailClient=:emailClient,
                    password=:password,
                    passwordVerif=:passwordVerif
    
    
                WHERE idClient= :idClient'
            );
         
            $query->execute([
                'nomClient'=>$Cli->getNom(),
               'emailClient'=>$Cli->getEmail(),
               'password'=>$Cli->getPassword(),
               'passwordVerif'=>$Cli->getPasswordV(),
               'idClient'=>$idClient   
               ]
);
            
           
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
     
 
}