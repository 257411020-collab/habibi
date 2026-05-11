<?php
$koneksi = mysqli_connect("localhost", "root", "", "crud_latihan_habib");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

