<?php 

require '../functions.php';

$keyword = $_GET['keyword'];
$query = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%' OR induk LIKE '%$keyword%' OR alamat LIKE '%$keyword%' ORDER BY nama ASC ";
$siswa = query($query);

?>


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