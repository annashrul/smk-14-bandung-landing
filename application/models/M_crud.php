<?php 
/**
* 
*/
class M_crud extends CI_Model
{
	function input_login($data, $users){
		$this->db->insert('users', $data);
	}

	function input_jurusan($data, $tbl_jurusan){
		$query = $this->db->insert($tbl_jurusan, $data);
	}
}
 ?>