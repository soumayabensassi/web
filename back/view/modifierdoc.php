<?php
	include_once "../controller/doctorcontroller.php";
	include_once '../model/docteur.php';

	$utilisateur1= new doctorcontroller();
	
	
	if (
		isset($_POST["nom"]) && 
        isset($_POST["username"]) 
	   ){
		
            $user = new docteur($_POST['nom'],$_POST['username'],$_POST['email'],$_POST['mdp'],$_POST['specealite'],$_POST['img']);
            $utilisateur1->modifierdoctor($user, $_GET['id']);
            header('refresh:1;url=doctor-finder.php');
        }
      
     
    
?>
<html>
	<head>
		<title>Modifier blog</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sign up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    
   
   <style>
        html,
        body {
            height: 100%;
        }
        
        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 150px;
            padding-bottom: 100px;
            }
           
    </style>
	</head>
	<body>
    
       
        <?php
  
			if (isset($_GET['id'])){
				$user=$utilisateur1->recupererdoctor($_GET['id']);
                
               
        ?>
		<form  action="" method="POST">
      
          <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Modifier le blog
                </h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
            <div class="form-group">
						<input type="text" name="id" id="id"  value = "<?php echo $user['id']; ?>" disabled>
                        </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nom" required="" placeholder="nom" autocomplete="off" value = "<?php echo $user['nom']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="username" autocomplete="off" value="<?php echo $user['username']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="email" autocomplete="off" value="<?php echo $user['email']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="categorie" type="text" name="mdp" required="" placeholder="mdp"value = "<?php echo $user['mdp']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" required=""name="specealite" placeholder="specealite" value = "<?php echo $user['specealite']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="img" type="file" name="img" required="" placeholder="img"value = "<?php echo $user['img']; ?>">
                </div>
               
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Modifier </button>
                </div>
               
            
             </div>
               
            </div>
        </form>  
		<?php
		}
		?>
	</body>
</html>