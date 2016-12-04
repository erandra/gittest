		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Verifikasi Prestasi Mahasiswa</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        
						        <th data-field="No" data-sortable="true">No</th>
						        <th data-field="Nim" data-sortable="true">NIM</th>
						        <th data-field="Nama Mahasiswa" data-sortable="true">Nama Mahasiswa</th>
						        <th data-field="Capaian Prestasi" data-sortable="true">Capaian Prestasi</th>
						        <th data-field="Kategori Prestasi" data-sortable="true">Kategori Prestasi</th>
						        <th data-field="Nama Prestasi" data-sortable="true">Nama Prestasi</th>
						        <th data-field="Tahun" data-sortable="true">Tahun</th>
						        <th data-field="Action" data-sortable="true">Action</th>
						   
						    </tr>
						    </thead>
						     <tbody>
						    	<?php
						    	$no=1;
						    	foreach($data_mhs as $d): 
						    	?>
						    	<tr>
						    
						    		<td><?php echo $no; ?></td>
						    		<td><?php echo $d['nim']; ?></td>
						    		<td><?php echo $d['nama']; ?></td>
						    		<td><?php echo $d['keterangan']; ?></td>
						    		<td><?php echo $d['kategori']; ?></td>
						    		<td><?php echo $d['nama_prestasi']; ?></td>
						    		<td><?php echo $d['tahun']; ?></td>
								<?php
						    	echo "

						    		<td>
				    					<a onclick='return confirm(\"Apakah Anda Yakin?\")' 
				    					class='btn btn-info' href='".base_url()."index.php/verifikasi/verifikasi/$d[id_mhs_prestasi]'>Verifikasi</a>
									
				    					<a onclick='return confirm(\"Apakah Anda Yakin?\")' 
				    					class='btn btn-danger' href='".base_url()."index.php/verifikasi/ditolak/$d[id_mhs_prestasi]'>Ditolak</a>
				    					
				    				
				    				</td>


				    			</tr>";
								$no++;
						    	endforeach; 
						    	?>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	