<?php
$hostname = "localhost";
$database = "katering";
$username = "root";
$password = "";
$koneksi = mysqli_connect($hostname, $username, $password, $database);
mysqli_query($koneksi,"ALTER TABLE menu AUTO_INCREMENT = 1");
// script cek koneksi
if (!$koneksi) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
 
?>