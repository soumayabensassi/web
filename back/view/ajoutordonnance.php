<?php

session_start();
include_once "../controller/ordonnancecontroller.php";
  
      
       $client=$_SESSION['idClient'];

       $img= $_POST['ordonnance'];
       $ord=new ordonnancecontroller();
$ord->ajouterordonnance($client,$img);
header('Location:../../front/view/index.php');

?>