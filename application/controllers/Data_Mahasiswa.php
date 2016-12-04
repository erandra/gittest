<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_Mahasiswa extends CI_Controller {
 	var $data;  

	function __construct(){
		parent::__construct(); 
		
		$this->load->model(array('mdata_mahasiswa'));
		
	}
	/*untuk menampilkan data tabel Data_Mahasiswa pada admin*/
	public function index()
	{  
		$this->data['konten'] = 'admin/Data_Mahasiswa';
		$this->data['data_mhs'] = $this->mdata_mahasiswa->get_data_mahasiswa();
		$this->load->view('template_admin',$this->data);
	}
 	
 	/*untuk menambah data pada tabel Data_Mahasiswa*/
	public function tambah_data_mahasiswa()
	{
		if($this->input->post('btnSimpan')){
			$d=array( 
				'nim'=>$this->input->post('txtnim'),
				'nama'=>$this->input->post('txtnama'),
				'angkatan'=>$this->input->post('txtangkatan'),
				'alamat'=>$this->input->post('txtalamat')    

				);
			$this->mdata_mahasiswa->insert_data_mahasiswa($d);
			redirect('Data_Mahasiswa'); //diarahkan kembali ke Data_Mahasiswa
		} 
		$this->data['konten']="admin/tambah_data_mahasiswa";
		$this->load->view('template_admin', $this->data);
	} 
	/*untuk edit data pada tabel Data_Mahasiswa*/
	public function edit_data_mahasiswa()
	{	
		$this->data['data_mahasiswa'] = $this->mdata_mahasiswa->get_data_mahasiswa(
			array('nim'=>$this->uri->segment(3)
			)); 
		if($this->input->post('btnSimpan')){
			$nim = $this ->uri->segment(3);
			$d=array( 
				'nim'=>$this->input->post('txtnim'),
				'nama'=>$this->input->post('txtnama'),
				'kesibukan'=>$this->input->post('txtkesibukan'),
				'angkatan'=>$this->input->post('txtangkatan'),
				'alamat'=>$this->input->post('txtalamat')  
				 
				);
			$this->mdata_mahasiswa->update_data_mahasiswa($nim, $d);
			redirect('Data_Mahasiswa');
		} 
		$this->data['konten']="admin/edit_data_mahasiswa";
		$this->load->view('template_admin', $this->data);
	}
	/*untuk menghapus data pada Data_Mahasiswa*/
	public function hapus_data_mahasiswa(){
		$nim = $this ->uri-> segment(3);
		$this->mdata_mahasiswa->delete_data_mahasiswa($nim);
		redirect ('Data_Mahasiswa');
	}
}
