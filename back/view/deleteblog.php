<?PHP
	include_once "../controller/blogscontroller.php";
	
	$album=new blogcontroller();
$a=$_GET["id"];
    $album->delete($_POST["id"]);
        
      
	
header("Location:categories.php");
?>