<!-- <?php
// FUNCTION

// Built-in Function
//  date()
echo date("l, j F Y",);
echo "<hr>";

// Time
echo time();
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 Januri 1970
echo "<br>";
echo time() + 60 * 60 * 24;
echo "<hr>";
echo date("l, j F Y", time() - 60 * 60 * 24 * 100);
echo "<hr>";

// mktime(0,0,0,0,0,0); (enam)
// mendapatkan detik pada tanggal tertentu
// jam, menit, detik, bulan, tanggal, tahun
echo mktime(0,0,0,3,5,2022);
echo "<hr>";
echo date ("l", mktime(0,0,0,12,14,2002));
echo "<hr>";

// MATH
echo pow(2,3); // PANGKAT
echo "<br>";
echo rand(1,10); // angka random
echo "<br>";

// Pembulatan
// round(), ceil(), floor()
echo round(2.9); //Pembulatan terdekat
echo "<br>";

echo ceil(2.1); // ke atas (ceiling / langit-langit)
echo "<br>";

echo floor(2.9); // ke bawah (lantai)
echo "<hr>";
?> -->

<!-- BELAJAR PHP UNTUK PEMULA | 6. FUNCTION -->
<!-- 08 MARET 2022 -->
<!-- WILDAN FAUZAN - 213040025 -->
<!-- PEMROGRAMAN WEB -->
<?php
// Date
// Untuk menampilkan tanggal dengan format tententu
echo date("l, d-M-Y");

echo "<hr>";
// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
echo time();
echo "<hr>";

echo date("l", time()-60*60*24*100);
echo "<hr>";

// mktime
// membuat detik sendiri
// mktime (0,0,0,0,0,0)
// jam, menit, detik. bulan, tanggal, tahun
echo date("l", mktime(0,0,0,8,25,1985));
echo "<hr>";

// strtotime
echo date("l", strtotime("25 aug 1985"));


?>


























