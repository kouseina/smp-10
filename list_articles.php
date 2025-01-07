<?php
session_start();

// Cek jika user sudah login
if (!isset($_SESSION['user'])) {
    header('Location: login.php'); // Arahkan kembali ke halaman login
    exit();
}

// Koneksi ke database
require_once 'config.php';

// Ambil semua artikel dari database
$stmt = $pdo->query("SELECT * FROM articles");
$articles = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="p-3">
            <h4>Welcome, <?php echo $_SESSION['user']; ?>!</h4>
        </div>
        <nav class="nav flex-column">
            <a class="nav-link" href="dashboard.php">Dashboard</a>
            <a class="nav-link" href="create_article.php">Buat Artikel</a>
            <a class="nav-link" href="logout.php">Logout</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content" style="margin-left: 250px;">
        <h1>Daftar Artikel</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($article['title']); ?></td>
                        <td><?php echo htmlspecialchars(substr($article['description'], 0, 100)); ?>...</td>
                        <td><img src="uploads/<?php echo $article['image']; ?>" alt="Image" width="100"></td>
                        <td>
                            <a href="edit_article.php?id=<?php echo $article['id']; ?>" class="btn btn-warning btn-sm">Ubah</a>
                            <a href="delete_article.php?id=<?php echo $article['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
