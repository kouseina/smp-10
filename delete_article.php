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

    // Ambil data artikel untuk menghapus gambar
    $stmt = $pdo->prepare("SELECT image FROM articles WHERE id = :id");
    $stmt->execute(['id' => $article_id]);
    $article = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($article) {
        // Hapus gambar dari server
        if (file_exists('uploads/' . $article['image'])) {
            unlink('uploads/' . $article['image']);
        }

        // Hapus artikel dari database
        $stmt = $pdo->prepare("DELETE FROM articles WHERE id = :id");
        $stmt->execute(['id' => $article_id]);
    }
}

// Redirect ke halaman daftar artikel
header('Location: list_articles.php');
exit();
?>
