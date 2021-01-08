<?php
class blog
{ private  $id= null;
    private  ?string $medecin= null;
    private  ?string $nomarticle= null;
    private   $date;
    private  ?string $categorie= null;
    private  ?string $img= null;
    private  ?string $blog= null;
    function __construct(string $nomarticle,$date ,string $img,string $blog){
			
        
        $this->nomarticle=$nomarticle;
        $this->date=$date;
        
        $this->img=$img;
        $this->blog=$blog;
    }
    function getId(): string{
        return $this->id;
    }
    function getNom(): string{
        return $this->medecin;
    }
    function getNomarticle(): string{
        return $this->nomarticle;
        }
        function getDate(): string{
            return $this->date;
            }
    function getCategorie(): string{
        return $this->categorie;
    }
    function getImg(): string{
        return $this->img;
    }
    function getBlog(): string{
        return $this->blog;
    }
}
     
    

?>