<?php
// Wildan Fauzan - 213040025 
// Variable Scope / lingkup variable
$x= 10;

function tampilx() {
    global $x;
    echo $x;
}

tampilx();
echo "<br>";
echo $x;
echo "<hr>"
?>

<?php 
// SUPERGLOBALS
// Variable global milik php
// merupakan Array Assosciative
echo $_SERVER["SERVER_NAME"];

echo "<hr>";
?>

<?php 
// $_GET
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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach($mahasiswa as $mhs): ?>
        <li>
            <a href="latihan2.php?
            nama=<?= $mhs["nama"];?>
            &npm=<?= $mhs["npm"]; ?>
            &email=<?= $mhs["email"]; ?>
            &jurusan=<?= $mhs["jurusan"]; ?>
            &gambar=<?= $mhs["gambar"];  ?>">
            <?= $mhs["nama"] ?></a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>