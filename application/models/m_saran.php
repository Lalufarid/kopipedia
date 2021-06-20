<?php 


class M_saran extends CI_Model {

	public function input_data($data){
		$this->db->insert('saran', $data);
	}

}
 ?>
