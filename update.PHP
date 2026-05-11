<?php
include 'koneksi.php';

$id = $_POST['id'];
$Nama = $_POST['nama_mahasiswa'];
$Prodi = $_POST['prodi_mahasiwa'];

mysqli_query($koneksi, "UPDATE mahasiswa SET nama_mahasiswa='$Nama', prodi_mahasiwa='$Prodi' WHERE id='$id'");

header("location:index.php");
?>

