<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah - SMP N 10 Purwokerto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .profile-container {
            background-color: #f8f9fa;
            padding: 40px;
        }

        .principal-message {
            font-size: 1.1rem;
            line-height: 1.7;
            text-align: justify;
        }

        .profile-photo {
            max-width: 200px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .table-profile {
            font-size: 0.9rem;
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- Navigation Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">SMP N 10 Purwokerto</a>
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

    <!-- Profile Section -->
    <section class="profile-container">
        <div class="container">
            <div class="row">
                <!-- Left Section: Principal's Message -->
                <div class="col-md-8">
                    <h3 class="mb-4">Sambutan Dari Kepala Sekolah SMP N 10 Purwokerto</h3>
                    <p class="principal-message">
                        Assalamu'alaikum warahmatullahi wabarakatuh. <br><br>
                        Salam sejahtera bagi seluruh siswa, orang tua, serta rekan-rekan pendidik yang kami hormati.
                        Kehadiran website ini adalah langkah penting dalam mendukung keterbukaan dan kemajuan sekolah
                        kita.
                        Kami berkomitmen untuk memberikan informasi yang akurat dan up-to-date terkait kegiatan,
                        prestasi,
                        dan berbagai fasilitas yang tersedia di sekolah. <br><br>
                        Website ini dirancang untuk memberikan akses yang lebih mudah dan transparan kepada masyarakat,
                        khususnya para orang tua dan siswa, sehingga dapat memahami visi, misi, serta pencapaian sekolah
                        dengan lebih baik. Melalui media ini, kami juga berharap dapat menjalin hubungan yang lebih erat
                        dengan para alumni, orang tua, dan mitra sekolah lainnya.<br><br>
                        Akhir kata, kami ucapkan terima kasih atas dukungan dari seluruh pihak yang telah berkontribusi
                        dalam pengembangan sekolah ini. Kami harap website ini dapat bermanfaat bagi semua dan menjadi
                        sarana informasi yang relevan dan terpercaya. <br><br>
                        Wassalamu'alaikum warahmatullahi wabarakatuh.
                    </p>
                </div>

                <!-- Right Section: Profile Photo and School Details -->
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="assets/images/kepala-sekolah.webp" alt="Profile Kepala Sekolah" class="profile-photo">
                        <h5 class="mt-3">Daffa Putera Kouseina, S.Pd.</h5>
                        <p class="text-muted">Kepala Sekolah</p>
                    </div>
                    <table class="table table-bordered table-profile mt-3">
                        <tr>
                            <th>Sekolah</th>
                            <td>SMP N 10 Purwokerto</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>Jl. Pendidikan No.10, Purwokerto, Jawa Tengah</td>
                        </tr>
                        <tr>
                            <th>NPSN</th>
                            <td>20301020</td>
                        </tr>
                        <tr>
                            <th>Akreditasi</th>
                            <td>A</td>
                        </tr>
                        <tr>
                            <th>Jenjang</th>
                            <td>SMP</td>
                        </tr>
                        <tr>
                            <th>Pendidikan</th>
                            <td>S1 Pendidikan</td>
                        </tr>
                        <tr>
                            <th>Tanggal SK</th>
                            <td>01 Januari 2018</td>
                        </tr>
                        <tr>
                            <th>SK Kepala Sekolah</th>
                            <td>123/2018/Disdik</td>
                        </tr>
                    </table>
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