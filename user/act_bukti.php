<?php 
// https://www.malasngoding.com
// menghubungkan koneksi database
include '../controler/koneksi.php';
 
// menangkap data dari form
$kode = $_POST['kode'];
$metode = $_POST['metode'];
$upload = $_POST['upload'];
$status= $_POST['status'];
$aksi= $_POST['aksi'];

 
// menginput data ke table barang
 
$query =mysqli_query($koneksi,"INSERT INTO bukti (kode,metode,upload,status,aksi) VALUES ('$kode','$metode','$upload', '$status','$aksi')");
 
// mengalihkan halaman kembali ke index.php
header("location:../order.php");