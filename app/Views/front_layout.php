<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portal Web SMP di Kota Kupang</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/front/') ?>css/styles.css" rel="stylesheet" />
    <style>
        .thumb-post img {
            object-fit: scale-down;
            /* Do not scale the image */
            object-position: center;
            /* Center the image within the element */
            width: 100%;
            max-height: 500px;
            margin-bottom: 1rem;
            background: rgb(1, 5, 36);

        }

        /* header .container {
            height: 300px;
        } */

        /* .header {

            width: 100%;
            height: 100%;
            background: url(<?= base_url('assets/banner.jpg') ?>) top center no-repeat;
            background-size: cover;
            
        } */
        .header {
            background: rgb(0, 26, 255);
            background: linear-gradient(151deg, rgb(18, 132, 226) 0%, rgb(0, 195, 255) 100%);
        }

        body {
            background: rgb(131, 226, 255);

        }

        .card {
            background: rgb(55, 165, 238);
            background: linear-gradient(151deg, rgb(143, 238, 255) 0%, rgb(0, 195, 255) 100%);
        }

        .bg-dark2 {
            background: rgb(13, 0, 83);

        }
    </style>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark2">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('') ?>">PORTAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('sekolah') ?>">Sekolah</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Pendaftaran</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4 header">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Portal Web SMP di Kota Kupang</h1>
                <p class="lead mb-0"></p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <?= $this->renderSection('content'); ?>

            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; 2025</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/front/') ?>js/scripts.js"></script>
</body>

</html>