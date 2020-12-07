<?php
	include_once "../controller/medicamentcontroller.php";
	include_once '../model/medicament.php';

	$medicament= new medicamentcontroller();
	
	if (
		isset($_POST["nomMedicament"]) && 
        isset($_POST["quantite"])
      
       
   
	){
        
            $user=new medicament($_POST['nomMedicament'],$_POST['quantite'],$_POST['prix'],$_POST['typeMedicament'],$_POST['imgMedicament']);
            $medicament->modifiermedicament($user,$_GET['idMedicament']);
            
            header('refresh:1;url=gestion medicaments.php');
             
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
  
			if (isset($_GET['idMedicament'])){
				$user=$medicament->recuperermedicament($_GET['idMedicament']);
                
                 
        ?>
    <form class="splash-container" action="" method="POST">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Modifier medicaments</h3>
            </div>
            <div class="card-body">
            <div class="form-group">
            <input type="text" name="idMedicament" id="idMedicament"  value = "<?php echo $user['idMedicament']; ?>" disabled>
            </div>
            <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nomMedicament" required="" placeholder="nom medicament" autocomplete="off"  value = "<?php echo $user['nomMedicament']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="number" name="quantite" required="" placeholder="quantité" autocomplete="off"  value = "<?php echo $user['quantite']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="text" name="prix" required="" placeholder="prix"  value = "<?php echo $user['prix']; ?>">
                </div>
                			<td>
                            <label class="custom-control custom-radio custom-control-inline">
                           <?php  if ($user['idMedicament']=="avec ordonnance")?>
                             
                                                <input type="radio" name="typeMedicament"  value="avec ordonnance"checked="" class="custom-control-input"><span class="custom-control-label">avec ordonnance</span>
                                            </label>
                                            <?php  if ($user['idMedicament']=="sans ordonnance")?> 
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="typeMedicament"value="sans ordonnance" checked="" class="custom-control-input"><span class="custom-control-label">sans ordonnance</span>
                                            </label></td>
											
                <div class="form-group pt-2">
				<div class="card-header">
                
               photo de medicament
            </div>
                   <td><input type="text" name="imgMedicament"  value = "<?php echo $user['imgMedicament']; ?>"> </td>
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