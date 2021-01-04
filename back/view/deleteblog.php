<?PHP
	include_once "../controller/blogscontroller.php";
	
	$album=new blogcontroller();
$a=$_GET["id"];
    $album->delete($_GET["id"]);
        
      
	
header("Location:categories.php");
?>