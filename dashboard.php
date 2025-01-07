<?php
session_start();

// Cek jika user sudah login
if (!isset($_SESSION['user'])) {
    header('Location: login.php'); // Arahkan kembali ke halaman login
    exit();
}

// Ambil nama user yang login
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #575757;
            padding: 10px;
            display: block;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="p-3">
            <h4>Welcome, <?php echo $user; ?>!</h4>
        </div>
        <nav class="nav flex-column">
            <a class="nav-link" href="dashboard.php">Dashboard</a>
            <a class="nav-link" href="list_articles.php">Daftar Artikel</a>
            <a class="nav-link" href="create_article.php">Buat Artikel</a>
            <a class="nav-link" href="logout.php">Logout</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Dashboard</h1>
        <p>Selamat datang di halaman dashboard!</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
