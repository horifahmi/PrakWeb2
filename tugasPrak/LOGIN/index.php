<?php
session_start(); 

$users = [
    "hori" => "password123",
    "admin" => "admin123"
];

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($users[$username]) && $users[$username] === $password) {
    // Jika berhasil login, simpan session
    $_SESSION['username'] = $username;
    
    // Redirect ke halaman dashboard
    header("Location: ../porfolio/porfolio.php");
    exit();
} else {
    // Jika login gagal, tampilkan pesan kesalahan
    echo "<script>alert('Username atau password salah!'); window.location.href = 'login.php';</script>";
}
?>
