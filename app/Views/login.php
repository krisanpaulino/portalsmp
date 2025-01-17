<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portal SMP">
    <meta name="author" content="PDTI Unwira">

    <title><?= $title; ?></title>

    <link rel="icon" href="<?= base_url('assets/img/icon.png'); ?>">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/admin/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/admin/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .btn-black {
            background-color: black;
            color: #fff;
        }

        .btn-black:hover {
            background-color: #eee;
            color: #000;
        }

        .bg-gradient-orange {
            background: rgb(0, 26, 255);
            background: linear-gradient(151deg, rgb(0, 162, 255) 0%, rgb(0, 195, 255) 100%);
        }

        input:focus::placeholder {
            color: transparent;
        }
    </style>

</head>

<body class="bg-gradient-orange">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-4 col-sm-8">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg">
                                <div class="p-4">
                                    <div class="text-center">
                                        <h1 class="h4 text-dark mb-2"><b>PORTAL SMP</b></h1>
                                        <h3 class="h5 text-dark mb-3">Login to your account</h3>
                                        <!-- <img src="<?= base_url('assets/admin/img/icon2.png'); ?>" alt=""> -->
                                        <br />
                                    </div>
                                    <?php if (session()->has('danger')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= session('danger') ?>
                                        </div>
                                    <?php endif; ?>
                                    <form class="user" method="POST" action="<?= base_url('auth/dologin') ?>">
                                        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                                        <div class="form-group mb-4">
                                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0 shadow-none <?= (isset(session('errors')['username'])) ? 'is-invalid' : '' ?>" id="username" name="username" value="<?= old('username') ?>" placeholder="Email...">
                                            <div class="invalid-feedback">
                                                <?php if (isset(session('errors')['username'])) : ?>
                                                    <?= session('errors')['username'] ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="password" class="form-control border-top-0 border-left-0 border-right-0 shadow-none <?= (isset(session('errors')['user_password'])) ? 'is-invalid' : '' ?>" id="user_password" name="user_password" value="<?= old('user_password') ?>" placeholder="Password...">
                                            <div class="invalid-feedback">
                                                <?php if (isset(session('errors')['user_password'])) : ?>
                                                    <?= session('errors')['user_password'] ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-black btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <br>
                                    <!-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                            </div> -->
                                    <div class="text-center">
                                        <i class="fas fa-copyright"> &copy; 2023</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/admin/'); ?>js/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/admin/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/admin/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>