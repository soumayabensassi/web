<?PHP
	include_once "../controller/clientscontroller.php";
	
	$album=new clientcontroller();

    $album->delete($_POST["idClient"]);
        
      
	
header('Location:patients.php');
?>