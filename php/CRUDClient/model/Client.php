<?php
class Client
{ private $idClient;
    private $nomClient;
    private $emailClient;
    private $password;
    private $passwordVerif;
    function getidClient(): string{
        return $this->idClient;
    }
    function getNomClient(): string{
        return $this->nomClient;
    }
    function getPassword(): string{
        return $this->password;
    }
    function getEmailClient(): string{
        return $this->emailClient;
        }
    
    function getPasswordVerif(): string{
        return $this->passwordVerif;
        }
    }

?>