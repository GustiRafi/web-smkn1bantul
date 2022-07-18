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

    <!-- main content -->
    <div class="container mt-3">

        <!-- konten -->
        <div class="row row-cols-1 row-cols-md-2 g-4 my-3">
            <div class="col-12 col-md-8">
                <div class="card shadow">
                    <div class="px-3 pt-3">
                        <div data-aos="fade-right">
                            <div class="d-flex my-3">
                                <span class="border border-5 border-primary"></span>
                                <h4 class="ps-3">PPDB SMK Negeri 1 Bantul Tahun Pelajaran 2020/2021</h4>
                            </div>
                        </div>
                        <div data-aos="fade-right">
                            <div class="pt-3">
                                <p>PENGUMUMAN PPDB DARING/ONLINE</p>
                                <p>TAHUN PELAJARAN 2020/2021</p>
                                <p>SMK NEGERI 1 BANTUL</p>

                                <p>SMK Negeri 1 Bantul menerima Peserta Didik baru Tahun Pelajaran 2020/2021. Dengan 7
                                    Kompetensi Keahlian sebagai berikut:</p>

                                <table class="table">
                                    <tr>
                                        <th>NO</th>
                                        <th>Kompetensi Keahlian</th>
                                        <th>Rombel</th>
                                        <th>Jumlah Siswa</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Bisnis Daring Dan pemasaran</td>
                                        <td>3</td>
                                        <td>108</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Bisnis Daring Dan pemasaran</td>
                                        <td>3</td>
                                        <td>108</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Bisnis Daring Dan pemasaran</td>
                                        <td>3</td>
                                        <td>108</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Bisnis Daring Dan pemasaran</td>
                                        <td>3</td>
                                        <td>108</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Bisnis Daring Dan pemasaran</td>
                                        <td>3</td>
                                        <td>108</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php require_once 'footer.php' ?>