<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">PLUS Sub Kategori</div>
			<div class="panel-body">
				<div class="col-md-6">
					<form role="form" action="" method="post">
						<label>Kategori Prestasi</label>
						<select  class="form-control" 
						 name="txtkategori" >
						 <option value="">Pilih Kategori</option>
						 <?php
						 	foreach($prestasi as $kp){
						 		echo "<option value='$kp[id_prestasi]'>
						 			$kp[kategori]</option>";
						 				
						 	}
						 ?>
						</select>
						<div class="form-group">
							<label>Nama Sub Kategori</label>
							<input type="text" class="form-control" 
							 name="txtnama_sub_kategori"   />
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