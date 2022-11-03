<?php

include 'view/header.php';


?>
<section class="order" id="order">

    <h3 class="sub-heading"> status  </h3>
    <h1 class="heading"> pembayaran</h1>
  
	<?php
include "controler/koneksi.php";
$kode = $_POST['kode'];

$sqlQuery = mysqli_query($koneksi, "SELECT * FROM bukti WHERE  kode='$kode'");

$result = mysqli_fetch_array($sqlQuery);
?>
<table class="table">
  <thead >
    <tr class="bg-info">
      <th scope="col">no</th>
      <th scope="col">Kode</th>
      <th scope="col">Status</th>
      <th scope="col-2">Opsi</th>
    </tr>
  </thead class="bg-primary">
  <tbody>
    <tr>
      <th scope="row">1</th>
	  <td><?php echo $result['kode'] ?></td>
      <td><?php echo $result['status'] ?></td>
	  <td><?php echo $result['aksi'] ?></td>
    </tr>
   
  </tbody>
</table>
	<a  class ="btn btn-danger" href="index.php">Keluar</a><br>
	<div class="card mt-3">
		<div class="card-header">
			<p>catatan</p>
		</div>
		<div class="card-body">
			
			<p>jika belum ada data pembayaran silahkan hubungi admin 082827287388. dengan menunjukan bukti pembayaran dan kode pembayaran</p>
		</div>
	</div>
			


 
</section>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>