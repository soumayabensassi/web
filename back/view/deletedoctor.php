<?PHP
	include_once "../controller/doctorcontroller.php";
	
	$album=new doctorcontroller();

    $album->delete($_POST["id"]);
        
      
	
header('Location:doctor-finder.php');
?>