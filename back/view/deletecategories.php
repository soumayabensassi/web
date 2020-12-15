<?PHP
	include_once "../controller/categoriescontroller.php";
	
	$album=new categoriecontroller();

    $album->delete($_POST["id"]);
        
      
	
header('Location:categories.php');
?>