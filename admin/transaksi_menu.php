<?php include 'header.php'; ?>





<div class="col-md-12">
	
	<a style="margin-bottom:10px" href="lap_barang.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
</div>
<form action="cari_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari barang di sini .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<br/>

<table class="table table-hover">
	<tr>
		<th class="col-md-1 ">No</th>
		<th class="col-md-1">Nama Pelanggan</th>
        <th class="col-md-1">Alamat</th>
        <th class="col-md-1">Tanggal Ambil</th>
        <th class="col-md-1">QTY</th>
		<th class="col-md-1">Nama Paket</th>
		<th class="col-md-1">Harga</th>
        <th class="col-md-1">Total</th>
		<!-- <th class="col-md-1">Sisa</th>		 -->
		<th class="col-md-1">Opsi</th>
	</tr>

    <?php 
		include '../controler/koneksi.php';
		$no = '1';
		$data = mysqli_query($koneksi,"select * from transaksi_menu");
		while($b = mysqli_fetch_array($data)){
			?>
		<tr>
		<td><?php echo $no++ ?></td>
        <td><?php echo $b['nama_pelanggan'] ?></td>
			<td><?php echo $b['alamat'] ?></td>
            <td><?php echo $b['tanggal_ambil'] ?></td>
            <td><?php echo $b['qty'] ?></td>
            <td><?php echo $b['nama_men'] ?></td>
			<td>Rp.<?php echo $b['harga_men'] ?>,-</td>
            <td>Rp.<?php echo $b['tharga'] ?>,-</td>
			
			<td>
			<button class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $b['id_tmen']; ?>">Edit</button>
            
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus.php?id=<?php echo $b['id_tmen']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
	

<!-- Modal Edit paket-->

<div class="modal fade" id="myModal<?php echo $b['id_tmen']; ?>">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="act_paket.php" method="get">
                        <?php
                        $id_tmen = $b['id_tmen']; 
                        $query = mysqli_query($koneksi, "SELECT * FROM transaksi_menu WHERE id_tmen='$id_tmen'");
                        while ($row = mysqli_fetch_array($query)) {  
                        ?>
                        <input type="hidden" name="id_tmen" value="<?php echo $row['id_tmen']; ?>">
                        <div class="form-group">
                          <label>Nama Pelanggan</label>
                          <input type="text" name="alamat" class="form-control" value="<?php echo $row['nama_pelanggan']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Paket</label>
                          <input type="text" name="nama_men" class="form-control" value="<?php echo $row['nama_men']; ?>">      
                        </div>
                       
                        <div class="form-group">
                          <label>Harga</label>
                          <input type="text" name="harga_men" class="form-control" value="<?php echo $row['harga_men']; ?>">      
                        </div>
                       
                        <div class="modal-footer">  
                          <button type="submit" class="btn btn-success">Update</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        <?php 
                        }
                        ?>        
                      </form>
					  
					</div>
				</div>
            </div>
		</div>
		
	</div>
</div>
</div>
<?php
}
?>
  	
</div>




<?php 
include 'footer.php';
?>