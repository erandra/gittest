<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Edit Pengguna</div>
			<div class="panel-body">
				<div class="col-md-6">
					<form role="form" action="" method="post">
					 	<div class="form-group">
							<label>Username</label>
							<input type="text" readonly="readonly" class="form-control" 
							 name="txtusername" value="<?php echo $pengguna[0]['username'];?>" />
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" 
							 name="txtnama" value="<?php echo $pengguna[0]['nama'];?>" />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" class="form-control" 
							 name="txtpassword" value="<?php echo $pengguna[0]['password'];?>" />
						</div>
						<div class="form-group">
							<label>Level</label>
							<input type="text" class="form-control" 
							 name="txtlevel" value="<?php echo $pengguna[0]['level'];?>" />
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