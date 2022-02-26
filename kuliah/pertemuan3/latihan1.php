<?php
// TUGAS BELAJAR PHP untuk PEMULA PERTEMUAN 3
// WILDAN FAUZAN - NPM 213040025 
// 26 FEBRUARI 2022 


// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array


// Penggunaan for
for($i = 0; $i < 5; $i++ ){
    echo "Hello World! <br>";
}
echo "<hr>";

// Penggunaan While
$i = 0;
while ( $i < 5  ){
    echo "Hello World! <br>";
    $i++;
}
echo "<hr>";

// Penggunaan do.. while
$i = 0;
do {
  echo "Hello World! <br>";  
$i++;
} while( $i < 5 );
echo "<hr>";
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color:silver ;
        }
    </style>
</head>
<body>

    <!-- Awal pengulangan tabel -->
<table border="1" cellpadding="10" cellspasing="0">
    <?php
        for($i = 1; $i <= 3; $i++){
            echo "<tr>";
            for($j = 1; $j <= 5; $j++){
                echo "<td>$i, $j</td>";
            }
            echo "</tr>";
        }
        
    ?>
</table>
    <!-- Akhir pengulangan tabel -->

    <?php
    echo "<br>";
    echo "<hr>";
    ?>

    <!-- Awal Tabel dengan tag HTMl dipisah dan penerapan penkondisian -->
    <table border="1" cellpadding="10" cellspasing="0">
        <?php for ( $i = 0; $i <= 5; $i ++) : ?>
        <?php if($i % 2 == 1) : ?>
             <tr class = "warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
                <?php for($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>   
            </tr>
         <?php  endfor; ?>  
    </table>
    <!-- Akhir Tabel dengan tag HTMl dipisah dan penerapan penkondisian -->
</body>
</html>