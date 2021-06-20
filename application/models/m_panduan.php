<?php 

class M_panduan extends CI_Model{
	public function tampil_data(){
		
		return $this->db->get('panduan')->result_array();
	}

	public function detail_data($id = NULL){

		$query = $this->db->get_where('panduan',array('id_panduan' => $id))->row();
		return $query;
	}

		public function row_artikel()
	{
		return $this->db->get('panduan')->num_rows();
	}


	public function tampil1_data($limit,$start, $keyword = null)
	{
		if( $keyword){
			$this->db->like('judul_panduan', $keyword);
		}
		return $this->db->get('panduan', $limit, $start)->result_array();
	}
}

 ?>