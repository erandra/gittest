<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Edit Pengguna</div>
			<div class="panel-body">
				<div class="col-md-6">
					<form role="form" action="" method="post">
					 	<div class="form-group">
							<label>Nim</label>
							<input type="text" readonly="readonly" class="form-control" 
							 name="txtnim" value="<?php echo $profile_mahasiswa[0]['nim'];?>" />
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" readonly="readonly" class="form-control" 
							 name="txtnama" value="<?php echo $profile_mahasiswa[0]['nama'];?>" />
						</div>
						<div class="form-group">
							<label>Angkatan</label>
							<input type="text" class="form-control" 
							 name="txtangkatan" value="<?php echo $profile_mahasiswa[0]['angkatan'];?>" />
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" class="form-control" 
							 name="txtalamat" value="<?php echo $profile_mahasiswa[0]['alamat'];?>" />
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control" 
							 name="txtemail" value="<?php echo $profile_mahasiswa[0]['email'];?>" />
						</div>
						<div class="form-group">
							<label>Telp +62</label>
							<input type="text" class="form-control" 
							 name="txttelp" value="<?php echo $profile_mahasiswa[0]['telp'];?>" />
						</div>
						<div class="form-group">
							<label>kesibukan</label>
							<input type="text" class="form-control" 
							 name="txtkesibukan" value="<?php echo $profile_mahasiswa[0]['kesibukan'];?>" />
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