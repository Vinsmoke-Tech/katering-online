<?php
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$kd_pos = $_POST['kd_pos']; 
include '../controler/koneksi.php';

// jika act (ada) maka menjalankan (query) hapus data;
if(@$_GET['act'] == 'hapus'){
	$id_user = $_GET['id_user'];

	$query = mysqli_query($koneksi, "
		DELETE FROM user 
		WHERE id_user = '$id_user'
		");
}

// jika id anggota terbaca (dikirim melalui form) maka menjalakan (query) update data;
elseif(@$id_user){
	$query = mysqli_query($koneksi, "
		UPDATE user SET 
		nama 	= '$nama',
		alamat 	= '$alamat',
		nohp 	= '$nohp',
		kd_pos 	= '$kd_pos'
		WHERE id_user = '$id_user'
		") or die(mysqli_error($koneksi));
}
// (query) tambah data;
else{
	$query = mysqli_query($koneksi, "
		INSERT INTO user (nama, alamat, nohp, kd_pos) 
		VALUES ('$nama', '$alamat', '$nohp', '$kd_pos')
		") or die(mysqli_error($koneksi));
}

if($query)
	header('Location: profile.php');
?>