<?php
class Mprestasi_mhs extends CI_Model{
	var $db;
	var $T_prestasi_mhs = 'mhs_prestasi'; 
	function __construct(){
		parent::__construct();
		$this->db=$this->load->database('default', TRUE);
	}
	function get_prestasi_mhs($WHERE=array()){
		$this->db->select('*');
		$this->db->join('sub_sub_prestasi','sub_sub_prestasi.id_sub_sub_prestasi=mhs_prestasi.id_sub_sub_prestasi');
		$this->db->join('sub_prestasi','sub_prestasi.id_sub_prestasi=sub_sub_prestasi.id_sub_prestasi');
		$this->db->join('prestasi','prestasi.id_prestasi=sub_prestasi.id_prestasi');
		$this->db->join('pengguna','pengguna.username=mhs_prestasi.nim');
		$this->db->where($WHERE);
		$query = $this->db->get($this->T_prestasi_mhs);
		return $query->result_array();
	}

	function get_prestasi_mhs_join($WHERE=array()){
		$this->db->select('*');
		$this->db->join('sub_sub_prestasi','sub_sub_prestasi.id_sub_sub_prestasi=mhs_prestasi.id_sub_sub_prestasi');
		$this->db->join('sub_prestasi','sub_prestasi.id_sub_prestasi=sub_sub_prestasi.id_sub_prestasi');
		$this->db->join('prestasi','prestasi.id_prestasi=sub_prestasi.id_prestasi');
		$this->db->join('mhs','mhs.nim=mhs_prestasi.nim');
		$this->db->where($WHERE);
		$query = $this->db->get('mhs_prestasi');
		return $query->result_array();
	}
	

	function insert_prestasi_mhs ($data){
		$this->db->insert($this->T_prestasi_mhs, $data);
		return TRUE;
	}
	function update_prestasi_mhs ($id_mhs_prestasi, $data){
		$this->db->where('id_mhs_prestasi', $id_mhs_prestasi);
		$this->db->update($this->T_prestasi_mhs, $data);
		return TRUE;
	}
	function delete_prestasi_mhs ($id_mhs_prestasi){
		$this->db->where('id_mhs_prestasi', $id_mhs_prestasi);
		$this->db->delete($this->T_prestasi_mhs);
		return TRUE;
	}


}