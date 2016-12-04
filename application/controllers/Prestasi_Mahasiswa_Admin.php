<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prestasi_Mahasiswa_Admin extends CI_Controller {
 	var $data;  

	function __construct(){
		parent::__construct();
		$this->load->model(array('mprestasi_mhs','mdata_prestasi','mdata_sub_prestasi'));  
	}

	public function index()
	{  
		$this->data['prestasi'] = $this->mdata_prestasi->get_data_prestasi();
		$this->data['data_prestasi_mahasiswa_admin'] = $this->mprestasi_mhs->get_prestasi_mhs_join((array('verifikasi' => '1')));
		$this->data['datasub'] = array();
		if($this->input->post('kategori')){
			$this->data['datasub'] = 
				$this->mdata_sub_prestasi->get_data_sub_prestasi(array('sub_prestasi.id_prestasi'=>$this->input->post('kategori')));
		}

		if($this->input->post('kategori')){ 
			$this->data['data_prestasi_mahasiswa_admin'] = 
			$this->mprestasi_mhs->get_prestasi_mhs_join(
					array('prestasi.id_prestasi'=>$this->input->post('kategori'),'verifikasi' => '1'));
		}
		if($this->input->post('sub_kategori')){ 
			$this->data['data_prestasi_mahasiswa_admin'] = 
			$this->mprestasi_mhs->get_prestasi_mhs_join(
					array('sub_sub_prestasi.id_sub_prestasi'=>$this->input->post('sub_kategori'),'verifikasi' => '1'));
		}
		$this->data['konten'] = 'admin/Prestasi_Mahasiswa_Admin';
		$this->load->view('template_admin',$this->data);
	}


}
