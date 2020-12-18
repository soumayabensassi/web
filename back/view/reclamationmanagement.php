<?PHP
include_once "../controller/reclamationscontroller.php";

$admin=new reclamationcontroller();
$liste=$admin->afficherreclamation();


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
                <a class="navbar-brand" href="index.php"><img src="../assets/images/logo.png"></a>
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
        <div class="nav-left-sidebar sidebar-dark"  style="top:160px;">
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
                                            <a class="nav-link" href="#">Medecins</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="reclamationmanagement.php">Réclamations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="rendezvousmanagement.php">Rendez-vous</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="livraison.php">Livraisons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="gestion medicaments.php">Medicaments</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ordonnance.php">Ordonances</a>
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
   
    <div class="dashboard-wrapper" style="top:160px;">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->

                <!-- ============================================================== -->

                <!-- recent orders  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- end recent orders  -->


                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- customer acquistion  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- end product category  -->
                <!-- product sales  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- end product sales  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- total revenue  -->
                <!-- ============================================================== -->


                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- category revenue  -->
                <!-- ============================================================== -->

                <!-- end category revenue  -->
                <!-- ============================================================== -->


                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <div class="footer" >
                    <div class="container-fluid" style="top:800px;">



                        <div class="card" >
                            <h5 class="card-header">les reclamations</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">Id</th>
                                                <th class="border-0">Nom d'utilisateur</th>
                                                
                                                <th class="border-0">email</th>
                                                <th class="border-0">numero tel</th>
                                                <th class="border-0">message</th>
                                                <th class="border-0">Status</th>
                                                <th class="border-0"></th>
                                                <th class="border-0"></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php $i=0; ?>  
                                            <?php foreach($liste as $reclamation) {
                                                $i++; ?>
                                            <tr>
                                                   
                                                   
                                                   <td><?PHP echo $reclamation['id_reclamation']; ?></td> 
                                                   <td><?PHP echo $reclamation['nom_reclamation']; ?></td>
                                                   <td><?PHP echo $reclamation['number_reclamation']; ?></td>
                                                   <td><?PHP echo $reclamation['email_reclamation']; ?></td>
                                                   <td><?PHP echo $reclamation['message_reclamation']; ?></td> 
                                                   <td><?PHP echo $reclamation['status']; ?></td> 
                                                   <td>
                                                   <form method="POST" action="gererreclamation.php">
                                                   <input type="submit" class="btn btn-outline-light float" value="traiter" name="traiter">
                                                   <input type="hidden" value=<?PHP echo $reclamation['id_reclamation']; ?> name="id_reclamation">
                                                   <input type="hidden" value=<?PHP echo $reclamation['email_reclamation']; ?> name="email_reclamation">
                                                   <input type="hidden" value=<?PHP echo $reclamation['client']; ?> name="idClient">
                                                   </form>
                                                    </td>
                                                    <td> 
                                                        <form method="POST" action="deletereclamation.php">
                                                        <input type="submit" class="btn btn-outline-light float" value="delete" name="delete">
                                                   <input type="hidden" value=<?PHP echo $reclamation['id_reclamation']; ?> name="id_reclamation">
                                                   </form>
                                                    </td>
                                                   
                                            </tr><?PHP
                                        }?>

                                               
                                        </tbody>
                                    </table>
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
        <script src="../vassets/vendor/slimscroll/jquery.slimscroll.js"></script>
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