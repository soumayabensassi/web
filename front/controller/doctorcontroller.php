<?php
include_once "../model/docteur.php" ;
include_once "../config.php";
class doctorcontroller
{
    public function ajouterdoctor($nom,$username,$email,$mdp,$specealite,$img)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO doctorslist(nom,username,email,mdp,specealite,img)
        VALUES(:nom,:username,:email,:mdp,:specealite,:img)";
    $query = $db->prepare($sql);
    $query->execute([
        'nom'=>$nom,
        'username'=>$username,
        'email'=>$email,
        'mdp'=>$mdp,
        'specealite'=>$specealite,
        'img'=>$img
        
        
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }
    function afficherdoctor(){

        $sql="SELECT * FROM doctorslist";
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
    
    $query=$db->prepare('DELETE FROM doctorslist WHERE id= :id');
    $query->execute([
        'id'=>$id
    ]);
    echo $query->rowCount() ;
     }catch(PDOException $e)
      {$e->getMessage();}
     }




     function recupererdoctor($id){
        $sql="SELECT * from doctorslist where id=$id";
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




     function modifierdoctor($doctor, $id){
        
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE doctorslist SET 
                    nom = :nom, 
                    username = :username,
                    email = :email,
                    mdp = :mdp,
                    specealite = :specealite,
                    img= :img
                   
    
                WHERE id = :id'
            );
            $query->execute([
                'nom'=>$doctor->getNom(),
                'username'=>$doctor->getUsername(),
                'email'=>$doctor->getEmail(),
                'mdp'=>$doctor->getMdp(),
                'specealite'=>$doctor->getSpecealite(),
                'img'=>$doctor->getImg(),
                'id' => $id
            ]);
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
        
    }
    function connexionAccount($Email,$Password) {
        $sql="SELECT * FROM doctorslist WHERE email='" . $Email ."' and mdp = '". $Password."'";
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
    $_SESSION['nomdoc']=$x['nom'];
    
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

 