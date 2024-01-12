<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php
    $namaLengkap = $_POST['fname'] . " " . $_POST['lname'];
    $jenisKelamin = isset($_POST['jenisKelamin']) ? $_POST['jenisKelamin'] : "Tidak ada";
    $negara = $_POST['negara'];
    $bahasa = isset($_POST['bahasa']) ? implode(", ", $_POST['bahasa']) : "Tidak ada";
    $bio = $_POST['bio'];
    ?>
    <h1><strong>Selamat Datang</strong></h1>
    <h3>Terima kasih <u><?= $namaLengkap ?></u> telah bergabung di Website Kami. Media Belajar Kita Bersama!</h3>
    <br>
    <h3>Data diri anda</h3>
    <h3>Nama Lenkap : <?= $namaLengkap ?></h3>
    <h3>Jenis Kelamin : <?= $jenisKelamin ?></h3>
    <h3>Negara : <?= $negara ?></h3>
    <h3>Bahasa yang dikuasai : <?= $bahasa ?></h3>
    <h3>Bio : <?= $bio ?></h3>
</body>
</html>