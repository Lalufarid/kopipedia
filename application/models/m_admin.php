<?php 


class M_admin extends CI_Model {
	public function tampil_data_artikel(){
		return $this->db->get('artikel');
	}
	public function tampil_data_admin(){
		return $this->db->get('admin');
	}
	public function tampil_data_brand(){
		return $this->db->get('brand');
	}
	public function tampil_limit($limit,$start)
	{
		
		return $this->db->get('kopi', $limit, $start)->result();
	}

	public function countAllkopi()
	{
		return $this->db->get('kopi')->num_rows();
	}

	public function countAllpanduan()
	{
		return $this->db->get('panduan')->num_rows();
	}
	public function tampil_limit_panduan($limit,$start)
	{
		
		return $this->db->get('panduan', $limit, $start)->result();
	}
	public function countAllartikel()
	{
		return $this->db->get('artikel')->num_rows();
	}
	public function tampil_limit_artikel($limit,$start)
	{
		
		return $this->db->get('artikel', $limit, $start)->result();
	}

	public function input_data_kopi($data){
		$this->db->insert('kopi', $data);
	}

	public function hapus_data_kopi($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function input_data_artikel($data){
		$this->db->insert('artikel', $data);
	}

	public function hapus_data_artikel($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function tampil_data_panduan(){
		return $this->db->get('panduan');
	}

	public function input_data_panduan($data){
		$this->db->insert('panduan', $data);
	}

	public function hapus_data_panduan($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function transaksi()
	{
		$result = $this->db->get('transaksi');
		if($result->num_rows() > 0 ){
			return $result->result();
		}else{
			return false;
		}
	}

	public function ambil_id_transaksi($id){

	$result = $this->db->where('id_transaksi', $id)->limit(1)->get('transaksi');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return false;
		}
	}
	public function ambil_id_pesanan($id){

	$result = $this->db->where('id_transaksi', $id)->get('invoice');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}


}


 ?>