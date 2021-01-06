<?PHP
	require "../controller/conseilcontroller.php";
	$cons=new conseilcontroller();

    $cons->delete($_POST["idconseil"]);
        
      
	
header('Location:gestionconseil.php');
?>