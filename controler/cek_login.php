<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login

$email = $_POST['email'];
$password = $_POST['password'];



// menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($koneksi,"select * from login where email='$email' and password='$password'");
$cek = mysqli_num_rows($login);
// echo var_dump($login['current_field']);
// die;
// menghitung jumlah data yang ditemukan

// cek apakah email dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="user"){

		// buat session login dan email
		session_start();
		 
		$_SESSION['id_user'] = $data['id_login'];
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "user";
		// alihkan ke halaman dashboard admin
		header("location:../index.php?email=.$email.");


	// cek jika user login sebagai pengurus
	}else if($data['level']=="admin"){
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard pengurus
		header("location:../admin/paket.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:../login.php?pesan=gagal");
	}
		
}

?>