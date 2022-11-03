<?php 
// koneksi database
include '../controler/koneksi.php';
 
// menangkap data yang di kirim dari form
$id_paket = $_GET['id_paket'];
$nama_pak = $_GET['nama_pak'];
$keterangan = $_GET['keterangan'];
$harga_pak = $_GET['harga_pak'];
$foto_pak = $_GET['foto_pak']; 
// update data ke database
mysqli_query($koneksi, "UPDATE paket SET  nama_pak='$nama_pak', keterangan='$keterangan', harga_pak='$harga_pak',foto_pak='$foto_pak' WHERE id_paket='$id_paket' "); 
 
// mengalihkan halaman kembali ke index.php
header("location:paket.php");
 
?>