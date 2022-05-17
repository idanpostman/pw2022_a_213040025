<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PARAGADGET | pengelolaan data gadget </title>

     <!-- Fonts Google -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- Data Tables -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">

     <!-- bootstrap icon -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">


     <!-- my css -->
     <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
      <!-- Awal Navbar -->
  <nav class="navbar navbar-expand-lg "style="background-color:#E3BEC6 ;">
  <div class="container-fluid">
    <a class="navbar-brand text-dark fw-bolder" href="#">PARAGADGET</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-light justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav fw-bolder">
             <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Barang Keluar
                    </a>
                    <ul class="dropdown-menu" style="background-color:#E3BEC6 ;" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item" href="index.php">Stock Gadget</a></li>
                      <li><a class="dropdown-item" href="masuk.php">Barang Masuk</a></li>
                      <li><a class="dropdown-item" href="keluar.php">Barang Keluar</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
        <a class="nav-link text-dark" href="#">About</a>
        <a class="garis text-dark">|</a>
        <a class="nav-link text-dark fs-3 my-auto" href="#"><i class="bi bi-box-arrow-right"></i></a>
      </div>
    </div>
  </div>
</nav>
        <!-- Akhir Navbar -->
 <!-- Container -->
 <div class="container">
   <div class="row my-3">
     <div class="col-md">
       <h2 class="text-uppercase text-center fw-bold"> Gadget Keluar</h2>
     </div>
     <hr>
   </div>
   <div class="row">
     <div class="col-md">
       <a href="tambah.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data Gadget</a>
       <a href="#" class="btn btn-danger ms-1" target="_blank"><i class="bi bi-file-earmark-pdf-fill"></i>&nbsp;Export ke PDF</a>
     </div>
   </div>
   <div class="row my-5">
     <div class="col-md">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Tanggal Keluar</th>
                    <th>Nama Gadget</th>
                    <th>Jumlah</th>
                    <th>Penerima</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2022-12-22 12:00:00</td>
                    <td>Xiaomi MI A1</td>
                    <td>50</td>
                    <td>CAHAYA CINTA CELLPHONE</td>
                </tr>
            </tbody>
        </table>
     </div>
   </div>
  </div>
<!-- Akhir Containner -->
<!-- Footer -->
<div class="container-fluid" style="background-color:#E3BEC6 ;">
  <div class="row">
    <div class="col-md-6">
      <h4 class="text-uppercase fw-bold">About</h4>
      <p class="text-lowercase">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
         Deleniti minus provident commodi nihil? Adipisci, expedita? Praesentium amet possimus neque quaerat accusantium, officiis ipsa inventore harum et, aliquid enim eligendi quas.</p>
    </div>
    <div class="col-md-6 text-center link">
      <h4 class="text-uppercase fw-bold">Link Account</h4>
      <a href="https://instagram.com/idanpostman/" target="_blank"><i class="bi bi-instagram fs-2"></i></a>
      <a href="https://web.facebook.com/wildan891" target="_blank"><i class="bi bi-facebook fs-2"></i></a>
    </div>
  </div>
  <footer class="text-center" style="padding: 5px">
    <p>Created with <i class="bi bi-heart-fill" style="color: red;"></i> by <u class="fw-bold">Wildan Fauzan</u></p>
  </footer>
</div>

<!-- Akhir Footer -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

     <!-- Datatables -->
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

     <script>
       $(document).ready(function () {
       $('#example').DataTable();
       });
     </script>
  </body>
</html>