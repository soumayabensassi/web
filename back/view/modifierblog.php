<?php
session_start();
    include_once "../controller/blogscontroller.php";
    include_once "../controller/categoriescontroller.php";
	include_once '../model/blog.php';

	$utilisateur1= new blogcontroller();
	
	$utilisateur2= new categoriecontroller();
	if (

        isset($_POST["nomarticle"]) 
        
	   ){
		
            $user = new blog($_POST['nomarticle'],$_POST['date'],$_POST['img'],$_POST['blog']);
            $utilisateur1->modifierblog($user, $_GET['id']);
            header("refresh:1;url=categories.php");
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
		<form class="splash-container"   action="" method="POST">
      
          <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Modifier le blog
                </h3>
                
            </div>
            <div class="card-body">
            <div class="form-group">
						<input type="text" name="id" id="id"  value = "<?php echo $user['id']; ?>" disabled >
                        </div>
                <div class="form-group">
                <label for=nom>Nom docteur: </label>
                   <?php echo $_SESSION['nomdoc']; ?>
                </div>
                <div class="form-group">
                <label for=nom>Nom article: </label>
                    <input class="form-control form-control-lg" type="text" name="nomarticle" required="" placeholder="nomarticle" autocomplete="off" value="<?php echo $user['nomarticle']; ?>">
                </div>
                <div class="form-group">
                <label for=nom>date </label>
                    <input class="form-control form-control-lg" type="date" name="date" required="" placeholder="date" autocomplete="off" value="<?php echo $user['date']; ?>">
                </div>
                <div class="form-group">
                <label for=nom>Nom categorie: </label>
                <?php $cata=$utilisateur2->recuperercategorie($user['id']); ?>
                    <?php echo $cata['nom']; ?>
                </div>
                <div class="form-group">
                <label for=nom>Image: </label>
                    <input class="form-control form-control-lg" id="img" type="file" name="img" required="" placeholder="img"value = "<?php echo $user['img']; ?>">
                </div>
                <div class="form-group">
                <label for=nom>Blog: </label>
                <textarea class="form-control form-control-lg" type="text" required=""name="blog" placeholder="blog" value = "<?php echo $user['blog']; ?>"><?php echo $user['blog']; ?></textarea>
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