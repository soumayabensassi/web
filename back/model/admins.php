<?php
class admin
{ private  $id= null;
    private  ?string $nom= null;
    private  ?string $username= null;
   
    private  ?string $email= null;
    private  ?string $mdp= null;
   
    
    function __construct(string $nom,string $username,string $email ,string $mdp){
			
        $this->nom=$nom;
        $this->username=$username;
        $this->email=$email;
        $this->mdp=$mdp;
       
       
    }
    function getId(): string{
        return $this->id;
    }
    function getNom(): string{
        return $this->nom;
    }
    function getUsername(): string{
        return $this->username;
        }
        function getEmail(): string{
            return $this->email;
            }
            function getMdp(): string{
                return $this->mdp;
                }
    
    
}
     
    

?>