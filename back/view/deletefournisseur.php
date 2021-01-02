<?PHP
	include_once "../controller/fournisseurcontroller.php";
	
	$Med=new fournisseurcontroller();

    $Med->delete($_POST["id"]);
        
      
	
header('Location:gestion fournisseur.php');
?>