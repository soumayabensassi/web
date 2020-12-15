<?php
class docteur
{ private  $id= null;
    private  ?string $nom= null;
    private  ?string $username= null;
   
    private  ?string $email= null;
    private  ?string $mdp= null;
    private  ?string $specealite= null;
    private  ?string $img= null;
    
    function __construct(string $nom,string $username,string $email ,string $mdp,string $specealite,string $img){
			
        $this->nom=$nom;
        $this->username=$username;
        $this->email=$email;
        $this->mdp=$mdp;
        $this->specealite=$specealite;
        $this->img=$img;
       
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
    function getSpecealite(): string{
        return $this->specealite;
    }
    function getImg(): string{
        return $this->img;
    }
    
}
     
    

?>