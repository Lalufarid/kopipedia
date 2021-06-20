<?php 

class M_kategori extends CI_Model{

	public function data_u50(){
		$angka = 50000;
		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->where('harga_kopi <', $angka);
		$query = $this->db->get();
		return $query->result();
	}
	public function data_50_100(){
		$angka1 = 50000;
		$angka2 = 100000;
		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->where('harga_kopi >', $angka1);
		$this->db->where('harga_kopi <', $angka2);
		$query = $this->db->get();
		return $query->result();
	}
	public function data_a100(){
		$angka = 100000;
		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->where('harga_kopi >', $angka);
		$query = $this->db->get();
		return $query->result();
	}
	public function data_b1(){
		$angka = 1;
		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->where('id_brand', $angka);
		$query = $this->db->get();
		return $query->result();
	}
	public function data_b2(){
		$angka = 2;
		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->where('id_brand', $angka);
		$query = $this->db->get();
		return $query->result();
	}
	public function data_b3(){
		$angka = 3;
		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->where('id_brand', $angka);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function data_b4(){
		$angka = 4;
		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->where('id_brand', $angka);
		$query = $this->db->get();
		return $query->result();
	}
	public function data_b5(){
		$angka = 5;
		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->where('id_brand', $angka);
		$query = $this->db->get();
		return $query->result();
	}
	public function data_b6(){
		$angka = 6;
		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->where('id_brand', $angka);
		$query = $this->db->get();
		return $query->result();
	}
	public function data_b7(){
		$angka = 7;
		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->where('id_brand', $angka);
		$query = $this->db->get();
		return $query->result();
	}
	public function data_b9(){
		$angka = 9;
		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->where('id_brand', $angka);
		$query = $this->db->get();
		return $query->result();
	}
	public function data_b10(){
		$angka = 10;
		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->where('id_brand', $angka);
		$query = $this->db->get();
		return $query->result();
	}
	public function data_b11(){
		$angka = 11;
		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->where('id_brand', $angka);
		$query = $this->db->get();
		return $query->result();
	}
	public function data_caramel(){

		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->like('karakter_rasa', 'caramel', 'both');
		$query = $this->db->get();
		return $query->result();
	}
	public function data_chocolate(){

		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->like('karakter_rasa', 'chocolate', 'both');
		$query = $this->db->get();
		return $query->result();
	}
	public function data_floral(){

		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->like('karakter_rasa', 'floral', 'both');
		$query = $this->db->get();
		return $query->result();
	}
	public function data_fruity(){

		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->like('karakter_rasa', 'fruity', 'both');
		$query = $this->db->get();
		return $query->result();
	}
	public function data_lemon(){

		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->like('karakter_rasa', 'lemon', 'both');
		$query = $this->db->get();
		return $query->result();
	}
	public function data_blacktea(){

		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->like('karakter_rasa', 'blacktea', 'both');
		$query = $this->db->get();
		return $query->result();
	}
	public function data_blueberry(){

		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->like('karakter_rasa', 'blueberry', 'both');
		$query = $this->db->get();
		return $query->result();
	}
}

 ?>