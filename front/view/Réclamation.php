<?php session_start();
	include_once "../controller/reclamationscontroller.php";
	include_once '../model/reclamation.php';

    $utilisateur1= new reclamationcontroller(); ?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <script src="../assets/js/test.js"></script>
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
                        
						<li><a class="nav-link" href="rendez-vous.php">Rendez_vous</a></li>
                        <li><a class="nav-link" href="gallery.php">Médicaments</a></li>
						<li><a class="nav-link" href="doctor.php">Médecins</a></li>
                        <li><a class="nav-link " href="categorie.php">Blog</a></li>
						<li><a class="nav-link active" href="Réclamation.php">Réclamation</a></li>
                        <li><a class="nav-link" href="#contact">Contact</a></li>
                        <?php
if (empty($_SESSION['m_un'])) {?>
    <li class="nav-link"><a  href="login.php">Se connecter</a></li>
    
<?php } else { ?> 
    <li class="nav-link" ><?php include "logged.php"; ?></li>
    <li class="nav-link" ><?php include "notification.php"; ?></li>
    

<?php

}
?>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
    <!-- End header -->
    <script src="../assets/js/test.js"></script>
<!-- Start Contact -->
<div id="Réclamation" class="contact-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>Réclamation</h2>
                    <p>Ajouter une réclamation . </p>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-lg-12 col-xs-12">
              <div class="contact-block">
                <form name="f" action="ajouterreclamation.php" method="POST">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>                                 
                    </div>
                    <?php if (isset($_SESSION['e'])) { ?>
                     <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" value="<?php echo $_SESSION['e'] ?>" id="email" class="form-control" name="email" required data-error="Please enter your email">
                            <div class="help-block with-errors"></div>
                        </div> 
                    </div>
                    <?php } else {?>
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="your email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                            <div class="help-block with-errors"></div>
                        </div> 
                    </div> 
                    <?php } ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" placeholder="Your number" id="number" class="form-control" name="number" required data-error="Please enter your number">
                            <div class="help-block with-errors"></div>
                        </div> 
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"> 
                            <textarea class="form-control" id="message" placeholder="Your Message" rows="8"name="msg" data-error="Write your message" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <input type="hidden" id="idClient"  name="idClient" value="<?php echo $_SESSION['idClient'] ?>">
                        <div class="submit-button text-center">
                            <input type="submit"  id="submit" class="btn btn-common" value="Envoyer une réclamation " onclick="test();" >
                            
                            <div id="msgSubmit" class="h3 text-center hidden"></div> 
                            <div class="clearfix"></div> 
                        </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
            
            
            <div id="contact"class="col-lg-12 col-xs-12">
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
                    <button type="submit" class="new-btn-d br-2">
                        Subscribe
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