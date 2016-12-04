
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Kategori Prestasi</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							<a class='btn btn-primary' href="<?php echo base_url();?>index.php/Data_Prestasi/tambah_data_prestasi/">Tambah</a>							
							<thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" ></th>
						        <th data-field="no" data-sortable="true">No</th>
						        
						        <th data-field="kategori_prestasi" data-sortable="true">Kategori Prestasi</th>
						        <th data-field="action" data-sortable="true">Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    	<?php
						    	$no=1;
						    	foreach($data_prestasi as $d): 
						    	?>
						    	<tr>
						    		<td></td>
						    		<td><?php echo $no ?></td>
						    		
						    		<td><?php echo $d['kategori'] ?></td>
						    		<?php
						    	echo "
						    		<td>
				    					<a class='btn btn-info' href='".base_url()."index.php/Data_Prestasi/edit_data_prestasi/$d[id_prestasi]'>Edit</a>
				    					<a onclick='return confirm(\"Apakah Anda Yakin?\")'  class='btn btn-danger' href='".base_url()."index.php/Data_Prestasi/hapus_data_prestasi/$d[id_prestasi]'>Hapus</a>
				    				</td>";
				    			$no++;
				    			endforeach; 
						    	?>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->

			
		