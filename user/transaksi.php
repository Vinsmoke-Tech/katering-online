<?php 
// koneksi database


// menangkap data yang di kirim dari form
include '../controler/koneksi.php';
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$tanggal_ambil = $_POST['tanggal_ambil'];
$qty  = $_POST['qty'];
$nama_pak = $_POST['nama_pak'];
$harga_pak = $_POST['harga_pak'];
$tharga = $_POST['tharga'];



// menginput data ke database

$query = mysqli_query ($koneksi,"insert into transaksi (nama_pelanggan,alamat,tanggal_ambil,qty,nama_pak,harga_pak,tharga) 
values ('$nama_pelanggan','$alamat','$tanggal_ambil ','$qty','$nama_pak','$harga_pak','$tharga')");
header('location:cetak.php?&nama_pelanggan='.$nama_pelanggan.'&alamat='.$alamat.'&tanggal_ambil='.$tanggal_ambil.'&qty='.$qty.'&nama_pak='.$nama_pak.'&harga_pak='.$harga_pak.'&tharga='.$tharga.'');
 
 


?>