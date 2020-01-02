<?php
class M_login extends CI_Model {
	
	function cek_login($table, $data){
		return $this->db->get_where($table, $data);
	}
}
