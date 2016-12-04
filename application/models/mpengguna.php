<?php
class mpengguna extends CI_Model{
	var $db;
	var $T_pengguna = 'pengguna';
	/*Mengambil database*/
	function __construct(){
		parent::__construct();
		$this->db=$this->load->database('default',TRUE);
	}
	/*Mengambil data*/
	function get_pengguna($where=array()){
		$this->db->select('id_pengguna, nama, username, password, level');
		$this->db->where($where);
		$query=$this->db->get($this->T_pengguna);
		return $query->result_array();
	}
	/*Memasukkan data*/
	function insert_pengguna($data){
		$this->db->insert($this->T_pengguna, $data);
		return TRUE;
	}
	/*Update data*/
	function update_pengguna ($username, $data){
		$this->db->where('username', $username);
		$this->db->update($this->T_pengguna,$data);
		return TRUE;
	}
	/*Delete data*/
	function delete_pengguna($username){
		$this->db->where('username',$username);
		$this->db->delete($this->T_pengguna);
		return TRUE;
	}

} 