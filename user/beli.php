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
session_start();
include "../controler/koneksi.php";	

$id_paket = $_GET['id_paket']; 
//echo var_dump($id_paket);die;
$sql= mysqli_query($koneksi, "select * from paket where id_paket='$id_paket'");
$result = mysqli_fetch_array($sql);
?>
	<?php   

include "../controler/koneksi.php";	


//echo var_dump($id_menu);die;
$sql= mysqli_query($koneksi, "select * from user where id_user='$_SESSION[id_user]'");
$b = mysqli_fetch_array($sql);
?>
			
		 
<div class="container">
    
    <div class="row mt-5 p-4">
        <div class="col-6 col-md-4 col-lg-4">
            <label for="">
                <h3>Pemesanan  Katering</h3>
            </label>
    
        </div>
        <div class="col-6 col-md-4 col-lg-6">
            <form action="transaksi.php" method="post">
        
                <div class="form-group ">
                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pelanggan"  value="<?php echo $b['nama'];?>">
    
                </div>
                <div class="form-group">
                    <label for="exampleInputalamat">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputalamat" name="alamat"  value="<?php echo $b['alamat'];?>">
                </div>
				<div class="form-group">
                    <label for="exampleInputalamat">Tanggal Ambil</label>
                    <input type="text" class="form-control" id="shootdate" name="tanggal_ambil">
                </div>
				<div class="form-group">
                    <label for="exampleInputalamat">qty</label>
                    <input type="number" min ="20" value="0"  class="form-control" id="qty" name="qty"  onkeyup="total()" placeholder="minimal pesan 20pcs">
                </div>
                <div class="form-group ">
                    <label for="exampleInputEmail1">Nama paket</label>
                    <input type="text" class="form-control" id="namapak" name="nama_pak"
                        value="<?=@$result['nama_pak'] ?>" readonly>
    
                </div>
                
              
    
                <div class="form-group">
                    <label for="exampleInputalamat">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga_pak"
                        value="<?=@$result['harga_pak'] ?>" onchange="total()" readonly>
                </div>

				<div class="form-group">
                    <label for="exampleInputalamat">Total Harga</label>
                    <input type="number" class="form-control" id="grand_harga" readonly name="tharga"
                        value= "0" >
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
    <script>
      function total(){
        let dewasa = document.getElementById('qty').value;
            let harga_total = document.getElementById('harga').value;  
			let namapel = document.getElementById('namapak').value;
            
           
 
            let grand_total = dewasa * harga_total ;

            document.getElementById('grand_harga').value = grand_total;
            console.log(grand_total);
      }
    </script>
    	   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	
            <script type="text/javascript">
      $( function() {
	   			$( "#shootdate" ).datepicker({
	   				minDate: 3,
                
	   			});
	  		});
    </script>
    <script src="../js/navbar-scroll.js"></script>
  </body>
</html>
