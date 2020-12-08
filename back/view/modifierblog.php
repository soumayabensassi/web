<?php
	include_once "../controller/blogscontroller.php";
	include_once '../model/blog.php';

	$utilisateur1= new blogcontroller();
	
	
	if (
		isset($_POST["nom"]) && 
        isset($_POST["nomarticle"]) &&
        isset($_POST["categorie"])  
	   ){
		
            $user = new blog($_POST['nom'],$_POST['nomarticle'],$_POST['date'],$_POST['categorie'],$_POST['img'],$_POST['blog']);
            $utilisateur1->modifierblog($user, $_GET['id']);
            header('refresh:1;url=blog manegment.php');
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
				$user=$utilisateur1->recupererblog($_GET['id']);
                
               
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
                    <input class="form-control form-control-lg" type="text" name="nomarticle" required="" placeholder="nomarticle" autocomplete="off" value="<?php echo $user['nomarticle']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="date" name="date" required="" placeholder="date" autocomplete="off" value="<?php echo $user['date']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="categorie" type="text" name="categorie" required="" placeholder="categorie"value = "<?php echo $user['categorie']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="img" type="file" name="img" required="" placeholder="img"value = "<?php echo $user['img']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" required=""name="blog" placeholder="blog" value = "<?php echo $user['blog']; ?>">
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