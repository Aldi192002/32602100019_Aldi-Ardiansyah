<!DOCTYPE html>
<html>

<head>
    <title>BAB 3</title>
    <meta charset="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <title>Styling CSS</title>
</head>

<body>
    <!-- Navigasi Anda -->
    <div class="navbar">
        <div class="navbar-icon">
            <i class="fa-solid fa-circle-user fa-2x1"></i>
        </div>
        <div class="navbar-page">
            <ul type='none'>
                <li><a href="/">Home</li>
                <li><a href="/profile">Halaman Profile</li>
                <li><a href="/experience">Halaman Pengalaman</li>
                <li><a href="#">Contact</li>
            </ul>
        </div>
        <div class="navbar-sosmed">
            <ul type='none'>
                <li><i class="fa-brands fa-linkedin fa-lg"></i></li>
                <li><i class="fa-brands fa-instagram fa-lg"></i></li>
                <li><i class="fa-brands fa-facebok fa-lg"></i></li>
                <li><i class="fa-brands fa-square-whatsapp fa-lg"></i></li>
            </ul>
        </div>
    </div>
    <div class="header">
        <h1><b>Muhammad Nafid Zanis</b></h1>
    </div>
    <main>
        <!-- Konten Utama akan dirender di sini -->
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <!-- Footer Anda -->
        <p>Dibuat oleh NAFID ganteng 2003</p>
    </footer>
</body>

</html>