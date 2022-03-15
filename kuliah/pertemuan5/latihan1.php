<?php
// BELAJAR PHP UNTUK PEMULA | 7. ARRAY
// Wildan Fauzan | 213040025

// Array
// Variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yg berbeda
// Pasangan antara key dan value
// key-nya adalah index, yang dimulai dari nol

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");

// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";


// menampilkan 1 elemen pada array
echo $arr1[0];

echo "<hr>";

echo $bulan[1];

echo "<hr>";

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
var_dump($hari);
?>