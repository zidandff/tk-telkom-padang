<?php 
session_start();

if( !isset($_SESSION["login"]) ){
  header("Location: ../login.php");
  exit;
}

require 'functions.php';

$id = $_GET["id"];
if ( hapus($id) > 0) {
    header('Location: siswa.php');
}else {
    echo "data gagal ditambahkan ";
}

?>