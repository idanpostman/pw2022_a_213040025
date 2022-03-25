<?php
// Array Associative
// Array yang indexnya berupa string yang ber-asosiasi dengan nilainya

$mahasiswa = 
[[
    "nama"      => "Wildan Fauzan", 
    "npm"       => "213040025", 
    "email"     => "idanpostman@gmail.com", 
    "Jurusan"   => "Teknik Informatika"],
 [
    "nama"      => "Ainan Bahrul Ihsan", 
    "npm"       => "213040012", 
    "email"     => "ainan@gmail.com", 
    "Jurusan"   => "Teknik Informatika"], 
 [
    "nama"      => "Mochamad Haykal", 
    "npm"       => "213040028", 
    "email"     => "Haykal@gmail.com", 
    "Jurusan"   => "Teknik Informatika"],
 [   
    "nama"      => "Gilang Ramadhan", 
    "npm"       => "213040018", 
    "email"     => "gilang@gmail.com", 
    "Jurusan"   => "Teknik Informatika"]];
    
    // var_dump($mahasiswa[2]["email"]);
?>



    <?php foreach($mahasiswa as $mhs) {?>
        <ul>
            <li>Nama : <?php echo $mhs["nama"] ?></li>
            <li>NPM : <?php echo $mhs["npm"] ?></li>
            <li>Email : <?php echo $mhs["email"] ?></li>
            <li>Jurusan : <?php echo $mhs["Jurusan"] ?></li>
        </ul>
    <?php  }  ?>



