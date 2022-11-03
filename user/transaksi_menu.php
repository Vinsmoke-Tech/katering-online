<?php


$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$tanggal_ambil = $_POST['tanggal_ambil'];
$qty  = $_POST['qty'];
$nama_men = $_POST['nama_men'];
$harga_men = $_POST['harga_men'];
$tharga = $_POST['tharga'];



// menginput data ke database
	include '../controler/koneksi.php';
$query = mysqli_query ($koneksi,"insert into transaksi_menu (nama_pelanggan,alamat,tanggal_ambil,qty,nama_men,harga_men,tharga) 
values ('$nama_pelanggan','$alamat','$tanggal_ambil ','$qty','$nama_men','$harga_men','$tharga')");
header('location:cetak.php?&nama_pelanggan='.$nama_pelanggan.'&alamat='.$alamat.'&tanggal_ambil='.$tanggal_ambil.'&qty='.$qty.'&nama_men='.$nama_men.'&harga_men='.$harga_men.'&tharga='.$tharga.'');

 
?>