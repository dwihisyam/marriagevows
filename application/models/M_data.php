<?php
class M_data extends CI_Model {
	function tampil_data(){
		return $this->db->get('form');
	}
	
	function input_data($table, $data){
		$this->db->insert($table, $data);
	}

	function hapus($table, $where){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update($table, $where){
		return $this->db->get_where($table, $where);
	}

	function update_data($table, $data, $where){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
