<?php
include_once "../../back/controller/blogscontroller.php";
include_once "../controller/ratingcontroller.php";
include_once "../../back/controller/categoriescontroller.php";
include_once "../../back/controller/doctorcontroller.php";
include_once '../model/blog.php';
include_once '../model/rating.php';

$cat=new categoriecontroller();
$liste2=$cat->affichercategorie();	
$note = new ratingcontroller();
$liste1 = $note->affichernote();
$doc=new doctorcontroller();
$liste3=$doc->afficherdoctor();	

$utilisateur1 = new blogcontroller();

$a = 0;
$somme = 0;
$n = 0;

$rate = 0;

?>

<?php session_start(); ?>

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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/custom.css">
    <!--***********************-->
    <link rel="stylesheet" href="../../back/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../../back/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../back/assets/libs/css/style.css">
    <link rel="stylesheet" href="../../back/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
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
                        <a class="new-btn-d br-2" href="#"><span>Conseils</span></a>
                        <div class="mail-b"><a href="#"><i class="fas fa-at" aria-hidden="true"></i> Pick-Medico@gmail.com</a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wel-nots">
                        <p>Welcome to Our Pick Medico!</p>
                    </div>
                    <div class="right-top">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
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
              
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link " href="index.php">Accueil</a></li>
                        <li><a class="nav-link" href="#about">Site</a></li>

                        <li><a class="nav-link" href="rendez-vous.php">Rendez-vous</a></li>
                        <li><a class="nav-link " href="gallery.php">Médicaments</a></li>
                        <li><a class="nav-link " href="doctor.php">Médecins</a></li>
                        <li><a class="nav-link active" href="categorie.php">Blog</a></li>
                        <li><a class="nav-link" href="Réclamation.php">Réclamation</a></li>
                        <li><a class="nav-link" href="#contact">Contact</a></li>
                        <?php
                        //<!--session_start();-->
                        if (empty($_SESSION['m_un'])) { ?>
                            <li class="nav-link"><a href="login.php">Se connecter</a></li>

                        <?php } else { ?>
                            <li class="nav-link"><?php include "logged.php"; ?></li>


                        <?php

                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Team -->


    <?php

    if (isset($_GET['id'])) {
        $x = $_GET['id'];
        $user = $utilisateur1->recupererblog($x);


    ?>
        <div id="team" class="team-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2><?php echo $user['nomarticle']; ?></h2>

                        </div>
                    </div>
                </div>

                <div class="row">



                    <div class="col-md-4 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                <img src="../assets/images/<?php echo $user['img']; ?>" alt="">
                            </div>
                            <div class="team-content">
                                <h3 class="title"><?php foreach($liste3 as $doc) { ?>
                            <?php if($user['medecin']===$doc['id']){  
                                                   echo  $doc['nom'];}}?></h3>
                                <span class="post"><?php foreach($liste2 as $cat) { ?>
                            <?php if($user['categorie']===$cat['id']){  
                                                $x=$cat['nom']; echo  $cat['nom'];}}?></span>
                                <ul class="social">
                                    <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-7">
                        <div class="product-information">
                            <!--/product-information-->

                            <h2><?php echo $x; ?>
                            </h2>
                            <p><?php echo $user['blog']; ?> </p>


                        </div>
                        <!--/product-information-->
                        <?php
											if (!empty( $_SESSION['idClient'])) {?>
                    <div class="col-sm-7">
                    <div class="product-information">
                    <div class="card-body border-top">
                        <h3 class="font-16">Rating</h3>
                        <?php foreach ($liste1 as $note) { ?>
                            <?php if ($note['idblog'] === $user['id']) { ?>
                                <?php $n = $n + 1; ?>
                                <?php $somme = $somme + $note['note']; ?>

                            <?php } ?>




                            <?php if (($note['idclient'] === $_SESSION['idClient']) && ($note['idblog'] === $user['id'])) { ?>

                                <p><?php echo "you've alrady voted = " ?><?php echo $note['note'] ?><label class="custom-control-label" for="customRadio5"><i class="fas fa-star rating-color fa-xs"></i></label> </p>


                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio1" class="custom-control-input" disabled>
                                    <label class="custom-control-label" for="customRadio1"><i class="fas fa-star rating-color fa-xs"></i></label>
                                </div>


                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio2" class="custom-control-input" disabled>
                                    <label class="custom-control-label" for="customRadio2"><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio3" class="custom-control-input" disabled>
                                    <label class="custom-control-label" for="customRadio3"><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="customRadio4" class="custom-control-input" disabled>
                                    <label class="custom-control-label" for="customRadio4"><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio5" name="customRadio5" class="custom-control-input" disabled>
                                    <label class="custom-control-label" for="customRadio5"><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs fa-xs"></i><i class="fas fa-star rating-color fa-xs fa-xs"></i><i class="fas fa-star rating-color fa-xs fa-xs"></i><i class="fas fa-star rating-color fa-xs fa-xs"></i></label>
                                </div>

                                <?php $a = 1; ?>

                            <?php } ?>



                        <?php
                        }
                        ?>
                        <?php if ($a === 0) { ?>

                            <form action="ajoutnote.php" method="POST">
                                <input type="text" name="id1" value="<?php echo $_SESSION['idClient']; ?> " hidden>
                                <input type="text" name="id2" value="<?php echo $user['id']; ?> " hidden>


                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="note" value="1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1"><i class="fas fa-star rating-color fa-xs"></i></label>
                                </div>


                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="note" value="2" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2"><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="note" value="3" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3"><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="note" value="4" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio4"><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio5" name="note" value="5" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio5"><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs fa-xs"></i><i class="fas fa-star rating-color fa-xs fa-xs"></i><i class="fas fa-star rating-color fa-xs fa-xs"></i><i class="fas fa-star rating-color fa-xs fa-xs"></i></label>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">rate the blog</button>
                                </div>
                            </form>

                        <?php
                        }
                        ?>

                        <p><?php echo "noted by= (" ?><?php echo $n ?><?php echo ") P" ?> </p>
                        <?php if ($n != 0) { ?>
                            <p><?php echo "global rating = " ?><?php echo $somme / $n; ?><label class="custom-control-label" for="customRadio5"><i class="fas fa-star rating-color fa-xs"></i></label> </p>
                        <?php } ?>

                    </div>
                    </div>
                    </div>
                </div>
                <?php } ?>

                </div>


                </div>

</div>




                <?php
                  }
                  ?>
         
        <!-- End Team -->
        <!-- Start Contact -->
        <div id="contact" class="contact-box">
            <div class="container">

                <div class="row">




                    <div id="contact" class="col-lg-12 col-xs-12">
                        <div class="left-contact">
                            <h2>Adresse</h2>
                            <div class="media cont-line">
                                <div class="media-left icon-b">
                                    <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                </div>
                                <div class="media-body dit-right">
                                    <h4>Adresse</h4>
                                    <p>Fleming 196 Woodside Circle Mobile, FL 36602</p>
                                </div>
                            </div>
                            <div class="media cont-line">
                                <div class="media-left icon-b">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="media-body dit-right">
                                    <h4>Email</h4>
                                    <a href="#">demoinfo@gmail.com</a><br>
                                    <a href="#">demoinfo@gmail.com</a>
                                </div>
                            </div>
                            <div class="media cont-line">
                                <div class="media-left icon-b">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <div class="media-body dit-right">
                                    <h4>Phone Number</h4>
                                    <a href="#">12345 67890</a><br>
                                    <a href="#">12345 67890</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- End Contact -->

            <!-- Start Subscribe -->
            <div class="subscribe-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="subscribe-inner text-center clearfix">
                                <h2>S'inscrire'</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input class="form-control-1" id="email-1" name="email" placeholder="Email Address" required="" type="text">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="new-btn-d br-2">
                                            S'inscrire'
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Subscribe -->



            <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

            <!-- ALL JS FILES -->
            <script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/popper.min.js"></script>
            <script src="../assets/js/bootstrap.min.js"></script>
            <!-- ALL PLUGINS -->
            <script src="../assets/js/jquery.magnific-popup.min.js"></script>
            <script src="../assets/js/jquery.pogo-slider.min.js"></script>
            <script src="../assets/js/slider-index.js"></script>
            <script src="../assets/js/smoothscroll.js"></script>
            <script src="../assets/js/TweenMax.min.js"></script>
            <script src="../assets/js/main.js"></script>
            <script src="../assets/js/owl.carousel.min.js"></script>
            <script src="../assets/js/form-validator.min.js"></script>
            <script src="../assets/js/contact-form-script.js"></script>
            <script src="../assets/js/isotope.min.js"></script>
            <script src="../assets/js/images-loded.min.js"></script>
            <script src="../assets/js/custom.js"></script>
</body>

</html>