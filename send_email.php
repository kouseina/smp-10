<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Sertakan file autoload PHPMailer
require 'vendor/autoload.php'; // Jika menggunakan Composer
// require '/path/to/PHPMailer/src/Exception.php'; // Jika tidak menggunakan Composer
// require '/path/to/PHPMailer/src/PHPMailer.php';
// require '/path/to/PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari formulir
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Buat objek PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Mengatur server pengiriman email
        $mail->isSMTP(); // Menggunakan SMTP
        $mail->Host = 'smtp.gmail.com'; // SMTP server Anda (contoh menggunakan Gmail)
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com'; // Ganti dengan alamat email Anda
        $mail->Password = 'your-email-password'; // Ganti dengan password email Anda
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS enkripsi
        $mail->Port = 587; // Port untuk TLS (587)

        // Pengaturan pengirim dan penerima
        $mail->setFrom($email, $name); // Dari alamat email pengirim
        $mail->addAddress('kouseinadaffa@gmail.com'); // Alamat email penerima

        // Isi pesan email
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "Nama: $name<br>Email: $email<br>Pesan: $message";
        $mail->AltBody = "Nama: $name\nEmail: $email\nPesan: $message"; // Body alternatif jika HTML tidak didukung

        // Kirim email
        $mail->send();
        echo 'Pesan Anda telah dikirim!';
    } catch (Exception $e) {
        echo "Pesan gagal dikirim. Error: {$mail->ErrorInfo}";
    }
}
?>
