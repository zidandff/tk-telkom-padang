<?php 
session_start();
require 'functions.php';
if( !isset($_SESSION["login"]) ){
  header("Location: ../login.php");
  exit;
}

$pendaftar = query("SELECT * FROM pendaftar");
$siswa = query("SELECT * FROM siswa");
$pembayaran = query('SELECT * FROM pembayaran');


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
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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

        <div id="wrapper">



          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">
      
            <!-- Main Content -->
            <div id="content">
      
              <!-- Begin Page Content -->
              <div class="container-fluid">
      
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>

                <div class="konten-utama">
                  <h1 class="text-center mb-5">Selamat datang admin</h1>
                  <h3><i class="fas fa-tachometer-alt pr-3"></i>Dashboard</h3>
                  <hr>
                </div>
      
                <!-- Content Row -->
                <div class="row">
                        
                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-lg-4 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="data_bayar.php">Konfirmasi pembayaran</a> </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($pembayaran) ?></div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-money-bill-wave-alt fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-lg-4 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="pendaftar.php">Jumlah pendaftar</a></div>
                            <div class="row no-gutters align-items-center">
                              <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                  <?= count($pendaftar); ?>
                                </div>
                              </div>
                          
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <!-- Pending Requests Card Example -->
                  <div class="col-lg-4  mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="siswa.php">Jumlah pendaftar</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                              <?= count($siswa) ?>
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <!-- Content Row -->
      
                <div class="row">
      
                  <!-- Area Chart -->
                  <div class="col-xl-5 ">
                    <!-- Approach -->
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Admin manajemen</h6>
                      </div>
                      <div class="card-body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque odio placeat rem nihil beatae amet laborum accusamus, assumenda, aperiam dignissimos distinctio, esse dolorem animi eveniet a molestias illum! Quae, perferendis.</p>
                        <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, laboriosam.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-7">
                    <object data="../img/data.svg" type="image/svg+xml" class="img-fluid"></object>
                  </div>
      
                  
                </div>
      
                <!-- Content Row -->
                
      
              </div>
              <!-- /.container-fluid -->
      
            </div>
            <!-- End of Main Content -->
      
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
              <div class="container my-auto">
                <div class="copyright text-center my-auto">
                  <span>Copyright &copy; Student of SMK Telkom bandung 2020</span>
                </div>
              </div>
            </footer>
            <!-- End of Footer -->
      
          </div>
          <!-- End of Content Wrapper -->
      
        </div>
        <!-- End of Page Wrapper -->
      
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>
      
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="../bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jquery.easing.1.3.js"></script>
    <script src="../bootstrap/js/script.js"></script>
  </body>
</html>