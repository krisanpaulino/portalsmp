<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <!-- <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"> -->
    <title>PORTAL SMP - <?= $title ?></title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/datatables.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <?= $this->renderSection('plugincss'); ?>
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/style.css">
    <link id="color" rel="stylesheet" href="<?= base_url('assets/admin') ?>/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/responsive.css">
    <style>
        .dot-animated2 {
            position: absolute;
            width: 6px;
            height: 6px;
            margin-left: 15px;
            border-radius: 100%;
            content: '';
            background-color: #d22d3d;
            -webkit-animation: fadeIn 2s ease infinite;
            animation: fadeIn 2s ease infinite;
        }
    </style>
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <div class="main-header-left">

                    <div class="logo-wrapper"><a href="<?= base_url('admin/dashboard') ?>">PORTAL SMP</a></div>
                    <!-- <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="images/logo/dark-logo.png" alt=""></a></div> -->
                    <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
                </div>
                <div class="left-menu-header col">
                    <ul>
                        <li>
                            <!-- <form class="form-inline search-form">
                                <div class="search-bg"><i class="fa fa-search"></i>
                                    <input class="form-control-plaintext" placeholder="Search here.....">
                                </div>
                            </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span> -->
                        </li>
                    </ul>
                </div>
                <div class="nav-right col pull-right right-menu p-0">
                    <ul class="nav-menus">

                        <li class="onhover-dropdown p-0">
                            <button class="btn btn-primary-light" type="button" data-bs-toggle="modal" data-bs-target="#logout"><i data-feather="log-out"></i>Log out</button>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper horizontal-menu">
            <!-- Page Sidebar Start-->
            <header class="main-nav">
                <div class="sidebar-user text-center"><img class="img-90 rounded-circle" src="<?= base_url('assets/admin') ?>/images/dashboard/1.png" alt="">
                    <!-- <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html"> -->
                    <h6 class="mt-3 f-14 f-w-600">Administrator</h6>
                    </a>
                    <!-- <p class="mb-0 font-roboto">Human Resources Department</p> -->
                </div>
                <nav>
                    <div class="main-navbar">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="mainnav">
                            <ul class="nav-menu custom-scrollbar">
                                <li class="back-btn">
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>

                                <li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= base_url('admin/dashboard') ?>"><i data-feather="home"></i><span>Dashboard</span></a></li>
                                <li><a class="nav-link menu-title link-nav" href="<?= base_url('admin/profil') ?>"><i data-feather="user"></i><span>Profil</span></a></li>

                                <!-- <li class="sidebar-main-title">
                                    <div>
                                        <h6>Data Buku </h6>
                                    </div>
                                </li> -->
                                <li><a class="nav-link menu-title link-nav" href="<?= base_url('admin/ta') ?>"><i data-feather="cpu"></i><span>Periode TA</span></a></li>
                                <li><a class="nav-link menu-title link-nav" href="<?= base_url('admin/sekolah') ?>"><i data-feather="layers"></i><span>Sekolah</span></a></li>
                                <li><a class="nav-link menu-title link-nav" href="<?= base_url('admin/pendaftaran') ?>"><i data-feather="layers"></i><span>Pendaftaran</span></a></li>
                                <li><a class="nav-link menu-title link-nav" href="<?= base_url('admin/berita') ?>"><i data-feather="book-open"></i><span>Berita</span></a></li>



                                <!-- <li><a class="nav-link menu-title link-nav" href="../starter-kit/index.html"><i data-feather="anchor"></i><span>Starter kit </span></a></li> -->
                                <!-- <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Others</span></a>
                                    <div class="mega-menu-container menu-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col mega-box">
                                                    <div class="link-section">
                                                        <div class="submenu-title">
                                                            <h5>Error Page</h5>
                                                        </div>
                                                        <div class="submenu-content opensubmegamenu">
                                                            <ul>
                                                                <li><a href="error-page1.html" target="_blank">Error page 1</a></li>
                                                                <li><a href="error-page2.html" target="_blank">Error page 2</a></li>
                                                                <li><a href="error-page3.html" target="_blank">Error page 3</a></li>
                                                                <li><a href="error-page4.html" target="_blank">Error page 4 </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </div>
                </nav>
            </header>
            <!-- Page Sidebar Ends-->

            <!-- Content Goes Here -->
            <?= $this->renderSection('content'); ?>
            <!-- End Of Content -->

            <!-- Logout Modal -->
            <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form class="form" action="<?= base_url('auth/dologout') ?>" method="post">
                            <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                            <div class="modal-body">
                                <h5>Logout?</h5>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit">Logout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Logout Modal END -->

            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Unwira Press All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="<?= base_url('assets/admin') ?>/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="<?= base_url('assets/admin') ?>/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?= base_url('assets/admin') ?>/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?= base_url('assets/admin') ?>/js/sidebar-menu.js"></script>
    <script src="<?= base_url('assets/admin') ?>/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="<?= base_url('assets/admin') ?>/js/bootstrap/popper.min.js"></script>
    <script src="<?= base_url('assets/admin') ?>/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins JS start-->
    <script src="<?= base_url('assets/admin') ?>/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/admin') ?>/js/datatable/datatables/datatable.custom.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <?= $this->renderSection('plugins'); ?>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?= base_url('assets/admin') ?>/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <?= $this->renderSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            console.log('<?= current_url() ?>');
            $(".nav-menu").find("[href='<?= current_url() ?>']").addClass('active')
        });

        function dangerToast(message) {
            Toastify({
                'text': message,
                style: {
                    background: '#fd2e64',
                }
            }).showToast()
        }

        function successToast(message) {
            Toastify({
                'text': message,
            }).showToast()
        }
    </script>
    <?php if (session()->has('message')) : ?>
        <script>
            <?= session('message') ?>
        </script>
    <?php endif; ?>
</body>

</html>