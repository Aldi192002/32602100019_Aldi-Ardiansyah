<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layouting</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-page">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="=navbar-sosmed">
            <ul>
                <li>Linkedin</li>
                <li>Instagram</li>
                <li>Facebook</li>
                <li>Whatsapp</li>
            </ul>
        </div>
    </div>
    <div class="banner">
        <span class="name">
            Tulis nama Anda
        </span> <br>
        <span class="description">
            Mahasiswa lulusan teknik informatika jurusan teknik informatika angkatan 2021
        </span>
    </div>
    <? $this->renderSetion('content') ?>
</body>

</html>