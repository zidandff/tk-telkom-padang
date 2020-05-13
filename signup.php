<?php 

require "halaman_admin/functions.php";

if( isset($_POST["register"]) ){
  
  if( register($_POST) > 0 ){
    echo '<script>
            alert("Akun berhasil dibuat")
         </script>';
  }else {
    echo '<script>
            alert("Gagal membuat akun")
        </script>';
    mysqli_error($koneksi);
  }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>SIGN UP</title>
  </head>
  <body style="background-image: url(img/background/login.png); background-repeat: no-repeat;">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light nav-pembayaran fixed-top" id="navbar">
    <div class="container">
      <a class="navbar-brand page-scroll" href="#home">
        <img src="img/icon/logo2.png" width="110" alt="telkom-school">
      </a>
      <button class="navbar-toggler" type="button" data-toggle=" autoHide" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" autoHide navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active page-scroll" href="index.html#home">Home</a>
          <a class="nav-item nav-link active page-scroll" href="index.html#profil">Profil</a>
          <a class="nav-item nav-link active page-scroll" href="index.html#program">Program</a>
          <a class="nav-item nav-link active page-scroll" href="index.html#fasilitas">Fasilitas</a>
          <a class="nav-item nav-link active page-scroll" href="ppdb.html">PPDB</a>
          <!-- <a class="nav-item nav-link active page-scroll" href="login.html">Login</a> -->
        </div>
        <a href="login.html"><i class=" fas fa-sign-in-alt pl-2 pr-3" style="color: #e4262c; font-size: 20px;" data-toggle="tooltip" data-placement="top" title="LOGIN"></i></a>
      </div>
   </div>
  </nav>
  <!-- akhir navbar -->
      
      <div class="container ">

        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8 login-box">            

          <h1 class="text-center">SIGN UP</h1>
          <hr class="garis mb-5">
          <form action="" method="POST" class="text-center">

            <div class="form-group">

                <div class="input-group">

                  <div class="input-group-prepend">
                    <div class="input-group-text pt-3 login-prepend"><i class="fas fa-at" style="color: red;"></i></div>
                  </div>

                  <input type="email" class="form-control input-box" name="email" placeholder="Email">

                </div>

              </div>


              <div class="form-group">
         
                <div class="input-group">

                  <div class="input-group-prepend">
                    <div class="input-group-text pt-3 login-prepend"><i class="fas fa-user" style="color: red;"></i></div>
                  </div>

                  <input type="text" class="form-control input-box" name="username" placeholder="Username"> 

                </div>
            
              </div>

              <div class="form-group">

                <div class="input-group">

                  <div class="input-group-prepend">
                    <div class="input-group-text pt-3 login-prepend"><i class="fas fa-lock" style="color: red;"></i></div>
                  </div>

                  <input type="password" class="form-control input-box" name="password" placeholder="Password">

                </div>

              </div>

              <div class="form-group">

                <div class="input-group">

                  <div class="input-group-prepend">
                    <div class="input-group-text pt-3 login-prepend"><i class="fas fa-lock" style="color: red;"></i></div>
                  </div>

                  <input type="password" class="form-control input-box" name="password2" placeholder="Konfirmasi Password">

                </div>

              </div>

              <input type="hidden" name="level">

              
                
                <button type="submit" name="register" class="btn-login">Sign Up</button>
                <p class="small pt-2">Sudah punya akun?<a href="login.php" style="text-decoration: underline;">Login</a></p>
             
          </form>

          </div>
        </div>

      </div>

    









    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery.easing.1.3.js"></script>
    <script src="bootstrap/js/script.js"></script>
  </body>
</html>