<?php 
session_start();

if( !isset($_SESSION["login"]) ){
  header("Location: ../login.php");
  exit;
}

require "functions.php";

$jumlahDataHal = 5;
$jumlahData = count(query("SELECT * FROM pendaftar"));
$jumlahHal = ceil($jumlahData / $jumlahDataHal) ;
$halAktif = isset( $_GET["halaman"] ) ? $_GET["halaman"] : 1;
// menentukan index awal
$dataAwal = ( $jumlahDataHal * $halAktif ) - $jumlahDataHal;

$pendaftar = query("SELECT * FROM pendaftar ORDER BY nama_siswa ASC LIMIT $dataAwal, $jumlahDataHal")


// echo date('d F Y', strtotime('1994-02-15'));

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css" />
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">

    <title>Admin manajemen</title>
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
      <div class="container">
        
        <h1 class="text-center mb-5">Selamat datang admin</h1>
        <h3><i class="fas fa-clipboard-list  pr-3"></i>Pendaftar PPDB</h3>
        <hr>

        <div class="wrap">
          <div class="search">
              <input type="text" class="searchTerm keyword" name="keyword" placeholder="Cari data...">
              <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
          </div>
        </div>

          <div class="tabel-ppdb table-responsive">
            <div class="tabel">

                <table class="table table-bordered table-striped">
                    <tr>
                    <thead class="thead-dark">
                      <th class="text-center">No</th>
                      <th>Nama</th>
                      <th>Jenis kelamin</th>
                      <th>Tempat lahir</th>
                      <th>Tanggal lahir</th>
                      <th>Agama</th>
                      <th>Kewarganegaraan</th>
                      <th>Anak ke-</th>
                      <th>Alamat</th>
                    </thead>
                    </tr>
                    
                    <?php $i = 1 ?>
                    <?php foreach( $pendaftar as $row ): ?>
                      <tr>
                        <td><?= $i + $dataAwal ?></td>
                        <td><?= $row["nama_siswa"] ?></td>
                        <td><?= $row["jenis_kelamin"] ?></td>
                        <td><?= $row["tempat_lahir"] ?></td>
                        <td><?= $row["tanggal_lahir"] ?></td>
                        <td><?= $row["agama"] ?></td>
                        <td><?= $row["kewarganegaraan"] ?></td>
                        <td><?= $row["anak_ke"] ?></td>
                        <td><?= $row["alamat"] ?></td>
                      </tr>
                    <?php $i++ ?>
                    <?php endforeach; ?>

                </table>
              </div>
                
                <!-- navigasi pagination -->
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">

                  <?php if( $halAktif > 1 ): ?>
                    <li class="page-item">
                      <a class="page-link" href="?halaman=<?= $halAktif - 1 ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                  <?php endif; ?>
                  
                  <?php for( $i = 1; $i <= $jumlahHal; $i++ ): ?>
                    <?php if( $halAktif == $i ): ?>
                      <li class="page-item active"><a class="page-link" href="?halaman=<?= $i ?>"><?= $i ?></a></li>
                    <?php else: ?>
                      <li class="page-item"><a class="page-link" href="?halaman=<?= $i ?>"><?= $i ?></a></li>
                    <?php endif; ?>


                  <?php endfor; ?>

                    <?php if( $halAktif < $jumlahHal ): ?>
                      <li class="page-item">
                        <a class="page-link" href="?halaman=<?= $halAktif + 1 ?>" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    <?php endif; ?>
                      


                  </ul>
                </nav>

                <!-- akhir navigasi pagination -->

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
    <script src="js/script2.js"></script>
  </body>
</html>



