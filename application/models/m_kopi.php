<?php 

class M_kopi extends CI_Model {

	public function tampil_data(){
		
		return $this->db->get('kopi')->result();
	}

	// untuk detail kopi
	public function join($id = null){

	
	$this->db->from('brand');
	$this->db->join('kopi', 'brand.id_brand = kopi.id_brand');
	if($id != null){
		$this->db->where('kopi.id_kopi', $id);
	}
	$query = $this->db->get();
	return $query->result();
	}

	public function detail_data($id = NULL){

		$query = $this->db->get_where('kopi',array('id_kopi' => $id))->row();
		return $query;
	}

	// halaman utaman kopi
	public function onjoin(){
		$this->db->select('*');
		$this->db->from('brand');
		$this->db->join('kopi', 'kopi.id_brand = brand.id_brand');
		$query = $this->db->get();
		return $query->result();
	}

	public function tampil_limit($limit,$start)
	{
		
		return $this->db->get('kopi', $limit, $start)->result();
	}


	public function countAllkopi()
	{
		return $this->db->get('kopi')->num_rows();
	}

	public function find($id)
	{
		$result = $this->db->where('id_kopi', $id)
						   ->limit(1)
						   ->get('kopi');
		if($result->num_rows() > 0 ){
			return $result->row();
		}else{
			return array();
		}
	}
	

	public function bayar() {

	date_default_timezone_set('Asia/Jakarta');
	$namadepan = $this->input->post('namadepan');
	$namabelakang = $this->input->post('namabelakang');
	$alamat = $this->input->post('alamat');
	$kota = $this->input->post('kota');
	$negara = $this->input->post('negara');
	$provinsi = $this->input->post('provinsi');
	$kodepos = $this->input->post('kodepos');

	$transaksi = array (
		'namadepan' => $namadepan,
		'namabelakang' => $namabelakang,
		'alamat' => $alamat,
		'kota' => $kota,
		'provinsi' => $provinsi,
		'negara' => $negara,
		'kodepos' => $kodepos,
		'tgl_pesan' => date('Y-m-d H:i:s'),
		'batas_bayar' => date ('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),

	);
	$this->db->insert('transaksi', $transaksi);
	$id_transaksi = $this->db->insert_id();


	foreach ($this->cart->contents() as $items ){
		$data = array(

			'id_transaksi'=>$id_transaksi,
			'id_kopi' => $items['id'],
			'nama_kopi' => $items['name'],
			'jumlah' => $items['qty'],
			'harga_kopi' => $items['price'],
		);
		$this->db->insert('invoice', $data);
	}
	return TRUE;

	}




}

 ?>