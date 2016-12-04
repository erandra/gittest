<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class verifikasi extends CI_Controller {
 	var $data;  

	function __construct(){
		parent::__construct(); 
		$this->load->model(array('mprestasi_mhs'));  
	}

	public function index()
	{   
		$this->data['konten'] = 'admin/verifikasi';
		$this->data['data_mhs'] = $this->mprestasi_mhs->get_prestasi_mhs_join(array('verifikasi'=>'0')) ;

		 
		$this->load->view('template_admin',$this->data);
	}

	// ketika dilakukan verifikasi, verifikasi akan bernilai 1
	public function verifikasi(){
		$d=array(
			'verifikasi'=>'1' 
			);
		$this->mprestasi_mhs->update_prestasi_mhs($this->uri->segment(3), $d);
		
		redirect('verifikasi');

		
	} 	
	public function ditolak(){
		$d=array(
			'verifikasi'=>'2' 
			);
		$this->mprestasi_mhs->update_prestasi_mhs($this->uri->segment(3), $d);
		
		redirect('verifikasi');

		
	}   
	
}
