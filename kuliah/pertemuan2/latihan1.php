<?php
    // Pertemuan 2, membahas mengenai sintaks PHP
    // Nilai: integer, string, boolean
    echo 10;
    echo "<hr>";

    // VARIABEL
    // Wadah untuk menyimpan NILAI
    // nama nya bebas, tidak boleh diawali angka
    // tidak boleh ada spasi 
    $nama = 'Wildan';
    echo $nama;
    echo "<br>";
    // bisa ditimpa / overwrite
    $nama = 'Fauzan';
    echo $nama;
    echo "<hr>";

    // String
    //  '', ""
    echo "jum'at";
    echo "<br>";
    // escaped character
    // \ (back-slash)
    echo 'Sandhika : "Jum\'at" ';
    echo "<br>";
    echo "Sandhika : \"Jum'at\"";
    echo "<hr>";

    // Interpolasi
    // Mencetak isi variabel
    // hanya bisa digunakan oleh ""

    echo "Halo nama saya $nama";
    echo "<br>";
    $price = 200;
    echo "Price : $$price";


    echo "<hr>";

    // OPERATOR
    // Aritmatika
    // +, -, *, /, % (modulo/modulus/sisa bagi)
    echo (1 + 2) * 3 - 4; //KaBaTaKu
    echo "<hr>";

    $alas = 10;
    $tinggi = 20;
    $luas_segi_tiga = ($alas * $tinggi) / 2;
    echo $luas_segi_tiga;
    echo "<br>";
    echo 3 % 2;
    echo "<hr>";


    // Concat 
    // Penggabung String
    // . (titik)
    $nama_depan = 'Wildan';
    $nama_belakang = 'Fauzan';
    echo $nama_depan . " " . $nama_belakang;
    echo "<hr>";

    // Perbandingan
    // <, >, <=. >=, ==, !=
    echo 1 < 5;
    echo "<br>";
    echo 10 == "10";

    // Identitas / strict comparison
    // ===, !==
    echo 10 === "10";
    echo "<hr>";

    // Increment / Decrement
    // Penambahan / Pengurangan 1
    //  ++, --

    $x = 10;
    echo ++$x;
    echo "<br>";
    echo $x++;
    
    echo "<hr>";

    //Logika
    // &&, ||, !

    $x = 10;
    var_dump($x < 20 || $x % 2 == 0);
















?>
