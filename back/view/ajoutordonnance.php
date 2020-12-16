<?php
include_once "../controller/ordonnancecontroller.php";

    
       $nom_patients= $_POST['firstName'];
       $prenom_patients=$_POST['lastName'];
       $img= $_POST['ordonnance'];
     
$ord=new ordonnancecontroller();
$ord->ajouterordonnance($nom_patients,$prenom_patients,$img);
header('Location:../../front/view/index.php');

?>