<?php
$koneksi = mysqli_connect("localhost", "root", "", "crud_habibi");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

