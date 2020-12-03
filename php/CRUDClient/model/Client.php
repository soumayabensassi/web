<?php
class Client
{ 
    private  ?string $nomClient = null;
    private ?string $emailClient = null;
    private ?string $password = null;
    private ?string $passwordVerif = null;
    
    function __construct(string $nom,string $email,string $password ,string $passwordVerif){
			
        $this->nomClient=$nom;
        $this->emailClient=$email;
        $this->password=$password;
        $this->passwordVerif=$passwordVerif;
    }
    
    function getNom(): string{
        return $this->nomClient;
    }
  
    function getEmail(): string{
        return $this->emailClient;
        }
      
    
    function getPassword(): string{
        return $this->password;
    }
    function getPasswordV(): string{
        return $this->passwordVerif;
    }
}
?>