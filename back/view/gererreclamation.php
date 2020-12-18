<?PHP
	include_once "../controller/reclamationscontroller.php";
    include_once '../model/reclamation.php';
    include_once "../controller/notificationcontroller.php";
    include_once '../model/notification.php';
    

    $notification= new notificationcontroller();
    $reclamation=new reclamationcontroller();
    

    $id=$_POST['id_reclamation'];
    $message='votre reclamation a ete ';
    $datetime = date("Y-m-d H:i:s");
    $status='traiter';
    $client=$_POST['idClient'];
        $notification->ajouternotification($_POST['email_reclamation'],$datetime,$message,$status,$client);
        $reclamation->modifierreclamation($status,$_POST['id_reclamation']);

       header('Location:reclamationmanagement.php');

?>