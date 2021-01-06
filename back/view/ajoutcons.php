
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
    <form class="splash-container" action="ajouterconseil.php" method="POST">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Ajout conseil</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nomconseil" id="nomconseil" placeholder="nom conseil" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="conseil" id="conseil" placeholder="conseil" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="typeconseil" id="typeconseil" placeholder="typeconseil" autocomplete="off">
                </div>							
                <div class="form-group pt-2">
				<div class="card-header">
                
               photo pour conseil
            </div>
                   <td><input type='file' name="imgconseil"></td>
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">ajouter conseil</button>
                </div>
                
            </div>
            
        </div> 
    </form>
</body>

 
</html>