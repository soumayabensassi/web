<?PHP
	include_once "../controller/categoriecontroller.php";
	
	$Cat=new categoriecontroller();

    $Cat->delete($_GET["idcategorie"]);
        
      
	
header('Location:gestion categorie.php');
?>