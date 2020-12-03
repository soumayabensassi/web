<?php
	include_once "../controller/clientscontroller.php";
	include_once '../Model/Client.php';

	$utilisateur1= new clientcontroller();
	
	
	if (
		isset($_POST["name"]) && 
        isset($_POST["email"]) && 
        isset($_POST["pass"]) && 
        isset($_POST["passV"])
	){
		
            $user = new Client($_POST['name'],$_POST['email'],$_POST['pass'],$_POST['passV']);
            $utilisateur1->modifierClient($user, $_GET['id']);
          //  header('refresh:5;url=patients.php');
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
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	</head>
	<body>
    
       
        <?php
  
			if (isset($_GET['id'])){
				$user=$utilisateur1->recupererClient($_GET['id']);
                
               
        ?>
		<form action="" method="POST">
       
          <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
            <div class="form-group">
						<input type="text" name="idClient" id="idClient"  value = "<?php echo $user['idClient']; ?>" disabled>
                        </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="name" required="" placeholder="Username" autocomplete="off" value = "<?php echo $user['nomClient']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off" value="<?php echo $user['emailClient']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="password" name="pass" required="" placeholder="Password"value = "<?php echo $user['pass']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="password" required=""name="passV" placeholder="Confirm" value = "<?php echo $user['passV']; ?>">
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