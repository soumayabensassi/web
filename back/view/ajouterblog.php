<?php
session_start();
include_once "../controller/blogscontroller.php";

       $nom=$_SESSION['id'];
       $nomarticle=$_POST['nomarticle'];
       $date=$_POST['date'];
       $categorie=$_POST['categorie'];
       $img=$_POST['img'];
       $blog=$_POST['blog'];
       
$test=new blogcontroller();
$test->ajouterblog($nom,$nomarticle,$date,$categorie,$img,$blog);
header('Location:categories.php');

?>