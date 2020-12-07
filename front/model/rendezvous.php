<?php
class rendezvous
{ private $id_rendezvous;
    private $nom;
    private $prenom;
    private $email;
    private $date;
    private $heure;
    private $doctor;


    function __construct(string $nom, string $prenom, string $email, int  $date, string $heure, string $doctor)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->date=$date;
        $this->heure=$heure;
        $this->doctor=$doctor;
    }



    function getNomrendezvous(): string{    
        return $this->nom;
    }
    function getPrenomrendezvous(): string{    
        return $this->prenom;
    }
    function getEmailrendezvous(): string{
        return $this->email;
    }
    function getNombre(): string{
        return $this->date; 
        }
    
    function getMessage(): string{
        return $this->heure;
        }
    function getDoctorrendezvous(): string{    
            return $this->doctor;
        }    
    }

?>