<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || DISDUKCAPIK KOTA KEDIRI</title>
    <link href="asset/img/kdr.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <!-- Header Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"> <!-- Tambahkan kelas fixed-top -->
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
                    <li class="nav-item"><a class="nav-link" href="#">INFORMASI</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PELAYANAN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="layanan_penduduk.php">Pendaftaran Penduduk</a></li>
                            <li><a class="dropdown-item" href="catatan_sipil.php">Catatan Sipil</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            TENTANG KAMI
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="organisasi.php">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="#">Tujuan Sasaran</a></li>
                            <li><a class="dropdown-item" href="#">Tupoksi</a></li>
                            <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="#">Pohon Kinerja</a></li>
                            <li><a class="dropdown-item" href="#">Maklumat pelayanan</a></li>
                            <li><a class="dropdown-item" href="#">Standar Pelayanan</a></li>                        
                        </ul>
                    </li>
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
        <div class="container text-white text-center" style="padding-left: 20px;">
            <h1 style="font-weight: bold;">Layanan Pendaftaran Penduduk</h1>
        </div>
    </section>

    


    <!-- Footer Section -->
    <footer class="bg-light text-dark py-4">
        <div class="container">
            <div class="row text-center text-md-start">
                <div class="col-md-4 mb-3">
                    <img src="asset/img/footer.png" alt="Logo DISPENDUKCAPIL" height="col-lg-3" class="80px">
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Hubungi Kami</h5>
                    <p><i class="bi bi-telephone"></i> +62 811-3222-8112</p>
                    <p><i class="bi bi-envelope"></i> dispendukcapil@kedirikota.go.id</p>
                    <p><i class="bi bi-instagram"></i> dukcapil.kedirikota</p>
                    <p><i class="bi bi-facebook"></i> dukcapil.kotakediri</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Jam Pelayanan</h5>
                    <p>Senin - Kamis: 8:00 - 14:00</p>
                    <p>Jumat: 8:00 - 11:00</p>
                    <p>Sabtu - Minggu: <strong>LIBUR</strong></p>
                    <p>(Akhir Pekan)</p>
                </div>
            </div>
        </div>
        <div class="bg-dark text-white text-center py-3">
            <p>Copyright © Dinas Kependudukan dan Catatan Sipil Kota Kediri</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
