<?php
$id_bukti = $_POST['id_bukti'];
$kode = $_POST['kode'];

$status = $_POST['status'];
$aksi = $_POST['aksi'];

include '../controler/koneksi.php';

// jika act (ada) maka menjalankan (query) hapus data;
if(@$_GET['act'] == 'hapus'){
	$id_bukti = $_GET['id_bukti'];

	$query = mysqli_query($koneksi, "
		DELETE FROM bukti 
		WHERE id_bukti = '$id_bukti'
		");
}

// jika id anggota terbaca (dikirim melalui form) maka menjalakan (query) update data;
elseif(@$id_bukti){
	$query = mysqli_query($koneksi, "
		UPDATE bukti SET 
		kode 	= '$kode',
		status 	= '$status',
		aksi	= '$aksi'
		WHERE id_bukti = '$id_bukti'
		") or die(mysqli_error($koneksi));
}

if($query)
	header('Location: bukti.php');
?>