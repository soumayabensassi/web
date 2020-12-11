<?php
class categorie
{ 
    private  ?string $nom_categorie = null;
    private ?string $sous_categorie = null;

  
    function __construct(string $nom_categorie,string $sous_categorie){
			
        $this->nom_categorie=$nom_categorie;
        $this->sous_categorie=$sous_categorie;

       
    }
    
    function getNomcategorie(): string{
        return $this->nom_categorie;
    }
  
    function getSouscategorie(): string{
        return $this->sous_categorie;
        }
      
   
}
?>