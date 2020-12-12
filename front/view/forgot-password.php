<?php
include_once "../config.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>forget password</title>
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
    <!-- ============================================================== -->
    <!-- forgot password  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center"><img class="logo-img" src="../assets/images/logo.png" alt="logo"><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form method="POST">
                    <p>Don't worry, we'll send you an email to reset your password.</p>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="emailClient" required="" placeholder="Your Email" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Envoyé un mail</button>
                </form>
            </div>
            <div class="card-footer text-center">
                <span>Don't have an account? <a href="sign-up.php">Sign Up</a></span>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end forgot password  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>


</html>
<?php

if(isset($_POST['emailClient']))
{
$token = uniqid();

$url= "http://localhost/web-1/front/view/token.php?token=$token";
$message="bonjour,voici votre lien pour la recuperation de votre mot de passe: $url";
if(mail($_POST['emailClient'],'Mot de passe oublié',$message,'From: soumaya99bensassi@gmail.com'))
{$db=config::getConnexion();
    $sql="UPDATE client SET token=? WHERE emailClient=?";
    $stmt=$db->prepare($sql);
    $stmt->execute([$token,$_POST['emailClient']]);
}

}
?>