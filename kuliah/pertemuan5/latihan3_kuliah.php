<?php
// STUDI KASUS ARRAY

$mahasiswa = [["Wildan Fauzan", "213040025", "idanpostman@gmail.com", "Teknik Informatika"], 
["Ainan Bahrul Ihsan", "213040012", "ainan@gmail.com", "Teknik Informatika"], 
["Mochamad Haykal Alvegio Hadian", "213040028", "haykal@gmail.com", "Teknik informatika"]];


?>


<?php foreach($mahasiswa as $mhs) {?>
    <ul>
        <li><?php echo "Nama: $mhs[0]" ?></li>
        <li><?php echo "NPM: $mhs[1]" ?></li>
        <li><?php echo "Email: $mhs[2]" ?></li>
        <li><?php echo "Jurusan: $mhs[3]" ?></li>
    </ul>
<?php  }  ?>
