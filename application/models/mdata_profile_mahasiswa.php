<?php
class mdata_profile_mahasiswa extends CI_Model{
	var $db;
	var $T_data_profile_mahasiswa = 'mhs';
	/*Mengambil database*/
	function __construct(){
		parent::__construct();
		$this->db=$this->load->database('default',TRUE);
	}
	/*Mengambil data*/
	function get_data_profile_mahasiswa($where=array()){
		$this->db->select('nim, nama, angkatan, alamat, email, telp, kesibukan');
		$this->db->where($where);
		$query=$this->db->get($this->T_data_profile_mahasiswa);
		return $query->result_array();
	}
	/*Memasukkan data*/
	function insert_data_profile_mahasiswa($data){
		$this->db->insert($this->T_data_profile_mahasiswa, $data);
		return TRUE;
	}
	/*Update data*/
	function update_data_profile_mahasiswa ($nim, $data){
		$this->db->where('nim',$nim);
		$this->db->update($this->T_data_profile_mahasiswa,$data);
		return TRUE;
	}
	/*Delete data*/
	function delete_data_profile_mahasiswa($nim){
		$this->db->where('nim',$nim);
		$this->db->delete($this->T_data_profile_mahasiswa);
		return TRUE;
	}

} 