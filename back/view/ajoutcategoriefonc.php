<?php
include_once "../controller/categoriescontroller.php";

       $nom= $_POST['nom'];
       
       
       
$test=new categoriecontroller();
$test->ajoutercategorie($nom);
header('Location:categories.php');

?>