<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
    <title>tiket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
    
</head>
<style>
html, body {
   margin:0;
   padding:0;
   height:100%;
}

.containers {
 min-height: 100%;

}
</style>
<body>
<?php
	
	include '../controler/koneksi.php';
 
	// mengambil data barang dengan kode paling besar
	$query = mysqli_query($koneksi, "SELECT max(kode) as kodeTerbesar FROM bukti");
	$data = mysqli_fetch_array($query);
	$kodeBarang = $data['kodeTerbesar'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kodeBarang, 3, 3);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "BKT";
	$kodeBarang = $huruf . sprintf("%03s", $urutan);
	?>		
		 
<div class="container">
    
    <div class="row mt-5 p-4">
        <div class="col-6 col-md-4 col-lg-4">
            <label for="">
                <h3>Pemesanan  Katering</h3>
            </label>
    
        </div>
        <div class="col-6 col-md-4 col-lg-6">
            <form action="act_bukti.php" method="post">
            <div class="form-group ">
                    <label for="exampleInputEmail1">kode pembayaran</label>
                    <input type="text" class="form-control"  name="kode" value="<?php echo $kodeBarang ?>" readonly> 
    
                </div>
                <div class="form-group ">
                    <label for="exampleInputEmail1">metode pengambalian</label>
                    <select class="custom-select" name="metode">
                    <option> pilih metode pengembalian</option>
            
                    <option value="ATx">Ambil di tempat</option>
                        <option value="COD">COD</option>
                    
                </select>
                </div>
                <div class="form-group ">
                    <label for="exampleInputEmail1">Upload</label>
                    <input type="file"   name="upload" >

                </div>          
                <div class="form-group ">
    
                    <input type="hidden" class="form-control"  name="status" value="belum lunas"> 
    
                </div>
                <button class="btn btn-success" >Bayar Pesanan</button>
                <button class="btn btn-danger">Cancel</button>
            </form>
            
                
        </div>
    </div>
</div>

		
				
			
			<!-- Bootstrap core JavaScript -->
			
<script src="../js/jquery/jquery.slim.min.js"></script>
    <script src="../js/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/datepicker/css/datepicker.css"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="../js/navbar-scroll.js"></script>
  </body>
</html>
