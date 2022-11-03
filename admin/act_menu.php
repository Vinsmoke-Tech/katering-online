<?php
$id_menu = $_POST['id_menu'];
$nama_men = $_POST['nama_men'];
$ket = $_POST['ket'];
$harga_men = $_POST['harga_men'];
$foto_men = $_POST['foto_men']; 
include '../controler/koneksi.php';

// jika act (ada) maka menjalankan (query) hapus data;
if(@$_GET['act'] == 'hapus'){
	$id_menu = $_GET['id_menu'];

	$query = mysqli_query($koneksi, "
		DELETE FROM menu 
		WHERE id_menu = '$id_menu'
		");
}

// jika id anggota terbaca (dikirim melalui form) maka menjalakan (query) update data;
elseif(@$id_menu){
	$query = mysqli_query($koneksi, "
		UPDATE menu SET 
		nama_men 	= '$nama_men',
		ket 	= '$ket',
		harga_men 	= '$harga_men',
		foto_men 	= '$foto_men'
		WHERE id_menu = '$id_menu'
		") or die(mysqli_error($koneksi));
}
// (query) tambah data;
else{
	$query = mysqli_query($koneksi, "
		INSERT INTO menu (nama_men, ket, harga_men, foto_men) 
		VALUES ('$nama_men', '$ket', '$harga_men', '$foto_men')
		") or die(mysqli_error($koneksi));
}

if($query)
	header('Location: menu.php');
?>