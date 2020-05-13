<?php 

$koneksi = mysqli_connect('localhost', 'root','' , 'tk_telkom');

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function daftar($data){
    global $koneksi;
    $nama = htmlspecialchars($data["nama_siswa"]);
    $kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $tempat = htmlspecialchars($data["tempat_lahir"]);
    $tanggal = htmlspecialchars($data["tanggal_lahir"]);
    $agama = htmlspecialchars($data["agama"]);
    $warga = htmlspecialchars($data["kewarganegaraan"]);
    $anak = htmlspecialchars($data["anak_ke"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "INSERT INTO pendaftar VALUES('', '$nama', '$kelamin', '$tempat', '$tanggal', '$agama', '$warga', '$anak', '$alamat')";
     mysqli_query($koneksi, $query);

    //  untuk cek apakah data berhasil dikirim atau tidak
    return mysqli_affected_rows($koneksi);
}

function tambah($data){
    global $koneksi;
    $induk = htmlspecialchars($data["induk"]);
    $nama = htmlspecialchars($data["nama"]);
    $gender = htmlspecialchars($data["gender"]);
    $tanggalLahir = htmlspecialchars($data["tanggalLahir"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $gambar = upload();
    if( !$gambar ){
        return false;
    }

    $query = "INSERT INTO siswa VALUES('', '$induk', '$nama', '$gender', '$tanggalLahir', '$alamat', '$gambar')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $size = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah gambar sudah di upload
    if( $error === 4 ){
        echo '<script>alert("Gambar belum diupload")</script>';
        return false;
    }
    
    // cek ukuran gambar
    if( $size > 5000000 ){
        echo '<script>alert("Maksimal ukuran gambar 5Mb")</script>';
        return false;
    }

    // cek ekstensi file
    $ekstensiValid = ['jpg', 'png', 'jpeg'];
    $ekstensi = pathinfo($namaFile, PATHINFO_EXTENSION);
    if( !in_array( $ekstensi, $ekstensiValid) ){
        echo '<script>alert("Ekstensi file tidak sesuai")</script>';
        return false;
    }
    
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensi;
    
    move_uploaded_file($tmpName, 'img/'. $namaFileBaru);
    return $namaFileBaru;

}

// function untuk menghapus data 
function hapus($id){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM siswa where id = $id");
    return mysqli_affected_rows($koneksi);
}

// function ubah data
function ubah($data){
    global $koneksi;
    $id = $data["id"];
    $induk = htmlspecialchars($data["induk"]);
    $nama = htmlspecialchars($data["nama"]);
    $gender = htmlspecialchars($data["gender"]);
    $tanggalLahir = htmlspecialchars($data["tanggalLahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    
    if ( $_FILES['gambar']['error'] === 4 ){
        $gambar = $gambarLama;
    }else{
        $gambar = upload();
    }

    $query = "UPDATE siswa SET
            induk = '$induk',
            nama = '$nama',
            gender = '$gender',
            tanggalLahir = '$tanggalLahir',
            alamat = '$alamat',
            gambar = '$gambar'
            WHERE id = $id
            ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

// function untuk cari data
function cari($keyword){
    $query = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%' OR induk LIKE '%$keyword%' OR alamat LIKE '%$keyword%' ORDER BY nama ASC ";

    return query($query);
}

function register($data){
    global $koneksi;
    $email = $data["email"];
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
    $level = "siswa";

    // cek username tidak boleh kosong 
    if( empty(trim($username)) ){
        echo '<script>
                alert("Username tidak boleh kosong")
            </script>';
        return false;
    }

    // cek apakah username sudah ada
    $result = mysqli_query($koneksi, "SELECT username FROM login WHERE username = '$username'");
    if( mysqli_fetch_assoc($result) ){
        echo '<script>
                alert("Username telah digunakan")
            </script>';
        return false;
    }

    // cek apakah konfirmasi password benar
    if( $password !== $password2 ){
        echo '<script>
                alert("Konfirmasi password salah")
            </script>';
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_query($koneksi, "INSERT INTO login VALUES('', '$email', '$username', '$password', '$level') ");
    return mysqli_affected_rows($koneksi);

}

function bayar($data){
    global $koneksi;
    $nama = htmlspecialchars($data['nama_siswa']);
    $induk = htmlspecialchars($data['induk']);
    $jenisBayar = htmlspecialchars($data['jenis_pembayaran']);
    $foto = upload();
    if( !$foto ){
        return false;
    }

    mysqli_query($koneksi, "INSERT INTO pembayaran VALUES('', '$nama', '$induk', '$jenisBayar', '$foto')");
    return mysqli_affected_rows($koneksi);
}

?>