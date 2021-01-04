<?php
session_start();

include_once "../controller/doctorcontroller.php";
include_once '../Model/docteur.php';

$utilisateur1 = new doctorcontroller();

if (
    isset($_POST["nom"]) &&
    isset($_POST["email"])


) {


    $user = new docteur($_POST['nom'], $_POST['username'], $_POST['email'], $_POST['mdp'], $_POST['specealite'], $_POST['img']);
    $utilisateur1->modifierdoctor($user, $_SESSION['id']);

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

    <link rel="stylesheet" href="../../front/assets/css/profile.css">
    <title>Paramètres de profil</title>



</head>

<body>





    <div class="row align-items-center" style="height:100%">

        <div class="col-md-3 d-none d-md-block" style="height:100%">

            <div class="container-fluid nav sidebar flex-column">

                <a href="#" class="nav-link active mt-auto"><i class="far fa-user-circle"></i> Profil</a>
                <a href="index0.php" class="nav-link active"><i class="fas fa-home"></i> Accueil</a>

                <a href="signout.php" class="nav-link active mb-auto"><i class="fas fa-cogs"></i> Déconnexion</a>

            </div>

        </div>

        <div class="col-md-9">

            <div class="container content clear-fix">

                <h2 class="mt-5 mb-5">Paramètres de profil</h2>
                <form action="" method="POST">
                    <?php

                    if (isset($_SESSION['id'])) {
                        $user = $utilisateur1->recupererdoctor($_SESSION['id']);



                    ?>
                        <div class="row" style="height:100%">

                            <div class="col-md-3">

                                <div class="form-group">

                                    <div class="blog-img">
                                        <img class="img-fluid" <?PHP $a = $user['img'];
                                                                print "<img src='../../front/assets/images/$a' " ?> />
                                        <input type="file" class="form-control" name="img" value="<?php echo $user['img']; ?>">
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-9">

                                <div class="container">





                                    <div class="form-group">

                                        <label for=fullName>Nom et Prénom</label>
                                        <input type="text" class="form-control" id="fullName" name="nom" value="<?php echo $user['nom']; ?>">

                                    </div>
                                    <div class="form-group">

                                        <label for=fullName>username</label>
                                        <input type="text" class="form-control" id="fullName" name="username" value="<?php echo $user['username']; ?>">

                                    </div>
                                    <div class="form-group">

                                        <label for=email>Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>">

                                    </div>
                                    <div class="form-group">

                                        <label for=pass>Mot de passe</label>
                                        <input type="password" class="form-control" id="myInput" name="mdp" value="<?php echo $user['mdp']; ?>">
                                        <input type="checkbox" onclick="myFunction()">Show Password

                                        <script>
                                            function myFunction() {
                                                var x = document.getElementById("myInput");
                                                if (x.type === "mdp") {
                                                    x.type = "text";
                                                } else {
                                                    x.type = "mdp";
                                                }
                                            }
                                        </script>
                                    </div>
                                    <div class="form-group">

                                        <label for=pass>specealite</label>
                                        <input type="text" class="form-control" name="specealite" value="<?php echo $user['specealite']; ?>">

                                    </div>





                                    <div class="row mt-5">

                                        <div class="col">

                                            <button type="submit" class="btn btn-primary btn-block">Modifier</button>

                                        </div>



                                    </div>


                                <?php
                            }
                                ?>
                                </div>

                            </div>

                        </div>
                        </form>
                     
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