
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Mahasiswa</div>
					<div class="panel-body">
						<a class='btn btn-primary' href="<?php echo base_url();?>index.php/Data_Mahasiswa/tambah_data_mahasiswa/">Tambah</a>
			    <br/><br/>
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" >Item ID</th>
						        <th data-field="No" data-sortable="true">No</th>
						        <th data-field="NIM" data-sortable="true">NIM</th>
						        <th data-field="Nama"  data-sortable="true">Nama</th>
						        <th data-field="Angkatan" data-sortable="true">Angkatan</th>
						        <th data-field="Alamat" data-sortable="true">Alamat</th>
						        <th data-field="Action" data-sortable="true">Action</th>
						    </tr>
						    </thead>
						  
						    <tbody>
						    	<?php
						    	$no=1;
						    	foreach($data_mhs as $d): 
						    	?>
						    	<tr>
						    		<td></td>
						    		<td><?php echo $no; ?></td>
						    		<td><?php echo $d['nim'] ?></td>
						    		<td><?php echo $d['nama'] ?></td>
						    		<td><?php echo $d['angkatan'] ?></td>
						    		<td><?php echo $d['alamat'] ?></td>
						    	<?php
						    	echo "
						    		<td>
				    					<a class='btn btn-info' href='".base_url()."index.php/Data_Mahasiswa/edit_data_mahasiswa/$d[nim]'>Edit</a>
				    					<a onclick='return confirm(\"Apakah Anda Yakin?\")'  class='btn btn-danger' href='".base_url()."index.php/Data_Mahasiswa/hapus_data_mahasiswa/$d[nim]'>Hapus</a>
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
			
		