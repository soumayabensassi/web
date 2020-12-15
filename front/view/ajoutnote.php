<?php
include_once "../controller/ratingcontroller.php";

       $idclient= $_POST['id1'];
       $idblog= $_POST['id2'];
       $note= $_POST['note'];
       
       
       
$test=new ratingcontroller();
$test->ajouternote($idclient,$idblog,$note);
header("Location:lireblog.php?id=$idblog");

?>