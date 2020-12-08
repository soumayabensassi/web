<?php
include_once "../controller/medicamentcontroller.php";

    
       $nomMedicament= $_POST['nomMedicament'];
       $quantite= $_POST['quantite'];
       $prix= $_POST['prix'];
       $typeMedicament= $_POST['typeMedicament'];
       $imgMedicament= $_POST['imgMedicament'];
       $desMedicament=$_POST['desMedicament'];
$Med=new medicamentcontroller();
$Med->ajoutermedicament($nomMedicament,$quantite,$prix,$typeMedicament,$imgMedicament,$desMedicament);
header('Location:gestion medicaments.php');

?>