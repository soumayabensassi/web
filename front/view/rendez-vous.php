<?php
session_start();

	include_once "../controller/rendezvouscontroller.php";
    include_once '../model/rendezvous.php';
    include_once "../../back/controller/doctorcontroller.php";
	include_once '../model/docteur.php';

    $utilisateur1= new rendezvouscontroller();
    $utilisateur2= new doctorcontroller();
    $list=$utilisateur2->afficherdoctor();
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
    <link rel="stylesheet" href="../assets/css/styles/fv.css" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script>
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
                        <p>Bienvenue dans notre site Pick Medico!</p>
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
                        <li><a class="nav-link" href="gallery.php">Medicaments</a></li>
                        <li><a class="nav-link" href="doctor.php">Médecins</a></li>
                        <li><a class="nav-link" href="blog.php">Blog</a></li>
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
                            <div class="item">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name"><span>Nom</span>
                                        <input type="text" id="nom" name="name"  placeholder="Votre nom"   class="form-control input-md" required="required">
                                        </label>   </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Prenom</label>
                                        <input id="prenom" name="prenom" type="text" placeholder="Votre prenom" class="form-control input-md" required="required">
                                    </div>
                                </div>
                                </div>
                                <!-- Text input-->
                                <?php if (isset($_SESSION['e'])) { ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="text" value="<?php echo $_SESSION['e'] ?>" class="form-control input-md" >
                                    </div>
                                </div>
                                <?php } else {?>
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
                                    </div>
                                <?php } ?>
                                <!-- Text input-->
                                <div class="item">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Date</label>
                                        <input type="date"  id="date" name="date" class="form-control input-md" required="required">
                                    </div>
                                </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="item">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Heure</label>
                                        <select type="time" id="time" name="time" class="form-control input-md" required="required">
                                            <option value="select" >Heure</option >
                                            <option value="8:00 to 9:00">8:00 à 9:00</option>
                                            <option value="9:00 to 10:00">9:00 à 10:00</option>
											<option value="10:00 to 11:00">10:00 à 11:00</option>
											<option value="11:00 to 12:00">11:00 à 12:00</option>
											<option value="12:00 to 13:00">12:00 à 13:00</option>
											<option value="15:00 to 16:00">15:00 à 16:00</option>
											<option value="16:00 to 17:00">16:00 à 17:00</option>
											<option value="17:00 to 18:00">17:00 à 18:00</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Nom du Doctor</label>
                                        <select id="appointmentfor" name="appointmentfor" class="form-control" required="required">
                                            <option value="Choose Department">Doctor</option>
                                            <?php foreach ($list as $docteur ) { ?>
                                            <option value="<?php echo $docteur['id'] ?>"><?php echo $docteur['nom'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <input type="hidden" id="idClient"  name="idClient" value="<?php echo $_SESSION['idClient'] ?>">
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
                                    <p></p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Personnel expérimenté disponible</h4>
                                <div class="feature-content">
                                    <p></p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Prix bas et frais</h4>
                                <div class="feature-content">
                                    <p></p>
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

        

        <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="../assets/js/validator.js"></script>
<script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
        .on('keyup blur', 'input', function() {
            validator.checkField.apply($(this).siblings().last()[0]);
        });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // Validate the form using generic validaing
        if (!validator.checkAll($(this))) {
            submit = false;
        }

        if (submit)
            this.submit();

        return false;
    });

    /* FOR DEMO ONLY */
    $('#vfields').change(function() {
        $('form').toggleClass('mode2');
    }).prop('checked', false);

    $('#alerts').change(function() {
        validator.defaults.alerts = (this.checked) ? false : true;
        if (this.checked)
            $('form .alert').remove();
    }).prop('checked', false);
</script>
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