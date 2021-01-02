<?PHP
	include_once "../controller/reclamationscontroller.php";
	
	$reclamation=new reclamationcontroller();
    $reclamation->delete($_POST["id_reclamation"]);

header('Location:testreclamation.php');
?>