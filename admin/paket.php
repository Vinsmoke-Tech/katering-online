<?php include 'header.php'; ?>

<h3> Data Barang</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class='glyphicon glyphicon-plus'></span> Tambah Barang</button>
<br/>
<br/>



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
	<th class="col-md-1">No</th>
		<th class="col-md-3">Paket</th>
		<th class="col-md-3">Keterangan</th>
        <th class="col-md-1">Harga Jual</th>
		<th class="col-md-1">Gambar</th>
		<!-- <th class="col-md-1">Sisa</th>		 -->
		<th class="col-md-3">Opsi</th>
	</tr>

    <?php 
		include '../controler/koneksi.php';
		$no = '1';
		mysqli_query($koneksi,"ALTER TABLE paket AUTO_INCREMENT = 1");
		$data = mysqli_query($koneksi,"select * from paket");
		while($b = mysqli_fetch_array($data)){
			?>
		<tr>
		<td><?php echo $b['id_paket'] ?></td>
            <td><?php echo $b['nama_pak'] ?></td>
			<td><?php echo $b['keterangan'] ?></td>
			<td>Rp.<?php echo $b['harga_pak'] ?>,-</td>
			<td><img  src="images/<?php echo $b['foto_pak'] ?>" width="35" height="40"></td>
			<td>
			<button class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $b['id_paket']; ?>">Edit</button>

				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus.php?id=<?php echo $b['id_paket']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
	

<!-- Modal Edit paket-->

<div class="modal fade" id="myModal<?php echo $b['id_paket']; ?>">
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
                        $id_paket = $b['id_paket']; 
                        $query = mysqli_query($koneksi, "SELECT * FROM paket WHERE id_paket='$id_paket'");
                        while ($row = mysqli_fetch_array($query)) {  
                        ?>
                        <input type="hidden" name="id_paket" value="<?php echo $row['id_paket']; ?>">
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="nama_pak" class="form-control" value="<?php echo $row['nama_pak']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>keterangan</label>
                          <input type="text" name="keterangan" class="form-control" value="<?php echo $row['keterangan']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Paket</label>
                          <input type="text" name="harga_pak" class="form-control" value="<?php echo $row['harga_pak']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Paket</label>
                          <img src="images/<?php echo $row['foto_pak']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          					<input type="file" name="foto_pak" />
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

<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form action="input_paket.php" method="post">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Barang Baru</h4>
			</div>
			<div class="modal-body">
				
				<div class="form-group">
					<label>Nama Paket</label>
					<input name="nama_pak" type="text" class="form-control" placeholder="Jenis Barang ..">
				</div>
				<div class="form-group">
					<label>Keterangan</label>
					<input name="keterangan" type="text" class="form-control" placeholder="Stok">
				</div>	
				<div class="form-group">
					<label>Harga Paket</label>
					<input name="harga_pak" type="text" class="form-control" placeholder="Harga ..">
				</div>
				<div class="form-group">
					<label>Gambar</label>
					<input name="foto_pak" type="file" class="form-control">
				</div>
																				

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>


<?php 
include 'footer.php';
?>