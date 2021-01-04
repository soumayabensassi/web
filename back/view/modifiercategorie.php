<?php
	include_once "../controller/categoriecontroller.php";
	include_once '../model/categorie.php';

	$categorie= new categoriecontroller();
	
	if (
		isset($_POST["nom_categorie"]) && 
        isset($_POST["sous_categorie"])
      
       
   
	){
        
            $user=new categorie($_POST['nom_categorie'],$_POST['sous_categorie']);
            $categorie->modifiercategorie($user,$_GET['idcategorie']);
            
            header('refresh:1;url=gestion categorie.php');
             
        }
      
        
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V11</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
  
  if (isset($_GET['idcategorie'])){
	  $user=$categorie->recuperercategorie($_GET['idcategorie']);
  }
	   
?>

	<div class="container-contact100" >
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="" method="POST">
				<a style=" padding: 0px 0px 0px 670px; height: 60px" href="index0.php"><img src="../assets/images/logo.png" alt="image"></a>
				<span class="contact100-form-title">
					Modifier Categorie
				</span>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Id Categorie *</span>
					<input class="input100" type="text" name="idcategorie" id="idcategorie"  value = "<?php echo $user['idcategorie']; ?>" disabled>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required"  >
					<span class="label-input100">Nom De La Categorie *</span>
					<input class="input100" type="text" name="nom_categorie" placeholder="nom categorie" value = "<?php echo $user['nom_categorie'];?>">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Nom De La Sous Categorie *</span>
					<textarea style="white-space:pre" class="input100" type="text" name="sous_categorie" placeholder="sous categorie"  id="content1"  ><?php echo $user['sous_categorie'];?></textarea>
				</div>


				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn"  type="submit">
							Modifier
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/js/main.js"></script>
	

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
