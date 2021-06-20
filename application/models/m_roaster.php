<?php 

class M_roaster extends CI_Model{
	public function tampil_data(){
		
		return $this->db->get('brand')->result();

	}

	public function detail_data($id = NULL){

		$query = $this->db->get_where('brand',array('id_brand' => $id))->row();
		return $query;
	}

	public function join($id = null){

	
	$this->db->from('brand');
	$this->db->join('kopi', 'kopi.id_brand = brand.id_brand');
	if($id != null){
		$this->db->where('kopi.id_brand', $id);
	}
	$query = $this->db->get();
	return $query->result();
	}
}

 ?>