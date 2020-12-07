

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>sign up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    
    <link  href="../assets/css/styles/error.css" rel="stylesheet">


   
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

<body >
				
	<!-- End top bar -->
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" action="ajouterClients.php" method="POST"> 
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
            <?php if (isset($_GET['error'])) { ?>
                                        <p class="error"><?php echo $_GET['error']; ?></p>
                                    <?php } ?>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nick" required="" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="password" name="pass" required="" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="password" required=""name="passV" placeholder="Confirm">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                </div>
                <div class="form-group row pt-0">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                        <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                    </div>
                  
                </div>
             </div>
                 <div class="card-footer bg-white">
                  <p>Already member? <a href="login.php" class="text-secondary">Login Here.</a></p>
                 </div>
 </div>
    </form>
</body>


</html>