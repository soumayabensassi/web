<?php
class rating
{ private  $id= null;
    private  ?int $idclient= null;
    private  ?int $idblog= null;
    private  ?int $note= null;
    
    function __construct(int $idclient,int $idblog,int $note){
        
        $this->idclient=$idclient;
        $this->idblog=$idblog;
        $this->note=$note;
       
    }
    function getId(): int{
        return $this->id;
    }
    function getIdclient(): int{
        return $this->idclient;
    }
    function getIdblog(): int{
        return $this->idblog;
    }
    function getNote(): int{
        return $this->note;
    }
}  

?>