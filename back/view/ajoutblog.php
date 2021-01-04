<?php session_start(); 

include_once "../controller/blogscontroller.php";
include_once "../controller/categoriescontroller.php";
include_once '../model/categories.php';

$blog=new blogcontroller();
$liste=$blog->afficherblog($_GET['id']);
$utilisateur1= new categoriecontroller();
	
	
	if (
		isset($_POST["nomdoc"]) 
         
	   ){
		
            $cat = new categories($_POST['nomdoc']);
            $utilisateur1->modifiercategorie($cat, $_GET['id']);
            
        }


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/select2/css/select2.css">
    <link rel="stylesheet" href="../assets/vendor/summernote/css/summernote-bs4.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <title>Pick Medico</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
   <?php
  
  if (isset($_GET['id'])){
      $cat=$utilisateur1->recuperercategorie($_GET['id']);
      
    
     
?>
    <form action="ajouterblog.php" method="POST">
        <div class="main-content container-fluid p-0">
            <div class="email-head">
                <div class="email-head-title">Ecrire votre blog<span class="icon mdi mdi-edit"></span></div>
            </div>
            <div class="subject">
                <div class="form-group row pt-2">
                    <label class="col-md-1 control-label">   nom de medecin</label>
                    <div class="col-md-11">
                        <input class="form-control" type="text" name="nom" value= "<?php echo $_SESSION['nomdoc']; ?> ">
                    </div>
                </div>
            </div>
            <div class="subject">
                <div class="form-group row pt-2">
                    <label class="col-md-1 control-label">   nom de larticle </label>
                    <div class="col-md-11">
                        <input class="form-control" type="text" name="nomarticle">
                    </div>
                </div>
            </div>
            <div class="subject">
                <div class="form-group row pt-2">
                    <label class="col-md-1 control-label">   date </label>
                    <div class="col-md-11">
                        <input class="form-control" type="date" name="date">
                    </div>
                </div>
            </div>
            <div class="subject">
                <div class="form-group row pt-2">
                    <label class="col-md-1 control-label">  categorie</label>
                    <div class="col-md-11">
                        <input class="form-control" type="text" name="categorie" value= "<?php echo $cat['id']; ?>" >
                    </div>
                </div>
            </div>
            <div class="subject">
                <div class="form-group row pt-2">
                    <label class="col-md-1 control-label">  image</label>
                    
                        <input class="form-control" type="file" name="img">
                    </div>
                </div>
            </div>
        </div>
        <div class="email editor">
            <div class="col-md-12 p-0">
                <div class="form-group">
                    <label class="control-label sr-only" for="summernote">Descriptions </label>
                    <textarea id="summernote" name="blog" rows="6" placeholder="Write Descriptions"></textarea>
                </div>
            </div>
            <div class="email action-send">
                <div class="col-md-12 ">
                    <div class="form-group">
                        <button class="btn btn-primary btn-space" type="submit"><i class="icon s7-mail"></i> Publier</button>
                        <button class="btn btn-secondary btn-space" type="button"><i class="icon s7-close"></i> Annuler</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </form>
    <?PHP
                                        }?>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
    </div>
    </div>
    </form>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/select2/js/select2.min.js"></script>
    <script src="../assets/vendor/summernote/js/summernote-bs4.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                tags: true
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300

            });
        });
    </script>
</body>

</html>