<?PHP
	include_once "../controller/rendezvouscontroller.php";
	
	$rendezvous=new rendezvouscontroller();

    $rendezvous->delete($_POST["id_rendezvous"]);
        
      
	
header('Location:rendezvousmanagement.php');
?>