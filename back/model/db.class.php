<?php
class DB{
 private $host = 'localhost';
 private $username = 'root';
 private $password = '';
 private $database = 'atelierphp';
 private $db;

 public function __construct($host = null , $username = null , $password = null , $database = null){
     if ($host != null){
        $this->host =$host;
        $this->username =$username;
        $this->password =$password;
        $this->database =$database;
     }
     try{
     $this->db = new PDO('mysql:host=' .$this->host. ';dbname='.$this->database, $this->username, $this->password,
     array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
     

     }catch(PDOException $e){
         die('impossible de se connecter a la base de donnee');
     }
 }
 public function query($sql, $data = array()){
    $req =$this->db->prepare($sql);
    $req->execute($data);
    //$req->debugDumpParams();
    return $req->fetchALL(PDO::FETCH_OBJ);
 }
 public function insertWLID($sql, $data = array()){
    $req =$this->db->prepare($sql);
    $req->execute($data);
    $req->fetchALL(PDO::FETCH_OBJ);
    return $this->db->lastInsertId();
 }
}