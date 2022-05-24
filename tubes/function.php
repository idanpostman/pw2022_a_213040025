<?php 
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tubespw");

// Function query untuk search
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Function Cari
function cari($keyword) {
    $query = "SELECT * FROM stock
                WHERE
                nama_barang LIKE '%$keyword%' OR
                deskripsi LIKE '%$keyword%' OR
                stock LIKE '%$keyword%'
    ";
    return query($query);
}

  

// Menambah gadget baru
if(isset($_POST['addnewgadget'])) {
    $namagadget = $_POST['namagadget'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    // upload gambar
    $gambar = upload();
    if(!$gambar) {
        return false;
    }

    $addtotable = mysqli_query($conn, "INSERT into stock (nama_barang, deskripsi, stock, gambar)
     values('$namagadget', '$deskripsi', '$stock', '$gambar')");
     if($addtotable) {
         header('location:index.php');
     }else {
         echo "gagal";
         header('location:index.php');
     }
}

// Menambah Gadget Masuk
if(isset($_POST['barangmasuk'])) {
    $gadgetnya = $_POST['gadgetnya'];
    $pengirim = $_POST['pengirim'];
    $qty = $_POST['qty'];

    $cekstocksekarang = mysqli_query($conn, "SELECT * FROM stock WHERE id_barang='$gadgetnya'");
    $ambildata = mysqli_fetch_array($cekstocksekarang);

    $stocksekarang = $ambildata['stock'];
    $tambahstocksekarang = $stocksekarang + $qty;


    $addtomasuk = mysqli_query($conn, "INSERT into masuk (id_barang, keterangan ,qty) 
                            values('$gadgetnya', '$pengirim', '$qty')");
    $updatestockmasuk = mysqli_query($conn, "UPDATE stock SET stock='$tambahstocksekarang' WHERE id_barang = '$gadgetnya'");
         if($addtomasuk && $updatestockmasuk) {
            header('location:masuk.php');
        }else {
            echo "gagal";
            header('location:masuk.php');
        }
}

// Menambah Gadget Keluar
if(isset($_POST['barangkeluar'])) {
    $gadgetnya = $_POST['gadgetnya'];
    $penerima = $_POST['penerima'];
    $qty = $_POST['qty'];

    $cekstocksekarang = mysqli_query($conn, "SELECT * FROM stock WHERE id_barang='$gadgetnya'");
    $ambildata = mysqli_fetch_array($cekstocksekarang);

    $stocksekarang = $ambildata['stock'];
    $tambahstocksekarang = $stocksekarang - $qty;


    $addtokeluar = mysqli_query($conn, "INSERT into keluar (id_barang, penerima ,qty) 
                            values('$gadgetnya', '$penerima', '$qty')");
    $updatestockkeluar = mysqli_query($conn, "UPDATE stock SET stock='$tambahstocksekarang' WHERE id_barang = '$gadgetnya'");
         if($addtokeluar && $updatestockkeluar) {
            header('location:keluar.php');
        }else {
            echo "gagal";
            header('location:keluar.php');
        }
}

// FUNCTION UNTUK UPLOAD GAMBAR
function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
    if($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!')        
                </script>";
            return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('yang anda upload bukan gambar!')        
                </script>";
            return false;
    }

    // cek jika ukurannya terlalu besar
    if($ukuranFile > 1000000) {
        echo "<script>
                alert('ukuran gambar terlalu besar!')        
                </script>";
            return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}
// AKHIR FUNCTION UNTUK UPLOAD GAMBAR

// Update Info Gadget

if(isset($_POST['updatebarang'])) {
    $idb  = $_POST['idb'];
    $gambar = $_POST['gambar'];
    $nama_barang  = $_POST['nama_barang'];
    $deskripsi   = $_POST['deskripsi'];
    $gambarLama = $_POST['gambarLama'];

    // apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    $update = mysqli_query($conn, "UPDATE stock
                             SET gambar = '$gambar',
                             nama_barang = '$nama_barang',
                             deskripsi = '$deskripsi'
                             WHERE id_barang = '$idb'
                             ");
    if($update) {
            header('location:index.php');
        }else {
            echo "gagal";
            header('location:index.php');
        }
}

// Hapus Barang
if(isset($_POST['hapusbarang'])) {
    $idb = $_POST['idb'];

    $hapus = mysqli_query($conn, "DELETE FROM stock WHERE id_barang = '$idb'");
    if($hapus) {
        header('location:index.php');
    }else {
        echo "gagal";
        header('location:index.php');
    }
}

?>