<?php
$id_login = $_POST['id_login'];
$email = $_POST['email'];
$password = $_POST['password'];

include '../controler/koneksi.php';

// jika act (ada) maka menjalankan (query) hapus data;
if(@$_GET['act'] == 'hapus'){
	$id_login = $_GET['id_login'];

	$query = mysqli_query($koneksi, "
		DELETE FROM login 
		WHERE id_login = '$id_login'
		");
}

// jika id anggota terbaca (dikirim melalui form) maka menjalakan (query) update data;
elseif(@$id_login){
	$query = mysqli_query($koneksi, "
		UPDATE login SET 
       
		email 	= '$email',
		password 	= '$password',
		WHERE id_login = '$id_login'
		") or die(mysqli_error($koneksi));
}
// (query) tambah data;
else{
	$query = mysqli_query($koneksi, "
		INSERT INTO login (email, password) 
		VALUES ('$email', '$password')
		") or die(mysqli_error($koneksi));
}

if($query)
	header('Location: akun.php');
?>