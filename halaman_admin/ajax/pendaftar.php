<?php 

require '../functions.php';

$keyword = $_GET['keyword'];
$query = "SELECT * FROM pendaftar WHERE nama_siswa LIKE '%$keyword%' ORDER BY nama_siswa ASC";
$pendaftar = query($query);


?>

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
            <td><?= $i ?></td>
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