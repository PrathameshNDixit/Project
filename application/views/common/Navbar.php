<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- ********* -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> Student Placement</title>
    <script src="https://kit.fontawesome.com/7c158a5167.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />

    <link href="<?= base_url(); ?>Assets/css/style.css" rel="stylesheet" />

    <link href="<?= base_url(); ?>Assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url(); ?>Assets/css/plugins/dropzone.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>Assets/css/plugins/datatables.min.css" />
    <link rel="stylesheet"
        href="<?= base_url(); ?>https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url() ?>Assets/images/studentlogo.png" sizes="32x32" type="image/png">

    <!-- ******* Added New Links***** -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>web_resources/dist/css/sweetalert.css">
    <link rel="stylesheet" href="<?= base_url(); ?>Assets/fontawsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">


    <script>
        var base_path = "<?php echo base_url(); ?>";
    </script>
    <!-- ********** -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>web_resources\dist\css\Newdsh.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav style="background:#90e0ef" class="navbar navbar-expand-lg p-3">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span style="background:transparent;" class="navbar-toggler-icon"><i
                        class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-center mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo base_url() ?>index.php/newdash"><img
                                class="nav-img" src="<?php echo base_url() ?>Assets/images/dashboard1.png"
                                alt="">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="nav-img" src="<?php echo base_url() ?>Assets/images/front-office.png" alt="">
                            Frontoffice
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="<?php echo base_url() ?>index.php/reservation/create">Reservation</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="nav-img" src="<?php echo base_url() ?>Assets/images/housekeeping.png" alt="">
                            Housekeeping
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="nav-img" src="<?php echo base_url() ?>Assets/images/restaurant.png" alt="">
                            Restaurant
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="nav-img" src="<?php echo base_url() ?>Assets/images/banquet.png" alt="">
                            Banquet
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="nav-img" src="<?php echo base_url() ?>Assets/images/stock.png" alt="">
                            Bar mgt
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="nav-img" src="<?php echo base_url() ?>Assets/images/bar.png" alt="">
                            HR
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="nav-img" src="<?php echo base_url() ?>Assets/images/payroll.png" alt="">
                            Pro module
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- -->


    <script src="<?= base_url(); ?>Assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>Assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>Assets/js/scripts/script.min.js"></script>
    <script src="<?= base_url(); ?>Assets/js/scripts/sidebar.large.script.min.js"></script>
    <script src="<?= base_url(); ?>Assets/js/plugins/echarts.min.js"></script>
    <script src="<?= base_url(); ?>Assets/js/scripts/echart.options.min.js"></script>
    <script src="<?= base_url(); ?>Assets/js/scripts/dashboard.v1.script.min.js"></script>

    <!-- ***** Added New Scripts*********** -->
    <!--This page JavaScript -->

    <script src="<?php echo base_url(); ?>web_resources/dist/js/sweetalert.min.js"></script>

    <!-- </body> -->


    <!-- Mirrored from demos.ui-lib.com/gull/html/layout1/upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 05:16:55 GMT -->

    <!-- </html> -->