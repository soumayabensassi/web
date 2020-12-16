<?PHP
	include_once "../controller/clientscontroller.php";
	
	$album=new clientcontroller();

    $album->delete($_GET["idClient"]);
        
      
	
header('Location:patients.php');
?>