<?php
session_start();

include_once "../controller/rendezvouscontroller.php";
include_once '../model/rendezvous.php';
include_once "../controller/doctorcontroller.php";

$utilisateur1 = new rendezvouscontroller();
$count = new rendezvouscontroller();
$utilisateur2= new doctorcontroller();

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
    <title>Paramètres de rendez-vous</title>



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
           $j=0;
            $count = $count->afficherRV($_SESSION['e']);
            foreach ($count as $user) { $j++; }
            ?>

            <?php

            if (isset($_SESSION['e'])) {
                $rendezvous = $utilisateur1->afficherRV($_SESSION['e']);
                    if ($j>0) {     
            ?>
       
                <div class="footer" style="margin-top:-900px; margin-left:360px;">
                    <div class="container-fluid">



                        <div class="card">
                            <h5 class="card-header">votre rendez-vous</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table" >
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">Nom </th>
                                                <th class="border-0">penom </th>
                                                <th class="border-0">email</th>
                                                <th class="border-0">date</th>
                                                <th class="border-0">heure</th>
                                                <th class="border-0">docteur</th>
                                                <th class="border-0">gerer</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                                  
                                            <?php foreach($rendezvous as $rendezvous) { 

                                                    $id= $rendezvous['doctor'];
                                                    $list=$utilisateur2->recupererdoctor($id); 
                                                ?>
                                            <tr>
                                                   
                            
                                                   <td><?php echo $rendezvous['nom']; ?></td>
                                                   <td> <?php echo $rendezvous['prenom']; ?></td>
                                                   <td><?php echo $rendezvous['email']; ?></td>
                                                   <td><?php echo $rendezvous['date']; ?></td>
                                                   <td><?php echo $rendezvous['heure']; ?></td>
                                                   <td> <?php echo $list['nom']; ?></td> 
                                                   
                                                  <td>
                                                  <form method="POST" action="gestionrendezvous.php">
                                                  <input type="hidden"  value=<?PHP echo $rendezvous['id_rendezvous']; ?> name="id_rendezvouss">
                                                   <input type="submit" class="btn btn-outline-primary" value="gerer" name="gerer">
                                                   </form>
                                                   </td>
                                                   
                                            </tr><?PHP
                                        }?>

                                               
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                    <?php

                    } else {
                    ?>
                        <div class="col-md-9">

                            <div class="container content clear-fix">

                                <h2 class="mt-5 mb-5">vous n'avez pas de rendez-vous</h2>
                                <a class="nav-link" href="rendez-vous.php">
                                    <h5>prendre un rendez-vous</h5>
                                </a>
                            </div>
                        </div>

            <?php 
                }  }
            ?>

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




