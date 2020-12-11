<?PHP
	include_once "../controller/categoriecontroller.php";
	
	$Cat=new categoriecontroller();

    $Cat->delete($_POST["idcategorie"]);
        
      
	
header('Location:gestion categorie.php');
?>