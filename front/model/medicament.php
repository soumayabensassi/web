<?php
class medicament
{ 
    private  ?string $nomMedicament = null;
    private ?int $quantite = null;
    private ?float $prix = null;
    private ?string $typeMedicament = null;
    private ?string $imgMedicament = null;
    private ?string $desMedicament = null;
    function __construct(string $nomMedicament,int $quantite,float $prix,string $typeMedicament,string $imgMedicament,string $desMedicament){
			
        $this->nomMedicament=$nomMedicament;
        $this->quantite=$quantite;
        $this->prix=$prix;
        $this->imgMedicament=$imgMedicament;
        $this->typeMedicament=$typeMedicament;
        $this->desMedicament=$desMedicament;
    }
    
    function getNom(): string{
        return $this->nomMedicament;
    }
  
    function getQuantite(): int{
        return $this->quantite;
        }
      
    
    function getPrix(): float{
        return $this->prix;
    }
    function getTypeMedicament(): string{
        return $this->typeMedicament;
    }
    function getImgMedicament(): string{
        return $this->imgMedicament;
    }
    function getDesMedicament(): string{
        return $this->desMedicament;
    }
}
?>