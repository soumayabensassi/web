<?php
session_start();
include_once("../controller/paniercontroller.php");

$erreur = false;

$action = (isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : null));
if ($action !== null) {
	if (!in_array($action, array('ajout', 'suppression', 'refresh')))
		$erreur = true;

	//récupération des variables en POST ou GET
	$l = (isset($_POST['l']) ? $_POST['l'] : (isset($_GET['l']) ? $_GET['l'] : null));
	$p = (isset($_POST['p']) ? $_POST['p'] : (isset($_GET['p']) ? $_GET['p'] : null));
	$q = (isset($_POST['q']) ? $_POST['q'] : (isset($_GET['q']) ? $_GET['q'] : null));

	//Suppression des espaces verticaux
	$l = preg_replace('#\v#', '', $l);
	//On vérifie que $p est un float
	$p = floatval($p);

	//On traite $q qui peut être un entier simple ou un tableau d'entiers

	if (is_array($q)) {
		$QteArticle = array();
		$i = 0;
		foreach ($q as $contenu) {
			$QteArticle[$i++] = intval($contenu);
		}
	} else
		$q = intval($q);
}

if (!$erreur) {
	switch ($action) {
		case "ajout":
			ajouterArticle($l, $q, $p);
			
			
			break;

		case "suppression":
			supprimerArticle($l);
		
			break;

		case "refresh":
			for ($i = 0; $i < count($QteArticle); $i++) {
				modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i], round($QteArticle[$i]));
			    
			}

			break;

		default:
			break;
	}
} ?>
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

	<link href="../assets/css/aaa.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
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

						<li><a class="nav-link" href="rendez-vous.php">Rendez_vous</a></li>
						<li><a class="nav-link" href="gallery.php">Médicaments</a></li>
						<li><a class="nav-link" href="doctor.php">Médecins</a></li>
						<li><a class="nav-link" href="blog.php">Blog</a></li>
						<li><a class="nav-link" href="Réclamation.php">Réclamation</a></li>
						<li><a class="nav-link" href="#contact">Contact</a></li>

						<?php

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
	<section class="jumbotron text-center">
		<div class="container">
			<h2 class="jumbotron-heading"><i class="fas fa-cart-plus"></i>   PANIER</h2>
		</div>
	</section>
	
		<div class="container mb-4">
			<div class="row">
				<div class="col-12">
				<div class="table-responsive">
					<form method="post" action="panier.php">
						<table class="table table-striped">
							<thead>
								<tr>

									<th scope="col">Libellé</th>
									<th scope="col">Quantité</th>
									<th scope="col">Prix Unitaire</th>
									<th scope="col">supprimer</th>

								</tr>
							</thead>


							<tbody>
                           
								<?php
								if (creationPanier()) {
									$nbArticles = count($_SESSION['panier']['libelleProduit']);
									if ($nbArticles <= 0)
										echo "<tr><td>Votre panier est vide </ td></tr>";
									else {

										for ($i = 0; $i < $nbArticles; $i++) {
										
											
											echo "<tr>";
											echo "<td>" . htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]) . "</ td>";
											echo "<td><input type=\"number\" size=\"4\" name=\"q[]\" value=\"" . htmlspecialchars($_SESSION['panier']['qteProduit'][$i]) . "\"/></td>";
											echo "<td>" . htmlspecialchars($_SESSION['panier']['prixProduit'][$i]) . "</td>";
											echo "<td><a  href=\"" . htmlspecialchars("panier.php?action=suppression&l=" . rawurlencode($_SESSION['panier']['libelleProduit'][$i])) . "\" ><i class=\"fa fa-trash \"></i></a></td>";
											echo "</tr>";
											
										}
										
										echo "<tr><td colspan=\"3\"> </td>";
										echo "<td colspan=\"2\">";
										echo "Total : " . MontantGlobal() ."DT";
										echo "</td></tr>";

										echo "<tr><td colspan=\"4\">";
										echo "<input type=\"submit\" value=\"Rafraichir\"/>";
										echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

										echo "</td></tr>";

									}
									
								}
								
								?>
								
    
							</tbody>
						</table>
					
					 </form>
					
			 </div>
			</div>
	<div class="col mb-2">
		<div class="row">
			<div class="col-sm-12  col-md-6">
				<button class="btn btn-block btn-light"><a href="gallery.php">Continuer vos achats</a></button>
				
			</div>
			<div class="col-sm-12 col-md-6 text-right">
				<button class="btn btn-lg btn-block btn-success text-uppercase"><a href="acheter_medicament.php">Check-out</a></button>
			</div>
		</div>
	</div>
	</div>
							</div>
				
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
						<form name="f">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" placeholder="Your number" id="number" class="form-control" name="number" required data-error="Please enter your number">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" id="message" placeholder="Your Message" rows="8" name="msg" data-error="Write your message" required></textarea>
										<div class="help-block with-errors"></div>
									</div>
									<div class="submit-button text-center">
										<input type="submit" id="submit" class="btn btn-common" value="Envoyer une réclamation " onclick="test();">

										<div id="msgSubmit" class="h3 text-center hidden"></div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>

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

<i class="fas fa-phone-volume"></i>
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

	</div>
	</div>

</body>

</html>]