<?php 
// koneksi database
include '../controler/koneksi.php';
include 'SimpleImage.php';
 
// menangkap data yang di kirim dari form

$nama_pak = $_POST['nama_pak'];
$keterangan = $_POST['keterangan'];
$harga_pak = $_POST['harga_pak'];
$foto_pak = $_POST['foto_pak'];


// menginput data ke database
	
$query = mysqli_query ($koneksi,"insert into paket (nama_pak,keterangan,harga_pak,foto_pak) 
values ('$nama_pak','$keterangan','$harga_pak','$foto_pak')");

             header("location:paket.php");
      
// mengalihkan halaman kembali ke index.php
        
               
              
		

	
	


 


 
?>