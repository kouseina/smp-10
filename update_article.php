<?php
session_start();

// Cek jika user sudah login
if (!isset($_SESSION['user'])) {
    header('Location: login.php'); // Arahkan kembali ke halaman login
    exit();
}

// Koneksi ke database
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image'];

    // Ambil data artikel yang lama untuk cek gambar
    $stmt = $pdo->prepare("SELECT image FROM articles WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $article = $stmt->fetch(PDO::FETCH_ASSOC);

    // Jika gambar baru diupload
    if ($image['error'] == 0) {
        // Hapus gambar lama (jika ada)
        if (file_exists('uploads/' . $article['image'])) {
            unlink('uploads/' . $article['image']);
        }

        // Simpan gambar baru
        $imageName = time() . '_' . $image['name'];
        $imagePath = 'uploads/' . $imageName;
        move_uploaded_file($image['tmp_name'], $imagePath);
    } else {
        // Jika tidak ada gambar baru, gunakan gambar lama
        $imageName = $article['image'];
    }

    // Update artikel di database
    $stmt = $pdo->prepare("UPDATE articles SET title = :title, description = :description, image = :image WHERE id = :id");
    $stmt->execute([
        'title' => $title,
        'description' => $description,
        'image' => $imageName,
        'id' => $id
    ]);

    // Redirect ke halaman daftar artikel setelah berhasil update
    header('Location: list_articles.php');
    exit();
}
?>
