<?php 

class M_artikel extends CI_Model{

	public function tampil_data (){

		return $this->db->get('artikel')->result_array();
	}
	public function detail_data($id = NULL){

		$query = $this->db->get_where('artikel',array('id_artikel' => $id))->row();
		return $query;
	}

	public function row_artikel()
	{
		return $this->db->get('artikel')->num_rows();
	}


	public function tampil1_data($limit,$start, $keyword = null)
	{
		if( $keyword){
			$this->db->like('judul_artikel', $keyword);
		}
		return $this->db->get('artikel', $limit, $start)->result_array();
	}



}


 ?>