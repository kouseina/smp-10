<?php
// Konfigurasi database
$host = 'localhost'; // Ganti dengan host database Anda
$dbname = 'smp_10'; // Nama database yang baru
$username = 'root'; // Nama pengguna database
$password = ''; // Password database

try {
    // Membuat koneksi ke database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Menangani error jika koneksi gagal
    die("Koneksi gagal: " . $e->getMessage());
}
?>
