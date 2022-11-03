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
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-md-2"></div>
           
            <div class="col-md-2"></div>
        </div>
       
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <h5>Nama Pelanggan</h5>
            </div>
            <div class="col-md-5">
                <span><?=@$_GET['nama_pelanggan']?> </span>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <h5>Alamat</h5>
            </div>
            <div class="col-md-5">
                <span> <?=@$_GET['alamat']?></span>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <h5>Keterangan</h5>
            </div>
            <div class="col-md-5">
                <span><?=@$_GET['tanggal_ambil']?></span>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <h5>Keterangan</h5>
            </div>
            <div class="col-md-5">
                <span><?=@$_GET['qty']?></span>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <h5>Nama Paket</h5>
            </div>
            <div class="col-md-5">
                <span><?=@$_GET['nama_pak']?><?=@$_GET['nama_men']?></span>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <h5>Harga Paket</h5>
            </div>
            <div class="col-md-5">
                <span><?=@$_GET['harga_pak']?> <?=@$_GET['harga_men']?> </span>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <h5>Keterangan</h5>
            </div>
            <div class="col-md-5">
                <span><?=@$_GET['tharga']?></span>
            </div>
            <div class="col-md-2"></div>
        </div>
       
        <div class="row mb-3">
            <div class="col-md-2"></div>
            
            <div class="col-md-2"></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-right">
                <div class="clearfix">
					 <a class="btn btn-danger bi bi-backspace float-left" href="bukti.php">&nbsp; Upload Bukti Pembayaran</a>
					<p class=" btn btn-warning bi bi-printer float-right" style="cursor:pointer;" onclick="print()"> &nbsp; Cetak bukti pembayaran!</p>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        </div>

        <script>
            function cetak(){
                window.print();
            }
        </script>
