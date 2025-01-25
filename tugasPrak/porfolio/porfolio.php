<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke login.php
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profil Sederhana</title>
</head>

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<body>
    <!-- home section -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>hori fahmi</h1>
            <h3>And I'm a <span class="multiple-text"></span>Mahasiswa Sistem Informasi</h3>
            <p>Asal sekolah ponpes Sabilul Hasanah km24 banyuasin, alamat ds.Lubuk Tunggal Ogan Ilir</p>
            <div class="social-media">
                <a href="https://www.facebook.com/profile.php?id=100080514472585&mibextid=ZbWKwL"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.tiktok.com/@baguyurbae?_t=ZS-8tKjHjgqTti&_r=1"><i class='bx bxl-tiktok'></i></a>
                <a href="https://www.linkedin.com/in/hori-fahmi-507415299?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class='bx bxl-linkedin' ></i></a>
            </div>
        </div>

        <div class="home-image">
            <img src="./images/aku.jpg" alt="hori fahmi">
        </div>
    </section>
    <!-- akhir home section -->
</body>
</html>
