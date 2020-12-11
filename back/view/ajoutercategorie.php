<?php
include_once "../controller/categoriecontroller.php";

    
       $nom_categorie= $_POST['nom_categorie'];
       $sous_categorie= $_POST['sous_categorie'];
$Cat=new categoriecontroller();
$Cat->ajoutercategorie($nom_categorie,$sous_categorie);
header('Location:gestion categorie.php');

?>