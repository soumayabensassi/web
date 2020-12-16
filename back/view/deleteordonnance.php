<?PHP
	include_once "../controller/ordonnancecontroller.php";
	
	$ord=new ordonnancecontroller();

    $ord->delete($_GET["idordonnance"]);
        
      
	
header('Location:ordonnance.php');
?>