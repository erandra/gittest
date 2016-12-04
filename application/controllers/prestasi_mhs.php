<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prestasi_mhs extends CI_Controller {
 	var $data;  

	function __construct(){
		parent::__construct(); 
		$this->load->model(array('mprestasi_mhs','mprestasi'));  
	}

	function kategori2($id_prestasi){
		$prestasi = $this->mprestasi->get_sub_prestasi(array('id_prestasi'=>$id_prestasi));
		
		
		if(count($prestasi)>0){
			echo "<option value=''>Pilih Sub Kategori</option>";
			foreach($prestasi as $p){
			echo "<option value='$p[id_sub_prestasi]'>$p[nama_sub_kategori]</option>";
			}
		}else{
			echo "<option value=''>Sub belum ada</option>";
		}



	}

	function nama_prestasi($id_sub_prestasi){
		$prestasi = $this->mprestasi->get_nama_prestasi(array('id_sub_prestasi'=>$id_sub_prestasi ));
		
		
		if(count($prestasi)>0){
			foreach($prestasi as $p){
			echo "<option value='$p[id_sub_sub_prestasi]'>$p[nama_prestasi]</option>";
			}
		}else{
			echo "<option value=''></option>";
		}



	}
	public function index()
	{   
		$this->data['prestasi'] = $this->mprestasi->get_prestasi();

		if($this->input->post('btnSimpan')){
			session_start();
			$d=array(
				'nim'=>$_SESSION['username'],
				'id_sub_sub_prestasi'=>$this->input->post('nama_prestasi'),
				'keterangan'=>$this->input->post('keterangan'),
				'tahun'=>$this->input->post('tahun'),
				'verifikasi'=>'0'
				);
			$this->mprestasi_mhs->insert_prestasi_mhs($d);
			
			redirect('prestasi_mhs');
		} 
		$this->data['konten'] = 'mhs/prestasi_mhs';
		$this->data['data_mhs_prestasi'] = $this->mprestasi_mhs->get_prestasi_mhs() ;
		$this->load->view('template_mahasiswa',$this->data);
	}
 	
 	public function hapus_prestasi_mhs(){
		$id_mhs_prestasi = $this ->uri-> segment(3);
		$this->mprestasi_mhs->delete_prestasi_mhs($id_mhs_prestasi);
		redirect ('prestasi_mhs');
	}
	
}
