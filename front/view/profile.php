<?php
session_start();

include_once "../controller/clientscontroller.php";
include_once '../Model/Client.php';

$utilisateur1 = new clientcontroller();

if (
    isset($_POST["nomClient"]) &&
    isset($_POST["emailClient"])


) {


    $user = new Client($_POST['nomClient'], $_POST['emailClient'], $_POST['pass'], $_POST['pass1']);
    $utilisateur1->modifierClient($user, $_SESSION['idClient']);

    header('refresh:1;url=profile.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/profile.css">
    <title>Paramètres de profil</title>



</head>

<body>


    <div class="container-fluid main" style="height:100vh;padding-left:0px;">



        <div class="row align-items-center" style="height:100%">

            <div class="col-md-3 d-none d-md-block" style="height:100%">

                <div class="container-fluid nav sidebar flex-column">

                    <a href="#" class="nav-link active mt-auto"><i class="far fa-user-circle"></i> Profil</a>
                    <a href="index.php" class="nav-link active"><i class="fas fa-home"></i> Accueil</a>
                    <a href="panier.php" class="nav-link active"><i class="fas fa-shopping-basket"></i> Panier</a>
                    <a href="testrendezvous.php" class="nav-link active"><i class="fas fa-calendar-check"></i>rendez-vous</a>
                <a href="testreclamation.php" class="nav-link active"><i class="fas fa-exclamation"></i>reclamation</a>
                    <a href="signout.php" class="nav-link active mb-auto"><i class="fas fa-cogs"></i> Déconnexion</a>

                </div>

            </div>

            <div class="col-md-9">

                <div class="container content clear-fix">

                    <h2 class="mt-5 mb-5">Paramètres de profil</h2>
                    <?php

if (isset($_SESSION['idClient'])) {
    $user = $utilisateur1->recupererClient($_SESSION['idClient']);



?>
                    <div class="row" style="height:100%">

                        <div class="col-md-3">

                            <div href=# class="d-inline"><img src="../assets/images/Profile.png" width=130px style="margin:0;"><br>
                                <p class="pl-2 mt-2"><a href="#" class="btn" style="color:black;font-weight:600"><?php echo $user['nomClient']; ?></a></p>
                            </div>


                        </div>

                        <div class="col-md-9">

                            <div class="container">
                               


                                    <form action="" method="POST">

                                        <div class="form-group">

                                            <label for=fullName>Nom et Prénom</label>
                                            <input type="text" class="form-control" id="fullName" name="nomClient" value="<?php echo $user['nomClient']; ?>">

                                        </div>
                                        <div class="form-group">

                                            <label for=email>Email</label>
                                            <input type="email" class="form-control" id="email" name="emailClient" value="<?php echo $user['emailClient']; ?>">

                                        </div>
                                        <div class="form-group">

                                            <label for=pass>Mot de passe</label>
                                            <input type="password" class="form-control" id="myInput" name="pass" value="<?php echo $user['password']; ?>">
                                            <input type="checkbox" onclick="myFunction()">Montrer le mot de passe

                                            <script>
                                                function myFunction() {
                                                    var x = document.getElementById("myInput");
                                                    if (x.type === "password") {
                                                        x.type = "text";
                                                    } else {
                                                        x.type = "password";
                                                    }
                                                }
                                            </script>
                                        </div>
                                        <div class="form-group">

                                            <label hidden for=pass>Mot de passe (1)</label>
                                            <input hidden type="password" class="form-control" id="pass" name="pass1" value="<?php echo $user['passwordVerif']; ?>">

                                        </div>


                                        <div class="row mt-5">

                                            <div class="col">

                                                <button type="submit" class="btn btn-primary btn-block">Modifier</button>

                                            </div>



                                        </div>

                                    </form>
                                <?php
                                }
                                ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script href="../assets/js/profile.js"></script>

</body>

</html>