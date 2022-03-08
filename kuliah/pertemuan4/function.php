<!-- <?php
// Membuat fungsi / definisi fungsi 
function totalLuasDuaKubus($a, $b) {
    $luas_a = $a * $a * $a;
    $luas_b = $b * $b * $b;

    $total= $luas_a + $luas_b;

    return "Total luas dari kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
}   

echo totalLuasDuaKubus(9,4);
echo "<br>";

echo totalLuasDuaKubus(10,15);
echo "<br>";

echo totalLuasDuaKubus(100,200);
?> -->

<!-- LANJUTAN PENGERJAAN VID BELAJAR PHP UNTUK PEMULA -->
<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Wildan"); ?></h1>
</body>
</html>