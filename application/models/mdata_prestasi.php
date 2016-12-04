<?php
class mdata_prestasi extends CI_Model{
	var $db;
	var $T_data_prestasi = 'prestasi';
	/*Mengambil database*/
	function __construct(){
		parent::__construct();
		$this->db=$this->load->database('default',TRUE);
	}
	/*Mengambil data*/
	function get_data_prestasi($where=array()){
		$this->db->select('id_prestasi, kategori');
		$this->db->where($where);
		$query=$this->db->get($this->T_data_prestasi);
		return $query->result_array();
	}
	/*Memasukkan data*/
	function insert_data_prestasi($data){
		$this->db->insert($this->T_data_prestasi, $data);
		return TRUE;
	}
	/*Update data*/
	function update_data_prestasi($id_prestasi, $data){
		$this->db->where('id_prestasi',$id_prestasi);
		$this->db->update($this->T_data_prestasi,$data);
		return TRUE;
	}
	/*Delete data*/
	function delete_data_prestasi($id_prestasi){
		$this->db->where('id_prestasi',$id_prestasi);
		$this->db->delete($this->T_data_prestasi);
		return TRUE;
	}

} 