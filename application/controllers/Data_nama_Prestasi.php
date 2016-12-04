<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_nama_Prestasi extends CI_Controller {
 	var $data;  

	function __construct(){
		parent::__construct(); 
		$this->load->model(array('mdata_sub_prestasi','mdata_prestasi','mdata_sub_sub_prestasi'));  
	}

	public function index()
	{  
	
		
		$this->data['prestasi'] = $this->mdata_prestasi->get_data_prestasi();
		$this->data['datasub'] = array();
		
		$filter = array();
				
		if($this->input->post('kategori')){
						
			$this->data['datasub'] = $this->mdata_sub_prestasi->get_data_sub_prestasi(
				array(
					'sub_prestasi.id_prestasi'=>$this->input->post('kategori')
				)
			);
			
			if($this->input->post('sub_kategori')){ 
				$filter = array(
					'prestasi.id_prestasi'=>$this->input->post('kategori'),
					'sub_sub_prestasi.id_sub_prestasi'=>$this->input->post('sub_kategori')
				);
			}else{
				$filter = array(
					'prestasi.id_prestasi'=>$this->input->post('kategori')
				);
			}
		}
		
		$this->data['data_sub_sub_prestasi'] = $this->mdata_sub_sub_prestasi->get_data_sub_sub_prestasi($filter);

		$this->data['filter'] = $filter;
		$this->data['konten'] = 'admin/Data_nama_Prestasi';
		$this->load->view('template_admin',$this->data);
	}
 	
	 public function tambah_data_nama_prestasi()
	{
	 	$this->data['prestasi'] = $this->mprestasi->get_prestasi();
		if($this->input->post('btnSimpan')){
			$d=array( 
				
	 			'nama_sub_kategori'=>$this->input->post('txtnama_sub_kategori'),
	 			'id_prestasi'=>$this->input->post('txtkategori'),
	 			);
	 		$this->mdata_sub_prestasi->insert_data_sub_prestasi($d);
	 		redirect('Data_sub_Prestasi');
	 	} 
	 	$this->data['konten']="tambah_data_nama_prestasi";
	 	$this->load->view('template_admin', $this->data);
	 } 
	 public function tambah_data_nama_prestasi2()
	 {
	 	$this->data['prestasi'] = $this->mdata_sub_prestasi->get_data_sub_prestasi();
	 	if($this->input->post('btnSimpan')){
	 		$d=array( 
				
	 			'nama_prestasi'=>$this->input->post('txtnama_prestasi'),
	 			'id_sub_prestasi'=>$this->input->post('txtkategori'),
	 			);
	 		$this->mdata_sub_sub_prestasi->insert_data_sub_sub_prestasi($d);
	 		redirect('Data_nama_Prestasi');
	 	} 
	 	$this->data['konten']="tambah_data_nama_prestasi2";
	 	$this->load->view('template_admin', $this->data);
	 } 
	
	
	 public function edit_data_sub_prestasi()
	 {	$this->data['prestasi'] = $this->mprestasi->get_prestasi();
		
	 	$this->data['data_sub_prestasi'] = $this->mdata_sub_prestasi->get_data_sub_prestasi(
	 		array('id_sub_prestasi'=>$this->uri->segment(3)
	 		)); 
	 	if($this->input->post('btnSimpan')){
	 		$id_prestasi = $this ->uri->segment(3);
	 		$d=array( 
	 			'id_sub_prestasi'=>$this->input->post('txtid_sub_prestasi'),
	 			'nama_sub_kategori'=>$this->input->post('txtnama_sub_kategori') ,
	 			'id_prestasi'=>$this->input->post('txtkategori')
	 			);
	 		$this->mdata_sub_prestasi->update_data_sub_prestasi($id_prestasi, $d);
	 		redirect('Data_sub_Prestasi');
	 	} 
	 	$this->data['konten']="edit_data_sub_prestasi";
	 	$this->load->view('template_admin', $this->data);
	 }

	 public function hapus_data_sub_prestasi(){
	 	$id_sub_prestasi = $this ->uri-> segment(3);
	 	$this->mdata_sub_prestasi->delete_data_sub_prestasi($id_sub_prestasi);
	 	redirect ('Data_sub_Prestasi');
	 }
}
