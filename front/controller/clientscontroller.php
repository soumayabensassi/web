<?php
include_once "../model/Client.php" ;
include_once "../config.php";
class clientcontroller
{
    public function ajouterClient($nomClient,$emailClient,$password,$passwordVerif)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO client(nomClient,emailClient,password,passwordVerif)
        VALUES(:nomClient,:emailClient,:password,:passwordVerif)";
    $query = $db->prepare($sql);
    $query->execute([
        'nomClient'=>$nomClient,
        'emailClient'=>$emailClient,
        'password'=>$password,
        'passwordVerif'=>$passwordVerif
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }
    function afficherClient(){

        $sql="SELECT * FROM client";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
    }
     
    public function delete($idClient)
    {$db=config::getConnexion();
    try{
    
    $query=$db->prepare('DELETE FROM client WHERE idClient= :idClient');
    $query->execute([
        'idClient'=>$idClient
    ]);
    echo $query->rowCount() . "records DELETED successfully";
     }catch(PDOException $e)
      {$e->getMessage();}
     }
     function recupererClient($idClient){
        $sql="SELECT * from client where idClient=$idClient";
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
   



    //modifier
    function modifierClient($Cli, $idClient){
        try {
            
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE client SET 
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
    function connexionAccount($Email,$Password) {
        $sql="SELECT * FROM client WHERE emailClient='" . $Email ."' and Password = '". $Password."'";
        $db = config::getConnexion();
        
        

        try {
            $query=$db->prepare($sql);

            
            $query->execute();
            $count=$query->rowCount();
            if($count==0)
            {$message= "pseudo ou mot de passe incorrect";
            
            }
            else { 
                $x = $query->fetch();
                $message = $x['role'];
              

             session_start(); 
    $_SESSION['idClient']= $x['idClient'];
    $_SESSION['nom']=$x['nomClient'];
    
            }
        }            catch (Exception $e)
        {
            $message= " ".$e->getMessage();        
            }
            return $message;
    }
  
    function chercherEmail($Email){
        $sql="SELECT * from client where emailClient='$Email'";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $user=$query->fetch();
            if($user==false)
            return 1;
            else return 0;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }   
 
}