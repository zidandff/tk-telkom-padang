<?php 
session_start();

if( !isset($_SESSION["login"]) ){
  header("Location: ../login.php");
  exit;
}

require 'functions.php';

// $jumlahDataHal = 3;
// $jumlahSiswa = count(query("SELECT * FROM siswa"));
// $jumlahHal = ceil($jumlahSiswa / $jumlahDataHal);
// $halAktif = isset($_GET["halaman"]) ? $_GET["halaman"] : 1;

// $awalData = ($halAktif * $jumlahDataHal) - $jumlahDataHal;


$siswa = query("SELECT * FROM siswa ORDER BY nama ASC");

if( isset($_POST["cari"]) ){
  $siswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css" />
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">

    <title>Daftar siswa</title>
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

      <div class="container-fluid">

        <!-- konten utama -->
        <!-- navbar -->

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

      <div class="konten-utama">
          <div class="container table-responsive">
            <h1 class="text-center mb-5">Selamat datang admin</h1>
            <h3><i class="fas fa-child pr-3"></i>Daftar siswa</h3>
            <hr>
            <div class="row ">
              <div class="col-md-6">
                <form action="" method="POST">
                  <div class="wrap siswa">
                    <div class="search">
                        <input type="text" class="searchTerm keyword" name="keyword" placeholder="Cari siswa...">
                        <button type="submit" name="cari" class="searchButton">
                          <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-6">
                <a href="tambah-siswa.php" class="btn btn-success tambah">Tambah data siswa <i class="fas fa-plus"></i></a>
              </div>
            </div>

              <div class="tabel">
              <table class="table table-striped ">

                    <tr>
                      <thead class="thead-dark text-center ">
                          <th>No.</th>
                          <th>Foto</th>
                          <th>No. Induk</th>
                          <th>Nama Siswa</th>
                          <th>Jenis kelamin</th>
                          <th>Tanggal lahir</th>
                          <th>Alamat</th>
                          <th>Edit</th>
                        </thead>
                      </tr>

                  <?php $i = 1 ?>
                  <?php foreach( $siswa as $row ):?>

                    <tr class="text-center">                      
                        <td><?= $i ?></td>
                        <td><img src="img/<?= $row["gambar"] ?>" alt="" width="150px"></td>
                        <td><?= $row["induk"] ?></td>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $row["gender"] ?></td>
                        <td><?= $row["tanggalLahir"] ?></td>
                        <td><?= $row["alamat"] ?></td>
                        <td class="text-center">
                          <a href="ubah.php?id=<?= $row["id"] ?>"><i class="fas fa-edit bg-success p-2 text-white rounded"></i></a>
                          <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('data akan dihapus, anda yakin?')"><i class="fas fa-trash-alt bg-danger p-2 rounded text-white"></i></a>
                        </td>                      
                    </tr>

                  <?php $i++ ?>
                  <?php endforeach; ?>

              </table>
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
    <script src="js/script.js"></script>
</body>
</html>