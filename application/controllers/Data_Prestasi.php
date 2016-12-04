<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_Prestasi extends CI_Controller {
 	var $data;  

	function __construct(){
		parent::__construct(); 
		$this->load->model(array('mdata_prestasi'));  
	}

	public function index()
	{  
		$this->data['konten'] = 'admin/Data_Prestasi';
		$this->data['data_prestasi'] = $this->mdata_prestasi->get_data_prestasi();
		$this->load->view('template_admin',$this->data);
	}
 	
	public function tambah_data_prestasi()
	{
		if($this->input->post('btnSimpan')){
			$d=array(  
				'kategori'=>$this->input->post('txtkategori'),
				);
			$this->mdata_prestasi->insert_data_prestasi($d);
			redirect('Data_Prestasi');
		} 
		$this->data['konten']="admin/tambah_data_prestasi";
		$this->load->view('template_admin', $this->data);
	} 
	
	public function edit_data_prestasi()
	{	
		$this->data['data_prestasi'] = $this->mdata_prestasi->get_data_prestasi(
			array('id_prestasi'=>$this->uri->segment(3)
			)); 
		if($this->input->post('btnSimpan')){
			$id_prestasi = $this ->uri->segment(3);
			$d=array(  
				'kategori'=>$this->input->post('txtkategori') 
				);
			$this->mdata_prestasi->update_data_prestasi($id_prestasi, $d);
			redirect('Data_Prestasi');
		} 
		$this->data['konten']="admin/edit_data_prestasi";
		$this->load->view('template_admin', $this->data);
	}

	public function hapus_data_prestasi(){
		$id_prestasi = $this ->uri-> segment(3);
		$this->mdata_prestasi->delete_data_prestasi($id_prestasi);
		redirect ('Data_Prestasi');
	}
}
