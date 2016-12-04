<script>
function showKategori(str) { /** namanya (showkategori) digunakan pada onchange pada select kategori prestasi */
	if (str == "") {
        document.getElementById("kategori2").innerHTML = ""; /** kategori2 menuju name dan id pada select sub kategori */
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            	//alert(xmlhttp.responseText);
                document.getElementById("kategori2").innerHTML = xmlhttp.responseText; /** menuju name dan id pada select sub kategori */
            }
        };
        xmlhttp.open("GET","<?php echo base_url();?>index.php/prestasi_mhs/kategori2/"+str,true); /** menuju nama fungsi kategori2 pada controller prestasi_mhs */
        xmlhttp.send();
    }
}
</script>
<script>
function showNamaPrestasi(str) { /** namanya (shownamaprestasi) digunakan pada onchange pada select sub kategori */
	if (str == "") {
        document.getElementById("nama_prestasi").innerHTML = ""; /** menuju name dan id pada select nama prestasi */
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            	//alert(xmlhttp.responseText);
                document.getElementById("nama_prestasi").innerHTML = xmlhttp.responseText; /** menuju name dan id pada select nama prestasi */
            }
        };
        xmlhttp.open("GET","<?php echo base_url();?>index.php/prestasi_mhs/nama_prestasi/"+str,true); /** menuju nama fungsi nama_prestasi pada controller prestasi_mhs */
        xmlhttp.send();
    }
}
</script>


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">plus Prestasi Mahasiswa <?php
					$no=1;
			    	foreach($data_mhs_prestasi as $d): 
			    		if($_SESSION['username']==$d['nim'] && $no<2){
			    	?>	    
			    		<?php echo $d['nama']; ?>
			    	<?php
			    	
	    			$no++;
	    			}
			    	endforeach; 
			    	?></div>
					<div class="panel-body">
						<div class="col-md-12">
						
						
						
							<form role="form" action="" method="post">
								<div class="form-group">
									<label>Kategori Prestasi</label>
									<select  class="form-control" 
									 name="kategori1" onchange="showKategori(this.value)" >
									 <option value="">Pilih Kategori</option>
									 <?php
									 	foreach($prestasi as $kp){
									 		echo "<option value='$kp[id_prestasi]'>
									 			$kp[kategori]</option>";
									 	}
									 ?>
									</select>
								</div>
								<div class="form-group">
									<label>Sub Kategori</label>
									<select  class="form-control" 
									 name="kategori2" id="kategori2" onchange="showNamaPrestasi(this.value)" >
									 <option value="">Pilih Sub Kategori</option>
									</select>
								</div>
								<div class="form-group">
									<label>Nama Prestasi</label>
									<select  class="form-control" 
									 name="nama_prestasi" id="nama_prestasi" >
									 <option value="">Pilih Nama Prestasi</option>
									</select>
								</div>
								<label>Capaian Prestasi</label>
								<div class="form-group ">
									<input class="form-control" name="keterangan" placeholder="Capaian Prestasi">
								</div>
								<label>Tahun</label>
								<div class="form-group ">
									<input class="form-control" name="tahun" placeholder="Tahun">
								</div>
								

								<input type="submit" class="btn btn-primary" name="btnSimpan" value="Submit"/>

							</form>
						</div>

						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" 		data-checkbox="true">Item ID</th>
						        <th data-field="kategori" 	data-sortable="true">Kategori Prestasi</th>
						        <th data-field="nama_prestasi" 	data-sortable="true">Nama Prestasi</th>
						        <th data-field="prestasi" 	data-sortable="true">Capaian Prestasi</th>
						        <th data-field="tahun" 		data-sortable="true">Tahun</th>
						        <th data-field="status" 	data-sortable="true">Status</th>
						       
						    </tr>
						    </thead>
						    <tbody>

						    <?php
						    
						    	foreach($data_mhs_prestasi as $d): 
						    		if($_SESSION['username']==$d['nim']){
						    	?>
						    	<tr>
						    		<td></td>
						    		<td><?php echo $d['kategori'] ?></td>
						    		<td><?php echo $d['nama_prestasi'] ?></td>
						    		<td><?php echo $d['keterangan'] ?></td>
									<td><?php echo $d['tahun'] ?></td>
									<td><?php 
										if($d['verifikasi']==0){
											echo "Belum di verifikasi";
										}elseif($d['verifikasi']==1){
											echo "Sudah di verifikasi";
										}else{
											echo "Ditolak";
										}

									 ?>
									</td>
					    			


						    	<?php
						    
				    			}
						    	endforeach; 
						    	?>	
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
			
		
		