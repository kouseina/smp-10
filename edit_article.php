<?php
session_start();

// Cek jika user sudah login
if (!isset($_SESSION['user'])) {
    header('Location: login.php'); // Arahkan kembali ke halaman login
    exit();
}

// Koneksi ke database
require_once 'config.php';

// Ambil ID artikel dari URL
if (isset($_GET['id'])) {
    $article_id = $_GET['id'];

    // Ambil data artikel berdasarkan ID
    $stmt = $pdo->prepare("SELECT * FROM articles WHERE id = :id");
    $stmt->execute(['id' => $article_id]);
    $article = $stmt->fetch(PDO::FETCH_ASSOC);

    // Jika artikel tidak ditemukan, arahkan kembali ke daftar artikel
    if (!$article) {
        header('Location: list_articles.php');
        exit();
    }
} else {
    // Jika ID tidak ada di URL, arahkan kembali ke daftar artikel
    header('Location: list_articles.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artikel</title>
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
            <a class="nav-link" href="list_articles.php">Daftar Artikel</a>
            <a class="nav-link" href="logout.php">Logout</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content" style="margin-left: 250px;">
        <h1>Edit Artikel</h1>
        <form action="update_article.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
            
            <div class="mb-3">
                <label for="title" class="form-label">Judul Artikel</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($article['title']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi Artikel</label>
                <textarea class="form-control" id="description" name="description" rows="5" required><?php echo htmlspecialchars($article['description']); ?></textarea>
            </div>
            
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Artikel</label>
                <input type="file" class="form-control" id="image" name="image">
                <small class="text-muted">Gambar yang saat ini: <img src="uploads/<?php echo $article['image']; ?>" width="100" alt="Gambar Artikel"></small>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
