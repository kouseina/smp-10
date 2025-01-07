<?php
// Koneksi ke database
require_once 'config.php';

// Ambil ID artikel dari URL
if (isset($_GET['id'])) {
    $article_id = $_GET['id'];

    // Ambil data artikel berdasarkan ID
    $stmt = $pdo->prepare("SELECT * FROM articles WHERE id = :id");
    $stmt->execute(['id' => $article_id]);
    $article = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$article) {
        echo "Artikel tidak ditemukan!";
        exit();
    }
} else {
    echo "ID artikel tidak tersedia!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h1><?php echo htmlspecialchars($article['title']); ?></h1>
        <img src="uploads/<?php echo htmlspecialchars($article['image']); ?>" class="img-fluid" alt="Article Image">
        <p><?php echo nl2br(htmlspecialchars($article['description'])); ?></p>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
