<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
 	var $data;  

	function __construct(){
		parent::__construct(); 
		$this->load->library('unit_test');
		$this->load->model('mdata_mahasiswa');
	}
	
	function index(){
		$p = 5;
		$l = 10;
		
		$luas = 50;

		$this->unit->run($this->mdata_mahasiswa->get_data_mahasiswa(), 'is_array');
		
		echo $this->unit->report();
	}
	
	
	function hitung_luas($p, $l){
		return $l * $p;
	}
	
}