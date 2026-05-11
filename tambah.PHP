<?php
include 'koneksi.php';

$Nama = $_POST['nama_mahasiswa'];
$Prodi = $_POST['prodi_mahasiswa'];

mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('', '$Nama', '$Prodi')");

header("location:index.php");
?>

