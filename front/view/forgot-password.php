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
    <link href="../assets/css/styles/error.css" rel="stylesheet">

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
            <div class="card-header text-center"><img class="logo-img" src="../assets/images/logo.png" alt="logo"><span class="splash-description">Veuillez saisir vos informations d'utilisateur.</span></div>
            <div class="card-body">
            <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <form method="POST">
                    <p>Ne vous inquiétez pas, nous vous enverrons un e-mail pour réinitialiser votre mot de passe.</p>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="emailClient" required="" placeholder="Your Email" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Envoyé un mail</button>
                </form>
            </div>
            <div class="card-footer text-center">
                <span>Vous n'avez pas de compte? <a href="sign-up.php">S'inscrire</a></span>
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
include_once "../controller/clientscontroller.php";
$test_email = new clientcontroller();

if (isset($_POST['emailClient'])) 
{
     if ($test_email->chercherEmail($_POST['emailClient']) == 0)
    {
        
        $token = uniqid();

        $url = "http://localhost/test/web/front/view/token.php?token=$token";
        $message = "bonjour,voici votre lien pour la recuperation de votre mot de passe: $url";
        if (mail($_POST['emailClient'], 'Mot de passe oublié', $message, 'From: pick.medico@gmail.com')) 
        {
            $db = config::getConnexion();
            $sql = "UPDATE client SET token=? WHERE emailClient=?";
            $stmt = $db->prepare($sql);
            $stmt->execute([$token, $_POST['emailClient']]);
        }

        header('Location:forgot-password.php?error=Email déjà envoyé');

    }
     else 
    {


        header('Location:sign-up.php?error=Email n existe pas faire un autre compte');
    }
}

?>