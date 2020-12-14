<?php
class reclamation
{ private ?int $id_reclamation = null ;
    private ?string $nom_reclamation = null;
    private ?string $email_reclamation = null ;
    private ?string $number_reclamation = null;
    private ?string $message_reclamation = null;


    function __construct(string $nom_reclamation, string $email_reclamation, int  $number_reclamation, string $message_reclamation)
    {
        $this->nom_reclamation=$nom_reclamation;
        $this->email_reclamation=$email_reclamation;
        $this->number_reclamation=$number_reclamation;
        $this->message_reclamation=$message_reclamation;
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