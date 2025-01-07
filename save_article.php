<?php
session_start();

// Cek jika user sudah login
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

// Koneksi ke database
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image'];

    // Cek apakah file gambar ada
    if ($image['error'] == 0) {
        $imageName = time() . '_' . $image['name'];
        $imagePath = 'uploads/' . $imageName;

        // Pindahkan file gambar ke folder uploads
        move_uploaded_file($image['tmp_name'], $imagePath);
    }

    // Simpan artikel ke database
    $stmt = $pdo->prepare("INSERT INTO articles (title, description, image) VALUES (?, ?, ?)");
    $stmt->execute([$title, $description, $imageName]);

    header('Location: list_articles.php');
    exit();
}
