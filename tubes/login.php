<?php 
session_start();

// Jika sudah ada/sudah login pindahkan ke halaman index (tidak bisa balik ke halaman login)
if(isset($_SESSION['login'])) {
  header('location: index.php');
  exit;
}

require 'function.php';

if(isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'" );

    // CEK USERNAME
    if(mysqli_num_rows($result) === 1) {
         
        // jika ada user cek passwordnya jika cocok 
        $row = mysqli_fetch_assoc($result);
        // Bandingkan password yang diinput user dengan password yang sudah diacak di database
        if(password_verify($password, $row['password'])) {
            // Begitu berhasil Set SESSION-NYA
            $_SESSION['login'] = true;
            header('location: index.php');
            exit;
        }
    }

    $error = true;
}




?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PARAGADGET</title>
    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- bootstrap icon -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

     <!-- my css -->
     <link rel="stylesheet" href="css/login.css">

  </head>
  <body>
      <!-- Awal Navbar -->
  <nav class="navbar navbar-expand-lg" style="background-color:#E3BEC6 ;">
  <div class="container-fluid justify-content-center">
    <a class="navbar-brand text-dark " href="#">PARAGADGET</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
</nav>
        <!-- Akhir Navbar -->
 <!-- Container -->
 <div class="container">
     <div class="row">
         <div class="col-md-6 text-center" style="background-image:url('img/memphis-colorful.webp') ;">
             <form action="" method="POST">
                 <h4 class="my-5 fw-bold">Login</h4>
                 <div class="my-4">
                 <input type="text" class="form-control w-50" name="username" placeholder="Username">
                    </div>
                    <div class="my-4">
                 <input type="password" class="form-control w-50" name="password" placeholder="Password">
                    </div>
                    <button type="submit" name="login" class="btn text-uppercase my-3" style="background-color:#E3BEC6 ;">Login</button>
             </form>
             <?php if(isset($error)) : ?>
                 <p style="color:red; font-style:italic; ">username / password salah</p>
             <?php endif; ?>
             <a href="registrasi.php">Register</a>
         </div>
     </div>
 </div>
 <!-- Akhir container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>