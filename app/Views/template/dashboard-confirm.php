<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../favicon.ico">
    <title>
        Keperawatan - Konfirmasi Pembayaran
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../../material_assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../material_assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../../material_assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="dashboard">
                <img src="favicon.ico" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Keperawatan</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link text-white" href="dashboard">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <!--
                <li class="nav-item">
                    <a class="nav-link text-white " href="belajar">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">menu_book</i>
                        </div>
                        <span class="nav-link-text ms-1">Kisi-kisi</span>
                    </a>
                </li>
                -->
                <li class="nav-item">
                    <a class="nav-link text-white " href="/latihanfp">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">fitness_center</i>
                        </div>
                        <span class="nav-link-text ms-1">Latihan Soal</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="/request">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">shopping_cart</i>
                        </div>
                        <span class="nav-link-text ms-1">Beli Paket Soal</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="/request">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">check</i>
                        </div>
                        <span class="nav-link-text ms-1">Konfirmasi Pembayaran</span>
                    </a>
                </li>


                <hr class="horizontal light mt-0 mb-2">
                
                <!--
                <li class="nav-item">
                    <a class="nav-link text-white " href="profile">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                -->
                
                <!--
                <li class="nav-item">
                    <a class="nav-link text-white " href="info">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">info</i>
                        </div>
                        <span class="nav-link-text ms-1">Info Penting</span>
                    </a>
                </li>
-->
                
                <li class="nav-item">
                    <a class="nav-link text-white " href="/">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">logout</i>
                        </div>
                        <span class="nav-link-text ms-1">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-dashcube me-sm-1"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="/latihanfp" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-dumbbell me-sm-1"></i>
                                Latihan Soal
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="/beli" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-shopping-cart me-sm-1"></i>
                                Beli Paket Soal
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="/beli" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-check me-sm-1"></i>
                                Konfirmasi Pembayaran
                            </a>
                        </li>
                        
                        <!--
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="/profile" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                Profile
                            </a>
                        </li>
                        -->
                        
                        <!--
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="/info" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-info me-sm-1"></i>
                                Info Penting
                            </a>
                        </li>
                    -->
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="/" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-angle-right me-sm-1"></i>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- End Navbar -->

        <div class="container-fluid py-4">

            <?= $this->renderSection('content'); ?>

            <footer class="footer py-4  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <strong><div class="copyright text-center text-sm text-muted text-lg-start">
                                Keperawatan ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                            </div></strong>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="about" class="btn btn-info text-white">About The Application</a>
                                </li>
                                <li>&nbsp;&nbsp;</li>
                                <li class="nav-item">
                                    <a href="/profile" class="btn btn-info text-white">Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="./material_assets/js/core/popper.min.js"></script>
    <script src="./material_assets/js/core/bootstrap.min.js"></script>
    <script src="./material_assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./material_assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="./material_assets/js/plugins/chartjs.min.js"></script>

    <script src="./material_assets/js/material-dashboard.min.js?v=3.0.2"></script>
    <script src="./admin_assets/js/bs-custom-file-input.js"></script>

    <script>
        function setSoalClass(catValue){
            document.getElementById("soalClass").value = catValue;
        }
    </script>
</body>

</html>