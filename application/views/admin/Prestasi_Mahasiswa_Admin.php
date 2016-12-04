
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Mahasiswa Berprestasi</div>
					<div class="panel-body">
						<div class ="col-md-12">
							<div class="col-md-4 form-group"> 
								<label>Kategori</label>
						 		<?php
						 			echo "<form action='' method='post' name='f'>
						 				<select name='kategori' class='form-control' 
						 				style='width:300px;' onchange='f.submit();' >";
						 				echo "<option value=''>Pilih Semua Kategori</option>";

						 			foreach($prestasi as $p){
						 				if($this->input->post('kategori')==$p['id_prestasi'])
						 					echo "<option selected value='$p[id_prestasi]'>$p[kategori]</option>";
						 				else
						 					echo "<option value='$p[id_prestasi]'>$p[kategori]</option>";
						 			}
						 			echo "</select> </br>
						 			";
						 		?>
					 		</div>
					 		<div class="col-md-4 form-group">
					 			<label style="margin-left:100px;">Sub Kategori</label>
								<select class="form-control" 
								 name="sub_kategori" id="nama_prestasi" onchange='f.submit();' style="margin-left:100px;">
								
								 <option value="">Pilih Semua Sub Kategori</option>
								 <?php
						 			foreach($datasub as $p){
						 				if($this->input->post('sub_kategori')==$p['id_sub_prestasi'])
						 					echo "<option selected value='$p[id_sub_prestasi]'>$p[nama_sub_kategori]</option>";
						 				else
						 					echo "<option value='$p[id_sub_prestasi]'>$p[nama_sub_kategori]</option>";
						 			} 
						 		?>
								</select>
								</form>
					 		</div>
					 		
				 	</div>
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" >Item ID</th>
						        <th data-field="No" data-sortable="true">No</th>
						        <th data-field="kategori" data-sortable="true">Kategori</th>
						        <th data-field="nama_sub_kategori" data-sortable="true">Sub Kategori</th>
						        <th data-field="Prestasi" data-sortable="true"> Nama Prestasi</th>
						        <th data-field="NIM" data-sortable="true">NIM</th>
						        <th data-field="Nama"  data-sortable="true">Nama</th>
						        <th data-field="Email" data-sortable="true">Email</th>
						        <th data-field="Telp" data-sortable="true">Telp</th>
						       
						    </tr>
						    </thead>
						  
						     <tbody>
						    	<?php
						    	$no=1;
						    	foreach($data_prestasi_mahasiswa_admin as $d): 
						    	?>
						    	<tr>
						    		<td></td>
						    		<td><?php echo $no; ?></td>
						    		<td><?php echo $d['kategori'] ?></td>
						    		<td><?php echo $d['nama_sub_kategori'] ?></td>
						    		<td><?php echo $d['nama_prestasi'] ?></td>
						    		<td><?php echo $d['nim'] ?></td>
						    		<td><?php echo $d['nama'] ?></td>
						    		<td><?php echo $d['email'] ?></td>
						    		<td><?php echo $d['telp'] ?></td>
						    	
						    	<?php
						    	$no++;
						    	endforeach; 
						    	?>
						    </tbody> 
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
			
		