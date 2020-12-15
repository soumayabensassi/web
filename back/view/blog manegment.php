
<?PHP
include_once "../controller/blogscontroller.php";
include_once "../controller/categoriescontroller.php";
include_once '../model/categories.php';

$blog=new blogcontroller();
$liste=$blog->afficherblog();
$utilisateur1= new categoriecontroller();
	
	
	if (
		isset($_POST["nom"]) 
         
	   ){
		
            $user = new categories($_POST['nom']);
            $utilisateur1->modifiercategorie($user, $_GET['id']);
            
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

    
  
   
    
    
    <title>Pick Medico</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">Pick Medico</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        
                       
                                            <?php
                                    session_start();
                                     { ?>
                                        

                                    
                                        <li class="nav-link"><?php include "logged.php"; ?></li>


                                    <?php

                                    }
                                    ?>
                                
                            
                        
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">tasks</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Accounts Manegment <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../../front/view/patients.php">Patients</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="doctor-finder.php">Medecins</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Admins</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Taches </a>
                                <div id="submenu-2" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="categories.php">Blogs <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="doctor-finder.php">Medecins</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="reclamationmanagement.php">Reclamations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="rendezvousmanagement.php">Rendez vous</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="livraison.php">Livraisons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="gestion medicaments.php">Medicaments</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Ordonnance</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           
                           

                        </ul>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
               
                <div class="footer">
                    <div class="container-fluid">

                    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Blog</h5>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-light">
                            <tr class="border-0">
                            
                                <th class="border-0">nom de medecin</th>
                                <th class="border-0">id</th>
                                <th class="border-0">nom d'article</th>
                                <th class="border-0">date</th>
                                <th class="border-0">supprimer</th>
                                <th class="border-0">modifier</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
  
                        if (isset($_GET['id'])){
                            $user=$utilisateur1->recuperercategorie($_GET['id']);
                            
                            
                            
                        ?>
                            <tr class="border-0">
                            <td>nom de categorie:<?PHP echo $user['nom']; ?></td> 
                                </tr>
                        <?php foreach($liste as $blog) { ?>
                            <?php if($blog['categorie']===$user['nom']){ ?>
                                
                                            <tr>
                                            
                                                   
                                                   <td><?PHP echo $blog['nom']; ?></td> 
                                                   <td><?PHP echo $blog['id']; ?></td>
                                                   <td><?PHP echo $blog['nomarticle']; ?></td> 
                                                   <td><?PHP echo $blog['date']; ?></td>
                                                   
                                                    <td> 
                                                        <form method="POST" action="deleteblog.php">
                                                        <input class="btn btn-outline-light float-right" type="submit" name="supprimer" value="supprimer">
                                                        <input type="hidden" value=<?PHP echo $blog['id']; ?> name="id">
                                                        </form>
                                                    </td>
                                                    <td> 
                                                    <a class="btn btn-outline-light float-right" href="modifierblog.php?id=<?PHP echo $blog['id']; ?>">Modifier</a>
                            </td>
                                                    
                                            </tr>
                                            <?PHP
                                        }?>
                                            <?PHP
                                        }?>
                                        <?php
		}
		?>
                            <tr>
                            <td colspan="9"><a href="ajoutblog.php?id=<?PHP echo $user['id']; ?>" class="btn btn-outline-light float-right">add blogs</a></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1 -->
        <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <!-- bootstap bundle js -->
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- slimscroll js -->
        <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
        <!-- main js -->
        <script src="../assets/libs/js/main-js.js"></script>
        <!-- chart chartist js -->
        <script src="../assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
        <!-- sparkline js -->
        <script src="../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
        <!-- morris js -->
        <script src="../assets/vendor/charts/morris-bundle/raphael.min.js"></script>
        <script src="../assets/vendor/charts/morris-bundle/morris.js"></script>
        <!-- chart c3 js -->
        <script src="../assets/vendor/charts/c3charts/c3.min.js"></script>
        <script src="../assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
        <script src="../assets/vendor/charts/c3charts/C3chartjs.js"></script>
        <script src="../assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>