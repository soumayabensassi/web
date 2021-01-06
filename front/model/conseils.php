<?PHP
require_once "controller/conseilcontroller.php";

$cons=new conseilcontroller();
$liste=$cons->afficherconseil();


?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Pick Medico - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <script src="js/test.js"></script>
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
						<a style="background :#00cb86;" class= "new-btn-d br-2" href="conseils.html"><span>Conseils</span></a>
						<div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Pick-Medico@gmail.com</a></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p>Welcome to Our Pick Medico!</p>
					</div>
					<div class="right-top">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
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
				<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link " href="index.html">Home</a></li>
                        <li><a class="nav-link" href="#about">Qui sommes-nous?</a></li>
                        
						<li><a class="nav-link" href="rendez-vous.html">Prendre Rendez-vous</a></li>
                        <li><a class="nav-link" href="gallery.html">Consulter les médicaments</a></li>
						<li><a class="nav-link" href="doctor.html">Consulter les médecins</a></li>
                        <li><a class="nav-link " href="blog.html">Blog</a></li>
						<li><a class="nav-link " href="Réclamation.html">Réclamation</a></li>
                        <li><a class="nav-link" href="#contact">Contact</a></li>
                        <li><a class="nav-link" href="pages1/sign-up.html">S'inscrire</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="Réclamation" class="contact-box">
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
                                        <?php foreach($liste as $cons) { ?>
                                            <tr>
                                               
                                                <td>
                                                    <?PHP $a=$cons['imgconseil']; print"<img  src='assets/images/$a' >"?>
                                                </td>
                                                <td><?PHP echo $cons['nomconseil']; ?></td>
                                                <td><?PHP echo $cons['conseil']; ?></td>
                                                <td><?PHP echo $cons['typeconseil']?> </td>
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
	</header>
    <!-- End header -->