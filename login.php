<?php
session_start();

// Masukkan konfigurasi koneksi database
require_once 'config.php';

if (isset($_POST['login'])) {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari pengguna berdasarkan username
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($user && $password === $user['password']) {
        // Jika berhasil login, simpan sesi pengguna
        $_SESSION['user'] = $user['username'];
        header('Location: dashboard.php'); // Arahkan ke halaman dashboard
        exit();
    } else {
        // Jika login gagal
        $error = 'Username atau Password salah!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dashboard</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            background-color: #f0f2f5;
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            padding-top: 100px;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">Login</h3>
                <?php if (isset($error)): ?>
                    <div class="error-message"><?php echo $error; ?></div>
                <?php endif; ?>
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Link ke Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
