<?php
include_once "../model/categories.php" ;
include_once "../config.php";
class categoriecontroller
{
    public function ajoutercategorie($nom)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO categorie(nom)
        VALUES(:nom)";
    $query = $db->prepare($sql);
    $query->execute([
        'nom'=>$nom,
        
        
        
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
    public function delete($id)
    {$db=config::getConnexion();
    try{
    
    $query=$db->prepare('DELETE FROM categorie WHERE id= :id');
    $query->execute([
        'id'=>$id
    ]);
    echo $query->rowCount() ;
     }catch(PDOException $e)
      {$e->getMessage();}
     }




     function recuperercategorie($id){
        $sql="SELECT * from categorie where id=$id";
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




     function modifiercategorie($categorie, $id){
        
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE categorie SET 
                    nom = :nom
                    
                   
    
                WHERE id = :id'
            );
            $query->execute([
                'nom'=>$categorie->getNom(),
                
                'id' => $id
            ]);
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
        
    }
    function connexionAccount($Email,$Password) {
        $sql="SELECT * FROM categorie WHERE email='" . $Email ."' and mdp = '". $Password."'";
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
    $_SESSION['id']= $x['id'];
    $_SESSION['nom']=$x['nom'];
    
            }
        }            catch (Exception $e)
        {
            $message= " ".$e->getMessage();        
            }
            return $message;
    }
  
    function chercherEmail($Email){
        $sql="SELECT * from doctorslist where email='$Email'";
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

 