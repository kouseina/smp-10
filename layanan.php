<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - SMP N 10 Purwokerto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .service-section {
            background-color: #f8f9fa;
            padding: 60px 0;
        }

        .service-card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-icon {
            font-size: 3rem;
            color: #ff6600;
        }
    </style>
</head>

<body>

    <!-- Navigation Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">SMP N 10 Purwokerto</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="layanan.php">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Services Section -->
    <section class="service-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Layanan Sekolah</h2>
                <p>Berikut adalah beberapa layanan yang kami sediakan untuk menunjang kebutuhan siswa, guru, dan
                    masyarakat.</p>
            </div>
            <div class="row">
                <!-- Service 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card service-card p-4 text-center">
                        <div class="service-icon mb-3">
                            <i class="fas fa-book"></i>
                        </div>
                        <h5 class="card-title">Perpustakaan</h5>
                        <p class="card-text">Perpustakaan sekolah menyediakan koleksi buku yang lengkap untuk menunjang
                            kegiatan belajar siswa dan tenaga pendidik.</p>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card service-card p-4 text-center">
                        <div class="service-icon mb-3">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h5 class="card-title">Laboratorium Komputer</h5>
                        <p class="card-text">Laboratorium komputer yang dilengkapi dengan fasilitas modern untuk
                            pembelajaran teknologi dan keterampilan digital siswa.</p>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card service-card p-4 text-center">
                        <div class="service-icon mb-3">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h5 class="card-title">Laboratorium Sains</h5>
                        <p class="card-text">Laboratorium sains memberikan kesempatan bagi siswa untuk bereksperimen dan
                            belajar secara praktis dalam bidang ilmu pengetahuan alam.</p>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-md-4 mb-4">
                    <div class="card service-card p-4 text-center">
                        <div class="service-icon mb-3">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h5 class="card-title">Konseling Siswa</h5>
                        <p class="card-text">Layanan konseling membantu siswa dalam menangani permasalahan akademik dan
                            non-akademik serta mendukung kesejahteraan mental mereka.</p>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-md-4 mb-4">
                    <div class="card service-card p-4 text-center">
                        <div class="service-icon mb-3">
                            <i class="fas fa-basketball-ball"></i>
                        </div>
                        <h5 class="card-title">Fasilitas Olahraga</h5>
                        <p class="card-text">Berbagai fasilitas olahraga tersedia untuk mendukung kegiatan
                            ekstrakurikuler dan pengembangan fisik siswa.</p>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-md-4 mb-4">
                    <div class="card service-card p-4 text-center">
                        <div class="service-icon mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5 class="card-title">Kegiatan Ekstrakurikuler</h5>
                        <p class="card-text">Berbagai kegiatan ekstrakurikuler diselenggarakan untuk mengembangkan minat
                            dan bakat siswa di bidang seni, olahraga, dan keterampilan lainnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer bg-light py-5">
        <div class="container">
            <div class="row">
                <!-- School Information -->
                <div class="col-md-4">
                    <h5>SMP N 10 Purwokerto</h5>
                    <p>Sekolah yang berfokus pada pengembangan akademik dan non-akademik siswa untuk masa depan yang
                        cerah.</p>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Pendidikan No.10, Purwokerto, Jawa Tengah</p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4">
                    <h5>Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="profil.php">Profil Sekolah</a></li>
                        <li><a href="layanan.php">Layanan</a></li>
                        <li><a href="galeri.php">Galeri</a></li>
                        <li><a href="kontak.php">Kontak</a></li>
                    </ul>
                </div>

                <!-- Contact Information -->
                <div class="col-md-4">
                    <h5>Kontak Kami</h5>
                    <p><i class="fas fa-phone-alt"></i> (0281) 123456</p>
                    <p><i class="fas fa-envelope"></i> info@smpn10purwokerto.sch.id</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="mr-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="mr-3"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p class="mb-0">&copy; 2024 SMP N 10 Purwokerto. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>