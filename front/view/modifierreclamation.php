<?php
session_start();

include_once "../controller/reclamationscontroller.php";
include_once '../model/reclamation.php';

$utilisateur1 = new reclamationcontroller();
$count = new reclamationcontroller();

if (
    isset($_POST['nom'])


) {


    $user = new reclamation($_POST['nom'], $_POST['email'], $_POST['number'], $_POST['message']);
    $utilisateur1->modifierreclamation($user, $_POST['id_reclamation']);

    header('refresh:1;url=testreclamation.php');
}

$id_reclamation=$_POST['id_reclamation'];

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
    <title>votre reclamation</title>



</head>

<body>




    <div class="container-fluid main" style="height:100vh;padding-left:0px;">



        <div class="row align-items-center" style="height:100%">

            <div class="col-md-3 d-none d-md-block" style="height:100%">

                <div class="container-fluid nav sidebar flex-column">

                    <a href="profile.php" class="nav-link active mt-auto"><i class="far fa-user-circle"></i> Profil</a>
                    <a href="index.php" class="nav-link active"><i class="fas fa-home"></i> Accueil</a>
                    <a href="panier.php" class="nav-link active"><i class="fas fa-shopping-basket"></i> Panier</a>
                    <a href="testrendezvous.php" class="nav-link active"><i class="fas fa-calendar-check"></i>rendez-vous</a>
                    <a href="testreclamation.php" class="nav-link active"><i class="fas fa-exclamation"></i>reclamation</a>
                    <a href="signout.php" class="nav-link active mb-auto"><i class="fas fa-cogs"></i> Déconnexion</a>

                </div>

            </div>
            


           <?php
                $user = $utilisateur1->recupererreclamation($id_reclamation);
                

            ?>
                        <div class="col-md-4 d-none d-md-block" style="height:100%">

                            <div class="col-md-9">

                                <div class="container content clear-fix">

                                    <h2 class="mt-5 mb-5">Paramètres de reclamation </h2>

                                    <div class="row" style="height:100%">



                                        <div class="col-md-9">

                                            <div class="container">


                                                <form action="" method="POST">

                                                    <div class="form-group">

                                                        <label for=nom>Nom </label>
                                                        <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $user['nom_reclamation']; ?>">

                                                    </div>
                                                    <div class="form-group">
                                                        <label for=email>email </label>
                                                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email_reclamation']; ?>">

                                                    </div>
                                                    <div class="form-group">
                                                        <label for=numero>telephone </label>
                                                        <input type="text" class="form-control" id="number" name="number" value="<?php echo $user['number_reclamation']; ?>">

                                                    </div>
                                                    <div class="form-group">
                                                        <label for=message>message </label>
                                                        <textarea type="text" class="form-control" id="message" name="message" value="<?php echo $user['message_reclamation']; ?>"><?php echo $user['message_reclamation']; ?></textarea>

                                                    </div>

                                                    <input type="hidden" id="id_reclamation" name="id_reclamation" value=<?PHP echo $user['id_reclamation']; ?>>




                                                    <div class="row mt-5">

                                                        <div class="col">

                                                            <button type="submit" class="btn btn-primary ">Modifier</button>

                                                        </div>



                                                    </div>
                                                </form>
                                                <form method="POST" action="deletereclamation.php">
                                                    <div class="row mt-5">

                                                        <div class="col">
                                                            <input type="hidden" name="id_reclamation" value=<?PHP echo $user['id_reclamation']; ?>>
                                                            <button type="submit" id="id_reclamation" class="btn btn-primary " value="delete" name="delete">delete reclamation</button>

                                                        </div>
                                                    </div>
                                                </form>

                                            </div>

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

</body>

</html>