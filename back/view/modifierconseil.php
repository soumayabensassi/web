<?php
	include_once "../controller/conseilcontroller.php";
	include_once '../model/conseil.php';

	$conseil= new conseilcontroller();
	
	if (
		isset($_POST["nomconseil"]) && 
        isset($_POST["typeconseil"])
      
       
   
	){
        
            $user=new conseil($_POST['nomconseil'],$_POST['conseil'],$_POST['typeconseil'],$_POST['imgconseil']);
            $conseil->modifierconseil($user,$_GET['idconseil']);
            
            header('refresh:1;url=gestionconseil.php');
             
        }
      
        
?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pick Medico</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
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
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <?php
  
			if (isset($_GET['idconseil'])){
				$user=$conseil->recupererconseil($_GET['idconseil']);       
        ?>
    <form class="splash-container" action="" method="POST">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Modifier conseil</h3>
            </div>
            <div class="card-body">
            <div class="form-group">
            <input type="text" name="idconseil" id="idconseil"  value = "<?php echo $user['idconseil']; ?>" disabled>
            </div>
            <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nomconseil" required="" placeholder="nomconseil" autocomplete="off"  value = "<?php echo $user['nomconseil']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="conseil" required="" placeholder="conseil" autocomplete="off"  value = "<?php echo $user['conseil']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="typeconseil" required="" placeholder="typeconseil"  value = "<?php echo $user['typeconseil']; ?>">
                </div>
 
                <div class="form-group pt-2">
				<div class="card-header">
                
               photo pour medicament
            </div>
                   <td><input type="text" name="imgconseil"  value = "<?php echo $user['imgconseil']; ?>"> </td>
                </div>
                
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Modifier</button>
                </div>
                
            </div>
            
        </div>
    </form>
    <?php
		}
		?>
</body>

 
</html>