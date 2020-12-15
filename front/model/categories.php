<?php
class categorie
{ private  $id= null;
    private  ?string $nom= null;
    
    function __construct(string $nom){
			
        $this->nom=$nom;
       
    }
    function getId(): string{
        return $this->id;
    }
    function getNom(): string{
        return $this->nom;
    }
    
}  

?>