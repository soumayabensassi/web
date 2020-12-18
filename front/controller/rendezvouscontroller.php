<?php
include_once "../model/rendezvous.php" ;
include_once "../config.php";

class rendezvouscontroller
{
    public function ajouterrendezvous($nom,$prenom,$email,$date,$heure,$doctor,$client)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO rendezvous (nom,prenom,email,date,heure,doctor,status,client)
        VALUES(:nom,:prenom,:email,:date,:heure,:doctor,:status,:client)";
    $query = $db->prepare($sql);
    $query->execute([
        'nom'=>$nom,
        'prenom'=>$prenom,
        'email'=>$email,
        'date'=>$date,
        'heure'=>$heure,
        'doctor'=>$doctor,
        'status'=>'en attente',
        'client'=>$client
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }

    public function delete($id_rendezvous)
    {$db=config::getConnexion();
    try{
    
    $query=$db->prepare('DELETE FROM rendezvous WHERE id_rendezvous= :id_rendezvous');
    $query->execute([
        'id_rendezvous'=>$id_rendezvous
    ]);
    echo $query->rowCount() . "records DELETED successfully";
     }catch(PDOException $e)
      {$e->getMessage();}
      echo $e;
     }


    function afficherrendezvous(){

        $sql="SELECT * FROM rendezvous" ;
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
       }

       function recupererrendezvous($email){
        $sql="SELECT * from rendezvous where email='$email'";
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
    
    function afficherRV($email){

        $sql="SELECT * FROM rendezvous where email='$email'" ;
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
       }
     
    function modifierrendezvous($rendezvous,$id_rendezvous){
        try {
            
            $db = config::getConnexion();
            $query = $db->prepare(
               'UPDATE rendezvous SET 
                    nom=:nom,
                    prenom=:prenom, 
                    email=:email,
                    date=:date,
                    heure=:heure,
                    doctor=:doctor
    
    
                WHERE id_rendezvous= :id_rendezvous'
            );
         
            $query->execute([
                'nom'=>$rendezvous->getNom(),
                'prenom'=>$rendezvous->getPrenom(),
               'email'=>$rendezvous->getEmail(),
               'date'=>$rendezvous->getDate(),
               'heure'=>$rendezvous->getHeure(),
               'doctor'=>$rendezvous->getDoctor(),
               'id_rendezvous'=>$id_rendezvous   
               ]
);
            
           
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }    

     
}