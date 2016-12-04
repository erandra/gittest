<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pengguna extends CI_Controller {
 	var $data;  

	function __construct(){
		parent::__construct(); 
		$this->load->model(array('mpengguna'));  
	}

	public function index()
	{  
		$this->data['konten'] = 'admin/pengguna';
		$this->data['pengguna'] = $this->mpengguna->get_pengguna();
		$this->load->view('template_admin',$this->data);
	}
 	
 	public function tambah_pengguna()
	{
		if($this->input->post('btnSimpan')){
			$d=array( 
				'nama'=>$this->input->post('txtnama'),
				'username'=>$this->input->post('txtusername'),
				'password'=>$this->input->post('txtpassword'),
				'level'=>$this->input->post('txtlevel')    

				);
			$this->mpengguna->insert_pengguna($d);
			redirect('pengguna');
		} 
		$this->data['konten']="admin/tambah_pengguna";
		$this->load->view('template_admin', $this->data);
	} 
	public function edit_pengguna()
	{	
		$this->data['pengguna'] = $this->mpengguna->get_pengguna(
			array('username'=>$this->uri->segment(3)
			)); 
		if($this->input->post('btnSimpan')){
			$nim = $this ->uri->segment(3);
			$d=array( 
				'username'=>$this->input->post('txtusername'),
				'nama'=>$this->input->post('txtnama'),
				'password'=>$this->input->post('txtpassword'),
				'level'=>$this->input->post('txtlevel')  
				 
				);
			$this->mpengguna->update_pengguna($nim, $d);
			redirect('pengguna');
		} 
		$this->data['konten']="admin/edit_pengguna";
		$this->load->view('template_admin', $this->data);
	}
	public function hapus_pengguna(){
		$username = $this ->uri-> segment(3);
		$this->mpengguna->delete_pengguna($username);
		redirect ('pengguna');
	}


}
