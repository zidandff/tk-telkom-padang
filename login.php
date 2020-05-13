<?php 
session_start();
require 'halaman_admin/functions.php';

// cek apakah masih ada cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ){

  $id = $_COOKIE["id"];
  $key = $_COOKIE["key"];
  $result = mysqli_query($koneksi, "SELECT username FROM login WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek username dan cookie
  if( $key === hash('sha256', $row['username']) ){
    $_SESSION["login"] = true;
  }

}


if( isset($_SESSION["login"]) ){
  header("Location: halaman_admin/admin.php");
  exit;
}


if( isset($_POST['login']) ){

  $username = $_POST["username"];
  $password = $_POST["password"];
  
  $result = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username'");

  if ( mysqli_num_rows($result) === 1 ) {
    
    // cek password 
    $row = mysqli_fetch_assoc($result);
    if( password_verify($password, $row["password"]) ){
      // set session
      $_SESSION["login"] = true;

      // cek  checkbox remember me 
      if( isset($_POST["remember"]) ){

        // set cookie
        setcookie('id', $row['id'], time()+ (60 * 60 * 24 * 7) );
        setcookie('key', hash('sha256', $row['username']), time()+ (60 * 60 * 24 * 7) );

      }

      // pindah ke halaman
      if( $row['level'] == 'admin' ){
        header("location: halaman_admin/admin.php");
      }else {
        header("Location: akun.php");
      }
      
      exit;
    }

  }
  $error = true;
  
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
    <title>LOGIN</title>
  </head>
  <body style="background-image: url(img/background/login.png); background-repeat: no-repeat;">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light nav-pembayaran fixed-top" id="navbar">
    <div class="container">
      <a class="navbar-brand page-scroll" href="#home">
        <img src="img/icon/logo2.png" width="110" alt="telkom-school">
      </a>
      <button class="navbar-toggler" type="button" data-toggle=" autoHide" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""><i class=" fas fa-bars" style="color: #e4262c; font-size: 30px;"></i></span>
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
        <a href="login.php"><i class=" fas fa-sign-in-alt pl-2 pr-3" style="color: #e4262c; font-size: 20px;" data-toggle="tooltip" data-placement="top" title="LOGIN"></i></a>
      </div>
   </div>
  </nav>
  <!-- akhir navbar -->

      
      <div class="container ">

        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8 login-box">            

          <h1 class="text-center">LOGIN</h1>
          <hr class="garis mb-5">

          <?php if( isset($error) ): ?>
            <p class="">Username/Password salah!</p>
          <?php endif; ?>
          
          <form action="" method="POST" class="text-center">

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

              <div class="form-check">
                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                <label for="remember" class="form-check-label">Remember me</label>
              </div>
                
                <button type="submit" name="login" class="btn-login">Login</button>
                <p class="small pt-2">pengguna baru?<a href="signup.php" style="text-decoration: underline;">Buat akun</a></p>
             
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