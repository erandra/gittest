		<div class="row">
			<div class="col-lg-5">
				<div class="panel panel-default">
					<div class="panel-heading">Profile mahasiswa</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json">
						<tbody>
							<?php 
							foreach($profile_mahasiswa as $d): 
									if($_SESSION['username']==$d['nim']){
						    	
							?>

						   	<tr>
					    		<td>Nim</td>
					    		<td>:</td>
					    		<td><?php echo $_SESSION['username'] ?></td>
					    	</tr>
					    	<tr>
					    		<td>Nama Mahasiswa</td>
					    		<td>:</td>
					    		<td><?php echo $d['nama'] ?></td>
					    	</tr>
					    	<tr>
					    		<td>Angkatan</td>
					    		<td>:</td>
					    		<td><?php echo $d['angkatan'] ?></td>
					    	</tr>
					    	<tr>
					    		<td>Alamat</td>
					    		<td>:</td>
					    		<td><?php echo $d['alamat'] ?></td>
					    	</tr>
					    	<tr>
					    		<td>email</td>
					    		<td>:</td>
					    		<td><?php echo $d['email'] ?></td>
					    	</tr>
					    	<tr>
					    		<td>Telp</td>
					    		<td>:</td>
					    		<td>+62<?php echo $d['telp'] ?></td>
					    	</tr>
					    	<tr>
					    		<td>Kesibukan</td>
					    		<td>:</td>
					    		<td><?php echo $d['kesibukan'] ?></td>
					    	</tr>
					    	<tr>
					    		<?php
						    	echo "
						    		<td>
				    					<a class='btn btn-info' href='".base_url()."index.php/profile_mahasiswa/edit_profile_mahasiswa/$d[nim]'>Edit</a>
				    					
				    				</td>";
				 
						    	?>	
					    	</tr>
					    	<?php
					    }
					    	endforeach;
					    	?>
						   		
				   		</tbody>

						</table>
					</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
