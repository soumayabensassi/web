<?php
	include_once "../controller/clientscontroller.php";
	include_once '../Model/Client.php';

	$utilisateur1= new clientcontroller();
	
	if (
		isset($_POST["nom"]) && 
        isset($_POST["email"])
       
   
	){
        
        
            $user=new Client($_POST['nom'],$_POST['email'],$_POST['password'],$_POST['passwordVerif']);
            $utilisateur1->modifierClient($user,$_GET['idClient']);
            
            header('refresh:1;url=patients.php');
             
        }
      
        
?>
<html>
	<head>
		<title>Modifier Utilisateur</title>
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
  
			if (isset($_GET['idClient'])){
				$user=$utilisateur1->recupererClient($_GET['idClient']);
                
                 
        ?>
		<form class="splash-container" action="" method="POST">
      
          <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Modifier les données d'un' Client
                </h3>
                <p> Changer les informations.</p>
            </div>
            <div class="card-body">
            <div class="form-group">
						<input type="text" name="idClient" id="idClient"  value = "<?php echo $user['idClient']; ?>" disabled>
                        </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nom" id="nom"  placeholder="Username" autocomplete="off" value = "<?php echo $user['nomClient']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" id="email" required="" placeholder="E-mail" autocomplete="off" value="<?php echo $user['emailClient']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg"  type="password"  name="password" id="pass" required="" placeholder="Password"value = "<?php echo $user['password']; ?>" >
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="password" name="passwordVerif" id="passVerif" required=""  placeholder="Confirm" value = "<?php echo $user['passwordVerif']; ?>"  >
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Modifier </button>
                </div>
               
            
             </div>
               
 </div>
 </form>  
		<?php
		}
		?>
	</body>
</html>