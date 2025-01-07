<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - SMP N 10 Purwokerto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .contact-section {
            background-color: #f8f9fa;
            padding: 60px 0;
        }

        .contact-title {
            font-size: 2rem;
            font-weight: bold;
            color: #ff6600;
        }

        .contact-info {
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 30px;
        }

        .contact-info h5 {
            font-weight: bold;
            margin-bottom: 15px;
        }

        .contact-info p {
            margin-bottom: 10px;
            color: #555;
        }

        .contact-form {
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 30px;
        }

        .contact-form label {
            font-weight: bold;
        }

        .map-container {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
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

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="contact-title">Hubungi Kami</h2>
                <p>Silakan hubungi kami melalui form berikut atau melalui informasi kontak yang tersedia di bawah ini.
                </p>
            </div>
            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-6 mb-4">
                    <div class="contact-form">
                        <h5>Formulir Kontak</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subjek</label>
                                <input type="text" id="subject" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Pesan</label>
                                <textarea id="message" rows="5" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-md-6 mb-4">
                    <div class="contact-info">
                        <h5>Informasi Kontak</h5>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Pendidikan No.10, Purwokerto, Jawa Tengah</p>
                        <p><i class="fas fa-phone-alt"></i> (0281) 123456</p>
                        <p><i class="fas fa-envelope"></i> info@smpn10purwokerto.sch.id</p>
                        <h5>Ikuti Kami</h5>
                        <p>
                            <a href="#" class="mr-3"><i class="fab fa-facebook fa-lg"></i></a>
                            <a href="#" class="mr-3"><i class="fab fa-twitter fa-lg"></i></a>
                            <a href="#" class="mr-3"><i class="fab fa-instagram fa-lg"></i></a>
                            <a href="#"><i class="fab fa-youtube fa-lg"></i></a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Google Maps Embed -->
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.9286575863477!2d109.2413165153925!3d-7.424437675396597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e99fd82fd8d%3A0x7e8f90b6bde1f14a!2sJl.%20Pendidikan%20No.10%2C%20Purwokerto%2C%20Jawa%20Tengah!5e0!3m2!1sen!2sid!4v1698795824661!5m2!1sen!2sid"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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