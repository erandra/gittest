<div class="row">
			<div class="col-lg-12">
			
			<?php print_r($filter); ?>
			
				<div class="panel panel-default">
					<div class="panel-heading">Data Sub Kategori Prestasi</div>
					<!--  <a class='btn btn-primary' href="<?php echo base_url();?>index.php/Data_nama_Prestasi/tambah_data_nama_prestasi/">Tambah</a>
					<a class='btn btn-primary' href="<?php echo base_url();?>index.php/Data_nama_Prestasi/tambah_data_nama_prestasi2/">Tambah</a>  -->
					<div class="panel-body">
						<form action='' method='post' name='f'>
						
						<div class="col-md-4 form-group"> 
								<label>Kategori</label>
						 		<?php
						 			echo "
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
								
					 		</div>
							
							
						</form>
					 	</div>
						
						
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
												
							<thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" ></th>
						        <th data-field="no" data-sortable="true">No</th>
						        <th data-field="kategori" data-sortable="true">Kategori</th>
						        <th data-field="nama_sub_prestasi" data-sortable="true">Sub Kategori Prestasi</th>
						         <th data-field="nama_prestasi" data-sortable="true">Nama Prestasi</th>
						   
						        
						    </tr>
						    </thead>
						    <tbody>
						    	<?php
						    	$no=1;
						    	foreach($data_sub_sub_prestasi as $d): 
						    	?>
						    	<tr>
						    		<td></td>
						    		<td><?php echo $no ?></td>
						    		<td><?php echo $d['kategori'] ?></td>
						    		<td><?php echo $d['nama_sub_kategori'] ?></td>
						    		<td><?php echo $d['nama_prestasi'] ?></td>
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