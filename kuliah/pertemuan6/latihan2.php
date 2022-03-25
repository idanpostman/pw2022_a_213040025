<?php 
// Array Assosiactive
// definisinya sama seperti array numerik, kecuali
// key=nya adalah string yang kita buat sendiri
$mahasiswa = [[
    "nama"      => "Wildan Fauzan", 
    "npm"       => "213040025", 
    "email"     => "idanpostman@gmail.com", 
    "jurusan"   => "Teknik Informatika",
    "gambar"    => "luffyy.jpg"],
    [
    "nama"      => "Ainan Bahrul Ihsan", 
    "npm"       => "213040012", 
    "email"     => "ainan@gmail.com", 
    "jurusan"   => "Teknik Informatika",
    "gambar"    => "zoro.jpg"
    ]];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NPM : <?= $mhs["npm"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>    
    
</body>
</html>