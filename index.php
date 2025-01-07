<?php
// Koneksi ke database
require_once 'config.php';

// Ambil artikel dari database
$stmt = $pdo->query("SELECT * FROM articles ORDER BY created_at DESC LIMIT 4"); // Menampilkan 4 artikel terbaru
$articles = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP N 10 Purwokerto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Transparent Navigation */
        .navbar {
            background-color: transparent;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 3;
        }

        .navbar .nav-link,
        .navbar-brand {
            color: #ffffff !important;
            /* Teks putih */
        }

        .navbar .nav-link:hover,
        .navbar-brand:hover {
            color: #ff6600 !important;
            /* Warna oranye saat hover */
        }

        /* Hero Section */
        .hero {
            position: relative;
            background: url('assets/images/hero.jpg') center/cover no-repeat;
            color: #ffffff;
            /* Teks putih */
            height: 100vh;
            display: flex;
            align-items: center;
            padding: 50px;
        }

        .hero-content {
            max-width: 500px;
            z-index: 2;
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
            line-height: 1.2;
            color: #ffffff;
            /* Teks putih */
        }

        .hero p {
            font-size: 1rem;
            margin-top: 15px;
            margin-bottom: 25px;
            color: #ffffff;
            /* Teks putih */
        }

        .hero .btn-hero {
            background-color: #ff6600;
            border: none;
            color: #fff;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .hero .btn-hero:hover {
            background-color: #e55a00;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.2);
            /* Overlay hitam dengan transparansi 60% */
            z-index: 1;
        }

        .about-section {
            padding: 60px 0;
            display: flex;
            align-items: center;
        }

        .about-image img {
            width: 100%;
            border-radius: 15px;
            max-width: 100%;
        }

        .about-content h2 {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
        }

        .about-content p {
            color: #555;
            font-size: 1rem;
            margin-top: 15px;
            line-height: 1.6;
        }

        .btn-about {
            background-color: #ff6600;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            display: inline-flex;
            align-items: center;
            margin-top: 20px;
            text-decoration: none;
        }

        .btn-about:hover {
            background-color: #e55a00;
            color: #fff;
        }

        .btn-about i {
            margin-left: 5px;
        }
    </style>
</head>

<body>

    <!-- Navigation Section -->
    <nav class="navbar navbar-expand-lg navbar-dark">
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1>Bergabunglah dengan Kami di <br>SMP N 10 Purwokerto!</h1>
                <p>Temukan lingkungan belajar yang inspiratif, fasilitas lengkap, dan kegiatan ekstrakurikuler yang
                    mendukung minat serta bakat Anda. Bersama kami, raihlah masa depan cerah!</p>
                <a href="#" class="btn btn-hero">Daftar Sekarang <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Column -->
                <div class="col-md-6 about-image">
                    <img src="assets/images/about.png" alt="School Building">
                </div>
                <!-- Content Column -->
                <div class="col-md-6 about-content">
                    <h2>Tentang SMP N 10 Purwokerto</h2>
                    <p>Kami mendidik siswa-siswi untuk mempersiapkan masa depan yang cerah dengan menyediakan lingkungan
                        belajar yang mendukung, kreatif, dan profesional. Fasilitas yang lengkap serta kegiatan
                        ekstrakurikuler yang bervariasi akan membantu siswa mengembangkan keterampilan praktis serta
                        menjalin hubungan dengan komunitas dan industri.</p>
                    <a href="#" class="btn btn-about">Lihat Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel & Berita Sekolah Section -->
    <section class="artikel-berita-section py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title"><i class="fas fa-newspaper"></i> Artikel & Berita Sekolah</h2>
                <a href="list_articles.php" class="lihat-semua">Lihat Semua &rarr;</a>
            </div>
            <div class="row">
                <?php foreach ($articles as $article): ?>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="uploads/<?php echo htmlspecialchars($article['image']); ?>" class="card-img-top" alt="Article Image">
                        <div class="card-body">
                            <span class="badge badge-secondary">Berita</span>
                            <h5 class="card-title mt-2"><?php echo htmlspecialchars($article['title']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars(substr($article['description'], 0, 100)); ?>...</p>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <span class="text-muted small"><i class="fas fa-user"></i> <?php echo htmlspecialchars($user); ?></span>
                                <span class="text-muted small"><i class="fas fa-calendar-alt"></i> <?php echo date('F d, Y', strtotime($article['created_at'])); ?></span>
                                <span class="text-muted small"><i class="fas fa-eye"></i> <?php echo rand(100, 500); ?></span>
                            </div>
                            <a href="article_detail.php?id=<?php echo $article['id']; ?>" class="btn btn-primary btn-block mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Ekstrakurikuler Section -->
    <section class="ekstrakurikuler-section py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title">Ekstrakurikuler</h2>
                <a href="#" class="lihat-semua">Lihat Semua &rarr;</a>
            </div>

            <div id="ekstraCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card shadow">
                                    <img src="assets/images/ekstra.webp" class="card-img-top" alt="Ekstra Image">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Pencak Silat</h5>
                                        <p class="card-text">Ini adalah ekstrakurikuler di mana siswa bisa...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow">
                                    <img src="assets/images/ekstra.webp" class="card-img-top" alt="Ekstra Image">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Paduan Suara</h5>
                                        <p class="card-text">Siswa yang memiliki hobi menyanyi dan ingin...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow">
                                    <img src="assets/images/ekstra.webp" class="card-img-top" alt="Ekstra Image">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Rohani Islam</h5>
                                        <p class="card-text">Ekstrakurikuler ini membantu siswa...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow">
                                    <img src="assets/images/ekstra.webp" class="card-img-top" alt="Ekstra Image">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Jurnalistik</h5>
                                        <p class="card-text">Ekstrakurikuler jurnalistik membantu siswa...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan carousel-item lain untuk slide berikutnya -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card shadow">
                                    <img src="assets/images/ekstra.webp" class="card-img-top" alt="Ekstra Image">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Rohani Kristen</h5>
                                        <p class="card-text">Rohani Kristen membantu siswa untuk...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Tambahkan lebih banyak item jika diperlukan -->
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls (Custom Position) -->
                <div class="carousel-controls-container">
                    <div class="carousel-control-custom" href="#ekstraCarousel" role="button" data-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="carousel-control-custom" href="#ekstraCarousel" role="button" data-slide="next">
                        <i class="fas fa-chevron-right"></i>
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
                        <li><a href="#">Beranda</a></li>
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

    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



    <!-- Make sure to include Font Awesome for arrow icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>