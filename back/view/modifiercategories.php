<?php
	include_once "../controller/categoriescontroller.php";
	include_once '../model/categories.php';

	$utilisateur1= new categoriecontroller();
	
	
	if (
		isset($_POST["nom"]) 
         
	   ){
		
            $user = new categories($_POST['nom']);
            $utilisateur1->modifiercategorie($user, $_GET['id']);
            header('refresh:1;url=categories.php');
        }
      
     
    
?>
<html>
	<head>
		<title>Modifier categorie</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modifier categorie</title>
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
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
	</head>
	<body>
    
       
        <?php
  
			if (isset($_GET['id'])){
				$user=$utilisateur1->recuperercategorie($_GET['id']);
                
               
        ?>
		<form  class="splash-container"  action="" method="POST">
      
          <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Modifier  categorie
                </h3>
                <p></p>
            </div>
            <div class="card-body">
            <div class="form-group">
						<input type="text" name="id" id="id"  value = "<?php echo $user['id']; ?>" disabled hidden>
                        </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nom" required="" placeholder="nom" autocomplete="off" value = "<?php echo $user['nom']; ?>">
                </div>
                
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