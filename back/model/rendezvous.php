<?php
class rendezvous
{ private $id_rendezvous;
    private $nom;
    private $prenom;
    private $email;
    private $date;
    private $heure;
    private $doctor;
    private $status;


    function __construct( string $status)
    {
      
        $this->status=$status;
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
    function getStatus(): string{    
            return $this->status;
        }     
    }

?>