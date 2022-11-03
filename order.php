<?php

include 'view/header.php';
session_start();

?>
<section class="order" id="order">

    <h3 class="sub-heading"> status  </h3>
    <h1 class="heading"> pembayaran</h1>
  
								<p style="text-align: center;font-weight: bold;">Cek pembelian</p>
								<form action="cek.php" method="POST">
									<input type="text" name="kode" value="" class="form-control" placeholder="Masukkan kode bayar">
									<button class="btn btn-sm btn-success mt-3">klik</button>
								</form>
							


 
</section>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>