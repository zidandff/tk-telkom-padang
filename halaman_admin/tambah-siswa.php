<?php
session_start();

if( !isset($_SESSION["login"]) ){
  header("Location: ../login.php");
  exit;
}

require 'functions.php';

if( isset($_POST["submit"]) ){

    if( tambah($_POST) > 0 ){
      echo '<script>alert("Data berhasil ditambahkan")</script>';
      header('Location: siswa.php');
    }else{
      echo '<script>alert("Data gagal ditambahkan")</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">

    <title>Tambah data</title>
</head>
<body>

   <div class="content">

          <!-- sidebar -->
      <div class="sidebar">
        <a href="#" class="close" onclick="closeSlideMenu()">
          <i class="fas fa-times"></i>
        </a>
        <a href="admin.php">Dashboard</a>
        <a href="siswa.php">Data siswa</a>
        <a href="pendaftar.php">Data PPDB</a>
        <a href="data_bayar.php">Pembayaran</a>
      </div>

    <!-- konten utama -->
    <!-- navbar -->
      <div class="container-fluid">

        <div class="row">

          <div class="col nav-admin">
            <div class="slide">
              <a href="#" onclick="openSlideMenu()">
                <i class="fas fa-bars"></i>
              </a>
            </div>

            <div class="icon">
              <a href="#">
                <i class="fas fa-envelope" data-toggle="tooltip" title="Pesan"></i>
              </a>
              <a href="#">
                <i class="fas fa-bell" data-toggle="tooltip" title="Notifikasi"></i>
              </a>
              <a href="../logout.php">
                <i class="fas fa-sign-out-alt" data-toggle="tooltip" title="Log out"></i>
              </a>
              
            </div>  
          </div>

        </div>

      </div>
      <!-- akhir navbar -->

      <!-- konten -->
      <div class="konten-utama">
          <div class="container ">

        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-10 col-sm-12 ">
                <div class="card">
                <div class="shadow card-body">
                    <h1 class="text-center">Tambah data siswa</h1>
                    <form action="" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="">No. Induk:</label>
                        <input class="form-control" type="number" name="induk" required>                
                    </div>

                    <div class="form-group">
                        <label for="">Nama:</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <label for="">Jenis Kelamin:</label>
                    <div class="form-check">                        
                        <input type="radio" id="laki" name="gender" class="form-check-input" value="Laki-laki" required>
                        <label for="laki">Laki-laki</label>
                    </div>
                    <div class="form-check">                        
                        <input type="radio" id="perempuan" name="gender" class="form-check-input" value="Perempuan" required>
                        <label for="perempuan">Perempuan</label>
                    </div>

                    <div class="form-group">
                        <label for="">Tanggal lahir:</label>
                        <input type="date" name="tanggalLahir" class="form-control" required>
                        <span class="small">Format tanggal bulan/tanggal/tahun</span>
                    </div>

                    <div class="form-group">
                        <label for="">Alamat:</label>
                        <textarea name="alamat" id="" cols="30" rows="3" class="form-control"></textarea required>
                    </div>

                    <label for="">Gambar</label><br>
                    <input type="file" name="gambar" class="">

                    <button type="submit" name="submit" class="btn btn-primary mt-5" style="width: 100%;">Tambah+</button>

                    </form>
                </div>
                </div>
            </div>      
        </div>

          </div>
      </div>

   </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jquery.easing.1.3.js"></script>
    <script src="../bootstrap/js/script.js"></script>
    
</body>
</html>