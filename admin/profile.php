<?php include 'header.php'; ?>

<h3> Data </h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class='glyphicon glyphicon-plus'></span> Tambah</button>
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
		<th class="col-md-3">Nama User</th>
		<th class="col-md-3">Alamat</th>
        <th class="col-md-1">No hp</th>
		<th class="col-md-1">Kode Pos</th>
		<!-- <th class="col-md-1">Sisa</th>		 -->
		<th class="col-md-3">Opsi</th>
	</tr>

    <?php 
		include '../controler/koneksi.php';
		$no = '1';
		$data = mysqli_query($koneksi,"select * from user");
		while($b = mysqli_fetch_array($data)){
			?>
		<tr>
		<td><?php echo $no++ ?></td>
            <td><?php echo $b['nama'] ?></td>
			<td><?php echo $b['alamat'] ?></td>
			<td><?php echo $b['nohp'] ?></td>
			<td><?php echo $b['kd_pos'] ?> </td>
			<td>
			<button class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $b['id_user']; ?>">Edit</button>
			<a href="act_profile.php?id_user=<?php echo $b['id_user']?>&act=hapus" class="btn btn-danger">Delete</a>
		<!-- <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ href=data-anggota-act.php?id_anggota=<$val['id_anggota']?>&act=hapus }" class="btn btn-danger">Delete</a>-->
				
			</td>
		</tr>		
	

<!-- Modal Edit paalamat-->

<div class="modal fade" id="myModal<?php echo $b['id_user']; ?>">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="act_profile.php" method="post">
                        <?php
                        $id_user = $b['id_user']; 
                        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
                        while ($row = mysqli_fetch_array($query)) {  
                        ?>
                        <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>alamat</label>
                          <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Paalamat</label>
                          <input type="text" name="nohp" class="form-control" value="<?php echo $row['nohp']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Paalamat</label>
                          <input type="text" name="kd_pos" class="form-control" value="<?php echo $row['kd_pos']; ?>">      
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
		<form action="act_profile.php" method="post">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Barang Baru</h4>
			</div>
			<div class="modal-body">
				
				<div class="form-group">
					<label>Nama Paalamat</label>
					<input name="nama" type="text" class="form-control" placeholder="Jenis Barang ..">
				</div>
				<div class="form-group">
					<label>alamat</label>
					<input name="alamat" type="text" class="form-control" placeholder="Stok">
				</div>	
				<div class="form-group">
					<label>Harga Paalamat</label>
					<input name="nohp" type="text" class="form-control" placeholder="Harga ..">
				</div>
				<div class="form-group">
					<label>Gambar</label>
                    <input name="kd_pos" type="text" class="form-control" placeholder="Harga ..">
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