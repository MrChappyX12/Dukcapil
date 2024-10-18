<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || DISDUKCAPIK KOTA KEDIRI</title>
    <link href="asset/img/kdr.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <!-- Header Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="asset/img/LOGO PUTIH.png" alt="Logo" width="col-lg-3" height="80px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">BERANDA</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PROFIL DINAS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="organisasi.php">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="visi_misi.php">Tujuan Sasaran</a></li>
                            <li><a class="dropdown-item" href="#">Tupoksi</a></li>
                            <li><a class="dropdown-item" href="#">Pohon Kinerja</a></li>
                            <li><a class="dropdown-item" href="#">Maklumat Pelayanan</a></li>
                            <li><a class="dropdown-item" href="#">Standar Pelayanan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">INOVASI</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PELAYANAN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="organisasi.php">Pencatatan Sipil</a></li>
                            <li><a class="dropdown-item" href="visi_misi.php">Pendaftaran Penduduk</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">LINK TERKAIT</a></li>
                </ul>

                <!-- Search Bar -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
         

    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('asset/img/depan.jpg'); background-size: cover; background-position: center; padding: 200px 0;">
        <div class="container text-white" style="padding-left: 20px;"> <!-- Menambahkan padding kiri -->
            <h2 style="font-weight: bold;">Selamat Datang Di Website</h2> <!-- Ubah menjadi H2 dengan bold -->
            <h1 style="font-weight: bold;">Dinas Kependudukan Dan Pencatatan Sipil</h1> <!-- H1 dengan bold -->
            <p style="font-weight: bold;">Sudahkah anda mendapatkan dokumentasi kependudukan? Urus sekarang juga!</p> <!-- P dengan bold -->
        </div>
    </section>

    <!-- img struktur section -->
    <main class="main">
        <div class="page-title">
        <div class="heading">
            <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                </div>
            </div>
            </div>
        </div>
        </div>

        <div class="page-post"> 
        <div class="post"> 
            <div class="container">
            <div class="row d-flex justify-content-center">
                <img src="asset/img/struktur.jpg" alt="Struktur">
            </div>
            </div>
        </div>
        </div>
    </main>

    <!-- Footer Section -->
    <div class="footer">
        <!-- Footer Top -->
        <div class="footer-top"></div>
        <div class="container text-center">
            <div class="row">
                <!-- Logo and Address Section -->
                <div class="col-md-4">
                    <img src="asset/img/footer.png" alt="Logo of Dispendukcapil Kota Kediri" class="img-fluid" width="100" height="100" />
                </div>
                
                <!-- Contact Information Section -->
                <div class="col-md-4">
                    <h5>Hubungi Kami</h5>
                    <p class="contact-info">
                        <i class="fas fa-phone"></i> +62 811-3222-8112 <br />
                        <i class="fas fa-envelope"></i> dispendukcapil@kedirikota.go.id <br />
                        <i class="fab fa-instagram"></i> dukcapil.kedirikota <br />
                        <i class="fab fa-facebook"></i> dukcapil.kotakediri
                    </p>
                </div>
                
                <!-- Service Hours Section -->
                <div class="col-md-4">
                    <h5>Jam Pelayanan</h5>
                    <p>
                        Senin - Kamis: 8:00 - 14:00 <br />
                        Jumat: 8:00 - 11:00 <br />
                        Sabtu - Minggu (Akhir Pekan): <strong>LIBUR</strong>
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            Copyright © Dinas Kependudukan dan Catatan Sipil Kota Kediri
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>