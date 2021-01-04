<?PHP
	include_once "../controller/categoriescontroller.php";
	
	$album=new categoriecontroller();

    $album->delete($_GET["id"]);
        
      
	
header('Location:categories.php');
?>