<?php 
include_once "../config.php";
if(isset($_GET['token'])&&$_GET['token']!='')
{$db=config::getConnexion();
$stmt=$db->prepare('SELECT emailClient From client WHERE token = ?');
$stmt->execute([$_GET['token']]);
$email=$stmt->fetchColumn();

if($email)
{ ?>
    
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Récuperer mot de passe</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }
        
        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>
    <body>
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center"><img class="logo-img"  src="../assets/images/logo.png" alt="logo"><span class="splash-description">Veuillez saisir vos informations d'utilisateur.</span></div>
            <div class="card-body">
                <form method="POST">
                    <p>vous pouvez maintenant changer votre mot de passe</p>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="password" name="newpass" required="" placeholder="nouveau mot de passe" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Réinitialiser le mot de passe</button>
                </form>
            </div>
           
        </div>
    </div> 
    </body>
    </html>
    <?php
}
}

if(isset($_POST['newpass']))
{
    $db=config::getConnexion();
  $sql="UPDATE client SET password=?,token='NULL' WHERE emailClient=?";
    $stmt=$db->prepare($sql);
    $stmt->execute([$_POST['newpass'],$email]);
   header('Location:login.php');
}
?>