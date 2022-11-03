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
        <th class="col-md-1">id bukti</th>
		<th class="col-md-1">kode bukti</th>
		<th class="col-md-2">metode pengambilan</th>
		<th class="col-md-2">pdf</th>
        <th class="col-md-2">status</th>
		<th class="col-md-1">aksi</th>
       
		<!-- <th class="col-md-1">Sisa</th>		 -->
		<th class="col-md-2">Opsi</th>
	</tr>

    <?php 
		include '../controler/koneksi.php';
		$no = '1';
		$data = mysqli_query($koneksi,"select * from bukti");
		while($b = mysqli_fetch_array($data)){
			?>
		<tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $b['id_bukti'] ?></td>
            <td><?php echo $b['kode'] ?></td>
			<td><?php echo $b['metode'] ?></td>
            <td><object data="../upload/<?php echo $b['upload'] ?>" width="135" height="50"></object></td>
            <td><?php echo $b['status'] ?></td>
			<td><?php echo $b['aksi'] ?></td>	
		
			<td>
			<button class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $b['id_bukti']; ?>">Edit</button>
			<a href="act_akun.php?id_bukti=<?php echo $b['id_bukti']?>&act=hapus" class="btn btn-danger">Delete</a>
		<!-- <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ href=data-anggota-act.php?id_anggota=<$val['id_anggota']?>&act=hapus }" class="btn btn-danger">Delete</a>-->
				
			</td>
		</tr>		
	

<!-- Modal Edit papassword-->

<div class="modal fade" id="myModal<?php echo $b['id_bukti']; ?>">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="act_bukti.php" method="post">
                        <?php
                        $id_bukti = $b['id_bukti']; 
                        $query = mysqli_query($koneksi, "SELECT * FROM bukti WHERE id_bukti='$id_bukti'");
                        while ($row = mysqli_fetch_array($query)) {  
                        ?>
                       
                            <input type="hidden" name="id_bukti" value="<?php echo $row['id_bukti']; ?>">
                             
                       
                        <div class="form-group">
                          <label>kode</label>
                          <input type="text" name="kode" class="form-control" value="<?php echo $row['kode']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>status</label>
                          <input type="text" name="status" class="form-control" value="<?php echo $row['status']; ?>">      
                        </div>
						<div class="form-group">
                          <label>aksi</label>
                          <input type="text" name="aksi" class="form-control" value="<?php echo $row['aksi']; ?>">      
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
		<form action="act_akun.php" method="post">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Barang Baru</h4>
			</div>
			<div class="modal-body">
                
                <label>Harga Papassword</label>
                <input name="id_bukti" type="text" class="form-control" placeholder="Harga ..">
            </div>
				<div class="form-group">
					<label>kode Papassword</label>
					<input name="kode" type="text" class="form-control" placeholder="Jenis Barang ..">
				</div>
				<div class="form-group">
					<label>password</label>
					<input name="password" type="text" class="form-control" placeholder="Stok">
				</div>	
				<div class="form-group">
				
																				

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