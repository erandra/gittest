<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Edit Data Mahasiswas</div>
			<div class="panel-body">
				<div class="col-md-6">
					<form role="form" action="" method="post">
					 		<input type="hidden" class="form-control" 
							 name="txtid_prestasi" value="<?php echo $data_prestasi[0]['id_prestasi'];?>" />
						<div class="form-group">
							<label>Kategori</label>
							<input type="text" class="form-control" 
							 name="txtkategori" value="<?php echo $data_prestasi[0]['kategori'];?>" />
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