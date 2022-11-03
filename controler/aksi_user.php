<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$nohp=$_POST["nohp"];
$kd_pos=$_POST["kd_pos"];




//Query input menginput data kedalam tabel anggota
$query = mysqli_query ($koneksi,"insert into user (nama,alamat,nohp,kd_pos) 
values ('$nama','$alamat','$nohp','$kd_pos')");

header("location:../login.php?pesan=berhasil");    



?>
