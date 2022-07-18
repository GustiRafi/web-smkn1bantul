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
                <h2 class="ps-3 "><strong>SMK NEGERI 1 BANTUL</strong></h2>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-expanded="false aria-controls" id="tgl" offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start bg-white text-white" tabindex="-1"
                aria-labelledby="offcanvasExampleLabel" id="offcanvasExample">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">SMK N 1 BANTUL</h5>
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
    <!-- End Navbar -->

    <!-- jumbotron -->
    <div class="jumbotron w-100 h-100">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card  text-white">
                        <img src="img/smk.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h1 class="card-title  text-center py-5"><strong>SELAMAT DATANG!!</strong></h1>
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
                <div class="container mt-6">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col ">
                            <div data-aos="zoom-in" data-aos-delay="300">
                                <div class="card bg-info text-white text-center shadow ">
                                    <h3 class="pt-3"><i class="bi bi-trophy-fill"></i></h3>
                                    <h3>Prestasi</h3>
                                    <p>Siswa SMK N 1 Bantul terus menoreh prestasi diberbagai bidang baik akademik
                                        maupun
                                        non akademik</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div data-aos="zoom-in" data-aos-delay="400">
                                <div class="card bg-info text-white text-center shadow">
                                    <h3 class="pt-3"><i class="bi bi-building "></i></h3>
                                    <h3>Fasilitas</h3>
                                    <p class="pb-2">SMK N 1 Bantul memiliki sarana prasarana yang lengkap dan mampu
                                        menunjang kegiatan
                                        siswa</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div data-aos="zoom-in">
                                <div class="card bg-info text-white text-center shadow">
                                    <h3 class="pt-3"><i class="bi bi-book-half "></i></h3>
                                    <h3>Akademi</h3>
                                    <p class="pb-2">SMK N 1 Bantul meiliki 8 bidang kehalian yang sangat unggul</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end jumbotron -->

    <div class="container mt-3">

        <!-- searc bar -->
        <?php require_once 'cari.php' ?>
        <!-- end search bar -->

        <div class="row row-cols-1 row-cols-md-2 g-4 my-3">
            <!-- konten Kiri -->
            <div class="col-12 col-md-8">
                <div class="card shadow">
                    <div class="px-3 pt-3">
                        <div data-aos="fade-right">
                            <h4>Berita </h4>
                        </div>
                        <div data-aos="fade-right">
                            <div class="card mb-3">
                                <a href="Detail-berita.php" class="link-1 text-decoration-none">
                                    <div class="row row-cols-2 g-0">
                                        <div class="col-md-4 text-center">
                                            <img src="img/berita1.jpeg" class="img-fluid mx-2 rounded-5 my-3 "
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h6 class="card-title text-black"><strong>Juara LKS DIY 2022,SMK 1
                                                        BANTUL menuju
                                                        LKS
                                                        Tingkat
                                                        Nasional</strong></h6>
                                                <p class="card-text"><small class="text-muted">Posted on
                                                        20-7-2022</small>
                                                </p>
                                                <p class="card-text"><small class="text-muted">Author :
                                                        Administator</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div data-aos="fade-right">
                            <div class="card mb-3">
                                <a href="Detail-berita.php" class="link-1 text-decoration-none">
                                    <div class="row row-cols-2 g-0">
                                        <div class="col-md-4 text-center">
                                            <img src="img/berita2.jpg" class="img-fluid mx-2 rounded-5 my-3 " alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h6 class="card-title text-black"><strong>Juara LKS DIY 2022,SMK 1
                                                        BANTUL menuju
                                                        LKS
                                                        Tingkat
                                                        Nasional</strong></h6>
                                                <p class="card-text"><small class="text-muted">Posted on
                                                        20-7-2022</small>
                                                </p>
                                                <p class="card-text"><small class="text-muted">Author :
                                                        Administator</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div data-aos="fade-right">
                            <div class="card mb-3">
                                <a href="Detail-berita.php" class="link-1 text-decoration-none">
                                    <div class="row row-cols-2 g-0">
                                        <div class="col-md-4 text-center">
                                            <img src="img/berita3.jpeg" class="img-fluid mx-2 rounded-5 my-3 "
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h6 class="card-title text-black"><strong>Juara LKS DIY 2022,SMK 1
                                                        BANTUL menuju
                                                        LKS
                                                        Tingkat
                                                        Nasional</strong></h6>
                                                <p class="card-text"><small class="text-muted">Posted on
                                                        20-7-2022</small>
                                                </p>
                                                <p class="card-text"><small class="text-muted">Author :
                                                        Administator</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div data-aos="fade-right">
                            <div class="card mb-3">
                                <a href="Detail-berita.php" class="link-1 text-decoration-none">
                                    <div class="row row-cols-2 g-0">
                                        <div class="col-md-4 text-center">
                                            <img src="img/berita4.jpeg" class="img-fluid mx-2 rounded-5 my-3 "
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h6 class="card-title text-black"><strong>Juara LKS DIY 2022,SMK 1
                                                        BANTUL menuju
                                                        LKS
                                                        Tingkat
                                                        Nasional</strong></h6>
                                                <p class="card-text"><small class="text-muted">Posted on
                                                        20-7-2022</small>
                                                </p>
                                                <p class="card-text"><small class="text-muted">Author :
                                                        Administator</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 g-4 my-3">
                            <div class="col-12 col-md-7 ">
                                <div data-aos="zoom-in">
                                    <div class="card  ps-3 py-3 px-2 rounded-3 shadow-sm"
                                        style="background-color:  rgb(212, 207, 207);">
                                        <h4>Video Profile</h4>
                                        <iframe class="text-center" height="197"
                                            src="https://www.youtube.com/embed/3wbUAGW8s2c"
                                            title="DEMI PRESTASI | SHORT MOVIE KARYA SISWA SMK N 1 BANTUL 2022"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-5 ">
                                <div data-aos="zoom-in">
                                    <div class="card px-3 py-3 rounded-3 shadow-sm"
                                        style="background-color:  rgb(212, 207, 207);">
                                        <h4>Info PPDB</h4>
                                        <img src="img/ppdb.jpg" alt="ppdb" srcset="">
                                        <p class="pt-3">PENGUMUMAN PPDB DARING/ONLINE TAHUN PELAJARAN 2020/2021 SMK
                                            NEGERI
                                            1
                                            BANTUL SMK
                                            Negeri 1 Bantul menerima Peserta Didik baru Tahun Pelajaran 2020/2021.
                                            Dengan
                                        </p>
                                        <a href="Detail-ppdb.php">
                                            <button class="btn btn-outline-dark mt-3 w-100">Detail</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end kontent kiri -->

            <?php require_once 'footer.php' ?>