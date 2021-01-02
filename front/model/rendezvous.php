<?php
class rendezvous
{ private $id_rendezvous;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $email = null;
    private  ?string $date = null;
    private ?string $heure = null;
    private ?string $doctor = null;


    function __construct(string $nom,string $prenom,string $email,string $date, string $heure)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->date=$date;
        $this->heure=$heure;
    }



    function getNom(): string{    
        return $this->nom;
    }
    function getPrenom(): string{    
        return $this->prenom;
    }
    function getEmail(): string{
        return $this->email;
        }
    function getDate(): string{
        return $this->date; 
        }
    
    function getHeure(): string{
        return $this->heure;
        }
    function getDoctor(): string{    
            return $this->doctor;
        }    
    }

?>