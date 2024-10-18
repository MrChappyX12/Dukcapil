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
                            <li><a class="dropdown-item" href="Pencatatan_sipil.php">Pencatatan Sipil</a></li>
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

    <!-- Menu Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Menu Utama</h2>
        <div class="row justify-content-center service-menu"> <!-- Tambahkan kelas service-menu -->
            <div class="col-md-4 mb-4">
                <div class="card p-4 text-center service-card">
                    <img src="asset/img/icon/SAKTI.png" alt="SAKTI Icon" class="service-icon">
                    <h5 class="mt-3">SAKTI</h5>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 text-center service-card">
                    <img src="asset/img/icon/Dokumen.png" alt="Dokumen Icon" class="service-icon">
                    <h5 class="mt-3">Dokumen Publikasi</h5>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 text-center service-card">
                    <img src="asset/img/icon/LAPOR.PNG" alt="Pengaduan Icon" class="service-icon">
                    <h5 class="mt-3">Lapor!</h5>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 text-center service-card">
                    <img src="asset/img/icon/Profile.png" alt="Profil Icon" class="service-icon">
                    <h5 class="mt-3">Profil Kota Kediri</h5>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 text-center service-card">
                    <img src="asset/img/icon/Galeri.png" alt="Lokasi Icon" class="service-icon">
                    <h5 class="mt-3">Galeri</h5>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 text-center service-card">
                    <img src="asset/img/icon/Agenda.png" alt="Berita Icon" class="service-icon">
                    <h5 class="mt-3">Agenda</h5>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 text-center service-card">
                    <img src="asset/img/icon/Cetak Mandiri.png" alt="Berita Icon" class="service-icon">
                    <h5 class="mt-3">Cetak Mandiri</h5>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 text-center service-card">
                    <img src="asset/img/icon/location.png" alt="Berita Icon" class="service-icon">
                    <h5 class="mt-3">Lokasi</h5>
                </div>
            </div>
        </div>
    </div>

   
    <!-- Profile and Statistik Section -->
    <div class="container mt-4">
        <div class="row">
            <!-- Profil -->
            <div class="col-md-4">
                <div class="profile-card">
                    <h3>KEPALA DINAS</h3>
                    <img src="asset/img/kepala_duk.jpg" alt="Profil">
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Visi
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Kota Kediri Unggul Dan Makmur dalam Harmoni</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Misi
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Mewujudkan Tata Kelola Pemerintahan Yang Bersih, Transparan Dan Berintegritas 
                                    Berorientasi Pada Pelayanan Prima Dan Teknologi Informasi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistik -->
            <div class="col-md-8">
                <div class="stats-card">
                    <h4 class="text-center">STATISTIK</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <button class="stats-button">Jenis Kelamin Kelurahan</button>
                            <button class="stats-button">Jenis Kelamin Kecamatan</button>
                            <button class="stats-button">Agama dan Usia</button>
                            <button class="stats-button">Rasio Ketergantungan</button>
                            <button class="stats-button">Kepala Keluarga</button>
                        </div>
                        <div class="col-md-6">
                            <button class="stats-button">Tingkat Pendidikan</button>
                            <button class="stats-button">Pekerjaan</button>
                            <button class="stats-button">Hubungan Keluarga</button>
                            <button class="stats-button">Disabilitas</button>
                            <button class="stats-button">Status Pernikahan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Survey Section -->
    <div class="container survey-section mt-5 mb-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="asset/img/survei.png" alt="Survey Illustration" class="img-fluid">
            </div>
            <div class="col-md-6 text-center">
                <h4>Terima kasih telah mengunjungi situs kami!</h4>
                <p class="mt-3">Kami menghargai masukan Anda. Ikuti survei singkat untuk membantu kami meningkatkan pelayanan.</p>

                <!-- Progress Bar for Satisfaction Result -->
                <div class="mt-4">
                    <h5>Hasil Kepuasan Pelayanan:</h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                    </div>
                    <div class="text-center mt-1" id="voteCount">50 Suara</div> <!-- Menampilkan jumlah suara -->
                </div>

                <button id="surveyButton" class="btn btn-primary btn-lg mt-4">Ikuti Survei!</button>
            </div>
        </div>
    </div>

    <!-- Survey Modal -->
    <div class="modal fade" id="surveyModal" tabindex="-1" aria-labelledby="surveyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="surveyModalLabel">Survei Kepuasan Pelayanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="surveyForm">
                        <div class="mb-3">
                            <label for="question1" class="form-label">Seberapa puas Anda dengan pelayanan kami?</label>
                            <select class="form-select" id="question1" required>
                                <option value="">Pilih...</option>
                                <option value="100">Sangat Puas</option>
                                <option value="75">Puas</option>
                                <option value="50">Cukup Puas</option>
                                <option value="25">Tidak Puas</option>
                                <option value="0">Sangat Tidak Puas</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="question2" class="form-label">Apakah Anda akan merekomendasikan layanan kami?</label>
                            <select class="form-select" id="question2" required>
                                <option value="">Pilih...</option>
                                <option value="100">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="news-section">
        <h3>Berita</h3>
        <div class="news-grid">
            <div class="news-item">
                <img src="asset/img/berita/berita1.jpeg" alt="Gambar Berita 1">
                <div class="news-title">KTP-EL Goes to Campus</div>
                <div class="news-date">13 September 2024</div>
            </div>
            <div class="news-item">
                <img src="asset/img/berita/berita1.jpeg" alt="Gambar Berita 2">
                <div class="news-title">Survey Ombudsman</div>
                <div class="news-date">13 September 2024</div>
            </div>
            <div class="news-item">
                <img src="asset/img/berita/berita1.jpeg" alt="Gambar Berita 3">
                <div class="news-title">Tidak Usah Galau, Tidak Usah Risau...</div>
                <div class="news-date">13 September 2024</div>
            </div>
        </div>

        <!-- Navigasi Carousel -->
        <div class="carousel-navigation">
            <span class="carousel-control">&lt;</span>
            <span class="carousel-control">&gt;</span>
        </div>

        <!-- Tombol Lihat Lebih Banyak -->
        <div class="more-news">Lihat Lebih Banyak</div>
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


   <!-- Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Set the initial progress bar value to 78% with animation
        var initialProgress = 78;
        var progressBar = document.querySelector('.progress-bar');
        var percentageDisplay = document.getElementById('percentageDisplay');
        var voteCount = document.getElementById('voteCount');

        // Animate the progress bar
        let width = 0;
        let animationInterval = setInterval(function() {
            if (width >= initialProgress) {
                clearInterval(animationInterval);
            } else {
                width++;
                progressBar.style.width = width + '%';
                progressBar.setAttribute('aria-valuenow', width);
                progressBar.textContent = width + '%';
                percentageDisplay.textContent = width + '%'; // Update percentage display
            }
        }, 20); // Adjust the speed of animation (20ms per increment)
    });

    document.getElementById('surveyButton').addEventListener('click', function() {
        var myModal = new bootstrap.Modal(document.getElementById('surveyModal'));
        myModal.show();
    });

    document.getElementById('surveyForm').addEventListener('submit', function(event) {
        event.preventDefault();

        var question1Value = parseInt(document.getElementById('question1').value);
        var question2Value = parseInt(document.getElementById('question2').value);
        var averageSatisfaction = (question1Value + question2Value) / 2;

        // Update the progress bar and value
        var progressBar = document.querySelector('.progress-bar');
        var percentageDisplay = document.getElementById('percentageDisplay');
        var voteCount = document.getElementById('voteCount');
        
        // Animate the progress bar
        let width = 0;
        let animationInterval = setInterval(function() {
            if (width >= averageSatisfaction) {
                clearInterval(animationInterval);
            } else {
                width++;
                progressBar.style.width = width + '%';
                progressBar.setAttribute('aria-valuenow', width);
                progressBar.textContent = width + '%';
                percentageDisplay.textContent = width + '%'; // Update percentage display
            }
        }, 20); // Adjust the speed of animation (20ms per increment)

        // Update the vote count (assuming it is static here)
        voteCount.textContent = '51 Suara'; // Incrementing the vote count

        alert('Terima kasih telah mengikuti survei!');

        var myModal = bootstrap.Modal.getInstance(document.getElementById('surveyModal'));
        myModal.hide();

        document.getElementById('surveyForm').reset();
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
