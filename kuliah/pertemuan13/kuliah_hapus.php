<?php
require 'kuliah_function.php';



if(hapus($_GET["id"]) > 0) {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'kuliah_latihan1.php';
    </script>
";
}else {
    echo "
    <script>
        alert('data gagal dihapus!');
        document.location.href = 'kuliah_latihan1.php';
    </script>
";
}
?>