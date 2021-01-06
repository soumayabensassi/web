<?php 
require "db.class.php";
class conseil{


    public $id_conseils = null; 
    public $id_medecin;
    public $date_conseil;
    public $conseil;

    public function __construct($conseil,$doctorid){

        $this->conseil = $conseil; 
        $this->id_medecin = $doctorid;
        echo($this->conseil);
        echo("hello");

    }

    public function insert(){
        $query = "INSERT INTO `conseils` (`id_medecin`,`conseil`) values (:doctorid,:cons); Select LAST_INSERT_ID() as id;";
        
        $temps = array(
            "cons"=> $this->conseil, 
            "doctorid" => $this->id_medecin
        );
        $db = new DB();
        $result = $db->insertWLID($query,$temps);
        move_uploaded_file($_FILES["img"]["tmp_name"], "images/conseils/" . $result . ".jpg");

    }

    static function delete($id){
        $sql = 'delete from conseils where id_conseils  = :cid';
        $db = new DB();
        $db->query($sql, array("cid"=>$id));
    }

    static function retreive($id = null){
        $sql = 'select * from conseils;';
        $arr = array();
        if ($id !=null){
            $sql = 'select * from conseils where id_conseils = :cid;';
            $arr = array("cid"=> $id);
        }
        return (new DB())->query($sql, $arr);
    }
}

?>