<?php
class panier
{ 
    private  ?int $idMedicamanet = null;
    private ?int $idClient = null;
    private ?int $qte = null;
   
    
    function __construct(int $idMedicamanet,int $idClient,int $qte){
        
        $this->idMedicamanet=$idMedicamanet;
        $this->idClient=$idClient;
        $this->qte=$qte;
        
       
    }
    
    function getQte(): string{
        return $this->qte;
    }
  
  
}
?>