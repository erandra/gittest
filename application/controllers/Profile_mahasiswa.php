<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_mahasiswa extends CI_Controller {
 	var $data;  

	function __construct(){
		parent::__construct(); 
		$this->load->model(array('mdata_profile_mahasiswa','mprestasi_mhs')); 
	}

	public function index()
	{  
		$this->data['konten'] = 'mhs/Profile_mahasiswa';
		$this->data['profile_mahasiswa'] = $this->mdata_profile_mahasiswa->get_data_profile_mahasiswa();
		$this->data['data_mhs_prestasi'] = $this->mprestasi_mhs->get_prestasi_mhs() ;
		$this->load->view('template_mahasiswa',$this->data);
	}
	public function edit_profile_mahasiswa()
	{	
		$this->data['profile_mahasiswa'] = $this->mdata_profile_mahasiswa->get_data_profile_mahasiswa(
			array('nim'=>$this->uri->segment(3)
			)); 
		if($this->input->post('btnSimpan')){
			$nim = $this ->uri->segment(3);
			$d=array( 
				'nim'=>$this->input->post('txtnim'),
				'nama'=>$this->input->post('txtnama'),
				'angkatan'=>$this->input->post('txtangkatan'),
				'alamat'=>$this->input->post('txtalamat'),
				'email'=>$this->input->post('txtemail'),
				'telp'=>$this->input->post('txttelp'),
				'kesibukan'=>$this->input->post('txtkesibukan'),	 
				);
			$this->mdata_profile_mahasiswa->update_data_profile_mahasiswa($nim, $d);
			redirect('Profile_Mahasiswa');
		} 
		$this->data['data_mhs_prestasi'] = $this->mprestasi_mhs->get_prestasi_mhs() ;
		$this->data['konten']="mhs/edit_profile_mahasiswa";
		$this->load->view('template_mahasiswa', $this->data);
	}
 	
	
}
