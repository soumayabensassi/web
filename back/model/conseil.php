<?php
require "db.class.php";

class conseil
{ 
    private  ?string $nomconseil = null;
    private ?string $conseil = null;
    private ?string $typeconseil = null;
    private ?string $imgconseil = null;
    private ?string $id = null;

  
    function __construct(string $nomconseil,string $conseil,string $typeconseil,string $imgconseil){
			
        $this->nomconseil=$nomconseil;
        $this->conseil=$conseil;
        $this->imgconseil=$imgconseil;
        $this->typeconseil=$typeconseil;
       
    }
    
    function getNom(): string{
        return $this->nomconseil;
    }
  
    function getConseil(): string{
        return $this->conseil;
        }
 
    function getTypeconseil(): string{
        return $this->typeconseil;
    }
    function getImgconseil(): string{
        return $this->imgconseil;
    }
    static function retreive($id = null){
        $sql = 'select * from conseill;';
        $arr = array();
        if ($id !=null){
            $sql = 'select * from conseill where idconseil = :cid;';
            $arr = array("cid"=> $id);
        }
        return (new DB())->query($sql, $arr);
    }
   
}
?>