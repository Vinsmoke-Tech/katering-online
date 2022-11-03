<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$email=$_POST["email"];
$password=$_POST["password"];
$level=$_POST["level"];



//Query input menginput data kedalam tabel anggota
$query = mysqli_query ($koneksi,"insert into login (email,password,level) 
values ('$email','$password','$level')");


header("location:../akun.php?pesan=berhasil");    


?>

