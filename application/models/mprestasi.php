<?php
class mprestasi extends CI_Model{
	var $db;
	var $T_prestasi = 'prestasi';
	
	function __construct(){
		parent::__construct();
		$this->db=$this->load->database('default', TRUE);
	}
	function get_prestasi($WHERE=array()){
		$this->db->select('id_prestasi,kategori');
		$this->db->where($WHERE);
		$query = $this->db->get($this->T_prestasi);
		return $query->result_array();
	}
	function get_sub_prestasi($WHERE=array()){
		$this->db->select('*');
		$this->db->where($WHERE);
		$query = $this->db->get('sub_prestasi');
		return $query->result_array();
	}
	function get_nama_prestasi($WHERE=array()){
		$this->db->select('*');
		$this->db->where($WHERE);
		$query = $this->db->get('sub_sub_prestasi');
		return $query->result_array();
	}
	
	function insert_prestasi ($data){
		$this->db->insert($this->T_prestasi, $data);
		return TRUE;
	}
	function update_prestasi ($id_prestasi, $data){
		$this->db->where('id_prestasi', $id_prestasi);
		$this->db->update($this->T_prestasi, $data);
		return TRUE;
	}
	function delete_prestasi ($id_prestasi){
		$this->db->where('id_prestasi', $id_prestasi);
		$this->db->delete($this->T_prestasi);
		return TRUE;
	}
}