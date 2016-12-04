<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Tambah Pengguna</div>
			<div class="panel-body">
				<div class="col-md-6">
					<form role="form" action="" method="post">
					 	<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" 
							 name="txtnama"/>
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" 
							 name="txtusername" />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" class="form-control" 
							 name="txtpassword"  />
						</div>
						<div class="form-group">
							<label>Sebagai</label>
							<select  class="form-control" 
							 name="txtlevel">
							 <option value="">Sebagai</option> 
							 <option value="1">Admin</option> 
							 <option value="2">Mahasiswa</option>
							 <option value="3">Dosen</option>  
							</select>
							
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