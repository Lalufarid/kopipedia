<?php 


class Belanja extends CI_Controller{

public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') != '2')
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Anda Harus Login Terlebih Dahulu !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('auth/login');
		}
	}


	public function tambah_keranjang($id)
	{
		$kopi = $this->m_kopi->find($id);

		$data = array(
        'id'      => $kopi->id_kopi,
        'qty'     => 1,
        'price'   => $kopi->harga_kopi,
        'name'    => $kopi->nama_kopi,
        'berat'  => $kopi->berat_kopi,
        'variasi'  => $kopi->variasi_kopi,
        'gambar'  => $kopi->gambar_kopi,
        
		);
		$this->cart->insert($data); 
		redirect('dashboard/kopi');

	}

	public function detail_keranjang(){

		$this->load->view('templates/header_detail_keranjang');
		$this->load->view('detail_keranjang');
		$this->load->view('templates/footer_detail_kopi');
	}

	public function hapus_keranjang(){
		$this->cart->destroy();
		redirect('dashboard/kopi');
	}

	public function informasi(){

		
		$this->load->view('templates/header_informasi');
		$this->load->view('informasi');
		$this->load->view('templates/footer_detail_kopi');

		
	}

	public function pembayaran(){

		$is_processed = $this->m_kopi->bayar();
		if($is_processed){
		$this->cart->destroy();
		$this->load->view('templates/header_informasi');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer_detail_kopi');
		} else {
			echo "Maaf, Pesanan Anda Gagal diproses";
		}

	}
}

 ?>
