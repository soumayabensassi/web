<?PHP
	include_once "../controller/medicamentcontroller.php";
	
	$Med=new medicamentcontroller();

    $Med->delete($_POST["idMedicament"]);
        
      
	
header('Location:gestion medicaments.php');
?>