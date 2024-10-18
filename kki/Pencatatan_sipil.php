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
        <div class="container text-white text-center d-flex justify-content-center align-items-center" style="height: 100%; flex-direction: column;"> <!-- Menambahkan text-center dan flex untuk centering -->
            <h2 style="font-weight: bold;">PENCATATAN SIPIL</h2>
        </div>
    </section>


    <section class="akta-section">
        <div class="akta-container">
            <!-- Baris pertama -->
            <div class="akta-item">
                <img src="asset/img/icon/kelahiran.png" alt="Akta Kelahiran">
                <h3>Akta Kelahiran</h3>
                <button class="dropdown-button" onclick="toggleDropdown('kelahiran-dropdown')">Persyaratan...</button>
                <div id="kelahiran-dropdown" class="dropdown-content">
                    <p>- Fotokopi KTP Orang Tua</p>
                    <p>- Akta Kelahiran Lama</p>
                    <p>- Surat Keterangan Lahir dari Rumah Sakit</p>
                </div>
            </div>

            <div class="akta-item">
                <img src="asset/img/icon/kematian.png" alt="Akta Kematian">
                <h3>Akta Kematian</h3>
                <button class="dropdown-button" onclick="toggleDropdown('kematian-dropdown')">Persyaratan...</button>
                <div id="kematian-dropdown" class="dropdown-content">
                    <p>- Fotokopi KTP yang Meninggal</p>
                    <p>- Surat Keterangan Kematian dari Rumah Sakit</p>
                    <p>- Kartu Keluarga</p>
                </div>
            </div>

            <div class="akta-item">
                <img src="asset/img/icon/pernikahan.png" alt="Akta Pernikahan">
                <h3>Akta Pernikahan</h3>
                <button class="dropdown-button" onclick="toggleDropdown('pernikahan-dropdown')">Persyaratan...</button>
                <div id="pernikahan-dropdown" class="dropdown-content">
                    <p>- Fotokopi KTP Suami Istri</p>
                    <p>- Surat Nikah dari KUA atau Catatan Sipil</p>
                    <p>- Kartu Keluarga</p>
                </div>
            </div>

            <!-- Baris kedua -->
            <div class="akta-item">
                <img src="asset/img/icon/perceraian.png" alt="Akta Perceraian">
                <h3>Akta Perceraian</h3>
                <button class="dropdown-button" onclick="toggleDropdown('perceraian-dropdown')">Persyaratan...</button>
                <div id="perceraian-dropdown" class="dropdown-content">
                    <p>- Fotokopi KTP Suami Istri</p>
                    <p>- Surat Putusan Perceraian dari Pengadilan</p>
                    <p>- Akta Pernikahan</p>
                </div>
            </div>

            <div class="akta-item">
                <img src="asset/img/icon/lain.png" alt="Akta Lain">
                <h3>Akta Lain</h3>
                <button class="dropdown-button" onclick="toggleDropdown('lain-dropdown')">Persyaratan...</button>
                <div id="lain-dropdown" class="dropdown-content">
                    <p>- Fotokopi KTP</p>
                    <p>- Akta Kelahiran Anak</p>
                    <p>- Surat Keterangan</p>
                </div>
            </div>

            <div class="akta-item">
                <img src="asset/img/icon/pinggir.png" alt="Catatan Samping">
                <h3>Catatan Samping</h3>
                <button class="dropdown-button" onclick="toggleDropdown('samping-dropdown')">Persyaratan...</button>
                <div id="samping-dropdown" class="dropdown-content">
                    <p>- Fotokopi KTP</p>
                    <p>- Surat Keterangan dari Instansi Terkait</p>
                    <p>- Dokumen Pendukung</p>
                </div>
            </div>
        </div>
        <div class="download-section">
            <h5>Formulir dapat diunduh melalui link berikut:</h5>
            <h5><a class="download-link" href="https://disdukcapil.kedirikota.go.id/sakti/login_depan/info/99" target="_blank">Unduh Formulir KTP</a></h5>
        </div>
    </section>


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
    <script>
        function toggleDropdown(id) {
            var dropdown = document.getElementById(id);
            if (dropdown.style.display === "none" || dropdown.style.display === "") {
                dropdown.style.display = "block";
            } else {
                dropdown.style.display = "none";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
