<?php
session_start();

// Hapus sesi login
session_destroy();

// Arahkan ke halaman login
header('Location: login.php');
exit();
