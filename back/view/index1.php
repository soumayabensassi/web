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
    <link rel="stylesheet" href="../../front/assets/css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="../../front/assets/css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../../front/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../front/assets/css/responsive.css">





    <title>Pick Medico</title>
</head>

<body>
    <?php session_start();
    $log = $_SESSION['e1'];?>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index1.php"><img src="../assets/images/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">



                        <?php { ?>
                            <?php
                            if ($log === 'azer@azer.az') { ?>

                                <li class="nav-link"><?php include "logged1.php"; ?></li>
                            <?php

                            } else {
                            ?>
                                <li class="nav-link"><?php include "logged.php"; ?></li>


                        <?php
                            }
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
        <?php
        if ($_SESSION['e1'] === 'azer@azer.az') { ?>

            <div class="nav-left-sidebar sidebar-dark" style="top:150px;">

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
                                    <div id="submenu-1" class="collapse submenu">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="../../front/view/patients.php">Patients</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="doctor-finder.php">Medecins</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="admins.php">admins</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Taches </a>
                                    <div id="submenu-2" class="collapse submenu">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="categories.php">Blogs <span class="badge badge-secondary">New</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="doctor-finder.php">Medecins</a>
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
                                                <a class="nav-link" href="gestion categorie.php">Categories Medicaments</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ordonnance.php">Ordonances</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="gestion fournisseur.php">Fournisseur</a>
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
<?php } else {
?>
    <div class="nav-left-sidebar sidebar-dark" style="top:150px;">

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

                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Taches </a>
                            <div id="submenu-2" class="collapse submenu">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="categories.php">Blogs <span class="badge badge-secondary">New</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="rendezvousmanagement.php">Rendez-vous</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="gestion medicaments.php">Medicaments</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="gestion categorie.php">Categories Medicaments</a>
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
<?php

        }
?>

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
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Modèle de tableau de bord</h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pick Medico: tableau de bord</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">

                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Revenu totale</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">$12099</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                                </div>
                            </div>
                            <div id="sparkline-revenue"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Nombre des Medicaments</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">$12099</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                                </div>
                            </div>
                            <div id="sparkline-revenue2"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Nombre des Médecins</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">0.00</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                    <span>N/A</span>
                                </div>
                            </div>
                            <div id="sparkline-revenue3"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Nombre Des Réclamations</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">$28000</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                    <span>-2.00%</span>
                                </div>
                            </div>
                            <div id="sparkline-revenue4"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- sales  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Nombre Des Rendez-vous</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">$12099</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end sales  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- new customer  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Nombre Des ordonnances</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">1245</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">10%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end new customer  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- visitor  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Nombre Des blogs</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">13000</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end visitor  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- total orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Nombre Des fournisseurs</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">1340</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end total orders  -->
                    <!-- ============================================================== -->
                </div>
            </div>
        </div>
    </div>
</div>


</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->


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