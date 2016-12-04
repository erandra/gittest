<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Tambah Data Mahasiswa</div>
			<div class="panel-body">
				<div class="col-md-6">
					<form role="form" action="" method="post">
					 	<div class="form-group">
							<label>NIM</label>
							<input type="text" class="form-control" 
							 name="txtnim" value="<?php echo $data_mahasiswa[0]['nim'];?>" />
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" 
							 name="txtnama" value="<?php echo $data_mahasiswa[0]['nama'];?>" />
						</div>
						<div class="form-group">
							<label>Angkatan</label>
							<input type="text" class="form-control" 
							 name="txtangkatan" value="<?php echo $data_mahasiswa[0]['angkatan'];?>" />
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" class="form-control" 
							 name="txtalamat" value="<?php echo $data_mahasiswa[0]['alamat'];?>" />
						</div>
						<div class="form-group"> 
							<input type="submit" class='btn btn-primary' 
							 name="btnSimpan" value="Simpan" />
							<input type="button" class='btn btn-danger' 
							   value="Batal" onclick="self.history.back();" />
						</div>

					</form>
			</div>
		</div>
	</div> 
</div> 