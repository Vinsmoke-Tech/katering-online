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
		$data = mysqli_query($koneksi,"select * from menu");
		while($b = mysqli_fetch_array($data)){
			?>
		<tr>
		<td><?php echo $no++ ?></td>
            <td><?php echo $b['nama_men'] ?></td>
			<td><?php echo $b['ket'] ?></td>
			<td>Rp.<?php echo $b['harga_men'] ?>,-</td>
			<td><img  src="images/<?php echo $b['foto_men'] ?>" width="35" height="40"></td>
			<td>
			<button class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $b['id_menu']; ?>">Edit</button>
			<a href="act_menu.php?id_menu=<?php echo $b['id_menu']?>&act=hapus" class="btn btn-danger">Delete</a>
		<!-- <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ href=data-anggota-act.php?id_anggota=<$val['id_anggota']?>&act=hapus }" class="btn btn-danger">Delete</a>-->
				
			</td>
		</tr>		
	

<!-- Modal Edit paket-->

<div class="modal fade" id="myModal<?php echo $b['id_menu']; ?>">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="act_menu.php" method="post">
                        <?php
                        $id_menu = $b['id_menu']; 
                        $query = mysqli_query($koneksi, "SELECT * FROM menu WHERE id_menu='$id_menu'");
                        while ($row = mysqli_fetch_array($query)) {  
                        ?>
                        <input type="hidden" name="id_menu" value="<?php echo $row['id_menu']; ?>">
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="nama_men" class="form-control" value="<?php echo $row['nama_men']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>ket</label>
                          <input type="text" name="ket" class="form-control" value="<?php echo $row['ket']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Paket</label>
                          <input type="text" name="harga_men" class="form-control" value="<?php echo $row['harga_men']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Paket</label>
                          <img src="images/<?php echo $row['foto_men']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          					<input type="file" name="foto_men" />
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
		<form action="act_menu.php" method="post">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Barang Baru</h4>
			</div>
			<div class="modal-body">
				
				<div class="form-group">
					<label>Nama Paket</label>
					<input name="nama_men" type="text" class="form-control" placeholder="Jenis Barang ..">
				</div>
				<div class="form-group">
					<label>ket</label>
					<input name="ket" type="text" class="form-control" placeholder="Stok">
				</div>	
				<div class="form-group">
					<label>Harga Paket</label>
					<input name="harga_men" type="text" class="form-control" placeholder="Harga ..">
				</div>
				<div class="form-group">
					<label>Gambar</label>
					<input name="foto_men" type="file" class="form-control">
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