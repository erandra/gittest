<?php
class mdata_sub_sub_prestasi extends CI_Model{
	var $db;
	var $T_data_sub_sub_prestasi = 'sub_sub_prestasi';
	/*Mengambil database*/
	function __construct(){
		parent::__construct();
		$this->db=$this->load->database('default',TRUE);
	}
	/*Mengambil data*/
	function get_data_sub_sub_prestasi($where=array()){
		$this->db->select('*');
		$this->db->join('sub_prestasi','sub_prestasi.id_sub_prestasi=sub_sub_prestasi.id_sub_prestasi');
		$this->db->join('prestasi','prestasi.id_prestasi=sub_prestasi.id_prestasi');
		$this->db->where($where);
		$query=$this->db->get($this->T_data_sub_sub_prestasi);
		return $query->result_array();
	}
	/*Memasukkan data*/
	function insert_data_sub_sub_prestasi($data){
		$this->db->insert($this->T_data_sub_sub_prestasi, $data);
		return TRUE;
	}
	/*Update data*/
	function update_data_sub_sub_prestasi($id_sub_sub_prestasi, $data){
		$this->db->where('id_sub_sub_prestasi',$id_sub_sub_prestasi);
		$this->db->update($this->T_data_sub_sub_prestasi,$data);
		return TRUE;
	}
	/*Delete data*/
	function delete_data_sub_sub_prestasi($id_sub_sub_prestasi){
		 

		$this->db->where('id_sub_sub_prestasi',$id_sub_sub_prestasi);
		$this->db->delete($this->T_data_sub_sub_prestasi);
		return TRUE;
	}

} 