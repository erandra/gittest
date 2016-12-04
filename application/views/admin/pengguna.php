
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Pengguna</div>
					<div class="panel-body">
						<a class='btn btn-primary' href="<?php echo base_url();?>index.php/pengguna/tambah_pengguna/">Tambah</a>
			    <br/><br/>
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						      
						        <th data-field="No" data-sortable="true">No</th>
						        <th data-field="Username" data-sortable="true">Username</th>
						        <th data-field="Nama"  data-sortable="true">Nama</th>
						        <th data-field="Password" data-sortable="true">Password</th>
						        <th data-field="Action" data-sortable="true">Action</th>
						    </tr>
						    </thead>
						  
						    <tbody>
						    	<?php
						    	$no=1;
						    	foreach($pengguna as $d): 
						    	?>
						    	<tr>
						    
						    		<td><?php echo $no; ?></td>
						    		<td><?php echo $d['username'] ?></td>
						    		<td><?php echo $d['nama'] ?></td>
						    		<td><?php echo $d['password'] ?></td>
						    		
						    	<?php
						    	echo "
						    		<td>
				    					<a class='btn btn-info' href='".base_url()."index.php/pengguna/edit_pengguna/$d[username]'>Edit</a>
				    					<a onclick='return confirm(\"Apakah Anda Yakin?\")'  class='btn btn-danger' href='".base_url()."index.php/pengguna/hapus_pengguna/$d[username]'>Hapus</a>
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
			
		