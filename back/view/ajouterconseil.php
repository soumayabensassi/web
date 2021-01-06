<?php
require "../controller/conseilcontroller.php";
include_once '../model/conseil.php';
$cons=new conseilcontroller();
       $nomconseil= $_POST['nomconseil'];
       $conseil= $_POST['conseil'];
       $typeconseil= $_POST['typeconseil'];
       $imgconseil= $_POST['imgconseil'];

$cons->ajouterconseil($nomconseil,$conseil,$typeconseil,$imgconseil);
header('Location:gestionconseil.php');
?>     