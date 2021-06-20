<?php  

class M_beranda extends CI_Model {

	public function tampil_data () 
	{
		return $this->db->get('brand')->result();
	}

}

?>