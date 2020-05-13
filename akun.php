<?php 

require 'halaman_admin/functions.php';

if( isset( $_POST['submit'] ) ){
  if( bayar($_POST) > 0 ){
    echo '<script>
          alert("Bukti pembayaran berhasil di kirim")
          </script>';
  }else {
    echo '<script>
    alert("Gagal melakukan pembayaran")
    </script>';
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
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css">


    <title>My account</title>
  </head>
  <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top ubah" id="navbar">
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
                <a class="nav-item nav-link active page-scroll" href="ppdb.php">PPDB</a>
    
              </div>

              <div class="icon-user">
                <a href="#">
                  <i class="fas fa-envelope" data-toggle="tooltip" title="Pesan"></i>
                </a>
                <a href="#">
                  <i class="fas fa-bell" data-toggle="tooltip" title="Notifikasi"></i>
                </a>
                <a href="logout.php">
                  <i class="fas fa-sign-out-alt" data-toggle="tooltip" title="Log out"></i>
                </a>
              </div>


            </div>
         </div>
        </nav>

       <div class="sampul" id="change-it-now"><h1>My Account</h1></div>
       <div class="foto-profil"></div>

       <div class="container">
         <div class="row">

        <div class="col-md-6 mt-5">
          <div class="card bg-primary text-white">
            <div class="card-body">
              
                <h1 class="text-center">Identitas Siswa</h1>
                <p>Nama siswa: Daffa</p>
                <p>Alamat: Jl. Radio</p>
                <p>TTL: 23 Oktober 2015</p>
                <p>Jenis Kelamin: Laki-laki</p>
                <p>Kelas: </p>

            </div>
          </div>

          
        </div>



           <div class="col-md-6 mt-5">            
  
              <div class="card">

              <div class="card-body">
                <h1 class="text-center pb-5">pembayaran</h1>
                <form action="" method="POST" enctype="multipart/form-data">

                  <div class="from-group">

                    <div class="input-group">                        
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                      </div>
                      <input type="text" class="form-control" name="nama_siswa" placeholder="Nama lengkap siswa" required>
                    </div>
                    
                  </div>

                  <div class="from-group">

                    <div class="input-group">                        
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-chalkboard"></i></div>
                      </div>
                      <input type="text" class="form-control" name="induk" placeholder="No. induk siswa" required >
                    </div>
                    
                  </div>                    

                  <div class="form-group mt-4">
                    <label for="jenis-bayar">Jenis Pembayaran</label>
                    <select id="jenis-bayar" name="jenis_pembayaran" class="form-control" required>
                      <option value="" disabled selected>Pilih Pembayaran...</option>
                      <option value="Uang gedung Rp.2.500.000">Uang gedung Rp.2.500.000</option>
                      <option value="SPP Rp.300.000">SPP Rp.300.000</option>
                      <option value="Uang seragam Rp.700.000">Uang seragam Rp.700.000</option>
                      <option value="Study Tour Rp.1.000.000">Study Tour Rp.1.000.000</option>
                    </select>
                  </div>

                  <label for="upload">Upload bukti pembayaran</label><br>
                  <input type="file" name="gambar" required><br><br>
                  <button type="submit" class="btn btn-success" name="submit">Bayar</button>

                </form>
              </div>                
  
              </div>
  
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
  </body c>
</html>



 