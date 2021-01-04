<?php
include_once "../model/docteur.php" ;
include_once "../config.php";
class adminscontroller
{
    
    function afficheradmin(){

        $sql="SELECT * FROM adminslist";
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
    
    $query=$db->prepare('DELETE FROM adminslist WHERE id= :id');
    $query->execute([
        'id'=>$id
    ]);
    echo $query->rowCount() ;
     }catch(PDOException $e)
      {$e->getMessage();}
     }




     function recupereradmin($id){
        $sql="SELECT * from adminslist where id=$id";
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




     function modifieradmin($admin, $id){
        
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE adminslist SET 
                    nom = :nom, 
                    username = :username,
                    email = :email,
                    mdp = :mdp,
                   
                   
    
                WHERE id = :id'
            );
            $query->execute([
                'nom'=>$admin->getNom(),
                'username'=>$admin->getUsername(),
                'email'=>$admin->getEmail(),
                'mdp'=>$admin->getMdp(),
                'specealite'=>$admin->getSpecealite(),
               
            ]);
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
        
    }
    function connexionAccount($Email,$Password) {
        $sql="SELECT * FROM adminslist WHERE email='" . $Email ."' and mdp = '". $Password."'";
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
        $sql="SELECT * from adminslist where email='$Email'";
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

 