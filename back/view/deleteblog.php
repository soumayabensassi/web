<?PHP
	include_once "../controller/blogscontroller.php";
	
	$album=new blogcontroller();

    $album->delete($_POST["id"]);
        
      
	
//header('Location:patients.php');
?>