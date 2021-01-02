<?php
include_once "../controller/fournisseurcontroller.php";

       $nomfournisseur= $_POST['nomfournisseur'];    
       $nomMedicament= $_POST['nomMedicament'];
       $quantite= $_POST['quantite'];
       $prix= $_POST['prix'];
       $typeMedicament= $_POST['typeMedicament'];
       $imgMedicament= $_POST['imgMedicament'];
       $desMedicament=$_POST['desMedicament'];
$Med=new fournisseurcontroller();
$Med->ajoutermedicament($nomfournisseur,$nomMedicament,$quantite,$prix,$typeMedicament,$imgMedicament,$desMedicament);
header('Location:gestion fournisseur.php');

?>