<?php
class reclamation
{ private $id_reclamation;
    private $nom_reclamation;
    private $email_reclamation;
    private $number_reclamation;
    private $message_reclamation;


    function __construct(string $nom_reclamation, string $email_reclamation, int  $number_reclamation, string $message_reclamation)
    {
        $this->nom_reclamation=$nom_reclamation;
        $this->email_reclamation=$email_reclamation;
        $this->number_reclamation=$number_reclamation;
        $this->nom_reclamation=$nom_reclamation;
    }


    function getIdreclamation(): string{
        return $this->id_reclamation;
    }
    function getNomreclamation(): string{    
        return $this->nom_reclamation;
    }
    function getEmailreclamation(): string{
        return $this->email_reclamation;
    }
    function getNombre(): string{
        return $this->number_reclamation; 
        }
    
    function getMessage(): string{
        return $this->message_reclamation;
        }
    }

?>