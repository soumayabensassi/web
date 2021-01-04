<?php
session_start();
include_once '../model/docteur.php';
include_once '../controller/doctorcontroller.php';
echo
$message="";
$userC= new doctorcontroller();

if ( isset($_POST["email"]) &&
    isset($_POST["mdp"]))
    {
if (!empty($_POST["email"]) && 
!empty($_POST["mdp"])){
$message=$userC->connexionAccount($_POST["email"],$_POST["mdp"]);
$_SESSION ['e0'] = $_POST["email"];
if ($message!='pseudo ou mot de passe incorrect'){
    $_SESSION['m_un0']=$_POST["email"];
header('Location:index1.php');}
else{
    $message='pseudo ou mot de passe incorrect';
    header("Location: login.php?error=Incorect email or password");
    
}
    }
    else{
    $message ="Missing information";
    if (empty($_POST["email"])) {
        header("Location: login.php?error=Email is required");
    }
    if (empty($_POST["mdp"])) {
        header("Location: login.php?error=Password is required");
    }
}
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
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

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center">
                <a><img class="logo-img" src="../assets/images/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
         <?php }
          ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="email" name="email" type="email" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="mdp" name="mdp" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>