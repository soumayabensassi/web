<?php
include_once "../controller/clientscontroller.php";

    
       $nomClient= $_POST['nick'];
       $emailClient= $_POST['email'];
       $password= $_POST['pass'];
       $passwordVerif= $_POST['passV'];
       $token="NULL";
$client=new clientcontroller();
$test_email=new clientcontroller();
if( $test_email->chercherEmail($emailClient) == 1){

       $client->ajouterClient($nomClient,$emailClient,$password,$passwordVerif,$token);
       header('Location:index.php');
}
 else 
{
   
   
    header('location:sign-up.php?error=Email already taken');
    

}


?>