<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - SMP N 10 Purwokerto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .gallery-section {
            background-color: #f8f9fa;
            padding: 60px 0;
        }

        .gallery-title {
            font-size: 2rem;
            font-weight: bold;
            color: #ff6600;
        }

        .gallery-card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .gallery-card:hover {
            transform: translateY(-5px);
        }

        .gallery-card img {
            border-radius: 8px 8px 0 0;
        }

        .gallery-card-body {
            padding: 15px;
        }

        .gallery-card-title {
            font-weight: bold;
            font-size: 1.1rem;
            color: #333;
        }

        .gallery-card-desc {
            font-size: 0.9rem;
            color: #555;
        }

        .gallery-card-date {
            font-size: 0.8rem;
            color: #888;
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

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="gallery-title">Galeri Kegiatan dan Fasilitas</h2>
                <p>Lihat berbagai momen penting dan fasilitas yang tersedia di SMP N 10 Purwokerto.</p>
            </div>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card gallery-card">
                        <img src="assets/images/galeri.webp" alt="Upacara Bendera" class="card-img-top">
                        <div class="gallery-card-body">
                            <h5 class="gallery-card-title">Upacara Bendera</h5>
                            <p class="gallery-card-desc">Momen kebersamaan siswa dalam upacara bendera setiap hari
                                Senin.</p>
                            <p class="gallery-card-date"><i class="fas fa-calendar-alt"></i> 20 Agustus 2024</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card gallery-card">
                        <img src="assets/images/galeri.webp" alt="Kegiatan Belajar" class="card-img-top">
                        <div class="gallery-card-body">
                            <h5 class="gallery-card-title">Kegiatan Belajar</h5>
                            <p class="gallery-card-desc">Siswa belajar dengan penuh semangat di ruang kelas modern.</p>
                            <p class="gallery-card-date"><i class="fas fa-calendar-alt"></i> 18 September 2024</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card gallery-card">
                        <img src="assets/images/galeri.webp" alt="Perpustakaan" class="card-img-top">
                        <div class="gallery-card-body">
                            <h5 class="gallery-card-title">Perpustakaan</h5>
                            <p class="gallery-card-desc">Perpustakaan sekolah yang nyaman dengan koleksi buku yang
                                lengkap.</p>
                            <p class="gallery-card-date"><i class="fas fa-calendar-alt"></i> 10 Oktober 2024</p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-4 mb-4">
                    <div class="card gallery-card">
                        <img src="assets/images/galeri.webp" alt="Ekstrakurikuler Musik" class="card-img-top">
                        <div class="gallery-card-body">
                            <h5 class="gallery-card-title">Ekstrakurikuler Musik</h5>
                            <p class="gallery-card-desc">Kegiatan musik siswa untuk mengembangkan bakat dalam seni.</p>
                            <p class="gallery-card-date"><i class="fas fa-calendar-alt"></i> 25 Oktober 2024</p>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-4 mb-4">
                    <div class="card gallery-card">
                        <img src="assets/images/galeri.webp" alt="Laboratorium Komputer" class="card-img-top">
                        <div class="gallery-card-body">
                            <h5 class="gallery-card-title">Laboratorium Komputer</h5>
                            <p class="gallery-card-desc">Fasilitas lab komputer dengan peralatan modern untuk belajar
                                teknologi.</p>
                            <p class="gallery-card-date"><i class="fas fa-calendar-alt"></i> 1 November 2024</p>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-4 mb-4">
                    <div class="card gallery-card">
                        <img src="assets/images/galeri.webp" alt="Fasilitas Olahraga" class="card-img-top">
                        <div class="gallery-card-body">
                            <h5 class="gallery-card-title">Fasilitas Olahraga</h5>
                            <p class="gallery-card-desc">Berbagai fasilitas olahraga untuk mendukung kegiatan
                                ekstrakurikuler.</p>
                            <p class="gallery-card-date"><i class="fas fa-calendar-alt"></i> 12 November 2024</p>
                        </div>
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