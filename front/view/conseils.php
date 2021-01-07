<?PHP
session_start();
include_once "../controller/conseilcontroller.php";

$cons = new conseilcontroller();
$liste1 = $cons->afficherconseil();


?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Pick Medico </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="../assets/css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->

    <!-- Start top bar -->
    <div class="main-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-top">
                        <a class="new-btn-d br-2" href="conseils.php"><span>Conseils</span></a>
                        <div class="mail-b"><a href="mailto:pick.medico@gmail.com"><i class="fas fa-at" aria-hidden="true"></i> Pick-Medico@gmail.com</a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wel-nots">
                        <p>Bienvenue dans notre site Pick Medico!</p>
                    </div>
                    <div class="right-top">
                        <ul>
                            <li><a href="https://www.facebook.com/Pick-Medico-103966288259025"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End top bar -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="../assets/images/logo.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="index.php">Accueil</a></li>
                        <li><a class="nav-link" href="#about">Site</a></li>

                        <li><a class="nav-link" href="rendez-vous.php">Rendez_vous</a></li>
                        <li><a class="nav-link" href="gallery.php">Médicaments</a></li>
                        <li><a class="nav-link" href="doctor.php">Médecins</a></li>
                        <li><a class="nav-link" href="categorie.php">Blog</a></li>
                        <li><a class="nav-link" href="Réclamation.php">Réclamation</a></li>
                        <li><a class="nav-link" href="#contact">Contact</a></li>

                        <?php
                      
                        if (empty($_SESSION['m_un'])) { ?>

                            <li class="nav-link"><a href="login.php">Se connecter</a></li>

                        <?php } else { ?>
                            <li class="nav-link"><?php include "logged.php"; ?></li>
                            <li class="nav-link"><?php include "notification.php"; ?></li>




                        <?php

                        }
                        ?>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="reclamation" class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Conseils</h2>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-light">
                                        <tr class="border-0">

                                            <th class="border-0">Image</th>
                                            <th class="border-0">nom Conseil</th>
                                            <th class="border-0">Conseil</th>
                                            <th class="border-0">Type de conseil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($liste1 as $cons) { ?>
                                            <tr>

                                                <td>
                                                    <?PHP $a = $cons['imgconseil'];
                                                    print "<img  src='../../back/assets/images/$a' >" ?>
                                                </td>
                                                <td><?PHP echo $cons['nomconseil']; ?></td>
                                                <td><?PHP echo $cons['conseil']; ?></td>
                                                <td><?PHP echo $cons['typeconseil'] ?> </td>
                                            </tr>
                                        <?PHP
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>