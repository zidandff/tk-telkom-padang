<?php 

  require 'halaman_admin/functions.php';

  // cek apakah tombol submit sudah ditekan
  if ( isset($_POST["submit"]) ){

    // cek apakah data terkirim atau tidak
    if( daftar($_POST) > 0 ){
      echo '<script>
            alert("Data berhasil dikirim")
          </script>';
    }else {
      $error = false;
  }

  };

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

    <title>Penerimaan Peserta Didik Baru</title>


  </head>
  <body>

  <div class="popupX">
    <div class="layer"></div>
    <div class="layer"></div>
  </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top ubah" id="navbar">
      <div class="container">
        <a class="navbar-brand page-scroll" href="#home">
          <img src="img/icon/logo2.png" width="130" alt="telkom-school">
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
            <a class="nav-item nav-link active page-scroll" href="#ppdb">PPDB</a>
          </div>
          <a href="login.php"><i class=" fas fa-sign-in-alt pl-2 pr-3" style="color: #e4262c; font-size: 20px;" data-toggle="tooltip" data-placement="top" title="LOGIN"></i></a>
        </div>
     </div>
    </nav>
    <!-- akhir navbar -->

      <!-- alert jika data gagal ditambahkan -->
  <?php if( isset($error) ): ?>
    <div class="alert alert-danger fixed-top" role="alert">
      <strong>Data gagal dikirirm. Mohon coba lagi!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>

  <section id="ppdb">


      <div class="banner-ppdb text-white" id="change-it-now">
        <h2>Penerimaan Perserta Didik Baru</h2>
        <h5>Ayo bergabung dengan TK Telkom Padang sekarang!</h5>
      </div>
      <!-- info panel -->
      <div class="container">
        <div class="info-ppdb row text-white text-center">
          <div class="col-sm">
            <i class="fa-2x fas fa-school"></i>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum dolorem excepturi iusto illo aspernatur mollitia laboriosam!</p>
          </div>
          <div class="col-sm">
            <i class="fa-2x fas fa-award"></i>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae, blanditiis. Commodi, animi id. Nobis impedit maxime exercitationem.</p>
          </div>
          <div class="col-sm">
            <i class="fa-2x fas fa-smile-beam"></i>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet reprehenderit voluptatem, nesciunt eligendi similique at.</p>
          </div>
        </div>
      </div>
          <!-- Akhir info panel -->
      <div class="container-fluid">

        <div class="row justify-content-center form-box">
          

          <div class="col-xl-8 col-md-10 col-sm-12 form-identitas">

            <div class="card">
              <div class="shadow card-body">

                <form action="" method="POST">
                  <!-- nama -->
                 <h1 class="mb-5 text-center">Formulir<br>Pendaftaran</h1>
                 <h4>Identitas calon siswa</h4>
                 <div class="form-group">
                   <label for="">Nama lengkap</label>
                   <input type="text" class="form-control shadow-sm" name="nama_siswa" placeholder="Nama lengkap calon siswa" required>
                 </div>
                 <!-- akhir nama -->
     
                 <!-- jenis kelamin -->
                 <label for="">Jenis kelamin</label>
                 <div class="form-check">
                   <input type="radio" class="form-check-input" name="jenis_kelamin" id="laki" value="laki-laki" required>
                   <label for="laki" class="form-check-label">Laki-laki</label>
                 </div>
                 <div class="form-check">
                   <input type="radio" class="form-check-input" name="jenis_kelamin" id="perempuan" value="perempuan" required>
                   <label for="perempuan" class="form-check-label">Perempuan</label>
                 </div>
                 <!-- Akhir jenis kelamin -->
             <!-- TTL -->
                 <div class="form-group pt-3">
                   <label for="">Tempat, tanggal lahir</label>
                   <div class="row">
                     <div class="col-md">
            
                     <div class="row">
                       <div class="col-3">
                         <label for="" class="inline">Tempat</label>
                       </div>
                       <div class="col">
                         <input type="text" class="form-control shadow-sm" placeholder="Provinsi/kota" name="tempat_lahir" required>
                       </div>
                     </div>        
                     </div>
                     
                     <div class="col-md">
                     <div class="row">
                       <div class="col-3">
                         <label for="">Tanggal</label>
                       </div>
                       <div class="col">
                         <input type="date" class="form-control shadow-sm" name="tanggal_lahir" required>
                         <span class="small">Format tanggal bulan/tanggal/tahun</span>
                       </div>
                     </div>
                   </div>
     
                   </div>
                 </div>
                 <!-- akhir TTL -->
                 <!-- agama -->
                 <div class="form-group">
                   <label for="">Agama</label>
                   <input type="text" class="form-control shadow-sm" placeholder="" name="agama" id="" required>
                 </div>
                 <!-- akhir agama -->
                 <!-- kewarganegraan -->
                 <label for="">kewarganegaraan</label>
                 <div class="form-check">
                   <input type="radio" class="form-check-input" name="kewarganegaraan" id="wni" value="WNI" required>
                   <label for="wni" class="form-check-label">WNI</label>
                 </div>
                 <div class="form-check">
                   <input type="radio" class="form-check-input" name="kewarganegaraan" id="wna" value="WNA" required>
                   <label for="wna" class="form-check-label">WNA</label>
                 </div>
                 <!-- akhir kewarganegraan -->
                 <!-- anak ke -->
                 <div class="form-group pt-2">
                   <label for="">Anak ke-</label>
                   <input type="number" class="form-control shadow-sm" name="anak_ke" id="" required>
                 </div>
                 <!-- akhir anak ke -->
                 <!-- alamat -->
                 <div class="form-group">
                   <label for="">Alamat lengkap</label>
                   <textarea class="form-control shadow-sm" name="alamat" id="" rows="3" required></textarea>
                 </div>
                 <!-- akhir alamat -->

                 
                 <Button type="submit" name="submit" class="btn btn-primary mt-5 shadow-sm" style="width: 100%;">Submit</Button>

             </form>

              </div>
            </div>
            
          </div>          

        </div>

      </div>    

    </section>

     <!-- footer -->

     <footer>
      <div class="container">
        <div class="row">

          <div class="col-md-6 pb-4">
            <div class="sosmed">
              <h4 class="mb-2 pb-2">Sosial Media</h4>
              <a href="http://www.facebook.com" target="_blank"><i class="fa-2x fab fa-facebook-square"></i></a>
              <a href="http://www.instagram.com" target="_blank"><i class="fa-2x fab fa-instagram"></i></a>
              <a href="http://www.twitter.com" target="_blank"><i class="fa-2x fab fa-twitter-square"></i></a>
              <a href="http://www.youtube.com" target="_blank"><i class="fa-2x fab fa-youtube"></i></a>
            </div>

            <div class="kontak font-weight-bold pt-4 pb-4">
              <h4>Kontak kami</h4>
              <span>08126718484</span cla><br>
              <span>(0751) 37770</span>
            </div>
            <h4>Alamat.</h4>
            <p class="font-weight-bold pb-5">Jl. Aurduri Indah Raya Kec. Padang Timur</p>
            <a href="ppdb.php" class=""><h4>PPDB telah dibuka!,<br>klik di sini untung daftar</h4></a>
            <p>Ayooo segera daftarkan si buah hati di TK Telkom Padang!</p>
          </div>

          <div class="col-md">
            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.261793593482!2d100.38216961415583!3d-0.9569938356240711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b97a78507ef9%3A0xc33fefdf98b0d4b1!2sTK%20Telkom%20Schools!5e0!3m2!1sid!2sid!4v1580548398007!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>

        </div>

        <div class="row foto-footer">
          <div class="col-md">
            <img src="img/icon/ypt_logo.png" width="200" alt="">
          </div>
          <div class="col-md pt-4">
            <img src="img/icon/Logo(2).png" width="200" alt="">            
          </div>
        </div>

      </div>

      <div class="container-fluid">
        <div class="row bg-dark justify-content-center pt-3 pt-2">
          <p class="text-white text-center ">Copyright student of SMK Telkom Bandung 2020.</p>
        </div>
      </div>
      
      </footer>

      <!-- akhir footer -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery.easing.1.3.js"></script>
    <script src="bootstrap/js/script.js"></script>
  </body>
</html>
