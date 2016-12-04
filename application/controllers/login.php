<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	var $data;

	function __construct (){
		parent::__construct();
		$this ->load ->model(array('mpengguna'));
	}
	public function index()
	{
		$this->load->view('login');
	}
	
	/*Proses login*/
	public function cek_login(){
		$this->load->model('mpengguna');
		
		$hasil = $this->mpengguna->get_pengguna(
			array('username' => $this->input->post('username'),
			'password' =>$this->input->post('password')
			)
		);

		if (count($hasil)>0){
			session_start();
			$_SESSION['nama']=$hasil[0]['nama']; 
			$_SESSION['username']=$hasil[0]['username'];
			$_SESSION['level']=$hasil[0]['level'];
			
			if( $_SESSION['level']==1){
				echo "ADMIN";
				redirect ('Prestasi_Mahasiswa_Admin');
			}elseif( $_SESSION['level']==2){
				echo $_SESSION['username'];
				redirect ('prestasi_mhs');
			}elseif( $_SESSION['level']==3){
				echo "PAKAR";
			}
		}else{
			echo "<script>alert('Username password tidak ditemukan !');history.go(-1);</script>";
		}
	}

	public function logout(){
		session_destroy(); 
		redirect('login');
	}
}

