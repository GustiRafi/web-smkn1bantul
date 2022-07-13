<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>SMK N 1 BANTUL</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm" id="nav">
        <div class="container">
            <div class="col d-flex">
                <img src="img/logo.png" width="70px" height="70px" alt="logo smk 1 Bantul" srcset="">
                <h2 class="ps-3 " href="#"><strong>SMK NEGERI 1 BANTUL</strong></h2>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-expanded="false aria-controls" id="tgl" offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start bg-white text-white" tabindex="-1"
                aria-labelledby="offcanvasExampleLabel" id="offcanvasExample">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title " id="offcanvasExampleLabel">SMK N 1 BANTUL</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"
                        id="close-tgl"></button>
                </div>
                <div class="offcanvas-body text-dark">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Guru.php">Guru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="siswa.php">Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="perpustakaan.php">Perpustakaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="BKK.php">BKK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="galery.php">Galery</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end Navbar -->

    <!-- jumbotron -->
    <div class="jumbotron w-100 h-100">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card  text-white">
                        <img src="img/smk.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h1 class="card-title text-center py-5"><strong>SELAMAT DATANG!!</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card  text-white">
                        <img src="img/smk.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h1 class="card-title text-center py-5"><strong>SELAMAT DATANG!!</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card  text-white">
                        <img src="img/smk.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h1 class="card-title text-center py-5"><strong>SELAMAT DATANG!!</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- end jumbotron -->