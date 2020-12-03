<?php
class Client
{ private ?int $idClient = null;
    private  ?string $nomClient = null;
    private ?string $emailClient = null;
    private ?string $password = null;
    private ?string $passwordVerif = null;
    function getIdClient(): int{
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