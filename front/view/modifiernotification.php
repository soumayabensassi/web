<?php
include_once "../controller/notificationcontroller.php" ;
include_once "../model/notification.php" ;

$date=$_POST['date'];
$message=$_POST['message'];
$status=$_POST['status'];

$read='read';

$notificationcontroller = new notificationcontroller();

$notificationcontroller->modifiernotification($_POST['id_notification'],$read);

header('Location:index.php');

?>