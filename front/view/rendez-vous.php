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
      <script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../assets/js/test.js"></script>
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link " href="index.php">Accueil</a></li>
                        <li><a class="nav-link" href="#about">Site</a></li>

                        <li><a class="nav-link active" href="#appointment">Rendez_vous</a></li>
                        <li><a class="nav-link" href="gallery.php">Mdicaments</a></li>
                        <li><a class="nav-link" href="doctor.php">Médecins</a></li>
                        <li><a class="nav-link" href="blog.php">Blog</a></li>
                        <li><a class="nav-link" href="Réclamation.php">Réclamation</a></li>
                        <li><a class="nav-link" href="#contact">Contact</a></li>
                       

		
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->
    <!-- Start Appointment -->
    <div id="appointment" class="appointment-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Rendez-vous</h2>
                        <p>Maintenant </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2>Prendre un Rendez-vous</h2>
                        </div>
                        <form name="f" action="ajouterrendezvous.php" method="POST">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Nom</label>
                                        <input id="nom" name="name" type="text" placeholder="Votre nom" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Prenom</label>
                                        <input id="prenom" name="prenom" type="text" placeholder="Votre prenom" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Date</label>
                                        <input id="date" name="date" type="date" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Heure</label>
                                        <select id="time" name="time" class="form-control">
                                            <option value="select">select</option>
                                            <option value="8:00 to 9:00">8:00 à 9:00</option>
                                            <option value="9:00 to 10:00">9:00 à 10:00</option>
											<option value="10:00 to 1:00">10:00 à 11:00</option>
											<option value="10:00 to 1:00">11:00 à 12:00</option>
											<option value="10:00 to 1:00">12:00 à 13:00</option>
											<option value="10:00 to 1:00">15:00 à 16:00</option>
											<option value="10:00 to 1:00">16:00 à 17:00</option>
											<option value="10:00 to 1:00">17:00 à 18:00</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Nom du Doctor</label>
                                        <select id="appointmentfor" name="appointmentfor" class="form-control">
                                            <option value="Choose Department">Doctor</option>
											<option value="Gynacology">Gynacology</option>
											<option value="Dermatologist">Dermatologist</option>
											<option value="Orthology">Orthology</option>
											<option value="Anesthesiology">Anesthesiology</option>
											<option value="Ayurvedic">Ayurvedic</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="new-btn-d br-2" onclick="verif_rendezvous();">Passez votre Rendez-vous</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2>Pourquoi prendre rendez-vous avec nous</h2>
                        </div>
                        <div class="feature-block">
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">24/7 heures disponibles</h4>
                                <div class="feature-content">
                                    <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Personnel expérimenté disponible</h4>
                                <div class="feature-content">
                                    <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Prix bas et frais</h4>
                                <div class="feature-content">
                                    <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Appointment -->
    <!-- Start Contact -->
    <div class="contact-box">
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
                            <h2>Subscribe</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input class="form-control-1" id="email-1" name="email" placeholder="Email Address" required="" type="text">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="new-btn-d br-2">Subscribe</button>
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