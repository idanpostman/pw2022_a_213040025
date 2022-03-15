 <?php
//  ARRAY
// Array adalah variable yang dapat menampung lebih dari satu nilai sekaligus]

$hari1 = "Senin";
$hari2 = "Selasa";

$bulan1 = "Januari";
$bulan12 = "Desember";

// dengan array kita tak perlu membuat variable satu-satu

// Membuat Array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"]; // Cara baru mulai dari PHP v.5

$bulan = array("Januari", "Februari", "Maret"); // Cara lama sebelum PHP 5. Cara ini masih bisa dipakai

$myArray = [100, "Sandhika", true]; //Bisa menyimpan tipe data yang berbeda int, String, boolean


// isi dari array disebut index
// Mencetak Array
// Mencetak 1 elemen / nilai menggunakan indexnya, indexnya dimulai dari 0 (nol) 
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// Mencetak semua elemen pada Array
// Menggunakan function var_dump() atau print_r()
// Khusus untuk debugging tidak untuk ditampilkan ke user
var_dump($hari);
echo "<br>";
print_r($bulan); 
echo "<hr>";

// mencetak menggunakan looping
// ditampilkan ke user
// menggunakan for
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach (khusus untuk array)
// lebih sering dipakai dibangin dengan for 
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}
echo "<hr>";

foreach ($hari as $key => $value) {
    echo "Key: $key, Value: $value";
    echo "<br>";
}

echo "<hr>";

// Memanipulasi isi array 
// Menambah elemen baru di akhir array
// bisa, tapi tidak disarankan
$hari[] = "Sabtu";
$hari[count($hari)] = "Minggu";
var_dump($hari);



 ?>