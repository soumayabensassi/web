<?php
include_once "../controller/medicamentcontroller.php";

    
       $nomMedicament= $_POST['nomMedicament'];
       $quantite= $_POST['quantite'];
       $prix= $_POST['prix'];
       $typeMedicament= $_POST['typeMedicament'];
       $imgMedicament= $_POST['imgMedicament'];
$Med=new medicamentcontroller();
$Med->ajoutermedicament($nomMedicament,$quantite,$prix,$typeMedicament,$imgMedicament);
header('Location:gestion medicaments.php');

?>